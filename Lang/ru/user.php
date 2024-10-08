<?php

return array(

    "user"                          => "Пользователь|Пользователи",
    "user_details"                  => "Сведения о пользователе",
    "add_user"                      => "Добавить пользователей",
    "account_active"                => "Учетная Запись Активна",
    "account_active_desc"           => "Переключите, чтобы включить или отключить доступ к аутентифицированным разделам.",

    "op_settings_dept_desc"         => "Выберите, в каких отделах оператор может просматривать тикеты и отвечать на них.",

    "organisation"                  => "Организация|Организации",
    "members"                       => "Член|Члены",
    "owner"                         => "Владелец",
    "manager"                       => "Менеджер",
    "access_level"                  => "уровень доступа",
    "access_level_desc"             => "Определите уровень доступа для пользователя в организации на основе следующей информации: <br /> <strong> Менеджер </ strong> - можете просматривать заявки, открытые всеми пользователями в организации, и управлять пользователями в организации <br /> <strong> Пользователь </ strong>. Просматривать тикеты можно только самостоятельно.",
    "manage_organisation"           => "Управление организацией",
    "leave_organisation"            => "Выйти из организации",
    "user_membership"               => "Членство пользователя",
    "transfer_ownership"            => "Передача собственности",
    "transfer_ownership_desc"       => "Как текущий владелец организации, вы не можете быть удалены как руководитель, и только вы можете удалить организацию. Вы можете передать право собственности на организацию другому лицу, помните, что это действие нельзя отменить.",
    "transfer_ownership_operator"   => "Только владелец может удалить организацию и не может быть удален из нее. Используйте эту опцию, чтобы изменить владельца на другого пользователя в организации.",
    "start_typing_name"             => "Начните вводить имя ...",
    "organisation_desc"             => "В каждой организации могут быть <strong> менеджеры </ strong>, которые могут управлять пользователями, читать и отвечать на тикеты других, и <strong> пользователи </ strong>, которые могут открывать тикеты, но не могут читать или отвечать на тикеты других.",
    "organisation_operator_desc"    => "Добавьте существующих пользователей в эту организацию, нажав кнопку # Добавить пользователя # и выполнив поиск по их имени. Обратите внимание, что добавление пользователя удалит все ссылки, которые у него есть, с другой организацией.",
    "organisation_user_desc"        => "<strong>Менеджер</strong> - Может управлять другими пользователями и просматривать и отвечать на тикеты других пользователей.<br /> < strong>пользователь< / strong> - может открывать тикеты только от имени организации и отвечать на собственные тикеты.",
    "send_password_reset"           => "Отправить ссылку для сброса пароля",

    "profile"                       => "Профиль",

    "login"                         => "Авторизоваться",
    "remember_me"                   => "Запомнить меня",
    "logout"                        => "Выйти",
    "return_to_login"               => "Вернуться к входу",

    "user_register_disabled"        => "Извините, публичная регистрация пользователей в настоящее время отключена.",
    "success_register"              => "Аккаунт успешно зарегистрирован!",
    "register_now"                  => "Зарегистрируйтесь сейчас",
    "register"                      => "Регистрация",
    "register_account"              => "Регистрация аккаунта",
    "signed_up"                     => "Подписаться",
    "last_active"                   => "Последнее посещение",

    "forgot_password"               => "Забыли пароль?",
    "reset_password"                => "Сброс пароля",
    "set_password"                  => "Установить пароль",
    "please_set_password"           => "Пожалуйста, установите новый пароль ниже.",
    "missing_email_or_reset"        => "Отсутствует адрес электронной почты или маркер сброса.",

    "firstname"                     => "Имя",
    "lastname"                      => "Фамилия",
    "formatted_name"                => "Форматированное имя",
    "country"                       => "Страна",
    "avatar"                        => "Аватар",
    "confirm_password"              => "Подтвердить пароль",

    "group"                         => "Группа пользователей | Группы пользователей",
    "group_members"                 => "Участники группы",
    "operator_group"                => "Группа операторов | Группы операторов",
    "add_group"                     => "Добавить в группу",

    "customfield"                   => "Пользовательское поле пользователя | Пользовательские поля пользователя",
    "customfield_order"             => "Перетащите строки, чтобы изменить порядок отображения пользовательских полей.",

    "role"                          => "Роль | Роли",

    "operator_login_log"            => "Журнал входа оператора",
    "system_activity_log"           => "Журнал активности системы",
    "activity_log"                  => "Журнал активности",

    "mass_email"                    => "Отправить массовое электронное письмо",
    "send_email"                    => "Отправить письмо",
    "choose_template"               => "Выбрать шаблон ...",

    "ldap_account"                  => "Учетная запись LDAP | Учетные записи LDAP",
    "ldap_operator_desc"            => "Поиск существующего оператора или создание нового.",
    "ldap_server"                   => "Сервер LDAP",
    "ldap_server_desc"              => "Имя хоста сервера. Кроме того, вы можете указать полный URI LDAP. Например: ldaps: //ldap.server: 1234 / подключится через SSL к порту 1234.",
    "ldap_username"                 => "Имя пользователя LDAP",
    "ldap_username_desc"            => "Имя пользователя, которое оператор будет использовать для входа в службу поддержки (их имя пользователя LDAP.)",
    "ldap_rdn"                      => "LDAP RDN или DN",
    "ldap_rdn_desc"                 => "Отличительное имя для имени пользователя LDAP, например: cn = образец пользователя, ou = people, dc = пример, dc = com",
    "ldap_details"                  => "Детали LDAP",

    "operator_details"              => "Подробности оператора",

    "email_notifications"           => "Уведомления по электронной почте",
    "email_notifications_desc"      => "Уведомления по электронной почте, которые будут получены из системы.",

    "enable_ldap"                   => "Включить вход в LDAP",
    "enable_ldap_desc"              => "Если вы используете LDAP, вы можете включить его для входа оператора. После включения перейдите на страницу настроек учетных записей LDAP, чтобы настроить его.",
    "user_reg_enabled"              => "Регистрация пользователя включена",
    "user_reg_enabled_desc"         => "Разрешить новым пользователям регистрировать учетную запись в веб-интерфейсе.",
    "user_reg_captcha"              => "Регистрация пользователя",
    "user_reg_captcha_desc"         => "Если капча должна быть показана для регистрации новых пользователей.",
    "user_name_format"              => "Формат имени",
    "first_last"                    => "первый последний ",
    "last_first"                    => "последний первый",
    "first_l"                       => "Первый Л.",
    "f_last"                        => "F. последний",
    "password_length"               => "Длина пароля",
    "password_length_desc"          => "Минимальная длина в символах для пароля при регистрации или обновлении учетной записи.",
    "password_strength"             => "Надежность пароля",
    "password_strength_desc"        => "Выберите, какие символы требуются при регистрации пароля пользователя.",
    "password_str_must_contain"     => "Должен содержать:",
    "password_str_letters"          => "Хотя бы один буквенный символ.",
    "password_str_digits"           => "Хотя бы одна цифра.",
    "password_str_case"             => "Прописные и строчные буквы.",
    "password_str_symbols"          => "Хотя бы один символ.",

    "load_template"                 => "Загрузить шаблон",
    "load_template_desc"            => "Выбор шаблона заменит текущую тему письма и сообщение.",
    "clear_template"                => "Очистить шаблон",

    "personal_settings"             => "Личные настройки",
    "personal_settings_desc"        => "Обновите свой профиль и измените настройки, относящиеся только к вашей учетной записи оператора.",
    "two_fa"                        => "Двухфакторная аутентификация",
    "notifications"                 => "Уведомления",
    "two_fa_success_disabled"       => "Двухфакторная аутентификация успешно отключена.",
    "two_fa_success_enabled"        => "Двухфакторная аутентификация успешно включена.",
    "two_fa_incorrect"              => "Код был неверный, убедитесь, что введенный код правильный и время сервера синхронизировано.",
    "two_fa_enabled"                => "2FA включен",
    "two_fa_disable"                => "Чтобы отключить 2FA, проверьте ниже.",
    "two_fa_enable"                 => "Чтобы включить 2FA, настройте учетную запись на своем телефоне, используя приведенные ниже данные, и подтвердите.",
    "verify_code"                   => "Код подтверждения",
    "verify_and_disable"            => "Подтвердить и отключить",
    "verify_and_enable"             => "Проверить и включить",
    "verify_code_desc"              => "Введите действительный код для вашей учетной записи 2FA, чтобы отключить аутентификацию 2FA.",
    "qr_code"                       => "QR код",
    "two_fa_code"                   => "Код 2FA",
    "two_fa_secret"                 => "Секретный ключ 2FA",
    "two_fa_secret_desc"            => "Пожалуйста, сохраните это где-нибудь в безопасности, так как оно понадобится вам для повторного добавления учетной записи в аутентификатор, в случае утери телефона или проблем с аутентификатором.",
    "display_notifications"         => "Показать уведомления",
    "desktop_notifications"         => "ПК уведомления",
    "browser_notifications"         => "Уведомления браузера",

    "search_for_user"               => "Поиск пользователя ...",
    "select_operator"               => "Выбрать оператора ...",
    "select_group"                  => "Выбрать группу ...",

    "your_ip_has_been_banned"       => "Ваш IP заблокирован.",
    "password_reset_success"        => "Пароль успешно сброшен!",

    "simpleauth_token_expired"      => "Токен доступа истек.",
    "simpleauth_token_invalid"      => "Предоставленный токен доступа недействителен.",
    "simpleauth_invalid_guard"      => "Невозможно войти как не действительный пользователь.",
    "simpleauth_not_allowed"        => "Операторы в настоящее время не могут войти в систему с SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "История электронной почты",
    "view_email"                    => "Просмотр электронной почты",

    "ban_after_count"               => "Забанить IP после неудачного входа в систему",
    "ban_after_count_user"          => "Количество неудачных входов в систему, после которых пользовательские IP-адреса забанены, и они больше не могут входить в веб-интерфейс в течение настроенного периода времени. Установка 0 полностью отключит IP-запреты.",
    "ban_after_count_operator"      => "Количество неудачных входов в систему, после которых пользовательский IP забанен, и они больше не могут входить в панель оператора или API в течение настроенного периода времени. Установка 0 полностью отключит IP-запреты.",
    "ban_length"                    => "Время IP-бана",
    "ban_length_desc"               => "Длина запрета IP, когда они достигают настроенного количества неудачных входов в систему за один день.",
    "n_failed_logins"               => " :count  неудачные входы в течение 24 часов",

    /*
     * 2.0.3
     */
    "taking_a_break"                => " Делать перерыв ... ",
    "operator_session_expired"      => "Некоторое время вы были неактивны или вошли в систему на другом устройстве, поэтому я вздремнул. Пожалуйста, разбудите меня, выполнив вход снова.",
    "log_back_in"                   => "Вход в систему",
    "all_users"                     => "Все пользователи",
    "all_operators"                 => "Все операторы",
    "email_per_batch"               => "Письма в пакете",
    "email_per_batch_desc"          => "Количество электронных писем, которые отправляются одновременно.",
    "batch_interval"                => "Пакетный интервал",
    "batch_interval_desc"           => "Разрыв между пакетами электронной почты в минутах. Минимальная 1 минута.",
    "select_user_groups"            => "Выберите группы пользователей / операторов или введите адреса электронной почты ...",
    "mass_email_sending_time"       => "Это займет примерно: время, чтобы отправить все электронные письма.",
    "organisations_enabled"         => "Организации включены",
    "organisations_enabled_desc"    => "По умолчанию пользователи могут добавлять организацию в свой профиль и добавлять других пользователей в эту организацию. Если вы работаете только с потребителями, вы можете отключить параметр организации и скрыть его от интерфейса.",
    "manager_notifications"         => "Уведомления менеджера организации",
    "manager_notifications_desc"    => "Если менеджеры организаций должны получать по электронной почте обновления заявок, открытых другими пользователями в организации по умолчанию. У каждого менеджера будет свой персональный параметр для этого в своем профиле, и он может переопределить этот параметр.",
    "manager_email_notifications_desc" => "Если они должны получать по электронной почте уведомления об обновлениях тикетов, открытых другими пользователями в организации.",
    "organisation_notifications_desc" => "Если вы хотите получать по электронной почте уведомления об обновлениях тикетов, открытых другими пользователями в вашей организации.",
    "select_operator_group_desc"    => "Пожалуйста, выберите хотя бы одну группу операторов для этого оператора.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Пользовательское поле организации | Пользовательские поля организации",
    "recent_users"                  => "Последние пользователи",
    "recent_organisations"          => "Последние организации",
    "group_brand_desc"              => "Выберите, к каким брендам операторы в этой группе имеют доступ.",
    "select_operators"              => "Выбрать оператор (ы) ...",
    "select_groups"                 => "Выбрать группу (ы) ...",
    "group_department_desc"         => "Назначить всех членов этой группы в отделы, операторы также могут быть назначены индивидуально в настройках отдела.",
    "op_settings_group_dept"        => "Назначено через группы операторов:",
    "op_settings_group_dept_desc"   => "Эти отделы наследуются автоматически от выбранных выше групп операторов. Чтобы назначить через группу операторов, измените настройки группы операторов или отдела.",
    "op_settings_individual_dept"   => "Назначено индивидуально:",
    "op_settings_individual_dept_desc" => "Эти отделы в дополнение к любым отделам, на которые оператор назначен через свои группы выше.",
    "also_registered_other_brand"   => "Этот пользователь также зарегистрирован в :brands бренде. | Этот пользователь также зарегистрирован в :brands брендах.",
    "view_organisation"             => "Просмотреть организацию",
    "new_owner"                     => "Новый владелец",
    "operator_role"                 => "Роль оператора | Роли оператора",
    "manage_users"                  => "Управление пользователями",
    "manage_organisations"          => "Управление организациями",
    "manage_operators"              => "Управление операторами",
    "user_profile"                  => "Профиль пользователя",
    "organisation_access_level"     => "Уровень доступа организации",
    "organisation_notifications"    => "Уведомления организации",
    "organisation_users"            => "Пользователи организации",
    "organisation_users_ticket"     => "Выше приведен список менеджеров вашей организации, которые также будут получать по электронной почте обновления об этом тикете.",

    /*
     * 2.1.1
     */
    "change_password"               => "Изменить пароль",
    "current_password"              => "Текущий пароль",
    "new_password"                  => "Новый пароль",
    "personal_confirm_password"     => "Пожалуйста, подтвердите свой текущий пароль, чтобы установить новый пароль.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Поиск пользователя / оператора ...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Формат, используемый для отображения имен пользователей во всей системе.",
    "operator_name_format_desc"     => "Формат, используемый для отображения имен операторов во всей системе.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Удалить из :record?",
    "remove_from_warn"              => "Это навсегда удалит <strong>:name</strong> пользователя из :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Вход через соц. сети ",
    "login_via"                     => "Войти через :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Пожалуйста, войдите, чтобы завершить привязку вашей социальной учетной записи.",
    "social_linking_register"       => "Пожалуйста, заполните детали ниже, чтобы завершить регистрацию вашей учетной записи. Ваш социальный аккаунт будет автоматически связан.",
    "already_registered"            => "Уже зарегистрирован?",
    "linked_accounts"               => "Связанные аккаунты",
    "unlink_account"                => "Отвязать :record аккаунт ",
    "unlink_account_warning"        => "Отключение социальной учетной записи будет означать, что ее больше нельзя использовать для входа непосредственно в учетную запись.",
    "failed_login"                  => "Неудачный вход в систему | Неудачные входы в систему",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "должны быть \":permission\" разрешение",
    "deleted_user"                  => "Удаленный пользователь",
    "access_level_not_owner"        => "Невозможно изменить уровень доступа владельцев организации. Сначала передайте право собственности на организацию другому пользователю, просмотрев организацию и нажав вкладку # Пользователи #. ",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Выберите существующую или введите новую организацию ...",

    /*
     * 2.5.0
     */
    "success_register_desc"         => "Спасибо за регистрацию учетной записи. Проверьте свою электронную почту, чтобы завершить настройку учетной записи.",
    "use_gravatar"                  => "Использовать Gravatar",
    "use_gravatar_desc"             => "Gravatar - это сервис, который предлагает глобально признанный аватар для своих зарегистрированных пользователей. Служба поддержки автоматически отправит запрос на secure.gravatar.com с хешем MD5 каждого адреса электронной почты пользователя для помощи в отображении аватара . Хеш MD5 также может быть публично видим в HTML-интерфейсе. Мы рекомендуем обновить вашу политику конфиденциальности, если эта функция включена. ",

    /*
     * 2.6.0
     */
    "continue_to_login"             => "Пожалуйста, продолжите <a href=':route'> вход на этой странице </a>.",
    "reset_request_desc"            => "Если соответствующая учетная запись была найдена, в ближайшее время вам будет отправлено электронное письмо, позволяющее вам сбросить пароль.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Account is linked to an LDAP service. Please log in using your LDAP username and password.",
    "operator_message"              => "Operator Messages",
    "force_two_fa"                  => "Force 2FA",
    "force_two_fa_desc"             => "Force two-factor authentication (2FA) on all accounts. Any account without 2FA enabled will be taken through the steps to set it up when they next login.",
    "two_fa_required"               => "Two-factor authentication (2FA) is required. Please follow the information below to proceed.",
    "two_fa_user_enable"            => "The user can enable 2FA on their account in their settings.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Allow users to register and log in using their social account.",
    "manage_social_login_options"   => "To add or manage social login options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "two_fa_successfully_enabled"   => "Two-factor authentication (2FA) has been successfully enabled.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Phone Number|Phone Numbers",

    /*
     * 3.6.0
     */
    "security_settings"             => "Security Settings",
    "security_settings_desc"        => "Update your password, enable 2FA and manage other security related settings for your account.",
    "active_sessions"               => "Active Sessions",
    "active_sessions_desc"          => "This is a list of devices that have logged into your account, you may revoke any sessions that you do not recognise.",
    "current_session"               => "Current Session",
    "logged_in"                     => "Logged In",
    "revoke_session_desc"           => "Revoking a session will log the device out of the operator panel. It will also revoke all remember me tokens for other devices.",

    /*
     * 4.0.0
     */
    "verify_phone_number"           => "Verify Phone Number",
    "verify_phone_method"           => "Select the method you wish to verify your phone number.",
    "verify_phone_code_sent"        => "A verification code has been sent to your phone number, please enter this code below.",
    "verify_phone_code_send_error"  => "An error occurred while sending the verification code. Please try again later.",
    "verify_phone_code_error"       => "Code could not be verified.",
    "logged_in_as"                  => "Logged in as :name",

    /*
     * 4.1.0
     */
    "merge_users"                   => "Merge Users",
    "merge_user_into"               => "Select user to merge into",
    "merge_organisations"           => "Merge Organisations",
    "merge_organisation_into"       => "Select organisation to merge into",
    "search_for_organisation"       => "Search for organisation...",

    /*
     * 4.2.0
     */
    "reply_template"                => "Reply Template|Reply Templates",
    "reply_template_desc"           => "Set a personal reply template that prefills the textarea when starting to compose a reply, with the option to customise based on the brand/department of the ticket. The default reply template is used when a reply template for a specific department and/or brand cannot be found.",
    "operator_reply_template"       => "Operator Reply Template|Operator Reply Templates",
    "ticket_reply_template_desc"    => "Set the operator's default ticket reply template.",
    "operator_reply_template_desc"  => "Further reply templates for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Reply Templates</a> section.",

    /*
     * 5.0.0
     */
    "verified"                      => "Verified",
    "unverified"                    => "Unverified",
    "unverified_email_desc"         => "User has not verified ownership of this email address.",
    "unverified_account"            => "Please check your email to verify ownership of this email address.",
    "changing_email_desc"           => "Изменение адреса электронной почты потребует от пользователя подтверждения права собственности на свой адрес электронной почты при следующем входе в систему.",
    "unregistered_user_desc"        => "Эта учетная запись была создана автоматически без пароля. Вы можете отправить электронное письмо с подтверждением, чтобы они могли создать собственную учетную запись или установить пароль для них ниже.",
    "send_verification_email"       => "Send Verification Email",
    "mark_as_verified"              => "Mark as Verified",
    "password_reset_already"        => "Вы уже подтвердили право собственности на этот адрес электронной почты, вы можете перейти к входу в систему.",
    "verification_email_resent"     => "A new verification email has been sent and should arrive in a few minutes.",
    "verified_set_password_desc"    => "Thank you for verifying ownership of your email, please enter a password below to finish your account set up.",
    "thank_you_for_verifying_email" => "Thank you for verifying ownership of your email address.",
    "organisation_domain_desc"      => "Введите каждый домен, принадлежащий организации. Пользователи, которые зарегистрируются с адресом электронной почты, который принадлежит одному из этих доменов, будут автоматически добавлены в организацию. Мы рекомендуем убедиться, что пользователь действительно является частью организации, если он имеет не подтверждено право собственности на их адрес электронной почты. ",
    "resend_verification_email"     => "Resend Verification Email",
    "updating_email_address"        => "Чтобы обновить адрес электронной почты, нажмите на ссылку, отправленную на :email подтвердить право собственности на новый адрес электронной почты.",
    "email_verification"            => "Email Verification",
    "email_verification_already_in_use" => "The email address is already in use by another account.",
    "verification_link_expired"     => "The verification link may have expired. If your link isn't working for any reason, please request a new one.",
    "user_invited_to_organisation"  => "The user has been invited to the organisation by email, they must click the link and set up a password to complete their account setup.",
    "invite_user"                   => "Invite User",
    "organisation_invite_user"      => "Invite user to organisation",
    "user_already_in_organisation"  => "The user is already part of an organisation.",
    "invitations"                   => "Invitation|Invitations",
    "invite_exists"                 => "The user has already been invited.",
    "success_join"                  => "You are now a member of the organisation :name.",
    "error_join"                    => "The invitation code could not be found, or has expired.",
    "verify_to_view_tickets"        => "Please verify all additional email addresses or remove unverified email addresses under your account profile.",

    /*
     * 5.2.3
     */
    "display_notifications_desc"    => "Система уведомит вас, когда будут созданы новые заявки или ответы, или когда другие операторы войдут в систему. Вы можете выбрать между уведомлениями на рабочем столе или уведомлениями в браузере, либо полностью отключитьо их.",

    /*
     * 5.3.0
     */
    "email_verified"                => "Email Verified",
    "registered_desc"               => "If the user has a password set and is able to login to the frontend.",
    "new_operator_account_desc"     => "You can send a verification email to let the operator set up their own account or toggle to set a password for them below.",
    "operator_set_password_desc"    => "Please enter a password below to finish setting up your operator account.",
    "password_set_success"          => "Password set successfully!",

);
