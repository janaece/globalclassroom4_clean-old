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
 * @subpackage notification-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['typemaharamessage'] = 'Message du système';
$string['typeusermessage'] = 'Message des autres utilisateurs';
$string['typefeedback'] = 'Commentaires';
$string['typewatchlist'] = 'Liste de suivi';
$string['typeviewaccess'] = 'Nouvel accès à une page publique';
$string['typecontactus'] = 'Contact';
$string['typeobjectionable'] = 'Contenu discutable';
$string['typevirusrepeat'] = 'Dépôt répété de fichiers infectés';
$string['typevirusrelease'] = 'Ôter le drapeau virus';
$string['typeadminmessages'] = 'Messages de l\'administrateur';
$string['typeinstitutionmessage'] = 'Message de l\'institution';

$string['type'] = 'Type d\'activité';
$string['attime'] = 'à';
$string['prefsdescr'] = 'Si vous sélectionnez l\'une des options de courriel, les notifications seront également enregistrées dans l\'historique d\'activités, mais elles seront automatiquement marquées comme lues.';

$string['subject'] = 'Objet';
$string['date'] = 'Date';
$string['read'] = 'Lu';
$string['unread'] = 'Non lu';

$string['markasread'] = 'Marquer comme lu';
$string['selectall'] = 'Tout sélectionner';
$string['recurseall'] = 'Tout revoir';
$string['alltypes'] = 'Tous les types';

$string['markedasread'] = 'Vos notifications sont marquées comme lues';
$string['failedtomarkasread'] = 'Impossible de marquer vos notifications comme lues';

$string['deletednotifications'] = '%s notification(s) supprimée(s)';
$string['failedtodeletenotifications'] = 'Échec de la suppression de vos notifications';

$string['stopmonitoring'] = 'Suspendre la surveillance';
$string['viewsandartefacts'] = 'Pages publiques et productions';
$string['views'] = 'Pages publiques';
$string['artefacts'] = 'Productions';
$string['groups'] = 'Groupes';
$string['monitored'] = 'Surveillé';
$string['stopmonitoring'] = 'Suspendre la surveillance';

$string['stopmonitoringsuccess'] = 'Surveillance suspendue';
$string['stopmonitoringfailed'] = 'Impossible de suspendre la surveillance';

$string['newwatchlistmessagesubject'] = 'Nouvelle activité sur votre liste de suivi';
$string['newwatchlistmessageview'] = 'a modifié sa page publique «%s»';

$string['newviewsubject'] = 'Nouvelle page publique créée';
$string['newviewmessage'] = '%s a créé une nouvelle page publique «%s»';

$string['newcontactusfrom'] = 'Nouvelle demande de contact de';
$string['newcontactus'] = 'Nouvelle demande de contact';
$string['newfeedbackonview'] = 'Nouveau feedback sur la page publique';
$string['newfeedbackonartefact'] = 'Nouveau feedback sur la production';

$string['newviewaccessmessage'] = 'Vous avez été ajouté par %s à la liste d\'accès de la page publique «%s»';
$string['newviewaccesssubject'] = 'Nouvel accès à la page publique';

$string['viewmodified'] = 'a modifié sa page publique';
$string['ongroup'] = 'dans le groupe';
$string['ownedby'] = 'propriété de';

$string['objectionablecontentview'] = 'Contenu discutable rapporté par %s dans la page publique «%s»';
$string['objectionablecontentartefact'] = 'Contenu discutable rapporté par %s dans la production «%s»';

$string['newgroupmembersubj'] = '%s est maintenant un membre du groupe !';
$string['removedgroupmembersubj'] = '%s n\'est plus un membre du groupe';

$string['addtowatchlist'] = 'Ajouter à la liste de suivi';
$string['removefromwatchlist'] = 'Retirer de la liste de suivi';

$string['missingparam'] = 'Le paramètre requis %s n\'a pas été renseigné pour le type d\'activité %s';

$string['institutionrequestsubject'] = '%s a demandé de faire partie de %s.';
$string['institutionrequestmessage'] = 'Vous pouvez ajouter aux institutions des utilisateurs sur la page des Membres de l\'institution :';

$string['institutioninvitesubject'] = 'Vous avez été invité à joindre l\'institution %s.';
$string['institutioninvitemessage'] = 'Vous pouvez confirmer votre appartenance à cette institution sur la page des réglages de votre institution :';

?>