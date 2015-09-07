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
 * @author     Dominique-Alain JAN <dajan@mac.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

// my groups
$string['groupname'] = 'Nom de groupe';
$string['creategroup'] = 'Créer groupe';
$string['groupmemberrequests'] = 'Requêtes en attente';
$string['membershiprequests'] = 'Requêtes d\'affiliation';
$string['sendinvitation'] = 'Envoyer invitation';
$string['invitetogroupsubject'] = 'Vous avez été invité à rejoindre un groupe';
$string['invitetogroupmessage'] = '%s vous a invité rejoindre le groupe «%s». Cliquez sur le lien ci-dessous pour plus d\'information.';
$string['inviteuserfailed'] = 'Échec de l\'invitation de l\'utilisateur';
$string['userinvited'] = 'Invitation envoyée';
$string['addedtogroupsubject'] = 'Vous avez été ajouté à un groupe';
$string['addedtogroupmessage'] = '%s vous a invité au groupe «%s». Cliquez sur le lien ci-dessous pour afficher le groupe';
$string['adduserfailed'] = 'Échec de l\'ajout de l\'utilisateur';
$string['useradded'] = 'Utilisateur ajouté';
$string['editgroup'] = 'Modifier groupe';
$string['savegroup'] = 'Enregistrer groupe';
$string['groupsaved'] = 'Groupe enregistré';
$string['invalidgroup'] = 'Ce groupe n\'existe pas';
$string['canteditdontown'] = 'Vous ne pouvez pas modifier ce groupe, car vous n\’en n\’êtes pas le propriétaire';
$string['groupdescription'] = 'Description groupe';
$string['membershiptype'] = 'Type d\'affiliation au groupe';
$string['membershiptype.controlled'] = 'Affiliation contrôlée';
$string['membershiptype.invite'] = 'Seulement par invitation';
$string['membershiptype.request'] = 'Demande d\'affiliation';
$string['membershiptype.open'] = 'Affiliation ouverte';
$string['membershiptype.abbrev.controlled'] = 'Contrôllé';
$string['membershiptype.abbrev.invite']     = 'Inviter';
$string['membershiptype.abbrev.request']    = 'Demandée';
$string['membershiptype.abbrev.open']       = 'Ouverte';
$string['pendingmembers'] = 'Membres en attente';
$string['reason'] = 'Raison';
$string['approve'] = 'Approuver';
$string['reject'] = 'Rejeter';
$string['groupalreadyexists'] = 'Un groupe de ce nom existe déjà';
$string['invalidshortname'] = 'Nom abrégé du groupe invalide';
$string['shortnameformat'] = 'Le nom abrégé du groupe doit contenir entre 2 et 255 caractères et être composé de lettres, chiffres, « . », « - », et « _ »';
$string['Created'] = 'Créé';
$string['groupadmins'] = 'Administrateurs du groupe';
$string['Admin'] = 'Admin';
$string['grouptype'] = 'Type de groupe';
$string['publiclyviewablegroup'] = 'Groupe visible du public';
$string['publiclyviewablegroupdescription'] = 'Permettre tout le monde, y compris des personnes qui ne sont pas membres de ce site, de consulter ce groupe, y compris les forums';
$string['Type'] = 'Type';
$string['publiclyvisible'] = 'Publiquement visible';
$string['Public'] = 'Public';
$string['usersautoadded'] = 'Affilier automatiquement les utilisateurs';
$string['usersautoaddeddescription'] = 'Affilier automatiquement tous les nouveaux utilisateurs à ce groupe';
$string['groupcategory'] = 'Catégorie de groupe';
$string['allcategories'] = 'Toutes les catégories';
$string['groupoptionsset'] = 'Options du groupe enregistrées.';
$string['nocategoryselected'] = 'Aucune catégorie sélectionnée';
$string['categoryunassigned'] = 'Catégorie non assignée';
$string['hasrequestedmembership'] = 'a demandé de rejoindre ce groupe';
$string['hasbeeninvitedtojoin'] = 'a été invité à rejoindre ce groupe';
$string['groupinvitesfrom'] = 'Invité à rejoindre :';
$string['requestedmembershipin'] = 'Affiliation demandée dans :';
$string['viewnotify'] = 'Notifier le partage d\'une page';
$string['viewnotifydescription'] = 'Si sélectionné, une notification sera envoyée à chaque membre du groupe qui partage une des pages de ce groupe. Activer cette option pour un grand groupe peut produire de nombreuses notifications.';

