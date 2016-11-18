<?php
/**
 * This file is a part of the CIDRAM package, and can be downloaded for free
 * from {@link https://github.com/Maikuolan/CIDRAM/ GitHub}.
 *
 * CIDRAM COPYRIGHT 2016 and beyond by Caleb Mazalevskis (Maikuolan).
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: Russian language data for the front-end (last modified: 2016.11.18).
 */

/** Prevents execution from outside of CIDRAM. */
if (!defined('CIDRAM')) {
    die('[CIDRAM] This should not be accessed directly.');
}

$CIDRAM['lang']['bNav_home_logout'] = '<a href="?">Домашняя Страница</a> | <a href="?cidram-page=logout">Выйдите</a>';
$CIDRAM['lang']['bNav_logout'] = '<a href="?cidram-page=logout">Выйдите</a>';
$CIDRAM['lang']['config_general_disable_cli'] = 'Деактивировать ли CLI-модус?';
$CIDRAM['lang']['config_general_disable_frontend'] = 'Деактивировать доступ к фронтенд?';
$CIDRAM['lang']['config_general_emailaddr'] = 'Адрес емайл для поддержки.';
$CIDRAM['lang']['config_general_forbid_on_block'] = 'Какой тип заголовка должен CIDRAM ответить при блокировке запросов?';
$CIDRAM['lang']['config_general_ipaddr'] = 'Место IP-адреса актуального соединения в общем потоке данных (полезно для Cloud-сервиса).';
$CIDRAM['lang']['config_general_lang'] = 'Задаёт CIDRAM стандарт языка.';
$CIDRAM['lang']['config_general_logfile'] = 'Файл разборчивыми для людей, для регистрации всех заблокированных попыток несанкционированного доступа. Задайте имя файлу, или оставьте пустым чтобы деактивировать опцию.';
$CIDRAM['lang']['config_general_logfileApache'] = 'Apache-стиль файл для регистрации всех заблокированных попыток несанкционированного доступа. Задайте имя файлу, или оставьте пустым чтобы деактивировать опцию.';
$CIDRAM['lang']['config_general_logfileSerialized'] = 'Сериализованная файл для регистрации всех заблокированных попыток несанкционированного доступа. Задайте имя файлу, или оставьте пустым чтобы деактивировать опцию.';
$CIDRAM['lang']['config_general_silent_mode'] = 'Должен CIDRAM молча перенаправить заблокированные попытки доступа вместо отображения страницы "Доступ Закрыт"? Если да, указать местоположение для перенаправления блокировал попытки доступа. Если нет, оставить эту переменную пустым.';
$CIDRAM['lang']['config_general_timeOffset'] = 'Смещение часового пояса в минут.';
$CIDRAM['lang']['config_recaptcha_expiry'] = 'Количество часов, чтобы вспомнить инстанция reCAPTCHA.';
$CIDRAM['lang']['config_recaptcha_lockip'] = 'Свяжите reCAPTCHA к IP-адреса?';
$CIDRAM['lang']['config_recaptcha_lockuser'] = 'Свяжите reCAPTCHA к пользователи?';
$CIDRAM['lang']['config_recaptcha_logfile'] = 'Записывать все попытки reCAPTCHA? Если да, указать имя использовать для файла журнала. Если нет, оставьте эту переменную пустым.';
$CIDRAM['lang']['config_recaptcha_secret'] = 'Это значение должно соответствовать "secret key" для вашего reCAPTCHA, которые можно найти в dashboard (панели управления) reCAPTCHA.';
$CIDRAM['lang']['config_recaptcha_sitekey'] = 'Это значение должно соответствовать "site key" для вашего reCAPTCHA, которые можно найти в dashboard (панели управления) reCAPTCHA.';
$CIDRAM['lang']['config_recaptcha_usemode'] = 'Определяет как CIDRAM должны использовать reCAPTCHA (обратитесь к документации).';
$CIDRAM['lang']['config_signatures_block_bogons'] = 'Блокировать марсианин/bogon CIDRs? Если Вы ожидаете посетителей на свой веб-сайт из вашей локальной сети или из локальной сети, эта директива должна быть false. В противном случае, эта директива должна быть true.';
$CIDRAM['lang']['config_signatures_block_cloud'] = 'Блокировать CIDRs идентифицирован как принадлежащий услуг веб-хостинга / облачные сервисы? Если Вы управляете службы API с вашего сайта, или если Вы ожидать что другие веб-сайты чтобы подключиться к ваш веб-сайт, эта директива должна быть false. Если Вы этого не сделаете, эта директива должна быть true.';
$CIDRAM['lang']['config_signatures_block_generic'] = 'Блокировать CIDRs рекомендуется для черных списков? Это охватывает любые сигнатур, которые не помечены как часть какой-либо из других более конкретных категорий сигнатур.';
$CIDRAM['lang']['config_signatures_block_proxies'] = 'Блокировать CIDRs идентифицированы как принадлежащие к прокси-серверов? Если вам требуется, чтобы пользователи смогли получить доступ к вашему веб-сайт от анонимных прокси-серверов, эта директива должна быть false. В противном случае, если вам не нужны анонимных прокси-серверов, эта директива должна быть true как средство повышения безопасности.';
$CIDRAM['lang']['config_signatures_block_spam'] = 'Блокировать CIDRs которые были определены как высокого риска для спама? Если Вы не испытываете проблем при этом, как правило, эта директива должна быть true.';
$CIDRAM['lang']['config_signatures_ipv4'] = 'Список сигнатур IPv4 файлы, которые CIDRAM должен попытаться обработать, разделенных запятыми.';
$CIDRAM['lang']['config_signatures_ipv6'] = 'Список сигнатур IPv6 файлы, которые CIDRAM должен попытаться обработать, разделенных запятыми.';
$CIDRAM['lang']['config_template_data_css_url'] = 'URL файла CSS для пользовательских тем.';
$CIDRAM['lang']['field_blocked'] = 'Блокированный';
$CIDRAM['lang']['field_component'] = 'Компонент';
$CIDRAM['lang']['field_create_new_account'] = 'Создать Новый Аккаунт';
$CIDRAM['lang']['field_delete_account'] = 'Удалить Аккаунт';
$CIDRAM['lang']['field_filename'] = 'Имя файла: ';
$CIDRAM['lang']['field_install'] = 'Устанавливать';
$CIDRAM['lang']['field_ip_address'] = 'IP-Адрес';
$CIDRAM['lang']['field_latest_version'] = 'Последняя Версия';
$CIDRAM['lang']['field_log_in'] = 'Войдите';
$CIDRAM['lang']['field_ok'] = 'ОК';
$CIDRAM['lang']['field_options'] = 'Опции';
$CIDRAM['lang']['field_password'] = 'Пароль';
$CIDRAM['lang']['field_permissions'] = 'Разрешения';
$CIDRAM['lang']['field_set_new_password'] = 'Установить Новый Пароль';
$CIDRAM['lang']['field_size'] = 'Общий Размер: ';
$CIDRAM['lang']['field_size_bytes'] = 'байтов';
$CIDRAM['lang']['field_size_GB'] = 'ГБ';
$CIDRAM['lang']['field_size_KB'] = 'КБ';
$CIDRAM['lang']['field_size_MB'] = 'МБ';
$CIDRAM['lang']['field_size_TB'] = 'ТБ';
$CIDRAM['lang']['field_status'] = 'Статус';
$CIDRAM['lang']['field_uninstall'] = 'Удалить';
$CIDRAM['lang']['field_update'] = 'Обновить';
$CIDRAM['lang']['field_username'] = 'Имя Пользователя';
$CIDRAM['lang']['field_your_version'] = 'Ваша Версия';
$CIDRAM['lang']['header_login'] = 'Пожалуйста войдите чтобы продолжить.';
$CIDRAM['lang']['link_accounts'] = 'Учетными Записями';
$CIDRAM['lang']['link_config'] = 'Конфигурация';
$CIDRAM['lang']['link_documentation'] = 'Документация';
$CIDRAM['lang']['link_home'] = 'Домашняя Страница';
$CIDRAM['lang']['link_ip_test'] = 'Тест IP';
$CIDRAM['lang']['link_logs'] = 'Лог-Файлы';
$CIDRAM['lang']['link_updates'] = 'Обновления';
$CIDRAM['lang']['logs_logfile_doesnt_exist'] = 'Выбранный лог-файл не существует!';
$CIDRAM['lang']['logs_no_logfiles_available'] = 'Не лог-файлы доступны.';
$CIDRAM['lang']['logs_no_logfile_selected'] = 'Не лог-файлы Выбранный.';
$CIDRAM['lang']['response_accounts_already_exists'] = 'Аккаунт с таким именем уже существует!';
$CIDRAM['lang']['response_accounts_created'] = 'Аккаунт успешно создан!';
$CIDRAM['lang']['response_accounts_deleted'] = 'Аккаунт успешно удален!';
$CIDRAM['lang']['response_accounts_doesnt_exist'] = 'Эта аккаунт не существует.';
$CIDRAM['lang']['response_accounts_password_updated'] = 'Пароль успешно обновлено!';
$CIDRAM['lang']['response_component_successfully_installed'] = 'Компонент успешно установлен.';
$CIDRAM['lang']['response_component_successfully_uninstalled'] = 'Компонент успешно удален.';
$CIDRAM['lang']['response_component_successfully_updated'] = 'Компонент успешно обновлено.';
$CIDRAM['lang']['response_component_uninstall_error'] = 'Произошла ошибка при попытке удалить компонент.';
$CIDRAM['lang']['response_component_update_error'] = 'Произошла ошибка при попытке обновить компонент.';
$CIDRAM['lang']['response_configuration_updated'] = 'Конфигурация успешно обновлено.';
$CIDRAM['lang']['response_error'] = 'Ошибка';
$CIDRAM['lang']['response_login_invalid_password'] = 'Войти провал! Неверный пароль!';
$CIDRAM['lang']['response_login_invalid_username'] = 'Войти провал! Имя пользователя не существует!';
$CIDRAM['lang']['response_login_password_field_empty'] = 'Пароль пусто!';
$CIDRAM['lang']['response_login_username_field_empty'] = 'Имя пользователя пусто!';
$CIDRAM['lang']['response_no'] = 'Нет';
$CIDRAM['lang']['response_updates_already_up_to_date'] = 'Уже обновлено.';
$CIDRAM['lang']['response_updates_not_installed'] = 'Компонент не установлен!';
$CIDRAM['lang']['response_updates_outdated'] = 'Устаревший!';
$CIDRAM['lang']['response_updates_outdated_manually'] = 'Устаревший (пожалуйста обновить вручную)!';
$CIDRAM['lang']['response_updates_unable_to_determine'] = 'Невозможно определить.';
$CIDRAM['lang']['response_yes'] = 'Да';
$CIDRAM['lang']['state_complete_access'] = 'Полный доступ';
$CIDRAM['lang']['state_component_is_active'] = 'Компонент активен.';
$CIDRAM['lang']['state_component_is_inactive'] = 'Компонент неактивен.';
$CIDRAM['lang']['state_component_is_provisional'] = 'Компонент иногда активен.';
$CIDRAM['lang']['state_default_password'] = 'Предупреждение: Использует стандартный пароль!';
$CIDRAM['lang']['state_logged_in'] = 'В настоящее время вошли в систему';
$CIDRAM['lang']['state_logs_access_only'] = 'Доступ только к лог-файлы';
$CIDRAM['lang']['state_password_not_valid'] = 'Предупреждение: Эта аккаунт не использует правильный пароль!';
$CIDRAM['lang']['switch-hide-non-outdated-set-false'] = 'Не скрывают не-устаревший';
$CIDRAM['lang']['switch-hide-non-outdated-set-true'] = 'Скрывают не-устаревший';
$CIDRAM['lang']['switch-hide-unused-set-false'] = 'Не скрывают не-установлена';
$CIDRAM['lang']['switch-hide-unused-set-true'] = 'Скрывают не-установлена';
$CIDRAM['lang']['tip_accounts'] = 'Привет, {username}.<br />Учетными записями страница позволяет контролировать, кто может получить доступ к CIDRAM фронтенд.';
$CIDRAM['lang']['tip_config'] = 'Привет, {username}.<br />Конфигурация страница позволяет изменять конфигурацию для CIDRAM от фронтенд.';
$CIDRAM['lang']['tip_enter_ips_here'] = 'Введите IP-адреса здесь.';
$CIDRAM['lang']['tip_home'] = 'Привет, {username}.<br />Это домашняя страница для CIDRAM фронтенд. Выберите ссылку в меню навигации слева чтобы продолжить.';
$CIDRAM['lang']['tip_ip_test'] = 'Привет, {username}.<br />Тест IP страница позволяет проверить если IP-адреса заблокированы по установленных сигнатуры.';
$CIDRAM['lang']['tip_login'] = 'Стандартный имя пользователя: <span class="txtRd">admin</span> – Стандартный пароль: <span class="txtRd">password</span>';
$CIDRAM['lang']['tip_logs'] = 'Привет, {username}.<br />Выберите лог-файл из приведенного ниже списка чтобы прочитать содержимое лог-файл.';
$CIDRAM['lang']['tip_see_the_documentation'] = 'Просмотреть <a href="https://github.com/Maikuolan/CIDRAM/blob/master/_docs/readme.ru.md#SECTION6">документации</a> для получения информации о различных директив конфигурации и их целей.';
$CIDRAM['lang']['tip_updates'] = 'Привет, {username}.<br />Обновления страница позволяет устанавливать, удалить и обновления для различных компонентов CIDRAM (пакет ядра, сигнатуры, L10N файлы, итд).';
$CIDRAM['lang']['title_accounts'] = 'CIDRAM – Учетными Записями';
$CIDRAM['lang']['title_config'] = 'CIDRAM – Конфигурация';
$CIDRAM['lang']['title_home'] = 'CIDRAM – Домашняя Страница';
$CIDRAM['lang']['title_ip_test'] = 'CIDRAM – Тест IP';
$CIDRAM['lang']['title_login'] = 'CIDRAM – Войти';
$CIDRAM['lang']['title_logs'] = 'CIDRAM – Лог-Файлы';
$CIDRAM['lang']['title_updates'] = 'CIDRAM – Обновления';