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

$string['createview']             = 'Crea View';
$string['createviewstepone']      = 'Crea View fase uno: impostazioni';
$string['createviewsteptwo']      = 'Crea View fase due: layout';
$string['createviewstepthree']    = 'Crea View fase tre: permessi di accesso';
$string['createtemplate']         = 'Crea Template';
$string['editviewdetails']        = 'Modifica i dettagli della View "%s"';
$string['editblocksforview']      = 'Modifica View "%s"';
$string['editaccessforview']      = 'Modifica permessi di accesso alla View "%s"';
$string['next']                   = 'Avanti';
$string['back']                   = 'Indietro';
$string['title']                  = 'Nome della View';
$string['description']            = 'Descrizione della View';
$string['startdate']              = 'Accessibile da (data/ora)';
$string['stopdate']               = 'Accessibile fino a (data/ora)';
$string['startdatemustbebeforestopdate'] = 'La data iniziale deve essere precedente a quella di fine';
$string['unrecogniseddateformat'] = 'Formato data sconosciuto';
$string['ownerformat']            = 'Formato del nome visualizzato';
$string['ownerformatdescription'] = 'Come vuoi che gli utenti che vedono le tue View vedano il tuo nome?';
$string['profileviewtitle']       = 'View del Profilo';
$string['editprofileview']        = 'Edita View del Profilo';

// my views
$string['artefacts'] = 'Artefact';
$string['myviews'] = 'Le mie View';
$string['groupviews'] = 'View del Gruppo';
$string['institutionviews'] = 'View dell\'Istituzione';
$string['reallyaddaccesstoemptyview'] = 'La tua View non contiene Artefact. Vuoi davvero far accedere questi Utenti alla tua View?';
$string['viewdeleted'] = 'View eliminata';
$string['viewsubmitted'] = 'View pubblicata';
$string['editviewnameanddescription'] = 'Modifica le impostazioni della View';
$string['editviewaccess'] = 'Modifica i permessi di accesso alla View';
$string['deletethisview'] = 'Elimina questa View';
$string['submitthisviewto'] = 'Invia questa View a ';
$string['forassessment'] = 'per valutazione';
$string['accessfromdate2'] = 'Nessuno può vedere questa View prima del %s';
$string['accessuntildate2'] = 'Nessuno può vedere questa View dopo il %s';
$string['accessbetweendates2'] = 'Nessuno può vedere questa View prima del %s o dopo il %s';
$string['artefactsinthisview'] = 'Artefact in questa View';
$string['whocanseethisview'] = 'Chi può vedere questa View';
$string['view'] = 'View';
$string['views'] = 'View';
$string['View'] = 'View';
$string['Views'] = 'View';
$string['viewsubmittedtogroup'] = 'Questa View è stata resa disponibile per <a href="%sgroup/view.php?id=%s">%s</a>';
$string['nobodycanseethisview2'] = 'Solo tu puoi vedere questa View';
$string['noviews'] = 'Nessuna Views.';
$string['youhavenoviews'] = 'Non hai alcuna View.';
$string['youhaveoneview'] = 'Hai 1 sola View.';
$string['youhaveviews']   = 'Hai %s View.';
$string['viewsownedbygroup'] = 'View proprietà di questo Gruppo';
$string['viewssharedtogroup'] = 'View condivise con questo Gruppo';
$string['viewssharedtogroupbyothers'] = 'View condivise con questo Gruppo da altri Utenti';
$string['viewssubmittedtogroup'] = 'View rese disponibili per questo Gruppo';

// access levels
$string['public'] = 'Pubblico';
$string['loggedin'] = 'Utenti registrati';
$string['friends'] = 'Amici ';
$string['groups'] = 'Gruppi';
$string['users'] = 'Utenti';
$string['friendslower'] = 'Amici';
$string['grouplower'] = 'Gruppo';
$string['tutors'] = 'Tutor';
$string['loggedinlower'] = 'Utenti registrati';
$string['publiclower'] = 'Pubblico';
$string['everyoneingroup'] = 'Ognuno del Gruppo';
$string['token'] = 'URL segreto';

