<?php

return array(

    // Standard messages
    "item_created"                      => "Создано новое :item :rel.",
    "item_updated"                      => "Обновленный :item :rel.",
    "item_deleted"                      => "Удаленный :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Создан новый запрет на IP :rel.",
    "ip_ban_updated"                    => "Обновленный запрет на IP :rel.",
    "ip_ban_deleted"                    => "Удален запрет на IP :rel.",
    "banned_ip_on_login"                => "Запрещенный IP :rel в течение 15 минут.",

    "ip_whitelist_created"              => "Добавлен IP :rel в белый список.",
    "ip_whitelist_updated"              => "Обновлен IP :rel включен белый список.",
    "ip_whitelist_deleted"              => "Удаленный IP :rel из белого списка.",

    "system_cleanup"                    => "Запустил очистку системы на :rel.",

    "api_failed_login"                  => "IP :rel не удалось пройти проверку подлинности в API.",

    "user_successful_login"             => "Вошел в службу.",
    "user_failed_login"                 => "Не удалось пройти проверку подлинности.",
    "user_successful_logout"            => "Вышел из службы поддержки.",

    "user_registered"                   => "Зарегистрировал учетную запись.",
    "user_confirmed"                    => "Подтвердил аккаунт.",
    "user_password_set"                 => "Установите пароль для своей учетной записи.",
    "user_password_reset"               => "Сбросил пароль для своей учетной записи.",

    "user_added_to_organisation"        => "Пользователь :rel добавлен в организацию :new_value.",
    "user_removed_from_organisation"    => "Пользователь :rel удален из организации :old_value.",
    "user_profile_updated"              => "Обновлен профиль учетной записи.",
    "user_left_organisation"            => "Другие организации :rel.",
    "user_organisation_emptied"         => "Удалены все пользователи из организации :rel.",
    "user_organisation_updated"         => ":rel's уровень доступа организации изменился с :old_value до :new_value.",
    "organisation_membership_updated"   => "Обновление членства в организации :rel.",
    "organisation_profile_updated"      => "Обновленный профиль организации :rel.",
    "organisation_owner_updated"        => "Переданных организацией :rel право собственности на :new_value.",

    "mass_email_queued"                 => "Поставленный в очередь :new_value электронные письма в пакетах для отправки.",
    "mass_email_sent"                   => "Отправил :new_value emails в очередях.",

    "email_queue_deleted"               => "Удаленное письмо из очереди на адрес :rel.",

    "scheduled_task_run"                => "Запланированное задание :rel был запущен вручную.",

    "selfservice_article_upvoted"       => "Положительную оценку статьи :rel.",
    "selfservice_article_downvoted"     => "Статья с отрицательной оценкой :rel.",
    "selfservice_comment_posted"        => "Выложил новый :rel.",
    "selfservice_comment_upvoted"       => "Голосуют :rel рейтинг от :old_value к :new_value.",
    "selfservice_comment_downvoted"     => "Голосовали против :rel рейтинг от :old_value к :new_value.",

    "ticket_opened"                     => "Открылся новый тикет #:rel.",
    "ticket_opened_on_behalf"           => "Открылся новый тикет #:rel от имени :new_value.",
    "ticket_opened_email"               => "Импортированная электронная почта как новый тикет #:rel.",

    "ticket_message_reply"              => "Опубликовал новый ответ на тикет #:rel.",
    "ticket_message_note"               => "Выложил новую заметку в тикет #:rel.",
    "ticket_message_deleted"            => "Удалено сообщение в тикете #:rel.",

    "ticket_user_updated"               => "Обновлено имя пользователя в тикете #:rel с :old_value на :new_value.",
    "ticket_subject_updated"            => "Обновлена тема по тикету #:rel.",
    "ticket_department_updated"         => "Обновлен отдел по продаже тикетов #:rel from :old_value to :new_value.",
    "ticket_status_updated"             => "Обновил статус на тикет #:rel с :old_value на :new_value.",
    "ticket_priority_updated"           => "Обновлен приоритет по тикету #:rel с :old_value на :new_value.",
    "ticket_tag_added"                  => "Добавлен тег :new_value к #:rel.",
    "ticket_tag_updated"                => "Обновленные теги на тикете #:rel.",
    "ticket_tag_removed"                => "Удален тег :new_value из тикета #:rel.",
    "ticket_slaplan_updated"            => "Обновлен план SLA по тикету #:rel с :old_value до :new_value.",
    "ticket_duetime_updated"            => "Обновлено время по тикету #:rel до :new_value.",
    "ticket_customfield_updated"        => "Обновленные пользовательские поля в тикете #:rel.",
    "ticket_converted_user"             => "Конвертированный внутренний тикет #:rel к пользовательскому тикету.",
    "ticket_converted_internal"         => "Преобразованный пользовательский тикет #:rel к внутреннему тикету.",

    "ticket_assigned_operator"          => "Назначенный :new_value к тикету #:rel.",
    "ticket_unassigned_operator"        => "Неназначенный :new_value из тикета #:rel.",
    "ticket_assigned_self"              => "Назначенный самостоятельно тикет #:rel.",
    "ticket_assigned_updated"           => "Обновленные назначенные операторы по тикету #:rel.",

    "ticket_locked"                     => "Заблокированный тикет #:rel.",
    "ticket_unlocked"                   => "Разблокированный тикет #:rel.",
    "ticket_locked_reply"               => "Ответ не может быть добавлен к заблокированному тикету #:rel.",

    "ticket_unmerged"                   => "Тикет :rel has been unmerged.",

    "ticket_user_blocked"               => "Заблокированный email :new_value (от пользователя по тикету #:rel).",

    "ticket_closed"                     => "Тикет #:rel был закрытый.",
    "ticket_inactive_closed"            => "Закрытый неактивный тикет #:rel от статуса :old_value.",
    "ticket_awaiting_response"          => "Отправлено ожидание ответа по электронной почте пользователю на тикете #:rel.",

    "ticket_split_from"                 => "Сообщения отделились от старого тикета #:rel к новому тикету #:new_value.",
    "ticket_split_to"                   => "Сообщения разделяются от старого тикета #:old_value к новому тикету #:rel.",

    "ticket_attachment_saved"           => "Добавлено приложение к тикету #:rel.",
    "ticket_attachment_deleted"         => "Удаленное вложение из тикета #:rel.",

    "ticket_throttled"                  => "Отклонен новый тикет от :rel из за спама. ",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Добавлено приложение ':new_value' к тикету ID :rel.",
    "selfservice_attachment_deleted"    => "Удалить вложение ':new_value' от тикета к тикету ID :rel.",
    "ticket_unassigned_self"            => "Неназначенные от тикета #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Ответ не может быть добавлен из-за того, что тикет принадлежит бренду с ограниченными возможностями #:rel.",
    "personal_signatures_updated"       => "Обновленные личные подписи.",
    "check_email_failed"                => "Ошибка: не удалось загрузить электронную почту из учетной записи :old_value: ':rel'.",
    "invalid_department_brand"          => "Не удалось установить отдел на ':new_value' на тикет #:rel, отдел не принадлежит к марке тикетов.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Отправлено письмо с темой письма ':extra_rel1' на :rel.",
    "sent_template_email_to"            => "Отправлено ':extra_rel1' email на :rel.",
    "sent_ticket_email_to_user"         => "Отправлено ':extra_rel1' email пользователю для получения тикета #:rel.",
    "sent_email_to_operators"           => "Отправлено ':extra_rel1' email для операторов.",
    "sent_ticket_email_to_operators"    => "Отправлено ':extra_rel1' email для оператораторов по тикету #:rel.",
    "sent_email_to_operator_group"      => "Отправлено ':extra_rel1' электронная почта в группу операторов ':new_value' для тикета #:rel.",
    "ticket_macro_applied"              => "Макрос ':new_value' переведен на тикет #:rel.",
    "ticket_macro_automatic"            => "Макрос ':new_value' автоматически запускается на тикете #:rel.",
    "email_template_not_found"          => "Email шаблон ID ':new_value' не найден, Прервана отправка электронной почты.",
    "private_conversation_started"      => "Начался разговор с :rel.",
    "private_message_sent"              => "Отправил сообщение :rel.",
    "not_imported_replies_disabled"     => "email :extra_rel1 был получен за тикет #:rel, но не был импортирован, так как ответы на электронную почту тикетов отключены.",
    "not_imported_ticket_locked"        => "email :extra_rel1 был получен для тикета #:rel , но не был импортирован, так как тикет заблокирован.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Пользователь добавлен в группу пользователей  :new_value.",
    "ticket_user_removed_from_group"    => "Пользователь удален из группы пользователей  :old_value.",
    "email_on_behalf"                   => "Пересылаются :extra_rel2 от имени ':extra_rel1' в тикете #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Отправлено ':extra_rel1' email на :new_value, департамент не принимает электронные письма от незарегистрированных пользователей.",
    "deleted_user"                      => "Удаленный :item ':rel' с email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Связанный тикет #:rel с тикетами :extra_rel1.",
    "unlinked_ticket"                   => "Несвязанный тикет #:rel из тикета :extra_rel1.",
    "email_queue_attachment_deleted"    => "Удалено вложение ':old_value' из очереди email ':rel'.",
    "forward_ticket_email"              => "Переадресованный тикет #:rel для третьих лиц, просмотр ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Обновленный :rel для :extra_rel1.",
    "selfservice_comment_status"        => "Измененный статус объекта :rel для :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Удалил комментарий :extra_rel1.",
    "ticket_message_posted"             => "Выложил новый :extra_rel1 к #:rel.",
    "ticket_message_edited"             => "Отредактировано :extra_rel1 в #:rel.",
    "email_send_failed"                 => "Не удалось отправить электронное письмо.",
    "ticket_brand_updated"              => "Обновленный бренд по продаже тикетов #:rel с :old_value на :new_value.",
    "export_scheduled"                  => "Экспорт пользователя :rel был запланирован заранее.",
    "deleted_inactive_records"          => "Автоматически удалять :old_value неактивный :rel.",
    "deleted_old_records"               => "Автоматически удаляются старые :rel записи.",
    "sent_email_to_user_group"          => "Электронная почта в очереди для группы пользователей ':new_value' на тикеты #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Наблюдаю за тикетом #:rel.",
    "ticket_unwatching"                 => "Больше не смотрю тикет #:rel.",
    "ticket_watch_operator"             => "Установил :new_value чтобы посмотреть тикет #:rel.",
    "ticket_unwatch_operator"           => "Убрал :new_value от просмотра тикета #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Подтвержденное право собственности на адрес электронной почты от имени пользователя :rel.",
    "ticket_department_email_updated"   => "Обновлена электронная почта отдела по тикетам #:rel с :old_value на :new_value.",
    "ticket_watching_updated"           => "Обновлено наблюдение операторов за тикетом #:rel.",
    "ticket_deleted"                    => "Безвозвратно удаленный тикет ':old_value' (#:rel).",
    "ticket_trashed"                    => "Тикет #:rel удален.",
    "ticket_restored"                   => "Восстановленный #:rel из корзины.",
    "emptied_ticket_trash"              => "Автоматически очищенный мусор тикета ':old_value' записи.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "На тикете было установлено новое наблюдение #:rel.",
    "ticket_followup_updated"           => "Была обновлена последующая информация по тикету #:rel.",
    "ticket_followup_deleted"           => "Последующая информация по тикету #:rel была удалена.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "User :old_value merged into user :rel.",
    "user_organisation_merged"          => "User organisation :old_value merged into user organisation :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Updated :rel's reply templates.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Activated :item (add-on) :rel.",
    "addon_deactivated"                 => "Deactivated :item (add-on) :rel.",
    "addon_installed"                   => "Installed :item (add-on) :rel.",
    "addon_uninstalled"                 => "Uninstalled :item (add-on) :rel.",
    "addon_cancelled"                   => "Cancelled :item (add-on) :rel.",
    "addon_updated"                     => "Updated :item (add-on) :rel to version :new_value.",
    "ticket_reply_duetime_updated"      => "Updated the reply due time on ticket #:rel to :new_value.",
    "ticket_resolve_duetime_updated"    => "Updated the resolve due time on ticket #:rel to :new_value.",
    "ticket_duetime_unset"              => "Сбросить время в тикете #:rel.",
    "ticket_reply_duetime_unset"        => "Unset the reply due time on ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Unset the resolve due time on ticket #:rel.",
    "ticket_duetime_paused"             => "Остановил положенное время на тикете #:rel до следующего ответа пользователя.",
    "ticket_duetime_unpaused"           => "Unpaused the due times on ticket #:rel.",
    "user_email_verified"               => "Verified their email address.",
    "marked_email_as_verified"          => "Verified ownership of email address on behalf of user :rel.",
    "user_invited_to_organisation"      => "User :rel invited to organisation :extra_rel1.",
    "user_accepted_organisation_invite" => "User :rel accepted invitation to organisation :extra_rel1.",
    "user_additional_email_verified"    => "Verified an additional email address (:new_value).",
    "export_generated"                  => "Экспорт :new_value от пользователя :rel был сгенерирован и сохранен в системе.",
    "export_deleted"                    => "Экспорт :old_value от пользователя :rel был удален из системы.",
    "user_export_generated"             => "Export :new_value of user :rel has been generated and stored on the system.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Updated their reply templates.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Deleted attachment ':old_value' from ticket #:rel.",
    "user_added_to_group"               => "User :rel added to user group :new_value.",
    "user_removed_from_group"           => "User :rel removed from user group :old_value.",
    "operator_added_to_group"           => "Operator :rel added to operator group :new_value.",
    "operator_removed_from_group"       => "Operator :rel removed from operator group :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Deleted background job :rel.",
    "background_job_retried"            => "Retried background job :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Set a password for their account.",
    "password_reset_sent"               => "Reset password link sent to :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Rated ticket #:rel as :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Saved :extra_rel1 on ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Saved :extra_rel1 on article :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => "Pinned :extra_rel1 on ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => "Unpinned :extra_rel1 on ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Updated :rel's notification preferences.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => "Тикет(ы) :new_value слились в тикет #:rel.",
    "ticket_added_cc"                   => "Email(s) :new_value добавлено в список адресов CC для тикета #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value удален из списка CC обращаются за тикет #:rel.",
    "ticket_slaplan_set"  => "Updated the SLA plan on ticket #:rel from None to :new_value.",
    "ticket_slaplan_removed"  => "Updated the SLA plan on ticket #:rel from :old_value to None.",
    "sent_feedback_email_to_operators"  => "Sent feedback received email to operators for ticket #:rel.",
    "ticket_added_cc_multiple"          => "Added :cc_emails to CC address list for ticket #:rel.",
    "timeline_ticket_added_cc_multiple" => ":user_name added CC :cc_emails",
    "ticket_removed_cc_multiple"        => "Removed :cc_emails from CC address list for #:rel.",
    "timeline_ticket_removed_cc_multiple" => ":user_name removed CC :cc_emails",
    "ticket_assigned_operators_multiple" => "Assigned :operators to ticket #:rel.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name assigned :operators",
    "ticket_unassigned_operators_multiple" => "Unassigned :operators from ticket #:rel.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name unassigned :operators",
    "ticket_watch_operator_multiple"    => "Set :operators to watch ticket #:rel.",
    "timeline_ticket_watch_operator_multiple" => ":user_name added :operators to watching",
    "ticket_unwatch_operator_multiple"  => "Unset :operators from watching ticket #:rel.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name stopped :operators from watching",
    "ticket_tag_added_single"           => "Added tag :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_single"  => ":user_name added tag :formatted_items",
    "ticket_tag_removed_single"         => "Removed tag :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_single" => ":user_name removed tag :formatted_items",
    "ticket_tag_added_multiple"         => "Added tags :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_multiple" => ":user_name added :formatted_items tags",
    "ticket_tag_removed_multiple"       => "Removed tags :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_multiple" => ":user_name removed :formatted_items tags",
    "ticket_merged_multiple"            => "Merged :ticket_numbers into ticket #:rel.",
    "timeline_ticket_merged_multiple"   => ":user_name merged :ticket_numbers into this ticket",
    "linked_tickets_multiple"           => "Linked ticket #:rel with tickets :extra_rel*.",
    "timeline_linked_tickets_multiple"  => ":user_name linked with :extra_rel*",
    "unlinked_tickets_multiple"         => "Unlinked ticket #:rel from tickets :extra_rel*.",
    "timeline_unlinked_tickets_multiple" => ":user_name unlinked tickets :extra_rel*",
    "ticket_macro_automatic_multiple"   => "The macros :macros automatically ran on ticket #:rel.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name ran macros :macros",
    "ticket_customfield_updated_individual" => "Updated custom field ':field_name' on ticket #:rel.",
    "timeline_ticket_customfield_updated_individual" => ":user_name updated custom field ':field_name'",
    "timeline_ticket_opened_on_behalf"  => ":user_name opened ticket on behalf of :new_value",
    "timeline_ticket_message_deleted"   => ":user_name deleted message (:message_id) by :message_user_name",
    "timeline_ticket_user_updated"      => ":user_name changed the user from :old_value to :new_value",
    "timeline_ticket_subject_updated"   => ":user_name updated the subject <del>:old_value</del> :new_value",
    "timeline_ticket_department_updated" => ":user_name changed the department from :old_value to :new_value",
    "timeline_ticket_status_updated"    => ":user_name changed the status from :old_value to :new_value",
    "timeline_ticket_priority_updated"  => ":user_name changed the priority from :old_value to :new_value",
    "timeline_ticket_slaplan_updated"   => ":user_name changed the SLA plan from :old_value to :new_value",
    "timeline_ticket_slaplan_set"       => ":user_name set the SLA plan to :new_value.",
    "timeline_ticket_slaplan_removed"   => ":user_name removed the SLA plan (from :old_value).",
    "timeline_ticket_converted_user"    => ":user_name converted from internal ticket to user ticket",
    "timeline_ticket_converted_internal" => ":user_name converted from user ticket to internal ticket",
    "timeline_ticket_assigned_self"     => ":user_name self-assigned",
    "timeline_ticket_locked"            => ":user_name locked the ticket",
    "timeline_ticket_unlocked"          => ":user_name unlocked the ticket",
    "timeline_ticket_unmerged"          => ":user_name unmerged",
    "timeline_ticket_user_blocked"      => ":user_name blocked email :new_value",
    "timeline_ticket_closed"            => ":user_name closed the ticket",
    "timeline_ticket_inactive_closed"   => ":user_name closed due to inactivity",
    "timeline_ticket_awaiting_response" => ":user_name sent waiting for response email to user",
    "timeline_ticket_split_from"        => ":user_name slit messages into new ticket #:new_value",
    "timeline_ticket_split_to"          => ":user_name split messages from #:old_value",
    "timeline_ticket_attachment_deleted" => ":user_name deleted attachment (:attachment_id) :attachment_name from <a href='#:message_id'>message</a>",
    "timeline_ticket_unassigned_self"   => ":user_name removed their assignment",
    "timeline_ticket_macro_applied"     => ":user_name ran macro ':new_value'",
    "timeline_ticket_macro_automatic"   => ":user_name ran macro ':new_value'",
    "timeline_ticket_message_edited"    => ":user_name edited a :extra_rel1",
    "timeline_ticket_brand_updated"     => ":user_name changed the brand from :old_value to :new_value",
    "timeline_ticket_watching"          => ":user_name started watching the ticket",
    "timeline_ticket_unwatching"        => ":user_name stopped watching the ticket",
    "timeline_ticket_department_email_updated" => ":user_name changed the department email from :old_value to :new_value",
    "timeline_ticket_trashed"           => ":user_name moved to the trash",
    "timeline_ticket_restored"          => ":user_name restored from the trash",
    "timeline_ticket_followup_set"      => ":user_name created a follow up",
    "timeline_ticket_followup_updated"  => ":user_name updated a follow up",
    "timeline_ticket_followup_deleted"  => ":user_name deleted a follow up",
    "timeline_ticket_reply_duetime_updated" => ":user_name changed the reply due time to :new_value",
    "timeline_ticket_resolve_duetime_updated" => ":user_name changed the resolve due time to :new_value",
    "timeline_ticket_reply_duetime_unset" => ":user_name cleared the reply due time",
    "timeline_ticket_resolve_duetime_unset" => ":user_name cleared the resolve due time",
    "timeline_ticket_duetime_paused"    => ":user_name paused the due times",
    "timeline_ticket_duetime_unpaused"  => ":user_name unpaused the due times",
    "timeline_ticket_feedback_rating"   => ":user_name set the feedback rating to :extra_rel1", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name saved :extra_rel1", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name pinned a <a href='#:message_id'>message</a>",
    "timeline_ticket_unpinned_message"  => ":user_name unpinned a <a href='#:message_id'>message</a>",
    "ticket_attachment_rejected"        => "Attachment(s) :files blocked from ticket #:rel due to invalid file type.",
    "timeline_ticket_attachment_rejected" => "Attachment(s) :files blocked due to invalid file type",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);
