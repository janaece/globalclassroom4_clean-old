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

$string['createview']             = 'Créer une page publique';
$string['createviewstepone']      = 'Créer une page publique : Étape 1 : Description';
$string['createviewsteptwo']      = 'Créer une page publique : Étape 2 : Contenu';
$string['createviewstepthree']    = 'Créer une page publique : Étape 3 : Accès';
$string['editviewdetails']        = 'Modifier la description de la page publique "%s"';
$string['editblocksforview']      = 'Modifier le contenu de la page publique "%s"';
$string['editaccessforview']      = 'Modifier les droits d\'accès de la page publique "%s"';
$string['next']                   = 'Suivant';
$string['back']                   = 'Précédent';
$string['title']                  = 'Titre de la page publique';
$string['description']            = 'Description de la page publique';
$string['startdate']              = 'Date et heure de début d\'accès';
$string['stopdate']               = 'Date et heure de fin d\'accès';
$string['startdatemustbebeforestopdate'] = 'La date de début doit précéder la date de fin';
$string['ownerformat']            = 'Format d\'affichage de votre nom';
$string['ownerformatdescription'] = 'Ce champ détermine l\'affichage du champ « Auteur » du modèle sélectionné au cours de l\'étape 2';

// my views
$string['artefacts'] = 'Productions';
$string['myviews'] = 'Mes pages publiques';
$string['reallyaddaccesstoemptyview'] = 'Votre page publique ne contient aucune production. Désirez-vous quand même donner accès à cette page à ces utilisateurs?';
$string['viewdeleted'] = 'Page publique supprimée';
$string['viewsubmitted'] = 'Page publique présentée';
$string['editviewnameanddescription'] = 'Modifier la description de la page publique';
$string['editviewaccess'] = 'Modifier les droits d\'accès de la page publique';
$string['deletethisview'] = 'Supprimer cette page publique';
$string['submitthisviewto'] = 'Présenter cette page publique à';
$string['forassessment'] = 'pour évaluation';
$string['accessfromdate'] = 'Personne ne peut voir cette page publique avant %s';
$string['accessuntildate'] = 'Personne ne peut voir cette page publique après %s';
$string['accessbetweendates'] = 'Personne ne peut voir cette page publique avant %s ou après %s.';
$string['artefactsinthisview'] = 'Productions dans cette page publique';
$string['whocanseethisview'] = 'Qui peut voir cette page publique';
$string['view'] = 'page publique';
$string['views'] = 'pages publiques';
$string['View'] = 'Page publique';
$string['Views'] = 'Pages publiques';
$string['viewsubmittedtogroup'] = 'Cette page publique a été présentée à <a href="' . get_config('wwwroot') . 'group/view.php?id=%s">%s</a>.';
$string['nobodycanseethisview'] = 'Personne ne peut voir cette page publique.';
$string['noviews'] = 'Vous n\'avez pas créé de pages publiques.';

// access levels
$string['public'] = 'Publique';
$string['loggedin'] = 'Utilisateurs connectés';
$string['friends'] = 'Contacts';
$string['groups'] = 'Groupes';
$string['users'] = 'Utilisateurs';
$string['friendslower'] = 'contacts';
$string['grouplower'] = 'groupe';
$string['tutors'] = 'Accompagnateurs';
$string['loggedinlower'] = 'utilisateurs connectés';
$string['publiclower'] = 'publique';

// view user
$string['inviteusertojoingroup'] = 'Inviter cet utilisateur à se joindre à un groupe';
$string['addusertogroup'] = 'Ajouter cet utilisateur à un groupe';