// view user
$string['inviteusertojoingroup'] = 'Invita questo Utente ad unirsi al Gruppo';
$string['addusertogroup'] = 'Aggiungi questo Utente ad un Gruppo';

// view view
$string['addedtowatchlist'] = 'Questa View è stata aggiunta alla tua Watchlist';
$string['attachment'] = 'Allegato';
$string['removedfromwatchlist'] = 'Questa View è stata rimossa dalla tua Watchlist';
$string['addfeedbackfailed'] = 'Aggiunta del Feedback fallita';
$string['addtowatchlist'] = 'Aggiungi View alla Watchlist';
$string['removefromwatchlist'] = 'Rimuovi View dalla Watchlist';
$string['alreadyinwatchlist'] = 'Questa View è già nella tua Watchlist';
$string['attachedfileaddedtofolder'] = "Il File allegato %s è stato aggiunto alla tua cartella '%s'.";
$string['attachfile'] = "Allega File";
$string['complaint'] = 'Reclamo';
$string['date'] = 'Data';
$string['feedback'] = 'Feedback';
$string['feedbackattachdirname'] = 'File di valutazione';
$string['feedbackattachdirdesc'] = 'File allegati alla valutazione della View ';
$string['feedbackattachmessage'] = 'L\'allegato è stato aggiunto alla tua cartella %s ';
$string['feedbackonthisartefactwillbeprivate'] = 'Il Feedback su questo Artefact sarà visibile solo al suo autore.';
$string['feedbackonviewbytutorofgroup'] = 'Feedback su %s da %s di %s';
$string['feedbacksubmitted'] = 'Feedback inviato';
$string['makepublic'] = 'Rendilo pubblico';
$string['nopublicfeedback'] = 'Feedback non pubblico';
$string['notifysiteadministrator'] = 'Notifica Amministratore';
$string['placefeedback'] = 'Inserisci Feedback';
$string['placefeedbacknotallowed'] = 'Non sei autorizzato a dare Feedback a questa View';
$string['print'] = 'Stampa';
$string['thisfeedbackispublic'] = 'Questo Feedback è pubblico';
$string['thisfeedbackisprivate'] = 'Questo feedback è riservato';
$string['makeprivate'] = 'Cambia a riservato';
$string['reportobjectionablematerial'] = 'Segnalazione materiale offensivo';
$string['reportsent'] = 'La tua segnalazione è stata inviata';
$string['updatewatchlistfailed'] = 'Aggiornamento della Watchlist fallita';
$string['watchlistupdated'] = 'La tua Watchlist è stata aggiornata con successo';
$string['editmyview'] = 'Modifica la mia View';
$string['backtocreatemyview'] = 'Indietro per creare la mia View';

$string['friend'] = 'Amico';
$string['profileicon'] = 'Icona del Profilo';

// general views stuff
$string['Added'] = 'Aggiunta';
$string['allviews'] = 'Tutte le View';

$string['submitviewconfirm'] = 'Se invii \'%s\' a \'%s\' per la valutazione, non potrai più modificare la View fino a che il tuo Tutor non ha terminato di valutare la View. Sei sicuro di voler inviare questa View ora?';
$string['viewsubmitted'] = 'View inviata';
$string['submitviewtogroup'] = 'Invia \'%s\' a \'%s\' per valutazione';
$string['cantsubmitviewtogroup'] = 'Non puoi inviare questa View per la valutazione a questo Gruppo';

$string['cantdeleteview'] = 'Non puoi eliminare questa View';
$string['deletespecifiedview'] = 'Elimina la View "%s"';
$string['deleteviewconfirm'] = 'Vuoi davvero eliminare questa View? Non sarà possibile più tornare indietro';

$string['editaccesspagedescription2'] = '<p>In generale solo tu puoi vedere la tua View. Qui, però, puoi scegliere chi altri può vedere i contenuti della tua View. Clicca Aggiungi per consentire l\'accesso al pubblico, agli Utenti registrati o agli Amici. Usa il riquadro Cerca per aggiungere singoli Utenti o Gruppi. Gli Utenti aggiunti compariranno nel riquadro di destra, sotto Aggiunti.</p>
<p>Appena completato, vai in basso e clicca Salva per continuare.</p>';

