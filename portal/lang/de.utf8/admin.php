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
 * @subpackage lang/de.utf8
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

// Installer
$string['installmahara'] = 'Mahara installieren';
$string['registerthismaharasite'] = 'Mahara Website registrieren';

$string['Add'] = 'Hinzufügen';
$string['all'] = 'Alle';
$string['Admins'] = 'Administratoren';
$string['Institution'] = 'Einrichtung';
$string['Lockedfields'] = 'gesperrte Felder';
$string['disabledlockedfieldhelp'] = 'Achtung: Deaktivierte Checkboxen stehen für Profilfelder, die in den Einrichtungseinstellungen für "%s" gesperrt wurden.  Diese Profilfelder wurden für die Website gesperrt und können hier nicht freigegeben werden.';
$string['defaultinstitutionquotadescription'] = 'Sie können hier das maximale Kontingent für die neuen Nutzer/innen der Einrichtung festlegen. Bestehende Nutzer-Kontingente für diese Einrichtung werden nicht verändert.';

$string['Maximum'] = 'Maximum';
$string['Members'] = 'Mitglieder';
$string['Non-members'] = 'Nicht-Mitglieder';
$string['Plugin'] = 'Plugin';
$string['jsrequiredforupgrade'] = 'Die Website muss Javascript ermöglichen, damit die Installation oder ein Upgrade durchgeführt werden können.';

$string['dbnotutf8warning'] = 'Sie arbeiten nicht mit einer UTF-8 kodierten Datenbank. Mahara speichert intern alle Daten mit der UTF-8 Kodierung. Sie können ein Upgrade probieren, aber wir empfehlen die Datenbank in die UTF-8 Kodierung zu konvertieren.';
$string['dbcollationmismatch'] = 'Eine Spalte der Datenbank benutzt eine Kollation, die nicht mit dem Datenbank Standard übereinstimmt.  Bitte stellen Sie sicher, dass alle Spalte die gleiche Kollation wie die Datenbank verwenden.';

$string['Search'] = 'Suchbegriff';
$string['Staff'] = 'Betreuer/innen';
$string['about'] = 'Über uns';
$string['accountexpiry'] = 'Der Account läuft ab';
$string['accountexpirydescription'] = 'Datum an dem das Login automatisch gesperrt wird.';
$string['accountsettings'] = 'Nutzereinstellungen';
$string['addinstitution'] = 'Einrichtung hinzufügen';
$string['addmembers'] = 'Mitglieder hinzufügen';
$string['addnewmembers'] = 'Neue Mitglieder hinzufügen';
$string['addnewmembersdescription'] = 'Neue Mitglieder hinzufügen';
$string['adduser'] = 'Nutzer/in anlegen';
$string['adduserdescription'] = 'Eine/n neue/n Nutzer/in anlegen';
$string['addusererrorinvalidpassword'] = 'Ungültiges Passwort';
$string['addusererrorinvalidusername'] = 'Falscher oder ungültiger Anmeldename';
$string['basicinformationforthisuser'] = 'Grunddaten für diese/n Nutzer/in.';
$string['clickthebuttontocreatetheuser'] = 'Klicken Sie auf die Taste, um die Nutzerin/den Nutzer anzulegen.';
$string['createuser'] = 'Nutzer/in anlegen';
$string['failedtoobtainuploadedleapfile'] = 'Fehler beim Abrufen der hochgeladenen Leap2A-Datei';
$string['failedtounzipleap2afile'] = 'Fehler beim Extrahieren der Leap2A-Datei. Kontrollieren Sie die Fehler Logdatei für weitere Informationen';
$string['fileisnotaziporxmlfile'] = 'Diese Datei scheint keine Zipdatei oder XML Datei zu sein';
$string['howdoyouwanttocreatethisuser'] = 'Wie soll die/der Nutzer/in angelegt werden?';
$string['leap2aimportfailed'] = '<p><strong>Sorry - Fehler beim Import der Leap2A-Datei.</strong></p><p>Mögliche Ursachen können die falsche Auswahl der LEAP2A Datei oder die fehlende Uterstützung dieser Leap2A-Datei durch die aktuelle Mahara Version sein. Alternativ kann ein Mahara Fehler den Import verhindert haben, obwohl die Datei gültig ist.</p><p>Bitte <a href="add.php">wiederholen Sie den Vorgang</a>. Wenn das Problem weiterhin besteht, sollten Sie im <a href="http://mahara.org/forums/">Mahara Forum</a> ein Nachricht hinterlassen und um Hilfe bitten. Halten Sie bitte ein Kopie Ihrer Datei bereit!</p>';
$string['newusercreated'] = 'Der neue Account wurde erfolgreich angelegt';
$string['noleap2axmlfiledetected'] = 'Es wurde keine leap2a.xml Datei gefunden - Bitte kontrollieren Sie Ihre Exportdatei';
$string['Or...'] = 'Oder...';
$string['userwillreceiveemailandhastochangepassword'] = 'Neue Nutzer/innen erhalten eine E-Mail mit den Zugangsdaten. Beim ersten Anmelden werden sie aufgefordert, das Passwort zu ändern.';
$string['uploadleap2afile'] = 'Leap2A-Datei hochladen';

$string['usercreationmethod'] = '1 - Methode zum Anlegen neuer Nutzer/innen';
$string['basicdetails'] = '2 - Basic Details';
$string['create'] = '3 - Anlegen';
$string['createnewuserfromscratch'] = 'Nutzer/in von Grund auf neu anlegen';
$string['addusertoinstitution'] = 'Nutzer/in einer Einrichtung zuordnen';
$string['adminauthorities'] = 'Verwaltung der Authentifikation';
$string['adminfile'] = 'Admin-Datei';
$string['adminfilespagedescription'] = 'Hier werden die Dateien hochgeladen, die in das %sLinks und Ressourcen Menü%s eingefügt werden können. Dateien im Verzeichnis Home können in das Menü für angemeldete Nutzer/innen eingefügt werden, während Dateien im Verzeichnis Public in das Verzeichnis für den öffentlichen Aufruf eingefügt werden können.';
$string['adminhome'] = 'Admin-Startseite';
$string['admininstitutions'] = 'Verwaltung der Einrichtungen';
$string['administration'] = 'Administration';
$string['adminnoauthpluginforinstitution'] = 'Bitte konfigurieren Sie ein Authentifizierungsplugin für diese Einrichtung.';
$string['adminnotifications'] = 'Admin Benachrichtigungen';
$string['adminnotificationsdescription'] = 'Übersicht, wie Administrator/innen Systembenachrichtigungen erhalten';
$string['adminpublicdirdescription'] = 'Dateien, die für nicht angemeldete Nutzer/innen zugänglich sind';
$string['adminpublicdirname'] = 'Öffentlich';

// Close site
$string['Close'] = 'Sperren';
$string['closesite'] = 'Plattform sperren';
$string['closesitedetail'] = 'Sie können die Plattform für alle Nutzer/innen mit Ausnahme der Administrator/innen sperren.  Diese Sperrung ist bei der Vorbereitung eines Datenbank-Update sinnvoll.  Lediglich die Administrator/innen können sich anmelden, bis die Plattform wieder geöffnet wird oder ein Upgrade erfolgreich abgeschlossen ist.';
$string['Open'] = 'Öffnen';
$string['reopensite'] = 'Plattform öffnen';
$string['reopensitedetail'] = 'Ihre Plattform ist gesperrt. Administrator/innen können angemeldet bleiben, bis ein Update erkannt wird.';

// Statistics
$string['siteinformation'] = 'Website Information';
$string['viewfullsitestatistics'] = 'Anzeige der kompletten Website Statistiken';
$string['sitestatistics'] = 'Website Statistiken';
$string['siteinstalled'] = 'Installation am';
$string['databasesize'] = 'Datenbankgröße';
$string['diskusage'] = 'Festplattenbelegung';
$string['maharaversion'] = 'Mahara Version';
$string['activeusers'] = 'Aktive Nutzer/innen';
$string['loggedinsince'] = '%s heute, %s seit %s, %s insgesamt';
$string['groupmemberaverage'] = 'Im Schnitt ist jeder Nutzer in %s Gruppen';
$string['viewsperuser'] = 'Die Nutzer/innen mit Ansichten haben jeder durchschnittlich %s Ansichten';
$string['Cron'] = 'Cron';
$string['runningnormally'] = 'läuft normal';
$string['cronnotrunning'] = 'Der Cronjob wird nicht ausgeführt.<br>Die <a href="http://wiki.mahara.org/System_Administrator\'s_Guide/Installing_Mahara"> Installationsanleitung</a> bietet Ihnen eine Anleitung zum Einrichten des Cronjob.';
$string['Loggedin'] = 'Logged in';
$string['youraverageuser'] = 'Die/der durchschnittliche Nutzer/in ...';
$string['statsmaxfriends'] = 'hat %s Kontakte (Spitzenreiter/in ist <a href="%s">%s</a> mit %d)';
$string['statsnofriends'] = 'hat 0 Kontakte :(';
$string['statsmaxviews'] = 'hat %s Ansichten angelegt (Spitzenreiter/in ist <a href="%s">%s</a> mit %d)';
$string['statsnoviews'] = 'hat 0 Ansichten :(';
$string['statsmaxgroups'] = 'ist in %s Gruppen (Spitzenreiter/in ist <a href="%s">%s</a> mit %d)';
$string['statsnogroups'] = 'ist in 0 Gruppen :(';
$string['statsmaxquotaused'] = 'benutzt ungefähr %s des Kontingents (Spitzenreiter/in ist <a href="%s">%s</a> mit %s)';
$string['groupcountsbytype'] = 'Anzahl der Gruppen sortiert nach dem Gruppentyp';
$string['groupcountsbyjointype'] = 'Anzahl der Gruppen sortiert nach dem Zugriffstyp';
$string['blockcountsbytype'] = 'Am häufgsten verwendete Blöcke in den Portfolioansichten';
$string['uptodate'] = 'aktuell';
$string['latestversionis'] = 'letzte Version ist <a href="%s">%s</a>';
$string['viewsbytype'] = 'Ansichten sortiert nach dem Typ';
$string['userstatstabletitle'] = 'Tägliche Nutzer/innen-Statistik';
$string['groupstatstabletitle'] = 'Größte Gruppe';
$string['viewstatstabletitle'] = 'Die beliebtesten Ansichten';