$string['editgroupmembership'] = 'Modifier l\affiliation au groupe';
$string['editmembershipforuser'] = 'Modifier l\affilation pour %s';
$string['changedgroupmembership'] = 'Affilation au groupe modifiée avec succès.';
$string['changedgroupmembershipsubject'] = 'Votre affiliation au groupe a été modifiée';
$string['addedtogroupsmessage'] = "%s vous a jouté au(x) groupe(s) :\n\n%s\n\n";
$string['removedfromgroupsmessage'] = "%s vous a supprimé du ou des groupe(s) :\n\n%s\n\n";
$string['cantremoveuserisadmin'] = "Les tuteurs ne peuvent pas supprimer des membres avec le statut d\'administrateur ou de tuteur.";
$string['cantremovemember'] = "Les tuteurs ne peuvent pas supprimer des membres.";
$string['current'] = "Courrante";
$string['requests'] = "Demandes";
$string['invites'] = "Invités";

// Used to refer to all the members of a group - NOT a "member" group role!
$string['member'] = 'membre';
$string['members'] = 'membres';
$string['Members'] = 'Membres';

$string['memberrequests'] = 'Demandes d\'affiliation';
$string['declinerequest'] = 'Décliner la requête';
$string['submittedviews'] = 'Pages envoyées';
$string['releaseview'] = 'Publier la page';
$string['invite'] = 'Inviter';
$string['remove'] = 'Retirer';
$string['updatemembership'] = 'Modifier affiliation';
$string['memberchangefailed'] = 'Échec de la mise à jour de certaines informations d\'affiliation';
$string['memberchangesuccess'] = 'Statut d\'affiliation modifié';
$string['viewreleasedsubject'] = 'Votre page a été publiée';
$string['viewreleasedmessage'] = 'La page que vous avez envoyée au groupe %s vous a été rendue par %s';
$string['viewreleasedsuccess'] = 'La page a été rendue';
$string['groupmembershipchangesubject'] = 'Affliliation au groupe %s';
$string['groupmembershipchangedmessagemember'] = 'Vous n\'êtes plus tuteur de ce groupe';
$string['groupmembershipchangedmessagetutor'] = 'Vous êtes maintenant tuteur de ce groupe';
$string['groupmembershipchangedmessageremove'] = 'Vous n\'appartenez plus à ce groupe';
$string['groupmembershipchangedmessagedeclinerequest'] = 'Votre demande de rejoindre ce groupe a été déclinée';
$string['groupmembershipchangedmessageaddedtutor'] = 'Vous avez été ajouté à ce groupe en tant que tuteur';
$string['groupmembershipchangedmessageaddedmember'] = 'Vous avez été ajouté à ce groupe';
$string['leavegroup'] = 'Quitter ce groupe';
$string['joingroup'] = 'Rejoindre ce groupe';
$string['requestjoingroup'] = 'Demande de rejoindre ce groupe';
$string['grouphaveinvite'] = 'Vous avez été invité à rejoindre ce groupe';
$string['grouphaveinvitewithrole'] = 'Vous avez été invité à rejoindre ce groupe avec le rôle';
$string['groupnotinvited'] = 'Vous n\'avez pas été invité à rejoindre ce groupe';
$string['groupinviteaccepted'] = 'Invitation acceptée ! Vous êtes maintenant membre du groupe';
$string['groupinvitedeclined'] = 'Invitation déclinée !';
$string['acceptinvitegroup'] = 'Accepter';
$string['declineinvitegroup'] = 'Décliner';
$string['leftgroup'] = 'Vous avez quitté ce groupe';
$string['leftgroupfailed'] = 'Échec de retrait du groupe';
$string['couldnotleavegroup'] = 'Vous ne pouvez pas quitter ce groupe';
$string['joinedgroup'] = 'Vous êtes maintenant un membre du groupe';
$string['couldnotjoingroup'] = 'vous ne pouvez pas rejoindre ce groupe';
$string['grouprequestsent'] = 'Demande d\'affiliation au groupe envoyée';
$string['couldnotrequestgroup'] = 'Impossible d\'envoyer la demande d\'affiliation au groupe';
$string['cannotrequestjoingroup'] = 'Vous ne pouvez pas demander votre affiliation à ce groupe';
$string['groupjointypeopen'] = 'L\'affiliation à cette communauté est ouverte';
$string['groupjointypecontrolled'] = 'L\'affiliation à cette communauté est contrôlée. Vous ne pouvez pas la rejoindre';
$string['groupjointypeinvite'] = 'L\'affiliation à cette communauté se fait sur invitation seulement';
$string['groupjointyperequest'] = 'L\'affiliation à cette communauté se fait sur demande';
$string['grouprequestsubject'] = 'Nouvelle demande d\'affiliation';
$string['grouprequestmessage'] = '%s a envoyé une demande d\'affiliation à rejoindre la communauté %s';
$string['grouprequestmessagereason'] = '%s a envoyé une demande d\'affiliation à rejoindre la communauté %s avec pour raison %s.';
$string['cantdeletegroup'] = 'Vous ne pouvez pas supprimer ce groupe';
$string['groupconfirmdelete'] = "Cela supprimera toutes les pages, les fichiers et les forums du groupe. This will delete all pages, files, and forums contained within the group. Voulez-vous vraiment supprimer ce groupe et tout ce qu\'il contient ?";
$string['deletegroup'] = 'Le groupe a été supprimé';
$string['deletegroup1'] = 'Supprimer le groupe';
$string['allmygroups'] = 'Tous mes groupes';
$string['groupsimin'] = 'Groupes dont je suis membre';
$string['groupsiown'] = 'Groupes qui m\'appartiennent';
$string['groupsiminvitedto'] = 'Groupes où je suis invité';
$string['groupsiwanttojoin'] = 'Groupes que je veux rejoindre';
$string['requestedtojoin'] = 'Vous avez demandé de rejoindre ce groupe';
$string['groupnotfound'] = 'Groupe d\'identifiant %s introuvable';
$string['groupconfirmleave'] = 'Voulez-vous vraiment quitter ce groupe ?';
$string['cantleavegroup'] = 'Vous ne pouvez pas quitter ce groupe';
$string['usercantleavegroup'] = 'L\'utilisateur ne peut pas quitter ce groupe';
$string['usercannotchangetothisrole'] = 'L\'utilisateur ne peut pas passer à ce rôle';
$string['leavespecifiedgroup'] = 'Quitter le groupe « %s »';
$string['memberslist'] = 'Membres :';
$string['nogroups'] = 'Aucun groupe';
$string['deletespecifiedgroup'] = 'Supprimer le groupe « %s »';
$string['requestjoinspecifiedgroup'] = 'Demande d\'affiliation au groupe «%s»';
$string['youaregroupmember'] = 'Vous êtes membre de ce groupe';
$string['youaregrouptutor'] = 'Vous êtes tuteur dans ce groupe';
$string['youaregroupadmin'] = 'Vous êtes un administrateur de ce groupe';
$string['youowngroup'] = 'Vous possédez ce groupe';
$string['groupsnotin'] = 'Groupes dont je ne suis pas membre';
$string['allgroups'] = 'Tous les groupes';
$string['allgroupmembers'] = 'Tous les membres du groupe';
$string['trysearchingforgroups'] = 'Essayez la %srecherche de groupes%s pour vous affilier !';
$string['nogroupsfound'] = 'Aucun groupe trouvé :(';
$string['group'] = 'groupe';
$string['Group'] = 'Groupe';
$string['groups'] = 'groupes';
$string['notamember'] = 'Vous n\'êtes pas membre de ce groupe';
$string['notmembermayjoin'] = 'Vous devez rejoindre le groupe %s pour consulter cette page';
$string['declinerequestsuccess'] = 'Demande d\'affiliation au groupe déclinée.';
$string['notpublic'] = 'Ce groupe n\'est pas public.';
$string['moregroups'] = 'Plus de groupes';

