<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedávno vytvořené',
    'recently_created_pages' => 'Nedávno vytvořené stránky',
    'recently_updated_pages' => 'Nedávno aktualizované stránky',
    'recently_created_chapters' => 'Nedávno vytvořené kapitoly',
    'recently_created_books' => 'Nedávno vytvořené knihy',
    'recently_created_shelves' => 'Nedávno vytvořené knihovny',
    'recently_update' => 'Nedávno aktualizované',
    'recently_viewed' => 'Nedávno zobrazené',
    'recent_activity' => 'Nedávné aktivity',
    'create_now' => 'Vytvořit nyní',
    'revisions' => 'Revize',
    'meta_revision' => 'Revize č. :revisionCount',
    'meta_created' => 'Vytvořeno :timeLength',
    'meta_created_name' => 'Vytvořeno :timeLength uživatelem :user',
    'meta_updated' => 'Aktualizováno :timeLength',
    'meta_updated_name' => 'Aktualizováno :timeLength uživatelem :user',
    'meta_owned_name' => 'Vlastník :user',
    'meta_reference_page_count' => 'Odkazováno na 1 stránce|Odkazováno na :count stranách',
    'entity_select' => 'Výběr entity',
    'entity_select_lack_permission' => 'Nemáte dostatečná oprávnění k výběru této položky',
    'images' => 'Obrázky',
    'my_recent_drafts' => 'Mé nedávné koncepty',
    'my_recently_viewed' => 'Mé nedávno zobrazené',
    'my_most_viewed_favourites' => 'Mé nejčastěji zobrazené oblíbené',
    'my_favourites' => 'Mé oblíbené',
    'no_pages_viewed' => 'Nezobrazili jste žádné stránky',
    'no_pages_recently_created' => 'Žádné nedávno vytvořené stránky',
    'no_pages_recently_updated' => 'Žádné nedávno aktualizované stránky',
    'export' => 'Exportovat',
    'export_html' => 'HTML stránka s celým obsahem',
    'export_pdf' => 'PDF dokument',
    'export_text' => 'Textový soubor',
    'export_md' => 'Markdown',

    // Permissions and restrictions
    'permissions' => 'Oprávnění',
    'permissions_desc' => 'Nastavte oprávnění, které změní výchozích oprávnění pochazejících z uživatelské role.',
    'permissions_book_cascade' => 'Oprávnění nastavená v knihách budou automaticky kaskádována do podřízených kapitol a stránek, pokud nemají svá vlastní oprávnění.',
    'permissions_chapter_cascade' => 'Oprávnění nastavená v knihách budou automaticky kaskádována do podřízených kapitol a stránek, pokud nemají svá vlastní oprávnění.',
    'permissions_save' => 'Uložit oprávnění',
    'permissions_owner' => 'Vlastník',
    'permissions_role_everyone_else' => 'Všichni ostatní',
    'permissions_role_everyone_else_desc' => 'Nastavte oprávnění pro všechny role, které nejsou výslovně přepsány.',
    'permissions_role_override' => 'Přepsat oprávnění pro roli',
    'permissions_inherit_defaults' => 'Zdědit výchozí oprávnění',

    // Search
    'search_results' => 'Výsledky hledání',
    'search_total_results_found' => '{1}Nalezen :count výsledek|[2,4]Nalezeny :count výsledky|[5,*]Nalezeno :count výsledků',
    'search_clear' => 'Vymazat hledání',
    'search_no_pages' => 'Tomuto hledání neodpovídají žádné stránky',
    'search_for_term' => 'Hledat :term',
    'search_more' => 'Další výsledky',
    'search_advanced' => 'Rozšířené hledání',
    'search_terms' => 'Hledané výrazy',
    'search_content_type' => 'Typ obsahu',
    'search_exact_matches' => 'Přesné shody',
    'search_tags' => 'Hledat štítky',
    'search_options' => 'Možnosti',
    'search_viewed_by_me' => 'Zobrazeno mnou',
    'search_not_viewed_by_me' => 'Nezobrazeno mnou',
    'search_permissions_set' => 'Sada oprávnění',
    'search_created_by_me' => 'Vytvořeno mnou',
    'search_updated_by_me' => 'Aktualizováno mnou',
    'search_owned_by_me' => 'Patřící mně',
    'search_date_options' => 'Možnosti data',
    'search_updated_before' => 'Aktualizováno před',
    'search_updated_after' => 'Aktualizováno po',
    'search_created_before' => 'Vytvořeno před',
    'search_created_after' => 'Vytvořeno po',
    'search_set_date' => 'Nastavit datum',
    'search_update' => 'Aktualizovat hledání',

    // Shelves
    'shelf' => 'Knihovna',
    'shelves' => 'Knihovny',
    'x_shelves' => '{0}:count knihoven|{1}:count knihovna|[2,4]:count knihovny|[5,*]:count knihoven',
    'shelves_empty' => 'Nebyly vytvořeny žádné knihovny',
    'shelves_create' => 'Vytvořit novou knihovnu',
    'shelves_popular' => 'Populární knihovny',
    'shelves_new' => 'Nové knihovny',
    'shelves_new_action' => 'Nová Knihovna',
    'shelves_popular_empty' => 'Nejpopulárnější knihovny se objeví zde.',
    'shelves_new_empty' => 'Zde se zobrazí nejnověji vytvořené knihovny.',
    'shelves_save' => 'Uložit knihovnu',
    'shelves_books' => 'Knihy v této knihovně',
    'shelves_add_books' => 'Přidat knihy do knihovny',
    'shelves_drag_books' => 'Přetáhněte knihy níže a přidejte je do této knihovny',
    'shelves_empty_contents' => 'Tato knihovna neobsahuje žádné knihy',
    'shelves_edit_and_assign' => 'Upravit knihovnu a přiřadit knihy',
    'shelves_edit_named' => 'Upravit knihovnu :name',
    'shelves_edit' => 'Upravit knihovnu',
    'shelves_delete' => 'Odstranit knihovnu',
    'shelves_delete_named' => 'Odstranit knihovnu :name',
    'shelves_delete_explain' => "Chystáte se smazat knihovnu ':name'. Knihy v ní obsažené zůstanou zachovány.",
    'shelves_delete_confirmation' => 'Opravdu chcete odstranit tuto knihovnu?',
    'shelves_permissions' => 'Oprávnění knihovny',
    'shelves_permissions_updated' => 'Oprávnění knihovny byla aktualizována',
    'shelves_permissions_active' => 'Oprávnění knihovny byla aktivována',
    'shelves_permissions_cascade_warning' => 'Oprávnění v Knihovnách nejsou automaticky kaskádována do obsažených knih. To proto, že kniha může existovat ve více Knihovnách. Oprávnění však lze zkopírovat do podřízených knih pomocí níže uvedené možnosti.',
    'shelves_permissions_create' => 'Oprávnění k vytváření Shelf se používají pouze ke kopírování oprávnění do dětských knih pomocí níže uvedené akce. Nekontrolují schopnost vytvářet knihy.',
    'shelves_copy_permissions_to_books' => 'Kopírovat oprávnění na knihy',
    'shelves_copy_permissions' => 'Kopírovat oprávnění',
    'shelves_copy_permissions_explain' => 'Toto použije aktuální nastavení oprávnění knihovny na všechny knihy v ní obsažené. Před aktivací se ujistěte, že byly uloženy všechny změny oprávnění této knihovny.',
    'shelves_copy_permission_success' => 'Oprávnění knihovny byla zkopírována na :count knih',

    // Books
    'book' => 'Kniha',
    'books' => 'Knihy',
    'x_books' => '{0}:count knih|{1}:count kniha|[2,4]:count knihy|[5,*]:count knih',
    'books_empty' => 'Nebyly vytvořeny žádné knihy',
    'books_popular' => 'Oblíbené knihy',
    'books_recent' => 'Nedávné knihy',
    'books_new' => 'Nové knihy',
    'books_new_action' => 'Nová kniha',
    'books_popular_empty' => 'Zde se zobrazí nejoblíbenější knihy.',
    'books_new_empty' => 'Zde se zobrazí nejnověji vytvořené knihy.',
    'books_create' => 'Vytvořit novou knihu',
    'books_delete' => 'Odstranit knihu',
    'books_delete_named' => 'Odstranit knihu :bookName',
    'books_delete_explain' => 'Toto odstraní knihu ‚:bookName‘. Všechny stránky a kapitoly v této knize budou také odstraněny.',
    'books_delete_confirmation' => 'Opravdu chcete odstranit tuto knihu?',
    'books_edit' => 'Upravit knihu',
    'books_edit_named' => 'Upravit knihu :bookName',
    'books_form_book_name' => 'Název knihy',
    'books_save' => 'Uložit knihu',
    'books_permissions' => 'Oprávnění knihy',
    'books_permissions_updated' => 'Oprávnění knihy byla aktualizována',
    'books_empty_contents' => 'Pro tuto knihu nebyly vytvořeny žádné stránky ani kapitoly.',
    'books_empty_create_page' => 'Vytvořit novou stránku',
    'books_empty_sort_current_book' => 'Seřadit aktuální knihu',
    'books_empty_add_chapter' => 'Přidat kapitolu',
    'books_permissions_active' => 'Oprávnění knihy byla aktivována',
    'books_search_this' => 'Prohledat tuto knihu',
    'books_navigation' => 'Navigace knihy',
    'books_sort' => 'Seřadit obsah knihy',
    'books_sort_desc' => 'Přesunout kapitoly a stránky v knize pro přeuspořádání obsahu. Mohou být přidány další knihy, které umožňují snadný přesun kapitol a stránek mezi knihami.',
    'books_sort_named' => 'Seřadit knihu :bookName',
    'books_sort_name' => 'Seřadit podle názvu',
    'books_sort_created' => 'Seřadit podle data vytvoření',
    'books_sort_updated' => 'Seřadit podle data aktualizace',
    'books_sort_chapters_first' => 'Kapitoly jako první',
    'books_sort_chapters_last' => 'Kapitoly jako poslední',
    'books_sort_show_other' => 'Zobrazit ostatní knihy',
    'books_sort_save' => 'Uložit nové pořadí',
    'books_sort_show_other_desc' => 'Přidejte sem další knihy, abyste je zahrnuli do operace třídění, a umožněte snadnou křížovou reorganizaci.',
    'books_sort_move_up' => 'Posunout Nahoru',
    'books_sort_move_down' => 'Posunout dolů',
    'books_sort_move_prev_book' => 'Přesunout se na předchozí knihu',
    'books_sort_move_next_book' => 'Přesunout se na další knihu',
    'books_sort_move_prev_chapter' => 'Přesunout se do předchozí kapitoly',
    'books_sort_move_next_chapter' => 'Přesunout se do další kapitoly',
    'books_sort_move_book_start' => 'Přesunout se na začátek knihy',
    'books_sort_move_book_end' => 'Přesunout se na konec knihy',
    'books_sort_move_before_chapter' => 'Přesunout se před kapitolu',
    'books_sort_move_after_chapter' => 'Přesunout se za kapitolu',
    'books_copy' => 'Kopírovat knihu',
    'books_copy_success' => 'Kniha byla úspěšně zkopírována',

    // Chapters
    'chapter' => 'Kapitola',
    'chapters' => 'Kapitoly',
    'x_chapters' => '{0}:count Kapitol|{1}:count Kapitola|[2,4]:count Kapitoly|[5,*]:count Kapitol',
    'chapters_popular' => 'Populární kapitoly',
    'chapters_new' => 'Nová kapitola',
    'chapters_create' => 'Vytvořit novou kapitolu',
    'chapters_delete' => 'Odstranit kapitolu',
    'chapters_delete_named' => 'Odstranit kapitolu :chapterName',
    'chapters_delete_explain' => 'Toto odstraní kapitolu ‚:chapterName‘. Všechny stránky v této kapitole budou také odstraněny.',
    'chapters_delete_confirm' => 'Opravdu chcete odstranit tuto kapitolu?',
    'chapters_edit' => 'Upravit kapitolu',
    'chapters_edit_named' => 'Upravit kapitolu :chapterName',
    'chapters_save' => 'Uložit kapitolu',
    'chapters_move' => 'Přesunout kapitolu',
    'chapters_move_named' => 'Přesunout kapitolu :chapterName',
    'chapters_copy' => 'Kopírovat kapitolu',
    'chapters_copy_success' => 'Kapitola byla úspěšně zkopírována',
    'chapters_permissions' => 'Oprávnění kapitoly',
    'chapters_empty' => 'Tato kapitola neobsahuje žádné stránky',
    'chapters_permissions_active' => 'Oprávnění kapitoly byla aktivována',
    'chapters_permissions_success' => 'Oprávnění kapitoly byla aktualizována',
    'chapters_search_this' => 'Prohledat tuto kapitolu',
    'chapter_sort_book' => 'Seřadit knihy',

    // Pages
    'page' => 'Stránka',
    'pages' => 'Stránky',
    'x_pages' => '{0}:count Stran|{1}:count Strana|[2,4]:count Strany|[5,*]:count Stran',
    'pages_popular' => 'Populární stránky',
    'pages_new' => 'Nová stránka',
    'pages_attachments' => 'Přílohy',
    'pages_navigation' => 'Obsah stránky',
    'pages_delete' => 'Odstranit stránku',
    'pages_delete_named' => 'Odstranit stránku :pageName',
    'pages_delete_draft_named' => 'Odstranit koncept stránky :pageName',
    'pages_delete_draft' => 'Odstranit koncept stránky',
    'pages_delete_success' => 'Stránka odstraněna',
    'pages_delete_draft_success' => 'Koncept stránky odstraněn',
    'pages_delete_confirm' => 'Opravdu chcete odstranit tuto stránku?',
    'pages_delete_draft_confirm' => 'Opravdu chcete odstranit tento koncept stránky?',
    'pages_editing_named' => 'Úpravy stránky :pageName',
    'pages_edit_draft_options' => 'Možnosti konceptu',
    'pages_edit_save_draft' => 'Uložit koncept',
    'pages_edit_draft' => 'Upravit koncept stránky',
    'pages_editing_draft' => 'Úprava konceptu',
    'pages_editing_page' => 'Úpravy stránky',
    'pages_edit_draft_save_at' => 'Koncept uložen v ',
    'pages_edit_delete_draft' => 'Odstranit koncept',
    'pages_edit_delete_draft_confirm' => 'Jste si jisti, že chcete odstranit změny vašich konceptů? Všechny vaše změny, od posledního úplného uložení, budou ztraceny a editor bude aktualizován s nejnovějším stavem nekonceptu stránky.',
    'pages_edit_discard_draft' => 'Zahodit koncept',
    'pages_edit_switch_to_markdown' => 'Přepnout na Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Vytvořený obsah)',
    'pages_edit_switch_to_markdown_stable' => '(Stabilní obsah)',
    'pages_edit_switch_to_wysiwyg' => 'Přepnout na WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Nastavit protokol změn',
    'pages_edit_enter_changelog_desc' => 'Zadejte stručný popis změn, které jste provedli',
    'pages_edit_enter_changelog' => 'Zadejte protokol změn',
    'pages_editor_switch_title' => 'Přepnout editor',
    'pages_editor_switch_are_you_sure' => 'Jste si jisti, že chcete změnit editor této stránky?',
    'pages_editor_switch_consider_following' => 'Při změně editorů zvažte následující:',
    'pages_editor_switch_consideration_a' => 'Po uložení bude nová možnost editoru použita všemi budoucími editory, včetně těch, které nemusí být schopny změnit typ editoru.',
    'pages_editor_switch_consideration_b' => 'To může za určitých okolností vést ke ztrátě podrobností a syntaxe.',
    'pages_editor_switch_consideration_c' => 'Změny tagu nebo seznamu změn, provedené od posledního uložení, nebudou přetrvávat po celé této změně.',
    'pages_save' => 'Uložit stránku',
    'pages_title' => 'Nadpis stránky',
    'pages_name' => 'Název stránky',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Náhled',
    'pages_md_insert_image' => 'Vložit obrázek',
    'pages_md_insert_link' => 'Vložit odkaz na entitu',
    'pages_md_insert_drawing' => 'Vložit kresbu',
    'pages_md_show_preview' => 'Zobrazit náhled',
    'pages_md_sync_scroll' => 'Synchronizovat náhled',
    'pages_drawing_unsaved' => 'Nalezen neuložený výkres',
    'pages_drawing_unsaved_confirm' => 'Byly nalezeny neuložené kresby z předchozí neúspěšné pokusu o uložení kresby. Chcete je obnovit a pokračovat v úpravě této neuložené kresby?',
    'pages_not_in_chapter' => 'Stránka není v kapitole',
    'pages_move' => 'Přesunout stránku',
    'pages_copy' => 'Kopírovat stránku',
    'pages_copy_desination' => 'Cíl kopírování',
    'pages_copy_success' => 'Stránka byla zkopírována',
    'pages_permissions' => 'Oprávnění stránky',
    'pages_permissions_success' => 'Oprávnění stránky byla aktualizována',
    'pages_revision' => 'Revize',
    'pages_revisions' => 'Revize stránky',
    'pages_revisions_desc' => 'Níže uvedené jsou všechny minulé revize této stránky. Můžete se podívat zpět, porovnat a obnovit staré verze stránek, pokud to dovolí oprávnění. Úplná historie stránky nemusí být plně zohledněna, protože v závislosti na konfiguraci systému mohou být staré revize automaticky smazány.',
    'pages_revisions_named' => 'Revize stránky pro :pageName',
    'pages_revision_named' => 'Revize stránky pro :pageName',
    'pages_revision_restored_from' => 'Obnoveno z #:id; :summary',
    'pages_revisions_created_by' => 'Vytvořeno uživatelem',
    'pages_revisions_date' => 'Datum revize',
    'pages_revisions_number' => 'Č. ',
    'pages_revisions_sort_number' => 'Číslo revize',
    'pages_revisions_numbered' => 'Revize č. :id',
    'pages_revisions_numbered_changes' => 'Změny revize č. :id',
    'pages_revisions_editor' => 'Typ editoru',
    'pages_revisions_changelog' => 'Protokol změn',
    'pages_revisions_changes' => 'Změny',
    'pages_revisions_current' => 'Aktuální verze',
    'pages_revisions_preview' => 'Náhled',
    'pages_revisions_restore' => 'Obnovit',
    'pages_revisions_none' => 'Tato stránka nemá žádné revize',
    'pages_copy_link' => 'Kopírovat odkaz',
    'pages_edit_content_link' => 'Přejít na sekci v editoru',
    'pages_pointer_enter_mode' => 'Zadejte režim výběru sekce',
    'pages_pointer_label' => 'Možnosti sekce stránky',
    'pages_pointer_permalink' => 'Trvalý odkaz sekce stránky',
    'pages_pointer_include_tag' => 'Sekce stránky obsahuje štítek',
    'pages_pointer_toggle_link' => 'Režim trvalého odkazu, stiskem zobrazíte značku',
    'pages_pointer_toggle_include' => 'Zahrnout režim značek, stiskněte pro zobrazení trvalého odkazu',
    'pages_permissions_active' => 'Oprávnění stránky byla aktivována',
    'pages_initial_revision' => 'První vydání',
    'pages_references_update_revision' => 'Automatická aktualizace interních odkazů',
    'pages_initial_name' => 'Nová stránka',
    'pages_editing_draft_notification' => 'Právě upravujete koncept, který byl uložen :timeDiff.',
    'pages_draft_edited_notification' => 'Tato stránka se od té doby změnila. Je doporučeno aktuální koncept zahodit.',
    'pages_draft_page_changed_since_creation' => 'Tato stránka byla aktualizována od vytvoření tohoto konceptu. Doporučuje se zrušit tento koncept nebo se postarat o to, abyste si nepřepsali žádné již zadané změny.',
    'pages_draft_edit_active' => [
        'start_a' => 'Uživatelé začali upravovat tuto stránku (celkem :count)',
        'start_b' => ':userName začal/a upravovat tuto stránku',
        'time_a' => 'od doby, kdy byla tato stránky naposledy aktualizována',
        'time_b' => 'v posledních minutách (:minCount min.)',
        'message' => ':start :time. Dávejte pozor abyste nepřepsali změny ostatním!',
    ],
    'pages_draft_discarded' => 'Koncept byl zahozen. Editor nyní obsahuje aktuální verzi stránky',
    'pages_draft_deleted' => 'Koncept byl zahozen. Editor nyní obsahuje aktuální verzi stránky',
    'pages_specific' => 'Konkrétní stránka',
    'pages_is_template' => 'Šablona stránky',

    // Editor Sidebar
    'page_tags' => 'Štítky stránky',
    'chapter_tags' => 'Štítky kapitoly',
    'book_tags' => 'Štítky knihy',
    'shelf_tags' => 'Štítky knihovny',
    'tag' => 'Štítek',
    'tags' =>  'Štítky',
    'tags_index_desc' => 'Tagy mohou být použity pro obsah v rámci systému pro pružnou formu kategorizace. Tagy mohou mít klíč i hodnotu, přičemž hodnota je nepovinná. Po aplikaci může být obsah dotazován pomocí názvu a hodnoty štítku.',
    'tag_name' =>  'Název štítku',
    'tag_value' => 'Hodnota štítku (volitelné)',
    'tags_explain' => "Přidejte si štítky pro lepší kategorizaci knih. \n Štítky mohou nést i hodnotu pro detailnější klasifikaci.",
    'tags_add' => 'Přidat další štítek',
    'tags_remove' => 'Odstranit tento štítek',
    'tags_usages' => 'Počet použití štítku',
    'tags_assigned_pages' => 'Přiřazeno ke stránkám',
    'tags_assigned_chapters' => 'Přiřazeno ke kapitolám',
    'tags_assigned_books' => 'Přiřazeno ke knihám',
    'tags_assigned_shelves' => 'Přiřazeno ke knihovnám',
    'tags_x_unique_values' => ':count jedinečných hodnot',
    'tags_all_values' => 'Všechny hodnoty',
    'tags_view_tags' => 'Zobrazit štítky',
    'tags_view_existing_tags' => 'Zobrazit existující štítky',
    'tags_list_empty_hint' => 'Štítky mohou být přiřazeny pomocí postranního panelu editoru stránky nebo při úpravách podrobností knihy, kapitoly nebo knihovny.',
    'attachments' => 'Přílohy',
    'attachments_explain' => 'Nahrajte soubory nebo připojte odkazy, které se zobrazí na stránce. Budou k nalezení v postranní liště.',
    'attachments_explain_instant_save' => 'Změny zde provedené se okamžitě ukládají.',
    'attachments_upload' => 'Nahrát soubor',
    'attachments_link' => 'Připojit odkaz',
    'attachments_upload_drop' => 'Případně můžete přetáhnout soubor zde, abyste jej mohli nahrát jako přílohu.',
    'attachments_set_link' => 'Nastavit odkaz',
    'attachments_delete' => 'Jste si jisti, že chcete odstranit tuto přílohu?',
    'attachments_dropzone' => 'Soubory nahrajete přetažením sem',
    'attachments_no_files' => 'Žádné soubory nebyly nahrány',
    'attachments_explain_link' => 'Můžete pouze připojit odkaz pokud nechcete nahrávat soubor přímo. Může to být odkaz na jinou stránku nebo na soubor v cloudu.',
    'attachments_link_name' => 'Název odkazu',
    'attachment_link' => 'Odkaz na přílohu',
    'attachments_link_url' => 'Odkaz na soubor',
    'attachments_link_url_hint' => 'URL stránky nebo souboru',
    'attach' => 'Připojit',
    'attachments_insert_link' => 'Přidat odkaz na přílohu do stránky',
    'attachments_edit_file' => 'Upravit soubor',
    'attachments_edit_file_name' => 'Název souboru',
    'attachments_edit_drop_upload' => 'Přetáhněte sem soubor myší nebo klikněte pro nahrání nového souboru a následné přepsání starého',
    'attachments_order_updated' => 'Pořadí příloh aktualizováno',
    'attachments_updated_success' => 'Podrobnosti příloh aktualizovány',
    'attachments_deleted' => 'Příloha byla odstraněna',
    'attachments_file_uploaded' => 'Soubor byl nahrán',
    'attachments_file_updated' => 'Soubor byl aktualizován',
    'attachments_link_attached' => 'Odkaz byl přiložen ke stránce',
    'templates' => 'Šablony',
    'templates_set_as_template' => 'Tato stránka je šablona',
    'templates_explain_set_as_template' => 'Tuto stránku můžete nastavit jako šablonu, aby byl její obsah využit při vytváření dalších stránek. Ostatní uživatelé budou moci použít tuto šablonu, pokud mají oprávnění k zobrazení této stránky.',
    'templates_replace_content' => 'Nahradit obsah stránky',
    'templates_append_content' => 'Připojit za obsah stránky',
    'templates_prepend_content' => 'Připojit před obsah stránky',

    // Profile View
    'profile_user_for_x' => 'Uživatelem již :time',
    'profile_created_content' => 'Vytvořený obsah',
    'profile_not_created_pages' => ':userName nevytvořil/a žádné stránky',
    'profile_not_created_chapters' => ':userName nevytvořil/a žádné kapitoly',
    'profile_not_created_books' => ':userName nevytvořil/a žádné knihy',
    'profile_not_created_shelves' => ':userName nevytvořil/a žádné knihovny',

    // Comments
    'comment' => 'Komentář',
    'comments' => 'Komentáře',
    'comment_add' => 'Přidat komentář',
    'comment_placeholder' => 'Zde zadejte komentář',
    'comment_count' => '{0} Bez komentářů|{1} 1 komentář|[2,4] :count komentáře|[5,*] :count komentářů',
    'comment_save' => 'Uložit komentář',
    'comment_new' => 'Nový komentář',
    'comment_created' => 'komentováno :createDiff',
    'comment_updated' => 'Aktualizováno :updateDiff uživatelem :username',
    'comment_updated_indicator' => 'Aktualizováno',
    'comment_deleted_success' => 'Komentář odstraněn',
    'comment_created_success' => 'Komentář přidán',
    'comment_updated_success' => 'Komentář aktualizován',
    'comment_delete_confirm' => 'Opravdu chcete odstranit tento komentář?',
    'comment_in_reply_to' => 'Odpověď na :commentId',
    'comment_editor_explain' => 'Zde jsou komentáře, které zůstaly na této stránce. Komentáře lze přidat a spravovat při prohlížení uložené stránky.',

    // Revision
    'revision_delete_confirm' => 'Opravdu chcete odstranit tuto revizi?',
    'revision_restore_confirm' => 'Jste si jisti, že chcete obnovit tuto revizi? Aktuální obsah stránky bude nahrazen.',
    'revision_cannot_delete_latest' => 'Nelze odstranit poslední revizi.',

    // Copy view
    'copy_consider' => 'Při kopírování obsahu zvažte prosím níže.',
    'copy_consider_permissions' => 'Vlastní nastavení oprávnění nebudou zkopírovány.',
    'copy_consider_owner' => 'Stanete se vlastníkem veškerého kopírovaného obsahu.',
    'copy_consider_images' => 'Soubory obrázků stránky nebudou duplikovány a původní obrázky si zachovají jejich vztah ke stránce, na kterou byly původně nahrány.',
    'copy_consider_attachments' => 'Přílohy stránky nebudou zkopírovány.',
    'copy_consider_access' => 'Po změně umístění, vlastníka nebo oprávnění může dojít k tomu, že obsah může být přístupný těm, kteří přístup dříve něměli.',

    // Conversions
    'convert_to_shelf' => 'Převést na knihovnu',
    'convert_to_shelf_contents_desc' => 'Tuto knihu můžete převést na novou knihovnu se stejným obsahem. Kapitoly obsažené v této knize budou převedeny na nové knihy. Pokud tato kniha obsahuje jakékoli stránky, které nejsou uvedeny v kapitole, Tato kniha bude přejmenována a bude obsahovat tyto stránky a tato kniha se stane součástí nové knihovny.',
    'convert_to_shelf_permissions_desc' => 'Veškerá oprávnění nastavená v této knize budou zkopírována do nové knihovny a do všech nových podřazených knih, které nemají vlastní oprávnění. Všimněte si, že oprávnění na regálech neobsahují automatickou kaskádu na obsah, jak to dělají pro knihy.',
    'convert_book' => 'Převést knihu',
    'convert_book_confirm' => 'Opravdu chcete převést tuto knihu?',
    'convert_undo_warning' => 'To nelze tak snadno vrátit zpět.',
    'convert_to_book' => 'Převést knihu',
    'convert_to_book_desc' => 'Tuto kapitolu můžete převést na novou knihu se stejným obsahem. Veškerá oprávnění nastavená v této kapitole budou zkopírována do nové knihy, ale všechna zděděná oprávnění, z nadřazené knihy nebudou kopírovány, což by mohlo vést ke změně kontroly přístupu.',
    'convert_chapter' => 'Převést kapitolu',
    'convert_chapter_confirm' => 'Jste si jisti, že chcete převést tuto kapitolu?',

    // References
    'references' => 'Odkazy',
    'references_none' => 'Nebyly nalezeny žádné odkazy na tuto položku.',
    'references_to_desc' => 'Níže jsou uvedeny všechny známé stránky systému, které odkazují na tuto položku.',

    // Watch Options
    'watch' => 'Sledovat',
    'watch_title_default' => 'Výchozí vlastnosti',
    'watch_desc_default' => 'Vrátit sledování pouze do výchozích nastavení oznámení.',
    'watch_title_ignore' => 'Ignorovat',
    'watch_desc_ignore' => 'Ignorovat všechna oznámení, včetně oznámení z nastavení uživatelské úrovně.',
    'watch_title_new' => 'Nová stránka',
    'watch_desc_new' => 'Upozornit, když je v této položce vytvořena nová stránka.',
    'watch_title_updates' => 'Všechny aktualizace stránky',
    'watch_desc_updates' => 'Upozornit na všechny nové stránky a změny stránek.',
    'watch_desc_updates_page' => 'Upozornit na všechny změny stránky.',
    'watch_title_comments' => 'Všechny aktualizace a komentáře stránky',
    'watch_desc_comments' => 'Upozornit na všechny nové stránky, změny stránek a nové komentáře.',
    'watch_desc_comments_page' => 'Upozornit na změny stránky a nové komentáře.',
    'watch_change_default' => 'Změnit výchozí předvolby oznámení',
    'watch_detail_ignore' => 'Ignorování oznámení',
    'watch_detail_new' => 'Sledování nových stránek',
    'watch_detail_updates' => 'Sledování nových stránek a aktualizací',
    'watch_detail_comments' => 'Sledování nových stránek, aktualizací a komentářů',
    'watch_detail_parent_book' => 'Sledování přes nadřazenou knihu',
    'watch_detail_parent_book_ignore' => 'Ignorování přes nadřazenou knihu',
    'watch_detail_parent_chapter' => 'Sledování přes nadřazenou knihu',
    'watch_detail_parent_chapter_ignore' => 'Ignorování přes nadřazenou knihu',
];
