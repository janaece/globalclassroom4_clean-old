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
 * @subpackage lang
 * @author     Nigel McNie <nigel@catalyst.net.nz>
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

// @todo<nigel>: most likely need much better descriptions here for these environment issues
$string['phpversion'] = 'Mahara arbeitet nicht mit einer PHP Version < %s. Erweitern Sie bitte Ihre PHP Version, oder installieren Sie Mahara auf einem anderen Host.';
$string['jsonextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine JSON Erweiterung. Mahara benötigt diese aber um Daten an den Browser zu senden oder zu erhalten. Stellen sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['pgsqldbextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine pgsql Erweiterung. Mahara benötigt diese Erweiterung, um Daten in einer Relationalen Datenbank anzuspeichern. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['mysqldbextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine mysql Erweiterung. Mahara benötigt diese Erweiterung, um Daten in einer Relationalen Datenbank anzuspeichern. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['unknowndbtype'] = 'Ihre Serverkonfiguration meldet einen unbekannten Datenbanktyp. Gültige Einträge sind "postgres8" und "mysql5". Bitte ändern Sie den Datenbanktyp in der Datei config.php.';
$string['domextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine DOM Erweiterung. Mahara benötigt diese aber um XML Daten von unterschiedlichen Quellen zu untersuchen.';
$string['xmlextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine %s Erweiterung. Mahara benötigt diese aber um XML Daten für den Installationsvorgang und Backups zu analysieren. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['gdextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine gd Erweiterung. Mahara benötigt diese Erweiterung um Größenänderungen und andere Operationen beim Hochladen von Bildern auszuführen. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['gdfreetypenotloaded'] = 'Ihre Server Konfiguration der gd Erweiterung schließt keine Freetype Unterstützung ein. Mahara benötigt diese Erweiterung zur Darstellung des CAPTCHA Bildes. Stellen Sie bitte sicher, dass die Erweiterung damit konfiguriert ist.';
$string['sessionextensionnotloaded'] = 'Ihre Server Konfiguration enthält keine session Erweiterung. Mahara benötigt diese Erweiterung um die Nutzeranmeldung zu unterstützen. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['curllibrarynotinstalled'] = 'Ihre Server Konfiguration enthält keine curl Erweiterung. Mahara benötigt diese Erweiteung für die Integration von Moodle und zum Abfragen externer Feeds. Stellen Sie bitte sicher, dass die Erweiterung in php.ini geladen wird, oder installieren Sie die Erweiterung, wenn dies noch nicht geschehen ist.';
$string['registerglobals'] = 'Sie benutzen gefährliche PHP Einstellungen, register_globals ist on. Mahara versucht eine provisorische Lösung, aber Sie sollten diese Einstellung wirklich korrigieren. Wenn Sie einen Shared Host benutzen und die Möglichkeit besteht, können Sie versuchen folgende Zeile in die Datei .htaccess Datei einzufügen:
+php_flag magic_quotes_sybase off';
$string['magicquotesgpc'] = 'Sie benutzen gefährliche PHP Einstellungen, magic_quotes_gpc ist on. Mahara versucht eine provisorische Lösung, aber Sie sollten diese Einstellung wirklich korrigieren. Wenn Sie einen Shared Host benutzen und die Möglichkeit besteht, können Sie versuchen folgende Zeile in die Datei .htaccess Datei einzufügen:
+php_flag magic_quotes_sybase off';
$string['magicquotesruntime'] = 'Sie benutzen gef&auml;hrliche PHP Einstellungen, magic_quotes_runtime ist on. Mahara versucht eine provisorische L&ouml;sung, aber Sie sollten diese Einstellung wirklich korrigieren. Wenn Sie einen Shared Host benutzen und die Möglichkeit besteht, können Sie versuchen folgende Zeile in die Datei .htaccess Datei einzufügen:
+php_flag magic_quotes_sybase off';
$string['magicquotessybase'] = 'Sie benutzen gefährliche PHP Einstellungen, magic_quotes_sybase is on. Mahara versucht eine provisorische Lösung, aber Sie sollten diese Einstellung wirklich korrigieren. Wenn Sie einen Shared Host benutzen und die Möglichkeit besteht, können Sie versuchen folgende Zeile in die Datei .htaccess Datei einzufügen:
+php_flag magic_quotes_sybase off';
$string['mimemagicnotloaded'] = 'Wenn Ihr Server Probleme hat, den richtigen Dateityp zu ermitteln, sollten Sie die PHP Erweiterung Fileinfo (PHP 5.3+) oder die mime_magic Erweiterung (frühere PHP Versionen) installieren.';

$string['safemodeon'] = '<p>Ihr Server scheint im safe mode zu arbeiten. Mahara unterstützt diesen Modus nicht. Sie müssen den Modus entweder in der php.ini Datei oder in Ihrer Apache-Konfiguration für die Site umstellen.</p><p>Wenn Sie die Site auf einem Shared Host betreiben, können Sie wahrscheinlich wenig tun, um den  safe_mode auszuschalten, außer Ihren Hosting Provider zu kontaktieren. Vielleicht sollten Sie den Wechsel zu einem anderen Host in Erwägung ziehen.</p>';
$string['apcstatoff'] = 'Ihr Server scheint APC mit der Einstellung apc.stat=0 zu benutzen. Mahara unterstützt diese Konfiguration nicht. Sie müssen in der Datei php.ini den Eintrag apc.stat=1 hinzufügen.

Wenn Sie die Site auf einem Shared Host betreiben, können Sie wahrscheinlich wenig tun, um die einstellung apc.stat=1 zu aktivieren, außer Ihren Hosting Provider zu kontaktieren. Vielleicht sollten Sie den Wechsel zu einem anderen Host in Erwägung ziehen.';
$string['datarootinsidedocroot'] = 'Sie haben Ihr Datenverzeichnis so eingestellt, dass es innerhalb des Dokumentenverzeichnisses angelegt wird. Dies ist eine großes Sicherheitsproblem, weil dann jedermann direkt Sitzungsdaten anfordern kann (um so die Sitzungen anderer Nutzer/innen zu berauben), oder auf Dateien, für die keine Zugriffsberechtigung vorliegt, benutzen kann . Bitte richten Sie das Dataroot Verzeichnis so ein, dass es außerhalb des Dokmentenverzeichnis installiert wird.';
$string['datarootnotwritable'] = 'Ihr festgelegtes Dataroot Verzeichnis, <tt>%s</tt>, ist beschreibbar. Das bedeutet, dass weder Sessiondaten, Nutzerdateien noch sonst irgendetwas, das hochgeladen werden soll, auf Ihrem Server gespeichert werden kann. Stellen Sie bitte sicher, dass das Verzeichnis existiert und benutzt werden kann.';
$string['couldnotmakedatadirectories'] = 'Aus irgendeinem Grund können einige der notwendigen Systemverzeichnisse nicht angelegt werden. Das sollte nicht passieren, da Mahara zuvor entdeckt hat, dass das Dataroot Verzeichnis beschreibbar ist. Kontrollieren Sie bitte die Zugriffsberechtigungen des Dataroot Verzeichnisses.';

$string['dbconnfailed'] = 'Mahara kann keine Verbindung zur Applikationdatenbank herstellen.


 * Wenn Sie Mahara als Nutzer/in anwenden, warten Sie bitte eine Minute und versuchen Sie es dann erneut
 * Als Administrator/in kontrollieren Sie bitte die Datenbankeinstellungen und stellen Sie sicher, dass die Datenbank verfügbar ist

Die Fehlermeldung lautet:
';
$string['dbnotutf8'] = 'Sie nutzen keine UTF-8 Datenbank. Mahara speichert aber intern alle Daten im UTF-8 Format. Bitte löschen Sie die Datenbank und erstellen eine neue Datenbank mit UTF-8 Codierung.';
$string['dbversioncheckfailed'] = 'Ihre Datenbankserver Version ist nicht aktuell, um mit Mahara zu arbeiten. Ihr Server ist %s %s, aber Mahara benötigt zumindest die Version %s.';

// general exception error messages
$string['blocktypenametaken'] = "Der Blocktyp %s wird schon von einem anderen Plugin (%s) benutzt";
$string['artefacttypenametaken'] = "Der Artefakttyp %s wird schon von einem anderen Plugin (%s) benutzt";
$string['artefacttypemismatch'] = "Artefakt Typenunterschied, Sie versuchen %s als %s zu benutzen";
$string['classmissing'] = "Die Klasse %s für den Typ %s im Plugin %s fehlt";
$string['artefacttypeclassmissing'] = "Die Artefakttypen müssen alle eine Klasse implementieren.  Es fehlt %s";
$string['artefactpluginmethodmissing'] =  "Das Artefaktplugin %s sollte %s implementieren aber es ist ein Fehler aufgetreten";
$string['blocktypelibmissing'] = 'Fehlende Datei lib.php für den Block %s im Artefaktplugin %s';
$string['blocktypemissingconfigform'] = 'Der Blocktyp %s muss eine instance_config_form implementieren';
$string['versionphpmissing'] = 'Das Plugin %s %s hat keine Datei version.php!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'This will be installed as part of the installation of artefact plugin %s';
$string['blockconfigdatacalledfromset'] = 'die Configdata Informationen sollten nicht unmittelbar gesetzt werden, benützen Sie bitte  dafür PluginBlocktype::instance_config_save';
$string['invaliddirection'] = 'Ungültige Vorgabe %s';
$string['onlyoneprofileviewallowed'] = 'Sie dürfen nur eine Profilansicht anlegen';
$string['onlyoneblocktypeperview'] = 'Sie können nicht mehr als einen %s Blocktype in die Ansicht einfügen';

// if you change these next two , be sure to change them in libroot/errors.php
// as they are duplicated there, in the case that get_string was not available.
$string['unrecoverableerror'] = 'Es hat sich ein nicht behebbarer Fehler ereignet. Sie haben vielleicht einen Fehler im System entdeckt.';
$string['unrecoverableerrortitle'] = '%s - Website nicht verfügbar';
$string['parameterexception'] = 'Ein erforderlicher Parameter fehlt';
$string['accessdeniedexception'] = 'Sie haben nicht die Erlaubnis, diese Seite zu betrachten';

$string['notfound'] = 'Nicht gefunden';
$string['notfoundexception'] = 'die gewünschte Seite konnte nicht gefunden werden';

$string['accessdenied'] = 'Der Zugriff wurde verweigert';
$string['accessdeniedexception'] =  'Sie haben nicht die Erlaubnis, diese Seite zu betrachten';


$string['viewnotfoundexceptiontitle'] = 'Die Ansicht wurde nicht gefunden';
$string['viewnotfoundexceptionmessage'] = 'Sie haben versucht auf eine Ansicht zuzugreifen, die nicht existiert!';
$string['viewnotfound'] = 'Die Ansicht mit der ID %s wurde nicht gefunden';
$string['youcannotviewthisusersprofile'] = 'Sie können das Profil dieser Nutzerin/dieses Nutzers nicht aufrufen';
$string['artefactnotfoundmaybedeleted'] = "Das Artefakt mit der ID %s wurde nicht gefunden";
$string['artefactnotfound'] = 'Das Artefakt mit der ID %s wurde nicht gefunden';
$string['artefactnotinview'] = 'Das Artefakt %s ist nicht in der Ansicht %s';
$string['artefactonlyviewableinview'] = 'Artefakte dieses Typs sind nur innerhalb einer Ansicht sichtbar';
$string['notartefactowner'] = 'Sie besitzen dieses Artefakt nicht';

$string['blockinstancednotfound'] = 'Die Blockinstanz mit der ID %s wurde nicht gefunden';
$string['interactioninstancenotfound'] = 'Die Aktivität mit der ID %s wurde nicht gefunden';

$string['invalidviewaction'] = 'Ungültige Aktion die Ansicht zu kontrollieren: %s';

$string['missingparamblocktype'] = 'Versuchen Sie zunächst einen Blocktyp festzulegen';
$string['missingparamcolumn'] = 'Fehlende Spaltenkonfiguration';
$string['missingparamorder'] = 'Fehlende Festlegung der Reihenfolge';
$string['missingparamid'] = 'Fehlende ID';

$string['themenameinvalid'] = "Der Name des Theme '%s' enthält ungültige Zeichen.";

$string['timezoneidentifierunusable'] = 'PHP liefert für Ihren Webhost keinen brauchbaren Wert für die Zeitzonenkennung (%%z) - bestimmte Datenformatierungen, beispielsweise beim Leap2A-Export, können zerstört sein.  %%z ist ein PHP Datenformatierungscode. Dieses Problem tritt in der Regel aufgrund einer Einschränkung in PHP unter Windows auf.';
$string['postmaxlessthanuploadmax'] = 'Die PHP Einstellung post_max_size (%s) ist kleiner als die Einstellung upload_max_filesize (%s).  Uploads, die größer als %s sind, werden ohne Fehlermeldung fehlschlagen.  Normalerweise sollte der Wert post_max_size viel größer als der Wert upload_max_filesize sein.';
$string['smallpostmaxsize'] = 'Der PHP Einstellung post_max_size (%s) ist sehr klein.  Uploads, die größer als %s sind, werden ohne Fehlermeldung fehlschlagen.';
