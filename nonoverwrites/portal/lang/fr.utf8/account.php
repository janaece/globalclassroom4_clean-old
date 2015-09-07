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

$string['changepassworddesc'] = 'Pour modifier votre mot de passe, veuillez renseigner les champs ci-dessous';
$string['changepasswordotherinterface'] = 'Vous pouvez <a href="%s">changer votre mot de passe</a> à l\'aide d\'une autre interface';
$string['oldpasswordincorrect'] = 'Ce n\'est pas votre mot de passe actuel';

$string['changeusernameheading'] = 'Modifier le nom d\'utilisateur';
$string['changeusername'] = 'Nouveau nom d\'utilisateur';
$string['changeusernamedesc'] = 'Le nom d\'utilisateur que vous utilisez pour vous connecter à %s. Les noms d\'utilisateur doivent comporter entre 3 et 30 caractères alphabétiques, au moins un nombre et un symbole, mais pas d\'espace.';

$string['usernameexists'] = 'Ce nom d\'utilisateur est déjà utilisé, veuillez en choisir un autre.';

$string['accountoptionsdesc'] = 'Vous pouvez régler ici les options générales de votre compte';
$string['friendsnobody'] = 'Personne ne peut m\'ajouter comme ami';
$string['friendsauth'] = 'Les nouveaux amis nécessitent mon autorisation';
$string['friendsauto'] = 'Les nouveaux amis sont autorisés automatiquement';
$string['friendsdescr'] = 'Contrôle des amis';
$string['updatedfriendcontrolsetting'] = 'Contrôle des amis modifié';

$string['wysiwygdescr'] = 'Éditeur HTML';
$string['off'] = 'Désactiver';
$string['on'] = 'Activer';
$string['disabled'] = 'Désactivé';
$string['enabled'] = 'Activé';

$string['messagesdescr'] = 'Messages d\'autres utilisateurs';
$string['messagesnobody'] = 'N\'autoriser personne à m\'envoyer des messages';
$string['messagesfriends'] = 'Autoriser les personnes de ma liste d\'amis à m\'envoyer des messages';
$string['messagesallow'] = 'Autoriser tout le monde à m\'envoyer des messages';

$string['language'] = 'Langue';

$string['showviewcolumns'] = 'Afficher les commandes d\'ajout et de suppression de colonnes lors de la modification d\'une page';

$string['tagssideblockmaxtags'] = 'Nombre maximum de tags dans le nuage';
$string['tagssideblockmaxtagsdescription'] = 'Nombre maximum de tags dans votre nuage de tags';

$string['enablemultipleblogs'] = 'Permettre plusieurs journaux';
$string['enablemultipleblogsdescription']  = 'Par défaut, vous n\'avez qu\'un journal. Si vous désirez gérer plusieurs journaux, activez cette option.';
$string['disablemultipleblogserror'] = 'Vous ne pouvez pas désactivez l\'option de journaux multiples tant que vous avez plus d\'un journal actif.';

$string['hiderealname'] = 'Cacher votre vrai nom';
$string['hiderealnamedescription'] = 'Sélectionnez cette option si vous avez donné votre vrai nom dans votre profil et que vous ne souhaitez pas pouvoir être trouvé par celui-ci par une recherche des utilisateurs de ce site.';

$string['showhomeinfo'] = 'Afficher les informations au sujet de Mahara sur la page d\'accueil.';

$string['mobileuploadtoken'] = 'Jeton pour le dépôt via téléphone mobile';
$string['mobileuploadtokendescription'] = 'Entrez le jeton ici et sur votre téléphone mobile pour permettre le dépôts de documents depuis ce dernier (note : le jeton change après chaque dépôt. <br />Si vous avez des problèmes de connexion, créez un nouveau jeton ici et sur votre téléphone.';


$string['prefssaved'] = 'Préférences enregistrées';
$string['prefsnotsaved'] = 'Erreur lors de l\'enregistrement de vos préférences !';

$string['maildisabled'] = 'Messagerie désactivée';
$string['maildisabledbounce'] =<<< EOF
L\'envoi des messages depuis ce site sur votre messagerie électronique a été suspendu. Un grand nombre de messages envoyés ont été retournés au serveur. Veuillez contrôler que votre système de messagerie fonctionne et que votre adresse de messagerie est correcte. Vous pouvez réactiver le système d\'envoi dans les préférences de votre compte sur %s.
EOF;
$string['maildisableddescription'] = 'L\'envoi de message sur votre messagerie électronique a été suspendu. Vous pouvez <a href="%s">réactiver cette fonction</a> depuis la page « Préférences » de votre compte.';

$string['deleteaccount'] = 'Supprimer le compte';
$string['deleteaccountdescription'] = 'Si vous supprimez votre compte, vos informations de profil et vos pages ne seront plus visibles par les autres utilisateurs. Vos messages dans les forums seront encore visibles, mais le nom de l\'auteur ne sera plus affiché.';
$string['accountdeleted'] = 'Votre compte a été supprimé';