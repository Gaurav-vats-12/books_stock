<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Duela gutxi sortuak',
    'recently_created_pages' => 'Berriki sortutako Orrialdeak',
    'recently_updated_pages' => 'Berriki aldatutako Orrialdeak',
    'recently_created_chapters' => 'Berriki sortutako Kapituluak',
    'recently_created_books' => 'Berriki sortutako Liburuak',
    'recently_created_shelves' => 'Berriki sortutako Apalak',
    'recently_update' => 'Azken eguneraketak',
    'recently_viewed' => 'Oraintsu ikusiak',
    'recent_activity' => 'Duela gutxiko Jarduera',
    'create_now' => 'Sortu bat orain',
    'revisions' => 'Berrikuspenak',
    'meta_revision' => '#:revisionCount Berrikuspen',
    'meta_created' => 'Sortua :timeLength',
    'meta_created_name' => ':timeLength sortua. Erabiltzailea :user',
    'meta_updated' => 'Aldatua :timeLength',
    'meta_updated_name' => ':timeLength aldatuta. Erabiltzailea :user',
    'meta_owned_name' => ':user da jabea',
    'meta_reference_page_count' => 'Referenced on :count page|Referenced on :count pages',
    'entity_select' => 'Aukeratutako entitatea',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Irudiak',
    'my_recent_drafts' => 'Nire azken zirriborroak',
    'my_recently_viewed' => 'Nik Ikusitako azkenak',
    'my_most_viewed_favourites' => 'Nire gehien ikusitako gogokoak',
    'my_favourites' => 'Nire Gogokoenak',
    'no_pages_viewed' => 'Ez daukazu ikusiriko orririk',
    'no_pages_recently_created' => 'Ez da orrialderik sortu azkenaldian',
    'no_pages_recently_updated' => 'Ez da orrialderik aldatu azkenaldian',
    'export' => 'Esportatu',
    'export_html' => 'Daukan web artxiboa',
    'export_pdf' => 'PDF fitxategia',
    'export_text' => 'Testu lauko fitxategiak',
    'export_md' => 'Markdown fitxategia',

    // Permissions and restrictions
    'permissions' => 'Baimenak',
    'permissions_desc' => 'Ezarri baimenak hemen, erabiltzaileen rolek ematen dituzten baimenak gainidazteko.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Gorde baimenak',
    'permissions_owner' => 'Jabea',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Gainidatzi baimenak rol honi',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Bilaketaren emaitzak',
    'search_total_results_found' => ':count emaitza aurkitu dira|:count emaitza aurkitu dira guztira',
    'search_clear' => 'Bilaketa testua garbitu',
    'search_no_pages' => 'Ez da orririk aurkitu zure bilaketan',
    'search_for_term' => 'Bilatu honen arabera :term',
    'search_more' => 'Emaitza gehiago',
    'search_advanced' => 'Bilaketa aurreratua',
    'search_terms' => 'Bilaketa-hitza',
    'search_content_type' => 'Eduki Mota',
    'search_exact_matches' => 'Bat etortze zehatza',
    'search_tags' => 'Etiketa bilaketak',
    'search_options' => 'Aukerak',
    'search_viewed_by_me' => 'Nik ikusiak',
    'search_not_viewed_by_me' => 'Nik ikusi ez ditudanak',
    'search_permissions_set' => 'Baimenak',
    'search_created_by_me' => 'Nik sortuak',
    'search_updated_by_me' => 'Nik eguneratuak',
    'search_owned_by_me' => 'Nire jabetazkoak',
    'search_date_options' => 'Data aukerak',
    'search_updated_before' => 'Aurretik eguneratuak',
    'search_updated_after' => 'Ondoren eguneratuak',
    'search_created_before' => 'Aurretik sortuak',
    'search_created_after' => 'Ondoren sortuak',
    'search_set_date' => 'Data finkatu',
    'search_update' => 'Eguneratu bilaketa',

    // Shelves
    'shelf' => 'Apalategia',
    'shelves' => 'Apalategiak',
    'x_shelves' => ':count Apalategi|:count Apalategi',
    'shelves_empty' => 'Ez da inolako apalategirik sortu',
    'shelves_create' => 'Apalategi berria sortu',
    'shelves_popular' => 'Apalategi esanguratsuak',
    'shelves_new' => 'Apalategi berriak',
    'shelves_new_action' => 'Apalategi berria',
    'shelves_popular_empty' => 'Apalategi ikusienak hemen agertuko dira.',
    'shelves_new_empty' => 'Berriki sorturiko apalategiak hemen agertuko dira.',
    'shelves_save' => 'Gorde apalategia',
    'shelves_books' => 'Apalategi honetako liburuak',
    'shelves_add_books' => 'Gehitu liburuak apalategi honetara',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Apalategi honek ez dauka libururik',
    'shelves_edit_and_assign' => 'Apalategia editatu liburuak gehitzeko',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Apalategi baimenak',
    'shelves_permissions_updated' => 'Apalategi baimenak eguneratuta',
    'shelves_permissions_active' => 'Apalategi baimenak aktibatuta',
    'shelves_permissions_cascade_warning' => 'Apaletako baimenak ez dira automatikoki hauen barneko liburuetan gordeko. Liburu bat apalategi askotan egon daitekeelako. Hala ere, baimenak apalategiko liburutara kopiatu daitezke, behean agertzen den aukera erabiliz.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Kopiatu baimenak liburura',
    'shelves_copy_permissions' => 'Gorde baimenak',
    'shelves_copy_permissions_explain' => 'Honek apalategi honen egungo baimen-konfigurazioa aplikatuko die barruan dauden liburu guztiei. Aktibatu aurretik, ziurtatu apaletan aldaketak gorde direla.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Liburua',
    'books' => 'Liburuak',
    'x_books' => ':count Liburu|:count Liburu',
    'books_empty' => 'Ez da orrialderik sortu',
    'books_popular' => 'Liburu ikusienak',
    'books_recent' => 'Azken liburuak',
    'books_new' => 'Liburu berriak',
    'books_new_action' => 'Liburu berria',
    'books_popular_empty' => 'Apalategi ikusienak hemen agertuko dira.',
    'books_new_empty' => 'Berriki sorturiko apalategiak hemen agertuko dira.',
    'books_create' => 'Liburu berria sortu',
    'books_delete' => 'Liburua ezabatu',
    'books_delete_named' => ':bookName liburua ezabatuta',
    'books_delete_explain' => 'Honek \':bookName\' liburua ezabatuko du. bere orrialde eta kapitulu guztiak ezabatuak izango dira.',
    'books_delete_confirmation' => 'Ziur zaude liburu hau ezabatu nahi duzula?',
    'books_edit' => 'Editatu liburua',
    'books_edit_named' => 'Editatu :bookName liburua',
    'books_form_book_name' => 'Liburu izena',
    'books_save' => 'Gorde Liburua',
    'books_default_template' => 'Default Page Template',
    'books_default_template_explain' => 'Assign a page template that will be used as the default content for all new pages in this book. Keep in mind this will only be used if the page creator has view access to those chosen template page.',
    'books_default_template_select' => 'Select a template page',
    'books_permissions' => 'Liburu baimenak',
    'books_permissions_updated' => 'Liburu baimenak eguneratuta',
    'books_empty_contents' => 'Ez da orri edo kapitulurik sortu liburu honentzat.',
    'books_empty_create_page' => 'Sortu orrialde berria',
    'books_empty_sort_current_book' => 'Ordenatu uneko liburu hau',
    'books_empty_add_chapter' => 'Kapitulu berria gehitu',
    'books_permissions_active' => 'Liburu baimenak aktibatuta',
    'books_search_this' => 'Bilatu liburu hau',
    'books_navigation' => 'Liburu nabigazioa',
    'books_sort' => 'Ordenatu liburu edukiak',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Ordenatu :bookName liburua',
    'books_sort_name' => 'Ordenatu izenaren arabera',
    'books_sort_created' => 'Ordenatu argitaratze-dataren arabera',
    'books_sort_updated' => 'Ordenatu aldaketa-dataren arabera',
    'books_sort_chapters_first' => 'Lehen kapitulua',
    'books_sort_chapters_last' => 'Azken kapitulua',
    'books_sort_show_other' => 'Erakutsi beste liburuak',
    'books_sort_save' => 'Gorde agindu berria',
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
    'books_copy' => 'Kopiatu liburua',
    'books_copy_success' => 'Ondo kopiatu da',

    // Chapters
    'chapter' => 'Kapitulua',
    'chapters' => 'Kapituluak',
    'x_chapters' => ':count Kapitulu|:count Kapitulu',
    'chapters_popular' => 'Kapitulu ikusienak',
    'chapters_new' => 'Kapitulu berria',
    'chapters_create' => 'Sortu kapitulu berria',
    'chapters_delete' => 'Kapitulua ezabatu',
    'chapters_delete_named' => ':chapterName kapitulua ezabatu',
    'chapters_delete_explain' => 'This will delete the chapter with the name \':chapterName\'. All pages that exist within this chapter will also be deleted.',
    'chapters_delete_confirm' => 'Ziur kapitulu hau ezabatu nahi duzula?',
    'chapters_edit' => 'Kapitulua aldatu',
    'chapters_edit_named' => ':chapterName kapitulua editatu',
    'chapters_save' => 'Kapitulua gorde',
    'chapters_move' => 'Kapitulua mugitu',
    'chapters_move_named' => ':chapterName kapitulua mugitu',
    'chapters_copy' => 'Kapitulua kopiatu',
    'chapters_copy_success' => 'Kapitulua egoki kopiatua',
    'chapters_permissions' => 'Kapitulu baimenak',
    'chapters_empty' => 'Ez dago orrialderik kapitulu honetan.',
    'chapters_permissions_active' => 'Liburu baimenak altan',
    'chapters_permissions_success' => 'Liburu baimenak eguneratuta',
    'chapters_search_this' => 'Kapitulu hau bilatu',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Orria',
    'pages' => 'Orriak',
    'x_pages' => 'orrialde:count|:count orrialde',
    'pages_popular' => 'Orrialde ikusienak',
    'pages_new' => 'Orrialde berria',
    'pages_attachments' => 'Eranskinak',
    'pages_navigation' => 'Nabigazio orrialdea',
    'pages_delete' => 'Ezabatu orria',
    'pages_delete_named' => ':pageName Orria ezabatu',
    'pages_delete_draft_named' => 'Delete Draft Page :pageName',
    'pages_delete_draft' => 'Delete Draft Page',
    'pages_delete_success' => 'Orria ezabatua',
    'pages_delete_draft_success' => 'Draft page deleted',
    'pages_delete_warning_template' => 'This page is in active use as a book default page template. These books will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Ziur al zaude orri hau ezabatu nahi duzula?',
    'pages_delete_draft_confirm' => 'Are you sure you want to delete this draft page?',
    'pages_editing_named' => 'Editing Page :pageName',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'Gorde zirriborroa',
    'pages_edit_draft' => 'Edit Page Draft',
    'pages_editing_draft' => 'Editatu zirriborroa',
    'pages_editing_page' => 'Editatu orrialdea',
    'pages_edit_draft_save_at' => 'Draft saved at ',
    'pages_edit_delete_draft' => 'Ezabatu zirriborroa',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Baztertu zirriborroa',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Set Changelog',
    'pages_edit_enter_changelog_desc' => 'Enter a brief description of the changes you\'ve made',
    'pages_edit_enter_changelog' => 'Enter Changelog',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Gorde orrialdea',
    'pages_title' => 'Orrialdearen titulua',
    'pages_name' => 'Orrialdearen izena',
    'pages_md_editor' => 'Editorea',
    'pages_md_preview' => 'Aurrebista',
    'pages_md_insert_image' => 'Txertatu irudia',
    'pages_md_insert_link' => 'Insert Entity Link',
    'pages_md_insert_drawing' => 'Txertatu marrazki berria',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Page is not in a chapter',
    'pages_move' => 'Move Page',
    'pages_copy' => 'Copy Page',
    'pages_copy_desination' => 'Copy Destination',
    'pages_copy_success' => 'Page successfully copied',
    'pages_permissions' => 'Page Permissions',
    'pages_permissions_success' => 'Page permissions updated',
    'pages_revision' => 'Revision',
    'pages_revisions' => 'Page Revisions',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Page Revisions for :pageName',
    'pages_revision_named' => 'Page Revision for :pageName',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Sortzailea',
    'pages_revisions_date' => 'Berrikuspen data',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Aldaketen erregistroa',
    'pages_revisions_changes' => 'Aldaketak',
    'pages_revisions_current' => 'Uneko bertsioa',
    'pages_revisions_preview' => 'Aurrebista',
    'pages_revisions_restore' => 'Berreskuratu',
    'pages_revisions_none' => 'This page has no revisions',
    'pages_copy_link' => 'Copy Link',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Page Permissions Active',
    'pages_initial_revision' => 'Initial publish',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Orrialde berria',
    'pages_editing_draft_notification' => 'You are currently editing a draft that was last saved :timeDiff.',
    'pages_draft_edited_notification' => 'This page has been updated by since that time. It is recommended that you discard this draft.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count users have started editing this page',
        'start_b' => ':userName has started editing this page',
        'time_a' => 'since the page was last updated',
        'time_b' => 'in the last :minCount minutes',
        'message' => ':start :time. Take care not to overwrite each other\'s updates!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Orrialde txantiloia',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'Orrialde etiketak',
    'chapter_tags' => 'Kapitulu etiketak',
    'book_tags' => 'Liburu etiketak',
    'shelf_tags' => 'Apalategi etiketak',
    'tag' => 'Etiketa',
    'tags' =>  'Etiketak',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Etiketa izena',
    'tag_value' => 'Tag Value (Optional)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Beste bat gehitu',
    'tags_remove' => 'Remove this tag',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'Balio guztiak',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Eranskinak',
    'attachments_explain' => 'Upload some files or attach some links to display on your page. These are visible in the page sidebar.',
    'attachments_explain_instant_save' => 'Changes here are saved instantly.',
    'attachments_upload' => 'Kargatu artxiboak',
    'attachments_link' => 'Attach Link',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Set Link',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Ez da igo fitxategirik',
    'attachments_explain_link' => 'You can attach a link if you\'d prefer not to upload a file. This can be a link to another page or a link to a file in the cloud.',
    'attachments_link_name' => 'Loturaren izena',
    'attachment_link' => 'Attachment link',
    'attachments_link_url' => 'Fitxategiarentzako esteka',
    'attachments_link_url_hint' => 'Url of site or file',
    'attach' => 'Attach',
    'attachments_insert_link' => 'Add Attachment Link to Page',
    'attachments_edit_file' => 'Edit File',
    'attachments_edit_file_name' => 'Fitxategi izena',
    'attachments_edit_drop_upload' => 'Drop files or click here to upload and overwrite',
    'attachments_order_updated' => 'Attachment order updated',
    'attachments_updated_success' => 'Attachment details updated',
    'attachments_deleted' => 'Attachment deleted',
    'attachments_file_uploaded' => 'File successfully uploaded',
    'attachments_file_updated' => 'File successfully updated',
    'attachments_link_attached' => 'Link successfully attached to page',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'User for :time',
    'profile_created_content' => 'Created Content',
    'profile_not_created_pages' => ':userName has not created any pages',
    'profile_not_created_chapters' => ':userName has not created any chapters',
    'profile_not_created_books' => ':userName has not created any books',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Iruzkina',
    'comments' => 'Iruzkinak',
    'comment_add' => 'Iruzkina gehitu',
    'comment_placeholder' => 'Utzi iruzkin bat hemen',
    'comment_count' => '{0} No Comments|{1} 1 Comment|[2,*] :count Comments',
    'comment_save' => 'Iruzkina gorde',
    'comment_new' => 'Iruzkin berria',
    'comment_created' => 'commented :createDiff',
    'comment_updated' => 'Updated :updateDiff by :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Comment deleted',
    'comment_created_success' => 'Iruzkina gehituta',
    'comment_updated_success' => 'Iruzkina gehituta',
    'comment_delete_confirm' => 'Ziur zaude iruzkin hau ezabatu nahi duzula?',
    'comment_in_reply_to' => 'In reply to :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Ziur zaude hau ezabatu nahi duzula?',
    'revision_restore_confirm' => 'Are you sure you want to restore this revision? The current page contents will be replaced.',
    'revision_cannot_delete_latest' => 'Cannot delete the latest revision.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Apalategi bihurtu',
    'convert_to_shelf_contents_desc' => 'Liburu hau apalategi berri baten bihur dezakezu eduki berarekin. Liburu honetako kapituluak liburu berri bihurtuko dira. Liburu honek kapitulu batean ez dagoen orriren bat baldin badu, liburu honi izena aldatuko zaio eta orri horiek izango ditu, eta liburu hau apal berriaren parte bihurtuko da.',
    'convert_to_shelf_permissions_desc' => 'Liburu honetan ezarritako baimen guztiak apalategi berrira igaroko dira eta baimen propiorik ez duten haur-liburu berrietara kopiatuko dira. Kontuan izan apaletako baimenek ez dutela barruan askiesten, liburuek bezala.',
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