$string['overridingstartstopdate'] = 'A cavallo tra la data di avvio e di fine';
$string['overridingstartstopdatesdescription'] = 'E\' possibile impostare una data di inizio o/e di fine. Gli altri Utenti non potranno vedere la tua View prima della data di inizio e dopo quella di fine, malgrado ogni altro accesso che tu abbia concesso.';

$string['emptylabel'] = 'Clicca qui per inserire il testo nelle etichette';
$string['empty_block'] = 'Seleziona un Artefact dall\'albero sulla sinistra e collocalo qui';

$string['viewinformationsaved'] = 'Contenuti della View salvati con successo';

$string['canteditdontown'] = 'Non puoi modificare questa View perché non ne sei il proprietario';
$string['canteditdontownfeedback'] = 'Non puoi modificare questo Feedback perché non ne sei il proprietario';
$string['canteditsubmitted'] = 'Non puoi modificare questa View perchè è stata inviata al Gruppo "%s" per la valutazione. Devi attendere che un Tutor abbia valutato la View.';
$string['feedbackchangedtoprivate'] = 'Feedback diventato riservato';

$string['addtutors'] = 'Aggiungi Tutor';
$string['viewcreatedsuccessfully'] = 'View creata con successo';
$string['viewaccesseditedsuccessfully'] = 'Permessi di accesso alla View salvati con successo';
$string['viewsavedsuccessfully'] = 'View salvata con successo';

$string['invalidcolumn'] = 'Colonna %s fuori dai margini';

$string['confirmcancelcreatingview'] = 'Questa View non è stata completata. Vuoi davvero eliminarla?';

// view control stuff

$string['editblockspagedescription'] = '<p>Scegli dalle etichette sottostanti per definire quali Block vuoi mostrare nella tua View. Puoi cliccare e trascinare i Block nel layout della View. Seleziona l\'icona con il <strong>?</strong> per maggiori informazioni.</p>';
$string['displaymyview'] = 'Mostra la mia View';
$string['editthisview'] = 'Modifica questa View';

$string['success.addblocktype'] = 'Block aggiunto con successo';
$string['err.addblocktype'] = 'Non puoi aggiungere il Block alla tua View';
$string['success.moveblockinstance'] = 'Block aggliunto con successo';
$string['err.moveblockinstance'] = 'Non puoi aggungere il Block nella posizione indicata';
$string['success.removeblockinstance'] = 'Block eliminato con successo';
$string['err.removeblockinstance'] = 'Non puoi eliminare il Block';
$string['success.addcolumn'] = 'Colonna aggiunta con successo';
$string['err.addcolumn'] = 'Tentativo di aggiungere la colonna fallito';
$string['success.removecolumn'] = 'Colonna eliminata con successo';
$string['err.removecolumn'] = 'Tentativo di eliminare la colonna fallito';

$string['confirmdeleteblockinstance'] = 'Sei sicuri di voler eliminare questo Block?';
$string['blockinstanceconfiguredsuccessfully'] = 'Block configurato con successo';

$string['blocksintructionnoajax'] = 'Seleziona un Block e scegli dove aggiungerlo nella tua View. Puoi posizionare un Block utilizzando i comandi sulla barra del titolo';
$string['blocksinstructionajax'] = 'Trascina i Block sotto questa linea per aggiungerli al layout della tua View. Puoi spostare i Block all\'interno del layout della View per posizionarli';

