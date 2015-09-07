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

$string['administration'] = 'Administration';

// Installer
$string['installation'] = 'Installazione';
$string['release'] = 'Rilascio %s (%s)';
$string['copyright'] = 'Copyright &copy; 2006 onwards, Catalyst IT Ltd';
$string['agreelicense'] = 'Accetto';
$string['component'] = 'Componente o Plugin';
$string['continue'] = 'Continua';
$string['coredata'] = 'dati fondamentali';
$string['coredatasuccess'] = 'Dati fondamentali installati con successo';
$string['fromversion'] = 'Dalla versione';
$string['information'] = 'Informazioni';
$string['installsuccess'] = 'Versione installata con successo ';
$string['toversion'] =  'Alla versione';
$string['localdatasuccess'] = 'Personalizzazioni installate con successo';
$string['notinstalled'] = 'Non installato';
$string['nothingtoupgrade'] = 'Niente da aggiornare';
$string['performinginstallation'] = 'Installazione in esecuzione...';
$string['performingupgrades'] = 'Aggiornamenti in esecuzione...';
$string['runupgrade'] = 'Lancia aggiornamento';
$string['successfullyinstalled'] = 'Mahara installato con successo!';
$string['thefollowingupgradesareready'] = 'I seguenti aggiornamenti sono pronti:';
$string['registerthismaharasite'] = 'Registra questo Sito Mahara';
$string['upgradeloading'] = 'Sto caricando...';
$string['upgrades'] = 'Aggiornamenti';
$string['upgradesuccess'] = 'Aggiornato con successo';
$string['upgradesuccesstoversion'] = 'Aggiornato con successo alla versione ';
$string['upgradefailure'] = 'Aggiornamento fallito!';
$string['noupgrades'] = 'Niente da aggiornare! Tutto completamente aggiornato!';
$string['youcanupgrade'] = 'Puoi aggiornare Mahara da %s (%s) a %s (%s)!';
$string['Plugin'] = 'Plugin';
$string['jsrequiredforupgrade'] = 'E\' necessario abilitare javascript per installare o eseguire un aggiornamento.';
$string['dbnotutf8warning'] = 'Non stai usando un database di tipo UTF-8. Mahara immagazzina tutti i dati come UTF-8 internamente. Puoi ancora tentare di aggiornare ma ti raccomandiamo di convertire il tuo database in UTF-8.';
$string['dbcollationmismatch'] = 'Una colonna del tuo database sta usando una collation che non è la stessa del database di default. Per favore verifica che tutte le colonne usino la stessa collation del database.';

// Admin navigation menu
$string['adminhome']      = 'Home di Amministrazione';
$string['configsite']  = 'Configura il Sito';
$string['configusers'] = 'Gestisci gli Utenti';
$string['configextensions']   = 'Amministra i Plugin';
$string['manageinstitutions'] = 'Gestisci le Istituzioni';

// Admin homepage strings
$string['siteoptions']    = 'Opzioni del Sito';
$string['siteoptionsdescription'] = 'Configura le opzioni base del Sito come il nome, la lingua e il theme';
$string['editsitepages']     = 'Modifica le pagine del Sito';
$string['editsitepagesdescription'] = 'Modifica il contenuto delle varie pagine del Sito';
$string['linksandresourcesmenu'] = 'Menu\' dei Link e delle Risorse';
$string['linksandresourcesmenudescription'] = 'Gestisci i Link e i File del Menu\' dei Link e delle Risorse';
$string['sitefiles']          = 'File del Sito';
$string['sitefilesdescription'] = 'Carica e amministra i File che possono essere inseriti in Link e Risorse e nelle View del Sito';
$string['siteviews']          = 'View del Sito';
$string['siteviewsdescription'] = 'Crea e amministra le View e i View Template per l\'intero Sito';
$string['networking']          = 'Networking';
$string['networkingdescription'] = 'Configura il networking per Mahara';

$string['staffusers'] = 'Utenti di Staff';
$string['staffusersdescription'] = 'Assegna i permessi agli Utenti di Staff';
$string['adminusers'] = 'Utenti Amministratori';
$string['adminusersdescription'] = 'Assegna i diritti di accesso agli Amministratore del Sito';
$string['institutions']   = 'Istituzioni';
$string['institutiondetails']   = 'Dettagli delle Istituzioni';
$string['institutionauth']   = 'Autorità delle Istituzioni';
$string['institutionsdescription'] = 'Installa e gestisci le Istituzioni inserite';
$string['adminnotifications'] = 'Notifiche di Amministrazione';
$string['adminnotificationsdescription'] = 'Panoramica su come gli Amministratori di sistema ricevono le notifiche';
$string['uploadcsv'] = 'Aggiungi Utenti tramite file CSV';
$string['uploadcsvdescription'] = 'Carica un file CSV contenenete nuovi Utenti';
$string['usersearch'] = 'Cerca Utente';
$string['usersearchdescription'] = 'Cerca tutti gli Utenti ed esegui azioni amministrative su di essi';
$string['usersearchinstructions'] = 'E\' possibile effettuare la ricerca degli Utenti facendo clic sulle iniziali dei loro nomi o cognomi oppure inserendo un nome nella casella di ricerca. E\' anche possibile inserire un indirizzo e-mail nella casella di ricerca se si desidera effettuare la ricerca per indirizzo e-mail.';

$string['institutionmembersdescription'] = 'Associa gli Utenti con le Istituzioni';
$string['institutionstaffdescription'] = 'Assegna i permessi agli Utenti di Staff';
$string['institutionadminsdescription'] = 'Assegna i diritti di accesso all\'Amministratore dell\'Istituzione';
$string['institutionviews']          = 'View dell\'Istituzione';
$string['institutionviewsdescription'] = 'Crea e amministra le View e i View Templates per un\'Istituzione';
$string['institutionfiles']          = 'File dell\'Istituzione';
$string['institutionfilesdescription'] = 'Carica e gestisci i File da usare nelle View dell\'Istituzione';

