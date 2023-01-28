<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ajustes',
    'settings_save' => 'Guardar ajustes',
    'settings_save_success' => 'Ajustes guardados',
    'system_version' => 'Versión del Sistema',
    'categories' => 'Categorías',

    // App Settings
    'app_customization' => 'Personalización',
    'app_features_security' => 'Características y seguridad',
    'app_name' => 'Nombre de la aplicación',
    'app_name_desc' => 'Este nombre se muestra en la cabecera y en cualquier correo electrónico enviado por el sistema.',
    'app_name_header' => 'Mostrar nombre en la cabecera',
    'app_public_access' => 'Acceso público',
    'app_public_access_desc' => 'Activar esta opción permitirá a los visitantes que no hayan iniciado sesión, poder ver el contenido de tu BookStack.',
    'app_public_access_desc_guest' => 'El acceso público para visitantes puede ser controlado a través del usuario "Guest".',
    'app_public_access_toggle' => 'Permitir acceso público',
    'app_public_viewing' => '¿Permitir acceso público?',
    'app_secure_images' => 'Mayor seguridad para subir imágenes',
    'app_secure_images_toggle' => 'Habilitar mayor seguridad en la subida de imágenes',
    'app_secure_images_desc' => 'Por razones de rendimiento, todas las imágenes son públicas. Esta opción agrega una cadena de texto larga difícil de adivinar. Asegúrese que los índices de directorio no están habilitados para evitar el acceso fácil a las imágenes.',
    'app_default_editor' => 'Editor de Página por defecto',
    'app_default_editor_desc' => 'Seleccione qué editor se utilizará por defecto cuando se editen nuevas páginas. Esto se puede anular a nivel de página si los permisos lo permiten.',
    'app_custom_html' => 'Contenido de cabecera HTML personalizado',
    'app_custom_html_desc' => 'Cualquier contenido agregado aquí será insertado al final de la sección <head> de cada página. Esto es útil para sobreescribir estilos o agregar código para analíticas web.',
    'app_custom_html_disabled_notice' => 'El contenido personalizado para la cabecera está deshabilitado en esta página de ajustes para permitir que cualquier cambio que rompa la funcionalidad pueda ser revertido.',
    'app_logo' => 'Logo de la Aplicación',
    'app_logo_desc' => 'Se utiliza en la cabecera de la aplicación, entre otras áreas. Esta imagen debe ser de 86px de altura. Las imágenes grandes serán reducidas en tamaño.',
    'app_icon' => 'Logo de la Aplicación',
    'app_icon_desc' => 'Se utiliza para las pestañas del navegador y los accesos directos. Debería ser una imagen PNG cuadrada de 256px.',
    'app_homepage' => 'Página de inicio',
    'app_homepage_desc' => 'Elija la vista que se mostrará en la página de inicio en lugar de la vista predeterminada. Se ignorarán los permisos de la página seleccionada.',
    'app_homepage_select' => 'Elija una página',
    'app_footer_links' => 'Enlaces de pie de página',
    'app_footer_links_desc' => 'Añade enlaces para mostrar dentro del pie de página del sitio. Estos se mostrarán en la parte inferior de la mayoría de las páginas, incluyendo aquellas que no requieren estar registrado. Puede utilizar una etiqueta de "trans::<key>" para utilizar traducciones definidas por el sistema. Por ejemplo: el uso de "trans::common.privacy_policy" proporcionará el texto traducido "Política de privacidad" y "trans::common.terms_of_service" proporcionará el texto traducido "Términos de servicio".',
    'app_footer_links_label' => 'Etiqueta del enlace',
    'app_footer_links_url' => 'Dirección URL del enlace',
    'app_footer_links_add' => 'Añadir enlace al pie de página',
    'app_disable_comments' => 'Deshabilitar Comentarios',
    'app_disable_comments_toggle' => 'Deshabilitar comentarios',
    'app_disable_comments_desc' => 'Deshabilita los comentarios en todas las páginas de la aplicación. <br> Los comentarios existentes no se muestran.',

    // Color settings
    'color_scheme' => 'Application Color Scheme',
    'color_scheme_desc' => 'Set the colors to use in the BookStack interface. Colors can be configured separately for dark and light modes to best fit the theme and ensure legibility.',
    'ui_colors_desc' => 'Set the primary color and default link color for BookStack. The primary color is mainly used for the header banner, buttons and interface decorations. The default link color is used for text-based links and actions, both within written content and in the Bookstack interface.',
    'app_color' => 'Primary Color',
    'link_color' => 'Default Link Color',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Color del estante',
    'book_color' => 'Color del libro',
    'chapter_color' => 'Color del capítulo',
    'page_color' => 'Color de la página',
    'page_draft_color' => 'Color del borrador de página',

    // Registration Settings
    'reg_settings' => 'Registro',
    'reg_enable' => 'Habilitar Registro',
    'reg_enable_toggle' => 'Habilitar registro',
    'reg_enable_desc' => 'Cuando se habilita el registro los usuarios podrán registrarse como usuarios de la aplicación. Al registrarse se les asigna un rol único por defecto.',
    'reg_default_role' => 'Rol de usuario por defecto después del registro',
    'reg_enable_external_warning' => 'La opción anterior no se utiliza mientras la autenticación LDAP o SAML externa esté activa. Las cuentas de usuario para los miembros no existentes se crearán automáticamente si la autenticación en el sistema externo en uso es exitosa.',
    'reg_email_confirmation' => 'Confirmación por Email',
    'reg_email_confirmation_toggle' => 'Requerir confirmación por Email',
    'reg_confirm_email_desc' => 'Si se emplea la restricción por dominio, entonces se requerirá la confirmación por correo electrónico y esta opción será ignorada.',
    'reg_confirm_restrict_domain' => 'Restricción de Dominio',
    'reg_confirm_restrict_domain_desc' => 'Introduzca una lista separada por comas de los dominios para cuentas de correo a los que se les permitirá el registro de usuarios. A los usuarios les será enviado un correo electrónico para confirmar la dirección antes de que se le permita interactuar con la aplicación. <br> Tenga en cuenta que los usuarios podrán cambiar sus direcciones de correo electrónico después de registrarse exitosamente.',
    'reg_confirm_restrict_domain_placeholder' => 'Ninguna restricción establecida',

    // Maintenance settings
    'maint' => 'Mantenimiento',
    'maint_image_cleanup' => 'Limpiar imágenes',
    'maint_image_cleanup_desc' => 'Analiza las páginas y sus revisiones para comprobar qué imágenes y dibujos están siendo utilizadas y cuales no son necesarias. Asegúrate de crear una copia completa de la base de datos y de las imágenes antes de lanzar esta opción.',
    'maint_delete_images_only_in_revisions' => 'Elimina también imágenes que sólo existen en antiguas revisiones de páginas',
    'maint_image_cleanup_run' => 'Lanzar limpieza',
    'maint_image_cleanup_warning' => 'Se han encontrado :count imágenes posiblemente no utilizadas . ¿Estás seguro de querer borrar estas imágenes?',
    'maint_image_cleanup_success' => '¡Se han encontrado y borrado :count imágenes posiblemente no utilizadas!',
    'maint_image_cleanup_nothing_found' => '¡No se han encontrado imágenes sin utilizar, no se han borrado imágenes!',
    'maint_send_test_email' => 'Enviar un correo electrónico de prueba',
    'maint_send_test_email_desc' => 'Esto envía un correo electrónico de prueba a la dirección de correo electrónico especificada en tu perfil.',
    'maint_send_test_email_run' => 'Enviar correo electrónico de prueba',
    'maint_send_test_email_success' => 'Correo electrónico enviado a :address',
    'maint_send_test_email_mail_subject' => 'Probar correo electrónico',
    'maint_send_test_email_mail_greeting' => '¡El envío de correos electrónicos parece funcionar!',
    'maint_send_test_email_mail_text' => '¡Enhorabuena! Al recibir esta notificación de correo electrónico, tu configuración de correo electrónico parece estar ajustada correctamente.',
    'maint_recycle_bin_desc' => 'Los estantes, libros, capítulos y páginas eliminados se envían a la papelera de reciclaje para que puedan ser restauradas o eliminadas permanentemente. Los elementos más antiguos en la papelera de reciclaje pueden ser eliminados automáticamente después de un tiempo dependiendo de la configuración del sistema.',
    'maint_recycle_bin_open' => 'Abrir papelera de reciclaje',
    'maint_regen_references' => 'Regenerar Referencias',
    'maint_regen_references_desc' => 'Esta acción reconstruirá el índice de referencia de elementos cruzados dentro de la base de datos. Normalmente se gestiona automáticamente, pero esta acción puede ser útil para indexar el contenido antiguo o añadido mediante métodos no oficiales.',
    'maint_regen_references_success' => '¡El índice de referencias ha sido regenerado!',
    'maint_timeout_command_note' => 'Nota: Esta acción puede tardar en ejecutarse, lo que puede llevar a problemas de tiempo de espera en algunos entornos web. Como alternativa, esta acción se puede realizar desde una terminal.',

    // Recycle Bin
    'recycle_bin' => 'Papelera de Reciclaje',
    'recycle_bin_desc' => 'Aquí puede restaurar elementos que hayan sido eliminados o elegir eliminarlos permanentemente del sistema. Esta lista no está filtrada a diferencia de las listas de actividad similares en el sistema donde se aplican los filtros de permisos.',
    'recycle_bin_deleted_item' => 'Elemento Eliminado',
    'recycle_bin_deleted_parent' => 'Superior',
    'recycle_bin_deleted_by' => 'Eliminado por',
    'recycle_bin_deleted_at' => 'Fecha de eliminación',
    'recycle_bin_permanently_delete' => 'Eliminar permanentemente',
    'recycle_bin_restore' => 'Restaurar',
    'recycle_bin_contents_empty' => 'La papelera de reciclaje está vacía',
    'recycle_bin_empty' => 'Vaciar Papelera de reciclaje',
    'recycle_bin_empty_confirm' => 'Esto destruirá permanentemente todos los elementos de la papelera de reciclaje, incluyendo el contenido existente en cada elemento. ¿Está seguro de que desea vaciar la papelera de reciclaje?',
    'recycle_bin_destroy_confirm' => 'Esta acción eliminará permanentemente este elemento del sistema, junto con los elementos secundarios listados a continuación, y no podrá restaurar este contenido de nuevo. ¿Está seguro de que desea eliminar permanentemente este elemento?',
    'recycle_bin_destroy_list' => 'Elementos a eliminar',
    'recycle_bin_restore_list' => 'Elementos a restaurar',
    'recycle_bin_restore_confirm' => 'Esta acción restaurará el elemento eliminado, incluyendo cualquier elemento secundario, a su ubicación original. Si la ubicación original ha sido eliminada, y ahora está en la papelera de reciclaje, el elemento padre también tendrá que ser restaurado.',
    'recycle_bin_restore_deleted_parent' => 'El padre de este elemento también ha sido eliminado. Estos permanecerán eliminados hasta que el padre también sea restaurado.',
    'recycle_bin_restore_parent' => 'Restaurar Superior',
    'recycle_bin_destroy_notification' => 'Eliminados :count artículos de la papelera de reciclaje.',
    'recycle_bin_restore_notification' => 'Restaurados :count artículos desde la papelera de reciclaje.',

    // Audit Log
    'audit' => 'Registro de Auditoría',
    'audit_desc' => 'Este registro de auditoría muestra una lista de actividades registradas en el sistema. Esta lista no está filtrada a diferencia de las listas de actividad similares en el sistema donde se aplican los filtros de permisos.',
    'audit_event_filter' => 'Filtro de eventos',
    'audit_event_filter_no_filter' => 'Sin filtro',
    'audit_deleted_item' => 'Elemento eliminado',
    'audit_deleted_item_name' => 'Nombre: :name',
    'audit_table_user' => 'Usuario',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Elemento o detalle relacionados',
    'audit_table_ip' => 'Dirección IP',
    'audit_table_date' => 'Fecha de la actividad',
    'audit_date_from' => 'Rango de fecha desde',
    'audit_date_to' => 'Rango de fecha hasta',

    // Role Settings
    'roles' => 'Roles',
    'role_user_roles' => 'Roles de usuario',
    'roles_index_desc' => 'Los roles se utilizan para agrupar usuarios y proporcionar permisos del sistema a sus miembros. Cuando un usuario es miembro de múltiples roles los privilegios otorgados se acumularán y el usuario heredará todas las habilidades.',
    'roles_x_users_assigned' => '1 usuario asignado|:count usuarios asignados',
    'roles_x_permissions_provided' => '1 permiso|:count permisos',
    'roles_assigned_users' => 'Usuarios Asignados',
    'roles_permissions_provided' => 'Permisos Proporcionados',
    'role_create' => 'Crear nuevo rol',
    'role_create_success' => 'Rol creado satisfactoriamente',
    'role_delete' => 'Borrar rol',
    'role_delete_confirm' => 'Se borrará el rol con nombre  \':roleName\'.',
    'role_delete_users_assigned' => 'Este rol tiene :userCount usuarios asignados. Si quisiera migrar los usuarios de este rol, seleccione un nuevo rol a continuación.',
    'role_delete_no_migration' => "No migrar usuarios",
    'role_delete_sure' => 'Está seguro que desea borrar este rol?',
    'role_delete_success' => 'Rol borrado satisfactoriamente',
    'role_edit' => 'Editar rol',
    'role_details' => 'Detalles de rol',
    'role_name' => 'Nombre de rol',
    'role_desc' => 'Descripción corta de rol',
    'role_mfa_enforced' => 'Requiere Autenticación en Dos Pasos',
    'role_external_auth_id' => 'ID externo de autenticación',
    'role_system' => 'Permisos de sistema',
    'role_manage_users' => 'Gestionar usuarios',
    'role_manage_roles' => 'Gestionar roles y permisos de roles',
    'role_manage_entity_permissions' => 'Gestionar todos los permisos de libros, capítulos y páginas',
    'role_manage_own_entity_permissions' => 'Gestionar permisos en libros, capítulos y páginas propias',
    'role_manage_page_templates' => 'Administrar plantillas',
    'role_access_api' => 'API de sistema de acceso',
    'role_manage_settings' => 'Gestionar ajustes de la aplicación',
    'role_export_content' => 'Exportar contenido',
    'role_editor_change' => 'Cambiar editor de página',
    'role_asset' => 'Permisos de contenido',
    'roles_system_warning' => 'Tenga en cuenta que el acceso a cualquiera de los tres permisos anteriores puede permitir a un usuario alterar sus propios privilegios o los privilegios de otros en el sistema. Sólo asignar roles con estos permisos a usuarios de confianza.',
    'role_asset_desc' => 'Estos permisos controlan el acceso por defecto a los contenidos del sistema. Los permisos de Libros, Capítulos y Páginas sobreescribiran estos permisos.',
    'role_asset_admins' => 'A los administradores se les asigna automáticamente permisos para acceder a todo el contenido pero estas opciones podrían mostrar u ocultar opciones de la interfaz.',
    'role_asset_image_view_note' => 'Esto se refiere a la visibilidad dentro del gestor de imágenes. El acceso a los archivos de imagen subidos dependerá de la opción de almacenamiento de imágenes del sistema.',
    'role_all' => 'Todo',
    'role_own' => 'Propio',
    'role_controlled_by_asset' => 'Controlado por el contenido al que ha sido subido',
    'role_save' => 'Guardar rol',
    'role_update_success' => 'Rol actualizado éxitosamente',
    'role_users' => 'Usuarios en este rol',
    'role_users_none' => 'No hay usuarios asignados a este rol',

    // Users
    'users' => 'Usuarios',
    'users_index_desc' => 'Crear y administrar cuentas de usuario individuales dentro del sistema. Las cuentas de usuario se utilizan para el inicio de sesión y atribución de contenido y actividad. Los permisos de acceso se basan principalmente en roles, pero la propiedad del contenido del usuario, entre otros factores, también puede afectar a los permisos y el acceso.',
    'user_profile' => 'Perfil de Usuario',
    'users_add_new' => 'Agregar Nuevo Usuario',
    'users_search' => 'Buscar usuarios',
    'users_latest_activity' => 'Actividad Reciente',
    'users_details' => 'Detalles de Usuario',
    'users_details_desc' => 'Ajusta un nombre público y email para este usuario. El email será empleado para acceder a la aplicación.',
    'users_details_desc_no_email' => 'Ajusta un nombre público para este usuario para que pueda ser reconocido por otros.',
    'users_role' => 'Roles de usuario',
    'users_role_desc' => 'Selecciona los roles a los que será asignado este usuario. Si se asignan varios roles los permisos se acumularán y recibirá todas las habilidades de los roles asignados.',
    'users_password' => 'Contraseña de Usuario',
    'users_password_desc' => 'Establezca una contraseña para iniciar sesión en la aplicación. Debe tener al menos 8 caracteres.',
    'users_send_invite_text' => 'Puede enviar una invitación a este usuario por correo electrónico que le permitirá ajustar su propia contraseña, o puede usted ajustar su contraseña.',
    'users_send_invite_option' => 'Enviar un correo electrónico de invitación',
    'users_external_auth_id' => 'ID externo de autenticación',
    'users_external_auth_id_desc' => 'Esta es la ID usada para asociar este usuario con el sistema de autenticación externo.',
    'users_password_warning' => 'Solo debe rellenar este campo si desea cambiar su contraseña.',
    'users_system_public' => 'Este usuario representa cualquier usuario invitado que visita la aplicación. No puede utilizarse para acceder pero es asignado automáticamente.',
    'users_delete' => 'Borrar usuario',
    'users_delete_named' => 'Borrar usuario :userName',
    'users_delete_warning' => 'Se borrará completamente el usuario con el nombre \':userName\' del sistema.',
    'users_delete_confirm' => '¿Está seguro que desea borrar este usuario?',
    'users_migrate_ownership' => 'Cambiar Propietario',
    'users_migrate_ownership_desc' => 'Seleccione un usuario aquí si desea que otro usuario se convierta en el dueño de todos los elementos que actualmente son propiedad de este usuario.',
    'users_none_selected' => 'Usuario no seleccionado',
    'users_edit' => 'Editar Usuario',
    'users_edit_profile' => 'Editar perfil',
    'users_avatar' => 'Avatar del usuario',
    'users_avatar_desc' => 'Elige una imagen para representar a este usuario. Debe ser aproximadamente de 256px por lado.',
    'users_preferred_language' => 'Idioma preferido',
    'users_preferred_language_desc' => 'Esta opción cambiará el idioma de la interfaz de usuario en la aplicación. No afectará al contenido creado por los usuarios.',
    'users_social_accounts' => 'Cuentas sociales',
    'users_social_accounts_info' => 'Aquí puede conectar sus otras cuentas para un acceso rápido y fácil a la aplicación. Desconectando una cuenta aquí no revoca accesos ya autorizados. Revoque el acceso desde los ajustes de perfil en la cuenta social conectada.',
    'users_social_connect' => 'Conectar cuenta',
    'users_social_disconnect' => 'Desconectar cuenta',
    'users_social_connected' => 'La cuenta :socialAccount ha sido añadida éxitosamente a su perfil.',
    'users_social_disconnected' => 'La cuenta :socialAccount ha sido desconectada éxitosamente de su perfil.',
    'users_api_tokens' => 'Tokens API',
    'users_api_tokens_none' => 'No se han creado tokens API para este usuario',
    'users_api_tokens_create' => 'Crear token',
    'users_api_tokens_expires' => 'Expira',
    'users_api_tokens_docs' => 'Documentación API',
    'users_mfa' => 'Autenticación en Dos Pasos',
    'users_mfa_desc' => 'La autenticación en dos pasos añade una capa de seguridad adicional a tu cuenta.',
    'users_mfa_x_methods' => ':count método configurado|:count métodos configurados',
    'users_mfa_configure' => 'Configurar Métodos',

    // API Tokens
    'user_api_token_create' => 'Crear token API',
    'user_api_token_name' => 'Nombre',
    'user_api_token_name_desc' => 'Dale a tu token un nombre legible como un recordatorio futuro de su propósito.',
    'user_api_token_expiry' => 'Fecha de expiración',
    'user_api_token_expiry_desc' => 'Establece una fecha en la que este token expira. Después de esta fecha, las solicitudes realizadas usando este token ya no funcionarán. Dejar este campo en blanco fijará un vencimiento de 100 años en el futuro.',
    'user_api_token_create_secret_message' => 'Inmediatamente después de crear este token se generarán y mostrarán sus correspondientes "Token ID" y "Token Secret". El "Token Secret" sólo se mostrará una vez, así que asegúrese de copiar el valor a un lugar seguro antes de proceder.',
    'user_api_token_create_success' => 'Token API creado correctamente',
    'user_api_token_update_success' => 'Token API actualizado correctamente',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Este es un identificador no editable generado por el sistema y único para este token que necesitará ser proporcionado en solicitudes de API.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Esta es una clave no editable generada por el sistema que necesitará ser proporcionada en solicitudes de API. Solo se monstraré esta vez así que guarde su valor en un lugar seguro.',
    'user_api_token_created' => 'Token creado :timeAgo',
    'user_api_token_updated' => 'Token actualizado :timeAgo',
    'user_api_token_delete' => 'Borrar token',
    'user_api_token_delete_warning' => 'Esto eliminará completamente este token API con el nombre \':tokenName\' del sistema.',
    'user_api_token_delete_confirm' => '¿Está seguro de que desea borrar este API token?',
    'user_api_token_delete_success' => 'Token API borrado correctamente',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Los Webhooks son una forma de enviar datos a URLs externas cuando ciertas acciones y eventos ocurren dentro del sistema, lo que permite la integración basada en eventos con plataformas externas como mensajería o sistemas de notificación.',
    'webhooks_x_trigger_events' => '1 evento|:count eventos',
    'webhooks_create' => 'Crear Webhook',
    'webhooks_none_created' => 'No hay webhooks creados.',
    'webhooks_edit' => 'Editar Webhook',
    'webhooks_save' => 'Guardar Webhook',
    'webhooks_details' => 'Detalles del Webhook',
    'webhooks_details_desc' => 'Proporcione un nombre y un punto final POST como destino para los datos del webhook que se enviarán.',
    'webhooks_events' => 'Eventos del Webhook',
    'webhooks_events_desc' => 'Seleccione todos los eventos que deberían activar este webhook.',
    'webhooks_events_warning' => 'Tenga en cuenta que estos eventos se activarán para todos los eventos seleccionados, incluso si se aplican permisos personalizados. Asegúrese de que el uso de este webhook no exponga contenido confidencial.',
    'webhooks_events_all' => 'Todos los eventos del sistema',
    'webhooks_name' => 'Nombre del Webhook',
    'webhooks_timeout' => 'Tiempo de Espera de Webhook (Segundos)',
    'webhooks_endpoint' => 'Punto final del Webhook',
    'webhooks_active' => 'Webhook Activo',
    'webhook_events_table_header' => 'Eventos',
    'webhooks_delete' => 'Eliminar Webhook',
    'webhooks_delete_warning' => 'Esto eliminará completamente este webhook, con el nombre \':webhookName\', del sistema.',
    'webhooks_delete_confirm' => '¿Seguro que quieres eliminar este webhook?',
    'webhooks_format_example' => 'Ejemplo de Formato de Webhook',
    'webhooks_format_example_desc' => 'Los datos del Webhook se envían como una solicitud POST al punto final configurado como JSON siguiendo el formato mostrado a continuación. Las propiedades "related_item" y "url" son opcionales y dependerán del tipo de evento activado.',
    'webhooks_status' => 'Estado del Webhook',
    'webhooks_last_called' => 'Última Ejecución:',
    'webhooks_last_errored' => 'Último error:',
    'webhooks_last_error_message' => 'Último mensaje de error:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Inglés',
        'ar' => 'Árabe',
        'bg' => 'Búlgaro',
        'bs' => 'Bosnio',
        'ca' => 'Català',
        'cs' => 'Checo',
        'da' => 'Danés',
        'de' => 'Alemán (informal)',
        'de_informal' => 'Alemán (formal)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Francés',
        'he' => 'עברית',
        'hr' => 'Croata',
        'hu' => 'Húngaro',
        'id' => 'Indonesio',
        'it' => 'Italiano',
        'ja' => 'Japonés',
        'ko' => 'Coreano',
        'lt' => 'Lituano',
        'lv' => 'Letón',
        'nl' => 'Holanda',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polaco',
        'pt' => 'Portugués',
        'pt_BR' => 'Portugués brasileño',
        'ro' => 'Română',
        'ru' => 'Ruso',
        'sk' => 'Eslovaco',
        'sl' => 'Esloveno',
        'sv' => 'Sueco',
        'tr' => 'Turco',
        'uk' => 'Ucraniano',
        'vi' => 'Vietnamita',
        'zh_CN' => 'Chino mandarín',
        'zh_TW' => 'Chino tradicional',
    ],
    //!////////////////////////////////
];
