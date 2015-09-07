∑ <?php
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

$string['typemaharamessage'] = 'Messages système';
$string['typeusermessage'] = 'Messages des autres utilisateurs';
$string['typewatchlist'] = 'Liste de suivi';
$string['typeviewaccess'] = 'Nouvel accès à une page';
$string['typecontactus'] = 'Contact';
$string['typeobjectionable'] = 'Contenu discutable';
$string['typevirusrepeat'] = 'Dépôt répété de fichiers infectés';
$string['typevirusrelease'] = 'Ôter le drapeau virus';
$string['typeadminmessages'] = 'Messages de l\'administration';
$string['typeinstitutionmessage'] = 'Messages de l\'institution';
$string['typegroupmessage'] = 'Messages de groupe';

$string['type'] = 'Type d\'activité';
$string['attime'] = 'à';
$string['prefsdescr'] = 'Si vous sélectionnez l\'une des options de courriel, les notifications seront également enregistrées dans l\'historique d\'activité, mais seront automatiquement marquées comme lues.';

$string['subject'] = 'Objet';
$string['date'] = 'Date';
$string['read'] = 'Lu';
$string['unread'] = 'Non lu';

$string['markasread'] = 'Marquer comme lu';
$string['selectall'] = 'Tout sélectionner';
$string['recurseall'] = 'Recurse all';
$string['alltypes'] = 'Tous les types';

$string['markedasread'] = 'Vos notifications sont marquées comme lues';
$string['failedtomarkasread'] = 'Impossible de marquer vos notifications comme lues';

$string['deletednotifications'] = '%s notifications supprimées';
$string['failedtodeletenotifications'] = 'Échec de la suppression de vos notifications';

$string['artefacts'] = 'Productions';
$string['groups'] = 'Groupes';
$string['monitored'] = 'Surveillé';

$string['stopmonitoringsuccess'] = 'Surveillance stoppée';
$string['stopmonitoringfailed'] = 'Impossible de stopper la surveillance';

$string['newwatchlistmessage'] = 'Nouvelle activité dans votre liste de suivi';
$string['newwatchlistmessageview'] = '« %s » a modifié sa page';

$string['newviewsubject'] = 'Nouvelle page créée';
$string['newviewmessage'] = '%s a créé une nouvelle page nommée « %s »';

$string['newcontactusfrom'] = 'Nouvelle demande de contact de';
$string['newcontactus'] = 'Nouvelle demande de contact';

$string['newviewaccessmessage'] = 'Vous avez été ajouté à la liste d\'accès de la page « %s » par %s';
$string['newviewaccessmessagenoowner'] = 'Vous avez été ajouté à la liste de ceux qui ont accès à la page nommée «%s»';
$string['newviewaccesssubject'] = 'Nouvel accès à la page';

$string['viewmodified'] = 'a modifié sa page';
$string['ongroup'] = 'dans le groupe';
$string['ownedby'] = 'propriété de';

$string['objectionablecontentview'] = 'Contenu discutable dans la page « %s », rapporté par %s';
$string['objectionablecontentviewartefact'] = 'Contenu discutable dans la page «%s» de «%s», rapporté par %s';

$string['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Contenu discutable dans « %s », rapporté par %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>Motif de la plainte : <a href="%s">%s</a></p>
<p>Rapporté par : <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewtext'] = 'Contenu discutable sur « %s », rapporté par %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Pour afficher la page, cliquez sur ce lien :
%s
Pour afficher le profil du rapporteur, cliquez sur ce lien :
%s';

$string['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Contenu discutable sur « %s » dans « %s », rapporté par  %s<strong></strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>Motif de la plainte : <a href="%s">%s</a></p>
<p>Rapporté par : <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewartefacttext'] = 'Contenu discutable sur « %s » dans « %s » rapporté par %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Pour afficher la page, cliquez sur ce lien :
%s
Pour afficher le profil du rapporteur, cliquez sur ce lien :
%s';

$string['newgroupmembersubj'] = '%s est maintenant un membre du groupe !';
$string['removedgroupmembersubj'] = '%s n\'est plus un membre du groupe';

$string['addtowatchlist'] = 'Ajouter à la liste de suivi';
$string['removefromwatchlist'] = 'Retirer de la liste de suivi';

$string['missingparam'] = 'Le paramètre requis %s n\'a pas été renseigné pour le type d\'activité %s';

$string['institutionrequestsubject'] = '%s a demandé son affiliation à %s.';
$string['institutionrequestmessage'] = 'Vous pouvez ajouter aux institutions des utilisateurs sur la page des Membres de l\'institution :';

$string['institutioninvitesubject'] = 'Vous avez été invité à joindre l\'institution %s.';
$string['institutioninvitemessage'] = 'Vous pouvez confirmer votre affiliation à cette institution sur la page des réglages de votre institution :';

$string['deleteallnotifications'] = 'Supprimer toutes les notifications';
$string['reallydeleteallnotifications'] = 'Voulez-vous vraiment supprimer toutes les notifications pour  ce type d\'activité ?';

$string['viewsubmittedsubject'] = 'Page envoyée à %s';
$string['viewsubmittedmessage'] = '%s a envoyé sa page « %s » à %s';

$string['adminnotificationerror'] = 'L\'erreur de notification à l\'utilisateur est probablement due à un problème lié à la configuration de votre serveur.';

