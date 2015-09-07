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

// @todo<nigel>: most likely need much better descriptions here for these environment issues
$string['phpversion'] = 'Mahara non funzionerà su PHP < %s. Sei pregato di aggiornare la tua versione di PHP, o spostare Mahara su un host differente.';
$string['jsonextensionnotloaded'] = 'La configurazione del server non include l\'estensione JSON. Mahara la richiede per inviare dati dal e al browser. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['pgsqldbextensionnotloaded'] = 'La configurazione del server non include l\'estensione pgsl. Mahara la richiede  per immagazzinare i dati in un database relazionale. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['mysqldbextensionnotloaded'] = 'La configurazione del server non include l\'estensione mysql, Mahara la richiede per immagazzinare i dati in un database relazionale. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['unknowndbtype'] = 'La tua configurazione del server si riferisce ad un tipo di database sconosciuto. Valori validi sono "postgres8" e "mysql5". Cambia il tipo di database nel file config.php.';
$string['domextensionnotloaded'] = 'La configurazione del tuo server non include l\'estensione dom. Mahara ha bisogno di questa esetnsione per gestire i dati XML da varie fonti.';
$string['xmlextensionnotloaded'] = 'La configurazione del server non include l\'estensione %s. Mahara la richiede per analizzare dati XML da varie sorgenti. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['gdextensionnotloaded'] = 'La configurazione del server non include l\'estensione GD. Mahara la richiede per effettura operazione di ridimensionamento ed altro sulle immagini caricate. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['gdfreetypenotloaded'] = 'La configurazione del tuo server dell\'estensione gd non include il supporto Freetype. Mahara ha bisogno di ciò per costruire le immagini CAPTCHA. Per favore verifica che gd sia sia configurato con questa opzione.';
$string['sessionextensionnotloaded'] = 'La configurazione del tuo server non include l\'estensione session. Mahara la richiede per poter gestire l\'accesso degli utenti. Controlla che sia caricata nel file php.ini, o installala se non è installata.';
$string['curllibrarynotinstalled'] = 'La configurazione del tuo server non include l\'estensione curl. Mahara ne ha bisogno per l\'integrazione con Moodle e per recuperare i feed esterni. Per favore accertati che curl sia caricata nel file php.ini oppure installala se non è installata.';
$string['registerglobals'] = 'Le impostazioni di PHP sono rischiose, register_globals è attivato. Mahara sta cercando di ovviare al problema, ma dovresti correggerlo';
$string['magicquotesgpc'] = 'Le impostazioni di PHP sono rischiose, magic_quotes_gpc è attivato. Mahara sta cercando di ovviare al problema, ma dovresti correggerlo';
$string['magicquotesruntime'] = 'Le impostazioni di PHP sono rischiose, magic_quotes_runtime è attivato. Mahara sta cercando di ovviare al problema, ma dovresti correggerlo';
$string['magicquotessybase'] = 'Le impostazioni di PHP sono rischiose, magic_quotes_sybase è attivato. Mahara sta cercando di ovviare al problema, ma dovresti correggerlo';

$string['safemodeon'] = 'Il server sembra essere in esecuzione in modalità protetta. Mahara non supporta l\'esecuzione in modalità protetta. Devi disabilitarla dal file php.ini o dalla configurazione di apache  del sito.

Se si è su un host condiviso, è molto probabile che non sia possibile impostare safe_mode su off, nel caso chiedere al fornitore dell\'host.';
$string['datarootinsidedocroot'] = 'Hai impostato la data root all\'interno della document root. Questo è un grosso problema di sicurezza e, quindi, ognuno può richiedere direttamente dati di sessione (in modo da dirottare le sessioni di altri utenti) o file che non devono essere accessibili perchè caricati da altre persone. Ti preghiamo di configurare la data root all\'esterno della document root.';
$string['datarootnotwritable'] = 'La cartella data root definita, %s, non è scrivibile. Questo significa che né i dati di sessione, né i file utente, né null\'altro può essere caricato e salvato sul tuo server. Ti preghiamo di creare la cartella, se non esiste, o di rendere la cartella di proprietà del web server se esiste.';
$string['couldnotmakedatadirectories'] = 'Per qualche ragione alcune delle cartelle del core data non sono state create. Questo non dovrebbe succedere, visto che Mahara ha precedentemente individuato che la data root è scrivibile. Ti preghiamo di controllare i permessi della data root.';