// Site options
$string['adminsonly'] = 'Nur Administrator/innen';
$string['adminsandstaffonly'] = 'Nur Administrator/innen und Betreuer/innen';
$string['advanced'] = 'Erweitert';
$string['adminusers'] = 'Administrator/innen';
$string['adminusersdescription'] = 'Nutzer/innen mit Website Adminrechten ausstatten';
$string['adminuserspagedescription'] = '<p>Hier können Sie auswählen, welche Nutzer/innen Administrator/innen für die Website sein sollen. Die aktuellen Administrator/innen werden rechts aufgelistet, die möglichen Administrator/innen sind auf der linken Seite aufgeführt.</p><p>Die Website muss zumindest eine Administratorin/einen Administrator haben.</p>';
$string['adminusersupdated'] = 'Die Liste der Admininistrator/innen wurde aktualisiert';
$string['agreelicense'] = 'Ich stimme zu';
$string['allowpublicprofiles'] = 'Öffentliche Profile zulassen';
$string['allowpublicprofilesdescription'] = 'Bei der Option Ja können die Nutzer/innen Profilansichten anlegen, die auch nicht eingeloggten Nutzer/innen zugänglich sind, was sonst eigentlich nur angemeldeten Nutzer/innen möglich ist';
$string['allowpublicviews'] = 'Öffentliche Ansichten zulassen';
$string['allowpublicviewsdescription'] = 'Bei der Option Ja können die Nutzer/innen Ansichten anlegen, die auch nicht eingeloggten Nutzer/innen zugänglich sind.';
$string['allowinstitutionpublicviews'] = 'Für die Einrichtung Öffentliche Ansichten zulassen';
$string['allowinstitutionpublicviewsdescription'] = 'Bei der Option Ja können die Nutzer/innen dieser Einrichtung Ansichten anlegen, die auch nicht eingeloggten Nutzer/innen zugänglich sind.';
$string['anonymouscomments'] = 'Anonyme Kommentare';
$string['anonymouscommentsdescription'] = 'Wenn diese Option aktiviert ist, können für öffentliche Ansichten oder Ansichten mit geheimer URL Kommentare abgegeben werden.';
$string['antispam'] = 'Anti-Spam-Sicherheit';
$string['antispamdescription'] = 'Die Stufe der Anti-Spam Sicherheit für öffentlich sichtbare Formulare';
$string['Everyone'] = 'Jede/r';
$string['generatesitemap'] = 'Sitemap generieren';
$string['generatesitemapdescription'] = 'Es werden Sitemap Dateien aus den öffentlich zugänglichen Ansichten, Gruppen und Forenbeiträgen generiert';
$string['homepageinfo'] = 'Anzeige der Homepage Informationen';
$string['homepageinfodescription'] = 'Wenn die Checkbox markiert, werden Informationen über Mahara und die Einsatzmöglichkeiten auf der Mahara Homepage angezeigt. Angemeldete Nutzer/innen können die Anzeige ausschalten.';
$string['authenticatedby'] = 'Authentifizierungsmethode';
$string['authenticatedbydescription'] = 'Wie können sich die Mitglieder authentifizieren';
$string['authplugin'] = 'Authentifizierungsplugin';
$string['badmenuitemtype'] = 'Unbekannter Elementtyp';
$string['becomeadminagain'] = 'wieder %s werden';
$string['changeinstitution'] = 'Wechsel der Einrichtung';
$string['component'] = 'Komponente oder Plugin';
$string['configextensions'] = 'Erweiterungen (Plugins)';
$string['configsite'] = 'Website Konfiguration';
$string['configureauthplugin'] = 'Sie müssen ein Authentifizierungsplugin installieren bevor Sie Nutzer/innen anlegen können.';
$string['configusers'] = 'Nutzer/innen';
$string['groups'] = 'Gruppen';
$string['managegroups'] = 'Gruppen verwalten';
$string['Extensions']   = 'Erweiterungen';
$string['confirm'] = 'Bestätigen';
$string['confirmdeletemenuitem'] = 'Wollen Sie diesen Eintrag wirklich löschen?';
$string['confirmdeleteuser'] = 'Soll die/der Nutzer/in wirklich gelöscht werden?';
$string['userdeletedsuccessfully'] = 'Nutzer/in wurde erfolgreich gelöscht';
$string['confirmdeleteusers'] = 'Wollen Sie die ausgewählten Nutzer/innen wirklich löschen?';
$string['confirmremoveuserfrominstitution'] = 'Soll diese/r Nutzer/in wirklich aus dieser Einrichtung gelöscht werden?';
$string['continue'] = 'Weiter';
$string['copyright'] = 'Copyright &copy; 2006 onwards, <a href="http://wiki.mahara.org/Contributors">Catalyst IT Ltd and others</a>';
$string['coredata'] = 'Kerndaten';
$string['coredatasuccess'] = 'Kerndaten erfolgreich installiert';
$string['dbnotutf8'] = 'Sie benützen keine UTF-8 Datenbank.  Mahara speichert intern alle Daten im UTF-8 Format. Bitte löschen Sie die Datenbank und legen Sie erneut mit der UTF-8 Zeichenkodierung an';
$string['csvfile'] = 'CSV Datei';
$string['csvfiledescription'] = 'Die Datei mit den Nutzerdaten';
$string['csverroremptyfile'] = 'die CSV Datei enthält keine Daten.';
$string['invalidfilename'] = 'Die Datei "%s" existiert nicht.';
$string['uploadcsverrorinvalidfieldname'] = 'Der Feldname "%s" is ungültig oder Sie benutzen mehr Felder als in der Kopfzeile definiert sind';
//--
$string['uploadcsverrorrequiredfieldnotspecified'] = 'Das erforderliche Feld "%s" wurde in der Formatzeile nicht definiert';
$string['uploadcsverrornorecords'] = 'Die Datei scheint keine Datensätze zu enthalten (obwohl der Kopf in Ordnung ist)';
$string['uploadcsverrorunspecifiedproblem'] = 'Die Datensätze Ihrer CSV Datei konnten aus irgendeinem Grund nicht angefügt werden. Wenn Ihr Datei das richtige Format hat ist dies vielleicht ein Bug und Sie sollten hier <a href="https://eduforge.org/tracker/?func=add&group_id=176&atid=739">einen Bugreport einreichen</a>, die CSV Datei anhängen (bitte nicht vergessen, Passwörter zu entfernen) und, wenn möglich, die Fehler Log Datei';
//--
$string['currentadmins'] = 'Aktuelle Admins';
$string['currentmembers'] = 'aktuelle Mitglider';
$string['currentstaff'] = 'aktuelle Betreuer/innen';
$string['declinerequests'] = 'Anträge ablehnen';
$string['defaultaccountinactiveexpire'] = 'Standardmäßige Nutzer/innen Inaktivitätzeit';
$string['defaultaccountinactiveexpiredescription'] = 'Wie lange bleibt ein Account aktiv, wenn sich der/die Nutzer/in nicht einloggt';
$string['defaultaccountinactivewarn'] = 'Warnzeit bei Inaktivität/Ablauf';
$string['defaultaccountinactivewarndescription'] = 'Die Zeit ehe ein/e Nutzer/in Account abläuft oder wegen Inaktivität angemahnt wird und zuvor eine Benachrichtigung verschickt werden soll';
$string['defaultaccountlifetime'] = 'Standardmäßige Account Laufzeit';
$string['defaultaccountlifetimedescription'] = 'Wie lange sind Nutzer/innen Accounts verfügbar, bevor sie ablaufen';
$string['defaultmembershipperiod'] = 'Standardmäßige Dauer der Mitgliedschaft';
$string['defaultmembershipperioddescription'] = 'Wie lange sollen neue Mitglieder mit der Einrichtung verbunden bleiben';
$string['showonlineusers'] = 'Nutzer/innen online anzeigen';
$string['showonlineusersdesc'] = 'Die Online-Nutzer/innen dieser Institution zeigen.  Bei unterschiedlichen Einstellungen wird die weitestgehende Einstellung verwendet.';
$string['deletefailed'] = 'Fehler beim Löschen eines Elements';
$string['deleteinstitution'] = 'Einrichtung löschen';
$string['deleteinstitutionconfirm'] = 'Wollen Sie diese Einrichtung wirklich löschen?';
$string['institutiononly'] = 'Nur Einrichtungen';

// Suspended Users
$string['deleteuser'] = 'Nutzer/in löschen';
$string['deleteusers'] = 'Nutzer/innen löschen';
$string['usereditdescription'] = 'Hier können Sie die Details für den Nutzerzugang einsehen und verändern. Weiter unten, können Sie diesen Nutzerzugang auch <a href="#suspend">sperren oder löschen</a>, oder die Einstellungen für diese/n Nutzer/in in <a href="#institutions"> in Einrichtungen anpassen</a>.';
$string['usereditwarning'] = 'Achtung: Das Sichern der Nutzereinstellungen verursacht das Abmelden der Nutzerin/des Nutzers, wenn sie/er gerade angemeldet ist';
$string['suspenddeleteuser'] = 'Sperren/Löschen eines Nutzerzugangs';
$string['suspenddeleteuserdescription'] = 'Hier können Sie einen Nutzerzugang sperren oder endgültig löschen. Gesperrte Nutzer/innen können sich nicht mehr anmelden bis der Zugang wieder frei gegeben wird. Bitte beachten Sie, dass eine Sperrung wieder aufgehoben werden kann, die Löschung des Nutzerzugangs aber <strong>nicht</strong> zurückgenommen werden kann.';
$string['deleteusernote'] = 'Bitte beachten Sie, dass dieser Vorgang <strong>nicht</strong> zurückgenommen werden kann.';
$string['youcannotadministerthisuser'] = 'Sie können nicht die Verwaltung für diese/n Nutzer/in übernehmen';
$string['usernamechangenotallowed'] = 'Die gewählte Authentifizierungsmethode erlaubt keine Änderung des Nutzernamens.';
$string['passwordchangenotallowed'] = 'Die gewählte Authentifizierungsmethode erlaubt keine Änderung des Passwortes.';

