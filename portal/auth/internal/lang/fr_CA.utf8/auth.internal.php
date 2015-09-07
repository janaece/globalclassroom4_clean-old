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
 * @subpackage auth-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = 'Interne';
$string['title'] = 'Interne';
$string['description'] = 'Authentification avec la base de données de Mahara';

$string['completeregistration'] = 'Compléter l\'inscription';
$string['emailalreadytaken'] = 'L\'adresse courriel que vous avez donnée existe déjà dans la base de données.';
$string['iagreetothetermsandconditions'] = 'J\'accepte les Conditions d\'utilisation';
$string['passwordformdescription'] = 'Votre mot de passe doit avoir au mons six caractères et contenir au moins un chiffre et deux lettres.';
$string['passwordinvalidform'] = 'Votre mot de passe doit avoir au mons six caractères et contenir au moins un chiffre et deux lettres.';
$string['registeredemailsubject'] = 'Votre inscription à %s';
$string['registeredemailmessagetext'] = 'Bonjour %s,

Vous venez d\'ouvrir un compte sur %s. Cliquez sur le lien suivant pour compléter le processus d\'inscription :

' . get_config('wwwroot') . 'register.php?key=%s

Merci!

L\'équipe de  %s';
$string['registeredemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>Vous venez d\'ouvrir un compte sur %s. Cliquez sur le lien suivant pour compléter le processus d\'inscription :</p>
<p><a href="' . get_config('wwwroot') . 'register.php?key=%s">'
. get_config('wwwroot') . 'register.php?key=%s</a></p>
<pre>--
Merci!
L\'équipe de  %s</pre>';
$string['registeredok'] = '<p>Vous avez complété votre inscription. Un message a été envoyé à votre adresse de courriel avc les directives permettant l\'activation de votre compte.</p>';
$string['registrationnosuchkey'] = 'Désolé! Vous avez peut-être trop attendu avant de procéder à la validation de votre compte (24 heures). Si ce n\'est pas le cas, il s\,aggit sans doute d\'une erreur de notre système.';
$string['registrationunsuccessful'] = 'Désolé, votre inscription n\'a pu être complétée en raison d\'une erreur de notre système. Réessayez plus tard.';
$string['usernamealreadytaken'] = 'Désolé! ce nom d\'utilisateur existe déjà.';
$string['usernameinvalidform'] = 'Votre nom d\'usager ne doit contenir que des lettres et des chiffres, les caractères de trait d\,union, de soulignement et l\'arobas (@). Il doit aussi être compter de 3 à 30 caractères.';
$string['youmaynotregisterwithouttandc'] = 'Vous ne pourrez vous inscrire si vous n\'acceptez pas les <a href="terms.php">Conditions d\'utilisation</a>.';
$string['youmustagreetothetermsandconditions'] = 'Vous devez accepter les <a href="terms.php">Conditions d\'utilisation</a>.';

?>
