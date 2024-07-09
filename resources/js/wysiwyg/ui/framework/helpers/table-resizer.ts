import {$getNearestNodeFromDOMNode, LexicalEditor} from "lexical";
import {el} from "../../../helpers";
import {MouseDragTracker, MouseDragTrackerDistance} from "./mouse-drag-tracker";
import {$getTableColumnWidth, $setTableColumnWidth, CustomTableNode} from "../../../nodes/custom-table";
import {TableRowNode} from "@lexical/table";

type MarkerDomRecord = {x: HTMLElement, y: HTMLElement};

class TableResizer {
    protected editor: LexicalEditor;
    protected editArea: HTMLElement;
    protected markerDom: MarkerDomRecord|null = null;
    protected mouseTracker: MouseDragTracker|null = null;
    protected dragging: boolean = false;
    protected targetCell: HTMLElement|null = null;
    protected xMarkerAtStart : boolean = false;
    protected yMarkerAtStart : boolean = false;

    constructor(editor: LexicalEditor, editArea: HTMLElement) {
        this.editor = editor;
        this.editArea = editArea;

        this.setupListeners();
    }

    teardown() {
        this.editArea.removeEventListener('mousemove', this.onCellMouseMove);
        if (this.mouseTracker) {
            this.mouseTracker.teardown();
        }
    }

    protected setupListeners() {
        this.onCellMouseMove = this.onCellMouseMove.bind(this);
        this.editArea.addEventListener('mousemove', this.onCellMouseMove);
    }

    protected onCellMouseMove(event: MouseEvent) {
        const cell = (event.target as HTMLElement).closest('td,th') as HTMLElement;
        if (!cell || this.dragging) {
            return;
        }

        const rect = cell.getBoundingClientRect();
        const midX = rect.left + (rect.width / 2);
        const midY = rect.top + (rect.height / 2);

        this.targetCell = cell;
        this.xMarkerAtStart = event.clientX <= midX;
        this.yMarkerAtStart = event.clientY <= midY;

        const xMarkerPos = this.xMarkerAtStart ? rect.left : rect.right;
        const yMarkerPos = this.yMarkerAtStart ? rect.top : rect.bottom;
        this.updateMarkersTo(cell, xMarkerPos, yMarkerPos);
    }

    protected updateMarkersTo(cell: HTMLElement, xPos: number, yPos: number) {
        const markers: MarkerDomRecord = this.getMarkers();
        const table = cell.closest('table') as HTMLElement;
        const tableRect = table.getBoundingClientRect();

        markers.x.style.left = xPos + 'px';
        markers.x.style.height = tableRect.height + 'px';
        markers.x.style.top = tableRect.top + 'px';

        markers.y.style.top = yPos + 'px';
        markers.y.style.left = tableRect.left + 'px';
        markers.y.style.width = tableRect.width + 'px';
    }

    protected getMarkers(): MarkerDomRecord {
        if (!this.markerDom) {
            this.markerDom = {
                x: el('div', {class: 'editor-table-marker editor-table-marker-column'}),
                y: el('div', {class: 'editor-table-marker editor-table-marker-row'}),
            }
            const wrapper = el('div', {
                class: 'editor-table-marker-wrap',
            }, [this.markerDom.x, this.markerDom.y]);
            this.editArea.after(wrapper);
            this.watchMarkerMouseDrags(wrapper);
        }

        return this.markerDom;
    }

    protected watchMarkerMouseDrags(wrapper: HTMLElement) {
        const _this = this;
        let markerStart: number = 0;
        let markerProp: 'left' | 'top' = 'left';

        this.mouseTracker = new MouseDragTracker(wrapper, '.editor-table-marker', {
            down(event: MouseEvent, marker: HTMLElement) {
                marker.classList.add('active');
                _this.dragging = true;

                markerProp = marker.classList.contains('editor-table-marker-column') ? 'left' : 'top';
                markerStart = Number(marker.style[markerProp].replace('px', ''));
            },
            move(event: MouseEvent, marker: HTMLElement, distance: MouseDragTrackerDistance) {
                  marker.style[markerProp] = (markerStart + distance[markerProp === 'left' ? 'x' : 'y']) + 'px';
            },
            up(event: MouseEvent, marker: HTMLElement, distance: MouseDragTrackerDistance) {
                marker.classList.remove('active');
                marker.style.left = '0';
                marker.style.top = '0';

                _this.dragging = false;
                const parentTable = _this.targetCell?.closest('table');

                if (markerProp === 'left' && _this.targetCell && parentTable) {
                    let cellIndex = _this.getTargetCellColumnIndex();
                    let change = distance.x;
                    if (_this.xMarkerAtStart && cellIndex > 0) {
                        cellIndex -= 1;
                    } else if  (_this.xMarkerAtStart && cellIndex === 0) {
                        change = -change;
                    }

                    _this.editor.update(() => {
                        const table = $getNearestNodeFromDOMNode(parentTable);
                        if (table instanceof CustomTableNode) {
                            const originalWidth = $getTableColumnWidth(_this.editor, table, cellIndex);
                            const newWidth = Math.max(originalWidth + change, 10);
                            $setTableColumnWidth(table, cellIndex, newWidth);
                        }
                    });
                }

                if (markerProp === 'top' && _this.targetCell) {
                    const cellElement = _this.targetCell;

                    _this.editor.update(() => {
                        const cellNode = $getNearestNodeFromDOMNode(cellElement);
                        const rowNode = cellNode?.getParent();
                        let rowIndex = rowNode?.getIndexWithinParent() || 0;

                        let change = distance.y;
                        if (_this.yMarkerAtStart && rowIndex > 0) {
                            rowIndex -= 1;
                        } else if  (_this.yMarkerAtStart && rowIndex === 0) {
                            change = -change;
                        }

                        const targetRow = rowNode?.getParent()?.getChildren()[rowIndex];
                        if (targetRow instanceof TableRowNode) {
                            const height  = targetRow.getHeight() || 0;
                            const newHeight = Math.max(height + change, 10);
                            targetRow.setHeight(newHeight);
                        }
                    });
                }
            }
        });
    }

    protected getTargetCellColumnIndex(): number {
        const cell = this.targetCell;
        if (cell === null) {
            return -1;
        }

        let index = 0;
        const row = cell.parentElement;
        for (const rowCell of row?.children || []) {
            let size = Number(rowCell.getAttribute('colspan'));
            if (Number.isNaN(size) || size < 1) {
                size = 1;
            }

            index += size;

            if (rowCell === cell) {
                return index - 1;
            }
        }

        return -1;
    }
}


export function registerTableResizer(editor: LexicalEditor, editorArea: HTMLElement): (() => void) {
    const resizer = new TableResizer(editor, editorArea);

    return () => {
        resizer.teardown();
    };
}