$string['deletingmenuitem'] = 'Löschen eines Elements';
$string['discardpageedits'] = 'Wollen Sie die Änderungen für diese Seite wirklich verwerfen?';
$string['editadmins'] = 'Bearbeitung Administratoren';
$string['editmembers'] = 'Bearbeitung Mitglieder';
$string['editmenus'] = 'Bearbeitung der Links und Quellen';
$string['editsitecontent'] = 'Bearbeitung des Seiteninhalts';
$string['editsitemenu'] = 'Bearbeitung Menü Websitelinks und Ressourcen';
$string['editsitepages'] = 'Bearbeitung der Website-Inhalte';
$string['editsitepagesdescription'] = 'Bearbeitung der Website-Inhalte (Startseite, Nutzerordnung, Datenschutzerklärung, Über, Kontakt)';
$string['editsitepagespagedescription'] = 'Auf dieser Seite können Sie die Inhalte verschiedener Seiten der Plattform bearbeiten, zum Beispiel die Startseite (getrennt für angemeldete und öffentliche Aufrufe) und die Texte der Fußzeile.';
$string['editstaff'] = 'Bearbeitung Betreuer/innen';
$string['emailusersaboutnewaccount'] = 'Sollen die Nutzer/innen zur Information ein E-Mail erhalten?';
$string['emailusersaboutnewaccountdescription'] = 'Hier wird festgelegt, ob die neuen Nutzer/innen mit einer E-Mail über den neu angelegen Zugang informiert werden sollen';
$string['embeddedcontent'] = 'eingebauter Inhalt';
$string['embeddedcontentdescription'] = 'Wenn die Nutzer/innen Videos oder anderes Material von außerhalb in die Portfolios einbinden dürfen, können hier die vertrauenswürdigen Seiten aufgeführt werden.';
$string['enablenetworking'] = 'Netzwerk aktivieren';
$string['enablenetworkingdescription'] = 'Diese Option erlaubt Ihrem Mahara Server den Austausch mit Servern, die Moodle oder andere Applikationen benutzen.';
$string['errors'] = 'Fehler';
$string['errorwhilesuspending'] = 'Beim Versuch zu sperren ist ein Fehler aufgetreten';
$string['exportingnotsupportedyet'] = 'Der Export der Nutzerprofile wird momentan noch nicht unterstützt';
$string['exportuserprofiles'] = 'Nutzerprofil exportieren';
$string['externallink'] = 'Externer Link';
$string['editlinksandresources'] = 'Bearbeitung Links und Ressourcen';
$string['linksandresourcesmenu'] = 'Links und Ressourcen Menü';
$string['filequota'] = 'Standard Kontingent (MB)';
$string['filequotadescription'] = 'Speicherplatz, der den Nutzer/innn als Kontingent im Dateibereich zur Verfügung steht.';
$string['forcepasswordchange'] = 'Beim nächsten Anmelden eine Passwortänderung erzwingen';
$string['forcepasswordchangedescription'] = 'Die Nutzer/innen werden beim nächsten Einloggen auf eine Seite zur Passwortänderung geführt.';
$string['forceuserstochangepassword'] = 'Passwortänderung erzwingen?';
$string['forceuserstochangepassworddescription'] = 'Hier wird festgelegt, ob die Nutzer/innen bei der 1. Anmeldung ihr Passwort zwingend ändern müssen';
$string['fromversion'] = 'von Version';
$string['home'] = 'Startseite';
$string['htmlfilter_YouTube'] = 'Eingebauter Code, der von YouTube kopiert wurde, darf in HTML Code der Nutzer/innen benutzt werden.';
$string['information'] = 'Information';
$string['install'] = 'Installieren';
$string['installation'] = 'Installation';
$string['installed'] = 'Installiert';
$string['installsuccess'] = 'Version erfolgreich installiert';
$string['institutionaddedsuccessfully2'] = 'Einrichtung erfolgreich angelegt';
$string['institutionadmin'] = 'Administrator/in für die Einrichtung';
$string['institutionadmindescription'] = 'Diese Option erlaubt, dass die Nutzerin/der Nutzer alle Mitglieder der Einrichtung verwalten kann.';
$string['institutionadministration'] = 'Administration für die Einrichtung';
$string['institutionadministrator'] = 'Administrator/in für die Einrichtung';
$string['institutionadmins'] = 'Administrator/innen für die Einrichtung';
$string['institutionadminsdescription'] = 'Nutzer/innen mit Einrichtungsadministratorrechten ausstatten';
$string['institutionadminuserspagedescription'] = 'Hier können Sie auswählen, welche Nutzer/innen Administrator/innen für die Einrichtung sein sollen. Die aktuellen Administrator/innen werden rechts aufgelistet, die möglichen Administrator/innen sind auf der linken Seite aufgeführt.';
$string['institutionauth'] = 'Einrichtung Authorities';
$string['institutiondeletedsuccessfully'] = 'Einrichtung erfolgreich gelöscht';
$string['institutiondetails'] = 'Einrichtung Einzelheiten';
$string['institutiondisplayname'] = 'Einrichtung Anzeigename';
$string['institutionfiles'] = 'Einrichtung Dateien';
$string['institutionfilesdescription'] = 'Hochladen und Verwalten von Dateien für die Verwendung in den Ansichten einer Einrichtung';
$string['institutionmembers'] = 'Mitglieder der Einrichtung';
$string['institutionmembersdescription'] = 'Nutzer/innen mit einer Einrichtung verbinden';
$string['institutionmemberspagedescription'] = 'Diese Seite zeigt alle Nutzer/innen, die eine Mitgliedschaft in Ihrer Einrichtung beantragt haben oder eingeschriebene Mitglieder sind.  Sie können die Mitglieder verwalten und neue Nutzer/innen einladen.';
$string['institutionname'] = 'Name der Einrichtung';
$string['institutionnamealreadytaken'] = 'Der Name der Einrichtung ist schon vergeben';
$string['institution']   = 'Einrichtung';
$string['institutions'] = 'Einrichtungen';
$string['institutionsdescription'] = 'Einrichtung und Verwaltung von Einrichtungen';
$string['institutionsettings'] = 'Einstellungen der Einrichtung';
$string['institutionsettingsdescription'] = 'Hier können Sie alle Einstellungen vornehmen, die die Mitgliedschaft der Nutzer/innen in einer Einrichtung betreffen.';
$string['institutionstaff'] = 'Betreuer/innen für die Einrichtung';
$string['institutionstaffdescription'] = 'Nutzer/innen mit Betreuerrechten ausstatten';
$string['institutionstaffuserspagedescription'] = 'Hier können Sie auswählen, welche Nutzer/innen Betreuer/innen für die Einrichtung sein sollen. Die aktuellen Betreuer/innen werden rechts aufgelistet, die möglichen Betreuer/innen sind auf der linken Seite aufgeführt.';
$string['institutionstudentiddescription'] = 'Ein optionale Nutzer-ID für die interne Verwaltung.  Dieses Feld können die Nutzer/innen nicht bearbeiten.';
$string['institutionupdatedsuccessfully'] = 'Einrichtung erfolgreich aktualisiert';
$string['institutionuserserrortoomanyinvites'] = 'Ihre Einladungen wurden nicht verschickt.  Die Höchstzahl der erlaubten Mitgliedschaften und die ausstehenden Einladungen darf die Höchstzahl der erlaubten Mitgliedschaften nicht überschreiten.  Versuchen Sie weniger Nutzer/innen einzuladen oder bestehende Mitgliedschaften aufzulösen, der Website Administrator kann die Höchstzahl der Mitgliedschaften hochsetzen.';
$string['institutionuserserrortoomanyusers'] = 'Die Nutzer wurden nicht hinzugefügt.  Die Höchstzahl der erlaubten Mitgliedschaften darf nicht überschritten werden.  Sie können versuchen, weniger Mitglieder hinzuzufügen oder bestehende Mitgliedschaften aufzulösen, die Website Administrator/innen können die Höchstzahl der Mitgliedschaften hochsetzen.';
$string['institutionusersinstructionsmembers'] = 'Die Liste auf der linke Seite zeigt alle Nutzer/innen Ihrer Einrichtung.  Mit der Suchenoption kann die Anzahl der angezeigten Nutzer/innen eingeschränkt werden.  Nutzer/innen werden aus einer Einrichtung gelöscht, indem zuerst die betroffenen Nutzer/innen ausgewählt werden und dann mit dem "Pfeil-rechts-Knopf" in das Feld auf der rechten Seite verschoben werden. Mit dem "Nutzer/in löschen" Knopf werden die Mitgliedschaften der ausgewählten Nutzer/innen beendet.  Die Nutzer/innen auf der linken Seite bleiben in der Einrichtung.';
$string['institutionusersinstructionsnonmembers'] = 'Die Liste auf der linke Seite zeigt alle Nutzer/innen, die noch keine Mitgliedschaft in Ihrer Einrichtung besitzen. Mit der Suchenoption kann die Anzahl der angezeigten Nutzer/innen eingeschränkt werden.  Nutzer/innen werden eingeladen, indem zuerst die betroffenen Nutzer/innen ausgewählt werden und dann mit dem "Pfeil-rechts-Knopf" in das Feld auf der rechten Seite verschoben werden.  Mit dem "Nutzer/in einladen" Knopf werden die Einladungen an die Nutzer/innen der rechten Seite verschickt.  Diese Nutzer/innen werden aber erst dann mit der Einrichtung verbunden, wenn sie die Einladung annehmen.';
$string['institutionusersinstructionsrequesters'] = 'Die Liste auf der linke Seite zeigt alle Nutzer/innen, die eine Mitgliedschaft für Ihre Einrichtung beantragt haben.  Mit der Suchenoption kann die Anzahl der angezeigten Nutzer/innen eingeschränkt werden.  Nutzer/innen werden einer Einrichtung zugeordnet oder eine Mitgliedschaftsanfrage wird abgelehnt, indem zuerst die betroffenen Nutzer/innen ausgewählt werden und dann mit dem "Pfeil-rechts-Knopf" in das Feld auf der rechten Seite verschoben werden.  Der "Mitglieder hinzufügen" Knopf verbindet die ausgewählten Nutzer/innen mit der Einrichtung.  Der "Anträge ablehnen" Knopf löscht die abgelehnten Mitgliedschaftsanträge.';
$string['institutionusersmembers'] = 'Personen, die bereits Mitglied der Einrichtung sind';
$string['institutionusersnonmembers'] = 'Personen, die bisher keine Mitgliedschaft beantragt haben';
$string['institutionusersrequesters'] = 'Personen, die eine Mitgliedschaft in der Einrichtung beantragt haben';
$string['institutionusersupdated_addUserAsMember'] = 'Nutzer/innen angelegt';
$string['institutionusersupdated_declineRequestFromUser'] = 'Anträge abgelehnt';
$string['institutionusersupdated_inviteUser'] = 'Einladungen wurden verschickt';
$string['institutionusersupdated_removeMembers'] = 'Nutzer/innen entfernt';
$string['institutionviews'] = 'Einrichtung Ansichten';
$string['institutionviewsdescription'] = 'Anlegen und verwalten von Ansichten und Ansichten-Templates für eine Einrichtung';
$string['invitationsent'] = 'Einladung wurde geschickt';
$string['invitedby'] = 'Eingeladen durch';
$string['inviteusers'] = 'Nutzer/innen einladen';
$string['inviteuserstojoin'] = 'Nutzer/innen in die Einrichtung einladen';
$string['langchoosereport'] = 'Auswahl des Berichts, der angezeigt werden soll';
$string['langmissingstrings'] = 'fehlende Strings';
$string['langreports'] = 'Sprachprotokolle';
$string['language'] = 'Sprache';
$string['none'] = 'Keine';
$string['onlineuserssideblockmaxusers'] = 'Online NUtzer/innen Limit';
$string['onlineuserssideblockmaxusersdescription'] = 'Die maximale Anzahl der Nutzer/innen, die im Nutzer/innen Online Block angezeigt werden soll.';
$string['country'] = 'Land';
$string['languagetranslation'] = 'Sprachübersetzungen';
$string['allowmobileuploads'] = 'Uploads via Handy erlauben';
$string['allowmobileuploadsdescription'] = 'Wenn diese Option gesetzt ist, können die Nutzer/innen ein Sicherheitswort erfassen - Dateien die mit diesem Sicherheitswort hochgeladen werden, werden als Artefakt in Mahara gespeichert.';
$string['linkedto'] = 'verlinkt zu';
$string['menu'] = 'Menü';
$string['menus'] = 'Menüs';
$string['menusdescription'] = 'Verwaltung der Links und Dateien innerhalb des Menüs Websitelinks und Ressourcen';
$string['linksandresourcesmenupagedescription'] = 'Die Nutzer können das Links und Ressourcen Menü auf fast allen Seiten sehen. Hier können Links auf andere Websites und Dateien, die in den %sAdmin Dateien%s Bereich hochgeladen wurden, eingefügt werden.';
$string['loadingmenuitems'] = 'Laden der Elementeinträge';
$string['loadingpagecontent'] = 'Laden des Website Inhalte';
$string['loadmenuitemsfailed'] = 'Fehler beim Laden der Elementeinträge';
$string['loadsitepagefailed'] = 'Fehler beim Laden der Website Inhalte';
$string['loggedinmenu'] = 'Logged in Websitelinks und Quellen';
$string['loggedouthome'] = 'Logged Out Startseite';
$string['loggedoutmenu'] = 'Public Websitelinks und Quellen';
$string['loginasdenied'] = 'Der Versuch, sich als andere Nutzerin/anderer Nutzer einzuloggen, ist wegen der fehlenden Berechtigung fehlgeschlagen';
$string['loginasoverridepasswordchange'] = 'Wenn Sie sich als anderere Nutzerin/anderer Nutzer anmelden, können Sie %strotzdem einloggen%s wählen, indem Sie den Bildschirm zur Passwortänderung ignorieren.';
$string['loginasrestorenodata'] = 'Das System findet keine Nutzerdaten zum Zurücksetzen';
$string['loginastwice'] = 'Der Versuch, sich als andere Nutzerin/anderer Nutzer einzuloggen, ist fehlgeschlagen, weil bereits eine andere Nutzerrolle angenommen wurde';