$string['pluginadmin'] = 'Plugin di Amministrazione';
$string['pluginadmindescription'] = 'Installa e configura Plugin';

$string['htmlfilters'] = 'Filtri HTML';
$string['htmlfiltersdescription'] = 'Abilita altri filtri del tipo HTML Purifier';
$string['newfiltersdescription'] = 'Se hai scaricato un nuovo set di filtri HTML, puoi installarli effettuando l\'unzip dei file nella cartella %s e poi cliccando il pulsante qui sotto';
$string['filtersinstalled'] = 'Filtri installati.';
$string['nofiltersinstalled'] = 'Non ci sono filtri HTML installati.';

// Register your Mahara
$string['Field'] = 'Campo';
$string['Value'] = 'Valore';
$string['datathatwillbesent'] = 'Dati che saranno inviati';
$string['sendweeklyupdates'] = 'Invio settimanalmente gli aggiornamenti?';
$string['sendweeklyupdatesdescription'] = 'Se abilitato, il tuo Sito invierà settimanalmente gli aggiornamenti a mahara.org con alcune statistiche riguardo al Sito';
$string['Register'] = 'Registra';
$string['registrationfailedtrylater'] = 'Registazione fallita con codice errore %s. Per favore prova di nuovo più tardi.';
$string['registrationsuccessfulthanksforregistering'] = 'La registrazione ha avuto successo - Grazie per esserti registrato!';
$string['registeryourmaharasite'] = 'Registra il tuo Sito Mahara';
$string['registeryourmaharasitedetail'] = '
<p>Puoi segliere di registrare il tuo Sito Mahara su <a href="http://mahara.org/">mahara.org</a>. La registrazione è gratuita e ci aiuta a costruire un\'immagine delle installazioni basate su Mahara nel mondo.</p>
<p>Puoi vedere le informazioni che saranno inviate a mahara.org - Nulla che possa identificare personalmente i vostri Utenti sarà  inviato.</p>
<p>Se tu abiliti &quot; invio settimanalmente updates&quot;, Mahara invierà  automaticamente gli aggiornamenti a mahara.org una volta alla settimana con le tue informazioni aggiornate.</p>
<p>Dopo la registrazione questa informazione sarà  rimossa. Puoi cambiare l\'invio degli aggiornamenti settimanali nella pagina <a href="%sadmin/site/options.php">Opzioni del Sito</a>.</p>';

// Close site
$string['Close'] = 'Chiudi';
$string['closesite'] = 'Chiudi il Sito';
$string['closesitedetail'] = 'Puoi chiudere il sito per tutti tranne che per gli amministratori. Ci sarà  utile quando stai preparando un aggiornamento del database. Solo gli amministratori saranno abilitati a loggarsi fino a quando non avrai riaperto il sito o l\'aggiornamento sarà  stato completato con successo.';
$string['Open'] = 'Apri';
$string['reopensite'] = 'Riapri il Sito';
$string['reopensitedetail'] = 'Il tuo sito è chiuso.  Gli amministratori del sito possono continuare a loggarsi fino a quando l\'aggiornamento è in corso.';

