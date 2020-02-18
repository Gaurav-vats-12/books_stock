<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Настройки',
    'settings_save' => 'Сохранить настройки',
    'settings_save_success' => 'Настройки сохранены',

    // App Settings
    'app_customization' => 'Настройки',
    'app_features_security' => 'Функционал & Безопасность',
    'app_name' => 'Имя приложения',
    'app_name_desc' => 'Имя отображается в заголовке email отправленных системой.',
    'app_name_header' => 'Отображать имя приложения в заголовке',
    'app_public_access' => 'Публичный доступ',
    'app_public_access_desc' => 'Включение этой опции позволит неавторизованным посетителям получить доступ к содержимому вашего BookStack.',
    'app_public_access_desc_guest' => 'Публичный доступ контролируется через настройки пользователя "Guest"',
    'app_public_access_toggle' => 'Разрешить публичный доступ',
    'app_public_viewing' => 'Разрешить публичный просмотр?',
    'app_secure_images' => 'Загрузка изображений с высоким уровнем безопасности.',
    'app_secure_images_toggle' => 'Включить загрузку изображений с высоким уровнем безопасности',
    'app_secure_images_desc' => 'Для высокой производительности все изображения являются общедоступными. Этот параметр добавляет случайную строку перед URL изображения. Убедитесь, что индексация каталогов отключена, для предотвращения легкого доступа.',
    'app_editor' => 'Редактор страницы',
    'app_editor_desc' => 'Выберите, какой редактор будет использоваться всеми пользователями для редактирования страниц.',
    'app_custom_html' => 'Пользовательский контент заголовка HTML',
    'app_custom_html_desc' => 'Любой контент, добавленный здесь, будет вставлен в нижнюю часть раздела <head> каждой страницы. Это удобно для переопределения стилей или добавления кода аналитики.',
    'app_custom_html_disabled_notice' => 'Пользовательский контент заголовка HTML отключен на этой странице, чтобы гарантировать отмену любых критических изменений',
    'app_logo' => 'Лого приложения',
    'app_logo_desc' => 'Это изображение должно быть 43px в высоту. <br>Большое изображение будет уменьшено.',
    'app_primary_color' => 'Основной цвет приложения',
    'app_primary_color_desc' => 'Значение должно быть указано в hex-формате. <br>Оставьте пустым чтобы использовать цвет по умолчанию.',
    'app_homepage' => 'Стартовая страница приложения',
    'app_homepage_desc' => 'Выберите страницу, которая будет отображаться на главной странице вместо стандартной. Права на страницы игнорируются для выбранных страниц.',
    'app_homepage_select' => 'Выберите страницу',
    'app_disable_comments' => 'Отключение комментов',
    'app_disable_comments_toggle' => 'Отключить комментарии',
    'app_disable_comments_desc' => 'Отключение комментов на всех страницах. Существующие комментарии отображаться не будут.',

    // Color settings
    'content_colors' => 'Цвета контента',
    'content_colors_desc' => 'Настройка цветов элементов иерархии страницы. Для комфортного чтения рекомендуем выбирать цвета близкие по яркости к цветам по умолчанию.',
    'bookshelf_color' => 'Цвет полки',
    'book_color' => 'Цвет книги',
    'chapter_color' => 'Цвет главы',
    'page_color' => 'Цвет страницы',
    'page_draft_color' => 'Цвет страницы черновика',

    // Registration Settings
    'reg_settings' => 'Настройки регистрации',
    'reg_enable' => 'Разрешить регистрацию',
    'reg_enable_toggle' => 'Разрешить регистрацию',
    'reg_enable_desc' => 'Если регистрация разрешена, пользователь сможет зарегистрироваться в системе самостоятельно. При регистрации назначается роль пользователя по умолчанию',
    'reg_default_role' => 'Роль пользователя по умолчанию после регистрации',
    'reg_enable_external_warning' => 'Если используется LDAP или SAML аутентификация, то параметр выше игнорируется. Аккаунты для несуществующих пользователей будут автоматически созданы если аутентификация на внешней системе будет успешна.',
    'reg_email_confirmation' => 'Подтверждение электронной почты',
    'reg_email_confirmation_toggle' => 'Требовать подтверждение по электронной почте',
    'reg_confirm_email_desc' => 'При использовании ограничения по домену - подтверждение обязательно, этот пункт игнорируется.',
    'reg_confirm_restrict_domain' => 'Ограничить регистрацию по домену',
    'reg_confirm_restrict_domain_desc' => 'Введите список доменов почты через запятую, для которых разрешена регистрация. Пользователям будет отправлено письмо для подтверждения адреса перед входом в приложение. <br> Обратите внимание, что пользователи смогут изменять свой адрес после регистрации.',
    'reg_confirm_restrict_domain_placeholder' => 'Без ограничений',

    // Maintenance settings
    'maint' => 'Обслуживание',
    'maint_image_cleanup' => 'Очистка изображений',
    'maint_image_cleanup_desc' => "Сканирует содержимое страниц и предыдущих версий и определяет изображения, которые не используются. Убедитесь, что у вас есть резервная копия базы данных и папки изображений перед запуском этой функции.",
    'maint_image_cleanup_ignore_revisions' => 'Пропускать изображения в версиях',
    'maint_image_cleanup_run' => 'Выполнить очистку',
    'maint_image_cleanup_warning' => 'Найдено :count возможно бесполезных изображений. Вы уверены, что хотите удалить эти изображения?',
    'maint_image_cleanup_success' => ':count возможно бесполезных изображений было найдено и удалено!',
    'maint_image_cleanup_nothing_found' => 'Не найдено ни одного бесполезного изображения!',
    'maint_send_test_email' => 'Отправить тестовое письмо',
    'maint_send_test_email_desc' => 'Отправить тестовое письмо на адрес электронной почты, указанный в профиле.',
    'maint_send_test_email_run' => 'Отправить проверочное письмо',
    'maint_send_test_email_success' => 'На адрес :address отравлено письмо',
    'maint_send_test_email_mail_subject' => 'Проверка электронной почты',
    'maint_send_test_email_mail_greeting' => 'Доставка электронной почты работает!',
    'maint_send_test_email_mail_text' => 'Поздравляем! Поскольку вы получили это письмо, электронная почта настроена правильно.',

    // Role Settings
    'roles' => 'Роли',
    'role_user_roles' => 'Роли пользователя',
    'role_create' => 'Добавить роль',
    'role_create_success' => 'Роль упешно добавлена',
    'role_delete' => 'Удалить роль',
    'role_delete_confirm' => 'Это удалит роль с именем \':roleName\'.',
    'role_delete_users_assigned' => 'Эта роль назначена :userCount пользователям. Если вы хотите перенести их из этой роли, выберите новую роль ниже.',
    'role_delete_no_migration' => "Не мигрировать пользователей",
    'role_delete_sure' => 'Вы уверены что хотите удалить данную роль?',
    'role_delete_success' => 'Роль успешно удалена',
    'role_edit' => 'Редактировать роль',
    'role_details' => 'Детали роли',
    'role_name' => 'Имя роли',
    'role_desc' => 'Краткое описание роли',
    'role_external_auth_id' => 'Внешние ID авторизации',
    'role_system' => 'Системные разрешения',
    'role_manage_users' => 'Управление пользователями',
    'role_manage_roles' => 'Управление ролями и правами на роли',
    'role_manage_entity_permissions' => 'Управление правами на все книги, главы и страницы',
    'role_manage_own_entity_permissions' => 'Управление разрешениями для собственных книг, разделов и страниц',
    'role_manage_page_templates' => 'Управление шаблонами страниц',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Управление настройками приложения',
    'role_asset' => 'Разрешение для активации',
    'role_asset_desc' => 'Эти разрешения контролируют доступ по умолчанию к параметрам внутри системы. Разрешения на книги, главы и страницы перезапишут эти разрешения.',
    'role_asset_admins' => 'Администраторы автоматически получают доступ ко всему контенту, но эти опции могут отображать или скрывать параметры пользовательского интерфейса.',
    'role_all' => 'Все',
    'role_own' => 'Владелец',
    'role_controlled_by_asset' => 'Контролируется активом, в который они загружены',
    'role_save' => 'Сохранить роль',
    'role_update_success' => 'Роль успешно обновлена',
    'role_users' => 'Пользователи с данной ролью',
    'role_users_none' => 'Нет пользователей с данной ролью',

    // Users
    'users' => 'Пользователи',
    'user_profile' => 'Профиль пользователя',
    'users_add_new' => 'Добавить пользователя',
    'users_search' => 'Поиск пользователей',
    'users_details' => 'Данные пользователя',
    'users_details_desc' => 'Укажите имя и адрес электронной почты для этого пользователя. Адрес электронной почты будет использоваться для входа в приложение.',
    'users_details_desc_no_email' => 'Задайте имя для этого пользователя, чтобы другие могли его узнать',
    'users_role' => 'Роли пользователя',
    'users_role_desc' => 'Назначьте роли пользователю. Если назначено несколько ролей, разрешения будут суммироваться и пользователь получит все права назначенных ролей.',
    'users_password' => 'Пароль пользователя',
    'users_password_desc' => 'Установите пароль для входа в приложение. Должно быть не менее 6 символов.',
    'users_send_invite_text' => 'Вы можете отправить этому пользователю email с приглашением, которое позволит ему установить пароль самостоятельно или задайте пароль сами.',
    'users_send_invite_option' => 'Отправить пользователю письмо с приглашением',
    'users_external_auth_id' => 'Внешний ID аутентификации',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Заполните ниже только если вы хотите сменить свой пароль.',
    'users_system_public' => 'Этот пользователь представляет любых гостевых пользователей, которые посещают ваше приложение. Он не может использоваться для входа в систему и назначается автоматически.',
    'users_delete' => 'Удалить пользователя',
    'users_delete_named' => 'Удалить пользователя :userName',
    'users_delete_warning' => 'Это полностью удалит пользователя с именем \':userName\' из системы.',
    'users_delete_confirm' => 'Вы уверены что хотите удалить этого пользователя?',
    'users_delete_success' => 'Пользователи успешно удалены',
    'users_edit' => 'Редактировать пользователя',
    'users_edit_profile' => 'Редактировать профиль',
    'users_edit_success' => 'Пользователь успешно обновлен',
    'users_avatar' => 'Аватар пользователя',
    'users_avatar_desc' => 'Выберите изображение. Изображение должно быть квадратным, размером около 256px.',
    'users_preferred_language' => 'Предпочитаемый язык',
    'users_preferred_language_desc' => 'Этот параметр изменит язык интерфейса приложения. Это не влияет на созданный пользователем контент.',
    'users_social_accounts' => 'Аккаунты Соцсетей',
    'users_social_accounts_info' => 'Здесь вы можете подключить другие учетные записи для более быстрого и легкого входа в систему. Отключение учетной записи здесь не возможно. Отмените доступ к настройкам вашего профиля в подключенном аккаунте соцсети.',
    'users_social_connect' => 'Подключить аккаунт',
    'users_social_disconnect' => 'Отключить аккаунт',
    'users_social_connected' => ':socialAccount аккаунт упешно подключен к вашему профилю.',
    'users_social_disconnected' => ':socialAccount аккаунт успешно отключен от вашего профиля.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Создать API токен',
    'user_api_token_name' => 'Имя',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
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
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
