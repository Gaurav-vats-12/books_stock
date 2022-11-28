<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nylig opprettet',
    'recently_created_pages' => 'Nylig opprettede sider',
    'recently_updated_pages' => 'Nylig oppdaterte sider',
    'recently_created_chapters' => 'Nylig opprettede kapitler',
    'recently_created_books' => 'Nylig opprettede bøker',
    'recently_created_shelves' => 'Nylig opprettede bokhyller',
    'recently_update' => 'Nylig oppdatert',
    'recently_viewed' => 'Nylig vist',
    'recent_activity' => 'Nylig aktivitet',
    'create_now' => 'Opprett en nå',
    'revisions' => 'Revisjoner',
    'meta_revision' => 'Revisjon #:revisionCount',
    'meta_created' => 'Opprettet :timeLength',
    'meta_created_name' => 'Opprettet :timeLength av :user',
    'meta_updated' => 'Oppdatert :timeLength',
    'meta_updated_name' => 'Oppdatert :timeLength av :user',
    'meta_owned_name' => 'Eies av :user',
    'meta_reference_page_count' => 'Referenced on 1 page|Referenced on :count pages',
    'entity_select' => 'Velg entitet',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Bilder',
    'my_recent_drafts' => 'Mine nylige utkast',
    'my_recently_viewed' => 'Mine nylige visninger',
    'my_most_viewed_favourites' => 'Mine mest sette favoritter',
    'my_favourites' => 'Mine favoritter',
    'no_pages_viewed' => 'Du har ikke sett på noen sider',
    'no_pages_recently_created' => 'Ingen sider har nylig blitt opprettet',
    'no_pages_recently_updated' => 'Ingen sider har nylig blitt oppdatert',
    'export' => 'Eksporter',
    'export_html' => 'Nettside med alt',
    'export_pdf' => 'PDF Fil',
    'export_text' => 'Tekstfil',
    'export_md' => 'Markdownfil',

    // Permissions and restrictions
    'permissions' => 'Tilganger',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Lagre tillatelser',
    'permissions_owner' => 'Eier',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Søkeresultater',
    'search_total_results_found' => ':count resultater funnet|:count totalt',
    'search_clear' => 'Nullstill søk',
    'search_no_pages' => 'Ingen sider passer med søket',
    'search_for_term' => 'Søk etter :term',
    'search_more' => 'Flere resultater',
    'search_advanced' => 'Avansert søk',
    'search_terms' => 'Søkeord',
    'search_content_type' => 'Innholdstype',
    'search_exact_matches' => 'Eksakte ord',
    'search_tags' => 'Søk på merker',
    'search_options' => 'ALternativer',
    'search_viewed_by_me' => 'Sett av meg',
    'search_not_viewed_by_me' => 'Ikke sett av meg',
    'search_permissions_set' => 'Tilganger er angitt',
    'search_created_by_me' => 'Opprettet av meg',
    'search_updated_by_me' => 'Oppdatert av meg',
    'search_owned_by_me' => 'Eid av meg',
    'search_date_options' => 'Datoalternativer',
    'search_updated_before' => 'Oppdatert før',
    'search_updated_after' => 'Oppdatert etter',
    'search_created_before' => 'Opprettet før',
    'search_created_after' => 'Opprettet etter',
    'search_set_date' => 'Angi dato',
    'search_update' => 'Oppdater søk',

    // Shelves
    'shelf' => 'Hylle',
    'shelves' => 'Hyller',
    'x_shelves' => ':count hylle|:count hyller',
    'shelves_empty' => 'Ingen bokhyller er opprettet',
    'shelves_create' => 'Opprett ny bokhylle',
    'shelves_popular' => 'Populære bokhyller',
    'shelves_new' => 'Nye bokhyller',
    'shelves_new_action' => 'Ny bokhylle',
    'shelves_popular_empty' => 'De mest populære bokhyllene blir vist her.',
    'shelves_new_empty' => 'Nylig opprettede bokhyller vises her.',
    'shelves_save' => 'Lagre hylle',
    'shelves_books' => 'Bøker på denne hyllen',
    'shelves_add_books' => 'Legg til bøker på denne hyllen',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'INgen bøker er stablet i denne hylla',
    'shelves_edit_and_assign' => 'Endre hylla for å legge til bøker',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Kopier tilganger til bøkene på hylla',
    'shelves_copy_permissions' => 'Kopier tilganger',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Bok',
    'books' => 'Bøker',
    'x_books' => ':count bok|:count bøker',
    'books_empty' => 'Ingen bøker er skrevet',
    'books_popular' => 'Populære bøker',
    'books_recent' => 'Nylige bøker',
    'books_new' => 'Nye bøker',
    'books_new_action' => 'Ny bok',
    'books_popular_empty' => 'De mest populære bøkene',
    'books_new_empty' => 'Siste utgivelser vises her.',
    'books_create' => 'Skriv ny bok',
    'books_delete' => 'Brenn bok',
    'books_delete_named' => 'Brenn boken :bookName',
    'books_delete_explain' => 'Dette vil brenne boken «:bookName». Alle sider i boken vil fordufte for godt.',
    'books_delete_confirmation' => 'Er du sikker på at du vil brenne boken?',
    'books_edit' => 'Endre bok',
    'books_edit_named' => 'Endre boken :bookName',
    'books_form_book_name' => 'Boktittel',
    'books_save' => 'Lagre bok',
    'books_permissions' => 'Boktilganger',
    'books_permissions_updated' => 'Boktilganger oppdatert',
    'books_empty_contents' => 'Ingen sider eller kapitler finnes i denne boken.',
    'books_empty_create_page' => 'Skriv en ny side',
    'books_empty_sort_current_book' => 'Sorter innholdet i boken',
    'books_empty_add_chapter' => 'Start på nytt kapittel',
    'books_permissions_active' => 'Boktilganger er aktive',
    'books_search_this' => 'Søk i boken',
    'books_navigation' => 'Boknavigasjon',
    'books_sort' => 'Sorter bokinnhold',
    'books_sort_named' => 'Sorter boken :bookName',
    'books_sort_name' => 'Sorter på navn',
    'books_sort_created' => 'Sorter på opprettet dato',
    'books_sort_updated' => 'Sorter på oppdatert dato',
    'books_sort_chapters_first' => 'Kapitler først',
    'books_sort_chapters_last' => 'Kapitler sist',
    'books_sort_show_other' => 'Vis andre bøker',
    'books_sort_save' => 'Lagre sortering',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Kapittel',
    'chapters' => 'Kapitler',
    'x_chapters' => ':count Kapittel|:count Kapitler',
    'chapters_popular' => 'Populære kapittler',
    'chapters_new' => 'Nytt kapittel',
    'chapters_create' => 'Skriv nytt kapittel',
    'chapters_delete' => 'Riv ut kapittel',
    'chapters_delete_named' => 'Riv ut kapittelet :chapterName',
    'chapters_delete_explain' => 'Du ønsker å rive ut kapittelet «:chapterName». Alle sidene vil bli flyttet ut av kapittelet og vil ligge direkte i boka.',
    'chapters_delete_confirm' => 'Er du sikker på at du vil rive ut dette kapittelet?',
    'chapters_edit' => 'Endre kapittel',
    'chapters_edit_named' => 'Endre kapittelet :chapterName',
    'chapters_save' => 'Lagre kapittel',
    'chapters_move' => 'Flytt kapittel',
    'chapters_move_named' => 'Flytt kapittelet :chapterName',
    'chapter_move_success' => 'Kapittelet ble flyttet til :bookName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Kapitteltilganger',
    'chapters_empty' => 'Det finnes ingen sider i dette kapittelet.',
    'chapters_permissions_active' => 'Kapitteltilganger er aktivert',
    'chapters_permissions_success' => 'Kapitteltilgager er oppdatert',
    'chapters_search_this' => 'Søk i dette kapittelet',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Side',
    'pages' => 'Sider',
    'x_pages' => ':count side|:count sider',
    'pages_popular' => 'Populære sider',
    'pages_new' => 'Ny side',
    'pages_attachments' => 'Vedlegg',
    'pages_navigation' => 'Sidenavigasjon',
    'pages_delete' => 'Riv ut side',
    'pages_delete_named' => 'Riv ut siden :pageName',
    'pages_delete_draft_named' => 'Kast sideutkast :pageName',
    'pages_delete_draft' => 'Kast sideutkast',
    'pages_delete_success' => 'Siden er revet ut',
    'pages_delete_draft_success' => 'Sideutkast er kastet',
    'pages_delete_confirm' => 'Er du sikker på at du vil rive ut siden?',
    'pages_delete_draft_confirm' => 'Er du sikker på at du vil forkaste utkastet?',
    'pages_editing_named' => 'Endrer :pageName',
    'pages_edit_draft_options' => 'Utkastsalternativer',
    'pages_edit_save_draft' => 'Lagre utkast',
    'pages_edit_draft' => 'Endre utkast',
    'pages_editing_draft' => 'Redigerer utkast',
    'pages_editing_page' => 'Redigerer side',
    'pages_edit_draft_save_at' => 'Ukast lagret under ',
    'pages_edit_delete_draft' => 'Forkast utkast',
    'pages_edit_discard_draft' => 'Gi opp utkast',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Angi endringslogg',
    'pages_edit_enter_changelog_desc' => 'Gi en kort beskrivelse av endringene dine',
    'pages_edit_enter_changelog' => 'Se endringslogg',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Lagre side',
    'pages_title' => 'Sidetittel',
    'pages_name' => 'Sidenavn',
    'pages_md_editor' => 'Tekstbehandler',
    'pages_md_preview' => 'Forhåndsvisning',
    'pages_md_insert_image' => 'Lim inn bilde',
    'pages_md_insert_link' => 'Lim in lenke',
    'pages_md_insert_drawing' => 'Lim inn tegning',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_not_in_chapter' => 'Siden tilhører ingen kapittel',
    'pages_move' => 'Flytt side',
    'pages_move_success' => 'Siden ble flyttet til ":parentName"',
    'pages_copy' => 'Kopier side',
    'pages_copy_desination' => 'Destinasjon',
    'pages_copy_success' => 'Siden ble flyttet',
    'pages_permissions' => 'Sidetilganger',
    'pages_permissions_success' => 'Sidens tilganger ble endret',
    'pages_revision' => 'Revisjon',
    'pages_revisions' => 'Sidens revisjoner',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Revisjoner for :pageName',
    'pages_revision_named' => 'Revisjoner for :pageName',
    'pages_revision_restored_from' => 'Gjenopprettet fra #:id; :summary',
    'pages_revisions_created_by' => 'Skrevet av',
    'pages_revisions_date' => 'Revideringsdato',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revisjon #:id',
    'pages_revisions_numbered_changes' => 'Endringer på revisjon #:id',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Endringslogg',
    'pages_revisions_changes' => 'Endringer',
    'pages_revisions_current' => 'Siste versjon',
    'pages_revisions_preview' => 'Forhåndsvisning',
    'pages_revisions_restore' => 'Gjenopprett',
    'pages_revisions_none' => 'Denne siden har ingen revisjoner',
    'pages_copy_link' => 'Kopier lenke',
    'pages_edit_content_link' => 'Endre innhold',
    'pages_permissions_active' => 'Sidetilganger er aktive',
    'pages_initial_revision' => 'Første publisering',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Ny side',
    'pages_editing_draft_notification' => 'Du skriver på et utkast som sist ble lagret :timeDiff.',
    'pages_draft_edited_notification' => 'Siden har blitt endret siden du startet. Det anbefales at du forkaster dine endringer.',
    'pages_draft_page_changed_since_creation' => 'Denne siden er blitt oppdatert etter at dette utkastet ble opprettet. Det anbefales at du forkaster dette utkastet, eller er ekstra forsiktig slik at du ikke overskriver noen sideendringer.',
    'pages_draft_edit_active' => [
        'start_a' => ':count forfattere har begynt å endre denne siden.',
        'start_b' => ':userName skriver på siden for øyeblikket',
        'time_a' => 'siden sist siden ble oppdatert',
        'time_b' => 'i løpet av de siste :minCount minuttene',
        'message' => ':start :time. Prøv å ikke overskriv hverandres endringer!',
    ],
    'pages_draft_discarded' => 'Forkastet, viser nå siste endringer fra siden slik den er lagret.',
    'pages_specific' => 'Bestemt side',
    'pages_is_template' => 'Sidemal',

    // Editor Sidebar
    'page_tags' => 'Sidemerker',
    'chapter_tags' => 'Kapittelmerker',
    'book_tags' => 'Bokmerker',
    'shelf_tags' => 'Hyllemerker',
    'tag' => 'Merke',
    'tags' =>  'Merker',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Merketittel',
    'tag_value' => 'Merkeverdi (Valgfritt)',
    'tags_explain' => "Legg til merker for å kategorisere innholdet ditt. \n Du kan legge til merkeverdier for å beskrive dem ytterligere.",
    'tags_add' => 'Legg til flere merker',
    'tags_remove' => 'Fjern merke',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Vedlegg',
    'attachments_explain' => 'Last opp vedlegg eller legg til lenker for å berike innholdet. Disse vil vises i sidestolpen på siden.',
    'attachments_explain_instant_save' => 'Endringer her blir lagret med en gang.',
    'attachments_items' => 'Vedlegg',
    'attachments_upload' => 'Last opp vedlegg',
    'attachments_link' => 'Fest lenke',
    'attachments_set_link' => 'Angi lenke',
    'attachments_delete' => 'Er du sikker på at du vil fjerne vedlegget?',
    'attachments_dropzone' => 'Dra og slipp eller trykk her for å feste vedlegg',
    'attachments_no_files' => 'Ingen vedlegg er lastet opp',
    'attachments_explain_link' => 'Du kan feste lenker til denne. Det kan være henvisning til andre sider, bøker etc. eller lenker fra nettet.',
    'attachments_link_name' => 'Lenkenavn',
    'attachment_link' => 'Vedleggslenke',
    'attachments_link_url' => 'Lenke til vedlegg',
    'attachments_link_url_hint' => 'Adresse til lenke eller vedlegg',
    'attach' => 'Fest',
    'attachments_insert_link' => 'Fest vedleggslenke',
    'attachments_edit_file' => 'Endre vedlegg',
    'attachments_edit_file_name' => 'Vedleggsnavn',
    'attachments_edit_drop_upload' => 'Dra og slipp eller trykk her for å oppdatere eller overskrive',
    'attachments_order_updated' => 'Vedleggssortering endret',
    'attachments_updated_success' => 'Vedleggsdetaljer endret',
    'attachments_deleted' => 'Vedlegg fjernet',
    'attachments_file_uploaded' => 'Vedlegg ble lastet opp',
    'attachments_file_updated' => 'Vedlegget ble oppdatert',
    'attachments_link_attached' => 'Lenken ble festet til siden',
    'templates' => 'Maler',
    'templates_set_as_template' => 'Siden er en mal',
    'templates_explain_set_as_template' => 'Du kan angi denne siden som en mal slik at innholdet kan brukes når du oppretter andre sider. Andre brukere vil kunne bruke denne malen hvis de har visningstillatelser for denne siden.',
    'templates_replace_content' => 'Bytt sideinnhold',
    'templates_append_content' => 'Legg til neders på siden',
    'templates_prepend_content' => 'Legg til øverst på siden',

    // Profile View
    'profile_user_for_x' => 'Medlem i :time',
    'profile_created_content' => 'Har skrevet',
    'profile_not_created_pages' => ':userName har ikke forfattet noen sider',
    'profile_not_created_chapters' => ':userName har ikke opprettet noen kapitler',
    'profile_not_created_books' => ':userName har ikke laget noen bøker',
    'profile_not_created_shelves' => ':userName har ikke hengt opp noen hyller',

    // Comments
    'comment' => 'Kommentar',
    'comments' => 'Kommentarer',
    'comment_add' => 'Skriv kommentar',
    'comment_placeholder' => 'Skriv en kommentar her',
    'comment_count' => '{0} Ingen kommentarer|{1} 1 kommentar|[2,*] :count kommentarer',
    'comment_save' => 'Publiser kommentar',
    'comment_saving' => 'Publiserer ...',
    'comment_deleting' => 'Fjerner...',
    'comment_new' => 'Ny kommentar',
    'comment_created' => 'kommenterte :createDiff',
    'comment_updated' => 'Oppdatert :updateDiff av :username',
    'comment_deleted_success' => 'Kommentar fjernet',
    'comment_created_success' => 'Kommentar skrevet',
    'comment_updated_success' => 'Kommentar endret',
    'comment_delete_confirm' => 'Er du sikker på at du vil fjerne kommentaren?',
    'comment_in_reply_to' => 'Som svar til :commentId',

    // Revision
    'revision_delete_confirm' => 'Vil du slette revisjonen?',
    'revision_restore_confirm' => 'Vil du gjenopprette revisjonen? Innholdet på siden vil bli overskrevet med denne revisjonen.',
    'revision_delete_success' => 'Revisjonen ble slettet',
    'revision_cannot_delete_latest' => 'CKan ikke slette siste revisjon.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',
];
