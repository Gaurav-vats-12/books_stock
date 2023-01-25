<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Inställningar',
    'settings_save' => 'Spara inställningar',
    'settings_save_success' => 'Inställningarna har sparats',
    'system_version' => 'Systemversion',
    'categories' => 'Kategorier',

    // App Settings
    'app_customization' => 'Sidanpassning',
    'app_features_security' => 'Funktioner och säkerhet',
    'app_name' => 'Applikationsnamn',
    'app_name_desc' => 'Namnet visas i sidhuvdet och i eventuella mail.',
    'app_name_header' => 'Visa applikationsnamn i sidhuvudet?',
    'app_public_access' => 'Offentlig åtkomst',
    'app_public_access_desc' => 'Om du aktiverar detta alternativ låter du icke inloggade besökare komma åt innehåll på din sida',
    'app_public_access_desc_guest' => 'Åtkomst för icke inloggade besökare kan styras via användaren "Guest".',
    'app_public_access_toggle' => 'Tillåt offentlig åtkomst',
    'app_public_viewing' => 'Tillåt publikt innehåll?',
    'app_secure_images' => 'Aktivera högre säkerhet för bilduppladdningar?',
    'app_secure_images_toggle' => 'Aktivera säkrare bilduppladdningar',
    'app_secure_images_desc' => 'Av prestandaskäl är alla bilder publika. Det här alternativet lägger till en slumpmässig, svårgissad sträng framför alla bild-URL:er. Se till att kataloglistning inte är aktivt för att förhindra åtkomst.',
    'app_default_editor' => 'Standard-sidredigerare',
    'app_default_editor_desc' => 'Välj vilken redigerare som ska användas som standard vid redigering av nya sidor. Detta kan ändras enskilt för sidor som tillåter det.',
    'app_custom_html' => 'Anpassat HTML-huvudinnehåll',
    'app_custom_html_desc' => 'Innehåll i det här fältet placeras längst ner i <head>-sektionen på varje sida. Detta kan användas för att skriva över stilmallar eller lägga in spårningskoder.',
    'app_custom_html_disabled_notice' => 'Anpassat innehåll i HTML-huvudet är inaktiverat på denna inställningssida för att säkerställa att eventuella ändringar som påverkar funktionaliteten kan återställas.',
    'app_logo' => 'Applikationslogotyp',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Application Icon',
    'app_icon_desc' => 'This icon is used for browser tabs and shortcut icons. This should be a 256px square PNG image.',
    'app_primary_color' => 'Primärfärg',
    'app_primary_color_desc' => 'Anger den primära färgen för applikationen, inklusive banner, knappar och länkar.',
    'app_homepage' => 'Startsida',
    'app_homepage_desc' => 'Välj en vy att använda som startsida istället för standardvyn. Behörigheter för valda sidor kommer att ignoreras.',
    'app_homepage_select' => 'Välj en sida',
    'app_footer_links' => 'Sidfotslänkar',
    'app_footer_links_desc' => 'Lägg till länkar som visas i sidfoten. Dessa kommer att visas längst ner på de flesta sidor, inklusive de som inte kräver inloggning. Du kan använda en etikett av "trans::<key>" för att använda systemdefinierade översättningar. Exempelvis översätts "trans::common.privacy_policy" till "Integritetspolicy" och "trans::common.terms_of_service" till "Användarvillkor".',
    'app_footer_links_label' => 'Länketikett',
    'app_footer_links_url' => 'Länk URL',
    'app_footer_links_add' => 'Lägg till sidfotslänk',
    'app_disable_comments' => 'Inaktivera kommentarer',
    'app_disable_comments_toggle' => 'Inaktivera kommentarer',
    'app_disable_comments_desc' => 'Inaktivera kommentarer på alla sidor i applikationen. Befintliga kommentarer visas inte.',

    // Color settings
    'content_colors' => 'Innehållsfärger',
    'content_colors_desc' => 'Ställer in färger för alla element i sidornas hierarki. Att välja färger med samma ljusstyrka som standardfärgerna rekommenderas för läsbarhet.',
    'bookshelf_color' => 'Hyllfärg',
    'book_color' => 'Bokfärg',
    'chapter_color' => 'Kapitelfärg',
    'page_color' => 'Sidfärg',
    'page_draft_color' => 'Färg på sidutkast',

    // Registration Settings
    'reg_settings' => 'Registrering',
    'reg_enable' => 'Aktivera registrering',
    'reg_enable_toggle' => 'Aktivera registrering',
    'reg_enable_desc' => 'När registrering är aktiverad kan användaren själv registrera sig och logga in i applikationen. Vid registrering tilldelas de en förvald användarroll.',
    'reg_default_role' => 'Förvald användarroll efter registrering',
    'reg_enable_external_warning' => 'Alternativet ovan ignoreras när extern LDAP- eller SAML-autentisering är aktiverad. Användarkonton för icke-existerande medlemmar kommer att skapas automatiskt, om autentisering mot det externa system som används lyckas.',
    'reg_email_confirmation' => 'E-postbekräftelse',
    'reg_email_confirmation_toggle' => 'Kräv e-postbekräftelse',
    'reg_confirm_email_desc' => 'Om domänbegränsning används kommer e-postbekräftelse att krävas och detta alternativ kommer att ignoreras.',
    'reg_confirm_restrict_domain' => 'Begränsning av domän',
    'reg_confirm_restrict_domain_desc' => 'Ange en kommaseparerad lista över e-postdomäner som du vill begränsa registrering för. Användare kommer att få ett e-postmeddelande för att bekräfta sin e-postadress innan de tillåts att logga in. <br> Notera att användare kommer att kunna ändra sin e-postadress efter lyckad registrering.',
    'reg_confirm_restrict_domain_placeholder' => 'Ingen begränsning inställd',

    // Maintenance settings
    'maint' => 'Underhåll',
    'maint_image_cleanup' => 'Rensa bilder',
    'maint_image_cleanup_desc' => 'Söker igenom innehåll i sidor & revisioner för att se vilka bilder och teckningar som är i bruk och vilka som är överflödiga. Se till att ta en komplett backup av databas och bilder innan du kör detta.',
    'maint_delete_images_only_in_revisions' => 'Ta också bort bilder som bara finns i gamla sidrevideringar',
    'maint_image_cleanup_run' => 'Kör rensning',
    'maint_image_cleanup_warning' => 'Hittade :count bilder som potentiellt inte används. Vill du verkligen ta bort dessa bilder?',
    'maint_image_cleanup_success' => 'Hittade och raderade :count bilder som potentiellt inte används!',
    'maint_image_cleanup_nothing_found' => 'Hittade inga oanvända bilder, så inget har raderats!',
    'maint_send_test_email' => 'Skicka ett testmail',
    'maint_send_test_email_desc' => 'Detta skickar ett testmeddelande till den e-postadress som anges i din profil.',
    'maint_send_test_email_run' => 'Skicka testmail',
    'maint_send_test_email_success' => 'E-post skickat till :address',
    'maint_send_test_email_mail_subject' => 'Testmejl',
    'maint_send_test_email_mail_greeting' => 'E-postleverans verkar fungera!',
    'maint_send_test_email_mail_text' => 'Grattis! Eftersom du fick detta e-postmeddelande verkar dina e-postinställningar vara korrekt konfigurerade.',
    'maint_recycle_bin_desc' => 'Borttagna hyllor, böcker, kapitel & sidor skickas till papperskorgen så att de kan återställas eller raderas permanent. Äldre objekt i papperskorgen kan automatiskt tas bort efter ett tag beroende på systemkonfiguration.',
    'maint_recycle_bin_open' => 'Öppna papperskorgen',
    'maint_regen_references' => 'Regenerera referenser',
    'maint_regen_references_desc' => 'Den här åtgärden kommer att bygga om referensindex för kopplade objekt i databasen. Detta hanteras vanligtvis automatiskt, men denna åtgärd kan vara användbar för att indexera gammalt innehåll eller innehåll som lagts till via inofficiella metoder.',
    'maint_regen_references_success' => 'Referensindex har regenererats!',
    'maint_timeout_command_note' => 'Obs: Denna åtgärd kan ta tid att köra, vilket kan leda till timeoutproblem i vissa webbmiljöer. Som ett alternativ kan denna åtgärd utföras med ett terminalkommando.',

    // Recycle Bin
    'recycle_bin' => 'Papperskorgen',
    'recycle_bin_desc' => 'Här kan du återställa objekt som har tagits bort eller välja att permanent ta bort dem från systemet. Denna lista är ofiltrerad till skillnad från liknande aktivitetslistor i systemet där behörighetsfilter tillämpas.',
    'recycle_bin_deleted_item' => 'Raderat objekt',
    'recycle_bin_deleted_parent' => 'Överordnad',
    'recycle_bin_deleted_by' => 'Borttagen av',
    'recycle_bin_deleted_at' => 'Tid för borttagning',
    'recycle_bin_permanently_delete' => 'Radera permanent',
    'recycle_bin_restore' => 'Återställ',
    'recycle_bin_contents_empty' => 'Papperskorgen är för närvarande tom',
    'recycle_bin_empty' => 'Töm papperskorgen',
    'recycle_bin_empty_confirm' => 'Detta kommer permanent att förstöra alla objekt i papperskorgen inklusive innehåll som finns i varje objekt. Är du säker du vill tömma papperskorgen?',
    'recycle_bin_destroy_confirm' => 'Denna åtgärd kommer att permanent ta bort detta objekt, tillsammans med alla underordnade element som anges nedan, från systemet och du kommer inte att kunna återställa detta innehåll. Är du säker på att du vill ta bort objektet permanent?',
    'recycle_bin_destroy_list' => 'Objekt som ska förstöras',
    'recycle_bin_restore_list' => 'Objekt som ska återställas',
    'recycle_bin_restore_confirm' => 'Denna åtgärd kommer att återställa det raderade objektet, inklusive alla underordnade element, till deras ursprungliga plats. Om den ursprungliga platsen har tagits bort sedan dess, och är nu i papperskorgen, kommer det överordnade objektet också att behöva återställas.',
    'recycle_bin_restore_deleted_parent' => 'Föräldern till det här objektet har också tagits bort. Dessa kommer att förbli raderade tills den förälder är återställd.',
    'recycle_bin_restore_parent' => 'Återställ överordnad',
    'recycle_bin_destroy_notification' => 'Raderade :count totala objekt från papperskorgen.',
    'recycle_bin_restore_notification' => 'Återställt :count totala objekt från papperskorgen.',

    // Audit Log
    'audit' => 'Auditlogg',
    'audit_desc' => 'Denna granskningslogg visar en lista över aktiviteter som spåras i systemet. Denna lista är ofiltrerad till skillnad från liknande aktivitetslistor i systemet där behörighetsfilter tillämpas.',
    'audit_event_filter' => 'Händelse Filter',
    'audit_event_filter_no_filter' => 'Inget filter',
    'audit_deleted_item' => 'Raderat objekt',
    'audit_deleted_item_name' => 'Namn: :name',
    'audit_table_user' => 'Användare',
    'audit_table_event' => 'Händelse',
    'audit_table_related' => 'Relaterat objekt eller detalj',
    'audit_table_ip' => 'IP-adress',
    'audit_table_date' => 'Datum för senaste aktiviteten',
    'audit_date_from' => 'Datumintervall från',
    'audit_date_to' => 'Datumintervall till',

    // Role Settings
    'roles' => 'Roller',
    'role_user_roles' => 'Användarroller',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => '1 user assigned|:count users assigned',
    'roles_x_permissions_provided' => '1 permission|:count permissions',
    'roles_assigned_users' => 'Assigned Users',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'Skapa ny roll',
    'role_create_success' => 'Rollen har skapats',
    'role_delete' => 'Ta bort roll',
    'role_delete_confirm' => 'Rollen med namn \':roleName\' kommer att tas bort.',
    'role_delete_users_assigned' => 'Det finns :userCount användare som tillhör den här rollen. Om du vill migrera användarna från den här rollen, välj en ny roll nedan.',
    'role_delete_no_migration' => "Migrera inte användare",
    'role_delete_sure' => 'Är du säker på att du vill ta bort den här rollen?',
    'role_delete_success' => 'Rollen har tagits bort',
    'role_edit' => 'Redigera roll',
    'role_details' => 'Om rollen',
    'role_name' => 'Rollens namn',
    'role_desc' => 'Kort beskrivning av rollen',
    'role_mfa_enforced' => 'Kräver multifaktorsautentisering',
    'role_external_auth_id' => 'Externa autentiserings-ID:n',
    'role_system' => 'Systemrättigheter',
    'role_manage_users' => 'Hanter användare',
    'role_manage_roles' => 'Hantera roller & rättigheter',
    'role_manage_entity_permissions' => 'Hantera rättigheter för alla böcker, kapitel och sidor',
    'role_manage_own_entity_permissions' => 'Hantera rättigheter för egna böcker, kapitel och sidor',
    'role_manage_page_templates' => 'Hantera mallar',
    'role_access_api' => 'Åtkomst till systemets API',
    'role_manage_settings' => 'Hantera appinställningar',
    'role_export_content' => 'Exportera innehåll',
    'role_editor_change' => 'Ändra sidredigerare',
    'role_asset' => 'Tillgång till innehåll',
    'roles_system_warning' => 'Var medveten om att åtkomst till någon av ovanstående tre behörigheter kan tillåta en användare att ändra sina egna rättigheter eller andras rättigheter i systemet. Tilldela endast roller med dessa behörigheter till betrodda användare.',
    'role_asset_desc' => 'Det här är standardinställningarna för allt innehåll i systemet. Eventuella anpassade rättigheter på böcker, kapitel och sidor skriver över dessa inställningar.',
    'role_asset_admins' => 'Administratörer har automatisk tillgång till allt innehåll men dessa alternativ kan visa och dölja vissa gränssnittselement',
    'role_asset_image_view_note' => 'Detta avser synlighet inom bildhanteraren. Faktisk åtkomst för uppladdade bildfiler kommer att bero på alternativ för bildlagring.',
    'role_all' => 'Alla',
    'role_own' => 'Egna',
    'role_controlled_by_asset' => 'Kontrolleras av den sida de laddas upp till',
    'role_save' => 'Spara roll',
    'role_update_success' => 'Rollen har uppdaterats',
    'role_users' => 'Användare med denna roll',
    'role_users_none' => 'Inga användare tillhör den här rollen',

    // Users
    'users' => 'Användare',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Användarprofil',
    'users_add_new' => 'Lägg till användare',
    'users_search' => 'Sök användare',
    'users_latest_activity' => 'Senaste aktivitet',
    'users_details' => 'Användarinformation',
    'users_details_desc' => 'Ange ett visningsnamn och en e-postadress för den här användaren. E-postadressen kommer att användas vid inloggningen.',
    'users_details_desc_no_email' => 'Ange ett visningsnamn för den här användaren så att andra kan känna igen den.',
    'users_role' => 'Användarroller',
    'users_role_desc' => 'Välj vilka roller den här användaren ska tilldelas. Om en användare har tilldelats flera roller kommer behörigheterna från dessa roller att staplas och de kommer att få alla rättigheter i de tilldelade rollerna.',
    'users_password' => 'Användarlösenord',
    'users_password_desc' => 'Ange ett lösenord som ska användas för att logga in på sidan. Lösenordet måste vara minst 8 tecken långt.',
    'users_send_invite_text' => 'Du kan välja att skicka denna användare ett e-postmeddelande som tillåter dem att ställa in sitt eget lösenord, eller så kan du ställa in deras lösenord själv.',
    'users_send_invite_option' => 'Skicka e-post med inbjudan',
    'users_external_auth_id' => 'Externt ID för autentisering',
    'users_external_auth_id_desc' => 'Detta är det ID som används för att matcha denna användare när du kommunicerar med ditt externa autentiseringssystem.',
    'users_password_warning' => 'Fyll i nedanstående fält endast om du vill byta lösenord:',
    'users_system_public' => 'Den här användaren representerar eventuella gäster som använder systemet. Den kan inte användas för att logga in utan tilldeles automatiskt.',
    'users_delete' => 'Ta bort användare',
    'users_delete_named' => 'Ta bort användaren :userName',
    'users_delete_warning' => 'Detta kommer att ta bort användaren \':userName\' från systemet helt och hållet.',
    'users_delete_confirm' => 'Är du säker på att du vill ta bort användaren?',
    'users_migrate_ownership' => 'Överför ägarskap',
    'users_migrate_ownership_desc' => 'Välj en användare här om du vill att en annan användare ska bli ägare till alla objekt som för närvarande ägs av denna användare.',
    'users_none_selected' => 'Ingen användare vald',
    'users_edit' => 'Redigera användare',
    'users_edit_profile' => 'Redigera profil',
    'users_avatar' => 'Avatar',
    'users_avatar_desc' => 'Bilden bör vara kvadratisk och ca 256px stor.',
    'users_preferred_language' => 'Föredraget språk',
    'users_preferred_language_desc' => 'Det här alternativet kommer att ändra det språk som används i användargränssnittet. Detta påverkar inget användarskapat innehåll.',
    'users_social_accounts' => 'Anslutna konton',
    'users_social_accounts_info' => 'Här kan du ansluta dina andra konton för snabbare och smidigare inloggning. Om du kopplar från en tjänst här kommer de behörigheter som tidigare givits inte att tas bort - ta bort behörigheter genom att logga in på ditt konto på tjänsten i fråga.',
    'users_social_connect' => 'Anslut konto',
    'users_social_disconnect' => 'Koppla från konto',
    'users_social_connected' => ':socialAccount har kopplats till ditt konto.',
    'users_social_disconnected' => ':socialAccount har kopplats bort från ditt konto.',
    'users_api_tokens' => 'API-nyckel',
    'users_api_tokens_none' => 'Inga API-tokens har skapats för den här användaren',
    'users_api_tokens_create' => 'Skapa token',
    'users_api_tokens_expires' => 'Förfaller',
    'users_api_tokens_docs' => 'API-dokumentation',
    'users_mfa' => 'Multifaktorautentisering',
    'users_mfa_desc' => 'Konfigurera multifaktorsautentisering som ett extra skydd för ditt konto.',
    'users_mfa_x_methods' => ':count metod konfigurerad|:count metoder konfigurerade',
    'users_mfa_configure' => 'Konfigurera metoder',

    // API Tokens
    'user_api_token_create' => 'Skapa API-nyckel',
    'user_api_token_name' => 'Namn',
    'user_api_token_name_desc' => 'Ge din token ett läsbart namn som en framtida påminnelse om dess avsedda syfte.',
    'user_api_token_expiry' => 'Förfallodatum',
    'user_api_token_expiry_desc' => 'Ange ett datum då denna token går ut. Efter detta datum kommer förfrågningar som görs med denna token inte längre att fungera. Lämnar du detta fält tomt kommer utgångsdatum att sättas 100 år in i framtiden.',
    'user_api_token_create_secret_message' => 'Omedelbart efter att du skapat denna token kommer ett "Token ID" & "Token Secret" att genereras och visas. Token Secret kommer bara att visas en enda gång så se till att kopiera värdet till en säker plats innan du fortsätter.',
    'user_api_token_create_success' => 'API-token har skapats',
    'user_api_token_update_success' => 'API-token har uppdaterats',
    'user_api_token' => 'API-nyckel',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Detta är en icke-redigerbar systemgenererad identifierare för denna token som måste tillhandahållas i API-förfrågningar.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Detta är en systemgenererad hemlighet för denna token som måste tillhandahållas i API-förfrågningar. Denna kommer bara att visas en gång så kopiera detta värde till en säker plats.',
    'user_api_token_created' => 'Token skapad :timeAgo',
    'user_api_token_updated' => 'Token Uppdaterad :timeAgo',
    'user_api_token_delete' => 'Ta bort token',
    'user_api_token_delete_warning' => 'Detta kommer att helt ta bort denna API-token med namnet \':tokenName\' från systemet.',
    'user_api_token_delete_confirm' => 'Är du säker på att du vill ta bort denna API-token?',
    'user_api_token_delete_success' => 'API-token har tagits bort',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => '1 trigger event|:count trigger events',
    'webhooks_create' => 'Skapa ny webhook',
    'webhooks_none_created' => 'Inga webhooks har skapats än.',
    'webhooks_edit' => 'Redigera webhook',
    'webhooks_save' => 'Spara webhook',
    'webhooks_details' => 'Webhook-detaljer',
    'webhooks_details_desc' => 'Ange ett användarvänligt namn och en POST-slutpunkt dit data för denna webhook ska skickas.',
    'webhooks_events' => 'Webhook-händelser',
    'webhooks_events_desc' => 'Välja alla händelser som ska trigga ett anrop av denna webhook.',
    'webhooks_events_warning' => 'Tänk på att dessa händelser kommer att triggas för alla valda händelser, även om anpassade behörigheter tillämpas. Se till att användningen av denna webhook inte avslöjar konfidentiellt innehåll.',
    'webhooks_events_all' => 'Alla systemhändelser',
    'webhooks_name' => 'Namn på webhook',
    'webhooks_timeout' => 'Tidsgräns för webhook överskreds (sekunder)',
    'webhooks_endpoint' => 'Webhook-slutpunkt',
    'webhooks_active' => 'Webhook aktiv',
    'webhook_events_table_header' => 'Händelser',
    'webhooks_delete' => 'Ta bort webhook',
    'webhooks_delete_warning' => 'Detta kommer att ta bort följande webhook från systemet: \':webhookName\'.',
    'webhooks_delete_confirm' => 'Är du säker på att du vill ta bort denna webhook?',
    'webhooks_format_example' => 'Exempel på Webhook-format',
    'webhooks_format_example_desc' => 'Webhook-data skickas som en POST-begäran till den konfigurerade slutpunkten enligt nedanstående JSON-format. Egenskaperna "related_item" och "url" är valfria samt beroende av den utlösta händelsens typ.',
    'webhooks_status' => 'Webhook-status',
    'webhooks_last_called' => 'Senast anropad:',
    'webhooks_last_errored' => 'Senast felande:',
    'webhooks_last_error_message' => 'Senaste felmeddelande:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Katalanska',
        'cs' => 'Česky',
        'da' => 'Danska',
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
        'sl' => 'Slovenska',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
