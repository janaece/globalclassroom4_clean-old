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
 * @subpackage lang
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['artefacttypenametaken'] = "Artifacts type %s is already taken by another plugin (%s)";
$string['artefacttypemismatch'] = "Artifact type mismatch, you are trying to use this %s as a %s";
$string['artefacttypeclassmissing'] = "Artifact types must all implement a class.  Missing %s";
$string['artefactpluginmethodmissing'] =  "Artifact plugin %s must implement %s and doesn't";
$string['blocktypelibmissing'] = 'Missing lib.php for block %s in artifact plugin %s';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'This will be installed as part of the installation of artifact plugin %s';
$string['artefactnotfoundmaybedeleted'] = "Artifact with id %s not found (maybe it has been deleted already?)";
$string['artefactnotfound'] = 'Artifact with id %s not found';
$string['artefactnotinview'] = 'Artifact %s not in Page %s';
$string['artefactonlyviewableinview'] = 'Artifacts of this type are only viewable within a Page';
$string['notartefactowner'] = 'You do not own this artifact';
?>
