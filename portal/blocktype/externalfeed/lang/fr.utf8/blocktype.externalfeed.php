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

$string['title'] = 'Flux externe';
$string['description'] = 'Incorporer un flux RSS ou ATOM externe';
$string['feedlocation'] = 'Adresse du flux';
$string['feedlocationdesc'] = 'URL d\'un flux RSS ou ATOM valide';
$string['itemstoshow'] = 'Articles à afficher';
$string['itemstoshowdescription'] = 'Entre 1 et 20';
$string['showfeeditemsinfull'] = 'Afficher la totalité de chaque élément du flux ?';
$string['showfeeditemsinfulldesc'] = 'Afficher un résumé des éléments du flux ou également la description de chacun d\'entre eux.';
$string['invalidurl'] = 'Cette URL n\'est pas valide. Vous ne pouvez afficher que des flux d\'URLs http ou https.';
$string['invalidfeed'] = 'Ce flux semble non valide. L\'erreur survenue est : %s';
$string['lastupdatedon'] = 'Dernière mise à jour le %s';
$string['defaulttitledescription'] = 'Si vous ne renseignez pas le titre, le titre du flux sera affiché';