// Bulk add, invite
$string['addmembers'] = 'Ajouter des membres';
$string['invitationssent'] = '%d invitations envoyées';
$string['newmembersadded'] = '%d nouveaux membres ajoutés';
$string['potentialmembers'] = 'Membres potentiels';
$string['sendinvitations'] = 'Envoyer invitations';
$string['userstobeadded'] = 'Utilisateurs à ajouter';
$string['userstobeinvited'] = 'Utilisateurs à inviter';

// friendslist
$string['reasonoptional'] = 'Raison (optionnelle)';
$string['request'] = 'Demande';

$string['friendformaddsuccess'] = '%s ajouté à votre liste d\'amis';
$string['friendformremovesuccess'] = '%s retiré de votre liste d\'amis';
$string['friendformrequestsuccess'] = 'Demande de connexion envoyée à %s';
$string['friendformacceptsuccess'] = 'Demande de connexion acceptée';
$string['friendformrejectsuccess'] = 'Demande de connexion rejetée';

$string['addtofriendslist'] = 'Ajouter aux amis';
$string['requestfriendship'] = 'Demande de connexion';

$string['addedtofriendslistsubject'] = 'Nouvel ami';
$string['addedtofriendslistmessage'] = '%s vous a ajouté comme ami ! Cela signifie que %s est également dans votre liste d\'amis. ' 
    . 'Cliquez sur le lien ci-dessous pour voir son profil';

