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
 * @author     Dominique-Alain Jan <djan@mac.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Collections';

$string['about'] = 'A propos';
$string['access'] = 'Accès';
$string['accesscantbeused'] = 'Modification de l\'accès non enregistrée. L\'option d\'accès aux pages (URL secrète) ne peut pas être utilisé pour des pages multiples.';
$string['accessoverride'] = 'Modifier l\'accès';
$string['accesssaved'] = 'Accès à la collection enregistrés.';
$string['accessignored'] = 'Certains accès par URL secrète ont été ignorés.';
$string['add'] = 'Ajouter';
$string['addviews'] = 'Ajouter pages';
$string['addviewstocollection'] = 'Ajouter des pages à la collection';
$string['back'] = 'Retour';
$string['cantdeletecollection'] = 'Vous ne pouvez pas supprimer cette collection';
$string['canteditdontown'] = 'Vous ne pouvez pas modifier cette collection car vous ne possédez pas les droits pour faire cela.';
$string['collection'] = 'collection';
$string['Collection'] = 'Collection';
$string['collections'] = 'Collections';
$string['Collections'] = 'Collections';
$string['collectionaccess'] = 'Accès à la collection';
$string['collectionaccesseditedsuccessfully'] = 'Accès de la collection enregistrés';
$string['collectioneditaccess'] = 'Vous éditez les accès de %d Page(s) de cette collection ';
$string['collectionconfirmdelete'] = 'Des pages dans cette collection ne seront pas supprimées. Voulez-vous réellement continuer l\'opération de suppression ?';
$string['collectioncreatedsuccessfully'] = 'Collection créée avec succès.';
$string['collectioncreatedsuccessfullyshare'] = 'Votre collection a été créée avec succès. Partager votre collection avec les autres en utilisant les liens ci-dessous, pour fixer les options de partage.';
$string['collectiondeleted'] = 'Collection supprimée avec succès.';
$string['collectiondescription'] = 'Une collection est un ensemble de pages, liées ensemble, et partageant les mêmes paramètres d\'accès. Vous pouvez créer un nombre infini de collections, mais une page ne peut apparaître que dans une seule collection.';
$string['collectiontitle'] = 'Titre de la collection';
$string['confirmcancelcreatingcollection'] = 'Les modifications apportées à cette collection n\'ont pas été enregistrées. Voulez-vous réellement annuler cette opération ?';
$string['collectionsaved'] = 'Collection enregistrée avec succès.';
$string['copyacollection'] = 'Copier une collection';
$string['created'] = 'Créée';
$string['deletecollection'] = 'Supprimer collection';
$string['deletespecifiedcollection'] = 'Supprimer la collection « %s »';
$string['deletingcollection'] = 'Suppression de la collection';
$string['deleteview'] = 'Retirer une page de la collection';
$string['description'] = 'Description de la collection';
$string['editcollection'] = 'Modifier collection';
$string['editingcollection'] = 'Edition de la collection';
$string['edittitleanddesc'] = 'Modifier titre et description';
$string['editviews'] = 'Modifier les pages de la collection';
$string['editviewaccess'] = 'Modifier accès des pages';
$string['editaccess'] = 'Modifier accès';
$string['emptycollectionnoeditaccess'] = 'Vous ne pouvez pas pas modifier l\'accès une collection vide. Ajoutez d\'abord des expostions.';
$string['emptycollection'] = 'Collection vide';
$string['manageviews'] = 'Gérer pages';
$string['name'] = 'Nom de la collection';
$string['newcollection'] = 'Nouvelle collection';
$string['nocollectionsaddone'] = 'Pas encore de collections. %sAjoutez-en une %s!';
$string['nooverride'] = 'Pas de modification';
$string['noviewsavailable'] = 'Aucune vue disponible pour être ajoutée.';
$string['noviewsaddsome'] = 'Acune page dans la collection. %sAjoutez-en !%s';
$string['noviews'] = 'Aucune page.';
$string['overrideaccess'] = 'Modifier l\'accès';
$string['potentialviews'] = 'Pages disponibles';
$string['saveapply'] = 'Enregistrer';
$string['savecollection'] = 'Enregistrer collection';
$string['update'] = 'Mettre à jour';
$string['usecollectionname'] = 'Utiliser nom collection ?';
$string['usecollectionnamedesc'] = 'Si vous désirez utiliser le nom de la collection au lieu du titre du bloc, laissez cette option sélectionnée.';
$string['viewaddedtocollection'] = 'Afficher les ajouts à la collection. Collection mise à jour pour gérer l\'accès depuis la nouvelle page.';
$string['viewcollection'] = 'Afficher les détails de la collection';
$string['viewcount'] = 'Pages';
$string['viewremovedsuccessfully'] = 'Pages retirées de la collection.';
$string['viewnavigation'] = 'Afficher la barre de navigation';
$string['viewnavigationdesc'] = 'Ajoute une barre de navigation horizontale par défaut à chaque page de cette collection.';
$string['viewsaddedtocollection'] = 'Pages ajoutées à la collection. La collection a été mise à jour en permettant l\'accès de nouvelles pages.';
$string['viewstobeadded'] = 'Pages à ajouter';
$string['viewconfirmremove'] = 'Voulez-vous supprimer cette page de la collection ?';
$string['collectioncopywouldexceedquota'] = 'En copiant cette collection, vous allez dépasser le quota d\'espace disque qui vous a été attribué.';
$string['copiedpagesblocksandartefactsfromtemplate'] = ' %d pages, %d blocs et %d productions venant de %s, ont été copiés';
$string['by'] = 'par';
$string['copycollection'] = 'Copier la collection';

