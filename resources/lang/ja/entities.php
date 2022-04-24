<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '最近作成',
    'recently_created_pages' => '最近作成されたページ',
    'recently_updated_pages' => '最近更新されたページ',
    'recently_created_chapters' => '最近作成されたチャプター',
    'recently_created_books' => '最近作成されたブック',
    'recently_created_shelves' => '最近作成された本棚',
    'recently_update' => '最近更新',
    'recently_viewed' => '閲覧履歴',
    'recent_activity' => 'アクティビティ',
    'create_now' => '作成する',
    'revisions' => '編集履歴',
    'meta_revision' => 'リビジョン #:revisionCount',
    'meta_created' => '作成: :timeLength',
    'meta_created_name' => '作成: :timeLength (:user)',
    'meta_updated' => '更新: :timeLength',
    'meta_updated_name' => '更新: :timeLength (:user)',
    'meta_owned_name' => '所有者: :user',
    'entity_select' => 'エンティティ選択',
    'images' => '画像',
    'my_recent_drafts' => '最近の下書き',
    'my_recently_viewed' => '閲覧履歴',
    'my_most_viewed_favourites' => '最も閲覧したお気に入り',
    'my_favourites' => 'お気に入り',
    'no_pages_viewed' => 'なにもページを閲覧していません',
    'no_pages_recently_created' => '最近作成されたページはありません',
    'no_pages_recently_updated' => '最近更新されたページはありません。',
    'export' => 'エクスポート',
    'export_html' => 'Webページ',
    'export_pdf' => 'PDF',
    'export_text' => 'テキストファイル',
    'export_md' => 'Markdown',

    // Permissions and restrictions
    'permissions' => '権限',
    'permissions_intro' => 'この設定は各ユーザの役割よりも優先して適用されます。',
    'permissions_enable' => 'カスタム権限設定を有効にする',
    'permissions_save' => '権限を保存',
    'permissions_owner' => '所有者',

    // Search
    'search_results' => '検索結果',
    'search_total_results_found' => ':count件見つかりました',
    'search_clear' => '検索をクリア',
    'search_no_pages' => 'ページが見つかりませんでした。',
    'search_for_term' => ':term の検索結果',
    'search_more' => 'さらに表示',
    'search_advanced' => '高度な検索',
    'search_terms' => '検索語句',
    'search_content_type' => '種類',
    'search_exact_matches' => '完全一致',
    'search_tags' => 'タグ検索',
    'search_options' => 'オプション',
    'search_viewed_by_me' => '自分が閲覧したことがある',
    'search_not_viewed_by_me' => '自分が閲覧したことがない',
    'search_permissions_set' => '権限が設定されている',
    'search_created_by_me' => '自分が作成した',
    'search_updated_by_me' => '自分が更新した',
    'search_owned_by_me' => '自分が所有している',
    'search_date_options' => '日付オプション',
    'search_updated_before' => '以前に更新',
    'search_updated_after' => '以降に更新',
    'search_created_before' => '以前に作成',
    'search_created_after' => '以降に更新',
    'search_set_date' => '日付を設定',
    'search_update' => 'フィルタを更新',

    // Shelves
    'shelf' => '本棚',
    'shelves' => '本棚',
    'x_shelves' => ':count 本棚|:count 本棚',
    'shelves_long' => '本棚',
    'shelves_empty' => '本棚が作成されていません',
    'shelves_create' => '新しい本棚を作成',
    'shelves_popular' => '人気の本棚',
    'shelves_new' => '新しい本棚',
    'shelves_new_action' => '新しい本棚',
    'shelves_popular_empty' => 'ここに人気の本棚が表示されます。',
    'shelves_new_empty' => '最近作成された本棚がここに表示されます。',
    'shelves_save' => '本棚を保存',
    'shelves_books' => 'この本棚のブック',
    'shelves_add_books' => 'この本棚にブックを追加',
    'shelves_drag_books' => 'ブックをここにドラッグすると本棚に追加されます',
    'shelves_empty_contents' => 'この本棚にはブックが割り当てられていません。',
    'shelves_edit_and_assign' => '本棚を編集してブックを割り当てる',
    'shelves_edit_named' => '本棚「:name」を編集',
    'shelves_edit' => '本棚を編集',
    'shelves_delete' => '本棚を削除',
    'shelves_delete_named' => '本棚「:name」を削除',
    'shelves_delete_explain' => "これにより、この本棚「:name」が削除されます。含まれているブックは削除されません。",
    'shelves_delete_confirmation' => '本当にこの本棚を削除してよろしいですか？',
    'shelves_permissions' => '本棚の権限',
    'shelves_permissions_updated' => '本棚の権限を更新しました',
    'shelves_permissions_active' => '本棚の権限は有効です',
    'shelves_permissions_cascade_warning' => '本棚の権限は含まれる本には自動的に継承されません。これは、1つのブックが複数の本棚に存在する可能性があるためです。ただし、以下のオプションを使用すると権限を子ブックにコピーできます。',
    'shelves_copy_permissions_to_books' => 'ブックに権限をコピー',
    'shelves_copy_permissions' => '権限をコピー',
    'shelves_copy_permissions_explain' => 'これにより、この本棚の現在の権限設定を本棚に含まれるすべてのブックに適用します。有効にする前に、この本棚の権限への変更が保存されていることを確認してください。',
    'shelves_copy_permission_success' => '本棚の権限が:count個のブックにコピーされました',

    // Books
    'book' => 'ブック',
    'books' => 'ブック',
    'x_books' => ':count ブック',
    'books_empty' => 'まだブックは作成されていません',
    'books_popular' => '人気のブック',
    'books_recent' => '最近のブック',
    'books_new' => '新しいブック',
    'books_new_action' => '新しいブック',
    'books_popular_empty' => 'ここに人気のブックが表示されます。',
    'books_new_empty' => '最近作成されたブックがここに表示されます。',
    'books_create' => '新しいブックを作成',
    'books_delete' => 'ブックを削除',
    'books_delete_named' => 'ブック「:bookName」を削除',
    'books_delete_explain' => '「:bookName」を削除すると、ブック内のページとチャプターも削除されます。',
    'books_delete_confirmation' => '本当にこのブックを削除してよろしいですか？',
    'books_edit' => 'ブックを編集',
    'books_edit_named' => 'ブック「:bookName」を編集',
    'books_form_book_name' => 'ブック名',
    'books_save' => 'ブックを保存',
    'books_permissions' => 'ブックの権限',
    'books_permissions_updated' => 'ブックの権限を更新しました',
    'books_empty_contents' => 'まだページまたはチャプターが作成されていません。',
    'books_empty_create_page' => '新しいページを作成',
    'books_empty_sort_current_book' => 'ブックの並び順を変更',
    'books_empty_add_chapter' => 'チャプターを追加',
    'books_permissions_active' => 'ブックの権限は有効です',
    'books_search_this' => 'このブックから検索',
    'books_navigation' => '目次',
    'books_sort' => '並び順を変更',
    'books_sort_named' => 'ブック「:bookName」を並べ替え',
    'books_sort_name' => '名前で並べ替え',
    'books_sort_created' => '作成日で並べ替え',
    'books_sort_updated' => '更新日で並べ替え',
    'books_sort_chapters_first' => 'チャプターを先に',
    'books_sort_chapters_last' => 'チャプターを後に',
    'books_sort_show_other' => '他のブックを表示',
    'books_sort_save' => '並び順を保存',
    'books_copy' => 'ブックをコピー',
    'books_copy_success' => 'ブックが正常にコピーされました',

    // Chapters
    'chapter' => 'チャプター',
    'chapters' => 'チャプター',
    'x_chapters' => ':count チャプター',
    'chapters_popular' => '人気のチャプター',
    'chapters_new' => 'チャプターを作成',
    'chapters_create' => 'チャプターを作成',
    'chapters_delete' => 'チャプターを削除',
    'chapters_delete_named' => 'チャプター「:chapterName」を削除',
    'chapters_delete_explain' => 'これにより、チャプター「:chapterName」が削除されます。このチャプターに存在するページもすべて削除されます。',
    'chapters_delete_confirm' => 'チャプターを削除してよろしいですか？',
    'chapters_edit' => 'チャプターを編集',
    'chapters_edit_named' => 'チャプター「:chapterName」を編集',
    'chapters_save' => 'チャプターを保存',
    'chapters_move' => 'チャプターを移動',
    'chapters_move_named' => 'チャプター「:chapterName」を移動',
    'chapter_move_success' => 'チャプターを「:bookName」に移動しました',
    'chapters_copy' => 'チャプターをコピー',
    'chapters_copy_success' => 'チャプターが正常にコピーされました',
    'chapters_permissions' => 'チャプター権限',
    'chapters_empty' => 'まだチャプター内にページはありません。',
    'chapters_permissions_active' => 'チャプターの権限は有効です',
    'chapters_permissions_success' => 'チャプターの権限を更新しました',
    'chapters_search_this' => 'このチャプターを検索',

    // Pages
    'page' => 'ページ',
    'pages' => 'ページ',
    'x_pages' => ':count ページ',
    'pages_popular' => '人気のページ',
    'pages_new' => 'ページを作成',
    'pages_attachments' => '添付',
    'pages_navigation' => 'ページナビゲーション',
    'pages_delete' => 'ページを削除',
    'pages_delete_named' => 'ページ :pageName を削除',
    'pages_delete_draft_named' => 'ページ :pageName の下書きを削除',
    'pages_delete_draft' => 'ページの下書きを削除',
    'pages_delete_success' => 'ページを削除しました',
    'pages_delete_draft_success' => 'ページの下書きを削除しました',
    'pages_delete_confirm' => 'このページを削除してもよろしいですか？',
    'pages_delete_draft_confirm' => 'このページの下書きを削除してもよろしいですか？',
    'pages_editing_named' => 'ページ :pageName を編集',
    'pages_edit_draft_options' => '下書きオプション',
    'pages_edit_save_draft' => '下書きを保存',
    'pages_edit_draft' => 'ページの下書きを編集',
    'pages_editing_draft' => '下書きを編集中',
    'pages_editing_page' => 'ページを編集中',
    'pages_edit_draft_save_at' => '下書きを保存済み: ',
    'pages_edit_delete_draft' => '下書きを削除',
    'pages_edit_discard_draft' => '下書きを破棄',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => '編集内容についての説明',
    'pages_edit_enter_changelog_desc' => 'どのような変更を行ったのかを記録してください',
    'pages_edit_enter_changelog' => '編集内容を入力',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'ページを保存',
    'pages_title' => 'ページタイトル',
    'pages_name' => 'ページ名',
    'pages_md_editor' => 'エディター',
    'pages_md_preview' => 'プレビュー',
    'pages_md_insert_image' => '画像を挿入',
    'pages_md_insert_link' => 'エンティティへのリンクを挿入',
    'pages_md_insert_drawing' => '描画を追加',
    'pages_not_in_chapter' => 'チャプターが設定されていません',
    'pages_move' => 'ページを移動',
    'pages_move_success' => 'ページを ":parentName" へ移動しました',
    'pages_copy' => 'ページをコピー',
    'pages_copy_desination' => 'コピー先',
    'pages_copy_success' => 'ページが正常にコピーされました',
    'pages_permissions' => 'ページの権限設定',
    'pages_permissions_success' => 'ページの権限を更新しました',
    'pages_revision' => '編集履歴',
    'pages_revisions' => '編集履歴',
    'pages_revisions_named' => ':pageName のリビジョン',
    'pages_revision_named' => ':pageName のリビジョン',
    'pages_revision_restored_from' => '#:id :summary から復元',
    'pages_revisions_created_by' => '作成者',
    'pages_revisions_date' => '日付',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'リビジョン #:id',
    'pages_revisions_numbered_changes' => 'リビジョン #:id の変更',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => '説明',
    'pages_revisions_changes' => '変更点',
    'pages_revisions_current' => '現在のバージョン',
    'pages_revisions_preview' => 'プレビュー',
    'pages_revisions_restore' => '復元',
    'pages_revisions_none' => 'このページにはリビジョンがありません',
    'pages_copy_link' => 'リンクをコピー',
    'pages_edit_content_link' => 'コンテンツの編集',
    'pages_permissions_active' => 'ページの権限は有効です',
    'pages_initial_revision' => '初回の公開',
    'pages_initial_name' => '新規ページ',
    'pages_editing_draft_notification' => ':timeDiffに保存された下書きを編集しています。',
    'pages_draft_edited_notification' => 'このページは更新されています。下書きを破棄することを推奨します。',
    'pages_draft_page_changed_since_creation' => 'この下書きが作成されてから、このページが更新されました。この下書きを破棄するか、ページの変更を上書きしないように注意することを推奨します。',
    'pages_draft_edit_active' => [
        'start_a' => ':count人のユーザがページの編集を開始しました',
        'start_b' => ':userNameがページの編集を開始しました',
        'time_a' => '数秒前に保存されました',
        'time_b' => ':minCount分前に保存されました',
        'message' => ':start :time. 他のユーザによる更新を上書きしないよう注意してください。',
    ],
    'pages_draft_discarded' => '下書きが破棄されました。エディタは現在の内容へ復元されています。',
    'pages_specific' => '特定のページ',
    'pages_is_template' => 'ページテンプレート',

    // Editor Sidebar
    'page_tags' => 'タグ',
    'chapter_tags' => 'チャプターのタグ',
    'book_tags' => 'ブックのタグ',
    'shelf_tags' => '本棚のタグ',
    'tag' => 'タグ',
    'tags' =>  'タグ',
    'tag_name' =>  'タグの名前',
    'tag_value' => '内容 (オプション)',
    'tags_explain' => "タグを設定すると、コンテンツの管理が容易になります。\nより高度な管理をしたい場合、タグに内容を設定できます。",
    'tags_add' => 'タグを追加',
    'tags_remove' => 'このタグを削除',
    'tags_usages' => 'タグの総使用回数',
    'tags_assigned_pages' => '割り当てられているページの数',
    'tags_assigned_chapters' => '割り当てられているチャプターの数',
    'tags_assigned_books' => '割り当てられているブックの数',
    'tags_assigned_shelves' => '割り当てられている本棚の数',
    'tags_x_unique_values' => ':count個のユニークな値',
    'tags_all_values' => '全ての値',
    'tags_view_tags' => 'タグを表示',
    'tags_view_existing_tags' => '既存のタグを表示',
    'tags_list_empty_hint' => 'タグはページエディタのサイドバーまたはブック、チャプター、本棚の詳細を編集しているときに割り当てることができます。',
    'attachments' => '添付ファイル',
    'attachments_explain' => 'ファイルをアップロードまたはリンクを添付することができます。これらはサイドバーで確認できます。',
    'attachments_explain_instant_save' => 'この変更は即座に保存されます。',
    'attachments_items' => 'アイテム',
    'attachments_upload' => 'アップロード',
    'attachments_link' => 'リンクを添付',
    'attachments_set_link' => 'リンクを設定',
    'attachments_delete' => 'この添付ファイルを削除してよろしいですか？',
    'attachments_dropzone' => 'ファイルをドロップするか、クリックして選択',
    'attachments_no_files' => 'ファイルはアップロードされていません',
    'attachments_explain_link' => 'ファイルをアップロードしたくない場合、他のページやクラウド上のファイルへのリンクを添付できます。',
    'attachments_link_name' => 'リンク名',
    'attachment_link' => '添付リンク',
    'attachments_link_url' => 'ファイルURL',
    'attachments_link_url_hint' => 'WebサイトまたはファイルへのURL',
    'attach' => '添付',
    'attachments_insert_link' => '添付ファイルへのリンクをページに追加',
    'attachments_edit_file' => 'ファイルを編集',
    'attachments_edit_file_name' => 'ファイル名',
    'attachments_edit_drop_upload' => 'ファイルをドロップするか、クリックしてアップロード',
    'attachments_order_updated' => '添付ファイルの並び順が変更されました',
    'attachments_updated_success' => '添付ファイルが更新されました',
    'attachments_deleted' => '添付は削除されました',
    'attachments_file_uploaded' => 'ファイルがアップロードされました',
    'attachments_file_updated' => 'ファイルが更新されました',
    'attachments_link_attached' => 'リンクがページへ添付されました',
    'templates' => 'テンプレート',
    'templates_set_as_template' => 'テンプレートに設定',
    'templates_explain_set_as_template' => 'このページをテンプレートとして設定すると、他のページを作成する際にこの内容を利用することができます。他のユーザーは、このページの表示権限を持っていればこのテンプレートを使用できます。',
    'templates_replace_content' => 'ページの内容を置換',
    'templates_append_content' => 'ページの末尾に追加',
    'templates_prepend_content' => 'ページの先頭に追加',

    // Profile View
    'profile_user_for_x' => ':time前に作成',
    'profile_created_content' => '作成したコンテンツ',
    'profile_not_created_pages' => ':userNameはページを作成していません',
    'profile_not_created_chapters' => ':userNameはチャプターを作成していません',
    'profile_not_created_books' => ':userNameはブックを作成していません',
    'profile_not_created_shelves' => ':userNameは本棚を作成していません',

    // Comments
    'comment' => 'コメント',
    'comments' => 'コメント',
    'comment_add' => 'コメント追加',
    'comment_placeholder' => 'コメントを記入してく下さい',
    'comment_count' => '{0} コメントはありません|[1,*] コメント:count件',
    'comment_save' => 'コメントを保存',
    'comment_saving' => 'コメントを保存中...',
    'comment_deleting' => 'コメントを削除中...',
    'comment_new' => '新規コメント作成',
    'comment_created' => 'コメントを作成しました :createDiff',
    'comment_updated' => ':username により更新しました :updateDiff',
    'comment_deleted_success' => 'コメントを削除しました',
    'comment_created_success' => 'コメントを追加しました',
    'comment_updated_success' => 'コメントを更新しました',
    'comment_delete_confirm' => '本当にこのコメントを削除しますか?',
    'comment_in_reply_to' => ':commentIdへ返信',

    // Revision
    'revision_delete_confirm' => 'このリビジョンを削除しますか？',
    'revision_restore_confirm' => 'このリビジョンを復元してよろしいですか？現在のページの内容が置換されます。',
    'revision_delete_success' => 'リビジョンを削除しました',
    'revision_cannot_delete_latest' => '最新のリビジョンを削除できません。',

    // Copy view
    'copy_consider' => 'コンテンツをコピーする場合は以下の点にご注意ください。',
    'copy_consider_permissions' => 'カスタム権限設定はコピーされません。',
    'copy_consider_owner' => 'あなたはコピーされた全てのコンテンツの所有者になります。',
    'copy_consider_images' => 'ページの画像ファイルは複製されず、元の画像は最初にアップロードされたページとの関係を保持します。',
    'copy_consider_attachments' => 'ページの添付ファイルはコピーされません。',
    'copy_consider_access' => '場所、所有者または権限を変更すると、以前アクセスできなかったユーザーがこのコンテンツにアクセスできるようになる可能性があります。',
];