$string['dbconnfailed'] = 'Mahara non è riuscito a connettersi all\'applicazione del database.

 * Se stai usando Mahara, ti preghiamo di aspettare un minuto e riprovare.
 * Se sei l\'Amministratore, ti preghiamo di controllare le impostazioni del database ed assicurarti che il database sia disponibile.

L\'errore ricevuto è stato:
';
$string['dbnotutf8'] = 'Non stai usando un database UTF-8. Mahara immagazzina tutti i dati come UTF-8 internamente. Per favore elimina e ricrea il database usando la codifica UTF-8.';
$string['dbversioncheckfailed'] = 'Il tuo server di database non ha la versione correttamente aggiornata per far funzionare bene Mahara. Il tuo server ha %s %s, ma Mahara richiede l\'ultima versione %s.';

// general exception error messages
$string['blocktypenametaken'] = "Tipo di Block  %s è già preso da un altro Plugin (%s)";
$string['artefacttypenametaken'] = "Tipo di Artefact %s è già preso da un altro Plugin (%s)";
$string['artefacttypemismatch'] = "Tipo di Artefact sconosciuto, stai provando ad usare questo %s come un %s";
$string['classmissing'] = "La classe %s per il tipo %s nel Plugin %s non è stata trovata";
$string['artefacttypeclassmissing'] = "I tipi Artefact devono tutti implementare una classe. %s mancante";
$string['artefactpluginmethodmissing'] =  "Il Plugin Artefact %s deve implementare %s e non lo fa";
$string['blocktypelibmissing'] = 'Manca lib.php per il Block %s nel Plugin Artefact %s';
$string['blocktypemissingconfigform'] = 'Il tipo Block %s deve implementare instance_config_form';
$string['versionphpmissing'] = 'Il Plugin %s %s manca del file version.php!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'Questo verrà installato come parte dell\'installazione del Plugin Artefact %s';
$string['blockconfigdatacalledfromset'] = 'Configdata non dovrebbe essere impostato direttamente, usa invece PluginBlocktype::instance_config_save';
$string['invaliddirection'] = 'Direzione non valida %s';
$string['onlyoneprofileviewallowed'] = 'Ti è consentito di creare una sola View del tuo profilo';
$string['onlyoneblocktypeperview'] = 'Non puoi inserire più di un blocco %s nella tua View';

// if you change these next two , be sure to change them in libroot/errors.php
// as they are duplicated there, in the case that get_string was not available.
$string['unrecoverableerror'] = 'Errore irreversibile. Questo probabilmente significa che si è incontrato un bug nel sistema.';
$string['unrecoverableerrortitle'] = '%s - Sito non raggiungibile';
$string['parameterexception'] = 'Un parametro richiesto non è stato trovato';

$string['notfound'] = 'Non trovato';
$string['notfoundexception'] = 'La pagina che stai cercando non può essere trovata';

$string['accessdenied'] = 'Accesso Negato';
$string['accessdeniedexception'] = 'Non sei autorizzato a vedere questa pagina';

$string['viewnotfoundexceptiontitle'] = 'View non trovata';
$string['viewnotfoundexceptionmessage'] = 'Hai provato ad accedere ad una View che non esiste!';
$string['viewnotfound'] = 'View con id %s non trovata';
$string['youcannotviewthisusersprofile'] = 'Non puoi vedere il profilo di questo utente';

$string['artefactnotfoundmaybedeleted'] = "Artefact con id %s non trovato (forse è stato già cancellato?)";
$string['artefactnotfound'] = 'Artefact con id %s non trovato';
$string['notartefactowner'] = 'Non possiedi questo Artefact';

$string['blockinstancednotfound'] = 'Istanza di Block con id %s non trovata';
$string['interactioninstancenotfound'] = 'Istanza Activity con id %s non trovata';

$string['invalidviewaction'] = 'Azione del controllo View non valida: %s';

$string['missingparamblocktype'] = 'Prova prima a selezionare un tipo Block da aggiungere';
$string['missingparamcolumn'] = 'Specificazione di colonna mancante';
$string['missingparamorder'] = 'Specificazione di ordine mancante';
$string['missingparamid'] = 'Id mancante';
?>