$string['addnewblockhere'] = 'Aggiungi un nuovo Block qui';
$string['add'] = 'Aggiungi';
$string['addcolumn'] = 'Aggiungi colonna';
$string['remove'] = 'Rimuovi';
$string['removecolumn'] = 'Rimuovi questa colonna';
$string['moveblockleft'] = 'Sposta Block a sinistra';
$string['movethisblockleft'] = "Sposta questo Block a sinistra";
$string['moveblockdown'] = "Sposta il Block %s in basso";
$string['movethisblockdown'] = "Sposta questo Block in basso";
$string['moveblockup'] = "Sposta questo Block %s sopra";
$string['movethisblockup'] = "Sposta questo Block sopra";
$string['moveblockright'] = "Sposta questo Block %s a destra";
$string['movethisblockright'] = "Sposta questo Block a destra";
$string['Configure'] = 'Configura';
$string['configureblock'] = 'Configura il Block %s';
$string['configurethisblock'] = 'Configura questo Block';
$string['removeblock'] = 'Rimuovi il Block %s';
$string['removethisblock'] = 'Rimuovi questo Block';
$string['blocktitle'] = 'Titolo del Block';

$string['changemyviewlayout'] = 'Change My View Layout';
$string['viewcolumnspagedescription'] = 'First, select the number of columns in your View. In the next step, you will be able to change the widths of the columns.';
$string['viewlayoutpagedescription'] = 'Select how you would like the columns in your View to be layed out.';
$string['changeviewlayout'] = 'Change my View layout';
$string['backtoyourview'] = 'Back to my View';
$string['viewlayoutchanged'] = 'View layout changed';
$string['numberofcolumns'] = 'Number of columns';


$string['changemyviewlayout'] = 'Cambia il layout della mia View';
$string['viewcolumnspagedescription'] = 'Per prima cosa seleziona il numero di colonne della tua View. Poi potrai cambiare l\'ampiezza delle colonne.';
$string['viewlayoutpagedescription'] = 'Scegli il modo in cui vuoi che siano sistemate le colonne nella tua View.';
$string['changeviewlayout'] = 'Cambia il layout della mia View';
$string['backtoyourview'] = 'Indietro alla mia View';
$string['viewlayoutchanged'] = 'Layout della View cambiato';
$string['numberofcolumns'] = 'Numero di colonne';

$string['by'] = 'da';
$string['in'] = 'in';
$string['noblocks'] = 'Spiacenti, nessun Block in questa categoria :(';
$string['Preview'] = 'Anteprima';

$string['50,50'] = $string['33,33,33'] = $string['25,25,25,25'] = 'Ampiezze equivalenti';
$string['67,33'] = 'Colonna di sinistra più ampia';
$string['33,67'] = 'Colonna di destra più ampia';
$string['25,50,25'] = 'Colonna centrale più ampia';
$string['15,70,15'] = 'Colonna centrale molto più ampia';
$string['20,30,30,20'] = 'Colonne centrali più ampie';
$string['noviewlayouts'] = 'Non ci sono configurazioni per la colonna %s della View';

$string['blocktypecategory.feeds'] = 'Feed esterni';
$string['blocktypecategory.fileimagevideo'] = 'File, Immagini e Video';
$string['blocktypecategory.general'] = 'Generale';

$string['notitle'] = 'Nessun titolo';
$string['clickformoreinformation'] = 'Clicca per avere maggiori informazioni e dare un Feedback';

$string['Browse'] = 'Naviga';
$string['Search'] = 'Cerca';
$string['noartefactstochoosefrom'] = 'Spiacenti, nessun Artefact da scegliere';

$string['access'] = 'Accesso';
$string['noaccesstoview'] = 'Non hai il permesso per accedere a questa View';

