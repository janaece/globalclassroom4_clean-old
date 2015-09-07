<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2008 Catalyst IT Ltd (http://www.catalyst.net.nz)
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
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Kommentar';
$string['Comment'] = 'Kommentar';
$string['Comments'] = 'Kommentare';
$string['comment'] = 'Kommentar';
$string['comments'] = 'Kommentare';

$string['Allow'] = 'Erlauben';
$string['allowcomments'] = 'Kommentare erlauben';
$string['approvalrequired'] = 'Die Kommentare sind moderiert; das bedeutet, dass Ihre Kommentare erst veröffentlicht werden, wenn der Eigentümer dies genehmigt hat.';
$string['attachfile'] = "Datei anhängen";
$string['Attachments'] = "Anhänge";
$string['cantedithasreplies'] = 'Sie können nur den aktuellsten Kommentar bearbeiten';
$string['canteditnotauthor'] = 'Sie sind nicht der Autor dieses Kommentars';
$string['cantedittooold'] = 'Sie können nur Kommentare bearbeiten, die nicht älter als %d Minuten sind';
$string['commentmadepublic'] = "Der Kommentat wurde veröffentlicht";
$string['commentdeletedauthornotification'] = "Ihr Kommentar für %s wurde gelöscht:\n%s";
$string['commentdeletednotificationsubject'] = 'Kommentar für %s wurde gelöscht';
$string['commentnotinview'] = 'Der Kommentar %d ist nicht in der Ansicht %d';
$string['commentratings'] = 'Die Funktino Kommentarbewertungen einschalten';
$string['commentremoved'] = 'Der Kommentar wurde gelöscht';
$string['commentremovedbyauthor'] = 'Der Kommentar wurde vom Autor gelöscht';
$string['commentremovedbyowner'] = 'Der Kommentar wurde vom Eigentümer gelöscht';
$string['commentremovedbyadmin'] = 'Der Kommentar wurde vom Administrator gelöscht';
$string['commentupdated'] = 'Der Kommentar wurde aktualisiert';
$string['editcomment'] = 'Kommentar bearbeiten';
$string['editcommentdescription'] = 'Sie können Ihre Kommentare aktualisieren, wenn sie weniger als %d Minuten alt sind und keine neueren Kommentare existieren.  Nach dieser Zeit können Sie den Kommentar immer noch löschen und einen neuen erfassen.';
$string['entriesimportedfromleapexport'] = 'Einträge stammen aus einem LEAP Export und konnten an keiner anderen Stelle importiert werden';
$string['feedback'] = 'Feedback';
$string['feedbackattachdirname'] = 'Kommentardateien';
$string['feedbackattachdirdesc'] = 'Dateien, die Kommentaren in Ihrem Portfolio beigefügt waren';
$string['feedbackattachmessage'] = 'Die beigefügte/n Datei/en wurden in das Verzeichnis %s kopiert';
$string['feedbackonviewbyuser'] = 'Feedback für %s von %s';
$string['feedbacksubmitted'] = 'Ein Feedback wurde eingereicht';
$string['lastcomment'] = 'Letzter Kommentar';
$string['makepublic'] = 'Veröffentlichen';
$string['makepublicnotallowed'] = 'Sie können diesen Kommentar nicht veröffentlichen';
$string['makepublicrequestsubject'] = 'Antrag einen privaten Kommentars in den Status Öffentlich zu verändern';
$string['makepublicrequestbyauthormessage'] = '%s hat beantragt ihren Kommentar zu veröffentlichen.';
$string['makepublicrequestbyownermessage'] = '%s hat beantragt Ihren Kommentar zu veröffentlichen..';
$string['makepublicrequestsent'] = '%s wurde benachrichtigt, dass ein Kommentar veröffentlicht werden soll.';
$string['messageempty'] = 'Die Nachricht enthält keinen Text. Dies ist nur erlaubt, wenn eine Datei angehängt wurde.';
$string['Moderate'] = 'Moderieren';
$string['moderatecomments'] = 'Kommentare moderieren';
$string['moderatecommentsdescription'] = 'Kommentare werden privat bleiben, bis sie von Ihnen genehmigt werden.';
$string['newfeedbacknotificationsubject'] = 'Neues Feedback für %s';
$string['placefeedback'] = 'Feedback abgeben';
$string['rating'] = 'Bewertung';
$string['reallydeletethiscomment'] = 'Wollen Sie diesen Kommentar wirklich löschen?';
$string['thiscommentisprivate'] = 'Dieser Kommentar ist privat';
$string['typefeedback'] = 'Feedback';
$string['viewcomment'] = 'Kommentar anzeigen';
$string['youhaverequestedpublic'] = 'Sie haben die Veröffentlichung dieses Kommentars beantragt.';

$string['feedbacknotificationhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>%s kommentierte %s</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">Diesen Kommentar online beantworten</a></p>
</div>";
$string['feedbacknotificationtext'] = "%s kommentierte %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Um diesen Kommentar online zu sehen und zu beantworten, bitte diesen Link aufrufen:
%s";
$string['feedbackdeletedhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>Ein Kommentar für %s wurde entfernt</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">%s</a></p>
</div>";
$string['feedbackdeletedtext'] = "En Kommentar für %s wurde entfernt
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Um %s zu online zu sehen und zu beantworten, bitte diesen Link aufrufen:
%s";
$string['artefactdefaultpermissions'] = 'Standardkommentareinstellungen';
$string['artefactdefaultpermissionsdescription'] = 'Bei ausgewähltem Artefakttyp sollen Kommentare bei der Erstellung aktiviert sein. Nutzer/innen können diese Einstellungen für individuelle Artefakte überschreiben.';
