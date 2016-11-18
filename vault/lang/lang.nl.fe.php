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
 * This file: Dutch language data for the front-end (last modified: 2016.11.18).
 */

/** Prevents execution from outside of CIDRAM. */
if (!defined('CIDRAM')) {
    die('[CIDRAM] This should not be accessed directly.');
}

$CIDRAM['lang']['bNav_home_logout'] = '<a href="?">Startpagina</a> | <a href="?cidram-page=logout">Uitloggen</a>';
$CIDRAM['lang']['bNav_logout'] = '<a href="?cidram-page=logout">Uitloggen</a>';
$CIDRAM['lang']['config_general_disable_cli'] = 'Uitschakelen CLI-modus?';
$CIDRAM['lang']['config_general_disable_frontend'] = 'Uitschakelen frontend toegang?';
$CIDRAM['lang']['config_general_emailaddr'] = 'E-mailadres voor ondersteuning.';
$CIDRAM['lang']['config_general_forbid_on_block'] = 'Welke headers moet CIDRAM reageren met bij het blokkeren van verzoeken?';
$CIDRAM['lang']['config_general_ipaddr'] = 'Waar het IP-adres van het aansluiten verzoek te vinden?';
$CIDRAM['lang']['config_general_lang'] = 'Geef de standaardtaal voor CIDRAM.';
$CIDRAM['lang']['config_general_logfile'] = 'Mensen leesbare bestand om alle geblokkeerde toegang pogingen te loggen. Geef een bestandsnaam, of laat leeg om uit te schakelen.';
$CIDRAM['lang']['config_general_logfileApache'] = 'Apache-stijl bestand om alle geblokkeerde toegang pogingen te loggen. Geef een bestandsnaam, of laat leeg om uit te schakelen.';
$CIDRAM['lang']['config_general_logfileSerialized'] = 'Geserialiseerd bestand om alle geblokkeerde toegang pogingen te loggen. Geef een bestandsnaam, of laat leeg om uit te schakelen.';
$CIDRAM['lang']['config_general_silent_mode'] = 'Moet CIDRAM stilletjes redirect geblokkeerd toegang pogingen in plaats van het weergeven van de "Toegang Geweigerd" pagina? Als ja, geef de locatie te redirect geblokkeerd toegang pogingen. Als nee, verlaat deze variabele leeg.';
$CIDRAM['lang']['config_general_timeOffset'] = 'Tijdzone offset in minuten.';
$CIDRAM['lang']['config_recaptcha_expiry'] = 'Aantal uren om reCAPTCHA instanties herinneren.';
$CIDRAM['lang']['config_recaptcha_lockip'] = 'Binden reCAPTCHA om IPs?';
$CIDRAM['lang']['config_recaptcha_lockuser'] = 'Binden reCAPTCHA om gebruikers?';
$CIDRAM['lang']['config_recaptcha_logfile'] = 'Log alle reCAPTCHA pogingen? Zo ja, geef de naam te gebruiken voor het logbestand. Zo nee, laat u deze variabele leeg.';
$CIDRAM['lang']['config_recaptcha_secret'] = 'Deze waarde moet overeenkomen met de "secret key" voor uw reCAPTCHA, die kan worden gevonden binnen de reCAPTCHA dashboard.';
$CIDRAM['lang']['config_recaptcha_sitekey'] = 'Deze waarde moet overeenkomen met de "site key" voor uw reCAPTCHA, die kan worden gevonden binnen de reCAPTCHA dashboard.';
$CIDRAM['lang']['config_recaptcha_usemode'] = 'Bepaalt hoe CIDRAM reCAPTCHA moet gebruiken (raadpleeg de documentatie).';
$CIDRAM['lang']['config_signatures_block_bogons'] = 'Blokkeren bogon/martian CIDRs? Als u verwacht aansluitingen om uw website vanuit uw lokale netwerk, vanuit localhost, of vanuit uw LAN, dit richtlijn moet worden ingesteld op false. Als u niet verwacht deze aansluitingen, dit richtlijn moet worden ingesteld op true.';
$CIDRAM['lang']['config_signatures_block_cloud'] = 'Blokkeren CIDRs geïdentificeerd als behorend tot webhosting/cloud-diensten? Als u een api te bedienen vanaf uw website of als u verwacht dat andere websites aan te sluiten op uw website, dit richtlijn moet worden ingesteld op false. Als u niet, dan, dit richtlijn moet worden ingesteld op true.';
$CIDRAM['lang']['config_signatures_block_generic'] = 'Blokkeren CIDRs algemeen aanbevolen voor blacklisting? Dit omvat alle handtekeningen die niet zijn gemarkeerd als onderdeel van elke van de andere, meer specifieke handtekening categorieën.';
$CIDRAM['lang']['config_signatures_block_proxies'] = 'Blokkeren CIDRs geïdentificeerd als behorend tot proxy-services? Als u vereisen dat gebruikers kan toegang tot uw website van anonieme proxy-services, dit richtlijn moet worden ingesteld op false. Anders, als u niet nodig anonieme proxies, dit richtlijn moet worden ingesteld op true als een middel ter verbetering van de beveiliging.';
$CIDRAM['lang']['config_signatures_block_spam'] = 'Blokkeren CIDRs geïdentificeerd als zijnde hoog risico voor spam? Tenzij u problemen ondervindt wanneer u dit doet, in algemeen, dit moet altijd worden ingesteld op true.';
$CIDRAM['lang']['config_signatures_ipv4'] = 'Een lijst van de IPv4 handtekening bestanden dat CIDRAM moet proberen om te gebruiken, afgebakend door komma\'s.';
$CIDRAM['lang']['config_signatures_ipv6'] = 'Een lijst van de IPv6 handtekening bestanden dat CIDRAM moet proberen om te gebruiken, afgebakend door komma\'s.';
$CIDRAM['lang']['config_template_data_css_url'] = 'CSS-bestand URL voor aangepaste thema\'s.';
$CIDRAM['lang']['field_blocked'] = 'Geblokkeerd';
$CIDRAM['lang']['field_component'] = 'Bestanddeel';
$CIDRAM['lang']['field_create_new_account'] = 'Nieuw Account Creëren';
$CIDRAM['lang']['field_delete_account'] = 'Account Verwijderen';
$CIDRAM['lang']['field_filename'] = 'Bestandsnaam: ';
$CIDRAM['lang']['field_install'] = 'Installeren';
$CIDRAM['lang']['field_ip_address'] = 'IP-Adres';
$CIDRAM['lang']['field_latest_version'] = 'Laatste Versie';
$CIDRAM['lang']['field_log_in'] = 'Inloggen';
$CIDRAM['lang']['field_ok'] = 'OK';
$CIDRAM['lang']['field_options'] = 'Opties';
$CIDRAM['lang']['field_password'] = 'Wachtwoord';
$CIDRAM['lang']['field_permissions'] = 'Machtigingen';
$CIDRAM['lang']['field_set_new_password'] = 'Stel Nieuw Wachtwoord';
$CIDRAM['lang']['field_size'] = 'Totale Grootte: ';
$CIDRAM['lang']['field_size_bytes'] = 'bytes';
$CIDRAM['lang']['field_size_GB'] = 'GB';
$CIDRAM['lang']['field_size_KB'] = 'KB';
$CIDRAM['lang']['field_size_MB'] = 'MB';
$CIDRAM['lang']['field_size_TB'] = 'TB';
$CIDRAM['lang']['field_status'] = 'Toestand';
$CIDRAM['lang']['field_uninstall'] = 'Verwijderen';
$CIDRAM['lang']['field_update'] = 'Bijwerken';
$CIDRAM['lang']['field_username'] = 'Gebruikersnaam';
$CIDRAM['lang']['field_your_version'] = 'Uw Versie';
$CIDRAM['lang']['header_login'] = 'Inloggen om verder te gaan.';
$CIDRAM['lang']['link_accounts'] = 'Accounts';
$CIDRAM['lang']['link_config'] = 'Configuratie';
$CIDRAM['lang']['link_documentation'] = 'Documentatie';
$CIDRAM['lang']['link_home'] = 'Startpagina';
$CIDRAM['lang']['link_ip_test'] = 'IP Test';
$CIDRAM['lang']['link_logs'] = 'Logbestanden';
$CIDRAM['lang']['link_updates'] = 'Updates';
$CIDRAM['lang']['logs_logfile_doesnt_exist'] = 'Geselecteerde logbestand bestaat niet!';
$CIDRAM['lang']['logs_no_logfiles_available'] = 'Geen logbestanden beschikbaar.';
$CIDRAM['lang']['logs_no_logfile_selected'] = 'Geen logbestand geselecteerd.';
$CIDRAM['lang']['response_accounts_already_exists'] = 'Een account bij die gebruikersnaam bestaat al!';
$CIDRAM['lang']['response_accounts_created'] = 'Account succesvol aangemaakt!';
$CIDRAM['lang']['response_accounts_deleted'] = 'Account succesvol verwijderd!';
$CIDRAM['lang']['response_accounts_doesnt_exist'] = 'Die account bestaat niet.';
$CIDRAM['lang']['response_accounts_password_updated'] = 'Wachtwoord succesvol gewijzigd!';
$CIDRAM['lang']['response_component_successfully_installed'] = 'Bestanddeel succesvol geïnstalleerd.';
$CIDRAM['lang']['response_component_successfully_uninstalled'] = 'Bestanddeel succesvol verwijderd.';
$CIDRAM['lang']['response_component_successfully_updated'] = 'Bestanddeel succesvol gewijzigd.';
$CIDRAM['lang']['response_component_uninstall_error'] = 'Er is een fout opgetreden tijdens een poging om het bestanddeel te verwijderen.';
$CIDRAM['lang']['response_component_update_error'] = 'Er is een fout opgetreden tijdens een poging om het bestanddeel te bijwerken.';
$CIDRAM['lang']['response_configuration_updated'] = 'Configuratie succesvol gewijzigd.';
$CIDRAM['lang']['response_error'] = 'Fout';
$CIDRAM['lang']['response_login_invalid_password'] = 'Inloggen mislukt! Ongeldig wachtwoord!';
$CIDRAM['lang']['response_login_invalid_username'] = 'Inloggen mislukt! Gebruikersnaam bestaat niet!';
$CIDRAM['lang']['response_login_password_field_empty'] = 'Password veld leeg!';
$CIDRAM['lang']['response_login_username_field_empty'] = 'Gebruikersnaam veld leeg!';
$CIDRAM['lang']['response_no'] = 'Nee';
$CIDRAM['lang']['response_updates_already_up_to_date'] = 'Al bijgewerkt.';
$CIDRAM['lang']['response_updates_not_installed'] = 'Bestanddeel niet geïnstalleerd!';
$CIDRAM['lang']['response_updates_outdated'] = 'Verouderd!';
$CIDRAM['lang']['response_updates_outdated_manually'] = 'Verouderd (neem handmatig bijwerken)!';
$CIDRAM['lang']['response_updates_unable_to_determine'] = 'Onbepaald.';
$CIDRAM['lang']['response_yes'] = 'Ja';
$CIDRAM['lang']['state_complete_access'] = 'Volledige toegang';
$CIDRAM['lang']['state_component_is_active'] = 'Bestanddeel is actief.';
$CIDRAM['lang']['state_component_is_inactive'] = 'Bestanddeel is inactief.';
$CIDRAM['lang']['state_component_is_provisional'] = 'Bestanddeel is voorlopig.';
$CIDRAM['lang']['state_default_password'] = 'Waarschuwing: Gebruikt de standaard wachtwoord!';
$CIDRAM['lang']['state_logged_in'] = 'Ingelogd';
$CIDRAM['lang']['state_logs_access_only'] = 'Logbestanden toegang alleen';
$CIDRAM['lang']['state_password_not_valid'] = 'Waarschuwing: Dit account is niet gebruikt van een geldig wachtwoord!';
$CIDRAM['lang']['switch-hide-non-outdated-set-false'] = 'De al bijgewerkt niet verbergen';
$CIDRAM['lang']['switch-hide-non-outdated-set-true'] = 'De al bijgewerkt verbergen';
$CIDRAM['lang']['switch-hide-unused-set-false'] = 'De ongebruikte niet verbergen';
$CIDRAM['lang']['switch-hide-unused-set-true'] = 'De ongebruikte verbergen';
$CIDRAM['lang']['tip_accounts'] = 'Hallo, {username}.<br />De accounts pagina stelt u in staat om te bepalen wie toegang heeft tot de CIDRAM frontend.';
$CIDRAM['lang']['tip_config'] = 'Hallo, {username}.<br />De configuratie pagina stelt u in staat om de configuratie voor CIDRAM te modificeren vanaf de frontend.';
$CIDRAM['lang']['tip_enter_ips_here'] = 'Voer hier IPs.';
$CIDRAM['lang']['tip_home'] = 'Hallo, {username}.<br />Dit is de startpagina van de CIDRAM frontend. Selecteer een link in het navigatiemenu aan de linkerkant om door te gaan.';
$CIDRAM['lang']['tip_ip_test'] = 'Hallo, {username}.<br />De IP test pagina stelt u in staat om te testen of IP-adressen door de geïnstalleerde handtekeningen worden geblokkeerd.';
$CIDRAM['lang']['tip_login'] = 'Standaard gebruikersnaam: <span class="txtRd">admin</span> – Standaard wachtwoord: <span class="txtRd">password</span>';
$CIDRAM['lang']['tip_logs'] = 'Hallo, {username}.<br />Selecteer een logbestand uit de onderstaande lijst om de inhoud van de logbestand te bekijken.';
$CIDRAM['lang']['tip_see_the_documentation'] = 'Zie de <a href="https://github.com/Maikuolan/CIDRAM/blob/master/_docs/readme.nl.md#SECTION6">documentatie</a> voor informatie over de verschillende configuratie richtlijnen en hun doeleinden.';
$CIDRAM['lang']['tip_updates'] = 'Hallo, {username}.<br />De updates pagina stelt u in staat om de verschillende onderdelen van CIDRAM te installeren, verwijderen, en actualiseren (de core pakket, handtekeningen, L10N bestanden, ezv).';
$CIDRAM['lang']['title_accounts'] = 'CIDRAM – Accounts';
$CIDRAM['lang']['title_config'] = 'CIDRAM – Configuratie';
$CIDRAM['lang']['title_home'] = 'CIDRAM – Startpagina';
$CIDRAM['lang']['title_ip_test'] = 'CIDRAM – IP Test';
$CIDRAM['lang']['title_login'] = 'CIDRAM – Inloggen';
$CIDRAM['lang']['title_logs'] = 'CIDRAM – Logbestanden';
$CIDRAM['lang']['title_updates'] = 'CIDRAM – Updates';