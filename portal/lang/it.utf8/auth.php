<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
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
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

// IMAP
$string['host'] = 'Hostname o indirizzo';
$string['wwwroot'] = 'WWW root';

$string['port'] = 'Numero Porta'; 
$string['protocol'] = 'Protocollo';
$string['changepasswordurl'] = 'URL Cambio-password';
$string['cannotremove']  = "Non è possibile rimuovere il Plugin Auth, essendo l\'unico \nplugin esistente per questa Istituzione.";
$string['cannotremoveinuse']  = "Non è possibile rimuovere il Plugin Auth perchè usato da qualche utente.\nDevi aggiornare i loro records prima di poter rimuovere questo Plugin.";
$string['saveinstitutiondetailsfirst'] = 'Per piacere salva i dettagli della Istituzione prima di configurare i Plugin di autenticazione.';

$string['editauthority'] = 'Modifica una Autorità';
$string['addauthority']  = 'Aggiungi una Autorità';

$string['updateuserinfoonlogin'] = 'Aggiorna informazioni di accesso utente';
$string['updateuserinfoonlogindescription'] = 'Recupera le informazioni utente dal server remoto ed aggiorna il tuo record locale ogni volta che l\'utente si connette.';
$string['xmlrpcserverurl'] = 'XML-RPC Server URL';
$string['ipaddress'] = 'Indirizzo IP';
$string['shortname'] = 'Nome abbreviato per il tuo Sito';
$string['name'] = 'Nome del Sito';
$string['nodataforinstance'] = 'Non è stato possibile trovare dati per l\'instanza di autenticazione.';
$string['authname'] = 'Nome';
$string['weautocreateusers'] = 'Creiamo automaticamente gli utenti';
$string['theyautocreateusers'] = 'Creano automaticamente gli utenti';
$string['parent'] = 'Autorità relativa';
$string['wessoout'] = 'Effettuiamo fuori l\'SSO';
$string['weimportcontent'] = 'Importiamo i contenuti';
$string['weimportcontentdescription'] = '(solo alcune applicazioni)';
$string['theyssoin'] = 'Effettuano l\'SSO all\'interno';
$string['authloginmsg'] = "Inserisci un messaggio da mostrare quando un utente prova ad effettuare il login attraverso il modulo di login di Mahara";
$string['application'] = 'Applicazione';
$string['cantretrievekey'] = 'Si è presentato un errore nel recuperare la chiave pubblica dal server remoto.<br>Per cortesia assicurati che i campi Applicazione e Root WWW siano corretti e che la rete sia abilitata sull\'host remoto.';
$string['ssodirection'] = 'Direzione dell\'SSO';

$string['errorcertificateinvalidwwwroot'] = 'Questo certificato pretende di essere per %s, ma stai cercando di usarlo per %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'Non è stato possibile generare una nuova chiave SSL. Sei sicuro che sia openssl che il modulo PHP per openssl siano installati su questa macchina?';
$string['errnoauthinstances']   = 'Non ci sembra che ci sia nessuna istanza di Plugin di autenticazione configurata per l\'host in %s';
$string['errornotvalidsslcertificate'] = 'Questo non è un certificato SSL valido.';
$string['errnoxmlrpcinstances'] = 'Non ci sembra di avere nessuna istanza di un plugin di autenticazione XMLRPC configurata per l\'host in %s';
$string['errnoxmlrpcwwwroot']   = 'Non abbiamo un record per nessun host in %s';
$string['errnoxmlrpcuser']      = "Attualmente non ci è possibile autenticarti. Le ragioni possibili possono essere:

    * La tua sessione SSO potrebbe essere scaduta. Ritorna nell\'altra applicazione e clicca sul link per effettuare nuovamente l\'accesso a Mahara.
    * Potresti non avere il permesso di di autenticarti con SSO su Mahara. Per piacere controlla presso il tuo Amministratore se ritieni di dover avere il permesso";

$string['unabletosigninviasso'] = 'Impossibile effettuare accesso tramite SSO';
$string['xmlrpccouldnotlogyouin'] = 'Spiacenti, non puoi effettuare l\'accesso :(';
$string['xmlrpccouldnotlogyouindetail'] = 'Spiacenti, attualmente non possiamo garantirti l\'accesso in Mahara. Ti preghiamo di riprovare più tardi, e se il problema persiste, di contattare l\'Amministratore';

$string['requiredfields'] = 'Campi del profilo richiesti';
$string['requiredfieldsset'] = 'Imposta campi del profilo richiesti';
$string['noauthpluginconfigoptions'] = 'Non ci sono opzioni di configurazione associate a questo plugin';

$string['hostwwwrootinuse'] = 'La WWW root è già usata dall\'altra Istituzione (%s)';
?>