// Site options
$string['adminsonly'] = 'Solo Amministratori';
$string['adminsandstaffonly'] = 'Solo Amministratori e Staff';
$string['allowpublicviews'] = 'Consenti View pubbliche';
$string['allowpublicviewsdescription'] = 'Se impostato a yes, gli utenti possono creare Views che sono accessibili al pubblico, piuttosto che solo agli Utenti registrati';
$string['allowpublicprofiles'] = 'Consenti profili pubblici';
$string['allowpublicprofilesdescription'] = 'Se è impostato a Yes, gli utenti posso impostare le View del proprio Profilo accessibili al pubblico piuttosto che solo per gli Utenti registrati';
$string['captchaonregisterform'] = 'Captcha richiesto per la registrazione';
$string['captchaonregisterformdescription'] = 'Richiedi agli utenti di digitare le lettere di un\'immagine captcha al momento della presentazione del modulo di registrazione';
$string['captchaoncontactform'] = 'Captcha richiesto per contattarci';
$string['captchaoncontactformdescription'] = 'Richiedi agli utenti non registrati di digitare le lettere di un\'immagine captcha al momento della sottomissione del modulo di contatto';
$string['defaultaccountinactiveexpire'] = 'Tempo di inattività  predefinito per l\'account';
$string['defaultaccountinactiveexpiredescription'] = 'Quanto tempo un account utente rimarrà  attivo senza che l\'Utente faccia il login';
$string['defaultaccountinactivewarn'] = 'Tempo di allarme per inattività  / scadenza';
$string['defaultaccountinactivewarndescription'] = 'Tempo prima che un messaggio di avviso venga inviato ad un account utente che sta per scadere o che sia diventato inattivo';
$string['defaultaccountlifetime'] = 'Durata predefinita di un account';
$string['defaultaccountlifetimedescription'] = 'Se impostato, gli account utente scadranno al termine di questo periodo di tempo rispetto a quando sono stati creati';
$string['embeddedcontent'] = 'Contenuti incorporati';
$string['embeddedcontentdescription'] = 'Se vuoi che gli Utenti possano inglobare Video o altri contentuit esterni nel proprio Portfolio, puoi scegliere quali Siti abilitare qui sotto.';
$string['Everyone'] = 'Tutti';
$string['institutionautosuspend'] = 'Auto-sospensione dalle Istituzioni scaduto';
$string['institutionautosuspenddescription'] = 'Se abilitato, le Istituzioni scadute saranno automaticamente sospese';
$string['institutionexpirynotification'] = 'Tempo di preavviso per la scadenza dell\'Istituzione';
$string['institutionexpirynotificationdescription'] = 'Un messaggio di notifica sarà  inviato al sito e agli amministratori dell\'Istituzione molto prima che un sito scada';
$string['language'] = 'Lingua';
$string['pathtoclam'] = 'Percorso di Clam';
$string['pathtoclamdescription'] = 'Percorso di Clamscan o Clamdscan';
$string['searchplugin'] = 'Cerca Plugin';
$string['searchplugindescription'] = 'Cerca Plugin da usare';
$string['sessionlifetime'] = 'Durata della sessione';
$string['sessionlifetimedescription'] = 'Tempo in minuti, dopo che un accesso utente inattivo sarà  automaticamente disconnesso';
$string['setsiteoptionsfailed'] = 'Impossibile impostare l\'opzione %s ';
$string['showselfsearchsideblock'] = 'Abilita ricerche nel Portfolio';
$string['showselfsearchsideblockdescription'] = 'Mostra il blocco "Cerca nel mio Portfolio" nella sezione Mio Portfolio del sito';
$string['showtagssideblock'] = 'Abilita Tag Cloud';
$string['showtagssideblockdescription'] = 'Se abilitato, gli utenti vedranno un blocco nella sezione Mio Portfolio del sito con una lista dei loro tag più frequentemente usati';
$string['sitedefault'] = 'Sito predefinito';
$string['sitelanguagedescription'] = 'Lingua predefinita per il Sito';
$string['sitename'] = 'Nome del Sito';
$string['sitenamedescription'] = 'Il nome del Sito appare in alcuni posti nel Sito e nelle e-mail inviate dal Sito';
$string['siteoptionspagedescription'] = 'Qui è possibile impostare alcune opzioni globali che verranno applicate di default per l\'intero Sito.';
$string['siteoptionsset'] = 'Le opzioni del Sito sono state aggiornate.';
$string['sitethemedescription'] = 'Theme predefinito per il Sito';
$string['tagssideblockmaxtags'] = 'Massimo numero di Tag nel Cloud';
$string['tagssideblockmaxtagsdescription'] = 'Il numero predefinito dei tag da mostrare nel tag cloud dell\'utente';
$string['theme'] = 'Theme';
$string['trustedsites'] = 'Siti abilitati';
$string['updatesiteoptions'] = 'Aggiornamento delle opzioni del Sito';
$string['usersallowedmultipleinstitutions'] = 'Utenti autorizzati per più Istituzioni';
$string['usersallowedmultipleinstitutionsdescription'] = 'Se selezionato, gli Utenti possono essere Membri di più Istituzioni contemporaneamente';
$string['usersseenewthemeonlogin'] = 'Gli utenti potranno vedere il nuovo Theme al prossimo log in';
$string['viruschecking'] = 'Virus checking';
$string['viruscheckingdescription'] = 'Se selezionato, verrà  attivato il controllo dei virus per tutti i File caricati utilizzando ClamAV';
$string['whocancreategroups'] = 'Chi può creare Gruppi';
$string['whocancreategroupsdescription'] = 'Quali utenti saranno abilitati a creare nuovi Gruppi';
$string['whocancreatepublicgroups'] = 'Chi può creare Gruppi Publici';
$string['whocancreatepublicgroupsdescription'] = 'Quali utenti saranno abilitati a creare Gruppi visibili dal pubblico generale';

// Site content
$string['about']               = 'Chi siamo';
$string['discardpageedits']    = 'Ignorare le modifiche a questa pagina?';
$string['editsitepagespagedescription'] = 'Qui puoi modificare il contenuto di alcune pagine del Sito, come ad esempio la Home Page (sia per gli utenti loggati che non loggati separatamente), e le pagine collegate a più di una pagina.';
$string['home']                = 'Home';
$string['loadsitepagefailed']  = 'Impossibile caricare la pagina del Sito';
$string['loggedouthome']       = 'Fai il logout dalla Home';
$string['pagename']            = 'Nome della pagina';
$string['pagesaved']           = 'Pagina salvata';
$string['pagetext']            = 'Testo della pagina';
$string['privacy']             = 'Condizioni per la Privacy';
$string['savechanges']         = 'Salva modifiche';
$string['savefailed']          = 'Salvataggio fallito';
$string['sitepageloaded']      = 'Pagina del sito caricata';
$string['termsandconditions']  = 'Termini e Condizioni';
$string['uploadcopyright']     = 'Carica condizioni del Copyright';

// Links and resources menu editor
$string['sitefile']            = 'File del sito';
$string['adminpublicdirname']  = 'public';  // Name of the directory in which to store public admin files
$string['adminpublicdirdescription'] = 'File accessibili agli Utenti non loggati';
$string['badmenuitemtype']     = 'Tipo di elemento sconosciuto';
$string['confirmdeletemenuitem'] = 'Vuoi veramente cancellare questo elemento?';
$string['deletingmenuitem']    = 'Cancellazione dell\'elemento';
$string['deletefailed']        = 'Cancellazione dell\'elemento fallita';
$string['externallink']        = 'Link esterno';
$string['editmenus']           = 'Modifica Link e Risorse';
$string['linkedto']            = 'Link a';
$string['linksandresourcesmenupagedescription'] = 'I Link e il Menù delle risorse appaiono a tutti gli Utenti in più pagine. E\' possibile aggiungere collegamenti ad altri Siti web e ai File caricati nella sezione %sAmministra File%s.';
$string['loadingmenuitems']    = 'Carica elementi';
$string['loadmenuitemsfailed'] = 'Caricamento degli elementi fallito';
$string['loggedinmenu']        = 'Link e Risorse per gli Utenti loggati';
$string['loggedoutmenu']       = 'Link e Risorse pubbliche';
$string['menuitemdeleted']     = 'Elemento cancellato';
$string['menuitemsaved']       = 'Elemento salvato';
$string['menuitemsloaded']     = 'Elementi caricati';
$string['name']                = 'Nome';
$string['noadminfiles']        = 'Non ci sono file di Amministrazione disponibili';
$string['public']              = 'pubblico';
$string['savingmenuitem']      = 'Salvataggio elemento';
$string['type']                = 'Tipo';

