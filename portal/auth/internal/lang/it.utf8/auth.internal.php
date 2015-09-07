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
 * @subpackage auth-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = 'Interno';
$string['title'] = 'Interno';
$string['description'] = 'Autenticazione tramite il database di Mahara';

$string['completeregistration'] = 'Registrazione completata';
$string['emailalreadytaken'] = 'Questo indirizzo e-mail è già stato scelto da un altro Utente';
$string['iagreetothetermsandconditions'] = 'Accetto i Termini e le Condizioni';
$string['passwordformdescription'] = 'La password deve essere di almeno sei caratteri e deve contenere almeno una cifra e due lettere';
$string['passwordinvalidform'] = 'La password deve essere di almeno sei caratteri e deve contenere almeno una cifra e due lettere';
$string['registeredemailsubject'] = 'Ti sei registrato su %s';
$string['registeredemailmessagetext'] = 'Ciao %s,

Ti rigraziamo per esserti registrato su %s. Per piacere segui questo link per 
completare il processo di iscrizione:

%sregister.php?key=%s

--
Cordiali Saluti,
Il Team %s';
$string['registeredemailmessagehtml'] = '<p>Ciao %s,</p>
<p>Ti ringraziamo per esserti registrato su %s. Per piacere segui questo link per
completare il processo di iscrizione:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<pre>--
Cordiali saluti,
Il Team %s</pre>';
$string['registeredok'] = '<p>La registrazione è avvenuta con successo. Ti preghiamo di controllare la tua e-mail per leggere le istruzioni su come attivare il tuo account</p>';
$string['registrationnosuchkey'] = 'Spiacenti, ma non sembra essere disponibile una registrazione con questa chiave. Hai fose aspettato più di 24 ore per completare la registrazione? Altrimente potrebbe trattarsi di un tuo errore.';
$string['registrationunsuccessful'] = 'Spiacenti, la registrazione è fallita. Sitratta di un nostro problema. Prova a registrarti più tardi per favore.';
$string['usernamealreadytaken'] = 'Spiacenti, lo Username che hai scelto è gia in uso';
$string['usernameinvalidform'] = 'Gli Username possono includere lettere, numeri e i simboli più comuni. Inoltre, devono essere lunghi da 3 a 30 caratteri. Gi spazi non sono consentiti.';
$string['youmaynotregisterwithouttandc'] = 'Non puoi registrarti se non ti impegni a rispettare <a href="terms.php">Termini e Condizioni</a>';
$string['youmustagreetothetermsandconditions'] = 'Devi accettare <a href="terms.php">Termini e Condizioni</a>';

?>
