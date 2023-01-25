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
    'system_version' => 'Süsteemi versioon',
    'categories' => 'Kategooriad',

    // App Settings
    'app_customization' => 'Kohandamine',
    'app_features_security' => 'Funktsioonid ja turvalisus',
    'app_name' => 'Rakenduse nimi',
    'app_name_desc' => 'Seda nime näidatakse päises ja kõigis süsteemsetes e-kirjades.',
    'app_name_header' => 'Näita nime päises',
    'app_public_access' => 'Avalik ligipääs',
    'app_public_access_desc' => 'Selle sisselülitamine võimaldab külalistel ilma sisselogimata ligipääsu su BookStack\'i sisule.',
    'app_public_access_desc_guest' => 'Sisselogimata kasutajate ligipääsu saab seadistada "Külaline" kasutaja kaudu.',
    'app_public_access_toggle' => 'Luba avalik ligipääs',
    'app_public_viewing' => 'Luba avalik ligipääs?',
    'app_secure_images' => 'Turvalisem piltide üleslaadimine',
    'app_secure_images_toggle' => 'Lülita sisse turvalisem piltide üleslaadimine',
    'app_secure_images_desc' => 'Jõudluse kaalutlustel on kõik pildifailid avalikult kättesaadavad. See valik lisab pildifailide URL-ide ette juhugenereeritud, raskesti arvatava stringi. Ligipääsu piiramiseks veendu, et kataloogide indekseerimine ei oleks lubatud.',
    'app_default_editor' => 'Vaikimisi lehe redaktor',
    'app_default_editor_desc' => 'Vali, millist redaktorit vaikimisi uute lehtede jaoks kasutada. Seda valikut saab õiguste olemasolul iga lehe jaoks eraldi muuta.',
    'app_custom_html' => 'Kohandatud HTML päise sisu',
    'app_custom_html_desc' => 'Siia lisatud sisu lisatakse iga lehe <head> sektsiooni lõppu. See võimaldab stiile üle laadida või lisada analüütika koodi.',
    'app_custom_html_disabled_notice' => 'Kohandatud HTML päise sisu on sellel lehel välja lülitatud, et probleemseid muudatusi saaks tagasi võtta.',
    'app_logo' => 'Rakenduse logo',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Application Icon',
    'app_icon_desc' => 'This icon is used for browser tabs and shortcut icons. This should be a 256px square PNG image.',
    'app_primary_color' => 'Rakenduse põhivärv',
    'app_primary_color_desc' => 'Määrab rakenduse primaarse värvi, sh. päise, nuppude ja linkide jaoks.',
    'app_homepage' => 'Rakenduse avaleht',
    'app_homepage_desc' => 'Vali leht, mida näidata avalehel vaikimisi vaate asemel. Valitud lehele ei rakendata ligipääsuõiguseid.',
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
    'reg_enable_external_warning' => 'Ülalolevat valikut ignoreeritakse, kui väline LDAP või SAML autentimine on aktiivne. Kui autentimine välise süsteemi vastu on edukas, genereeritakse puuduvad kasutajadkontod automaatselt.',
    'reg_email_confirmation' => 'E-posti aadressi kinnitus',
    'reg_email_confirmation_toggle' => 'Nõua e-posti aadressi kinnitamist',
    'reg_confirm_email_desc' => 'Kui domeeni piirang on kasutusel, siis on e-posti aadressi kinnitamine nõutud ja seda seadet ignoreeritakse.',
    'reg_confirm_restrict_domain' => 'Domeeni piirang',
    'reg_confirm_restrict_domain_desc' => 'Sisesta komaga eraldatud nimekiri e-posti domeenidest, millega soovid registreerumist piirata. Kasutajale saadetakse aadressi kinnitamiseks e-kiri, enne kui neil lubatakse rakendust kasutada.<br>Pane tähele, et kasutajad saavad pärast edukat registreerumist oma e-posti aadressi muuta.',
    'reg_confirm_restrict_domain_placeholder' => 'Piirangut ei ole',

    // Maintenance settings
    'maint' => 'Hooldus',
    'maint_image_cleanup' => 'Pildifailide koristus',
    'maint_image_cleanup_desc' => 'Kontrollib lehtede ja redaktsioonide sisu, et leida pilte ja jooniseid, mis enam kasutusel ei ole. Enne selle käivitamist tee andmebaasist ja pildifailidest täielik varukoopia.',
    'maint_delete_images_only_in_revisions' => 'Kustuta ka pildifailid, mis on kasutusel ainult vanades redaktsioonides',
    'maint_image_cleanup_run' => 'Käivita koristus',
    'maint_image_cleanup_warning' => 'Leiti :count potentsiaalselt kasutamata pildifaili. Kas oled kindel, et soovid need kustutada?',
    'maint_image_cleanup_success' => 'Leiti ja kustutati :count potentsiaalselt kasutamata pildifaili!',
    'maint_image_cleanup_nothing_found' => 'Kasutamata pildifaile ei leitud, pole midagi kustutada!',
    'maint_send_test_email' => 'Saada testimiseks e-kiri',
    'maint_send_test_email_desc' => 'See saadab testimiseks e-kirja su profiilis märgitud aadressile.',
    'maint_send_test_email_run' => 'Saada test e-kiri',
    'maint_send_test_email_success' => 'E-kiri saadetud aadressile :address',
    'maint_send_test_email_mail_subject' => 'Test e-kiri',
    'maint_send_test_email_mail_greeting' => 'E-kirjade saatmine tundub toimivat!',
    'maint_send_test_email_mail_text' => 'Hea töö! Kui sa selle e-kirja kätte said, on su e-posti seaded õigesti määratud.',
    'maint_recycle_bin_desc' => 'Kustutatud riiulid, raamatud, peatükid ja lehed saadetakse prügikasti, et neid saaks taastada või lõplikult kustutada. Vanemad objektid võidakse teatud aja järel automaatselt prügikastist kustutada.',
    'maint_recycle_bin_open' => 'Ava prügikast',
    'maint_regen_references' => 'Genereeri viited uuesti',
    'maint_regen_references_desc' => 'See tegevus taastekitab andmebaasis objektidevahelised viited. Enamasti tehakse seda automaatselt, aga antud tegevus võimaldab indekseerida vanemat sisu või sisu, mis lisati mitteametlike meetodite abil.',
    'maint_regen_references_success' => 'Viiteindeks genereeritud!',
    'maint_timeout_command_note' => 'Märkus: See tegevus võib aega võtta, mis võib teatud veebikeskkondades põhjustada aegumise vigu. Alternatiivina võib seda tegevust käivitada käsurealt.',

    // Recycle Bin
    'recycle_bin' => 'Prügikast',
    'recycle_bin_desc' => 'Siin saad taastada kustutatud objekte, või neid süsteemist lõplikult eemaldada. Nimekiri on filtreerimata, mitte nagu mujal tegevusloendites, kus rakenduvad õigused.',
    'recycle_bin_deleted_item' => 'Kustutatud objekt',
    'recycle_bin_deleted_parent' => 'Ülemobjekt',
    'recycle_bin_deleted_by' => 'Kustutaja',
    'recycle_bin_deleted_at' => 'Kustutamise aeg',
    'recycle_bin_permanently_delete' => 'Kustuta lõplikult',
    'recycle_bin_restore' => 'Taasta',
    'recycle_bin_contents_empty' => 'Prügikast on hetkel tühi',
    'recycle_bin_empty' => 'Tühjenda prügikast',
    'recycle_bin_empty_confirm' => 'See kustutab lõplikult kõik objektid prügikastis, kaasa arvatud nende sisu. Kas oled kindel, et soovid prügikasti tühjendada?',
    'recycle_bin_destroy_confirm' => 'See kustutab lõplikult valitud objekti koos loetletud alamobjektidega, ja seda sisu ei ole enam võimalik taastada. Kas oled kindel, et soovid selle objekti kustutada?',
    'recycle_bin_destroy_list' => 'Kustutatavad objektid',
    'recycle_bin_restore_list' => 'Taastatavad objektid',
    'recycle_bin_restore_confirm' => 'See taastab valitud objekti koos kõigi alamobjektidega nende algsesse asukohta. Kui see asukoht on ka vahepeal kustutatud ja on nüüd prügikastis, tuleb ka see taastada.',
    'recycle_bin_restore_deleted_parent' => 'Selle objekti ülemobjekt on ka kustutatud. Taastada ei saa enne, kui ülemobjekt on taastatud.',
    'recycle_bin_restore_parent' => 'Taasta ülemobjekt',
    'recycle_bin_destroy_notification' => 'Prügikastist kustutati :count objekti.',
    'recycle_bin_restore_notification' => 'Prügikastist taastati :count objekti.',

    // Audit Log
    'audit' => 'Auditilogi',
    'audit_desc' => 'Auditilogi kuvab nimekirja tegevustest, mida süsteem jälgib. See nimekiri on filtreerimata, erinevalt muudest loenditest süsteemis, kus rakenduvad õigused.',
    'audit_event_filter' => 'Sündmuse filter',
    'audit_event_filter_no_filter' => 'Ilma filtrita',
    'audit_deleted_item' => 'Kustutatud objekt',
    'audit_deleted_item_name' => 'Nimi: :name',
    'audit_table_user' => 'Kasutaja',
    'audit_table_event' => 'Sündmus',
    'audit_table_related' => 'Seotud objekt või detail',
    'audit_table_ip' => 'IP-aadress',
    'audit_table_date' => 'Tegevuse aeg',
    'audit_date_from' => 'Kuupäev alates',
    'audit_date_to' => 'Kuupäev kuni',

    // Role Settings
    'roles' => 'Rollid',
    'role_user_roles' => 'Kasutaja rollid',
    'roles_index_desc' => 'Rolle saab kasutada kasutajate grupeerimiseks ja liikmetele süsteemsete õiguste andmiseks. Kui kasutaja on mitme rolli liige, siis õigused kombineeritakse ning kasutaja saab kõik õigused.',
    'roles_x_users_assigned' => '1 kasutaja|:count kasutajat',
    'roles_x_permissions_provided' => '1 õigus|:count õigust',
    'roles_assigned_users' => 'Määratud kasutajad',
    'roles_permissions_provided' => 'Antud õigused',
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
    'role_external_auth_id' => 'Välise autentimise ID-d',
    'role_system' => 'Süsteemsed õigused',
    'role_manage_users' => 'Kasutajate haldamine',
    'role_manage_roles' => 'Rollide ja õiguste haldamine',
    'role_manage_entity_permissions' => 'Kõigi raamatute, peatükkide ja lehtede õiguste haldamine',
    'role_manage_own_entity_permissions' => 'Oma raamatute, peatükkide ja lehtede õiguste haldamine',
    'role_manage_page_templates' => 'Mallide haldamine',
    'role_access_api' => 'Süsteemi API ligipääs',
    'role_manage_settings' => 'Rakenduse seadete haldamine',
    'role_export_content' => 'Sisu eksport',
    'role_editor_change' => 'Lehe redaktori muutmine',
    'role_asset' => 'Sisu õigused',
    'roles_system_warning' => 'Pane tähele, et ülalolevad kolm õigust võimaldavad kasutajal enda või teiste kasutajate õiguseid muuta. Määra nende õigustega roll ainult usaldusväärsetele kasutajatele.',
    'role_asset_desc' => 'Need load kontrollivad vaikimisi ligipääsu süsteemis olevale sisule. Raamatute, peatükkide ja lehtede õigused rakenduvad esmajärjekorras.',
    'role_asset_admins' => 'Administraatoritel on automaatselt ligipääs kogu sisule, aga need valikud võivad peida või näidata kasutajaliidese elemente.',
    'role_asset_image_view_note' => 'See käib nähtavuse kohta pildifailide halduris. Tegelik ligipääs üleslaaditud pildifailidele sõltub süsteemsest piltide salvestamise valikust.',
    'role_all' => 'Kõik',
    'role_own' => 'Enda omad',
    'role_controlled_by_asset' => 'Õigused määratud seotud objekti kaudu',
    'role_save' => 'Salvesta roll',
    'role_update_success' => 'Roll on muudetud',
    'role_users' => 'Selle rolliga kasutajad',
    'role_users_none' => 'Seda rolli ei ole hetkel ühelgi kasutajal',

    // Users
    'users' => 'Kasutajad',
    'users_index_desc' => 'Loo ja halda süsteemi kasutajakontosid. Kontosid kasutatakse sisselogimiseks ning sisu ja tegevuse omistamiseks. Ligipääsuload on enamasti rollipõhised, aga sisu omandus ja muud faktorid võivad samuti mõjutada õiguseid ja ligipääsu.',
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
    'users_password_desc' => 'Määra parool, millega rakendusse sisse logida. See peab olema vähemalt 8 tähemärki.',
    'users_send_invite_text' => 'Sa võid kasutajale saata e-postiga kutse, mis võimaldab neil ise parooli seada. Vastasel juhul määra parool ise.',
    'users_send_invite_option' => 'Saada e-postiga kutse',
    'users_external_auth_id' => 'Välise autentimise ID',
    'users_external_auth_id_desc' => 'Selle ID abil identifitseeritakse kasutajat välise autentimissüsteemiga suhtlemisel.',
    'users_password_warning' => 'Täida allolevad väljad ainult siis, kui soovid oma parooli muuta.',
    'users_system_public' => 'See kasutaja tähistab kõiki külalisi, kes su rakendust vaatavad. Selle kontoga ei saa sisse logida, see määratakse automaatselt.',
    'users_delete' => 'Kustuta kasutaja',
    'users_delete_named' => 'Kustuta kasutaja :userName',
    'users_delete_warning' => 'See kustutab kasutaja nimega \':userName\' süsteemist täielikult.',
    'users_delete_confirm' => 'Kas oled kindel, et soovid selle kasutaja kustutada?',
    'users_migrate_ownership' => 'Teisalda omandus',
    'users_migrate_ownership_desc' => 'Vali siin kasutaja, kui soovid talle üle viia kõik selle kasutaja objektid.',
    'users_none_selected' => 'Kasutaja valimata',
    'users_edit' => 'Muuda kasutajat',
    'users_edit_profile' => 'Muuda profiili',
    'users_avatar' => 'Kasutaja profiilipilt',
    'users_avatar_desc' => 'Vali sellele kasutajale profiilipilt. See peaks olema umbes 256x256 pikslit.',
    'users_preferred_language' => 'Eelistatud keel',
    'users_preferred_language_desc' => 'See valik muudab rakenduse kasutajaliidese keelt. Kasutajate loodud sisu see ei mõjuta.',
    'users_social_accounts' => 'Sotsiaalmeedia kontod',
    'users_social_accounts_info' => 'Siin saad seostada teised kontod, millega kiiremini ja lihtsamini sisse logida. Siit konto eemaldamine ei tühista varem lubatud ligipääsu. Ligipääsu saad tühistada ühendatud konto profiili seadetest.',
    'users_social_connect' => 'Lisa konto',
    'users_social_disconnect' => 'Eemalda konto',
    'users_social_connected' => ':socialAccount konto lisati su profiilile.',
    'users_social_disconnected' => ':socialAccount konto eemaldati su profiililt.',
    'users_api_tokens' => 'API tunnused',
    'users_api_tokens_none' => 'Sellel kasutajal pole API tunnuseid',
    'users_api_tokens_create' => 'Lisa tunnus',
    'users_api_tokens_expires' => 'Aegub',
    'users_api_tokens_docs' => 'API dokumentatsioon',
    'users_mfa' => 'Mitmeastmeline autentimine',
    'users_mfa_desc' => 'Seadista mitmeastmeline autentimine, et oma kasutajakonto turvalisust tõsta.',
    'users_mfa_x_methods' => ':count meetod seadistatud|:count meetodit seadistatud',
    'users_mfa_configure' => 'Seadista meetodid',

    // API Tokens
    'user_api_token_create' => 'Lisa API tunnus',
    'user_api_token_name' => 'Nimi',
    'user_api_token_name_desc' => 'Anna oma tunnusele inimloetav nimi, et selle eesmärk paremini meeles püsiks.',
    'user_api_token_expiry' => 'Kehtiv kuni',
    'user_api_token_expiry_desc' => 'Määra kuupäev, millal see tunnus aegub. Pärast seda kuupäeva ei saa selle tunnusega enam päringuid teha. Välja tühjaks jätmine määrab aegumiskuupäeva 100 aastat tulevikku.',
    'user_api_token_create_secret_message' => 'Kohe pärast selle tunnuse loomist genereeritakse ja kuvatakse tunnuse ID ja salajane võti. Võtit kuvatakse ainult ühe korra, seega kopeeri selle väärtus enne jätkamist turvalisse kohta.',
    'user_api_token_create_success' => 'API tunnus on lisatud',
    'user_api_token_update_success' => 'API tunnus on muudetud',
    'user_api_token' => 'API tunnus',
    'user_api_token_id' => 'Tunnuse ID',
    'user_api_token_id_desc' => 'See on API tunnuse süsteemne mittemuudetav identifikaator, mis tuleb API päringutele kaasa panna.',
    'user_api_token_secret' => 'Tunnuse võti',
    'user_api_token_secret_desc' => 'See on API tunnuse salajane võti, mis tuleb API päringutele kaasa panna. Seda kuvatakse ainult ühe korra, seega kopeeri see turvalisse kohta.',
    'user_api_token_created' => 'Tunnus lisatud :timeAgo',
    'user_api_token_updated' => 'Tunnus muudetud :timeAgo',
    'user_api_token_delete' => 'Kustuta tunnus',
    'user_api_token_delete_warning' => 'See kustutab API tunnuse nimega \':tokenName\' süsteemist.',
    'user_api_token_delete_confirm' => 'Kas oled kindel, et soovid selle API tunnuse kustutada?',
    'user_api_token_delete_success' => 'API tunnus on kustutatud',

    // Webhooks
    'webhooks' => 'Veebihaagid',
    'webhooks_index_desc' => 'Veebihaakide abil saab teatud süsteemis toimunud tegevuste ja sündmuste puhul saata andmeid välistele URL-idele, mis võimaldab integreerida väliseid platvorme, nagu sõnumi- või teavitussüsteemid.',
    'webhooks_x_trigger_events' => '1 sündmus|:count sündmust',
    'webhooks_create' => 'Lisa uus veebihaak',
    'webhooks_none_created' => 'Ühtegi veebihaaki pole lisatud.',
    'webhooks_edit' => 'Muuda veebihaaki',
    'webhooks_save' => 'Salvesta veebihaak',
    'webhooks_details' => 'Veebihaagi seaded',
    'webhooks_details_desc' => 'Sisesta kasutajasõbralik nimi ja POST lõpp-punkt, kuhu veebihaagi andmeid saadetakse.',
    'webhooks_events' => 'Veebihaagi sündmused',
    'webhooks_events_desc' => 'Vali kõik sündmused, mille peale seda veebihaaki peaks käivitama.',
    'webhooks_events_warning' => 'Pea meeles, et veebihaak käivitatakse kõigi valitud sündmuste peale, isegi kui on seatud kohandatud õigused. Hoolitse selle eest, et veebihaak ei teeks avalikuks konfidentsiaalset sisu.',
    'webhooks_events_all' => 'Kõik süsteemsed sündmused',
    'webhooks_name' => 'Veebihaagi nimi',
    'webhooks_timeout' => 'Veebihaagi päringu aegumine (sekundit)',
    'webhooks_endpoint' => 'Veebihaagi lõpp-punkt',
    'webhooks_active' => 'Veebihaak aktiivne',
    'webhook_events_table_header' => 'Sündmused',
    'webhooks_delete' => 'Kustuta veebihaak',
    'webhooks_delete_warning' => 'See kustutab veebihaagi nimega \':webhookName\' süsteemist.',
    'webhooks_delete_confirm' => 'Kas oled kindel, et soovid selle veebihaagi kustutada?',
    'webhooks_format_example' => 'Veebihaagi formaadi näidis',
    'webhooks_format_example_desc' => 'Veebihaagi andmed saadetakse POST-päringuga seadistatud lõpp-punktile allpool toodud JSON-formaadis. Omadused "related_item" ja "url" on valikulised ja sõltuvad sündmusest, mis veebihaagi käivitas.',
    'webhooks_status' => 'Veebihaagi staatus',
    'webhooks_last_called' => 'Viimati käivitatud:',
    'webhooks_last_errored' => 'Viimati ebaõnnestunud:',
    'webhooks_last_error_message' => 'Viimane veateade:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English (inglise keel)',
        'ar' => 'العربية (araabia keel)',
        'bg' => 'Bǎlgarski (bulgaaria keel)',
        'bs' => 'Bosanski (bosnia keel)',
        'ca' => 'Català (katalaani keel)',
        'cs' => 'Česky (tšehhi keel)',
        'da' => 'Dansk (taani keel)',
        'de' => 'Deutsch (saksa keel)',
        'de_informal' => 'Deutsch (Du) (mitteformaalne saksa keel)',
        'el' => 'ελληνικά',
        'es' => 'Español (hispaania keel)',
        'es_AR' => 'Español Argentina (Argentiina hispaania keel)',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français (prantsuse keel)',
        'he' => 'עברית (heebrea keel)',
        'hr' => 'Hrvatski (horvaadi keel)',
        'hu' => 'Magyar (ungari keel)',
        'id' => 'Bahasa Indonesia (indoneesia keel)',
        'it' => 'Italiano (itaalia keel)',
        'ja' => '日本語 (jaapani keel)',
        'ko' => '한국어 (korea keel)',
        'lt' => 'Lietuvių Kalba (leedu keel)',
        'lv' => 'Latviešu Valoda (läti keel)',
        'nl' => 'Nederlands (hollandi keel)',
        'nb' => 'Norsk (Bokmål) (norra keel)',
        'pl' => 'Polski (poola keel)',
        'pt' => 'Português (portugali keel)',
        'pt_BR' => 'Português do Brasil (Brasiilia portugali keel)',
        'ro' => 'Română',
        'ru' => 'Русский (vene keel)',
        'sk' => 'Slovensky',
        'sl' => 'Sloveenia',
        'sv' => 'Rootsi',
        'tr' => 'Türgi',
        'uk' => 'Ukraina',
        'vi' => 'Vietnami',
        'zh_CN' => 'Hiina (lihtsustatud)',
        'zh_TW' => 'Hiina (traditsiooniline)',
    ],
    //!////////////////////////////////
];
