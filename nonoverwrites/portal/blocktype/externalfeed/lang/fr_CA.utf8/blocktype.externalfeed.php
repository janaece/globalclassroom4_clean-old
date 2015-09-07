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
 * @subpackage blocktype-externalfeeds
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'Flux RSS/ATOM externe';
$string['description'] = 'Insérer un flux RSS/ATOM externe';
$string['feedlocation'] = 'Adresse du flux';
$string['feedlocationdesc'] = 'Adresse URL d\'un flux externe RSS ou ATOM valide';
$string['invalidurl'] = 'L\'adresse URL du flux est incorrecte. Vous ne pouvez utiliser que des flux accessibles par les protocoles http ou https.';
$string['invalidfeed'] = 'Le flux semble incorrect. Le message d\'erreur est le suivant : %s';
$string['lastupdatedon'] = 'Mis à jour le %s';
?>