$string['requestedfriendlistsubject'] = 'Nouvelle demande de connexion';
$string['requestedfriendlistmessage'] = '%s a demandé que vous l\'ajoutiez comme ami. ' 
	.'Vous pouvez le faire soit avec le lien ci-dessous, soit depuis votre liste d\'amis';

$string['requestedfriendlistmessagereason'] = '%s a demandé que vous l\'ajoutiez comme ami. ' 
	. 'Vous pouvez le faire soit avec le lien ci-dessous, soit depuis votre liste d\'amis. '
	. 'La raison donnée est :
	';

$string['removefromfriendslist'] = 'Retirer des amis';
$string['removefromfriends'] = 'Retirer %s des amis';
$string['confirmremovefriend'] = 'Voulez-vous vraiment retirer cet utilisateur de votre liste d\'amis ?';
$string['removedfromfriendslistsubject'] = 'Retiré de votre liste d\'amis';
$string['removedfromfriendslistmessage'] = '%s vous a retiré de sa liste d\'amis.';
$string['removedfromfriendslistmessagereason'] = '%s vous a retiré de sa liste d\'amis. La raison donnée est :';
$string['cantremovefriend'] = 'Vous ne pouvez pas retirer cet utilisateur de la liste de vos amis';

$string['friendshipalreadyrequested'] = 'Vous avez demandé a être ajouté à la liste d\'amis de %s';
$string['friendshipalreadyrequestedowner'] = '%s a demandé a être ajouté à votre liste d\'amis';
$string['rejectfriendshipreason'] = 'Raison du rejet de la demande';
$string['alreadyfriends'] = 'Vous êtes déjà ami avec %s';

$string['friendrequestacceptedsubject'] = 'Demande de connexion acceptée';
$string['friendrequestacceptedmessage'] = '%s a accepté votre demande et a été ajouté à votre liste d\'amis';
$string['friendrequestrejectedsubject'] = 'Demande de connexion rejetée';
$string['friendrequestrejectedmessage'] = '%s a rejeté votre demande de connexion.';
$string['friendrequestrejectedmessagereason'] = '%s a rejeté votre demande de connexion. La raison donnée est :';

$string['allfriends'] = 'Tous les amis';
$string['currentfriends'] = 'Amis actuels';
$string['pendingfriends'] = 'Amis en attente';
$string['backtofriendslist'] = 'Retour à ma liste d\'amis';
$string['findnewfriends'] = 'Chercher nouveaux amis';
$string['Views'] = 'Pages';
$string['Files'] = 'Fichiers';
$string['seeallviews'] = 'Voir les %s pages...';
$string['noviewstosee'] = 'Aucune que vous puissiez voir :(';
$string['whymakemeyourfriend'] = 'Voici pourquoi vous devriez m\'ajouter comme ami :';
$string['approverequest'] = 'Approuver la demande!';
$string['denyrequest'] = 'Rejeter la demande';
$string['pending'] = 'en attente';
$string['trysearchingforfriends'] = 'Essayez la %srecherche d\'amis%s pour étendre votre réseau !';
$string['nobodyawaitsfriendapproval'] = 'Personne n\'attend votre approbation pour être dans votre liste d\'amis';
$string['sendfriendrequest'] = 'Envoyer demande de connexion !';
$string['addtomyfriends'] = 'Ajouter à mes amis!';
$string['friendshiprequested'] = 'Demande de connexion reçue!';
$string['existingfriend'] = '(membre de votre réseau)';
$string['nosearchresultsfound'] = 'Aucun résultat de recherche trouvé : (';
$string['friend'] = 'ami';
$string['friends'] = 'amis';
$string['user'] = 'utilisateur';
$string['users'] = 'utilisateurs';
$string['Friends'] = 'Amis';