// Admin Files
$string['adminfilespagedescription'] = 'Qui è possibile caricare i File che possono essere inclusi nel Menu\' %sLink e Risorse%s. I File nella Home directory saranno aggiunti al Menù per gli Utenti loggati, mentre i File nella directory pubblica saranno aggiunti al Menù pubblico.';

// Networking options
$string['networkingextensionsmissing'] = 'Spiacenti, non puoi configurare il networking per Mahara perché la tua installazione PHP è introvabile oppure richiede più estensioni:';
$string['publickey'] = 'Chiave pubblica';
$string['publickeydescription2'] = 'Questa chiave pubblica è generata automaticamente e ruota ogni %s giorni';
$string['publickeyexpires'] = 'Chiave pubblica scaduta';
$string['enablenetworkingdescription'] = 'Consenti al tuo server Mahara a comunicare con si server che montano Moodle e altre applicazioni';
$string['enablenetworking'] = 'Consenti networking';
$string['networkingenabled'] = 'Il networking è stato consentito.';
$string['networkingdisabled'] = 'Il networking è stato consentito.';
$string['networkingpagedescription'] = 'Le funzioni di networking di Mahara gli consentono di comunicare con altri siti con installazioni di Mahara o Moodle sulla stessa o su altre macchine. Se il networking è consentito, lo puoi usare per configurare un\'unica modalità  di autenticazione per gli Utenti che usano altre installazioni di Moodle o Mahara.';
$string['networkingunchanged'] = 'Le impostazioni del network non sono state cambiate';
$string['promiscuousmode'] = 'Registra automaticamente tutti gli host';
$string['promiscuousmodedisabled'] = 'La registrazione automatica è stata disabilitata. ';
$string['promiscuousmodeenabled'] = 'La registrazione automatica è stata abilitata. ';
$string['promiscuousmodedescription'] = 'Crea un record di Istituzione per ogni host che si connette a te e consenti ai suoi Utenti di loggarsi in Mahara';
$string['wwwroot'] = 'WWW Root';
$string['wwwrootdescription'] = 'Questo è l\'URL dal quale gli Utenti accedono a questa installazione di Mahara e l\'URL dove vengono generate le chiavi SSL';
$string['proxysettings'] = 'Impostazioni proxy';
$string['proxyaddress'] = 'Indirizzo proxy';
$string['proxyaddressdescription'] = 'Se il tuo Sito usa un Server proxy per accedere a Internet, specifica i proxy nella seguente nota <em>hostname:portnumber</em>';
$string['proxyaddressset'] = 'Imposta indirizzo Proxy';
$string['proxyauthmodel'] = 'Modello di autenticazione proxy';
$string['proxyauthmodeldescription'] = 'Seleziona il tuo modello di autenticazione proxy, se appropriato';
$string['proxyauthmodelset'] = 'Il modello di autenticazione proxy è stato impostato';
$string['proxyauthcredentials'] = 'Credenziali proxy';
$string['proxyauthcredentialsdescription'] = 'Inserisci le credenziali richieste dal tuo proxy per autenticare il tuo web server nel formato <em>username:password</em>';
$string['proxyauthcredntialsset'] = 'Imposta le credenziali di autenticazione del proxy';


// Upload CSV and CSV errors
$string['csvfile'] = 'File CSV';
$string['emailusersaboutnewaccount'] = 'Inviare e-mail agli Utenti riguardo al loro account?';
$string['emailusersaboutnewaccountdescription'] = 'Se una e-mail dovesse essere inviata agli Utenti per informarli sui dettagli dell\'account creato';
$string['forceuserstochangepassword'] = 'Forzare il cambio password?';
$string['forceuserstochangepassworddescription'] = 'Se gli Utenti dovrebbero essere costretti a cambiare la loro password quando accedono per la prima volta';
$string['uploadcsvinstitution'] = 'L\'Istituzione e il metodo di autenticazione per i nuovi Utenti';
$string['configureauthplugin'] = 'Devi configurare un plugin di autenticazione prima di poter aggiungere utenti';
$string['csvfiledescription'] = 'Il file contentente gli Utenti da aggiungere';
$string['csverroremptyfile'] = 'Il file CSV è vuoto.';
$string['invalidfilename'] = 'Il file "%s" non esiste';
$string['uploadcsverrorinvalidfieldname'] = 'Il nome del campo "%s" non è valido, o ci sono più campi oltre la linea di intestazione specifica';
$string['uploadcsverrorrequiredfieldnotspecified'] = 'Un campo richiesto "%s" non è stato specificato nella linea di formattazione';
$string['uploadcsverrornorecords'] = 'Il file sembra non contenere nessun record (anche se l\'header va bene)';
$string['uploadcsverrorunspecifiedproblem'] = 'Per qualche ragione non è stato possibile inserire i record nel file CSV. Se il file è nel formato giusto allora è un bug e dovresti <a href="https://eduforge.org/tracker/?func=add&group_id=176&atid=739">creare un bug report</a>, allegando il file CSV (ricordati di cancellare le password!) e, se possibile, il file error log';
$string['uploadcsverrorinvalidemail'] = 'Errore alla linea %s del file: L\'indirizzo e-mail per questo Utente non è nella forma corretta';
$string['uploadcsverrorincorrectnumberoffields'] = 'Errore alla linea %s del file: Questa linea non ha il numero corretto di campi';
$string['uploadcsverrorinvalidpassword'] = 'Errore alla linea %s del file: La password per questo Utente non è nella forma corretta';
$string['uploadcsverrorinvalidusername'] = 'Errore alla linea %s del file: Lo username per questo Utente non è nella forma corretta';
$string['uploadcsverrormandatoryfieldnotspecified'] = 'La linea %s del file non ha il campo richiesto "%s"';
$string['uploadcsverroruseralreadyexists'] = 'La linea %s del file specifica uno username "%s"che è già  presente';
$string['uploadcsverroremailaddresstaken'] = 'La linea %s del file specifica una e-mail "%s" che è stata già  scelta da un altro utente';
$string['uploadcsvpagedescription2'] = '<p>Puoi usare questa funzionalità  per caricare nuovi utenti tramite file <acronym title="Comma Separated Values">CSV</acronym>.</p>
   