// Login as
$string['loginas'] = 'Einloggen als';
$string['loginasuser'] = 'Einloggen als %s';

$string['manageinstitutions'] = 'Einrichtungen';
$string['maxuseraccounts'] = 'Höchstzahl der erlaubten Accounts';
$string['maxuseraccountsdescription'] = 'Die Höchstzahl der Accounts, die mit der Einrichtung verbunden werden können. Für eine unbegrenzte Mitgliederanzahl, dieses Feld leer lassen.';
$string['institutionmaxusersexceeded'] = 'Die Höchstzahl der Accounts für diese Einrichtung ist erreicht, Sie müssen die Höchstzahl anpassen bevor diese/r Nutzer/in angelegt werden kann.';
$string['membershipexpiry'] = 'die Mitgliedschaft endet am';
$string['membershipexpirydescription'] = 'Datum an dem die Mitgliedschaft in der Einrichtung automatisch endet.';
$string['menuitemdeleted'] = 'Element gelöscht';
$string['menuitemsaved'] = 'Element gesichert';
$string['menuitemsloaded'] = 'Elemente geladen';
$string['name'] = 'Name';
$string['networking'] = 'Netzwerk';
$string['networkingdescription'] = 'Netzwerkoptionen für Mahara konfigurieren';
$string['networkingdisabled'] = 'Netzwerk wurde deaktiviert.';
$string['networkingenabled'] = 'Netzwerk wurde aktiviert.';
$string['networkingextensionsmissing'] = 'Entschuldigung, Sie können das Mahara Netzwerk nicht installieren, weil Ihrer PHP Installation eine oder mehrere zusätzliche Erweiterungen benötigt:';
$string['networkingpagedescription'] = 'Mahara Netzwerkeinstellungen erlauben die Kommunikation zwischen Mahara oder Moodle Plattformen, die auf dem gleichen oder einem anderen Host installiert sind. Wenn Networking gestattet ist, kann Mahara so eingestellt werden, dass Single-Sign-On (SSO) für die Nutzer/innen gestattet ist, die sich bei Moodle oder Mahara anmelden.';
$string['networkingunchanged'] = 'Die Netzwerkeinstellungen wurden nicht geändert';
$string['newuseremailnotsent'] = 'Fehler beim Senden der Willkommens E-Mail an die/den neue/n Nutzer/in.';
$string['noadminfiles'] = 'Es sind keine Admindateien verfügbar';
$string['noauthpluginforinstitution'] = 'Die Administrator/innen haben für diese Einrichtung kein Authentifizierungsplugin konfiguriert.';
$string['noinstitutions'] = 'Keine Einrichtungen';
$string['noinstitutionsdescription'] = 'Wenn Sie Nutzer/innen mit einer Einrichtung verbinden wollen, sollten Sie zunächst eine Einrichtung anlegen.';
$string['nositefiles'] = 'Es sind keine Website Dateien verfügbar.';
$string['footermenu']          = 'Fußzeilenmenü';
$string['footermenudescription'] = 'Bearbeitung der Fußzeilemenüs.';
$string['footerupdated']       = 'Fußzeile aktualisiert';
$string['notadminforinstitution'] = 'Sie haben keine Administratorrechte für diese Einrichtung';
$string['nothingtoupgrade'] = 'Es ist kein Upgrade nötig';
$string['notificationssaved'] = 'Die Einstellungen für die Benachrichtigungen wurden gespeichert';
$string['notinstalled'] = 'Nicht installiert';
$string['noupgrades'] = 'Es ist kein Upgrade nötig! Ihr System ist ganz aktuell!';
$string['nousersselected'] = 'Es wurden keine Nutzer/innen ausgewählt';
$string['nousersupdated'] = 'Es wurden keine Nutzer/innen aktualisiert';
$string['onlyshowingfirst'] = 'Die Anzeige zeigt die ersten';
$string['pagename'] = 'Seiten Name';
$string['pagesaved'] = 'Seite gesichert';
$string['pagetext'] = 'Seiten Text';
$string['pathtoclam'] = 'Pfad zu Clam';
$string['pathtoclamdescription'] = 'Der Dateisystempfad zum Finden von Clamscan oder Clamdscan';
$string['registerterms'] = 'Nutzungsordnung';
$string['registertermsdescription'] = "Diese Option zwingt die Nutzer/innen zum Akzeptieren der Nutzungsordnung bevor sich diese registrieren können.  Sie sollten die Nutzungsordnung bearbeiten, bevor Sie diese Option aktivieren.";
$string['remoteavatars'] = 'Anzeige der Remote Avatarbilder';
$string['remoteavatarsdescription'] = 'Wenn diese Option aktiviert ist, wird der <a href="http://www.gravatar.com">Gravatar</a> Service zur Anzeige der standardmäßigen Nutzerprofilbilder verwendet.';
$string['performinginstallation'] = 'Installation wird durchgeführt ...';
$string['performingupgrades'] = 'Upgrades werden durchgeführt ...';
$string['pluginadmin'] = 'Erweiterungen Verwaltung';
$string['pluginadmindescription'] = 'Installation und Verwaltung von Erweiterungen (Plugins)';
$string['missingplugin'] = 'Ein installiertes Plugin (%s) konnte nicht gefunden werden';
$string['installedpluginsmissing'] = 'Die folgenden Plugins sind installiert, konnten aber nicht mehr gefunden werden';
$string['ensurepluginsexist'] = 'bitte stellen Sie sicher, dass alle installierten Plugins hier %s verfügbar sind und vom Webserver gelesen werden können.';

