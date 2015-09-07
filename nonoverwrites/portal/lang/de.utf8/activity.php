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
 * @subpackage notification-internal
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

$string['typemaharamessage'] = 'Systemmeldung';
$string['typeusermessage'] = 'Meldungen anderer Nutzer/innen';
$string['typefeedback'] = 'Feedback';
$string['typewatchlist'] = 'Beobachtungsliste';
$string['typeviewaccess'] = 'Neuer Ansichtenzugriff';
$string['typecontactus'] = 'Kontakt';
$string['typeobjectionable'] = 'anstößiger Inhalt';
$string['typevirusrepeat'] = 'Wiederholter Virusupload';
$string['typevirusrelease'] = 'Virus Kennung Freigabe';
$string['typeadminmessages'] = 'Administration Meldungen';
$string['typeinstitutionmessage'] = 'Meldungen einer Einrichtung';
$string['typegroupmessage'] = 'Gruppennachricht';

$string['type'] = 'Nachrichtentyp ';
$string['attime'] = 'am';
$string['prefsdescr'] = 'Wenn Sie eine der E-Mail Optionen auswählen, werden die Benachrichtigungen trotzdem bei den Nachrichten eingetragen, aber automatisch als gelesen markiert';

$string['subject'] = 'Betreff';
$string['date'] = 'Datum';
$string['read'] = 'Gelesen';
$string['unread'] = 'Ungelesen';

$string['markasread'] = 'Als gelesen markieren';
$string['selectall'] = 'Alle Nachrichten auswählen';
$string['recurseall'] = 'Markierung umdrehen';
$string['alltypes'] = 'Alle Typen';

$string['markedasread'] = 'Ihre Nachrichten wurden als gelesen markiert';
$string['failedtomarkasread'] = 'Fehler beim Versuch Ihre Nachrichten als gelesen zu markieren';

$string['deletednotifications'] = '%s Nachrichten wurden gelöscht';
$string['failedtodeletenotifications'] = 'Fehler beim Löschen der Nachrichten';

$string['stopmonitoring'] = 'Stopp Beobachtung';
$string['viewsandartefacts'] = 'Ansichten und Artefakte';
$string['views'] = 'Ansichten';
$string['artefacts'] = 'Artefakte';
$string['groups'] = 'Gruppen';
$string['monitored'] = 'Beobachtet';
$string['stopmonitoring'] = 'Stopp Beobachtung';

$string['stopmonitoringsuccess'] = 'Beobachtung erfolgreich gestoppt';
$string['stopmonitoringfailed'] = 'Fehler beim Stoppen der Beobachtung';

$string['newwatchlistmessage'] = 'Neue Aktivität auf Ihrer Beobachtungsliste';
$string['newwatchlistmessageview'] = '%s hat die Ansicht "%s" geändert';

$string['newviewsubject'] = 'Es wurde eine neue Ansicht angelegt';
$string['newviewmessage'] = '%s hat die neue Ansicht "%s" angelegt';

 
$string['newcontactusfrom'] = 'Neue Kontaktmeldung';
$string['newcontactus'] = 'Neue Kontaktmeldung';
$string['newfeedbackonview'] = 'Neues Feedback für eine Ansicht';
$string['newfeedbackonartefact'] = 'Neues Feedback für ein Artefakt';

$string['newviewaccessmessage'] = 'Sie haben die Zugriffserlaubnis auf die Ansicht "%s" von %s';
$string['newviewaccessmessagenoowner'] = 'Sie haben die Zugrifferlaubnis für die Ansicht "%s" erhalten';
$string['newviewaccesssubject'] = 'Neuer Ansichtenzugriff';

$string['viewmodified'] = 'hat die Ansicht geändert';
$string['ongroup'] = 'auf die Gruppe';
$string['ownedby'] = 'im Besitz von';

$string['objectionablecontentview'] = 'Anstößiger Inhalt in der Ansicht "%s" gemeldet von %s';
$string['objectionablecontentviewartefact'] = 'Anstößiger Inhalt in der Ansicht "%s" im Artefakt "%s" gemeldet von %s';

$string['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Anstößiger Inhalt in "%s" gemeldet von %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>Die Beschwerde bezieht sich auf: <a href="%s">%s</a></p>
<p>Gemeldet von: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewtext'] = 'Anstößiger Inhalt in "%s" gemeldet von %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Zur Anzeige der Seite diesem Link folgen:
%s
Um das Profi des Berichterstatters zu sehen, diesem Link folgen:
%s';

$string['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Anstößiger Inhalt bei "%s" in "%s" gemeldet von %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>Die Beschwerde bezieht sich auf: <a href="%s">%s</a></p>
<p>Gemeldet von: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewartefacttext'] = 'Anstößiger Inhalt bei "%s" in "%s" gemeldet von %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Zur Anzeige der Seite diesem Link folgen:
%s
Um das Profi des Berichterstatters zu sehen, diesem Link folgen:
%s';


$string['newgroupmembersubj'] = '%s ist nun Mitglied der Gruppe.';
$string['removedgroupmembersubj'] = '%s ist nicht mehr Mitglied der Gruppe';

$string['addtowatchlist'] = 'der Beobachtungsliste hinzufügen';
$string['removefromwatchlist'] = 'von der Beobachtungsliste streichen';

$string['missingparam'] = 'Der erforderliche Wert %s für den Nachrichtentyp %s ist nicht vorhanden';

$string['institutionrequestsubject'] = '%s hat die Mitgliedschaft in %s beantragt.';
$string['institutionrequestmessage'] = 'Sie können neue Mitglieder auf der Seite Einrichtung Mitglieder bestätigen:';

$string['institutioninvitesubject'] = 'Sie wurden eingeladen, der Einrichtung %s beizutreten.';
$string['institutioninvitemessage'] = 'Sie können die Mitgliedschaft für diese Einrichtung auf Ihrer Seite Einstellungen Präferenzen bestätigen:';

$string['deleteallnotifications'] = 'Alle Nachrichten löschen';
$string['reallydeleteallnotifications'] = 'Wollen Sie wirklich alle Ihre Nachrichten dieses Nachrichtentyps löschen?';

$string['viewsubmittedsubject'] = 'Ansicht wurde bei %s eingereicht';
$string['viewsubmittedmessage'] = '%s hat die Ansicht "%s" bei %s eingereicht';

$string['adminnotificationerror'] = 'Die fehlerhafte Nutzerbenachrichtigung wurde wahrscheinlich von Ihrer Server-Konfiguration verursacht.';
