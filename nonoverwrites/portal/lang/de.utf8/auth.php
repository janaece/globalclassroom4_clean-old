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

$string['addauthority'] = 'Authentifizierungsplugin anlegen';
$string['application'] = 'Applikation';
$string['authname'] = 'Authentifizierungsname';
$string['cannotremove'] = 'Dieses Authentifizierungsplugin kann nicht gelöscht werden, da für die Einrichtung kein weiteres Plugin installiert ist.';
$string['cannotremoveinuse'] = 'Dieses Authentifizierungsplugin kann nicht gelöscht werden, da es von einigen Nutzern gebraucht wird.
Sie müssen diese Nutzerdatensätze aktualisieren, bevor Sie das Plugin löschen können.';
$string['cantretrievekey'] = 'Beim Abholen des Public Key beim Remote Server ist ein Fehler aufgetreten.<br>Bitte stellen Sie sicher, dass das Programm und die WWW Rootfelder richtig eingetragen sind und die Remoteseite auch Netzwerkzugriffe gewährt.';
$string['ssodirection'] = 'SSO Richtung';
$string['changepasswordurl'] = 'URL für Passwortänderungen';
$string['editauthority'] = 'Authentifizierungsplugin bearbeiten';
$string['errnoauthinstances'] = 'Wir haben anscheinend für diesen Host keine Authentifizierungsplugin bei %s eingerichtet.';
$string['errnoxmlrcpinstances'] = 'Wir haben anscheinend für diesen Host keine XMLRPC Authentifizeriungsplugin Instanz eingerichtet bei';
$string['errnoxmlrcpuser'] = 'Wir können im Moment Ihren Zugriff nicht authentifizieren. Hier die möglichen Ursachen:

    * Ihre SSO Sitzung kann abgelaufen sein. Kehren Sie zur Ausgangsapplikation zurück und starten Sie Mahara erneut.
    * Sie haben keine Erlaubnis, Mahara über eine SSO Verbindung zu starten. Klären Sie die Zugriffserlaubnis mit dem/der Administrator/in.';
$string['errnoxmlrcpwwwroot'] = 'Wir haben keinen Datensatz für einen Host bei';
$string['errnoxmlrpcinstances'] = 'Wir haben anscheinend für diesen Host keine Authentifizierungsplugin bei %s eingerichtet.';
$string['errnoxmlrpcuser'] = 'Wir können Sie im Augenblick nicht authentifizieren. Die Gründe können sein:
Ihre SSO Sitzung ist möglicherweise abgelaufen. Kehren Sie zur Ausgangsapplikation zurück und rufen Sie Mahara erneut auf.
Sie habe möglicherweise keine Berechtigung Mahara via SSO aufzurufen. Klären Sie die Zugriffsberechtigung mit dem/der Administrator/in.';
$string['errnoxmlrpcwwwroot'] = 'Wir haben keinen Datensatz für diesen Host bei %s eingerichtet.';
$string['errorcertificateinvalidwwwroot'] = 'Das Zertifikat beansprucht zu %s zu gehören, aber Sie versuchen es für %s zu benutzen.';
$string['errorcouldnotgeneratenewsslkey'] = 'Das System kann keinen neuen SSL Schlüssel anlegen. Sind Sie sicher, dass die das Openssl Modul und das PHP Module für Openssl auf diesem Rechner installiert sind?';
$string['errornotvalidsslcertificate'] = 'Das ist kein gültiges SSL Zertifikat';
$string['host'] = 'Rechnername oder Adresse';
$string['ipaddress'] = 'IP Adresse';
$string['name'] = 'Website Name';
$string['noauthpluginconfigoptions'] = 'Mit diesem Plugin sind keine Konfigurationsoptionen verknüpft.';
$string['nodataforinstance'] = 'Es werden keine Daten für die Authentifizierungsinstanz gefunden';
$string['parent'] = 'Stamm Berechtigung';
$string['port'] = 'Port Nummer';
$string['protocol'] = 'Protokoll';
$string['requiredfields'] = 'Erforderliche Profilfelder';
$string['requiredfieldsset'] = 'Die erforderlichen Profilfelder wurden angelegt';
$string['saveinstitutiondetailsfirst'] = 'Bitte speichern Sie die Einrichtungsdetails, bevor Sie das Authentifizierungsplugin konfigurieren.';
$string['shortname'] = 'Kurzbezeichnung Ihrer Website';
$string['theyautocreateusers'] = 'Die Gegenseite legt die Nutzer/innen automatisch an';
$string['theyssoin'] = 'Die Gegenseite loggt sich via SSO ein';
$string['authloginmsg'] = "Erfassen Sie eine Meldung, die angezeigt wird, wenn sich Nutzer/innen über das Mahara Anmeldeformular anmelden wollen";
$string['unabletosigninviasso'] = 'Die Anmeldung via SSO ist fehlgeschlagen';
$string['updateuserinfoonlogin'] = 'Aktualisierung der Nutzerdaten beim Einloggen';
$string['updateuserinfoonlogindescription'] = 'Bei jedem Einloggen der Nutzerin/des Nutzers werden Informationen vom Remote Server geholt und der lokale Datensatz aktualisiert.';
$string['weautocreateusers'] = 'Wir legen Nutzer/innen automatisch an';
$string['weimportcontent'] = 'Wir importieren Content';
$string['weimportcontentdescription'] = '(ist nur bei einigen Applikationen möglich)';
$string['wessoout'] = 'Wir benützen SSO nach außen';
$string['wwwroot'] = 'WWW Root';
$string['xmlrpccouldnotlogyouin'] = 'Entschuldigung, im Augenblick ist keine Anmeldung möglich :(';
$string['xmlrpccouldnotlogyouindetail'] = 'Entschuldigung, es ist gerade keine Anmeldung möglich. Versuchen Sie es später noch einmal, wenn das Problem weiterhin besteht, melden Sie sich bitte bei den Administrator/innen';
$string['xmlrpcserverurl'] = 'XML-RPC Server URL';

$string['hostwwwrootinuse'] = 'WWW Root wird schon von einer anderen Einrichtung benutzt (%s)';

// Error messages for external authentication usernames
$string['duplicateremoteusername'] = 'Dieser externe Authentifizierungsname wird schon von %s benutzt. Die externen Authentifizierungsnamen müssen innerhalb einer Authentifizierungsmethode eindeutig sein.';
$string['duplicateremoteusernameformerror'] = 'Die externen Authentifizierungsnamen müssen innerhalb einer Authentifizierungsmethode eindeutig sein.';
