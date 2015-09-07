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
 * @author     Dominique-Alain JAN <djan@mac.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 * @copyright (C) 2011 Gregor Anzelj <gregor.anzelj@gmail.com>
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'Gallerie d\'images';
$string['description'] = 'Une collection d\'images de votre zone de fichiers';

$string['select'] = 'Sélection des images';
$string['selectfolder'] = 'Afficher toutes les images contenues dans un de mes dossiers (y compris les images qui y seront placées plus tard)';
$string['selectimages'] = 'Choisir individuellement les images à afficher';
$string['selectexternal'] = 'Afficher les images d\'une galerie externe';
$string['externalgalleryurl'] = 'URL ou flux RSS de la galerie';
$string['externalgalleryurldesc'] = 'Vous pouvez intégrer les galeries externes suivantes :';
$string['width'] = 'Largeur';
$string['widthdescription'] = 'Spécifiez la largeur de vos images (en pixels). La taille des images sera adaptée proportionnellement à cette largeur.';
$string['style'] = 'Style';
$string['stylethumbs'] = 'Vignette';
$string['stylesquares'] = 'Vignette (carrée)';
$string['styleslideshow'] = 'Diaporama';

$string['cannotdisplayslideshow'] = 'Impossible d\'afficher le diaporama.';

$string['gallerysettings'] = 'Paramètres de la galerie';
$string['useslimbox2'] = 'Utiliser Slimbox 2?';
$string['useslimbox2desc'] = 'Slimbox 2 (clone de Lightbox 2) est un simple script qui permet de superposer des images sur cette page.';
$string['photoframe'] = 'Cadre photo ?';
$string['photoframedesc'] = 'Si activée, cette option permet de dessiner un cadre autour de chaque vignette dans cette galerie.';
$string['previewwidth'] = 'Largeur maximale des photos';
$string['previewwidthdesc'] = 'Fixe la largeur maximale qui sera utilisée pour retailler les photos qui seront affichées avec Slimbox2.';

// Flickr
$string['flickrsettings'] = 'Paramètres de Flickr';
$string['flickrapikey'] = 'Clé API de Flickr';
$string['flickrapikeydesc'] = 'Pour afficher un groupe de photos depuis Flickr, vous devez posséder une clé API valide. Si vous ne l\'avez pas déjà, vous pouvez <a href="http://www.flickr.com/services/api/keys/apply/" target="_blank">en demandez une en ligne</a>.';
$string['flickrsets'] = 'Groupe de photos Flickr';

// Photobucket
$string['pbsettings'] = 'Paramètres Photobucket';
$string['pbapikey'] = 'Clé API de Photobucket';
$string['pbapikeydesc'] = 'Pour afficher les albums de photos de Photobucket, vous devez posséder une clé API et une clé API privée valides.<br>Allez sur le <a href="http://developer.photobucket.com/" target="_blank">site des développeurs Photobucket</a>, pour accepter les termes du contrat de service et obtenir les clés API.';
$string['pbapiprivatekey'] = 'Clé API privée de Photobucket';
$string['photobucketphotosandalbums'] = 'Photos albums de l\'utilisateur Photobucket';

// Panoramio
$string['Photo'] = 'Photo';
$string['by'] = 'par';
$string['panoramiocopyright'] = 'Photos fournies par Panoramio sous licence des droits d\'auteur de leurs propriétaires.';
$string['panoramiouserphotos'] = 'Photos de l\'utilisateur Panoramio';

$string['picasaalbums'] = 'Albums Picasa';

$string['windowslivephotoalbums'] = 'Galerie d\'albums photo sur Windows Live';

$string['externalnotsupported'] = 'L\'URL externe que vous avez donné n\'est pas supporté par Mahara';
