<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ρυθμίσεις',
    'settings_save' => 'Αποθήκευση ρυθμίσεων',
    'settings_save_success' => 'Οι ρυθμίσεις αποθηκεύτηκαν',
    'system_version' => 'Έκδοση εφαρμογής',
    'categories' => 'Κατηγορίες',

    // App Settings
    'app_customization' => 'Προσαρμογή',
    'app_features_security' => 'Χαρακτηριστικά & Ασφάλεια',
    'app_name' => 'Όνομα Εφαρμογής',
    'app_name_desc' => 'Αυτό το όνομα εμφανίζεται στην κεφαλίδα της ιστοσελίδας και σε τυχόν μηνύματα ηλεκτρονικού ταχυδρομείου που αποστέλλονται από το σύστημα.',
    'app_name_header' => 'Εμφάνιση Ονόματος στην κεφαλίδα',
    'app_public_access' => 'Δημόσια Πρόσβαση',
    'app_public_access_desc' => 'Η ενεργοποίηση αυτής της επιλογής θα επιτρέψει στους επισκέπτες, που δεν είναι συνδεδεμένοι, να έχουν πρόσβαση στο περιεχόμενο της εφαρμογής BookStack.',
    'app_public_access_desc_guest' => 'Η πρόσβαση για δημόσιους επισκέπτες μπορεί να ελεγχθεί μέσω του χρήστη "Guest".',
    'app_public_access_toggle' => 'Να επιτρέπεται η δημόσια πρόσβαση',
    'app_public_viewing' => 'Να επιτρέπεται η δημόσια προβολή;',
    'app_secure_images' => 'Μεταφορτώσεις Εικόνων υψηλότερης Ασφάλειας',
    'app_secure_images_toggle' => 'Ενεργοποιήστε τις μεταφορτώσεις Εικόνων υψηλότερης Ασφάλειας',
    'app_secure_images_desc' => 'Για λόγους απόδοσης, όλες οι εικόνες είναι δημόσιες. Αυτή η επιλογή προσθέτει μια τυχαία συμβολοσειρά μπροστά από τις διευθύνσεις URL εικόνων, δύσκολο να τη μαντέψει κάποιος. Βεβαιωθείτε ότι τα ευρετήρια καταλόγου δεν είναι ενεργοποιημένα για να αποτρέψετε την εύκολη πρόσβαση.',
    'app_default_editor' => 'Προεπιλεγμένος Επεξεργαστής σελίδων',
    'app_default_editor_desc' => 'Επιλέξτε ποιο πρόγραμμα επεξεργασίας θα χρησιμοποιείται από προεπιλογή κατά την επεξεργασία νέων σελίδων. Αυτό μπορεί να παρακαμφθεί σε επίπεδο σελίδας όπου το επιτρέπουν τα δικαιώματα.',
    'app_custom_html' => 'Προσαρμοσμένο περιεχόμενο κεφαλίδας HTML',
    'app_custom_html_desc' => 'Οποιοδήποτε περιεχόμενο προστίθεται εδώ θα εισαχθεί στο κάτω μέρος της ενότητας <head> κάθε σελίδας. Αυτό είναι βολικό για την παράκαμψη ή προσθήκη στυλ καθώς και την προσθήκη κώδικα αναλυτικών στοιχείων.',
    'app_custom_html_disabled_notice' => 'Το προσαρμοσμένο περιεχόμενο κεφαλίδας HTML είναι απενεργοποιημένο σε αυτήν τη σελίδα ρυθμίσεων, για να διασφαλιστεί ότι τυχόν αλλαγές που θα πραγματοποιηθούν και θα προκαλέσουν δυσλειτουργία στην ιστοσελίδα σας, μπορούν να επαναφερθούν.',
    'app_logo' => 'Λογότυπο εφαρμογής',
    'app_logo_desc' => 'Αυτό χρησιμοποιείται στη γραμμή κεφαλίδας εφαρμογής, μεταξύ άλλων περιοχών. Αυτή η εικόνα θα πρέπει να είναι 86px σε ύψος. Οι μεγάλες εικόνες θα κλιμακωθούν.',
    'app_icon' => 'Εικονίδιο Εφαρμογής',
    'app_icon_desc' => 'Αυτό το εικονίδιο χρησιμοποιείται για τις καρτέλες περιηγητή και τα εικονίδια συντομεύσεων. Αυτό πρέπει να είναι μια τετράγωνη εικόνα 256px σε μορφή PNG.',
    'app_homepage' => 'Αρχική σελίδα εφαρμογής',
    'app_homepage_desc' => 'Επιλέξτε μια προβολή για εμφάνιση στην αρχική σελίδα αντί για την προεπιλεγμένη προβολή. Τα δικαιώματα σελίδων αγνοούνται για επιλεγμένες σελίδες.',
    'app_homepage_select' => 'Επιλέξτε μια σελίδα',
    'app_footer_links' => 'Σύνδεσμοι υποσέλιδου',
    'app_footer_links_desc' => 'Προσθέστε συνδέσμους για εμφάνιση στο υποσέλιδο του ιστότοπου. Αυτά θα εμφανίζονται στο κάτω μέρος των περισσότερων σελίδων, συμπεριλαμβανομένων εκείνων που δεν απαιτούν σύνδεση. Μπορείτε να χρησιμοποιήσετε μια ετικέτα "trans::<key>" για να χρησιμοποιήσετε μεταφράσεις που καθορίζονται από το σύστημα. Για παράδειγμα: Η χρήση του "trans::common.privacy_policy" θα παρέχει το μεταφρασμένο κείμενο "Πολιτική Απορρήτου" και το "trans::common.terms_of_service" θα παρέχει το μεταφρασμένο κείμενο "Όροι Παροχής Υπηρεσιών".',
    'app_footer_links_label' => 'Ετικέτα Συνδέσμου',
    'app_footer_links_url' => 'URL Σύνδεσης',
    'app_footer_links_add' => 'Προσθήκη Συνδέσμου υποσέλιδου',
    'app_disable_comments' => 'Απενεργοποίηση Σχολίων',
    'app_disable_comments_toggle' => 'Απενεργοποίηση Σχολίων',
    'app_disable_comments_desc' => 'Απενεργοποιεί τα σχόλια σε όλες τις σελίδες της εφαρμογής. <br> Τα υπάρχοντα σχόλια δεν εμφανίζονται.',

    // Color settings
    'color_scheme' => 'Θέμα Χρωμάτων Εφαρμογής',
    'color_scheme_desc' => 'Ορίστε τα χρώματα που θα χρησιμοποιηθούν στο περιβάλλον χρήστη της εφαρμογής. Τα χρώματα μπορούν να ρυθμιστούν ξεχωριστά για τις λειτουργίες Σκούρο ή Λευκό, για να ταιριάζει καλύτερα στο θέμα και να εξασφαλίσει αναγνωσιμότητα.',
    'ui_colors_desc' => 'Ορίστε το πρωτεύον χρώμα της εφαρμογής και το προεπιλεγμένο χρώμα συνδέσμου. Το πρωτεύον χρώμα χρησιμοποιείται κυρίως για την κεφαλίδα, τα κουμπιά και τις διακοσμήσεις διεπαφής. Το προεπιλεγμένο χρώμα συνδέσμου χρησιμοποιείται για συνδέσμους και ενέργειες που βασίζονται στο κείμενο, τόσο μέσα στο γραπτό περιεχόμενο όσο και στη διεπαφή της εφαρμογής.',
    'app_color' => 'Κυρίως χρώμα',
    'link_color' => 'Κυρίως χρώμα Συνδέσμου',
    'content_colors_desc' => 'Ορίζει τα χρώματα για όλα τα στοιχεία στην ιεραρχία οργάνωσης της ιστοσελίδας. Συνιστάται η επιλογή χρωμάτων με παρόμοια φωτεινότητα με τα προεπιλεγμένα, για μέγιστη αναγνωσιμότητα.',
    'bookshelf_color' => 'Χρώμα Ραφιού',
    'book_color' => 'Χρώμα Βιβλίων',
    'chapter_color' => 'Χρώμα Κεφαλαίων Βιβλίων',
    'page_color' => 'Χρώμα Σελίδων',
    'page_draft_color' => 'Χρώμα Πρoσχέδιων Σελίδων (Draft page)',

    // Registration Settings
    'reg_settings' => 'Εγγραφή',
    'reg_enable' => 'Ενεργοποίηση Εγγραφής',
    'reg_enable_toggle' => 'Ενεργοποίηση εγγραφής',
    'reg_enable_desc' => 'Όταν ενεργοποιηθεί η εγγραφή, ο χρήστης θα μπορεί να εγγραφεί ως χρήστης της εφαρμογής. Κατά την εγγραφή τους δίνεται ένας μοναδικός, προεπιλεγμένος ρόλος χρήστη.',
    'reg_default_role' => 'Προεπιλεγμένος ρόλος χρήστη μετά την εγγραφή',
    'reg_enable_external_warning' => 'Η παραπάνω επιλογή αγνοείται όταν ο εξωτερικός έλεγχος ταυτότητας LDAP ή SAML είναι ενεργός. Οι λογαριασμοί χρηστών για μη υπάρχοντα μέλη θα δημιουργηθούν αυτόματα εάν ο έλεγχος ταυτότητας, έναντι του εξωτερικού συστήματος που χρησιμοποιείται, είναι επιτυχής.',
    'reg_email_confirmation' => 'Επιβεβαίωση ηλεκτρονικού ταχυδρομείου',
    'reg_email_confirmation_toggle' => 'Απαιτείται η επιβεβαίωση μέσω email',
    'reg_confirm_email_desc' => 'Εάν χρησιμοποιείται περιορισμός τομέα, τότε θα απαιτείται επιβεβαίωση μέσω email και αυτή η επιλογή θα αγνοηθεί.',
    'reg_confirm_restrict_domain' => 'Περιορισμός Τομέα',
    'reg_confirm_restrict_domain_desc' => 'Εισαγάγετε μια λίστα διαχωρισμένων με κόμματα τομέων email στους οποίους θέλετε να περιορίσετε την εγγραφή. Θα σταλεί στους χρήστες ένα email για να επιβεβαιώσουν τη διεύθυνσή τους πριν τους επιτραπεί να αλληλεπιδράσουν με την εφαρμογή. <br> <strong>Σημειώστε ότι οι χρήστες θα μπορούν να αλλάξουν τις διευθύνσεις email τους μετά την επιτυχή εγγραφή</strong>.',
    'reg_confirm_restrict_domain_placeholder' => 'Δε έχουν ρυθμιστεί περιορισμοί ακόμα',

    // Maintenance settings
    'maint' => 'Συντήρηση',
    'maint_image_cleanup' => 'Εκκαθάριση Εικόνων',
    'maint_image_cleanup_desc' => 'Σαρώνει το περιεχόμενο σελίδων και τις αναθεωρήσεις αυτών για να ελέγξει ποιες εικόνες και σχέδια χρησιμοποιούνται αυτήν τη στιγμή και ποιες είναι περιττές. Βεβαιωθείτε ότι έχετε δημιουργήσει ένα πλήρες αντίγραφο της βάση δεδομένων και των εικόνων προτού το εκτελέσετε.',
    'maint_delete_images_only_in_revisions' => 'Διαγράψτε επίσης εικόνες που υπάρχουν μόνο σε παλιές αναθεωρήσεις σελίδων',
    'maint_image_cleanup_run' => 'Εκτέλεση Εκκαθάρισης',
    'maint_image_cleanup_warning' => 'Βρέθηκαν :count δυνητικά αχρησιμοποίητες εικόνες. Είστε βέβαιοι ότι θέλετε να τις διαγράψετε αυτές;',
    'maint_image_cleanup_success' => ':count δυνητικά αχρησιμοποίητες εικόνες βρέθηκαν και διαγράφηκαν!',
    'maint_image_cleanup_nothing_found' => 'Δεν βρέθηκαν αχρησιμοποίητες εικόνες, τίποτα δεν διαγράφηκε!',
    'maint_send_test_email' => 'Στείλτε ένα δοκιμαστικό email',
    'maint_send_test_email_desc' => 'Αυτό στέλνει ένα δοκιμαστικό μήνυμα ηλεκτρονικού ταχυδρομείου στη διεύθυνση email σας που προσδιορίζεται στο προφίλ σας.',
    'maint_send_test_email_run' => 'Αποστολή δοκιμαστικού email',
    'maint_send_test_email_success' => 'Το email στάλθηκε στη διεύθυνση :address',
    'maint_send_test_email_mail_subject' => 'Δοκιμαστικό Email',
    'maint_send_test_email_mail_greeting' => 'Η παράδοση email φαίνεται να λειτουργεί!',
    'maint_send_test_email_mail_text' => 'Συγχαρητήρια! Καθώς λάβατε αυτήν την ειδοποίηση μέσω email, οι ρυθμίσεις email σας φαίνεται να έχουν διαμορφωθεί σωστά.',
    'maint_recycle_bin_desc' => 'Τα διαγραμμένα Ράφια και βιβλία, τα διαγραμμένα κεφάλαια και σελίδες αποστέλλονται στον κάδο ανακύκλωσης, έτσι ώστε να μπορούν να αποκατασταθούν ή να διαγραφούν οριστικά. Τα παλαιότερα αντικείμενα στον κάδο ανακύκλωσης ενδέχεται να αφαιρεθούν αυτόματα μετά από λίγο, ανάλογα με τη διαμόρφωση του συστήματος.',
    'maint_recycle_bin_open' => 'Άνοιγμα Κάδου Ανακύκλωσης',
    'maint_regen_references' => 'Αναδημιουργία Αναφορών',
    'maint_regen_references_desc' => 'Αυτή η ενέργεια θα ξαναχτίσει το ευρετήριο αναφοράς διαστοιχείου μέσα στη βάση δεδομένων. Αυτό συνήθως γίνεται αυτόματα αλλά αυτή η ενέργεια μπορεί να είναι χρήσιμη για το παλιό περιεχόμενο ή περιεχόμενο που προστίθεται μέσω ανεπίσημων μεθόδων.',
    'maint_regen_references_success' => 'Το ευρετήριο αναφοράς αναδημιουργήθηκε!',
    'maint_timeout_command_note' => 'Σημείωση: Αυτή η ενέργεια μπορεί να πάρει χρόνο για να εκτελεστεί, η οποία μπορεί να οδηγήσει σε προβλήματα χρονικού ορίου σε ορισμένα περιβάλλοντα ιστού. Ως εναλλακτική λύση, αυτή η ενέργεια πρέπει να εκτελείται χρησιμοποιώντας μια εντολή τερματικού.',

    // Recycle Bin
    'recycle_bin' => 'Κάδος Ανακύκλωσης',
    'recycle_bin_desc' => 'Εδώ μπορείτε να επαναφέρετε στοιχεία που έχουν διαγραφεί ή να επιλέξετε να τα αφαιρέσετε οριστικά από το σύστημα. Αυτή η λίστα δεν είναι φιλτραρισμένη όπως γίνεται σε παρόμοιες λίστες δραστηριοτήτων στο σύστημα στις οποίες εφαρμόζονται φίλτρα αδειών.',
    'recycle_bin_deleted_item' => 'Διαγραμμένο στοιχείο',
    'recycle_bin_deleted_parent' => 'Γονικό Στοιχείο',
    'recycle_bin_deleted_by' => 'Διαγράφηκε από',
    'recycle_bin_deleted_at' => 'Ημ/νια - Ώρα Διαγραφής',
    'recycle_bin_permanently_delete' => 'Οριστική Διαγραφή',
    'recycle_bin_restore' => 'Επαναφορά',
    'recycle_bin_contents_empty' => 'Ο κάδος ανακύκλωσης είναι επί του παρόντος άδειος',
    'recycle_bin_empty' => 'Αδειάστε τον Κάδο Ανακύκλωσης',
    'recycle_bin_empty_confirm' => 'Αυτό θα καταστρέψει οριστικά όλα τα αντικείμενα στον κάδο ανακύκλωσης, συμπεριλαμβανομένου του περιεχομένου που περιέχεται σε κάθε αντικείμενο. Είστε βέβαιοι ότι θέλετε να αδειάσετε τον κάδο ανακύκλωσης;',
    'recycle_bin_destroy_confirm' => 'Αυτή η ενέργεια θα διαγράψει οριστικά από το σύστημα αυτό το στοιχείο μαζί με τυχόν θυγατρικά, που αναφέρονται παρακάτω. Μετά την επιβεβαίωση της διαγραφής δεν θα μπορείτε να επαναφέρετε αυτό το περιεχόμενο. Είστε βέβαιοι ότι θέλετε να διαγράψετε οριστικά αυτό το στοιχείο;',
    'recycle_bin_destroy_list' => 'Αντικείμενα για καταστροφή',
    'recycle_bin_restore_list' => 'Αντικείμενα για επαναφορά',
    'recycle_bin_restore_confirm' => 'Αυτή η ενέργεια θα επαναφέρει το διαγραμμένο στοιχείο, συμπεριλαμβανομένων τυχόν θυγατρικών στοιχείων, στην αρχική τους θέση. Εάν η αρχική τοποθεσία έχει από τότε διαγραφεί και βρίσκεται τώρα στον κάδο ανακύκλωσης, θα πρέπει επίσης να αποκατασταθεί και το γονικό στοιχείο.',
    'recycle_bin_restore_deleted_parent' => 'Το γονικό στοιχείο αυτού του στοιχείου έχει επίσης διαγραφεί. Αυτά θα παραμείνουν διαγραμμένα μέχρι να αποκατασταθεί και αυτός ο γονέας.',
    'recycle_bin_restore_parent' => 'Επαναφορά Γονέα',
    'recycle_bin_destroy_notification' => 'Διαγράφηκαν :count συνολικά αντικείμενα από τον κάδο ανακύκλωσης.',
    'recycle_bin_restore_notification' => 'Επαναφέρθηκαν :count συνολικά αντικείμενα από τον κάδο ανακύκλωσης.',

    // Audit Log
    'audit' => 'Αρχείο Καταγραφής',
    'audit_desc' => 'Αυτό το αρχείο καταγραφής ελέγχου ενεργειών, εμφανίζει μια λίστα δραστηριοτήτων που παρακολουθούνται στο σύστημα. Αυτή η λίστα δεν είναι φιλτραρισμένη σε αντίθεση με παρόμοιες λίστες δραστηριοτήτων στο σύστημα όπου εφαρμόζονται φίλτρα αδειών.',
    'audit_event_filter' => 'Φίλτρο Συμβάντων',
    'audit_event_filter_no_filter' => 'Χωρίς Φίλτρο',
    'audit_deleted_item' => 'Διαγραμμένο στοιχείο',
    'audit_deleted_item_name' => 'Ονομα: :name',
    'audit_table_user' => 'Χρήστης',
    'audit_table_event' => 'Συμβάν',
    'audit_table_related' => 'Σχετικό Αντικείμενο ή Λεπτομέρεια',
    'audit_table_ip' => 'Διεύθυνση IP',
    'audit_table_date' => 'Ημερομηνία Δραστηριότητας',
    'audit_date_from' => 'Εύρος Ημερομηνίας Από',
    'audit_date_to' => 'Εύρος Ημερομηνίας Έως',

    // Role Settings
    'roles' => 'Ρόλοι',
    'role_user_roles' => 'Ρόλοι Χρηστών',
    'roles_index_desc' => 'Οι Ρόλοι χρησιμοποιούνται για την ομαδοποίηση των χρηστών και παρέχουν δικαιώματα για το σύστημα στα μέλη τους. Όταν ένας χρήστης είναι μέλος πολλαπλών Ρόλων, ο χρήστης θα κληρονομεί όλες τις ιδιότητες από όλους τους Ρόλους που ανήκει.',
    'roles_x_users_assigned' => ':count εκχωρημένος χρήστης|:count εκχωρημένοι χρήστες',
    'roles_x_permissions_provided' => ':count άδεια|:count άδειες',
    'roles_assigned_users' => 'Εκχωρημένοι χρήστες',
    'roles_permissions_provided' => 'Παρεχόμενα Δικαιώματα',
    'role_create' => 'Δημιουργία νέου ρόλου',
    'role_delete' => 'Διαγραφή Ρόλου',
    'role_delete_confirm' => 'Αυτό θα διαγράψει τον ρόλο με το όνομα \':roleName\'.',
    'role_delete_users_assigned' => 'Σε αυτόν τον ρόλο έχουν εκχωρηθεί :userCount χρήστες. Εάν θέλετε να μετεγκαταστήσετε τους χρήστες από αυτόν τον ρόλο, επιλέξτε έναν νέο ρόλο παρακάτω.',
    'role_delete_no_migration' => "Μην μεταφέρετε χρήστες",
    'role_delete_sure' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον ρόλο;',
    'role_edit' => 'Επεξεργασία Ρόλου',
    'role_details' => 'Λεπτομέρειες Ρόλου',
    'role_name' => 'Όνομα Ρόλου',
    'role_desc' => 'Σύντομη περιγραφή του Ρόλου',
    'role_mfa_enforced' => 'Απαιτεί έλεγχο ταυτότητας πολλαπλών παραγόντων',
    'role_external_auth_id' => 'Εξωτερικά αναγνωριστικά (IDs) ελέγχου ταυτότητας',
    'role_system' => 'Δικαιώματα Συστήματος',
    'role_manage_users' => 'Διαχείριση Χρηστών',
    'role_manage_roles' => 'Διαχείριση Ρόλων και Δικαιωμάτων ρόλων',
    'role_manage_entity_permissions' => 'Διαχειριστείτε όλα τα δικαιώματα βιβλίου, κεφαλαίων και σελίδων',
    'role_manage_own_entity_permissions' => 'Διαχειριστείτε τα δικαιώματα στο δικό σας βιβλίο, κεφάλαιο και σελίδες',
    'role_manage_page_templates' => 'Διαχείριση προτύπων σελίδων',
    'role_access_api' => 'Πρόσβαση στο API του συστήματος',
    'role_manage_settings' => 'Διαχειριστείτε τις ρυθμίσεις του ΑΡΙ',
    'role_export_content' => 'Εξαγωγή περιεχομένου',
    'role_editor_change' => 'Αλλαγή προγράμματος επεξεργασίας σελίδας',
    'role_asset' => 'Δικαιώματα Συστήματος',
    'roles_system_warning' => 'Λάβετε υπόψη ότι η πρόσβαση σε οποιοδήποτε από τις τρεις παραπάνω άδειες (δικαιώματα) μπορεί να επιτρέψει σε έναν χρήστη να αλλάξει τα δικά του προνόμια ή τα προνόμια άλλων στο σύστημα. Εκχωρήστε ρόλους με αυτά τα δικαιώματα μόνο σε αξιόπιστους χρήστες.',
    'role_asset_desc' => 'Αυτά τα δικαιώματα ελέγχουν την προεπιλεγμένη πρόσβαση στα στοιχεία (άδειες) εντός του συστήματος. Τα δικαιώματα σε Βιβλία, Κεφάλαια και Σελίδες θα παρακάμψουν αυτές τις άδειες.',
    'role_asset_admins' => 'Οι διαχειριστές έχουν αυτόματα πρόσβαση σε όλο το περιεχόμενο, αλλά αυτές οι επιλογές ενδέχεται να εμφανίζουν ή να αποκρύπτουν τις επιλογές διεπαφής χρήστη.',
    'role_asset_image_view_note' => 'Αυτό σχετίζεται με την ορατότητα εντός του διαχειριστή εικόνων. Η πραγματική πρόσβαση των μεταφορτωμένων αρχείων εικόνας θα εξαρτηθεί από την επιλογή αποθήκευσης εικόνας συστήματος.',
    'role_all' => 'Ολα',
    'role_own' => 'Τα δικά του',
    'role_controlled_by_asset' => 'Ελέγχονται από το στοιχείο στο οποίο ανεβαίνουν (Ράφια, Βιβλία)',
    'role_save' => 'Αποθήκευση Ρόλου',
    'role_users' => 'Χρήστες σε αυτόν τον Ρόλο',
    'role_users_none' => 'Σε κανένα χρήστη δεν έχει ανατεθεί αυτήν τη στιγμή αυτός ο ρόλος.',

    // Users
    'users' => 'Χρήστες',
    'users_index_desc' => 'Δημιουργία & διαχείριση μεμονωμένων λογαριασμών χρήστη μέσα στο σύστημα. Οι λογαριασμοί χρήστη χρησιμοποιούνται για τη σύνδεση και την απόδοση του περιεχομένου & δραστηριότητα. Τα δικαιώματα πρόσβασης βασίζονται κυρίως σε Ρόλους, αλλά η κυριότητα του περιεχομένου του χρήστη, μεταξύ άλλων παραγόντων, μπορεί επίσης να επηρεάσει τα δικαιώματα & την πρόσβαση.',
    'user_profile' => 'Προφίλ Χρήστη',
    'users_add_new' => 'Προσθήκη νέου Χρήστη',
    'users_search' => 'Αναζήτηση Χρηστών',
    'users_latest_activity' => 'Τελευταία Δραστηριότητα',
    'users_details' => 'Στοιχεία χρήστη',
    'users_details_desc' => 'Ορίστε ένα εμφανιζόμενο όνομα και μια διεύθυνση email για αυτόν τον χρήστη. Η διεύθυνση email θα χρησιμοποιηθεί για τη σύνδεση στην εφαρμογή.',
    'users_details_desc_no_email' => 'Ορίστε το όνομα που θα εμφανίζεται για το χρήστη αυτόν, έτσι ώστε να είναι αναγνωρίσιμος από τους υπόλοιπους.',
    'users_role' => 'Ρόλοι χρήστη',
    'users_role_desc' => 'Επιλέξτε σε ποιους ρόλους θα εκχωρηθεί αυτός ο χρήστης. Εάν ένας χρήστης έχει εκχωρηθεί σε πολλούς ρόλους, τα δικαιώματα από αυτούς τους ρόλους θα στοιβάζονται και θα λαμβάνουν όλες τις ικανότητες των ρόλων που έχουν εκχωρηθεί.',
    'users_password' => 'Κωδικός Χρήστη',
    'users_password_desc' => 'Ορίστε έναν κωδικό πρόσβασης που θα χρησιμοποιείται για τη σύνδεση στην εφαρμογή. Αυτός πρέπει να είναι τουλάχιστον 8 χαρακτήρες.',
    'users_send_invite_text' => 'Μπορείτε να επιλέξετε να στείλετε σε αυτόν τον χρήστη ένα email πρόσκλησης που του επιτρέπει να ορίσει τον δικό του κωδικό πρόσβασης. Σε διαφορετική περίπτωση μπορείτε να ορίσετε τον κωδικό πρόσβασής του εσείς.',
    'users_send_invite_option' => 'Αποστολή email πρόσκλησης σε χρήστη',
    'users_external_auth_id' => 'Εξωτερικός έλεγχος ταυτότητας',
    'users_external_auth_id_desc' => 'Αυτό είναι το αναγνωριστικό που χρησιμοποιείται για την αντιστοίχιση αυτού του χρήστη κατά την επικοινωνία με το εξωτερικό σύστημα ελέγχου ταυτότητας.',
    'users_password_warning' => 'Συμπληρώστε τα παρακάτω μόνο αν θέλετε να αλλάξετε τον κωδικό πρόσβασής σας.',
    'users_system_public' => 'Αυτός ο χρήστης αντιπροσωπεύει οποιονδήποτε επισκέπτη που επισκέπτεται τη Βιβλιοθήκη σας. Δεν μπορεί να χρησιμοποιηθεί για τη σύνδεση αλλά εκχωρείται αυτόματα.',
    'users_delete' => 'Διαγραφή Χρήστη',
    'users_delete_named' => 'Διαγραφή χρήστη :userName',
    'users_delete_warning' => 'Αυτό θα διαγράψει πλήρως αυτόν τον χρήστη με το όνομα \':userName\' από το σύστημα.',
    'users_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον χρήστη;',
    'users_migrate_ownership' => 'Μεταφορά ιδιοκτησίας',
    'users_migrate_ownership_desc' => 'Επιλέξτε έναν χρήστη εδώ, εάν θέλετε ένας άλλος χρήστης να γίνει ο κάτοχος όλων των στοιχείων που ανήκουν επί του παρόντος σε αυτόν τον χρήστη.',
    'users_none_selected' => 'Δεν έχει επιλεγεί χρήστης',
    'users_edit' => 'Επεξεργασία Χρήστη',
    'users_edit_profile' => 'Ρυθμίσεις προφίλ',
    'users_avatar' => 'Avatar Χρήστη',
    'users_avatar_desc' => 'Επιλέξτε μια εικόνα που θα αντιπροσωπεύει αυτόν τον χρήστη. Αυτό θα πρέπει να είναι περίπου 256px τετράγωνο.',
    'users_preferred_language' => 'Προτιμώμενη γλώσσα',
    'users_preferred_language_desc' => 'Αυτή η επιλογή θα αλλάξει τη γλώσσα που χρησιμοποιείται για τη διεπαφή χρήστη της εφαρμογής. Αυτό δεν θα επηρεάσει οποιοδήποτε περιεχόμενο που δημιουργήθηκε από χρήστες.',
    'users_social_accounts' => 'Λογαριασμοί Κοινωνικής δικτύωσης ',
    'users_social_accounts_info' => 'Εδώ μπορείτε να συνδέσετε τους άλλους λογαριασμούς σας για ταχύτερη και ευκολότερη σύνδεση. Η αποσύνδεση ενός λογαριασμού εδώ δεν ανακαλεί προηγουμένως εξουσιοδοτημένη πρόσβαση. Ανάκληση πρόσβασης από τις ρυθμίσεις προφίλ σας στον συνδεδεμένο κοινωνικό λογαριασμό.',
    'users_social_connect' => 'Σύνδεση λογαριασμού',
    'users_social_disconnect' => 'Αποσύνδεση λογαριασμού',
    'users_social_connected' => ':socialΛογαριασμός λογαριασμού συνδέθηκε με επιτυχία στο προφίλ σας.',
    'users_social_disconnected' => ':socialΛογαριασμός αποσυνδέθηκε επιτυχώς από το προφίλ σας.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'Δεν έχουν δημιουργηθεί διακριτικά API για αυτόν το χρήστη',
    'users_api_tokens_create' => 'Δημιουργία διακριτικού  Api Token',
    'users_api_tokens_expires' => 'Λήγει',
    'users_api_tokens_docs' => 'Τεκμηρίωση API',
    'users_mfa' => 'Έλεγχος Ταυτοτητας Πολλαπλων Παραγοντων',
    'users_mfa_desc' => 'Ρυθμίστε τον έλεγχο ταυτότητας πολλαπλών παραγόντων ως ένα επιπλέον επίπεδο ασφάλειας για τον λογαριασμό χρήστη σας.',
    'users_mfa_x_methods' => ':count μέθοδος έχει ρυθμιστεί:count μέθοδοι',
    'users_mfa_configure' => 'Ρύθμιση Μεθόδων',

    // API Tokens
    'user_api_token_create' => 'Δημιουργία διακριτικού (API Token)',
    'user_api_token_name' => 'Όνομα',
    'user_api_token_name_desc' => 'Δώστε στο διακριτικό σας ένα ευανάγνωστο όνομα ως μελλοντική υπενθύμιση του σκοπού του.',
    'user_api_token_expiry' => 'Ημερομηνία λήξης',
    'user_api_token_expiry_desc' => 'Ορίστε μια ημερομηνία κατά την οποία λήγει αυτό το διακριτικό. Μετά από αυτήν την ημερομηνία, τα αιτήματα που γίνονται με αυτό το διακριτικό δεν θα λειτουργούν πλέον. Αν αφήσετε αυτό το πεδίο κενό, θα οριστεί η λήξη 100 χρόνια στο μέλλον.',
    'user_api_token_create_secret_message' => 'Αμέσως μετά τη δημιουργία αυτού του διακριτικού θα δημιουργηθεί και θα εμφανιστεί ένα "Token ID" & "Token Secret". Το μυστικό(Token Secret) θα εμφανιστεί μόνο μία φορά, επομένως φροντίστε να αντιγράψετε την τιμή σε κάποιο ασφαλές μέρος πριν συνεχίσετε.',
    'user_api_token_create_success' => 'Το διακριτικό API δημιουργήθηκε με επιτυχία',
    'user_api_token_update_success' => 'Το διακριτικό API ενημερώθηκε με επιτυχία',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Αυτό είναι ένα μη επεξεργάσιμο αναγνωριστικό που δημιουργείται από το σύστημα για αυτό το διακριτικό, το οποίο θα πρέπει να παρέχεται σε αιτήματα API.',
    'user_api_token_secret' => 'Μυστικό Token',
    'user_api_token_secret_desc' => 'Αυτό είναι ένα μυστικό που δημιουργείται από το σύστημα για αυτό το διακριτικό και θα πρέπει να παρέχεται σε αιτήματα API. Αυτό θα εμφανιστεί μόνο μία φορά, επομένως αντιγράψτε αυτήν την τιμή σε κάποιο ασφαλές μέρος.',
    'user_api_token_created' => 'Το Διακριτικό δημιουργήθηκε :timeAgo',
    'user_api_token_updated' => 'Το Διακριτικό ενημερώθηκε :timeAgo',
    'user_api_token_delete' => 'Διαγραφή Διακριτικού',
    'user_api_token_delete_warning' => 'Αυτό θα διαγράψει πλήρως αυτό το διακριτικό API με το όνομα \':tokenName\' από το σύστημα.',
    'user_api_token_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το διακριτικό API;',
    'user_api_token_delete_success' => 'Το διακριτικό API διαγράφηκε με επιτυχία',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Τα Webhooks είναι ένας τρόπος αποστολής δεδομένων σε εξωτερικές διευθύνσεις URL όταν ορισμένες ενέργειες και συμβάντα συμβαίνουν στο σύστημα που επιτρέπει την ενσωμάτωση με εξωτερικές πλατφόρμες όπως συστήματα μηνυμάτων ή ειδοποιήσεων.',
    'webhooks_x_trigger_events' => ':count συμβάν ενεργοποίησης|:count συμβάντα ενεργοποίησης',
    'webhooks_create' => 'Δημιουργία νέου Webhook',
    'webhooks_none_created' => 'Δεν έχουν δημιουργηθεί ακόμη webhook.',
    'webhooks_edit' => 'Επεξεργασία Webhook',
    'webhooks_save' => 'Αποθήκευση Webhook',
    'webhooks_details' => 'Λεπτομέρειες Webhook',
    'webhooks_details_desc' => 'Παρέχετε ένα φιλικό προς τον χρήστη όνομα και ένα τελικό σημείο POST ως τοποθεσία για την αποστολή των δεδομένων webhook.',
    'webhooks_events' => 'Συμβάντα Webhook',
    'webhooks_events_desc' => 'Επιλέξτε όλα τα συμβάντα που θα πρέπει να ενεργοποιήσουν αυτό το webhook για κλήση.',
    'webhooks_events_warning' => 'Λάβετε υπόψη ότι αυτά τα συμβάντα θα ενεργοποιηθούν για όλα τα επιλεγμένα συμβάντα, ακόμη και αν εφαρμοστούν προσαρμοσμένα δικαιώματα. Βεβαιωθείτε ότι η χρήση αυτού του webhook δεν θα αποκαλύψει εμπιστευτικό περιεχόμενο.',
    'webhooks_events_all' => 'Όλα τα συμβάντα του συστήματος',
    'webhooks_name' => 'Όνομα Webhook',
    'webhooks_timeout' => 'Χρονικό όριο λήξης αιτήματος Webhook (δευτερόλεπτα)',
    'webhooks_endpoint' => 'Τελικό Σημείο Webhook',
    'webhooks_active' => 'Webhook Ενεργό',
    'webhook_events_table_header' => 'Συμβάντα',
    'webhooks_delete' => 'Διαγραφή Webhook',
    'webhooks_delete_warning' => 'Αυτό θα διαγράψει πλήρως αυτό το webhook, με το όνομα \':webhookName\', από το σύστημα.',
    'webhooks_delete_confirm' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το webhook;',
    'webhooks_format_example' => 'Παράδειγμα μορφής Webhook',
    'webhooks_format_example_desc' => 'Τα δεδομένα Webhook αποστέλλονται ως αίτημα POST στο διαμορφωμένο τελικό σημείο ως JSON ακολουθώντας την παρακάτω μορφή. Οι ιδιότητες "related_item" και "url" είναι προαιρετικές και εξαρτώνται από τον τύπο του συμβάντος που ενεργοποιείται.',
    'webhooks_status' => 'Κατάσταση Webhook',
    'webhooks_last_called' => 'Τελευταία κλήση:',
    'webhooks_last_errored' => 'Τελευταίο σφάλμα:',
    'webhooks_last_error_message' => 'Τελευταίο μήνυμα λάθους:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