$string['htmlfilters'] = 'HTML Filter';
$string['htmlfiltersdescription'] = 'Neue Filter für HTML Purifier aktivieren';
$string['newfiltersdescription'] = 'Wenn Sie eine Gruppe HTML Filter heruntergeladen haben, könnnen Sie diese installieren, indem Sie die Datei im Verzeichnis %s entpacken und anschließend den Schaltknopf klicken';
$string['filtersinstalled'] = 'Filter wurden installiert.';
$string['nofiltersinstalled'] = 'Es wurde keine HTML Filter installiert.';

// sanity check warnings
$string['warnings'] = 'Achtung';

// Group management
$string['groupcategories'] = 'Gruppenkategorien';
$string['allowgroupcategories'] = 'Gruppenkategorien erlauben';
$string['enablegroupcategories'] = 'Gruppenkategorien aktivieren';
$string['addcategories'] = 'Gruppenkategorien hinzufügen';
$string['allowgroupcategoriesdescription'] = 'Wenn diese Option gesetzt ist, können die Administrator/innen eigene Gruppenkategorien zur Einteilung der Nutzer/innen anlegen';
$string['groupoptionsset'] = 'Die Gruppenoptionen wurden aktualisiert.';
$string['groupcategorydeleted'] = 'Kategorie wurde gelöscht';
$string['confirmdeletecategory'] = 'Wollen Sie diese Kategorie wirklich löschen?';
$string['groupcategoriespagedescription'] = 'Die hier aufgeführten Kategorien können den Gruppen während der Anlage zugewiesen werden. Dies ermöglicht später Gruppen mit bestimmten Filtern zu durchsuchen.';
$string['groupadminsforgroup'] = "Gruppenadministrator/innen für '%s'";
$string['potentialadmins'] = 'Mögliche Administrator/innen';
$string['currentadmins'] = 'Aktuelle Administrator/innen';
$string['groupadminsupdated'] = 'Die Gruppenadministrator/innen wurden aktualisiert';

// Register your Mahara
$string['Field'] = 'Feld';
$string['Value'] = 'Wert';
$string['datathatwillbesent'] = 'Übersicht der gesendeten Daten';
$string['sendweeklyupdates'] = 'Wöchentliche Systemberichte senden?';
$string['sendweeklyupdatesdescription'] = 'Wenn die Option gesetzt ist, sendet die Plattform wöchentliche Systemberichte an mahara.org, die einige statistische Informationen über die Plattform enthalten';
$string['Register'] = 'Registrieren';
$string['registrationfailedtrylater'] = 'Bei der Registrierung ist ein Fehler aufgetreten: %s. Bitte versuchen Sie es später noch einmal.';
$string['registrationsuccessfulthanksforregistering'] = 'Die Registrierung war erfolgreich - Vielen Dank!';
$string['registeryourmaharasite'] = 'Registrierung der Mahara Plattform';
$string['registeryourmaharasitesummary'] = '
<p>Sie können Ihre Mahara Plattform bei <a href="http://mahara.org/">mahara.org</a> registrieren. Die Registrierung ist kostenlos, und hilft einen Überblick über die weltweiten Mahara Installationen zu erhalten. Nach der Registrierung wird diese Notiz ausgeblendet.</p>
<p>Die Seite <strong><a href="%sadmin/registersite.php">Registrierung</a></strong> zeigt eine Vorschau der übermittelten Daten.</p>';
$string['registeryourmaharasitedetail'] = '
<p>Sie können Ihre Mahara Plattform bei <a href="http://mahara.org/">mahara.org</a> registrieren. Die Registrierung ist kostenlos, und hilft einen Überblick über die weltweiten Mahara Installationen zu erhalten.</p>
<p>Wenn die Option &quot;Wöchentliche Systemberichte senden&quot; markiert wird, sendet die Mahara Plattform wöchentliche Systemberichte über die aktuelle Installation an mahara.org</p>
<p>Nach der Registrierung wird diese Notiz ausgeblendet. Sie können die aktuelle Einstellung jederzeit auf der <a href="%sadmin/site/options.php">Website Optionen</a> Seite ändern.</p>';
$string['siteregistered'] = 'Ihre Website wurde registriert. Hier können Sie die <a href="%sadmin/site/options.php">Einstellungen</a> für die wöchentlich verschickten Berichte ändern.</p>';