<p>La prima riga del file CSV dovrebbe specificare il formato dei dati in CSV. Ad esempio, dovrebbe assomigliare a qualcosa del tipo:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>La riga deve includere i campi <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> e <tt>lastname</tt>. Deve anche includere i campi segnati da compilare come obbligatori per tutti gli utenti e tutti i campi bloccati per l\'Istituzione per la quale stai caricando gli utenti. Puoi <a href="%s">configurare i campi obbligatori</a> per le Istituzioni o <a href="%s">configurare i campi bloccati per ogni Istituzione</a>.</p>

<p>Il file CSV può includere altri campi del profilo a tua richiesta. La lista completa dei campi è:</p>

%s';
$string['uploadcsvpagedescription2institutionaladmin'] = '<p>Puoi usare questa funzionalità  per caricare nuovi utenti tramite file <acronym title="Comma Separated Values">CSV</acronym>.</p>

<p>La prima riga del file CSV dovrebbe specificare il formato dei dati in CSV. Ad esempio, dovrebbe assomigliare a qualcosa del tipo:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>La riga deve includere i campi <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> and <tt>lastname</tt>. Deve anche includere i campi che l\'Amministratore ha reso obbligatori e tutti i campi bloccati per l\'Istituzione. Puoi <a href="%s">configurare i campi bloccati</a> per l\'Istituzione o le Istituzioni che gestisci.</p>

<p>Il file CSV può includere altri campi profilo a tua richiesta. La lista completa dei campi è:</p>

%s';
$string['uploadcsvsomeuserscouldnotbeemailed'] = 'Non è stato possibile inviare e-mail agli utenti. I loro indirizzi e-mail potrebbero essere non validi o il server su cui Mahara è in esecuzione potrebbe non essere configurato per inviare e-mail correttamente. Il log error del server ha ulteriori dettagli. Per ora, puoi contattare queste persone solo manualmente:';
$string['uploadcsvusersaddedsuccessfully'] = 'Gli utenti sono stati aggiunti con successo dal file';
$string['uploadcsvfailedusersexceedmaxallowed'] = 'Nessun utente è stato aggiunto perché ci sono troppi utenti nel file. Il numero di utenti dell\'Istituzione ha superato il numero massimo consentito.';

// Admin Users
$string['adminuserspagedescription'] = '<p>Qui è possibile scegliere quali sono gli utenti Amministratori del sito. Gli attuali Amministratori sono elencati sulla destra e i potenziali Amministratori si trovano sulla sinistra.</p><p>Il sistema deve avere almeno un Amministratore.</p>';
$string['institutionadminuserspagedescription'] = 'Qui è possibile scegliere quali sono gli utenti Amministratori per l\'Istituzione. Gli attuali Amministratori sono elencati sulla destra e i potenziali Amministratori sulla sinistra.';
$string['potentialadmins'] = 'Potenziali Amministratori';
$string['currentadmins'] = 'Amministratori attuali';
$string['adminusersupdated'] = 'Elenco utenti Amministratori aggiornato';

// Staff Users
$string['staffuserspagedescription'] = 'Qui è possibile scegliere gli utenti di Staff per il vostro sito. Gli attuali utenti di Staff sono sulla destra, quelli potenziali sono sulla sinistra.';
$string['institutionstaffuserspagedescription'] = 'Qui è possibile scegliere gli utenti di Staff per la vostra Istituzione. Gli attuali utenti di Staff sono sulla destra, quelli potenziali sono sulla sinistra.';
$string['potentialstaff'] = 'Utenti di Staff potenziali';
$string['currentstaff'] = 'Utenti di Staff attuali';
$string['staffusersupdated'] = 'Elenco utenti di Staff aggiornato';

// Admin Notifications

// Suspended Users
$string['deleteusers'] = 'Cancella Utenti';
$string['deleteuser'] = 'Cancella Utente';
$string['confirmdeleteusers'] = 'Sei sicuro di voler cancellare gli utenti selezionati?';
$string['exportingnotsupportedyet'] = 'L\'esportazione dei profili degli utenti non è attualmente supportato';
$string['exportuserprofiles'] = 'Esporta i profili degli utenti';
$string['nousersselected'] = 'Non ci sono utenti selezionati';
$string['suspenduser'] = 'Utente sospeso';
$string['suspendedusers'] = 'Utenti sospesi';
$string['suspensionreason'] = 'Ragione della sospensione';
$string['errorwhilesuspending'] = 'Si è verificato un errore durante la sospensione';
$string['suspendedusersdescription'] = 'Sospensione o riattivazione degli utenti che usano il sito';
$string['unsuspendusers'] = 'Utenti non sospesi';
$string['usersdeletedsuccessfully'] = 'Utenti cancellati con successo';
$string['usersunsuspendedsuccessfully'] = 'Annullamento della sospensione degli utenti avvenuta con successo';
$string['suspendingadmin'] = 'Sospensione Amministratore';
$string['usersuspended'] = 'Utente sospeso';
$string['userunsuspended'] = 'Utente non sospeso';

