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
 * @subpackage blocktype-gallery
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 * @copyright  (C) 2011 Gregor Anzelj <gregor.anzelj@gmail.com>
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'Bildergallerie';
$string['description'] = 'Eine Sammlung von Bildern aus dem Dateiablagebereich';

$string['select'] = 'Bilder Auswahl';
$string['selectfolder'] = 'Anzeige aller Bilder aus einem Ordner (einschießlich später hochgeladener Bilder)';
$string['selectimages'] = 'Auswahl einzelner Bilder zum Anzeigen';
$string['selectexternal'] = 'Anzeige von Bildern einer externen Quelle';
$string['externalgalleryurl'] = 'Gallerie URL oder RSS';
$string['externalgalleryurldesc'] = 'Sie können folgende externe Gallerien einbetten:';
$string['width'] = 'Breite';
$string['widthdescription'] = 'Eingabe der Breite für die Bilder (in Pixel). Die Bilder werden auf diese Breite skaliert.';
$string['style'] = 'Stil';
$string['stylethumbs'] = 'Miniaturansicht';
$string['stylesquares'] = 'Miniaturansicht (Quadratisch)';
$string['styleslideshow'] = 'Diavorführung';

$string['cannotdisplayslideshow'] = 'Die Diavorführung kann nich angezeigt werden.';

$string['gallerysettings'] = 'Gallerie Einstellungen';
$string['useslimbox2'] = 'Slimbox 2 anwenden?';
$string['useslimbox2desc'] = 'Slimbox 2 (ein Clone von Lightbox 2) ist ein einfaches, unauffälliges Script, das die Bilder in einem Fenster darstellt, das über der aktuellen Seite zu schweben scheint.';
$string['photoframe'] = 'Foto-Rahmen benutzen?';
$string['photoframedesc'] = 'Wenn diese Option gesetzt ist, werden die Miniaturansichten aller Bilder mit einem Rahmen in der Gallerie angezeigt.';
$string['previewwidth'] = 'Maximale Foto-Weite';
$string['previewwidthdesc'] = 'Bestimmen Sie die maxiale Weite auf die die Bilder verkleinert werden, wenn sie mit Slimbox2 angezeigt werden.';

// Flickr
$string['flickrsettings'] = 'Flickr Einstellungen';
$string['flickrapikey'] = 'Flickr API Schlüssel';
$string['flickrapikeydesc'] = 'Zum Betrachten von Flickr Bildern, benötigt man einen gültigen Flickr API Schlüssel. <a href="http://www.flickr.com/services/api/keys/apply/" target="_blank">Den Schlüssel online anlegen</a>.';
$string['flickrsets'] = 'Flickr Sets';

// Photobucket
$string['pbsettings'] = 'Photobucket Einstellungen';
$string['pbapikey'] = 'Photobucket API Schlüssel';
$string['pbapikeydesc'] = 'Zum Betrachten von Photobucket Bildern, benötigt man einen gültigen Photobucket API Schlüssel und den API Privaten Schlüssel.<br>Gehen Sie dazu auf <a href="http://developer.photobucket.com/" target="_blank">die Photobucket Developer Website</a>, stimmen Sie den Nutzerbedingungen zu, melden Sie sich an und erhalen Sie die beiden API Schlüssel.';
$string['pbapiprivatekey'] = 'Photobucket API Privater Schlüssel';
$string['photobucketphotosandalbums'] = 'Photobucket Nutzer-Fotos und Alben';

// Panoramio
$string['Photo'] = 'Foto';
$string['by'] = 'by';
$string['panoramiocopyright'] = 'Fotos, die von Panoramio bereitgestellt werden, unterliegen dem Copyright der Eigentümer.';
$string['panoramiouserphotos'] = 'Panoramio Nutzer-Fotos';

$string['picasaalbums'] = 'Picasa Album';

$string['windowslivephotoalbums'] = 'Windows Live Foto Gallerie Album';

$string['externalnotsupported'] = 'Die externe URL wird nicht unterstützt';