$string['potentialadmins'] = 'Mögliche Administrator/innen';
$string['potentialstaff'] = 'Mögliche Betreuer/innen';
$string['privacy'] = 'Datenschutzerklärung';
$string['promiscuousmode'] = 'Automatische Registrierung für alle Rechner';
$string['promiscuousmodedescription'] = 'Diese Option legt für jeden Rechner, der Ihre Website aufruft, eine Einrichtung an, und erlaubt deren Nutzer/innen sich bei Mahara anzumelden';
$string['promiscuousmodedisabled'] = 'Die automatische Registrierung wurde deaktiviert.';
$string['promiscuousmodeenabled'] = 'Die automatische Registrierung wurde aktiviert.';
$string['public'] = 'public';
$string['publickey'] = 'PublicKey';
$string['publickeydescription2'] = 'Dieser PublicKey wird automatisch erzeugt, und wechselt alle %s Tage.';
$string['publickeyexpires'] = 'gültig bis';
$string['registrationallowed'] = 'Registrierung erlaubt?';
$string['registrationalloweddescription2'] = 'Haben Nutzer/innen die Erlaubnis, sich auf diesem System mit dem Anmeldeformular zu registrieren? Wenn die Registrierung ausgeschaltet ist, kann niemand bei der Einrichtung die Registrierung beantragen und Mitglieder können die Einrichtung nicht freiwillig verlassen.';
$string['reinstall'] = 'Reinstallieren';
$string['release'] = 'Version %s (%s)';
$string['remoteusername'] = 'Anmeldename für die externe Authentifizierung';
$string['remoteusernamedescription'] = 'Wenn sich die Nutzer/innen bei %s von einer Remote Website mit der XMLRPC Authentifizierungsmethode anmelden, so ist dies sein/ihr Remote Anmeldename.';
$string['removeuserfrominstitution'] = 'Nutzer/in aus der Einrichtung entlassen';
$string['removeusers'] = 'Nutzer/innen löschen';
$string['removeusersfrominstitution'] = 'Nutzer/innen aus der Einrichtung löschen';
$string['requestto'] = 'Auffordern zu';
$string['changeusername'] = 'Anmeldenamen ändern';
$string['changeusernamedescription'] = 'Änderung des Anmeldenamens. Die Anmeldenamen sind 3-236 Zeichen lang, dürfen Buchstaben, Zahlen und die üblichen Zeichen ohne das Leerzeichen enthalten.';
$string['resetpassword'] = 'Zurücksetzen des Passworts';
$string['resetpassworddescription'] = 'Der hier eingetragene Text ersetzt das aktuelle Passwort der Nutzer/innen.';
$string['resultsof'] = 'von maximal';
$string['runupgrade'] = 'Upgrade starten';
$string['savechanges'] = 'Änderungen speichern';
$string['savefailed'] = 'Das Speichern ist fehlgeschlagen';
$string['savingmenuitem'] = 'Element sichern';
$string['searchplugin'] = 'Suche Plugin';
$string['searchplugindescription'] = 'Welches Suchplugin wird benutzt';
$string['searchusernames'] = 'Anmeldenamen durchsuchen';
$string['searchusernamesdescription'] = 'Diese Option erlaubt es, dass die Anmeldenamen als Teil der "Nutzersuche" erlaubt sind.';
$string['sessionlifetime'] = 'Zeitüberschreitung';
$string['sessionlifetimedescription'] = 'Wenn angemeldete Nutzer/innen länger keine Aktionen ausführen (z.B. keine Seiten laden), werden sie automatisch abgemeldet. Diese Variable legt die betreffende Zeitspanne in Minuten fest.';
$string['setsiteoptionsfailed'] = 'Fehler beim Setzen der %s Optionen';
$string['showonlineuserssideblock'] = 'Anzeige des Blocks Nutzer/innen online';
$string['showonlineuserssideblockdescription'] = 'Wenn die Option aktiviert ist, sehen die Nutzer/innen einen Block mit den aktuellen Nutzer/innen der Plattform.';
$string['showselfsearchsideblock'] = 'Aktivierung der "Mein Portfolio durchsuchen" Option';
$string['showselfsearchsideblockdescription'] = 'Anzeige des "Mein Portfolio durchsuchen" Blocks im Bereich "Mein Portfolio"';
$string['showtagssideblock'] = 'Aktivierung der Tagwolke';
$string['showtagssideblockdescription'] = 'Wenn die Option aktiviert ist, sehen die Nutzer/innen einen Block im Bereich "Mein Portfolio" mit den am häufigsten gebrauchten Schlagworten';
$string['simple'] = 'Einfach';
$string['settingsfor'] = 'Einstellungen für:';
$string['siteaccountsettings'] = 'Website Accounteinstellungen';
$string['siteadmin'] = 'Websiteadministrator/in';
$string['siteadmins'] = 'Websiteadministrator/innen';
$string['sitedefault'] = 'Standardeinstellung';
$string['sitefile'] = 'Website Datei';
$string['sitefiles'] = 'Website Dateien';
$string['sitefilesdescription'] = 'Hochladen und Verwalten der Dateien, die in das Menü Websitelinks und Ressourcen und in die Site Ansichten eingebunden werden können';
$string['sitelanguagedescription'] = 'Wählen Sie die Standardsprache für die gesamte Website. Die Nutzer/innen können die Sprache später für sich selber ändern.';
$string['sitecountrydescription'] = 'Voreinstellung des Feldes Staat für die Website';
$string['sitename'] = 'Name der gesamten Website';
$string['sitenamedescription'] = 'Der Websitename erscheint an bestimmten Stellen auf der Website und in den verschickten E-Mails';
$string['siteoptions'] = 'Website Optionen';
$string['siteoptionsdescription'] = 'Konfiguration der wesentlichen Website Optionen wie Name, Sprache und Seitenlayout';
$string['siteoptionspagedescription'] = 'Auf dieser Seite werden die globalen Optionen eingerichtet, die als Standardwerte für die ganze Website gelten. <BR> Achtung: Ausgeschaltete Optionen können durch die Datei config.php überschrieben werden.';
$string['siteoptionsset'] = 'Die Website Optionen wurden aktualisiert';
$string['sitepageloaded'] = 'Websiteinhalte geladen';
$string['sitestaff'] = 'Websitebetreuer/innen';
$string['sitethemedescription'] = 'Standardmäßiges Theme für die Website - kontrollieren Sie die Errordatei, wenn Ihr Theme nicht gelistet wird';
$string['smallviewheaders'] = 'Anzeige eines verkleinerten Navigationsblocks in der Kopfzeile';
$string['smallviewheadersdescription'] = 'Wenn diese Option gesetzt ist, wird im Bereich der Kopfzeile ein kleiner Navigationsblock angezeigt, wenn die Ansicht angezeigt oder bearbeitet wird.';
$string['spamhaus'] = 'Aktivierung der Spamhaus URL Blacklist';
$string['spamhausdescription'] = 'Wenn diese Option aktiviert ist, werden URL mit der Spamhaus DNSBL geprüft';
$string['surbl'] = 'Aktivierung der SURBL URL Blacklist';
$string['surbldescription'] = 'Wenn diese Option aktiviert ist, werden URL mit der SURBL DNSBL geprüft';
$string['disableexternalresources'] = 'Deaktivierung externer Quellen in Nutzer/innen HTML Code';
$string['disableexternalresourcesdescription'] = 'Dies sperrt das Einfügen externer Quellen; so kann zum Beispiel verhindert werden, dass die Nutzer/innen Bilder von anderen Hosts einbinden';
$string['tagssideblockmaxtags'] = 'Maximale Anzahl der Schlagworte in der Tagwolke';
$string['tagssideblockmaxtagsdescription'] = 'Wieviele Schlagworte sollen in der Tagwolke der Nutzer/innen angezeigt werden';
$string['siteviews'] = 'Site Ansichten';
$string['siteviewsdescription'] = 'Anlegen und Verwalten von Ansichten und Ansichten-Templates für die gesamte Website';
$string['staffusers'] = 'Betreuer/innen';
$string['staffusersdescription'] = 'Nutzer/innen mit Website Betreuerrechten ausstatten';
$string['staffuserspagedescription'] = 'Hier können Sie auswählen, welche Nutzer/innen Betreuer/innen für die Website sein sollen. Die aktuellen Betreuer/innen werden rechts aufgelistet, die möglichen Betreuer/innen sind auf der linken Seite aufgeführt.';
$string['staffusersupdated'] = 'Die Liste der Betreuer/innen wurde aktualisiert';
$string['strchoosefile'] = 'Datei auswählen ...';
$string['stringid'] = 'Identifikator';
$string['stringoriginal'] = 'Original';
$string['stringstatus'] = 'Status';
$string['stringtranslated'] = 'Übersetzung';
$string['strloadfile'] = 'Laden';
$string['studentid'] = 'ID Nummer';
$string['successfullyinstalled'] = 'Mahara wurde erfolgreich installiert!';
$string['suspended'] = 'gesperrt';
$string['suspendedby'] = 'Diese/r Nutzer/in wurde von %s gesperrt';
$string['suspendedreason'] = 'Grund für die Sperrung';
$string['suspendedreasondescription'] = 'Dieser Text wird der Nutzerin/dem Nutzer beim nächsten Loginversuch angezeigt.';
$string['suspendedusers'] = 'Gesperrte Nutzer/innen';
$string['suspendedusersdescription'] = 'Sperrung oder Freigabe von Nutzer/innen auf der Website';
$string['suspendingadmin'] = 'Sperrende/r Administrator/in';
$string['suspenduser'] = 'Nutzer/in sperren';
$string['suspensionreason'] = 'Grund für die Sperrung';
$string['templatesadmin'] = 'Konfiguration Ansichtentemplates';
$string['templatesadmindescription'] = 'Verwaltung der installierter Templates';
$string['termsandconditions'] = 'Nutzungsordnung';
$string['thefollowingupgradesareready'] = 'Die folgenden Upgrades liegen bereit:';
$string['thisuserissuspended'] = 'Diese/r Nutzer/in wurde gesperrt';
$string['toversion'] = 'auf Version';
$string['localdatasuccess'] = 'Lokale Anpassungen wurden erfolgreich installiert';
$string['trustedsites'] = 'vertrauenswürdige Seiten';
$string['type'] = 'Typ';
$string['unsuspenduser'] = 'Freigabe der Nutzer/innen';
$string['unsuspendusers'] = 'Nutzer/innen freigeben';
$string['updatesiteoptions'] = 'Website Optionen aktualisieren';
$string['upgradefailure'] = 'Das Upgrade ist fehlgeschlagen!';
$string['upgradeloading'] = 'Laden...';
$string['upgrades'] = 'Upgrades';
$string['upgradesuccess'] = 'Das Upgrade war erfolgreich';
$string['upgradesuccesstoversion'] = 'Erfolgreiches Upgrade auf Version';
$string['uploadcopyright'] = 'Hochladen des Copyright Statement';
$string['uploadcsv'] = 'Nutzer/innen via CSV hochladen';
$string['uploadcsvconfigureauthplugin'] = 'Sie müssen ein Authentifizierungsplugin installieren. Dann können Sie Nutzer/innen via CSV hochladen';
$string['uploadcsvdescription'] = 'Hochladen einer CSV Datei, die neue Nutzer/innen enthält';
$string['uploadcsverroremailaddresstaken'] = 'Die Zeile  %s der Datei gibt eine E-Mail Adresse "%s" an, die schon von einer anderen Nutzerin/einem anderen Nutzer benutzt wird';
$string['uploadcsverrorusernotininstitution'] = 'Fehler in Zeile %s: Die Nutzerin/der Nutzer "%s" ist nicht Mitglied der Einrichtung %s.';
$string['uploadcsverroruserinaninstitution'] = 'Fehler in Zeile %s: Die Nutzerin/der Nutzer "%s" besitzt eine Mitgliedschaft in folgenden Einrichtungen: %s.  Sie können die Authentifizierungsmethode daher nicht in "Kein Einrichtung" abändern.';
$string['uploadcsverrorremoteusertaken'] = 'Die Zeile %s der Datei gibt einen Remote Anmeldenamen "%s" an, der schon von "%s" benutzt wird';
$string['uploadcsverrorincorrectnumberoffields'] = 'Fehler in Zeile %s Ihrer Datei: Diese Zeile hat nicht die erforderliche Anzahl an Feldern';
$string['uploadcsverrorwrongnumberoffields'] = 'Fehler in Zeile %s Ihrer Datei: Ungültige Anzahl von Feldern';
$string['uploadcsverrorinvalidemail'] = 'Fehler in Zeile %s Ihrer Datei: Die E-Mail Adresse für diese/n Nutzer/in hat nicht die korrekte Form';
$string['uploadcsverrorinvalidfieldname'] = 'Der Feldname "%s" ist ungültig';
$string['uploadcsverrorinvalidpassword'] = 'Fehler in Zeile %s Ihrer Datei: Das Passwort für diese/n Nutzer/in hat nicht die korrekte Form';
$string['uploadcsverrorinvalidusername'] = 'Fehler in Zeile %s Ihrer Datei: Der Anmeldename für diese/n Nutzer/in hat nicht die korrekte Form';
$string['uploadcsverrormandatoryfieldnotspecified'] = 'Die Zeile %s der Datei hat nicht das erforderliche "%s" Feld';
$string['uploadcsverrornorecords'] = 'Die Datei scheint keine Datensätze zu enthalten (obwohl die Formatzeile gut aussieht)';
$string['uploadcsverrorrequiredfieldnotspecified'] = 'Das erforderliche Feld "%s" wurde in der Formatzeile nicht definiert';
$string['uploadcsverrorunspecifiedproblem'] = 'Die Datensätze in der CSV Datei konnten nicht eingefügt werden. Wenn Ihre Datei das korrekte Format hat, haben Sie einen Bug entdeckt und sollten bei <a href="https://eduforge.org/tracker/?func=add&group_id=176&atid=739">einen Bugreport anlegen</a>, die CSV Datei anhängen (denken Sie daran die Passwortinformation zu löschen!) und, wenn das möglich ist, die Errorlog-Datei';
$string['uploadcsverroruseralreadyexists'] = 'Die Zeile %s der Datei gibt einen Anmeldenamen "%s" an, der schon existiert';
$string['uploadcsvfailedusersexceedmaxallowed'] = 'Es wurden keine Nutzer/innen hinzugefügt. Ihre Datei enthält zuviele Datensätze.  Die Anzahl der erlaubten Nutzer/innen wäre überschritten.';
$string['updateusers'] = 'NUtzer/innen aktualisieren';
$string['updateusersdescription'] = 'Wenn die CSV Datei Anmeldenamen von Nutzer/innen enthält, die bereits Mitglied der ausgewählten Einrichtung sind, werden diese Datensätze mit den INformationen der CSV Datei überschrieben. Sie sollten dieses Tool mit Vorsicht verwenden.';
$string['csvfileprocessedsuccessfully'] = 'Die CSV Datei wurde erfolgreich verarbeitet';
$string['nousersadded'] = 'Es wurden keine Nutzer/innen angelegt.';
$string['numbernewusersadded'] = 'Neu angelegte Nutzer/innen: %s.';
$string['numberusersupdated'] = 'Aktualisierte Nutzer/innen: %d.';
$string['showupdatedetails'] = 'Einzelheiten der Aktualisierung anzeigen';
$string['uploadcsvinstitution'] = 'Die Einrichtung, für die Nutzer/innen hochgeladen werden sollen';
$string['uploadcsvpagedescription2'] = '<p>Sie können diese Möglichkeit benutzen, um neue Nutzer/innen mit einer <acronym title="Comma Separated Values">CSV</acronym> Datei hochzuladen.</p>
   