// User account settings
$string['accountsettings'] = 'Impostazioni dell\'account';
$string['siteaccountsettings'] = 'Impostazioni del Sito';
$string['resetpassword'] = 'Resetta password';
$string['resetpassworddescription'] = 'Se si digita del testo qui, esso sostituirà  la password corrente dell\'utente.';
$string['forcepasswordchange'] = 'Forza il cambiamento della password al prossimo login dell\'utente';
$string['forcepasswordchangedescription'] = 'L\'utente sarà  indirizzato ad una pagina per cambiare la password al prossimo login.';
$string['sitestaff'] = 'Staff del Sito';
$string['siteadmins'] = 'Amministratori del Sito';
$string['siteadmin'] = 'Amministratore del Sito';
$string['accountexpiry'] = 'Scadenza dell\'account';
$string['accountexpirydescription'] = 'Data entro al quale il login dell\'Utente è automaticamente disabilitato.';
$string['suspended'] = 'Sospeso';
$string['suspendedreason'] = 'Motivo della sospensione';
$string['suspendedreasondescription'] = 'Testo che verrà  mostrato all\'utente al suo prossimo accesso.';
$string['unsuspenduser'] = 'Utente non sospeso';
$string['thisuserissuspended'] = 'Questo utente è stato sospeso';
$string['suspendedby'] = 'Questo utente è stato sospeso da %s';
$string['deleteuser'] = 'Cancella Utente';
$string['userdeletedsuccessfully'] = 'L\'Utente è stato cancellato con successo';
$string['confirmdeleteuser'] = 'Sei sicuro di voler cancellare questo Utente?';
$string['filequota'] = 'Spazio per i file (MB)';
$string['filequotadescription'] = 'Spazio totale disponibile nell\'area file dell\'Utente.';
$string['addusertoinstitution'] = 'Aggiungi Utente all\'Instituzione';
$string['removeuserfrominstitution'] = 'Rimuovi Utente da questa Istituzione';
$string['confirmremoveuserfrominstitution'] = 'Sei sicuro di voler rimuovere l\'Utente da questa Istituzione?';
$string['usereditdescription'] = 'Qui puoi vedere e impostare i dettagli del tuo account Utente. In basso, puoi anche <a href="#suspend">sospendere o cancellare</a> oppure cambiare le impostazioni per questo Utente in <a href="#institutions">Istituzioni di cui fanno parte</a>.';
$string['suspenddeleteuser'] = 'Sospendi/Cancella Utente';
$string['suspenddeleteuserdescription'] = 'Qui puoi sospendere o cancellare completamente un account Utente. Gli utenti sospesi non possono accedere fino a quando il loro account è sospeso. Attenzione, ricorda che mentre una sospensione può essere rimossa, una cancellazione <strong>non può</strong> essere rimossa.';
$string['deleteusernote'] = 'Attenzione sappi che dopo questa operazione <strong>non è possibile tornare indietro</strong>.';
$string['youcannotadministerthisuser'] = 'Non puoi amministrare questo utente';

// Add User
$string['adduser'] = 'Aggiungi Utente';
$string['adduserdescription'] = 'Crea un nuovo Utente';
$string['basicinformationforthisuser'] = 'In formazioni di base di questo utente.';
$string['clickthebuttontocreatetheuser'] = 'Premi il pulsante per creare l\'utente.';
$string['createnewuserfromscratch'] = 'Crea un nuovo utente da zero';
$string['createuser'] = 'Crea utente';
$string['failedtoobtainuploadedleapfile'] = 'Tentativo di acquisizione del file LEAP2A caricato fallito';
$string['failedtounzipleap2afile'] = 'Tentativo di decomprimere il file LEAP2A fallito. Guarda il log degli errori del server per avere più informazioni';
$string['fileisnotaziporxmlfile'] = 'Questo file non è risultato essere un file ZIP o un file XML';
$string['howdoyouwanttocreatethisuser'] = 'Come vuoi creare questo utente?';
$string['leap2aimportfailed'] = '<p><strong>Sorry - L\'importazione del file LEAP2A è fallita.</strong></p><p>Questo può essere stato causato dal fatto che non hai selezionato un file LEAP2A valido da caricare. In alternativa, ci può essere stato un bug in Mahara che ha determinato il fallimento, anche se il file è valido.</p><p>Per favore <a href="add.php">torna indietro e prova di nuovo</a>, e se il problema persiste, puoi provare ad inviare al <a href="http://mahara.org/forums/">Mahara Forum</a> una richiesta d\'aiuto. Preparati alla richiesta di una copia del tuo file!</p>';
$string['newuseremailnotsent'] = 'Tentativo di invio e-mail di benvenuto al un nuovo utente fallito.';
$string['newusercreated'] = 'Nuovo account utente creato con successo';
$string['noleap2axmlfiledetected'] = 'Nessun file leap2a.xml trovato - per favore verifica di nuovo il tuo file di esportazione';
$string['Or...'] = 'O...';
$string['userwillreceiveemailandhastochangepassword'] = 'Essi riceveranno una e-mail che li informerà  sui dettagli del loro nuovo account. Al primo login, saranno forzati a cambiare la loro password.';
$string['uploadleap2afile'] = 'Carica file LEAP2A';

$string['usercreationmethod'] = '1 - Metodo di creazione utente';
$string['basicdetails'] = '2 - Informazioni base';
$string['create'] = '3 - Crea';

// Login as
$string['loginasuser'] = 'Login come %s';
$string['becomeadminagain'] = 'Diventa %s di nuovo';
// Login-as exceptions
$string['loginasdenied'] = 'Tentativo di login come altro utente senza autorizzazione';
$string['loginastwice'] = 'Tentativo di login come altro utente, quando hai già  effettuato l\'accesso come utente diverso';
$string['loginasrestorenodata'] = 'Non ci sono dati utente da ripristinare';
$string['loginasoverridepasswordchange'] = 'Se ti stai mascherando da altro utente, puoi scegliere %slog in ogni caso%s, ignorando la schermata per il cambio della password.';

