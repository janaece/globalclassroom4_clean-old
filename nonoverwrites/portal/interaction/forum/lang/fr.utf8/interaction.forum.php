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
 * @subpackage fr.utf8
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @author     Dominique-Alain JAN <djan@mac.com>
 * @copyright  (C) 2006-2011 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['Body'] = 'Corps';
$string['Close'] = 'Fermer';
$string['Closed'] = 'Fermer';
$string['Count'] = 'Nombre';
$string['Key'] = 'Clef';
$string['Moderators'] = 'Modérateurs';
$string['Open'] = 'Bloquer';
$string['Order'] = 'Ordre';
$string['Post'] = 'Message';
$string['Poster'] = 'Auteur';
$string['Posts'] = 'Messages';
$string['Reply'] = 'Réponse';
$string['Sticky'] = 'Épingler';
$string['Subject'] = 'Sujet';
$string['Subscribe'] = 'Abonner';
$string['Subscribed'] = 'Abonné';
$string['Topic'] = 'Discussion';
$string['Topics'] = 'Discussions';
$string['Unsticky'] = 'Relâcher';
$string['Unsubscribe'] = 'Désabonner';
$string['addpostsuccess'] = 'Message ajouté';
$string['addtitle'] = 'Ajouter forum';
$string['addtopic'] = 'Ajouter discussion';
$string['addtopicsuccess'] = 'Discussion ajoutée';
$string['allposts'] = 'Tous les messages';
$string['autosubscribeusers'] = 'Abonner automatiquement les utilisateurs ?';
$string['autosubscribeusersdescription'] = 'Choisir si les utilisateurs du groupe sont abonnés automatiquement à ce forum';
$string['cantaddposttoforum'] = 'Vous n\'êtes pas autorisé à écrire dans ce forum';
$string['cantaddposttotopic'] = 'Vous n\'êtes pas autorisé à écrire dans cette discussion';
$string['cantaddtopic'] = 'Vous n\'êtes pas autorisé à ajouter des discussions dans ce forum';
$string['cantdeletepost'] = 'Vous n\'êtes pas autorisé à supprimer des messages de ce forum';
$string['cantdeletethispost'] = 'Vous n\'êtes pas autorisé à supprimer ce message';
$string['cantdeletetopic'] = 'Vous n\'êtes pas autorisé à supprimer des discussions de ce forum';
$string['canteditpost'] = 'Vous n\'êtes pas autorisé à modifier ce message';
$string['cantedittopic'] = 'Vous n\'êtes pas autorisé à modifier cette discussion';
$string['cantfindforum'] = 'Impossible de trouver le forum d\'identifiant %s';
$string['cantfindpost'] = 'Impossible de trouver le message d\'identifiant %s';
$string['cantfindtopic'] = 'Impossible de trouver la discussion d\'identifiant %s';
$string['cantviewforums'] = 'Vous n\'êtes pas autorisé à voir les forums de ce groupe';
$string['cantviewtopic'] = 'Vous n\'êtes pas autorisé à voir les discussions de ce forum';
$string['chooseanaction'] = 'Choisir une action';
$string['clicksetsubject'] = 'Cliquer pour définir un sujet';
$string['closeddescription'] = 'Les discussions fermées ne peuvent recevoir de réponses que de la part des modérateurs ou des administrateurs du groupe';
$string['closetopics'] = 'Fermer les nouvelles discussions';
$string['closetopicsdescription'] = 'Si cette option est sélectionnée, toutes les nouvelles discussions seront fermées par défaut. Seuls les modérateurs ou les administrateurs de groupe pourront répondre aux discussions fermées.';
$string['createtopicusersdescription'] = 'Si l\'option « Tous les membres du groupe » est sélectionnée, tout le monde pourra créer de nouvelles discussions et répondre aux discussions existantes. Si l\'option « Modérateurs et administrateurs du groupe » est sélectionnée, seuls les modérateurs et les administrateurs du groupe pourront créer de nouvelles discussions, mais, dans les discussions existantes, les utilisateurs pourront poster des réponses.';
$string['currentmoderators'] = 'Modérateurs actuels';
$string['defaultforumdescription'] = 'Forum de discussion générale %s';
$string['defaultforumtitle'] = 'Discussion générale';
$string['deleteforum'] = 'Supprimer le forum';
$string['deletepost'] = 'Supprimer le message';
$string['deletepostsuccess'] = 'Message supprimé';
$string['deletepostsure'] = 'Voulez-vous vraiment supprimer ce message ? L\'opération ne pourra être annulée.';
$string['deletetopic'] = 'Supprimer la discussion';
$string['deletetopicsuccess'] = 'Discussion supprimée';
$string['deletetopicsure'] = 'Voulez-vous vraiment supprimer cette discussion ? L\'opération ne pourra être annulée.';
$string['deletetopicvariable'] = 'Supprimer la discussion « %s »';
$string['editpost'] = 'Modifier le message';
$string['editpostsuccess'] = 'Message modifié';
$string['editstothispost'] = 'Modifications de ce message :';
$string['edittitle'] = 'Modifier le forum';
$string['edittopic'] = 'Modifier la discussion';
$string['edittopicsuccess'] = 'Discussion modifiée';
$string['forumname'] = 'Nom du forum';
$string['forumposthtmltemplate'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s par %s</strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">Répondre en ligne à ce message</a></p>
<p><a href="%s">Se désabonner de ce %s</a></p>
</div>';
$string['forumposttemplate'] = '%s par %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Pour voir et répondre à ce message en ligne, suivez ce lien :
%s

Pour vous désabonner de ce %s, visitez :
%s';
$string['forumsuccessfulsubscribe'] = 'Abonnement au forum effectué';
$string['forumsuccessfulunsubscribe'] = 'Désabonnement du forum effectué';
$string['gotoforums'] = 'Aller aux forums';
$string['groupadminlist'] = 'Administrateurs du groupe :';
$string['groupadmins'] = 'Administrateurs du groupe';
$string['indentflatindent'] = 'Réponses en ligne';
$string['indentfullindent'] = 'Réponses partiellement emboîtées';
$string['indentmaxindent'] = 'Réponses emboîtées sur toute la discussion';
$string['indentmode'] = 'Réponses en fil de discussion';
$string['indentmodedescription'] = 'Indique comment les réponses aux messages de ce forum doivent être présentées.';
$string['lastpost'] = 'Dernier message';
$string['latestforumposts'] = 'Derniers messages du forum';
$string['maxindent'] = 'Niveau maximum à afficher pour chaque message';
$string['maxindentdescription'] = 'Fixe le niveau maximum d\'indentation pour chaque sujet. Cette option n\'est possible que si le mode d\'affichage a été fixé à «Réponses emboîtées sur toute la discussion»';
$string['moderatorsandgroupadminsonly'] = 'Seulement les modérateurs et administrateurs du groupe';
$string['moderatorsdescription'] = 'Les modérateurs peuvent modifier et supprimer les discussions et messages. Ils peuvent également ouvrir et bloquer des discussions et épingler et relâcher des discussions';
$string['moderatorslist'] = 'Modérateurs :';
$string['name'] = 'Forum';
$string['nameplural'] = 'Forums';
$string['newforum'] = 'Nouveau forum';
$string['newforumpostnotificationsubject'] = '%s: %s: %s';
$string['newpost'] = 'Nouveau message :';
$string['newtopic'] = 'Nouvelle discussion';
$string['noforumpostsyet'] = 'Il n\'y a pas encore de messages dans ce groupe';
$string['noforums'] = 'Il n\'y a pas de forums dans ce groupe';
$string['notopics'] = 'Il n\'y a pas de discussions dans ce forum';
$string['orderdescription'] = 'Indiquez où vous voulez que le forum soit placé par rapport aux autres forums';
$string['postaftertimeout'] = 'Vous avez validez vos modification après le temps limite de %s minutes. Vos modifications n\'ont pas été prises en compte.';
$string['postbyuserwasdeleted'] = 'Un message de %s a été supprimé';
$string['postdelay'] = 'Délai avant envoi';
$string['postdelaydescription'] = 'La durée minimale (en minutes) avant qu\'un message écrit dans le forum soit envoyé aux abonnées du forum. L\'auteur du message peut le modifier durant ce laps de temps.';
$string['postedin'] = '%s posté dans %s';
$string['postreply'] = 'Réponse au message';
$string['postsvariable'] = 'Messages : %s';
$string['potentialmoderators'] = 'Modérateurs potentiels';
$string['re'] = 'Re: %s';
$string['regulartopics'] = 'Discussions normales';
$string['replyforumpostnotificationsubject'] = 'Re: %s: %s: %s';
$string['replyto'] = 'Réponse à :';
$string['stickydescription'] = 'Les discussions épinglées sont affichées au haut de toutes les pages';
$string['stickytopics'] = 'Discussions épinglées';
$string['strftimerecentfullrelative'] = '%%v, %%H:%%M';
$string['strftimerecentrelative'] = '%%v, %%H:%%M';
$string['subscribetoforum'] = 'S\'abonner au forum';
$string['subscribetotopic'] = 'S\'abonner à la discussion';
$string['today'] = 'Aujourd\'hui';
$string['topicclosedsuccess'] = 'Les discussions ont été fermées';
$string['topicisclosed'] = 'Cette discussion est fermée. Seuls les modérateurs et administrateurs du groupe peuvent poster de nouvelles réponses';
$string['topiclower'] = 'discussion';
$string['topicopenedsuccess'] = 'Discussions ouvertes';
$string['topicslower'] = 'discussions';
$string['topicstickysuccess'] = 'Les discussions ont été épinglées';
$string['topicsubscribesuccess'] = 'Abonnement aux discussions effectué';
$string['topicsuccessfulunsubscribe'] = 'Désabonnement de la discussion effectué';
$string['topicunstickysuccess'] = 'Les discussions ont été désépinglées';
$string['topicunsubscribesuccess'] = 'Désabonnement des discussions effectué';
$string['topicupdatefailed'] = 'Échec de la modification des discussions';
$string['typenewpost'] = 'Nouveaux messages des forums';
$string['unsubscribefromforum'] = 'Se désabonner du forum';
$string['unsubscribefromtopic'] = 'Se désabonner de la discussion';
$string['updateselectedtopics'] = 'Modifier les discussions sélectionnées';
$string['whocancreatetopics'] = 'Qui peut créer des discussions';
$string['yesterday'] = 'Hier';
$string['youarenotsubscribedtothisforum'] = 'Vous n\'êtes pas abonné à ce forum';
$string['youarenotsubscribedtothistopic'] = 'Vous n\'êtes pas abonné à cette discussion';
$string['youcannotunsubscribeotherusers'] = 'Vous ne pouvez pas désabonner d\'autres utilisateurs';