$string['friendlistfailure'] = 'Échec de la modification de votre liste d\'amis';
$string['userdoesntwantfriends'] = 'Cet utilisateur ne désire aucun amis';
$string['cannotrequestfriendshipwithself'] = 'Vous ne pouvez pas demander de vous ajouter vous-même comme ami';
$string['cantrequestfriendship'] = 'Vous ne pouvez pas demander d\'ajouter cet utilisateur comme ami';

// Messaging between users
$string['messagebody'] = 'Envoyer message';
$string['sendmessage'] = 'Envoyer message';
$string['messagesent'] = 'Message envoyé !';
$string['messagenotsent'] = 'Échec de l\'envoi du message';
$string['newusermessage'] = 'Nouveau message de %s';
$string['newusermessageemailbody'] = '%s vous a envoyé un message. Pour voir ce message, visitez

%s';
$string['sendmessageto'] = 'Envoyer message à %s';
$string['viewmessage'] = 'Voir le message';
$string['Reply'] = 'Répondre';

$string['denyfriendrequest'] = 'Empêcher les demandes d\'ami';
$string['sendfriendshiprequest'] = 'Envoyer à %s une demande d\'être ami';
$string['cantdenyrequest'] = 'Ceci n\'est pas une demande d\'ami valide';
$string['cantmessageuser'] = 'Vous ne pouvez pas envoyer de message à cet utilisateur';
$string['cantviewmessage'] = 'Vous ne pouvez pas consulter ce message';
$string['requestedfriendship'] = 'a demandé d\'être ami';
$string['notinanygroups'] = 'Dans aucun des groupes';
$string['addusertogroup'] = 'Ajouter à ';
$string['inviteusertojoingroup'] = 'Inviter à ';
$string['invitemembertogroup'] = 'Inviter %s à rejoindre « %s »';
$string['cannotinvitetogroup'] = 'Vous ne pouvez pas inviter cet utilisateur à rejoindre ce groupe';
$string['useralreadyinvitedtogroup'] = 'Cet utilisateur a déjà été invité ou est déjà membre de ce groupe';
$string['removefriend'] = 'Retirer un ami';
$string['denyfriendrequestlower'] = 'Empêcher les demandes d\'ami';

// Group interactions (activities)
$string['groupinteractions'] = 'Activités du groupe';
$string['nointeractions'] = 'Il n\'y a pas d\'activité dans ce groupe';
$string['notallowedtoeditinteractions'] = 'Vous n\'êtes pas autorisé à ajouter ou modifier des activités dans ce groupe';
$string['notallowedtodeleteinteractions'] = 'Vous n\'êtes pas autorisé à supprimer des activités dans ce groupe';
$string['interactionsaved'] = '%s enregistré';
$string['deleteinteraction'] = 'Supprimer %s « %s »';
$string['deleteinteractionsure'] = 'Voulez-vous vraiment effectuer ceci ? L\'opération ne pourra pas être annulée.';
$string['interactiondeleted'] = '%s supprimé';
$string['addnewinteraction'] = 'Ajouter nouveau %s';
$string['title'] = 'Titre';
$string['Role'] = 'Rôle';
$string['changerole'] = 'Changer de rôle';
$string['changeroleofuseringroup'] = 'Passer du rôle %s au rôle %s';
$string['currentrole'] = 'Rôle actuel';
$string['changerolefromto'] = 'Passer du rôle de %s à';
$string['rolechanged'] = 'Rôle modifié';
$string['removefromgroup'] = 'Retirer du groupe';
$string['userremoved'] = 'Utilisateur retiré';
$string['About'] = 'À propos';
$string['aboutgroup'] = 'À propos de %s';

$string['Joined'] = 'Affilié';

$string['membersdescription:invite'] = 'Ce groupe n\'est accessible que par invitation. Vous pouvez inviter les utilisateurs depuis leur page de profil ou vous pouvez <a href="%s">envoyer plusieurs invitations en même temps</a>.';
$string['membersdescription:controlled'] = 'Ce groupe est modéré par un administrateur de groupe.  Vous pouvez inviter les utilisateurs depuis leur page de profil ou vous pouvez <a href="%s">envoyer plusieurs invitations en même temps</a>.';

// View submission
$string['submit'] = 'Envoyer';
$string['allowssubmissions'] = 'Permettre les demandes';