<p>Die erste Zeile Ihrer CSV Datei sollte das Format Ihrer CSV festlegen. So sollte die Datei zum Beispiel ausssehen:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>Diese Datei muss immer das <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> und <tt>lastname</tt> Feld enthalten, und dann alle Felder die für die Einrichtung sowohl zwingend vorgeschrieben als auch für die Bearbeitung gesperrt sind. Sie können für alle Einrichtungen die <a href="%s">zwingend vorgeschriebenen Felder konfigurieren</a>, oder <a href="%s">für jede Einrichtung die für die Bearbeitung gesperrten Felder festlegen</a>.</p>

<p>Ihre CSV Datei kann jedes andere Profilfeld enthalten, das Ihnen wichtig ist. Hier die vollständige Liste der Profilfelder:</p>

%s';
$string['uploadcsvpagedescription2institutionaladmin'] = '<p>Sie können diese Möglichkeit benutzen, um neue Nutzer/innen mit einer <acronym title="Comma Separated Values">CSV</acronym> Datei hochzuladen.</p> <p>Die erste Zeile Ihrer CSV Datei sollte das Format Ihrer CSV festlegen. So sollte die Datei zum Beispiel ausssehen:</p> <pre>username,password,email,firstname,lastname,studentid</pre> <p>Diese Datei muss immer das <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> und <tt>lastname</tt> Feld enthalten, und dann alle Felder die für die Einrichtung sowohl zwingend vorgeschrieben als auch für die Bearbeitung gesperrt sind. Sie können für alle Einrichtungen die <a href="%s">zwingend vorgeschriebenen Felder konfigurieren</a>, oder <a href="%s">für jede Einrichtung die für die Bearbeitung gesperrten Felder festlegen</a>.</p> <p>Ihre CSV Datei kann jedes andere Profilfeld enthalten, das Ihnen wichtig ist. Hier die vollständige Liste der Profilfelder:</p>

%s';
$string['uploadcsvsomeuserscouldnotbeemailed'] = 'Einige der neuen Nutzer/innen konnten nicht per E-Mail benachrichtigt werden. Die E-Mail-Adressen sind nicht korrekt oder der Server auf dem Mahara läuft ist nicht richtig konfiguriert um E-Mails zu verschicken. Die Error-Logdatei enthält weitere Details. Vorerst können Sie diese Personen persönlich kontaktieren:';
$string['useradded'] = 'Nutzer/in angelegt';
$string['usersallowedmultipleinstitutions'] = 'Mehrfache Mitgliedschaft';
$string['usersallowedmultipleinstitutionsdescription'] = 'Wenn diese Option gesetzt ist, können die Nutzer/innen eine gleichzeitige Mitgliedschaft in mehreren Einrichtungen erwerben';
$string['userscanchooseviewthemes'] = 'Die Nutzer/innen können Ansichten Themes auswählen';
$string['userscanchooseviewthemesdescription'] = 'Wenn diese Option gesetzt ist, können die Nutzer/innen ein Theme auswählen, wenn sie ihre Ansichten bearbeiten. Die Ansicht wird auch anderen Nutzer/innen mit dem gewählten Theme angezeigt.';
$string['userscanhiderealnames'] = 'Die Nutzer/innen können ihre richtigen Namen verstecken';
$string['userscanhiderealnamesdescription'] = 'Wenn diese Option gesetzt ist, können Nutzer/innen, die einen Anzeigenamen eingetragen haben, festlegen, dass sie nur mit dem Anzeignamen suchbar sind; sie können dann nicht über den richtigen Namen gesucht werden. (In der Nutzersuche des Adminbereichs, sind die Nutzer/innen immer auch über die richtigen Namen suchbar).';

$string['usersdeletedsuccessfully'] = 'Nutzer/in erfolgreich gelöscht';
$string['usersearch'] = 'Nutzer/innen-Suche';
$string['usersearchdescription'] = 'Suche von Nutzer/innen zur Abwicklung von Verwaltungsaufgaben';
$string['usersearchinstructions'] = 'Sie können nach Nutzer/innen suchen, indem Sie die Initialen in der Vor- oder Nachnamereihe anklicken oder den Namen in die Suchenbox eingeben.  Wenn Sie in die Suchenbox eine E-Mailadresse eingeben, wird nach dieser Adresse gesucht.';
$string['administergroups'] = 'Gruppen verwalten';
$string['administergroupsdescription'] = 'Grupenadministrator/innen bestellen und Gruppen löschen';
$string['groupcategoriesdescription'] = 'Hinzufügen und Bearbeiten von Gruppenkategorien';

$string['usersrequested'] = 'Nutzer/innen, die eine Mitgliedschaft beantragt haben';
$string['usersseenewthemeonlogin'] = 'Andere Nutzer/innen sehen das neue Theme beim nächsten Anmelden.';
$string['userstoaddorreject'] = 'Nutzer/innen, die hinzugefügt oder abgelehnt werden sollen';
$string['userstobeadded'] = 'Nutzer/innen, die als Mitglied hinzugefügt werden sollen';
$string['userstobeinvited'] = 'Nutzer/innen, die eingeladen werden sollen';
$string['userstoberemoved'] = 'Nutzer/innen, die entfernt werden sollen';
$string['userstodisplay'] = 'Nutzer/innen, die angezeigt werden sollen:';
$string['usersunsuspendedsuccessfully'] = 'Nutzer/in erfolgreich freigegeben';
$string['usersuspended'] = 'Nutzer/innen gesperrt';
$string['userunsuspended'] = 'Nutzer/innen freigegeben';
$string['viruschecking'] = 'Virus Check';
$string['viruscheckingdescription'] = 'Wenn die Checkbox markiert ist, dann wird ClamAV benutzt, um alle hochgeladenen Dateien auf Viren zu untersuchen.';
$string['whocancreategroups'] = 'Wer darf Gruppen anlegen';
$string['whocancreategroupsdescription'] = 'Welche Nutzer/innen dürfen neue Gruppen anlegen?';
$string['whocancreatepublicgroups'] = 'Wer darf Öffentliche Gruppen anlegen';
$string['whocancreatepublicgroupsdescription'] = 'Wenn die Option gesetzt ist, können die Nutzer/innen Gruppen anlegen, die für die Öffentlichkeit sichtbar sind';
$string['wysiwyg'] = 'HTML Editor';
$string['wysiwygdescription'] = 'Diese Einstellung legt fest, ob der HTML Editor global aktiviert wird oder ob die Nutzer/innen diese Einstellung selbst vornehmen können.';
$string['wysiwyguserdefined'] = 'Nutzer/innen bestimmt';

$string['wwwroot'] = 'WWW Root';
$string['wwwrootdescription'] = 'URL unter der die Nutzer/innen auf die Mahara Installation zugreifen, und die URL für die der SSL Key generiert wurde';
$string['youcanupgrade'] = 'Sie können Mahara von Version %s (%s) auf Version %s (%s) upgraden!';


$string['proxysettings'] = 'Proxy Einstellungen';
$string['proxyaddress'] = 'Proxy Adresse';
$string['proxyaddressdescription'] = 'Wenn Ihre Website einen Proxy Server zum Zugriff auf das Internet benötigt, geben Sie bitte die Informationen in der Schreibweise <em>hostname:portnumber</em> an';
$string['proxyaddressset'] = 'Proxy Adresse gesetzt';
$string['proxyauthmodel'] = 'Proxy Authentifizierungsmodell';
$string['proxyauthmodeldescription'] = 'Wählen Sie Ihr Proxy Authentifizierungsmodell, wenn es notwendig ist';
$string['proxyauthmodelbasic'] = 'Basic (NCSA)';
$string['proxyauthmodelset'] = 'Proxy Authentifizierungsmodell wurde gesetzt';
$string['proxyauthcredentials'] = 'Proxy Bestätigungen';
$string['proxyauthcredentialsdescription'] = 'Geben Sie Ihre notwendigen Bestätigungen für die Proxy Authentifizeriung bei Ihrem Webserver im Format: <em>username:password</em> ein';
$string['proxyauthcredntialsset'] = 'Proxy Authentifizierungsangaben wurden gesetzt';
$string['emailsettings'] = 'E-Mail Einstellungen';
$string['emailsmtphosts'] = 'SMTP Host';
$string['emailsmtphostsdescription'] = 'SMTP Server für den Versand von E-Mails, z.B. <em>smtp1.example.com</em>';
$string['emailsmtpport'] = 'SMTP Port';
$string['emailsmtpportdescription'] = 'Angabe der Port Nummer, wenn der SMTP Server einen von 25 abweichenden Port benutzt';
$string['emailsmtpuser'] = 'Nutzer/in';
$string['emailsmtpuserdescription'] = 'Wenn der SMTP Server eine Authentifizierung benötigt, geben Sie hier bitte die Anmeldeinformationen in die entsprechenden Felder ein';
$string['emailsmtppass'] = 'Pass';
$string['emailsmtpsecure'] = 'SMTP Encryption';
$string['emailsmtpsecuredescription'] = 'Wenn der SMTP Server eine Verschlüsselung unterstützt, setzen Sie die entsprechende Option.';
$string['emailsmtpsecuressl'] = 'SSL';
$string['emailsmtpsecuretls'] = 'TLS';
$string['emailnoreplyaddress'] = 'System E-Mail Adresse';
$string['emailnoreplyaddressdescription'] = 'Bei E-Mails wird diese Absender-Adresse angezeigt';