// Templates
$string['Template'] = 'Template';
$string['allowcopying'] = 'Consenti copia';
$string['templatedescription'] = 'Seleziona questa casella se desideri che gli Utenti che vedono le tue View possano effettuarne delle copie.';
$string['choosetemplatepagedescription'] = '<p>Qui, partendo dalle View che si è autorizzati a copiare, si possono scegliere delle View come modelli per creare nuove View. È possibile visualizzare l\'anteprima di ciascuna View cliccando sul suo nome. Una volta che hai scelto la View che vuoi copiare, fai click sul pulsante "Copia View" per farne una copia e iniziare a personalizzarla.</p>';
$string['choosetemplategrouppagedescription'] = '<p>Qui, partendo dalle View che si è autorizzati a copiare, si possono scegliere delle View come modelli per creare nuove View. È possibile visualizzare l\'anteprima di ciascuna View cliccando sul suo nome. Una volta che hai scelto la View che vuoi copiare, fai click sul pulsante "Copia View" per farne una copia e iniziare a personalizzarla.</p><p><strong>Note:</strong> I Gruppi attualmente non possono fare copie di Blog o Post Blog.</p>';
$string['choosetemplateinstitutionpagedescription'] = '<p>Qui, partendo dalle View che si è autorizzati a copiare, si possono scegliere delle View come modelli per creare nuove View. È possibile visualizzare l\'anteprima di ciascuna View cliccando sul suo nome. Una volta che hai scelto la View che vuoi copiare, fai click sul pulsante "Copia View" per farne una copia e iniziare a personalizzarla.</p><p><strong>Note:</strong> Le Istituzioni attualmente non possono fare copie di Blog o Post Blog.</p>';
$string['copiedblocksandartefactsfromtemplate'] = 'Copiati %d Block e %d Artefact da %s';
$string['filescopiedfromviewtemplate'] = 'File copiati da %s';
$string['viewfilesdirname'] = 'Vedi File';
$string['viewfilesdirdesc'] = 'File delle View copiate';
$string['thisviewmaybecopied'] = 'La copia è abilitata';
$string['copythisview'] = 'Copia questa View';
$string['copyview'] = 'Copia View';
$string['createemptyview'] = 'Crea View vuota';
$string['copyaview'] = 'Copia una View';
$string['Untitled'] = 'Senza titolo';
$string['copyfornewusers'] = 'Copia per nuovi Utenti';
$string['copyfornewusersdescription'] = 'Quando viene creato un nuovo Utente, automaticamente viene fatta una copia personale di questa View nel Portfolio dell\'Utente';
$string['copyfornewmembers'] = 'Copia per i Membri di una nuova Istituzione';
$string['copyfornewmembersdescription'] = 'Automaticamente viene fatta una copia personale di questa View per tutti i Membri di %s.';
$string['copyfornewgroups'] = 'Copia per i nuovi Gruppi';
$string['copyfornewgroupsdescription'] = 'Fa una copia di qiesta View per tutti i nuovi Gruppi che fanno parte di questo tipo di Gruppi:';
$string['searchviews'] = 'Cerca View';
$string['searchowners'] = 'Cerca proprietari';
$string['owner'] = 'Proprietario';
$string['Owner'] = 'Proprietario';
$string['owners'] = 'Proprietari';
$string['show'] = 'Mostra';
$string['searchviewsbyowner'] = 'Cerca View in base al Proprietario:';
$string['selectaviewtocopy'] = 'Seleziona la View da copiare:';
$string['listviews'] = 'Elenco View';
$string['nocopyableviewsfound'] = 'Nessuna View da copiare';
$string['noownersfound'] = 'Non ho trovato Proprietari';
$string['viewsby'] = 'View di %s';
$string['Preview'] = 'Anteprima';
$string['viewscopiedfornewusersmustbecopyable'] = 'È necessario abilitare la copia prima di rendere copiabile una View per i nuovi Utenti.';
$string['viewscopiedfornewgroupsmustbecopyable'] = 'È necessario abilitare la copia prima di rendere copiabile una View per i nuovi Gruppi.';
$string['copynewusergroupneedsloggedinaccess'] = 'Le View copiate per i nuovi Utenti o Gruppi devono consentire l\'accesso agli Utenti registrati.';
$string['viewcopywouldexceedquota'] = 'Copiando questa View andrai oltre la quota consentita per i tuoi file.';

$string['blockcopypermission'] = 'Blocca l\'autorizzazione alla copia';
$string['blockcopypermissiondesc'] = 'Se dai la possibilità agli altri Utenti di copiare questa View, puoi scegliere come questo Block verrà copiato';

// Feedback list
$string['comment'] = 'commento';
$string['comments'] = 'commenti';

?>
