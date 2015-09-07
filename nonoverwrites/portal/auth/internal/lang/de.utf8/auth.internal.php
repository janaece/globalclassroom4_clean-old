<?php
/**
 * This program is part of Mahara
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA
 *
 * @package    mahara
 * @subpackage auth-internal
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

$string['internal'] = 'Internal';
$string['title'] = 'Internal';
$string['description'] = 'Authentifizierung mit der Mahara Datenbank';

$string['completeregistration'] = 'Registrierung abschließen';
$string['emailalreadytaken'] = 'Diese E-Mail Adresse wurde hier schon registriert';
$string['iagreetothetermsandconditions'] = 'Ich akzeptiere die Nutzerordung';
$string['passwordformdescription'] = 'Ihr Passwort muss mindestens 6 Zeichen lang und mindestens 1 Ziffer und 2 Buchstaben enthalten';
$string['passwordinvalidform'] = 'Ihr Passwort muss mindestens 6 Zeichen lang sein und zumindest eine Ziffer und 2 Buchstaben enthalten';
$string['registeredemailsubject'] = 'Sie haben sich bei %s angemeldet';
$string['registeredemailmessagetext'] = 'Hallo %s,

Herzlichen Dank für die Anmeldung bei %s. Bitte folgen Sie dem Link um den Anmeldevorgang
abzuschließen:

%sregister.php?key=%s

Der Link wird in 24 Stunden ablaufen.

--
Freundliche Grüße,
das %s Team';
$string['registeredemailmessagehtml'] = '<p>Hallo %s,</p>
<p>Herzlichen Dank für die Anmeldung bei %s. Bitte folgen Sie dem Link um den Anmeldevorgang abzuschließen:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>Der Link ist 24 Stunden gültig.</p>

<pre>--
Freundliche Grüße,
das %s Team</pre>';
$string['registeredok'] = '<p>Sie haben sich erfolgreich angemeldet. Bitte kontrollieren Sie Ihren E-Mail Account, um den Anmeldevorgang abzuschließen.</p>';
$string['registrationnosuchkey'] = 'Entschuldigung, es ist keine Anmeldung mit diesem Schlüssel vorhanden. Vielleicht haben Sie mehr als 24 Stunden mit der Aktivierung gewartet? Ansonsten könnte es ein Fehler sein.';
$string['registrationunsuccessful'] = 'Entschuldigung, Ihre Anmeldung ist fehlgeschlagen. Der Fehler liegt auf unserer Seite. Bitte versuchen Sie es später noch einmal.';
$string['usernamealreadytaken'] = 'Entschuldigung, dieser Anmeldename ist schon vorhanden';
$string['usernameinvalidform'] = 'Die Anmeldenamen dürfen nur Buchstaben, Zahlen und die üblichen Zeichen enthalten, die Länge darf 3 bis 30 Zeichen betragen. Es sind keine Leerzeichen erlaubt.';
$string['usernameinvalidadminform'] = 'Die Anmeldenamen dürfen nur Buchstaben, Zahlen und die üblichen Zeichen enthalten, die Länge darf 3 bis 236 Zeichen betragen. Es sind keine Leerzeichen erlaubt.';
$string['youmaynotregisterwithouttandc'] = 'Ohne Zustimmung zur <a href="terms.php">Nutzerordung</a> können Sie sich nicht anmelden';
$string['youmustagreetothetermsandconditions'] = 'Sie müssen der <a href="terms.php">Nutzerordnung</a> zustimmen';

?>