// view view
$string['addedtowatchlist'] = 'Cette page publique a été ajoutée à votre liste de suivi.';
$string['attachment'] = 'Pièce jointe';
$string['removedfromwatchlist'] = 'Cette page publique a été enlevée de votre liste de suivi.';
$string['addfeedbackfailed'] = 'Échec de l\'ajout d\'un commentaire';
$string['addtowatchlist'] = 'Ajouter cette page publique à ma liste de suivi';
$string['removefromwatchlist'] = 'Enlever cette page publique de ma liste de suivi';
$string['alreadyinwatchlist'] = 'Cette page publique est déjà sur votre liste de suivi.';
$string['attachedfileaddedtofolder'] = "Le fichier %s a été ajouté à votre dossier  '%s.";
$string['attachfile'] = "Fichier joint";
$string['complaint'] = 'Contenu inapproprié';
$string['date'] = 'Date';
$string['feedback'] = 'Commentaires';
$string['feedbackattachdirname'] = 'Commentaires';
$string['feedbackattachdirdesc'] = 'Commentaires';
$string['feedbackattachmessage'] = 'Le commentaire joint a été ajouté.';
$string['feedbackonthisartefactwillbeprivate'] = 'Les commentaires sur cette production ne seront vus que par son auteur.';
$string['feedbackonviewbytutorofgroup'] = 'Commentaires sur %s par %s de %s';
$string['feedbacksubmitted'] = 'Commentaires envoyés';
$string['makepublic'] = 'Rendre public';
$string['nopublicfeedback'] = 'Aucun commentaire public';
$string['notifysiteadministrator'] = 'Alerter l\'administrateur du site';
$string['placefeedback'] = 'Écrire un commentaire';
$string['print'] = 'Imprimer';
$string['thisfeedbackispublic'] = 'Ce commentaire est public.';
$string['thisfeedbackisprivate'] = 'Ce commentaire est confidentiel.';
$string['makeprivate'] = 'Rendre confidentiel';
$string['reportobjectionablematerial'] = 'Signaler un contenu inapproprié';
$string['reportsent'] = 'Votre message a été envoyé.';
$string['updatewatchlistfailed'] = 'Échec de la mise à jour de la liste de suivi';
$string['View'] = 'Page publique';
$string['watchlistupdated'] = 'Votre liste de suivi a été mise à jour.';
$string['editmyview'] = 'Modifier ma page publique';
$string['backtocreatemyview'] = 'Retourner à la création d\'une page publique';

$string['friend'] = 'Contact';
$string['profileicon'] = 'Image';

// general views stuff
$string['allviews'] = 'Toutes les pages publiques';

$string['submitviewconfirm'] = 'Si vous présentez \'%s\' à \'%s\' pour évaluation, vous ne pourrez pas modifier cette page pendant la durée de l\'évaluation.  Désirez-vous vraiment présenter cette page publique?';
$string['viewsubmitted'] = 'Page publique présentée';
$string['submitviewtogroup'] = 'Présentée \'%s\' à \'%s\' pour évaluation';
$string['cantsubmitviewtogroup'] = 'Vous ne pouvez présenter cette page publique pour évaluation par ce groupe.';

$string['cantdeleteview'] = 'Vous ne pouvez pas supprimer cette page publique.';
$string['deletespecifiedview'] = 'Supprimer la page publique "%s"';
$string['deleteviewconfirm'] = 'Désirez-vous vraiement supprimer cette page publique? Cette action est irréversible.';

$string['editaccesspagedescription'] = '<p>Par défaut, chaque page publique ne peut être vue que par vous. Cette section vous permet de choisir à qui vous voulez la montrer.</p>';

$string['overridingstartstopdate'] = 'Remplacer les dates de début et de fin';
$string['overridingstartstopdatesdescription'] = 'Vous pouvez choisir des dates générales de début et de fin. Les utilisateurs ne pourront accéder à cette page publique avant ou après les dates choisies, sans égard aux autres options d\'accès que vous avez déjà définies. ';

$string['emptylabel'] = 'Cliquez ici pour ajouter une étiquette';
$string['empty_block'] = 'Choisissez une production dans la liste de gauche';

$string['viewinformationsaved'] = 'Description de la page publique enregistrée';

$string['canteditdontown'] = 'Vous ne pouvez modifier cette page publique parce que vous n\'en êtes pas l\'auteur.';
$string['canteditdontownfeedback'] = 'Vous ne pouvez modifier ce commentaire parce que vous n\'en êtes pas l\'auteur.';
$string['feedbackchangedtoprivate'] = 'Commentaire confidentiel';

$string['addtutors'] = 'Ajouter un accompagnateur';
$string['viewcreatedsuccessfully'] = 'Page publique créée';
$string['viewaccesseditedsuccessfully'] = 'Droits d\'accès à la page publique enregistrés.';
$string['viewsavedsuccessfully'] = 'Page publique enregistrée';

$string['invalidcolumn'] = 'La colonne %s est invalide';

