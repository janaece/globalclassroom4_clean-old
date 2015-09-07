<?php
/**
* Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2007 Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage core
 * @author     Penny Leach <penny@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006,2007 Catalyst IT Ltd http://catalyst.net.nz
 *
 * @german language pack
 * @author     Heinz Krettek <Heinz.Krettek@ewiesion.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2007 Heinz Krettek, eWIEsion.com
 *
 */

defined('INTERNAL') || die();

$string['changepassworddesc'] = 'Passwort ändern';
$string['changepasswordotherinterface'] = 'Sie können über eine andere Oberfläche Ihr <a href="%s">Passwort ändern</a>';
$string['oldpasswordincorrect'] = 'Dies ist nicht Ihr aktuelles Passwort';

$string['changeusernameheading'] = 'Anmeldename ändern';
$string['changeusername'] = 'Neuer Anmeldename';
$string['changeusernamedesc'] = 'Der Anmeldename, den Sie für die Anmeldung bei %s benutzen.  Die Anmeldenamen sind 3 - 30 Zeichen lang, dürfen Buchstaben, Zahlen und die üblichen Zeichen ohne das Leerzeichen enthalten.';

$string['usernameexists'] = 'Der Nutzername besteht bereits, bitte wählen Sie eine Alternative.';

$string['accountoptionsdesc'] = 'Allgemeine Einstellungen für den Account festlegen';
$string['friendsnobody'] = 'Niemand kann mich als Kontakt hinzufügen';
$string['friendsauth'] = 'Neue Kontakte benötigen meine Einwilligung';
$string['friendsauto'] = 'Neue Kontakte werden automatisch zugelassen';
$string['friendsdescr'] = 'Kontaktkontrolle';
$string['updatedfriendcontrolsetting'] = 'Die Kontaktkontrolle wurde aktualisiert';

$string['wysiwygdescr'] = 'HTML Editor';
$string['on'] = 'Ein';
$string['off'] = 'Aus';
$string['disabled'] = 'Deaktiviert';
$string['enabled'] = 'Aktiviert';

$string['messagesdescr'] = 'Meldungen anderer Nutzer/innen';
$string['messagesnobody'] = 'Niemand hat die Erlaubnis mir Meldungen zu senden';
$string['messagesfriends'] = 'Die Personen meiner Kontaktliste dürfen mir Meldungen senden';
$string['messagesallow'] = 'Jede/r darf mir Meldungen senden';

$string['language'] = 'Sprache';

$string['showviewcolumns'] = 'Anzeige von Buttons direkt im Ansichtenbearbeitungsmodus zum Hinzufügen und Löschen der Spalten';
$string['tagssideblockmaxtags'] = 'Maximale Anzahl von Schlagworten in der Tagwolke';
$string['tagssideblockmaxtagsdescription'] = 'Wieviele Schlagworte sollen in der Tagwolke maximal angezeigt werden';

$string['enablemultipleblogs'] = 'Die Option Mehrere Blogs aktivieren';
$string['enablemultipleblogsdescription']  = 'Standardmäßig haben Sie 1 Blog. Aktivieren Sie diese Option, wenn Sie mehr als ein Blog führen wollen.';
$string['disablemultipleblogserror'] = 'Sie können diese Option nicht deaktivieren, solange Sie mehr als einen Blog eingerichtet haben';
$string['hiderealname'] = 'Den richtigen Namen verbergen';
$string['hiderealnamedescription'] = 'Setzen Sie diese Option, wenn Sie einen Anzeigename eingegeben haben und andere Nutzer/innen bei der Suche nicht den richtigen Namen finden sollen.';

$string['showhomeinfo'] = 'Anzeigen des Mahara Informationsblocks auf der Startseite';

$string['mobileuploadtoken'] = 'Sicherheitswort für Handy Uploads';
$string['mobileuploadtokendescription'] = 'Das hier und auf dem Handy eingegebene Sicherheitswort ermöglicht Uploads vom Handy (Bitte beachten: das Sicherheitswort wird nach jedem Upload automatisch geändert) <br/>Bei Problemen können Sie einfach hier und für das Handy ein neues Sicherheitswort eingeben.';

$string['prefssaved']  = 'Einstellungen gesichert';
$string['prefsnotsaved'] = 'Fehler beim Sichern der Einstellungen!';

$string['maildisabled'] = 'E-Mail deaktiviert';
$string['maildisabledbounce'] =<<< EOF
Das Versenden von E-Mails an Ihre E-Mail-Adresse wurde deaktiviert weil zu viele Mails vom Server empfangen wurden.
Bitte kontrollieren Sie Ihren E-Mail-Account bevor Sie den E-Mail Versand bei %s reaktivieren.

EOF;
$string['maildisableddescription'] = 'Das Versenden von E-Mails an Ihre E-Mail-Adresse wurde deaktiviert. Sie können <a href="%s">Ihren E-Mail-Versand reaktivieren</a>, wenn Sie die Seite "Einstellungen" besuchen.';

$string['deleteaccount']  = 'Zugang löschen';
$string['deleteaccountdescription']  = 'Wenn Sie Ihren Zugang löschen, können andere Nutzer/innen Ihre Profilinformationen und Ihre Ansichten nicht mehr einsehen.  Der Inhalt der Foreneinträge bleibt weiterhin sichtbar, aber die Autorenschaft wird namentlich nicht mehr angezeigt.';
$string['accountdeleted']  = 'Ihr Zugang wurde gelöscht.';
