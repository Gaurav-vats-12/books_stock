<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Δημιουργήθηκε Πρόσφατα',
    'recently_created_pages' => 'Πρόσφατα Δημιουργημένες Σελίδες',
    'recently_updated_pages' => 'Πρόσφατες Ενημερώσεις',
    'recently_created_chapters' => 'Πρόσφατα Δημιουργημένα Κεφάλαια',
    'recently_created_books' => 'Πρόσφατα Δημιουργημένα Βιβλία',
    'recently_created_shelves' => 'Πρόσφατα Δημιουργημένα Ράφια',
    'recently_update' => 'Ενημερώθηκε πρόσφατα',
    'recently_viewed' => 'Πρόσφατα προβεβλημένα',
    'recent_activity' => 'Πρόσφατη Δραστηριότητα',
    'create_now' => 'Δημιουργία ενός τώρα',
    'revisions' => 'Αναθεωρήσεις',
    'meta_revision' => 'Αναθεώρηση #:revisionCount',
    'meta_created' => 'Δημιουργήθηκε :timeLength',
    'meta_created_name' => 'Δημιουργήθηκε :timeLength από :user',
    'meta_updated' => 'Ενημερώθηκε :timeLength',
    'meta_updated_name' => 'Ενημερώθηκε :timeLength από :user',
    'meta_owned_name' => 'Ανήκει στον :user',
    'meta_reference_page_count' => 'Αναφορά σε :count σελίδας|Αναφορά στο :count σελίδες',
    'entity_select' => 'Επιλογή Οντότητας',
    'entity_select_lack_permission' => 'Δεν έχετε τα απαιτούμενα δικαιώματα για να επιλέξετε αυτό το στοιχείο',
    'images' => 'Εικόνες',
    'my_recent_drafts' => 'Τα πρόσφατα προσχέδιά μου',
    'my_recently_viewed' => 'Είδα πρόσφατα',
    'my_most_viewed_favourites' => 'Συχνά Αγαπημένα',
    'my_favourites' => 'Τα αγαπημένα μου',
    'no_pages_viewed' => 'Δεν έχετε δει καμία σελίδα',
    'no_pages_recently_created' => 'Δεν έχουν δημιουργηθεί πρόσφατα σελίδες',
    'no_pages_recently_updated' => 'Δεν υπάρχουν πρόσφατα ενημερώσεις σελίδων',
    'export' => 'Εξαγωγή',
    'export_html' => 'Αρχείο Web',
    'export_pdf' => 'Αρχείο PDF',
    'export_text' => 'Αρχείο Απλού κειμένου',
    'export_md' => 'Αρχείο Markdown',

    // Permissions and restrictions
    'permissions' => 'Δικαιώματα',
    'permissions_desc' => 'Ορίστε εδώ δικαιώματα για να παρακάμψετε τα προκαθορισμένα δικαιώματα που παρέχονται από τους ρόλους των χρηστών.',
    'permissions_book_cascade' => 'Τα δικαιώματα που έχουν οριστεί στα Βιβλία θα κλιμακώνονται αυτόματα στα θυγατρικά Κεφάλαια και Σελίδες, εκτός εάν έχουν καθοριστεί διαφορετικά σε αυτά.',
    'permissions_chapter_cascade' => 'Τα δικαιώματα που έχουν οριστεί στα Κεφάλαια θα κλιμακώνονται αυτόματα στις θυγατρικές Σελίδες, εκτός εάν έχουν καθοριστεί διαφορετικά σε αυτές.',
    'permissions_save' => 'Αποθήκευση Δικαιωμάτων',
    'permissions_owner' => 'Ιδιοκτήτης / Κάτοχος',
    'permissions_role_everyone_else' => 'Όλοι Οι Άλλοι',
    'permissions_role_everyone_else_desc' => 'Ορίστε δικαιώματα για όλους τους ρόλους που δεν παραβλέπονται συγκεκριμένα.',
    'permissions_role_override' => 'Παράκαμψη δικαιωμάτων για ρόλο',
    'permissions_inherit_defaults' => 'Κληρονόμηση προεπιλογών',

    // Search
    'search_results' => 'Αποτελέσματα αναζήτησης',
    'search_total_results_found' => 'Βρέθηκε :count αποτέλεσμα|Βρέθηκαν συνολικά :count αποτελέσματα',
    'search_clear' => 'Καθαρισμός αναζήτησης',
    'search_no_pages' => 'Καμία σελίδα δεν ταιριάζει με αυτήν την αναζήτηση',
    'search_for_term' => 'Αναζήτηση για :term',
    'search_more' => 'Περισσότερα αποτελέσματα',
    'search_advanced' => 'Προχωρημένη Αναζήτηση',
    'search_terms' => 'Αναζήτηση Όρων',
    'search_content_type' => 'Τύπος περιεχομένου',
    'search_exact_matches' => 'Ακριβείς αντιστοιχίες',
    'search_tags' => 'Αναζητήσεις Ετικετών',
    'search_options' => 'Επιλογές',
    'search_viewed_by_me' => 'Προβλήθηκε από εμένα',
    'search_not_viewed_by_me' => 'Δεν προβλήθηκε από εμένα',
    'search_permissions_set' => 'Τα δικαιώματα ορίστηκαν',
    'search_created_by_me' => 'Δημιουργήθηκε από εμένα',
    'search_updated_by_me' => 'Ενημερώθηκε από εμένα',
    'search_owned_by_me' => 'Ανήκει σε μένα',
    'search_date_options' => 'Επιλογές Ημερομηνίας',
    'search_updated_before' => 'Ενημερώθηκε πριν',
    'search_updated_after' => 'Ενημερώθηκε μετά',
    'search_created_before' => 'Δημιουργήθηκε πριν',
    'search_created_after' => 'Δημιουργήθηκε μετά',
    'search_set_date' => 'Ορισμός Ημερομηνίας',
    'search_update' => 'Ενημέρωση Αναζήτησης',

    // Shelves
    'shelf' => 'Ράφι',
    'shelves' => 'Ράφια',
    'x_shelves' => ':count Ράφι|:count Ράφια',
    'shelves_empty' => 'Δεν έχουν δημιουργηθεί ράφια',
    'shelves_create' => 'Δημιουργία νέου ραφιού',
    'shelves_popular' => 'Δημοφιλή Ράφια',
    'shelves_new' => 'Νέα Ράφια',
    'shelves_new_action' => 'Νέο Ράφι',
    'shelves_popular_empty' => 'Τα πιο δημοφιλή ράφια θα εμφανιστούν εδώ.',
    'shelves_new_empty' => 'Τα πιο πρόσφατα ράφια που δημιουργήθηκαν θα εμφανιστούν εδώ.',
    'shelves_save' => 'Αποθήκευση Ραφιού',
    'shelves_books' => 'Βιβλία σε αυτό το Ράφι',
    'shelves_add_books' => 'Διαθέσιμα Βιβλία, για προσθήκη στο Ράφι',
    'shelves_drag_books' => 'Σύρετε εδώ βιβλία της διπλανή λίστας, για να τα προσθέσετε στο Ράφι',
    'shelves_empty_contents' => 'Σε αυτό το Ράφι δεν έχουν εκχωρηθεί βιβλία',
    'shelves_edit_and_assign' => 'Επεξεργαστείτε το Ράφι για να εκχωρήσετε βιβλία',
    'shelves_edit_named' => 'Επεξεργασία Ραφιού :name',
    'shelves_edit' => 'Επεξεργασία Ραφιού',
    'shelves_delete' => 'Διαγραφή Ραφιού',
    'shelves_delete_named' => 'Delete Bookshelf :name',
    'shelves_delete_explain' => "This will delete the bookshelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this bookshelf?',
    'shelves_permissions' => 'Bookshelf Permissions',
    'shelves_permissions_updated' => 'Bookshelf Permissions Updated',
    'shelves_permissions_active' => 'Bookshelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on bookshelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Αντιγραφή δικαιωμάτων στα βιβλία',
    'shelves_copy_permissions' => 'Αντιγραφή Δικαιωμάτων',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this bookshelf to all books contained within. Before activating, ensure any changes to the permissions of this bookshelf have been saved.',
    'shelves_copy_permission_success' => 'Bookshelf permissions copied to :count books',

    // Books
    'book' => 'Βιβλίο',
    'books' => 'Βιβλία',
    'x_books' => ':count Βιβλίο|:count Βιβλία',
    'books_empty' => 'Δεν έχουν δημιουργηθεί βιβλία ακόμα',
    'books_popular' => 'Δημοφιλή Βιβλία',
    'books_recent' => 'Πρόσφατα Βιβλία',
    'books_new' => 'Νέα Βιβλία',
    'books_new_action' => 'Νέο βιβλίο',
    'books_popular_empty' => 'Τα πιο δημοφιλή εμφανίζονται εδώ.',
    'books_new_empty' => 'Θα εμφανιστούν εδώ, αυτά που δημιουργήθηκαν πιο πρόσφατα.',
    'books_create' => 'Δημιουργία νέου βιβλίου',
    'books_delete' => 'Διαγραφή Βιβλίου',
    'books_delete_named' => 'Διαγραφή Βιβλίου :bookname',
    'books_delete_explain' => 'Αυτό θα διαγράψει το βιβλίο με το όνομα \':bookName\'. Όλες οι σελίδες και τα κεφάλαια θα αφαιρεθούν.',
    'books_delete_confirmation' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το βιβλίο;',
    'books_edit' => 'Επεξεργασία Βιβλίου',
    'books_edit_named' => 'Επεξεργασία Βιβλίου :bookname',
    'books_form_book_name' => 'Όνομα Βιβλίου',
    'books_save' => 'Αποθήκευση Βιβλίου',
    'books_permissions' => 'Άδειες Βιβλίου',
    'books_permissions_updated' => 'Τα Δικαιώματα Βιβλίου Ενημερώθηκαν',
    'books_empty_contents' => 'Δεν έχουν δημιουργηθεί σελίδες ή κεφάλαια για αυτό το βιβλίο.',
    'books_empty_create_page' => 'Δημιουργία νέας σελίδας',
    'books_empty_sort_current_book' => 'Ταξινόμηση του τρέχοντος βιβλίου',
    'books_empty_add_chapter' => 'Προσθήκη κεφαλαίου',
    'books_permissions_active' => 'Ενεργά Δικαιώματα ´Βιβλίου',
    'books_search_this' => 'Αναζήτηση σε αυτό το βιβλίο',
    'books_navigation' => 'Πλοήγηση Βιβλίου',
    'books_sort' => 'Ταξινόμηση Περιεχομένων Βιβλίου',
    'books_sort_desc' => 'Μετακινήστε κεφάλαια και σελίδες μέσα σε ένα βιβλίο για να αναδιοργανώσετε τα περιεχόμενά του. Μπορούν να προστεθούν και άλλα βιβλία, και επιτρέπουν την εύκολη μετακίνηση κεφαλαίων και σελίδων μεταξύ βιβλίων.',
    'books_sort_named' => 'Ταξινόμηση Βιβλίου :bookname',
    'books_sort_name' => 'Ταξινόμηση κατά όνομα',
    'books_sort_created' => 'Ταξινόμηση κατά ημερομηνία δημιουργίας',
    'books_sort_updated' => 'Ταξινόμηση κατά ημερομηνία ενημέρωσης',
    'books_sort_chapters_first' => 'Τα Κεφάλαια Πρώτα',
    'books_sort_chapters_last' => 'Τελευταία Κεφάλαια',
    'books_sort_show_other' => 'Εμφάνιση Άλλων Βιβλίων',
    'books_sort_save' => 'Αποθήκευση Νέας Ταξινόμησης',
    'books_sort_show_other_desc' => 'Προσθέστε άλλα βιβλία εδώ για να τα συμπεριλάβετε στην ταξινόμηση και να επιτρέψετε την εύκολη αναδιοργάνωση μεταξύ των βιβλίων.',
    'books_sort_move_up' => 'Μετακίνηση προς τα Επάνω',
    'books_sort_move_down' => 'Μετακίνηση προς τα Κάτω',
    'books_sort_move_prev_book' => 'Μετακίνηση στο προηγούμενο Βιβλίο',
    'books_sort_move_next_book' => 'Μετακίνηση στο επόμενο Βιβλίο',
    'books_sort_move_prev_chapter' => 'Μετακίνηση στο προηγούμενο Κεφάλαιο',
    'books_sort_move_next_chapter' => 'Μετακίνηση στο επόμενο Κεφάλαιο',
    'books_sort_move_book_start' => 'Μετακίνηση στην Αρχή του Βιβλίου',
    'books_sort_move_book_end' => 'Μετακίνηση στο Τέλος του Βιβλίου',
    'books_sort_move_before_chapter' => 'Μετακίνηση στο προηγούμενο Κεφάλαιο',
    'books_sort_move_after_chapter' => 'Μετακίνηση στο επόμενο Κεφάλαιο',
    'books_copy' => 'Αντιγραφή Βιβλίου',
    'books_copy_success' => 'Το βιβλίο αντιγράφηκε επιτυχώς',

    // Chapters
    'chapter' => 'Κεφάλαιο',
    'chapters' => 'Κεφάλαια',
    'x_chapters' => ':count Κεφάλαιο|:count Κεφάλαια',
    'chapters_popular' => 'Δημοφιλή Κεφάλαια',
    'chapters_new' => 'Νέο Κεφάλαιο',
    'chapters_create' => 'Δημιουργία Νέου Κεφαλαίου',
    'chapters_delete' => 'Διαγραφή Κεφαλαίου',
    'chapters_delete_named' => 'Διαγραφή Κεφαλαίου :chapterName',
    'chapters_delete_explain' => 'Αυτό θα διαγράψει το κεφάλαιο με το όνομα \':chapterName\'. Όλες οι σελίδες που υπάρχουν μέσα σε αυτό το κεφάλαιο θα διαγραφούν επίσης.',
    'chapters_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το κεφάλαιο;',
    'chapters_edit' => 'Επεξεργασία Κεφαλαίου',
    'chapters_edit_named' => 'Επεξεργασία Κεφαλαίου :chapterName',
    'chapters_save' => 'Αποθήκευση Κεφαλαίου',
    'chapters_move' => 'Μετακίνηση Κεφαλαίου',
    'chapters_move_named' => 'Μετακίνηση Κεφαλαίου :chapterName',
    'chapters_copy' => 'Αντιγραφή Κεφαλαίου',
    'chapters_copy_success' => 'Το κεφάλαιο αντιγράφηκε επιτυχώς',
    'chapters_permissions' => 'Δικαιώματα Κεφαλαίου',
    'chapters_empty' => 'Καμία σελίδα δεν βρίσκεται σε αυτό το κεφάλαιο.',
    'chapters_permissions_active' => 'Ενεργά Δικαιώματα Κεφαλαίου',
    'chapters_permissions_success' => 'Τα Δικαιώματα Κεφαλαίου Ενημερώθηκαν',
    'chapters_search_this' => 'Αναζήτηση σε αυτό το κεφάλαιο',
    'chapter_sort_book' => 'Ταξινόμηση Βιβλίου',

    // Pages
    'page' => 'Σελίδα',
    'pages' => 'Σελίδες',
    'x_pages' => ':count Σελίδα|:count Σελίδες',
    'pages_popular' => 'Δημοφιλείς Σελίδες',
    'pages_new' => 'Νέα Σελίδα',
    'pages_attachments' => 'Συνημμένα',
    'pages_navigation' => 'Πλοήγηση στη σελίδα',
    'pages_delete' => 'Διαγραφή Σελίδας',
    'pages_delete_named' => 'Διαγραφή Σελίδας :pageName',
    'pages_delete_draft_named' => 'Διαγραφή Προσχέδιας Σελίδας :pageName',
    'pages_delete_draft' => 'Διαγραφή Προσχέδιας Σελίδας',
    'pages_delete_success' => 'Η σελίδα διαγράφηκε',
    'pages_delete_draft_success' => 'Η προσχέδια (πρόχειρη) σελίδα διαγράφηκε',
    'pages_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή τη σελίδα;',
    'pages_delete_draft_confirm' => 'Θέλετε σίγουρα να διαγράψετε την προσχέδια σελίδα;',
    'pages_editing_named' => 'Επεξεργασία Σελίδας :pageName',
    'pages_edit_draft_options' => 'Επιλογές Προσχεδίου',
    'pages_edit_save_draft' => 'Αποθήκευση Προχείρου (Προσχεδίου)',
    'pages_edit_draft' => 'Επεξεργασία Προσχεδίου Σελίδας',
    'pages_editing_draft' => 'Επεξεργασία Προσχεδίου',
    'pages_editing_page' => 'Επεξεργασία Σελίδας',
    'pages_edit_draft_save_at' => 'Το προσχέδιο αποθηκεύτηκε στις ',
    'pages_edit_delete_draft' => 'Διαγραφή Προσχεδίου',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Απόρριψη Προσχεδίου',
    'pages_edit_switch_to_markdown' => 'Μετάβαση στον Επεξεργαστή Markdown',
    'pages_edit_switch_to_markdown_clean' => '(Καθαρισμός Περιεχομένου)',
    'pages_edit_switch_to_markdown_stable' => '(Σταθερό Περιεχόμενο)',
    'pages_edit_switch_to_wysiwyg' => 'Εναλλαγή στον επεξεργαστή WYSIWYG',
    'pages_edit_set_changelog' => 'Ορισμός καταγραφής αλλαγών',
    'pages_edit_enter_changelog_desc' => 'Εισάγετε μια σύντομη περιγραφή των αλλαγών που κάνατε',
    'pages_edit_enter_changelog' => 'Εισαγωγή Αρχείου Καταγραφής Αλλαγών',
    'pages_editor_switch_title' => 'Εναλλαγή Επεξεργαστή',
    'pages_editor_switch_are_you_sure' => 'Είστε βέβαιοι ότι θέλετε να αλλάξετε τον επεξεργαστή κειμένου για αυτή τη σελίδα;',
    'pages_editor_switch_consider_following' => 'Λάβετε υπόψη τα ακόλουθα όταν αλλάζετε συντάκτες:',
    'pages_editor_switch_consideration_a' => 'Μόλις αποθηκευτεί, η επιλογή του νέου επεξεργαστή κειμένου θα χρησιμοποιηθεί από τυχόν μελλοντικούς επεξεργαστές, συμπεριλαμβανομένων εκείνων που μπορεί να μην είναι σε θέση να αλλάξουν τον τύπο του επεξεργαστή κειμένου.',
    'pages_editor_switch_consideration_b' => 'Αυτό μπορεί να οδηγήσει σε απώλεια λεπτομερειών και κώδικα σε ορισμένες περιπτώσεις.',
    'pages_editor_switch_consideration_c' => 'Οι αλλαγές ετικετών ή αρχείων καταγραφής, που έγιναν από την τελευταία αποθήκευση, δεν θα συνεχιστούν σε αυτήν την αλλαγή.',
    'pages_save' => 'Αποθήκευση Σελίδας',
    'pages_title' => 'Τίτλος Σελίδας',
    'pages_name' => 'Όνομα Σελίδας',
    'pages_md_editor' => 'Επεξεργαστής',
    'pages_md_preview' => 'Προεπισκόπηση',
    'pages_md_insert_image' => 'Εισαγωγή Εικόνας',
    'pages_md_insert_link' => 'Εισαγωγή/Επεξεργασία συνδέσμου',
    'pages_md_insert_drawing' => 'Εισαγωγή Σχεδίου',
    'pages_md_show_preview' => 'Εμφάνιση προεπισκόπησης',
    'pages_md_sync_scroll' => 'Συγχρονισμός προεπισκόπησης',
    'pages_not_in_chapter' => 'Η σελίδα δεν είναι σε κεφάλαιο',
    'pages_move' => 'Μετακίνηση Σελίδας',
    'pages_copy' => 'Αντιγραφή Σελίδας',
    'pages_copy_desination' => 'Αντιγραφή Προορισμού',
    'pages_copy_success' => 'Η σελίδα αντιγράφηκε επιτυχώς',
    'pages_permissions' => 'Δικαιώματα Σελίδας',
    'pages_permissions_success' => 'Τα δικαιώματα σελίδας ενημερώθηκαν',
    'pages_revision' => 'Αναθεώρηση',
    'pages_revisions' => 'Αναθεωρήσεις Σελίδας',
    'pages_revisions_desc' => 'Παρακάτω αναφέρονται όλες οι προηγούμενες αναθεωρήσεις αυτής της Σελίδας. Μπορείτε να αναζητήσετε αντίγραφα ασφαλείας, να συγκρίνετε και να επαναφέρετε παλιές εκδόσεις Σελίδας, εάν τα δικαιώματα το επιτρέπουν. Το πλήρες ιστορικό της Σελίδας μπορεί να μην αντανακλάται πλήρως εδώ επειδή, ανάλογα με τη διαμόρφωση του συστήματος, οι παλιές αναθεωρήσεις θα μπορούσαν να διαγραφούν αυτόματα.',
    'pages_revisions_named' => 'Αναθεωρήσεις σελίδας για :pageName',
    'pages_revision_named' => 'Αναθεώρηση σελίδας για :pageName',
    'pages_revision_restored_from' => 'Επαναφορά από #:id; :summary',
    'pages_revisions_created_by' => 'Δημιουργήθηκε από',
    'pages_revisions_date' => 'Ημερομηνία Αναθεώρησης',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Αριθμός αναθεώρησης',
    'pages_revisions_numbered' => 'Αναθεώρηση #',
    'pages_revisions_numbered_changes' => 'Αναθεώρηση #:id Αλλαγές',
    'pages_revisions_editor' => 'Τύπος Επεξεργαστή',
    'pages_revisions_changelog' => 'Αρχείο καταγραφής αλλαγών',
    'pages_revisions_changes' => 'Αλλαγές',
    'pages_revisions_current' => 'Τρέχουσα Έκδοση',
    'pages_revisions_preview' => 'Προεπισκόπηση',
    'pages_revisions_restore' => 'Επαναφορά',
    'pages_revisions_none' => 'Αυτή η σελίδα δεν έχει αναθεωρήσεις',
    'pages_copy_link' => 'Αντιγραφή Συνδέσμου',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Ενεργά Δικαιώματα Σελίδας',
    'pages_initial_revision' => 'Αρχική δημοσίευση',
    'pages_references_update_revision' => 'Αυτόματη ενημέρωση του συστήματος των εσωτερικών συνδέσμων',
    'pages_initial_name' => 'Νέα Σελίδα',
    'pages_editing_draft_notification' => 'Αυτή τη στιγμή επεξεργάζεστε ένα προσχέδιο που αποθηκεύτηκε για τελευταία φορά :timeDiff.',
    'pages_draft_edited_notification' => 'Αυτή η σελίδα έχει ενημερωθεί από εκείνη τη στιγμή. Συνιστάται να απορρίψετε αυτό το προσχέδιο.',
    'pages_draft_page_changed_since_creation' => 'Αυτή η σελίδα έχει ενημερωθεί από τότε που δημιουργήθηκε αυτό το προσχέδιο. Συνιστάται να απορρίψετε αυτό το σχέδιο ή να φροντίσετε να μην αντικαταστήσετε τυχόν αλλαγές σελίδας.',
    'pages_draft_edit_active' => [
        'start_a' => ':count χρήστες έχουν αρχίσει να επεξεργάζονται αυτή τη σελίδα',
        'start_b' => ':userName έχει ξεκινήσει την επεξεργασία αυτής της σελίδας',
        'time_a' => 'από τότε που η σελίδα ενημερώθηκε τελευταία φορά',
        'time_b' => 'τα τελευταία :mint λεπτά',
        'message' => ':start :time. Προσέξτε να μην αντικαταστήσετε ο ένας τις ενημερώσεις του άλλου!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Συγκεκριμένη Σελίδα',
    'pages_is_template' => 'Πρότυπο σελίδας',

    // Editor Sidebar
    'page_tags' => 'Ετικέτες Σελίδας',
    'chapter_tags' => 'Ετικέτες Κεφαλαίου',
    'book_tags' => 'Ετικέτες Βιβλίου',
    'shelf_tags' => 'Ετικέτες Ραφιών',
    'tag' => 'Ετικέτα',
    'tags' =>  'Ετικέτες',
    'tags_index_desc' => 'Οι Ετικέτες μπορούν να εφαρμοστούν στο περιεχόμενο μέσα στο σύστημα για να εφαρμοστεί μια ευέλικτη μορφή κατηγοριοποίησης. Οι Ετικέτες μπορούν να έχουν τόσο κλειδί όσο και αξία, με την τιμή να είναι προαιρετική. Μόλις εφαρμοστεί, μπορεί να παρθεί περιεχόμενο χρησιμοποιώντας το όνομα της Ετικέτας και την τιμή.',
    'tag_name' =>  'Όνομα Ετικέτας',
    'tag_value' => 'Τιμή Ετικέτας (Προαιρετικό)',
    'tags_explain' => "Προσθέστε μερικές ετικέτες για να κατηγοριοποιήσετε καλύτερα το περιεχόμενό σας. \n Μπορείτε να αντιστοιχίσετε μια τιμή σε μια ετικέτα για πιο αναλυτική οργάνωση.",
    'tags_add' => 'Προσθήκη άλλης ετικέτας',
    'tags_remove' => 'Αφαίρεση ετικέτας',
    'tags_usages' => 'Συνολικές χρήσεις ετικετών',
    'tags_assigned_pages' => 'Ανατέθηκε σε σελίδες',
    'tags_assigned_chapters' => 'Ανατέθηκε στα κεφάλαια',
    'tags_assigned_books' => 'Ανατέθηκε σε Βιβλία',
    'tags_assigned_shelves' => 'Ανατέθηκε σε Ράφια',
    'tags_x_unique_values' => ':count μοναδικές τιμές',
    'tags_all_values' => 'Όλες οι τιμές',
    'tags_view_tags' => 'Προβολή Ετικετών',
    'tags_view_existing_tags' => 'Δείτε τις υπάρχουσες ετικέτες',
    'tags_list_empty_hint' => 'Οι ετικέτες μπορούν να εκχωρηθούν μέσω της πλαϊνής μπάρας συντάκτη σελίδας ή κατά την επεξεργασία των λεπτομερειών ενός βιβλίου, κεφαλαίου ή ράφι.',
    'attachments' => 'Συνημμένα',
    'attachments_explain' => 'Ανεβάστε μερικά αρχεία ή επισυνάψτε μερικούς συνδέσμους για να εμφανίσετε στη σελίδα σας. Αυτά είναι ορατά στην πλαϊνή μπάρα σελίδας.',
    'attachments_explain_instant_save' => 'Οι αλλαγές εδώ αποθηκεύονται αμέσως.',
    'attachments_upload' => 'Μεταφόρτωση Αρχείου',
    'attachments_link' => 'Επισύναψη Δεσμού',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Ορισμός Συνδέσμου',
    'attachments_delete' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το συνημμένο;',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Δεν έχουν μεταφορτωθεί αρχεία',
    'attachments_explain_link' => 'Μπορείτε να επισυνάψετε έναν σύνδεσμο αν προτιμάτε να μην ανεβάσετε ένα αρχείο. Αυτό μπορεί να είναι ένας σύνδεσμος σε άλλη σελίδα ή ένας σύνδεσμος σε ένα αρχείο στο σύννεφο.',
    'attachments_link_name' => 'Όνομα Συνδέσμου',
    'attachment_link' => 'Σύνδεσμος συνημμένου',
    'attachments_link_url' => 'Σύνδεση σε αρχείο',
    'attachments_link_url_hint' => 'Url του ιστότοπου ή του αρχείου',
    'attach' => 'Επισύναψη',
    'attachments_insert_link' => 'Προσθήκη συνημμένου συνδέσμου στη σελίδα',
    'attachments_edit_file' => 'Επεξεργασία Αρχείου',
    'attachments_edit_file_name' => 'Όνομα Αρχείου',
    'attachments_edit_drop_upload' => 'Ρίξτε αρχεία ή κάντε κλικ εδώ για να ανεβάσετε και να αντικαταστήσετε',
    'attachments_order_updated' => 'Η παραγγελία συνημμένων ενημερώθηκε',
    'attachments_updated_success' => 'Οι λεπτομέρειες συνημμένου ενημερώθηκαν',
    'attachments_deleted' => 'Το συνημμένο διαγράφηκε',
    'attachments_file_uploaded' => 'Το αρχείο μεταφορτώθηκε επιτυχώς',
    'attachments_file_updated' => 'Το αρχείο ενημερώθηκε επιτυχώς',
    'attachments_link_attached' => 'Ο σύνδεσμος συνδέθηκε επιτυχώς στη σελίδα',
    'templates' => 'Πρότυπα',
    'templates_set_as_template' => 'Η σελίδα είναι πρότυπο',
    'templates_explain_set_as_template' => 'Μπορείτε να ορίσετε αυτή τη σελίδα ως πρότυπο, έτσι ώστε τα περιεχόμενά της να χρησιμοποιούνται κατά τη δημιουργία άλλων σελίδων. Άλλοι χρήστες θα μπορούν να χρησιμοποιήσουν αυτό το πρότυπο αν έχουν δικαιώματα προβολής για αυτή τη σελίδα.',
    'templates_replace_content' => 'Αντικατάσταση περιεχομένου σελίδας',
    'templates_append_content' => 'Προσθήκη στο περιεχόμενο της σελίδας',
    'templates_prepend_content' => 'Προεπιλογή στο περιεχόμενο της σελίδας',

    // Profile View
    'profile_user_for_x' => 'Χρήστης για :time',
    'profile_created_content' => 'Δημιουργία Περιεχομένου',
    'profile_not_created_pages' => ':userName δεν έχει δημιουργήσει καμία σελίδα',
    'profile_not_created_chapters' => ':userName δεν έχει δημιουργήσει κεφάλαια',
    'profile_not_created_books' => ':userName δεν έχει δημιουργήσει βιβλία',
    'profile_not_created_shelves' => ':userName δεν έχει δημιουργήσει ράφια',

    // Comments
    'comment' => 'Σχόλιο',
    'comments' => 'Σχόλια',
    'comment_add' => 'Προσθήκη Σχολίου',
    'comment_placeholder' => 'Αφήστε ένα σχόλιο εδώ',
    'comment_count' => '{0} Κανένα Σχόλιο |{1} 1 Σχόλιο |[2,*] :count Σχόλια',
    'comment_save' => 'Αποθήκευση Σχολίου',
    'comment_new' => 'Νέο Σχόλιο',
    'comment_created' => 'σχολίασε :createDiff',
    'comment_updated' => 'Ενημερώθηκε :updateDiff από :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Σχόλιο διαγράφηκε',
    'comment_created_success' => 'Το σχόλιο προστέθηκε',
    'comment_updated_success' => 'Το σχόλιο ενημερώθηκε',
    'comment_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το σχόλιο;',
    'comment_in_reply_to' => 'Σε απάντηση στο :commentId',

    // Revision
    'revision_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την αναθεώρηση;',
    'revision_restore_confirm' => 'Είστε βέβαιοι ότι θέλετε να επαναφέρετε αυτή την αναθεώρηση; Τα τρέχοντα περιεχόμενα της σελίδας θα αντικατασταθούν.',
    'revision_cannot_delete_latest' => 'Δεν είναι δυνατή η διαγραφή της τελευταίας αναθεώρησης.',

    // Copy view
    'copy_consider' => 'Παρακαλώ σκεφτείτε τα παρακάτω κατά την αντιγραφή περιεχομένου.',
    'copy_consider_permissions' => 'Οι ρυθμίσεις προσαρμοσμένων δικαιωμάτων δεν θα αντιγραφούν.',
    'copy_consider_owner' => 'Θα γίνετε ο ιδιοκτήτης όλου του αντιγραμμένου περιεχομένου.',
    'copy_consider_images' => 'Τα αρχεία εικόνας σελίδας δεν θα αναπαραχθούν και οι αρχικές εικόνες θα διατηρήσουν τη σχέση τους με τη σελίδα στην οποία είχαν αρχικά μεταφορτωθεί.',
    'copy_consider_attachments' => 'Τα συνημμένα σελίδας δεν θα αντιγραφούν.',
    'copy_consider_access' => 'Μια αλλαγή της θέσης, του ιδιοκτήτη ή των δικαιωμάτων μπορεί να έχει ως αποτέλεσμα το περιεχόμενο αυτό να είναι προσβάσιμο σε χρήστες που προηγουμένως δεν είχαν πρόσβαση.',

    // Conversions
    'convert_to_shelf' => 'Μετατροπή σε ράφι',
    'convert_to_shelf_contents_desc' => 'Μπορείτε να μετατρέψετε αυτό το βιβλίο σε ένα νέο ράφι με το ίδιο περιεχόμενο. Κεφάλαια που περιέχονται σε αυτό το βιβλίο θα μετατραπούν σε νέα βιβλία. Αν αυτό το βιβλίο περιέχει σελίδες που δεν βρίσκονται σε κεφάλαιο, αυτό το βιβλίο θα μετονομαστεί και περιέχει τέτοιες σελίδες, και αυτό το βιβλίο θα γίνει μέρος του νέου ράφι.',
    'convert_to_shelf_permissions_desc' => 'Τυχόν δικαιώματα που ορίζονται σε αυτό το βιβλίο θα αντιγραφούν στο νέο ράφι και σε όλα τα νέα θυγατρικά βιβλία στα οποία δεν επιβάλλονται τα δικά τους δικαιώματα. Λάβετε υπόψη ότι τα δικαιώματα στα ράφια δεν μεταφέρονται αυτόματα σε περιεχόμενο εντός, όπως συμβαίνει για τα βιβλία.',
    'convert_book' => 'Μετατροπή Βιβλίου',
    'convert_book_confirm' => 'Είστε σίγουροι ότι θέλετε να μετατρέψετε αυτό το βιβλίο;',
    'convert_undo_warning' => 'Αυτό δεν μπορεί να αναιρεθεί τόσο εύκολα.',
    'convert_to_book' => 'Μετατροπή σε βιβλίο',
    'convert_to_book_desc' => 'Μπορείτε να μετατρέψετε αυτό το κεφάλαιο σε ένα νέο βιβλίο με το ίδιο περιεχόμενο. Τυχόν δικαιώματα που έχουν οριστεί σε αυτό το κεφάλαιο θα αντιγραφούν στο νέο βιβλίο αλλά τυχόν κληρονομημένα δικαιώματα, από το γονικό βιβλίο, δεν θα αντιγραφούν το οποίο θα μπορούσε να οδηγήσει σε αλλαγή του ελέγχου πρόσβασης.',
    'convert_chapter' => 'Μετατροπή Κεφαλαίου',
    'convert_chapter_confirm' => 'Είστε βέβαιοι ότι θέλετε να μετατρέψετε αυτό το κεφάλαιο;',

    // References
    'references' => 'Αναφορές',
    'references_none' => 'Δεν υπάρχουν αναφορές παρακολούθησης σε αυτό το στοιχείο.',
    'references_to_desc' => 'Παρακάτω εμφανίζονται όλες οι γνωστές σελίδες του συστήματος που συνδέονται με αυτό το στοιχείο.',
];
