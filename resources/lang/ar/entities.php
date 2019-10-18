<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'أنشئت مؤخراً',
    'recently_created_pages' => 'صفحات أنشئت مؤخراً',
    'recently_updated_pages' => 'صفحات حُدثت مؤخراً',
    'recently_created_chapters' => 'فصول أنشئت مؤخراً',
    'recently_created_books' => 'كتب أنشئت مؤخراً',
    'recently_created_shelves' => 'Recently Created Shelves',
    'recently_update' => 'حُدثت مؤخراً',
    'recently_viewed' => 'عُرضت مؤخراً',
    'recent_activity' => 'نشاطات حديثة',
    'create_now' => 'أنشئ الآن',
    'revisions' => 'مراجعات',
    'meta_revision' => 'مراجعة #:revisionCount',
    'meta_created' => 'أنشئ :timeLength',
    'meta_created_name' => 'أنشئ :timeLength بواسطة :user',
    'meta_updated' => 'مُحدث :timeLength',
    'meta_updated_name' => 'مُحدث :timeLength بواسطة :user',
    'entity_select' => 'Entity Select',
    'images' => 'صور',
    'my_recent_drafts' => 'مسوداتي الحديثة',
    'my_recently_viewed' => 'ما عرضته مؤخراً',
    'no_pages_viewed' => 'لم تستعرض أي صفحات',
    'no_pages_recently_created' => 'لم يتم إنشاء أي صفحات مؤخراً',
    'no_pages_recently_updated' => 'لم يتم تحديث أي صفحات مؤخراً',
    'export' => 'تصدير',
    'export_html' => 'صفحة ويب',
    'export_pdf' => 'ملف PDF',
    'export_text' => 'ملف نص عادي',

    // Permissions and restrictions
    'permissions' => 'الأذونات',
    'permissions_intro' => 'في حال التفعيل, ستتم تبدية هذه الأذونات على أذونات الأدوار.',
    'permissions_enable' => 'تفعيل الأذونات المخصصة',
    'permissions_save' => 'حفظ الأذونات',

    // Search
    'search_results' => 'نتائج البحث',
    'search_total_results_found' => 'عدد النتائج :count|مجموع النتائج :count',
    'search_clear' => 'مسح البحث',
    'search_no_pages' => 'لم يطابق بحثكم أي صفحة',
    'search_for_term' => 'ابحث عن :term',
    'search_more' => 'المزيد من النتائج',
    'search_filters' => 'تصفية البحث',
    'search_content_type' => 'نوع المحتوى',
    'search_exact_matches' => 'نتائج مطابقة تماماً',
    'search_tags' => 'بحث الوسوم',
    'search_options' => 'Options',
    'search_viewed_by_me' => 'تم استعراضها من قبلي',
    'search_not_viewed_by_me' => 'لم يتم استعراضها من قبلي',
    'search_permissions_set' => 'حزمة الأذونات',
    'search_created_by_me' => 'أنشئت بواسطتي',
    'search_updated_by_me' => 'حُدثت بواسطتي',
    'search_date_options' => 'Date Options',
    'search_updated_before' => 'حدثت قبل',
    'search_updated_after' => 'حدثت بعد',
    'search_created_before' => 'أنشئت قبل',
    'search_created_after' => 'أنشئت بعد',
    'search_set_date' => 'تحديد التاريخ',
    'search_update' => 'تحديث البحث',

    // Shelves
    'shelf' => 'Shelf',
    'shelves' => 'Shelves',
    'x_shelves' => ':count Shelf|:count Shelves',
    'shelves_long' => 'Bookshelves',
    'shelves_empty' => 'No shelves have been created',
    'shelves_create' => 'Create New Shelf',
    'shelves_popular' => 'Popular Shelves',
    'shelves_new' => 'New Shelves',
    'shelves_new_action' => 'New Shelf',
    'shelves_popular_empty' => 'The most popular shelves will appear here.',
    'shelves_new_empty' => 'The most recently created shelves will appear here.',
    'shelves_save' => 'Save Shelf',
    'shelves_books' => 'Books on this shelf',
    'shelves_add_books' => 'Add books to this shelf',
    'shelves_drag_books' => 'Drag books here to add them to this shelf',
    'shelves_empty_contents' => 'This shelf has no books assigned to it',
    'shelves_edit_and_assign' => 'Edit shelf to assign books',
    'shelves_edit_named' => 'Edit Bookshelf :name',
    'shelves_edit' => 'Edit Bookshelf',
    'shelves_delete' => 'Delete Bookshelf',
    'shelves_delete_named' => 'Delete Bookshelf :name',
    'shelves_delete_explain' => "This will delete the bookshelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this bookshelf?',
    'shelves_permissions' => 'Bookshelf Permissions',
    'shelves_permissions_updated' => 'Bookshelf Permissions Updated',
    'shelves_permissions_active' => 'Bookshelf Permissions Active',
    'shelves_copy_permissions_to_books' => 'Copy Permissions to Books',
    'shelves_copy_permissions' => 'Copy Permissions',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this bookshelf to all books contained within. Before activating, ensure any changes to the permissions of this bookshelf have been saved.',
    'shelves_copy_permission_success' => 'Bookshelf permissions copied to :count books',

    // Books
    'book' => 'كتاب',
    'books' => 'كتب',
    'x_books' => ':count كتاب|:count كتب',
    'books_empty' => 'لم يتم إنشاء أي كتب',
    'books_popular' => 'كتب رائجة',
    'books_recent' => 'كتب حديثة',
    'books_new' => 'كتب جديدة',
    'books_new_action' => 'New Book',
    'books_popular_empty' => 'الكتب الأكثر رواجاً ستظهر هنا.',
    'books_new_empty' => 'الكتب المنشأة مؤخراً ستظهر هنا.',
    'books_create' => 'إنشاء كتاب جديد',
    'books_delete' => 'حذف الكتاب',
    'books_delete_named' => 'حذف كتاب :bookName',
    'books_delete_explain' => 'سيتم حذف كتاب \':bookName\'. ستتم إزالة جميع الفصول والصفحات.',
    'books_delete_confirmation' => 'تأكيد حذف الكتاب؟',
    'books_edit' => 'تعديل الكتاب',
    'books_edit_named' => 'تعديل كتاب :bookName',
    'books_form_book_name' => 'اسم الكتاب',
    'books_save' => 'حفظ الكتاب',
    'books_permissions' => 'أذونات الكتاب',
    'books_permissions_updated' => 'تم تحديث أذونات الكتاب',
    'books_empty_contents' => 'لم يتم إنشاء أي صفحات أو فصول لهذا الكتاب.',
    'books_empty_create_page' => 'إنشاء صفحة جديدة',
    'books_empty_sort_current_book' => 'فرز الكتاب الحالي',
    'books_empty_add_chapter' => 'إضافة فصل',
    'books_permissions_active' => 'أذونات الكتاب مفعلة',
    'books_search_this' => 'البحث في هذا الكتاب',
    'books_navigation' => 'تصفح الكتاب',
    'books_sort' => 'فرز محتويات الكتاب',
    'books_sort_named' => 'فرز كتاب :bookName',
    'books_sort_name' => 'Sort by Name',
    'books_sort_created' => 'Sort by Created Date',
    'books_sort_updated' => 'Sort by Updated Date',
    'books_sort_chapters_first' => 'Chapters First',
    'books_sort_chapters_last' => 'Chapters Last',
    'books_sort_show_other' => 'عرض كتب أخرى',
    'books_sort_save' => 'حفظ الترتيب الجديد',

    // Chapters
    'chapter' => 'فصل',
    'chapters' => 'فصول',
    'x_chapters' => ':count فصل|:count فصول',
    'chapters_popular' => 'فصول رائجة',
    'chapters_new' => 'فصل جديد',
    'chapters_create' => 'إنشاء فصل جديد',
    'chapters_delete' => 'حذف الفصل',
    'chapters_delete_named' => 'حذف فصل :chapterName',
    'chapters_delete_explain' => 'سيتم حذف فصل \':chapterName\'. جميع الصفحات ستزال وستتم إضافتها مباشرة للكتاب الرئيسي.',
    'chapters_delete_confirm' => 'تأكيد حذف الفصل؟',
    'chapters_edit' => 'تعديل الفصل',
    'chapters_edit_named' => 'تعديل فصل :chapterName',
    'chapters_save' => 'حفظ الفصل',
    'chapters_move' => 'نقل الفصل',
    'chapters_move_named' => 'نقل فصل :chapterName',
    'chapter_move_success' => 'تم نقل الفصل إلى :bookName',
    'chapters_permissions' => 'أذونات الفصل',
    'chapters_empty' => 'لا توجد أي صفحات في هذا الفصل حالياً',
    'chapters_permissions_active' => 'أذونات الفصل مفعلة',
    'chapters_permissions_success' => 'تم تحديث أذونات الفصل',
    'chapters_search_this' => 'البحث في هذا الفصل',

    // Pages
    'page' => 'صفحة',
    'pages' => 'صفحات',
    'x_pages' => ':count صفحة|:count صفحات',
    'pages_popular' => 'صفحات رائجة',
    'pages_new' => 'صفحة جديدة',
    'pages_attachments' => 'مرفقات',
    'pages_navigation' => 'تصفح الصفحة',
    'pages_delete' => 'حذف الصفحة',
    'pages_delete_named' => 'حذف صفحة :pageName',
    'pages_delete_draft_named' => 'حذف مسودة :pageName',
    'pages_delete_draft' => 'حذف المسودة',
    'pages_delete_success' => 'تم حذف الصفحة',
    'pages_delete_draft_success' => 'تم حذف المسودة',
    'pages_delete_confirm' => 'تأكيد حذف الصفحة؟',
    'pages_delete_draft_confirm' => 'تأكيد حذف المسودة؟',
    'pages_editing_named' => ':pageName قيد التعديل',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'حفظ المسودة',
    'pages_edit_draft' => 'تعديل مسودة الصفحة',
    'pages_editing_draft' => 'المسودة قيد التعديل',
    'pages_editing_page' => 'الصفحة قيد التعديل',
    'pages_edit_draft_save_at' => 'تم خفظ المسودة في ',
    'pages_edit_delete_draft' => 'حذف المسودة',
    'pages_edit_discard_draft' => 'التخلص من المسودة',
    'pages_edit_set_changelog' => 'تثبيت سجل التعديل',
    'pages_edit_enter_changelog_desc' => 'ضع وصف مختصر للتعديلات التي تمت',
    'pages_edit_enter_changelog' => 'أدخل سجل التعديل',
    'pages_save' => 'حفظ الصفحة',
    'pages_title' => 'عنوان الصفحة',
    'pages_name' => 'اسم الصفحة',
    'pages_md_editor' => 'المحرر',
    'pages_md_preview' => 'معاينة',
    'pages_md_insert_image' => 'إدخال صورة',
    'pages_md_insert_link' => 'Insert Entity Link',
    'pages_md_insert_drawing' => 'إدخال رسمة',
    'pages_not_in_chapter' => 'صفحة ليست في فصل',
    'pages_move' => 'نقل الصفحة',
    'pages_move_success' => 'تم نقل الصفحة إلى ":parentName"',
    'pages_copy' => 'نسخ الصفحة',
    'pages_copy_desination' => 'نسخ مكان الوصول',
    'pages_copy_success' => 'تم نسخ الصفحة بنجاح',
    'pages_permissions' => 'أذونات الصفحة',
    'pages_permissions_success' => 'تم تحديث أذونات الصفحة',
    'pages_revision' => 'مراجعة',
    'pages_revisions' => 'مراجعات الصفحة',
    'pages_revisions_named' => 'مراجعات صفحة :pageName',
    'pages_revision_named' => 'مراجعة صفحة :pageName',
    'pages_revisions_created_by' => 'أنشئ بواسطة',
    'pages_revisions_date' => 'تاريخ المراجعة',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_changelog' => 'سجل التعديل',
    'pages_revisions_changes' => 'التعديلات',
    'pages_revisions_current' => 'النسخة الحالية',
    'pages_revisions_preview' => 'معاينة',
    'pages_revisions_restore' => 'استرجاع',
    'pages_revisions_none' => 'لا توجد مراجعات لهذه الصفحة',
    'pages_copy_link' => 'نسخ الرابط',
    'pages_edit_content_link' => 'تعديل المحتوى',
    'pages_permissions_active' => 'أذونات الصفحة مفعلة',
    'pages_initial_revision' => 'نشر مبدئي',
    'pages_initial_name' => 'صفحة جديدة',
    'pages_editing_draft_notification' => 'جار تعديل مسودة لم يتم حفظها من :timeDiff.',
    'pages_draft_edited_notification' => 'تم تحديث هذه الصفحة منذ ذلك الوقت. من الأفضل التخلص من هذه المسودة.',
    'pages_draft_edit_active' => [
        'start_a' => ':count من المستخدمين بدأوا بتعديل هذه الصفحة',
        'start_b' => ':userName بدأ بتعديل هذه الصفحة',
        'time_a' => 'منذ أن تم تحديث هذه الصفحة',
        'time_b' => 'في آخر :minCount دقيقة/دقائق',
        'message' => ':start :time. Take care not to overwrite each other\'s updates!',
    ],
    'pages_draft_discarded' => 'تم التخلص من المسودة. تم تحديث المحرر بمحتوى الصفحة الحالي',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Page Template',

    // Editor Sidebar
    'page_tags' => 'وسوم الصفحة',
    'chapter_tags' => 'وسوم الفصل',
    'book_tags' => 'وسوم الكتاب',
    'shelf_tags' => 'Shelf Tags',
    'tag' => 'وسم',
    'tags' =>  'وسوم',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'قيمة الوسم (اختياري)',
    'tags_explain' => "إضافة الوسوم تساعد بترتيب وتقسيم المحتوى. \n من الممكن وضع قيمة لكل وسم لترتيب أفضل وأدق.",
    'tags_add' => 'إضافة وسم آخر',
    'tags_remove' => 'Remove this tag',
    'attachments' => 'المرفقات',
    'attachments_explain' => 'ارفع بعض الملفات أو أرفق بعض الروابط لعرضها بصفحتك. ستكون الملفات والروابط معروضة في الشريط الجانبي للصفحة.',
    'attachments_explain_instant_save' => 'سيتم حفظ التغييرات هنا بلحظتها',
    'attachments_items' => 'العناصر المرفقة',
    'attachments_upload' => 'رفع ملف',
    'attachments_link' => 'إرفاق رابط',
    'attachments_set_link' => 'تحديد الرابط',
    'attachments_delete_confirm' => 'اضغط على زر الحذف مرة أخرى لتأكيد حذف المرفق.',
    'attachments_dropzone' => 'أسقط الملفات أو اضغط هنا لإرفاق ملف',
    'attachments_no_files' => 'لم يتم رفع أي ملفات',
    'attachments_explain_link' => 'بالإمكان إرفاق رابط في حال عدم تفضيل رفع ملف. قد يكون الرابط لصفحة أخرى أو لملف في أحد خدمات التخزين السحابي.',
    'attachments_link_name' => 'اسم الرابط',
    'attachment_link' => 'رابط المرفق',
    'attachments_link_url' => 'Link to file',
    'attachments_link_url_hint' => 'رابط الموقع أو الملف',
    'attach' => 'Attach',
    'attachments_edit_file' => 'تعديل الملف',
    'attachments_edit_file_name' => 'اسم الملف',
    'attachments_edit_drop_upload' => 'أسقط الملفات أو اضغط هنا للرفع والاستبدال',
    'attachments_order_updated' => 'تم تحديث ترتيب المرفقات',
    'attachments_updated_success' => 'تم تحديث تفاصيل المرفق',
    'attachments_deleted' => 'تم حذف المرفق',
    'attachments_file_uploaded' => 'تم رفع الملف بنجاح',
    'attachments_file_updated' => 'تم تحديث الملف بنجاح',
    'attachments_link_attached' => 'تم إرفاق الرابط بالصفحة بنجاح',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'User for :time',
    'profile_created_content' => 'المحتوى المنشأ',
    'profile_not_created_pages' => 'لم يتم إنشاء أي صفحات بواسطة :userName',
    'profile_not_created_chapters' => 'لم يتم إنشاء أي فصول بواسطة :userName',
    'profile_not_created_books' => 'لم يتم إنشاء أي كتب بواسطة :userName',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'تعليق',
    'comments' => 'تعليقات',
    'comment_add' => 'إضافة تعليق',
    'comment_placeholder' => 'ضع تعليقاً هنا',
    'comment_count' => '{0} ا توجد تعليقات|{1} تعليق واحد|{2} تعليقان|[3,*] :count تعليقات',
    'comment_save' => 'حفظ التعليق',
    'comment_saving' => 'جار حفظ التعليق...',
    'comment_deleting' => 'جار حذف التعليق...',
    'comment_new' => 'تعليق جديد',
    'comment_created' => 'تم التعليق :createDiff',
    'comment_updated' => 'تم التحديث :updateDiff بواسطة :username',
    'comment_deleted_success' => 'تم حذف التعليق',
    'comment_created_success' => 'تمت إضافة التعليق',
    'comment_updated_success' => 'تم تحديث التعليق',
    'comment_delete_confirm' => 'تأكيد حذف التعليق؟',
    'comment_in_reply_to' => 'رداً على :commentId',

    // Revision
    'revision_delete_confirm' => 'Are you sure you want to delete this revision?',
    'revision_restore_confirm' => 'Are you sure you want to restore this revision? The current page contents will be replaced.',
    'revision_delete_success' => 'Revision deleted',
    'revision_cannot_delete_latest' => 'Cannot delete the latest revision.'
];