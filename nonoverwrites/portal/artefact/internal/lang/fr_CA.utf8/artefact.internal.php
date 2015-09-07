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
 * @subpackage lang
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Mon profil';

$string['profile'] = 'Mon profil';
$string['myfiles'] = 'Mes fichiers';

$string['mandatory'] = 'Requis';
$string['public'] = 'Public';
$string['profileiconsize'] = 'Taille de l\'image';

$string['aboutdescription'] = 'Entrer votre prénom et votre nom. Si vous souhaitez utiliser un autre nom, entrez-le dans le champ pseudonyme.';
$string['contactdescription'] = 'Tous ces renseignements sont privés. Pour les communiquer à d\'autres utilisateurs, créez une page publique.';
$string['messagingdescription'] = 'Tous ces renseignements sont privés.';
$string['viewmyprofile'] = 'Afficher mon profil';

// profile categories
$string['aboutme'] = 'À propos de moi';
$string['contact'] = 'Coordonnées';
$string['messaging'] = 'Préférences de communications';
$string['general'] = 'Général';

// profile fields
$string['firstname'] = 'Prénom';
$string['lastname'] = 'Nom';
$string['fullname'] = 'Nom complet';
$string['institution'] = 'Institution';
$string['studentid'] = 'Code étudiant';
$string['preferredname'] = 'Pseudonyme';
$string['introduction'] = 'Présentation';
$string['email'] = 'Courriel';
$string['officialwebsite'] = 'Site web professionnel';
$string['personalwebsite'] = 'Site web personnel';
$string['blogaddress'] = 'Blog';
$string['address'] = 'Adresse postale';
$string['town'] = 'Ville';
$string['city'] = 'Province';
$string['country'] = 'Pays';
$string['homenumber'] = 'Téléphone (maison)';
$string['businessnumber'] = 'Téléphone (travail)';
$string['mobilenumber'] = 'Cellulaire';
$string['faxnumber'] = 'Télécopieur';
$string['icqnumber'] = 'ICQ';
$string['msnnumber'] = 'MSN Chat';
$string['aimscreenname'] = 'Nom d\'usager AIM';
$string['yahoochat'] = 'Yahoo Chat';
$string['skypeusername'] = 'Nom d\'usager Skype';
$string['jabberusername'] = 'Nom d\'usager Jabber';
$string['occupation'] = 'Titre d\'emploi';
$string['industry'] = 'Secteur d\'activités';

// Field names for view user and search user display
$string['name'] = 'Nom';
$string['principalemailaddress'] = 'Courriel principal';
$string['emailaddress'] = 'Courriel alternatif';

$string['saveprofile'] = 'Enregistrer mon profil';
$string['profilesaved'] = 'Profil enregistré';
$string['profilefailedsaved'] = 'Erreur d\'enregistrement du profil';


$string['emailvalidation_subject'] = 'Validation du courriel';
$string['emailvalidation_body'] = <<<EOF
Bonjour %s,

L'adresse de courriel %s vient d'être ajoutée à votre profil dans le site ÉCO-Stage. Utilisez le lien ci-dessous pour activer cette adresse.

%s
EOF;

$string['validationemailwillbesent'] = 'Un message de validation vous sera transmis lorsque votre profil sera enregistré.';
$string['emailactivation'] = 'Validation du courriel';
$string['emailactivationsucceeded'] = 'Validation du courriel réussie';
$string['emailactivationfailed'] = 'Échec de la validation du courriel';
$string['unvalidatedemailalreadytaken'] = 'L\'adresse de courriel que vous avez saisie existe déjà dans la base de données.';

$string['emailingfailed'] = 'Votre profil a été enregistré, mais le courriel n\'a pu être envoyé à l\'adresse %s';

$string['loseyourchanges'] = 'Annuler les modifications?';

// Profile icons
$string['editprofile']  = 'Mon profil';
$string['profileicons'] = 'Images';
$string['Default'] = 'Par défaut';
$string['deleteselectedicons'] = 'Effacer les images sélectionnées';
$string['profileicon'] = 'Image';
$string['noimagesfound'] = 'Aucune image n\'a été trouvée.';
$string['uploadedprofileiconsuccessfully'] = 'Chargement de l\'image complété';
$string['profileiconsetdefaultnotvalid'] = 'Le choix de cette image par défaut pour le profil n\'est pas valide.';
$string['profileiconsdefaultsetsuccessfully'] = 'Choix de l\'image par défaut complété.';
$string['profileiconsdeletedsuccessfully'] = 'Image(s) supprimée(s)';
$string['profileiconsnoneselected'] = 'Aucune image n\'a été choisie pour être supprimée.';
$string['onlyfiveprofileicons'] = 'Vous pouvez enregistrer jusqu\'à cinq images';
$string['or'] = 'ou';
$string['profileiconuploadexceedsquota'] = 'Le chargement de ce fichier est impossible car il vous ferait dépasser votre quota d\'espace-disque. Vous pouvez choisir de supprimer certains fichiers.';
$string['profileiconimagetoobig'] = 'La dimension de cette image est trop grande (%s par %s pixels). Elle ne doit pas dépasser %s par %s pixels.';
$string['uploadingfile'] = 'Chargement du fichier...';
$string['uploadprofileicon'] = 'Chargement de l\'image';
$string['profileiconsiconsizenotice'] = 'Vous pouvez enregistrer jusqu\'à <strong>cinq</strong>  images et choisir celle que vous voulez utiliser par défaut. La dimension de cette image doit être au minimum de 16 par 16 pixels et au maximum de  %s par %s pixels.';
$string['setdefault'] = 'Par défaut';
$string['Title'] = 'Titre';
$string['imagetitle'] = 'Titre de l\'image';
$string['usenodefault'] = 'Aucune image par défaut';
$string['usingnodefaultprofileicon'] = 'Mode aucune image par défaut';

$string['Created'] = 'Créé';
$string['Description'] = 'Description';
$string['Download'] = 'Enregistrement';
$string['lastmodified'] = 'Dernière modification';
$string['Owner'] = 'Propriétaire';
$string['Preview'] = 'Prévisualisation';
$string['Size'] = 'Taille';
$string['Type'] = 'Format';

?>