// Institutions
$string['Add'] = 'Aggiungi';
$string['admininstitutions'] = 'Amministra Istituzioni';
$string['adminauthorities'] = 'Amministra Autorità  Istituzionali';
$string['addinstitution'] = 'Aggiungi Istituzione';
$string['authplugin'] = 'Plugin di autenticazione';
$string['deleteinstitution'] = 'Cancella Istituzione';
$string['deleteinstitutionconfirm'] = 'Sei veramente sicuro di voler cancellare questa Istituzione?';
$string['institutionaddedsuccessfully2'] = 'Istituzione aggiunta con successo';
$string['institutiondeletedsuccessfully'] = 'Istituzione cancellata con successo';
$string['noauthpluginforinstitution'] = 'L\'Amministratore del Sito non ha configurato il Plugin per l\'autenticazione di questa Istituzione.';
$string['adminnoauthpluginforinstitution'] = 'Per favore configura il Plugin di autenticazione di questa Istituzione.';
$string['institutionname'] = 'Nome dell\'Istituzione';
$string['institutionnamealreadytaken'] = 'Il nome di questa Istituzione è già  stato assegnato';
$string['institutiondisplayname'] = 'Mostra il nome dell\'Istituzione';
$string['institutionexpiry'] = 'Data di scadenza dell\'Istituzione';
$string['institutionexpirydescription'] = 'La data nella quale l\'appartenenza alle Istituzioni di %s sarà  sospesa.';
$string['institutionupdatedsuccessfully'] = 'Istituzione aggiornata con successo.';
$string['registrationallowed'] = 'Registrazione consentita?';
$string['registrationalloweddescription2'] = 'Se gli utenti possono registrarsi in questo Sito per questa Istituzione utilizzando il modulo di registrazione. Se la registrazione è disabilitata, nessun utente può richiedere l\'appartenenza all\'Istituzione, e i membri non possono lasciare l\'Istituzione o cancellare il loro account utente volontariamente.';
$string['defaultmembershipperiod'] = 'Periodo predefinito come membro dell\'Istituzione';
$string['defaultmembershipperioddescription'] = 'Quanto tempo i nuovi membri sono associati a questa Istituzione';
$string['authenticatedby'] = 'Metodo di autenticazione';
$string['authenticatedbydescription'] = '';
$string['remoteusername'] = 'Username per autenticazione esterna';
$string['remoteusernamedescription'] = 'Se l\'utente è autenticato con un altro metodo basato su un diverso username su database remoto, inserire lo username remoto qui.';
$string['institutionsettings'] = 'Impostazioni dell\'Istituzione';
$string['institutionsettingsdescription'] = 'Qui puoi modificare le impostazioni degli Utenti in merito all\'adesione alle Istituzioni del Sito.';
$string['changeinstitution'] = 'Cambia Istituzione';
$string['institutionstaff'] = 'Staff dell\'Istituzione';
$string['institutionadmins'] = 'Amministratori dell\'Istituzione';
$string['institutionadmin'] = 'Amministratore dell\'Istituzione';
$string['institutionadministrator'] = 'Amministratore dell\'Istituzione';
$string['institutionadmindescription'] = 'Se selezionato l\'utente può amministrare tutti gli utenti di questa Istituzione.';
$string['settingsfor'] = 'Impostazioni per:';
$string['institutionadministration'] = 'Amministrazione dell\'Istituzione';
$string['institutionmembers'] = 'Membri dell\'Istituzione';
$string['notadminforinstitution'] = 'Tu non sei l\'Amministratore di questa Istituzione';
$string['institutionmemberspagedescription'] = 'In questa pagina puoi vedere gli utenti che hanno chiesto l\'adesione alla tua Istituzione e aggiungerli come membri. E\', inoltre, possibile rimuovere utenti dalla tua Istituzione e invitare nuovi utenti ad iscriversi.';

$string['institutionusersinstructionsrequesters'] = 'L\'elenco degli utenti a sinistra mostra gli utenti che hanno chiesto di aderire alla tua Istituzione. E\' possibile utilizzare la casella di ricerca per ridurre il numero degli utenti visualizzati. Se desideri aggiungere utenti all\'Istituzione o rifiutare la loro richiesta di adesione, per prima cosa sposta gli utenti sul lato destro selezionando uno o più utenti e facendo clic sulla freccia a destra. Il pulsante "Aggiungi membri" aggiunge gli utenti all\'Istituzione. Il pulsante "Rifiuta le richieste" rimuoverà  le richieste di adesione degli utenti sulla destra.';
$string['institutionusersinstructionsnonmembers'] = 'L\'elenco degli utenti a sinistra mostra tutti gli utenti che non sono ancora membri della tua Istituzione. E\' possibile utilizzare la casella di ricerca per ridurre il numero degli utenti visualizzati. Per invitare altri utenti a far parte della tua Istituzione, per prima cosa sposta gli utenti sul lato destro selezionando uno o più utenti e, quindi, facendo clic sulla freccia destra per spostare gli utenti nella lista a destra. Il pulsante "Invita utenti" invia gli inviti a tutti gli utenti a destra. Questi utenti non saranno associati alla tua Istituzione fino a quando non accettaranno l\'invito.';
$string['institutionusersinstructionsmembers'] = 'L\'elenco degli utenti a sinistra mostra tutti i membri dell\'Istituzione. E\' possibile utilizzare la casella di ricerca per ridurre il numero degli utenti visualizzati. Per rimuovere gli utenti dall\'Istituzione, per prima cosa spostare gli utenti sul lato destro selezionando uno o più utenti a sinistra e poi cliccando sulla freccia a destra. Gli utenti selezionati saranno spostati a destra. Il pulsante "Rimuovi utenti" rimuove tutti gli utenti a destra relativi all\'Istituzione. Gli utenti a sinistra rimarranno nell\'Istituzione.';

$string['editmembers'] = 'Modifica Membri';
$string['editstaff'] = 'Modifica Staff';
$string['editadmins'] = 'Modifica Amministratori';
$string['membershipexpiry'] = 'Scadenza adesione Membro';
$string['membershipexpirydescription'] = 'Data entro la quale l\'utente sarà  automaticamente rimosso dall\'Istituzione.';
$string['studentid'] = 'ID Number';
$string['institutionstudentiddescription'] = 'Un identificatore opzionale specifico per l\'Istituzione. Questo campo non è modificabile dall\'utente.';

