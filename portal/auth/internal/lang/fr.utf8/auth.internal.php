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
 * @subpackage fr.utf8
 * @author     Catalyst IT Ltd
 * @author     Nicolas Martignoni <nicolas@martignoni.net>
 * @author     Dominique-Alain Jan <djan@mac.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */


defined('INTERNAL') || die();

$string['internal'] = 'Interne';
$string['title'] = 'Interne';
$string['description'] = 'Utiliser la base de données de Mahara comme source d\'authentification';

$string['completeregistration'] = 'Terminer l\'enregistrement';
$string['emailalreadytaken'] = 'Cette adresse de courriel est déjà enregistrée ici';
$string['iagreetothetermsandconditions'] = 'J\'accepte les conditions d\'utilisation';
$string['passwordformdescription'] = 'Votre mot de passe doit comporter au moins six caractères et contenir au moins un chiffre et deux lettres';
$string['passwordinvalidform'] = 'Votre mot de passe doit comporter au moins six caractères et contenir au moins un chiffre et deux lettres';
$string['registeredemailsubject'] = 'Vous vous êtes enregistré sur %s';
$string['registeredemailmessagetext'] = 'Bonjour %s,

Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.

%sregister.php?key=%s

Le lien sera échu dans 24 heures.

L\'équipe de %s';
$string['registeredemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>Le lien sera échu dans 24 heures.</p>
<p>L\'équipe de %s</p>';
$string['registeredok'] = '<p>Votre enregistrement a réussi. Veuillez consulter votre boîte à lettres pour des instructions sur l\'activation de votre compte.</p>';
$string['registrationnosuchkey'] = 'Désolé, cette clef ne correspond à aucun enregistrement. Peut-être avez-vous attendu plus de 24 heures avant de terminer l\'enregistrement ? Si ce n\'est pas le cas, il s\'agit d\'un problème chez nous.';
$string['registrationunsuccessful'] = 'Désolé, votre enregistrement a échoué. Ce n\'est pas votre faute, mais la nôtre. Veuillez essayer plus tard.';
$string['usernamealreadytaken'] = 'Désolé, ce nom d\'utilisateur est déjà pris';
$string['usernameinvalidform'] = 'Votre nom d\'utilisateur ne peut comporter que des caractères alphanumériques, des points, des soulignés et des arobases. Il doit en outre comporter entre 3 et 30 caractères.';
$string['usernameinvalidadminform'] = 'Les noms d\'utilisateur peuvent contenir des lettres, des chiffres et la plupart des symboles courants, et dovient contenir entre 3 et 236 caractères. Les espaces ne sont pas autorisés.';
$string['youmaynotregisterwithouttandc'] = 'Vous ne pouvez pas vous enregistrer sans accepter les <a href="terms.php">conditions d\'utilisation</a>';
$string['youmustagreetothetermsandconditions'] = 'Vous devez accepter les <a href="terms.php">conditions d\'utilisation</a>';

// pending institution registrations
$string['confirmcancelregistration'] = 'Voulez-vous réellement annuler cette inscription ? En continuant, votre demande sera supprimée du système.';
$string['confirmemailsubject'] = 'Message de confirmation d\'enregistrement sur %s';
$string['confirmemailmessagetext'] = 'Bonjour %s,

Merci d\'avoir procédé à l\'enregsitrement d\'un compte sur %s. Veuillez cliquer sur le lien suivant afin de confirmer votre adresse email.
L\'administrateur de l\'institution sera alors informé de votre demande et la traitera dans les délais les plus brefs et vous serez alors informé des suites qu\'il y aura donné.

%sregister.php?key=%s

Ce lien n\'est valide que pendant 24 heures.

--
Sincèrement,
L\'équipe %s';
$string['confirmemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>TMerci d\'avoir procédé à l\'enregsitrement d\'un compte sur %s. Veuillez cliquer sur le lien suivant afin de confirmer votre adresse email. L\'administrateur de l\'institution sera alors informé de votre demande et la traitera dans les délais les plus brefs et vous serez alors informé des suites qu\'il y aura donné.
</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>Ce lien n\'est valide que pendant 24 heures.</p>

<pre>--
Sincèrement,
L\'équipe %s</pre>';
$string['emailconfirmedok'] = '<p>Vous avez confirmé votre adresse de messagerie avec succès. Vous allez prochainement des informations complémentaires quant à votre enregistrement.</p>';
$string['registrationcancelledok'] = 'Vous avez annulé votre demande d\'enregistrement avec succès.';
$string['registrationconfirm'] = 'Confirmer la demande d\'enregistrement ?';
$string['registrationconfirmdescription'] = 'La demande d\'enregistrement doit ête tout d\'abord acceptée par l\'administrateur de l\'institution.';
$string['registrationdeniedemailsubject'] = 'Demande d\'enregistrement à %s refusée.';
$string['registrationdeniedmessage'] = 'Bonjour %s,

Votre demande d\'enregistrement à %s a été refusée.

--
Sincèrement,
%s
L\'équipde %s';
$string['registrationdeniedmessagereason'] = 'Bonjour %s,

Votre demande d\'enregistrement à %s a été refusée.

Raison :

"%s"

--
Sincèrement,
%s
L\'équipde %s';
$string['registeredokawaitingemail'] = 'Vous avez envoyé votre demande d\'enregistrement avec succès. Un message de confirmation vous a été envoyé à votre adresse de messagerie électronique pour vous demander de confirmer cette adresse, et de continuer le processus d\'enregistrement.';
$string['registrationreason'] = 'Raison de la demande d\'enregistrement';
$string['registrationreasondesc'] = 'La raison pour demander l\'enregistrement avec l\'institution choisie, ainsi que toute information que vous jugez utile pour que l\'administrateur puisse statuer sur votre demande. L\'enregistrement ne peut avoir lieu sans ces informations.';

$string['pendingregistrationadminemailsubject'] = "Demande d\'un nouvel utilisateur pour l\'institution « %s » à %s.";
$string['pendingregistrationadminemailtext'] = "Bonjour %s,

Un nouvel utilisateur a placé une demande pour rejoindre l\'institution « %s ».

Vous recevez ce message, car vous êtes enregistré comme étant un des administrateurs de cette institution et que vous accepter ou refuser cette demande. Pour ce faire, veuillez cliquer sur le lien suivant : %s

Détails de la demande d\'enregistrement :

Nom: %s
Adresse électronique : %s
Raisons de la demande :
%s

--
Sincèrement,
L\'équipe %s";
$string['pendingregistrationadminemailhtml'] = "<p>Bonjour %s,</p>
<p>Un nouvel utilisateur a placé une demande pour rejoindre l\'institution « %s ».</p>
<p>Vous recevez ce message, car vous êtes enregistré comme étant un des administrateurs de cette institution et que vous accepter ou refuser cette demande. Pour ce faire, veuillez cliquer sur le lien suivant : <a href='%s'>%s</a></p>
<p>Détails de la demande d\'enregistrement :</p>
<p>Nom : %s</p>
<p>Adresse électronique : %s</p>
<p>Raisons de la demande :</p>
<p>%s</p>
<pre>--
Sincèrement,
L\'équipe %s</pre>";