// Einrichtungen sperren
$string['errorwhileunsuspending'] = 'Es ist ein Fehler beim Versuch der Freigabe aufgetreten';
$string['institutionsuspended'] = 'Die Einrichtung wurde gesperrt';
$string['institutionunsuspended'] = 'Die Einrichtung wurde freigegeben';
$string['suspendedinstitution'] = 'GESPERRT';
$string['suspendinstitution'] = 'Einrichtung sperren';
$string['suspendinstitutiondescription'] = 'Hier kann eine Einrichtung gesperrt werden. Die Nutzer/innen gesperrter Einrichtungen können sich erst wieder anmelden, wenn die Einrichtung wieder frei gegeben wurde.';
$string['suspendedinstitutionmessage'] = 'Diese Einrichtung wurde gesperrt';
$string['unsuspendinstitution'] = 'Einrichtung freigeben';
$string['unsuspendinstitutiondescription'] = 'Hier kann eine Einrichtung wieder frei gegeben werden. Die Nutzer/innen einer gesperrten Einrichtung können sich erst wieder anmelden, wenn die Einrichtung frei gegeben wird.<br /><strong>Bitte beachten:</strong> Die Freigabe einer Einrichtung ohne einen Reset oder die Aufhebung des Ablaufdatums führt zu einer täglichen Sperrung der Einrichtung.';
$string['unsuspendinstitutiondescription_top'] = '<em>Bitte beachten:</em> Die Freigabe einer Einrichtung ohne einen Reset oder die Aufhebung des Ablauf-Datums führt zu einer täglichen Sperrung der Einrichtung.';

$string['unsuspendinstitutiondescription_top_instadmin'] = 'Nutzer/innen einer gesperrten Einrichtung können sich nicht einloggen. Wenden Sie sich an die Website Administrator/innen um die Einrichtung wieder freizugeben.';
$string['institutionautosuspend'] = 'Automatische Sperrung abgelaufener Einrichtungen';
$string['institutionautosuspenddescription'] = 'Wenn diese Option aktiviert ist, werden abgelaufene Einrichtungen automatisch gesperrt';
$string['institutionexpiry'] = 'Ablauftermin für diese Einrichtung';
$string['institutionexpirydescription'] = 'Das Datum, zu dem die Mitgliedschaft der Einrichtung bei %s beendet wird.';
$string['institutionexpirynotification'] = 'Hinweiszeit für den Ablauf einer Einrichtung';
$string['institutionexpirynotificationdescription'] = 'Die Administrator/innen der Einrichtung erhalten mit Ablauf der Hinweiszeit eine Nachricht';

// Bulk LEAP2A Nutzer Export
$string['bulkexport'] = 'Nutzer/innen exportieren';
$string['bulkexportempty'] = 'Das System hat keine Daten für den Export gefunden. Bitte kontrollieren Sie die Liste der Nutzer/innen.';
$string['bulkexportinstitution'] = 'Die Einrichtung für die alle Nutzer/innen exportiert werden sollen';
$string['bulkexporttitle'] = 'Nutzer/innen in Leap2A-Dateien exportieren';
$string['bulkexportdescription'] = 'Wählen Sie eine Einrichtung zum Exportieren aus <b>ODER</b> bestimmen Sie eine Liste der Anmeldenamen:';
$string['bulkexportusernames'] = 'Nutzer/innen für den Export';
$string['bulkexportusernamesdescription'] = 'Eine Liste der Nutzer/innen (ein Nutzername pro Zeile) die mit ihren Portfolios exportiert werden sollen';
$string['couldnotexportusers'] = 'Die folgenden Nutzer/innen konnten nicht exportiert werden: %s';
$string['exportingusername'] = 'Exportiere \'%s\'...';

// Bulk leap2a Import
$string['bulkleap2aimport'] = 'Nutzer/innen mit Hilfe von Leap2A-Dateien importieren';
$string['bulkleap2aimportdescription'] = '<p>Sie können Nutzer/innen aus einer Sammlung von Leap2A-Dateien auf Ihrem Server importieren.  Wählen Sie die entsprechende Zip-Datei auf Ihrem Serversystem aus, die die notwendigen Leap2A-Zipdateien beihaltet, und eine einzelne CSV Datei namens <b>usernames.csv</b>, die die Nutzernamen mit den Nutzerportfolios verknüpft.</p>
<p>Die Datei usernames.csv sollte folgenden Aufbau haben:</p>
 <pre>
 &nbsp;&nbsp;nigel,mahara-export-leap-user8-1265165366.zip<br>
 &nbsp;&nbsp;heinz,mahara-export-leap-user1-1266458159.zip
 </pre>
<p>wobei mahara-export-leap-user8-1265165366.zip und mahara-export-leap-user1-1266458159.zip Dateien im Unterverzeichnis users sind.</p>
<p>Die Zipdatei wird normalerweise mit der Bulk Exportfunktion in Mahara generiert.</p>
<p>Bitte gedulden Sie sich, wenn Sie eine größere Anzahl von Nutzer/innen importieren.  Der Importvorgang kann einige Zeit dauern.</p>';
$string['importfile'] = 'Bulk Export Datei';
$string['importfilemissinglisting'] = 'Der Bulk Export Datei fehlt eine Datei namens <b>usernames.csv</b>. Haben Sie die Mahara Bulk Exportfunktion benützt, um diese Nutzer/innen zu exportieren?';
$string['importfilenotafile'] = 'Fehler bei der Formularübermittlung: die Datei wurde nicht erkannt';
$string['importfilenotreadable'] = 'Fehler bei der Formularübermittlung: die Datei war nicht lesbar';
$string['bulkleap2aimportfiledescription'] = 'Die Zipdatei auf ihrem Server enthält alle exportierten Nutzerportfolio (im Leap2a-Format) mitsamt einer CSV Liste der Anmeldenamen';
$string['unzipnotinstalled'] = 'Das System findet kein unzip Kommando, oder $cfg->pathtounzip ist falsch konfiguriert. Bitte installieren Sie das unzip Kommando, damit gezippte Dateien entpackt werden können oder korrigieren Sie die $cfg->pathtounzip Einstellung.';
$string['importednuserssuccessfully'] = '%d von %d Nutzer/innen wurden erfolgreich importiert';
$string['Import'] = 'Import';
$string['bulkimportdirdoesntexist'] = 'Das Verzeichnis %s existiert nicht';
$string['unabletoreadbulkimportdir'] = 'Das Verzeichnis %s ist nicht lesbar';
$string['unabletoreadcsvfile'] = 'Die csv Datei %s konnte nicht gelesen werden';
$string['importfileisnotazipfile'] = 'Die Importdatei %s wurde nicht als Zipdatei erkannt';
$string['unzipfailed'] = 'Fehler bein Entpacken der Leap2a-Datei %s. Die Error.log Datei enthält weitere Informationen.';
$string['importfailedfornusers'] = 'Der Import ist für %d von %d Nutzer/innen fehlgeschlagen';
$string['invalidlistingfile'] = 'Unzulässige Anmeldenamenliste. Haben Sie die Mahara Bulk Exportfunktion benützt, um diese Nutzer/innen zu exportieren?';

// spam trap names
$string['None'] = 'Keine';
$string['Simple'] = 'Einfache';
$string['Advanced'] = 'Fortgeschrittene';

//admin option fieldset legends
$string['sitesettingslegend'] = 'Websiteeinstellungen';
$string['usersettingslegend'] = 'Nutzereinstellungen';
$string['groupsettingslegend'] = 'Gruppeneinstellungen';
$string['searchsettingslegend'] = 'Sucheinstellungen';
$string['institutionsettingslegend'] = 'Einrichtungseinstellungen';
$string['accountsettingslegend'] = 'Accounteinstellungen';
$string['securitysettingslegend'] = 'Sicherheitseinstellungen';
$string['generalsettingslegend'] = 'Allgemeine Einstellungen';

$string['groupname'] = 'Gruppenname';
$string['groupmembers'] = 'Mitglieder';
$string['groupadmins'] = 'Administrator/innen';
$string['grouptype'] = 'Gruppentyp';
$string['groupvisible'] = 'Sichtbarkeit';
$string['groupmanage'] = 'Verwalten';
$string['groupdelete'] = 'Löschen';
$string['managegroupquotadescription'] = 'Verwenden Sie das untenstehende Formular, um das Speicherkontingent für diese Gruppe zu verwalten.';
$string['managegroupdescription'] = 'Verwenden Sie das untenstehende Formular, um die Administrator/innen für diese Gruppe zu verwalten.  Wenn Sie eine/n Gruppenadministrator/in abbestellen, bleibt diese/r weiterhin Gruppenmitglied.';