$string['confirmcancelcreatingview'] = 'La page publique est incomplète. Désirez-vous vraiment annuler?';

// view control stuff

$string['displaymyview'] = 'Afficher ma page publique';
$string['editthisview'] = 'Modifier cette page publique';

$string['success.addblocktype'] = 'Bloc ajouté';
$string['err.addblocktype'] = 'Impossible d\'ajouter ce bloc à votre page publique';
$string['success.moveblockinstance'] = 'Bloc déplacé';
$string['err.moveblockinstance'] = 'Impossible de déplacer le bloc à l\'emplacement indiqué';
$string['success.removeblockinstance'] = 'Bloc supprimé';
$string['err.removeblockinstance'] = 'Impossible de supprimer ce bloc';
$string['success.addcolumn'] = 'Colonne ajoutée';
$string['err.addcolumn'] = 'Impossible d\'ajouter la nouvelle colonne';
$string['success.removecolumn'] = 'Colonne supprimée';
$string['err.removecolumn'] = 'Impossible de supprimer la colonne';

$string['confirmdeleteblockinstance'] = 'Voulez-vous vraiment supprimer ce bloc?';
$string['blockinstanceconfiguredsuccessfully'] = 'Bloc configuré';

$string['blocksintructionnoajax'] = 'Choisissez un bloc de contenu et glissez-le à l\'endroit de votre choix sur votre page publique. Vous pouvez déplacer le bloc en cliquant sur l\'icone des flèches dans la barre titre du bloc.';
$string['blocksinstructionajax'] = 'Glissez et déposez les blocs de contenu sur la page. Vous pouvez en tout temps repositionner les blocs dans la page.';

$string['addnewblockhere'] = 'Ajouter un nouveau bloc ici';
$string['add'] = 'Ajouter';
$string['addcolumn'] = 'Ajouter une colonne';
$string['removecolumn'] = 'Supprimer cette colonne';
$string['moveblockleft'] = 'Déplacer ce bloc à gauche';
$string['moveblockdown'] = 'Déplacer ce bloc vers le bas';
$string['moveblockup'] = 'Déplacer ce bloc vers le haut';
$string['moveblockright'] = 'Déplacer ce bloc à droite';
$string['configureblock'] = 'Configurer ce bloc';
$string['removeblock'] = 'Supprimer ce bloc';

$string['changemyviewlayout'] = 'Modifier la mise en page';
$string['viewcolumnspagedescription'] = 'Choisissez d\'abord le nombre de colonnes de votre page publique. Vous pourrez ensuite ajuster la largeur des colonnes.';
$string['viewlayoutpagedescription'] = 'Choisissez d\'abord le nombre de colonnes pour la disposition du contenu de votre page publique.';
$string['changeviewlayout'] = 'Modifier la mise en page';
$string['backtoyourview'] = 'Retour à la page publique';
$string['viewlayoutchanged'] = 'Modifications à la mIse en page enregistrées';
$string['numberofcolumns'] = 'Number of columns';


$string['by'] = 'par';
$string['in'] = 'dans';
$string['noblocks'] = 'Désolé! aucun bloc pour cette catégorie';
$string['Preview'] = 'Aperçu';

$string['50,50'] = $string['33,33,33'] = $string['25,25,25,25'] = 'Largeurs égales';
$string['67,33'] = 'Colonne de gauche plus large';
$string['33,67'] = 'Colonne de droite plus large';
$string['25,50,25'] = 'Colonne centrale plus large';
$string['15,70,15'] = 'Colonne centrale très large';
$string['20,30,30,20'] = 'Colonnes centrales plus larges';
$string['noviewlayouts'] = 'Il n\'a y pas d\'affichage prévu pour une page publique à %s colonnes';

$string['blocktypecategory.feeds'] = 'Flux RSS/ATOM';
$string['blocktypecategory.fileimagevideo'] = 'Fichiers, images et vidéos';
$string['blocktypecategory.multimedia'] = 'Multimédia';

$string['notitle'] = 'Sans titre';
$string['clickformoreinformation'] = 'Cliquer ici pour plus d\'information et poster votre commentaire';

$string['Browse'] = 'Consulter';
$string['Search'] = 'Rechercher';
$string['noartefactstochoosefrom'] = 'Désolé, aucune production ne peut être ajoutée.';

$string['access'] = 'Accès';

?>