$string['userstodisplay'] = 'Utenti da visualizzare:';
$string['institutionusersrequesters'] = 'Utenti che hanno richiesto di aderire all\'Istituzione';
$string['institutionusersnonmembers'] = 'Utenti che non hanno ancora richiesto l\'adesione';
$string['institutionusersmembers'] = 'Utenti che sono già  membri dell\'Istituzione';

$string['addnewmembers'] = 'Aggiungi nuovi membri';
$string['addnewmembersdescription'] = '';
$string['usersrequested'] = 'Utenti che hanno richiesto di diventare membri';
$string['userstobeadded'] = 'Utenti da aggiungere come membri';
$string['userstoaddorreject'] = 'Utenti da aggiungere / respingere';
$string['addmembers'] = 'Aggiungi membri';
$string['inviteuserstojoin'] = 'Invita utenti ad unirsi all\'Istituzione';
$string['Non-members'] = 'Non-membri';
$string['userstobeinvited'] = 'Utenti da invitare';
$string['inviteusers'] = 'Invita utenti';
$string['removeusersfrominstitution'] = 'Rimuovi utenti dall\'Istituzione';
$string['currentmembers'] = 'Membri attuali';
$string['userstoberemoved'] = 'Utenti da rimuovere';
$string['removeusers'] = 'Rimuovi utenti';
$string['declinerequests'] = 'Respingi richeste';
$string['nousersupdated'] = 'Nessun Utente sarà  aggiunto';

$string['institutionusersupdated_addUserAsMember'] = 'Utenti aggiunti';
$string['institutionusersupdated_declineRequestFromUser'] = 'Richieste respinte';
$string['institutionusersupdated_removeMembers'] = 'Utenti rimossi';
$string['institutionusersupdated_inviteUser'] = 'Inviti inviati';

$string['maxuseraccounts'] = 'Massimo numero di account utente ammessi';
$string['maxuseraccountsdescription'] = 'Numero massimo di account utente che possono essere associati all\'Istituzione. Se non vi è alcun limite, questo campo deve essere lasciato bianco.';
$string['institutionmaxusersexceeded'] = 'Queata Istituzione è piena, dovrai incrementare il numero degli utenti ammissimibili per questa Istituzione prima che questo nuovo utente possa essere aggiunto.';
$string['institutionuserserrortoomanyusers'] = 'Gli utenti non sono stati aggiunti. Il numero dei membri non può superare il numero massimo consentito per questa Istituzione. E\' possibile aggiungere un minor numero di utenti, rimuovere eventuali altri utenti dall\'Istituzione o chiedere all\'Amministratore del sito di aumentare il numero massimo di utenti possibili.';
$string['institutionuserserrortoomanyinvites'] = 'I vostri inviti non sono stati inviati. Il numero dei membri esistenti e il numero di inviti in sospeso non può superare il massimo numero di utenti ammessi per l\'Istituzione. Puoi invitare un numero inferiore di utenti, rimuovere eventuali altri utenti dall\'Istituzione o chiedere all\'Amministratore del sito di aumentare il numero massimo di utenti possibili.';

$string['Members'] = 'Membri';
$string['Maximum'] = 'Numero massimo';
$string['Staff'] = 'Staff';
$string['Admins'] = 'Amministratori';

$string['noinstitutions'] = 'Nessuna Istituzione';
$string['noinstitutionsdescription'] = 'Se vuoi associare utenti ad una Istituzione, devi prima creare l\'Istituzione.';

$string['Lockedfields'] = 'Campi bloccati';

// Suspend Institutions
$string['errorwhileunsuspending'] = 'C\'è stato un errore mentre provavi ad annullare la sospensione';
$string['institutionsuspended'] = 'Istituzione sospesa';
$string['institutionunsuspended'] = 'Istituzione non sospesa';
$string['suspendedinstitution'] = 'SOSPESA';
$string['suspendinstitution'] = 'Sospendi Istituzione';
$string['suspendinstitutiondescription'] = 'Qui puoi sospendere un\'Istituzione. Gli utenti delle Istituzioni sospese non potranno effettuare il login fino a quando la sospensione non sarà  annullata.';
$string['suspendedinstitutionmessage'] = 'Questa Istituzione è stata sospesa';
$string['unsuspendinstitution'] = 'Istituzione non sospesa';
$string['unsuspendinstitutiondescription'] = 'Qui puoi annullare la sospensione di un\'Istituzione. Gli utenti delle Istituzioni sospesenon potranno effettuare il login fino a quando l\'Istituzione è sospesa.<br /><strong>Beware:</strong> Annullando la sospensione di una Istituzione senza resettare o disabilitare la data di scadenza potrebbe verificarsi che l\'Istituzione risulti ancora sospesa.';
$string['unsuspendinstitutiondescription_top'] = '<em>Attenzione:</em> Annullando la sospensione di una Istituzione senza resettare o disabilitare la data di scadenza potrebbe verificarsi che l\'Istituzione risulti ancora sospesa.';


// Admin User Search
$string['Query'] = 'Richiesta';
$string['Institution'] = 'Istituzione';
$string['confirm'] = 'confermare';
$string['invitedby'] = 'Invitato da';
$string['requestto'] = 'Richiesta di';
$string['useradded'] = 'Utente aggiunto';
$string['invitationsent'] = 'Invito inviato';

// general stuff
$string['notificationssaved'] = 'Impostazioni di notifica salvate';
$string['onlyshowingfirst'] = 'Solo mostrando la prima';
$string['resultsof'] = 'risultati di';

$string['installed'] = 'Installato';
$string['errors'] = 'Errori';
$string['install'] = 'Installa';
$string['reinstall'] = 'Reinstalla';
?>
