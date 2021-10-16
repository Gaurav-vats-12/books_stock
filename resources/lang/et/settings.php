<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Seaded',
    'settings_save' => 'Salvesta seaded',
    'settings_save_success' => 'Seaded salvestatud',

    // App Settings
    'app_customization' => 'Customization',
    'app_features_security' => 'Features & Security',
    'app_name' => 'Rakenduse nimi',
    'app_name_desc' => 'Seda nime näidatakse päises ja kõigis süsteemsetes e-kirjades.',
    'app_name_header' => 'Näita nime päises',
    'app_public_access' => 'Avalik ligipääs',
    'app_public_access_desc' => 'Selle sisselülitamine võimaldab külalistel ilma sisselogimata ligipääsu su BookStack\'i sisule.',
    'app_public_access_desc_guest' => 'Access for public visitors can be controlled through the "Guest" user.',
    'app_public_access_toggle' => 'Luba avalik ligipääs',
    'app_public_viewing' => 'Luba avalik ligipääs?',
    'app_secure_images' => 'Higher Security Image Uploads',
    'app_secure_images_toggle' => 'Enable higher security image uploads',
    'app_secure_images_desc' => 'For performance reasons, all images are public. This option adds a random, hard-to-guess string in front of image urls. Ensure directory indexes are not enabled to prevent easy access.',
    'app_editor' => 'Page Editor',
    'app_editor_desc' => 'Select which editor will be used by all users to edit pages.',
    'app_custom_html' => 'Custom HTML Head Content',
    'app_custom_html_desc' => 'Any content added here will be inserted into the bottom of the <head> section of every page. This is handy for overriding styles or adding analytics code.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Rakenduse logo',
    'app_logo_desc' => 'See pildifail peaks olema 43 pikslit kõrge. <br>Suuremad pildifailid tehakse väiksemaks.',
    'app_primary_color' => 'Rakenduse põhivärv',
    'app_primary_color_desc' => 'Sets the primary color for the application including the banner, buttons, and links.',
    'app_homepage' => 'Rakenduse avaleht',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'Vali leht',
    'app_footer_links' => 'Lingid jaluses',
    'app_footer_links_desc' => 'Lisa rakenduse jalusesse linke. Neid näidatakse enamike lehtede jaluses, kaasa arvatud need, mis ei vaja sisselogimist. Võid kasutada märgendit "trans::<key>", et kasutada süsteemseid tõlkeid. Näiteks "trans::common.privacy_policy" tekitab tõlgitud teksti "Privaatsus" ning "trans::common.terms_of_service" tekitab tõlgitud teksti "Kasutustingimused".',
    'app_footer_links_label' => 'Lingi tekst',
    'app_footer_links_url' => 'Lingi URL',
    'app_footer_links_add' => 'Lisa link',
    'app_disable_comments' => 'Keela kommentaarid',
    'app_disable_comments_toggle' => 'Keela kommentaarid',
    'app_disable_comments_desc' => 'Keelab kommentaarid kogu rakenduses. <br>Olemasolevaid kommentaare ei näidata.',

    // Color settings
    'content_colors' => 'Sisuelementide värvid',
    'content_colors_desc' => 'Määrab värvid erinevatele sisuelementidele. Loetavuse huvides on soovituslik valida värvid, mille heledus on sarnane vaikimisi värvidele.',
    'bookshelf_color' => 'Riiuli värv',
    'book_color' => 'Raamatu värv',
    'chapter_color' => 'Peatüki värv',
    'page_color' => 'Lehe värv',
    'page_draft_color' => 'Mustandi värv',

    // Registration Settings
    'reg_settings' => 'Registreerumine',
    'reg_enable' => 'Luba registreerumine',
    'reg_enable_toggle' => 'Luba registreerumine',
    'reg_enable_desc' => 'Kui registreerumine on lubatud, saavad kasutajad ise endale rakenduse konto tekitada, ning neile antakse vaikimisi roll.',
    'reg_default_role' => 'Vaikimisi roll uutele kasutajatele',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'E-posti aadressi kinnitus',
    'reg_email_confirmation_toggle' => 'Nõua e-posti aadressi kinnitamist',
    'reg_confirm_email_desc' => 'Kui domeeni piirang on kasutusel, siis on e-posti aadressi kinnitamine nõutud ja seda seadet ignoreeritakse.',
    'reg_confirm_restrict_domain' => 'Domeeni piirang',
    'reg_confirm_restrict_domain_desc' => 'Sisesta komaga eraldatud nimekiri e-posti domeenidest, millega soovitud registreerumist piirata. Kasutajale saadetakse aadressi kinnitamiseks e-kiri, enne kui neil lubatakse rakendust kasutada.<br>Pane tähele, et kasutajad saavad pärast edukat registreerumist oma e-posti aadressi muuta.',
    'reg_confirm_restrict_domain_placeholder' => 'Piirangut ei ole',

    // Maintenance settings
    'maint' => 'Hooldus',
    'maint_image_cleanup' => 'Pildifailide koristus',
    'maint_image_cleanup_desc' => "Kontrollib lehtede ja redaktsioonide sisu, et leida pilte ja jooniseid, mis enam kasutusel ei ole. Enne selle käivitamist tee andmebaasist ja pildifailidest täielik varukoopia.",
    'maint_delete_images_only_in_revisions' => 'Kustuta ka pildifailid, mis on kasutusel ainult vanades redaktsioonides',
    'maint_image_cleanup_run' => 'Run Cleanup',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'Saada testimiseks e-kiri',
    'maint_send_test_email_desc' => 'See saadab testimiseks e-kirja su profiilis märgitud aadressile.',
    'maint_send_test_email_run' => 'Saada test e-kiri',
    'maint_send_test_email_success' => 'E-kiri saadetud aadressile :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'E-kirjade saatmine tundub toimivat!',
    'maint_send_test_email_mail_text' => 'Hea töö! Kui sa selle e-kirja kätte said, on su e-posti seaded õigesti määratud.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Ava prügikast',

    // Recycle Bin
    'recycle_bin' => 'Prügikast',
    'recycle_bin_desc' => 'Siin saad taastada kustutatud objekte, või neid süsteemist lõplikult eemaldada. Nimekiri on filtreerimata, mitte nagu mujal tegevusloendites, kus rakenduvad õigused.',
    'recycle_bin_deleted_item' => 'Kustutatud objekt',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Kustuta lõplikult',
    'recycle_bin_restore' => 'Taasta',
    'recycle_bin_contents_empty' => 'Prügikast on hetkel tühi',
    'recycle_bin_empty' => 'Tühjenda prügikast',
    'recycle_bin_empty_confirm' => 'See kustutab lõplikult kõik objektid prügikastis, kaasa arvatud nende sisu. Kas oled kindel, et soovid prügikasti tühjendada?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'Kasutaja',
    'audit_table_event' => 'Sündmus',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'IP-aadress',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Rollid',
    'role_user_roles' => 'Kasutajate rollid',
    'role_create' => 'Lisa uus roll',
    'role_create_success' => 'Roll on lisatud',
    'role_delete' => 'Kustuta roll',
    'role_delete_confirm' => 'See kustutab rolli nimega \':roleName\'.',
    'role_delete_users_assigned' => 'Selle rolliga on seotud :userCount kasutajat. Kui soovid neile selle asemel uue rolli määrata, siis vali see allpool.',
    'role_delete_no_migration' => "Ära määra uut rolli",
    'role_delete_sure' => 'Kas oled kindel, et soovid selle rolli kustutada?',
    'role_delete_success' => 'Roll on kustutatud',
    'role_edit' => 'Muuda rolli',
    'role_details' => 'Rolli detailid',
    'role_name' => 'Rolli nimi',
    'role_desc' => 'Rolli lühike kirjeldus',
    'role_mfa_enforced' => 'Vajab mitmeastmelist autentimist',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'Süsteemsed õigused',
    'role_manage_users' => 'Kasutajate haldamine',
    'role_manage_roles' => 'Rollide ja õiguste haldamine',
    'role_manage_entity_permissions' => 'Kõigi raamatute, peatükkide ja lehtede õiguste haldamine',
    'role_manage_own_entity_permissions' => 'Oma raamatute, peatükkide ja lehtede õiguste haldamine',
    'role_manage_page_templates' => 'Mallide haldamine',
    'role_access_api' => 'Süsteemi API ligipääs',
    'role_manage_settings' => 'Rakenduse seadete haldamine',
    'role_export_content' => 'Export content',
    'role_asset' => 'Asset Permissions',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'All',
    'role_own' => 'Own',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Save Role',
    'role_update_success' => 'Roll on muudetud',
    'role_users' => 'Selle rolliga kasutajad',
    'role_users_none' => 'Seda rolli ei ole hetkel ühelgi kasutajal',

    // Users
    'users' => 'Kasutajad',
    'user_profile' => 'Kasutajaprofiil',
    'users_add_new' => 'Lisa uus kasutaja',
    'users_search' => 'Otsi kasutajaid',
    'users_latest_activity' => 'Viimane tegevus',
    'users_details' => 'Kasutaja andmed',
    'users_details_desc' => 'Määra kasutajale nimi ja e-posti aadress. E-posti aadressi kasutatakse rakendusse sisse logimiseks.',
    'users_details_desc_no_email' => 'Määra kasutajale nimi, mille järgi teised ta ära tunnevad.',
    'users_role' => 'Kasutaja rollid',
    'users_role_desc' => 'Vali, millised rollid sellel kasutajal on. Kui talle on valitud mitu rolli, siis nende õigused kombineeritakse ja kasutaja saab kõigi rollide õigused.',
    'users_password' => 'Kasutaja parool',
    'users_password_desc' => 'Määra kasutajale parool, millega rakendusse sisse logida. See peab olema vähemalt 6 tähemärki.',
    'users_send_invite_text' => 'Sa võid kasutajale saata e-postiga kutse, mis võimaldab neil ise parooli seada. Vastasel juhul määra parool ise.',
    'users_send_invite_option' => 'Saada e-postiga kutse',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Only fill the below if you would like to change your password.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Kustuta kasutaja',
    'users_delete_named' => 'Kustuta kasutaja :userName',
    'users_delete_warning' => 'See kustutab kasutaja nimega \':userName\' süsteemist täielikult.',
    'users_delete_confirm' => 'Kas oled kindel, et soovid selle kasutaja kustutada?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'Kasutaja on kustutatud',
    'users_edit' => 'Muuda kasutajat',
    'users_edit_profile' => 'Muuda profiili',
    'users_edit_success' => 'Kasutaja on muudetud',
    'users_avatar' => 'Kasutaja profiilipilt',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Eelistatud keel',
    'users_preferred_language_desc' => 'See valik muudab rakenduse kasutajaliidese keelt. Kasutajate loodud sisu see ei mõjuta.',
    'users_social_accounts' => 'Sotsiaalmeedia kontod',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Lisa konto',
    'users_social_disconnect' => 'Eemalda konto',
    'users_social_connected' => ':socialAccount konto lisati su profiilile.',
    'users_social_disconnected' => ':socialAccount konto eemaldati su profiililt.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',
    'users_mfa' => 'Mitmeastmeline autentimine',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

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
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
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
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
