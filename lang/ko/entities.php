<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '최근에 수정함',
    'recently_created_pages' => '최근에 만든 문서',
    'recently_updated_pages' => '최근에 수정한 문서',
    'recently_created_chapters' => '최근에 만든 챕터',
    'recently_created_books' => '최근에 만든 책',
    'recently_created_shelves' => '최근에 만든 책꽂이',
    'recently_update' => '최근에 수정함',
    'recently_viewed' => '최근에 읽음',
    'recent_activity' => '최근에 활동함',
    'create_now' => '바로 만들기',
    'revisions' => '수정본',
    'meta_revision' => '판본 #:revisionCount',
    'meta_created' => '만듦 :timeLength',
    'meta_created_name' => '만듦 :timeLength, :user',
    'meta_updated' => '수정함 :timeLength',
    'meta_updated_name' => '수정함 :timeLength, :user',
    'meta_owned_name' => '소유함 :user',
    'meta_reference_page_count' => 'Referenced on :count page|Referenced on :count pages',
    'entity_select' => '항목 선택',
    'entity_select_lack_permission' => '이 항목을 선택하기 위해 필요한 권한이 없습니다',
    'images' => '이미지',
    'my_recent_drafts' => '내 최근의 초안 문서',
    'my_recently_viewed' => '내가 읽은 문서',
    'my_most_viewed_favourites' => '많이 본 북마크',
    'my_favourites' => '북마크',
    'no_pages_viewed' => '문서 없음',
    'no_pages_recently_created' => '문서 없음',
    'no_pages_recently_updated' => '문서 없음',
    'export' => '파일로 받기',
    'export_html' => 'Contained Web(.html) 파일',
    'export_pdf' => 'PDF 파일',
    'export_text' => 'Plain Text(.txt) 파일',
    'export_md' => 'Markdown(.md) 파일',

    // Permissions and restrictions
    'permissions' => '권한',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => '권한 저장',
    'permissions_owner' => '소유자',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => '검색 결과',
    'search_total_results_found' => ':count개|총 :count개',
    'search_clear' => '검색 지우기',
    'search_no_pages' => '결과 없음',
    'search_for_term' => ':term 검색',
    'search_more' => '더 많은 결과',
    'search_advanced' => '고급 검색',
    'search_terms' => '용어 검색',
    'search_content_type' => '형식',
    'search_exact_matches' => '정확히 일치',
    'search_tags' => '꼬리표 일치',
    'search_options' => '선택',
    'search_viewed_by_me' => '내가 읽음',
    'search_not_viewed_by_me' => '내가 읽지 않음',
    'search_permissions_set' => '권한 설정함',
    'search_created_by_me' => '내가 만듦',
    'search_updated_by_me' => '내가 수정함',
    'search_owned_by_me' => '내가 소유함',
    'search_date_options' => '날짜',
    'search_updated_before' => '이전에 수정함',
    'search_updated_after' => '이후에 수정함',
    'search_created_before' => '이전에 만듦',
    'search_created_after' => '이후에 만듦',
    'search_set_date' => '날짜 설정',
    'search_update' => '검색',

    // Shelves
    'shelf' => '책꽂이',
    'shelves' => '책꽂이',
    'x_shelves' => '책꽂이 :count개|총 :count개',
    'shelves_empty' => '만든 책꽂이가 없습니다.',
    'shelves_create' => '책꽂이 만들기',
    'shelves_popular' => '많이 읽은 책꽂이',
    'shelves_new' => '새로운 책꽂이',
    'shelves_new_action' => '새로운 책꽂이',
    'shelves_popular_empty' => '많이 읽은 책꽂이 목록',
    'shelves_new_empty' => '새로운 책꽂이 목록',
    'shelves_save' => '저장',
    'shelves_books' => '이 책꽂이에 있는 책들',
    'shelves_add_books' => '이 책꽂이에 책 추가',
    'shelves_drag_books' => '책을 이 책장에 추가하려면 아래로 드래그하세요',
    'shelves_empty_contents' => '이 책꽂이에 책이 없습니다.',
    'shelves_edit_and_assign' => '책꽂이 바꾸기로 책을 추가하세요.',
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
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => '권한 맞춤',
    'shelves_copy_permissions' => '실행',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => '책',
    'books' => '책',
    'x_books' => '책 :count개|총 :count개',
    'books_empty' => '만든 책이 없습니다.',
    'books_popular' => '많이 읽은 책',
    'books_recent' => '최근에 읽은 책',
    'books_new' => '새로운 책',
    'books_new_action' => '새로운 책',
    'books_popular_empty' => '많이 읽은 책 목록',
    'books_new_empty' => '새로운 책 목록',
    'books_create' => '책 만들기',
    'books_delete' => '책 삭제하기',
    'books_delete_named' => ':bookName(을)를 지웁니다.',
    'books_delete_explain' => ':bookName에 있는 모든 챕터와 문서도 지웁니다.',
    'books_delete_confirmation' => '이 책을 지울 건가요?',
    'books_edit' => '책 바꾸기',
    'books_edit_named' => ':bookName(을)를 바꿉니다.',
    'books_form_book_name' => '책 이름',
    'books_save' => '저장',
    'books_permissions' => '책 권한',
    'books_permissions_updated' => '권한 저장함',
    'books_empty_contents' => '이 책에 챕터나 문서가 없습니다.',
    'books_empty_create_page' => '문서 만들기',
    'books_empty_sort_current_book' => '읽고 있는 책 정렬',
    'books_empty_add_chapter' => '챕터 만들기',
    'books_permissions_active' => '책 권한 허용함',
    'books_search_this' => '이 책에서 검색',
    'books_navigation' => '목차',
    'books_sort' => '다른 책들',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => ':bookName 정렬',
    'books_sort_name' => '제목',
    'books_sort_created' => '만든 날짜',
    'books_sort_updated' => '수정한 날짜',
    'books_sort_chapters_first' => '챕터 우선',
    'books_sort_chapters_last' => '문서 우선',
    'books_sort_show_other' => '다른 책들',
    'books_sort_save' => '적용',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => '책 복사하기',
    'books_copy_success' => '책 복사함',

    // Chapters
    'chapter' => '챕터',
    'chapters' => '챕터',
    'x_chapters' => '챕터 :count개|총 :count개',
    'chapters_popular' => '많이 읽은 챕터',
    'chapters_new' => '새로운 챕터',
    'chapters_create' => '챕터 만들기',
    'chapters_delete' => '챕터 삭제하기',
    'chapters_delete_named' => ':chapterName(을)를 지웁니다.',
    'chapters_delete_explain' => '\':ChapterName\'에 있는 모든 페이지도 지웁니다.',
    'chapters_delete_confirm' => '이 챕터를 지울 건가요?',
    'chapters_edit' => '챕터 바꾸기',
    'chapters_edit_named' => ':chapterName 바꾸기',
    'chapters_save' => '저장',
    'chapters_move' => '챕터 이동하기',
    'chapters_move_named' => ':chapterName 이동하기',
    'chapters_copy' => '챕터 복사하기',
    'chapters_copy_success' => '챕터 복사함',
    'chapters_permissions' => '챕터 권한',
    'chapters_empty' => '이 챕터에 문서가 없습니다.',
    'chapters_permissions_active' => '문서 권한 허용함',
    'chapters_permissions_success' => '권한 저장함',
    'chapters_search_this' => '이 챕터에서 검색',
    'chapter_sort_book' => '책 정렬하기',

    // Pages
    'page' => '문서',
    'pages' => '문서',
    'x_pages' => '문서 :count개|총 :count개',
    'pages_popular' => '많이 읽은 문서',
    'pages_new' => '새로운 문서',
    'pages_attachments' => '첨부',
    'pages_navigation' => '목차',
    'pages_delete' => '문서 삭제하기',
    'pages_delete_named' => ':pageName 삭제하기',
    'pages_delete_draft_named' => ':pageName 초안 문서 삭제하기',
    'pages_delete_draft' => '초안 문서 삭제하기',
    'pages_delete_success' => '문서 지움',
    'pages_delete_draft_success' => '초안 문서 지움',
    'pages_delete_confirm' => '이 문서를 지울 건가요?',
    'pages_delete_draft_confirm' => '이 초안을 지울 건가요?',
    'pages_editing_named' => ':pageName 수정',
    'pages_edit_draft_options' => '초안 문서 옵션',
    'pages_edit_save_draft' => '초안으로 저장',
    'pages_edit_draft' => '초안 문서 수정',
    'pages_editing_draft' => '초안 문서 수정',
    'pages_editing_page' => '문서 수정',
    'pages_edit_draft_save_at' => '보관함: ',
    'pages_edit_delete_draft' => '초안 삭제',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => '폐기',
    'pages_edit_switch_to_markdown' => '마크다운 편집기로 전환',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'WYSIWYG 편집기로 전환',
    'pages_edit_set_changelog' => '수정본 설명',
    'pages_edit_enter_changelog_desc' => '수정본 설명',
    'pages_edit_enter_changelog' => '설명',
    'pages_editor_switch_title' => '편집기 전환',
    'pages_editor_switch_are_you_sure' => '이 페이지의 편집기를 변경하시겠어요?',
    'pages_editor_switch_consider_following' => '편집기를 전환할 때에 다음 사항들을 고려하세요:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => '저장',
    'pages_title' => '문서 제목',
    'pages_name' => '문서 이름',
    'pages_md_editor' => '에디터',
    'pages_md_preview' => '미리 보기',
    'pages_md_insert_image' => '이미지 추가',
    'pages_md_insert_link' => '내부 링크',
    'pages_md_insert_drawing' => '드로잉 추가',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_not_in_chapter' => '챕터에 있는 문서가 아닙니다.',
    'pages_move' => '문서 이동하기',
    'pages_copy' => '문서 복제',
    'pages_copy_desination' => '복제할 위치',
    'pages_copy_success' => '복제함',
    'pages_permissions' => '문서 권한',
    'pages_permissions_success' => '문서 권한 바꿈',
    'pages_revision' => '수정본',
    'pages_revisions' => '문서 수정본',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => ':pageName 수정본',
    'pages_revision_named' => ':pageName 수정본',
    'pages_revision_restored_from' => '#:id; :summary에서 복구함',
    'pages_revisions_created_by' => '만든 사용자',
    'pages_revisions_date' => '수정한 날짜',
    'pages_revisions_number' => 'No.',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => '수정본 :id',
    'pages_revisions_numbered_changes' => '수정본 :id에서 바꾼 부분',
    'pages_revisions_editor' => '편집기 유형',
    'pages_revisions_changelog' => '설명',
    'pages_revisions_changes' => '바꾼 부분',
    'pages_revisions_current' => '현재 판본',
    'pages_revisions_preview' => '미리 보기',
    'pages_revisions_restore' => '복원',
    'pages_revisions_none' => '수정본이 없습니다.',
    'pages_copy_link' => '주소 복사',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => '문서 권한 허용함',
    'pages_initial_revision' => '처음 판본',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => '제목 없음',
    'pages_editing_draft_notification' => ':timeDiff에 초안 문서입니다.',
    'pages_draft_edited_notification' => '최근에 수정한 문서이기 때문에 초안 문서를 폐기하는 편이 좋습니다.',
    'pages_draft_page_changed_since_creation' => '최근에 수정한 문서이기 때문에 초안 문서를 폐기하는 편이 좋습니다.',
    'pages_draft_edit_active' => [
        'start_a' => ':count명이 이 문서를 수정하고 있습니다.',
        'start_b' => ':userName이 이 문서를 수정하고 있습니다.',
        'time_a' => '수정본이 생겼습니다.',
        'time_b' => '(:minCount분 전)',
        'message' => ':start :time. 다른 사용자의 수정본을 덮어쓰지 않도록 주의하세요.',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => '특정한 문서',
    'pages_is_template' => '템플릿',

    // Editor Sidebar
    'page_tags' => '문서 꼬리표',
    'chapter_tags' => '챕터 꼬리표',
    'book_tags' => '책 꼬리표',
    'shelf_tags' => '책꽂이 꼬리표',
    'tag' => '꼬리표',
    'tags' =>  '꼬리표',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  '꼬리표 이름',
    'tag_value' => '리스트 값 (선택 사항)',
    'tags_explain' => "꼬리표로 문서를 분류하세요.",
    'tags_add' => '꼬리표 추가',
    'tags_remove' => '꼬리표 삭제',
    'tags_usages' => '모든 꼬리표',
    'tags_assigned_pages' => '문서에 꼬리표 지정함',
    'tags_assigned_chapters' => '챕터에 꼬리표 지정함',
    'tags_assigned_books' => '책에 꼬리표 지정함',
    'tags_assigned_shelves' => '책꽂이에 꼬리표 지정함',
    'tags_x_unique_values' => ':count 중복 없는 값',
    'tags_all_values' => '모든 값',
    'tags_view_tags' => '꼬리표 보기',
    'tags_view_existing_tags' => '사용 중인 꼬리표 보기',
    'tags_list_empty_hint' => '꼬리표는 에디터 사이드바나 책, 챕터 또는 책꽂이 정보 편집에서 지정할 수 있습니다.',
    'attachments' => '첨부 파일',
    'attachments_explain' => '파일이나 링크를 첨부하세요. 정보 탭에 나타납니다.',
    'attachments_explain_instant_save' => '여기에서 바꾼 내용은 바로 적용합니다.',
    'attachments_upload' => '파일 올리기',
    'attachments_link' => '링크로 첨부',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => '링크 설정',
    'attachments_delete' => '이 첨부 파일을 지울 건가요?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => '올린 파일 없음',
    'attachments_explain_link' => '파일을 올리지 않고 링크로 첨부할 수 있습니다.',
    'attachments_link_name' => '링크 이름',
    'attachment_link' => '파일 주소',
    'attachments_link_url' => '파일로 링크',
    'attachments_link_url_hint' => '파일 주소',
    'attach' => '파일 첨부',
    'attachments_insert_link' => '페이지에 첨부파일 링크 추가',
    'attachments_edit_file' => '파일 수정',
    'attachments_edit_file_name' => '파일 이름',
    'attachments_edit_drop_upload' => '여기에 파일을 드롭하거나 여기를 클릭하세요. 파일을 올리거나 덮어쓸 수 있습니다.',
    'attachments_order_updated' => '첨부 순서 바꿈',
    'attachments_updated_success' => '첨부 파일 정보 수정함',
    'attachments_deleted' => '첨부 파일 삭제함',
    'attachments_file_uploaded' => '파일 올림',
    'attachments_file_updated' => '파일 바꿈',
    'attachments_link_attached' => '링크 첨부함',
    'templates' => '템플릿',
    'templates_set_as_template' => '템플릿',
    'templates_explain_set_as_template' => '템플릿은 보기 권한만 있어도 문서에 쓸 수 있습니다.',
    'templates_replace_content' => '문서 대체',
    'templates_append_content' => '문서 앞에 추가',
    'templates_prepend_content' => '문서 뒤에 추가',

    // Profile View
    'profile_user_for_x' => ':time 전에 가입함',
    'profile_created_content' => '활동한 이력',
    'profile_not_created_pages' => ':userName(이)가 만든 문서 없음',
    'profile_not_created_chapters' => ':userName(이)가 만든 챕터 없음',
    'profile_not_created_books' => ':userName(이)가 만든 책 없음',
    'profile_not_created_shelves' => ':userName(이)가 만든 책꽂이 없음',

    // Comments
    'comment' => '댓글',
    'comments' => '댓글',
    'comment_add' => '댓글 쓰기',
    'comment_placeholder' => '이곳에 댓글을 쓰세요...',
    'comment_count' => '{0} 댓글 없음|{1} 댓글 1개|[2,*] 댓글 :count개',
    'comment_save' => '등록',
    'comment_new' => '새로운 댓글',
    'comment_created' => '댓글 등록함 :createDiff',
    'comment_updated' => ':username(이)가 댓글 수정함 :updateDiff',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => '댓글 지움',
    'comment_created_success' => '댓글 등록함',
    'comment_updated_success' => '댓글 수정함',
    'comment_delete_confirm' => '이 댓글을 지울 건가요?',
    'comment_in_reply_to' => ':commentId(을)를 향한 답글',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => '이 수정본을 지울 건가요?',
    'revision_restore_confirm' => '이 수정본을 되돌릴 건가요? 현재 판본을 바꿉니다.',
    'revision_cannot_delete_latest' => '현재 판본은 지울 수 없습니다.',

    // Copy view
    'copy_consider' => '항목을 복사할 때 다음을 고려하세요.',
    'copy_consider_permissions' => '권한 설정은 복사되지 않습니다.',
    'copy_consider_owner' => '복사한 항목의 소유자가 됩니다.',
    'copy_consider_images' => '이미지 파일은 복사되지 않습니다. 올라가 있던 이미지가 사라지지 않습니다.',
    'copy_consider_attachments' => '첨부 파일은 복사되지 않습니다.',
    'copy_consider_access' => '경로, 소유자, 권한이 바뀌면 이 문서를 본 적 없는 사용자가 볼 수도 있습니다.',

    // Conversions
    'convert_to_shelf' => '책장으로 변환',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => '책 변환',
    'convert_book_confirm' => '이 책을 변환하시겠어요?',
    'convert_undo_warning' => '이 작업은 되돌리기 어렵습니다.',
    'convert_to_book' => '책으로 변환',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => '챕터 변환',
    'convert_chapter_confirm' => '이 챕터를 변환하시겠어요?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
