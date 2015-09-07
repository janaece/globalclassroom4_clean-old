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
 * @author     Dominique-Alain Jan <dajan@mac.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

// @todo<nigel>: most likely need much better descriptions here for these environment issues
$string['phpversion'] = 'Mahara ne fonctionne pas avec une version de PHP antérieure à la version %s. Veuillez mettre à jour votre installation PHP ou changer d\'hébergeur pour votre Mahara.';
$string['jsonextensionnotloaded'] = 'Votre configuration serveur ne comprend pas l\'extension JSON. Mahara en a besoin pour envoyer et recevoir des données depuis le navigateur. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['pgsqldbextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension pgSQL. Mahara en a besoin pour stocker les données dans une base de données relationnelle. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['mysqldbextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension MySQL. Mahara en a besoin pour stocker les données dans une base de données relationnelle. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['unknowndbtype'] = 'La configuration de votre serveur spécifie un type de base de données inconnu. Les seules valeurs valides sont « postgres8 » et « mysql5 ». Veuillez modifier le type de base de données dans votre fichier config.php.';
$string['domextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension dom. Mahara en a besoin pour analyser les données XML en provenance de diverses sources.';
$string['xmlextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension %s. Mahara en a besoin pour interpréter les données XML provenant de diverses sources. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['gdextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension GD. Mahara en a besoin pour effectuer des opérations sur les images déposées, par exemple pour les redimensionner. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['gdfreetypenotloaded'] = 'La configuration de l\'extension GD de votre serveur ne supporte pas Freetype. Mahara nécessite Freetype pour gérer les images CAPTCHA. Veuillez vous assurer que GD est configuré de façon à supporter Freetype.';
$string['sessionextensionnotloaded'] = 'La configuration de votre serveur ne comporte pas l\'extension session. Mahara en a besoin pour gérer la connexion des utilisateurs. Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';
$string['curllibrarynotinstalled'] = 'La configuration de votre serveur ne comporte pas l\'extension curl. Mahara en a besoin pour l\'intégration avec Moodle ainsi que pour récupérer les flux externes.  Veuillez vous assurer que cette extension est chargée dans php.ini ou l\'installer le cas échéant.';

$string['magicquotesgpc'] = 'You have dangerous PHP settings, magic_quotes_gpc is on. Mahara is trying to work around this, but you should really fix it. If you are using shared hosting and your host allows for it, you should include the following line in your .htaccess file: php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'You have dangerous PHP settings, magic_quotes_runtime is on. Mahara is trying to work around this, but you should really fix it. If you are using shared hosting and your host allows for it, you should include the following line in your .htaccess file: php_flag magic_quotes_runtime off';
$string['magicquotessybase'] = 'You have dangerous PHP settings, magic_quotes_sybase is on. Mahara is trying to work around this, but you should really fix it. If you are using shared hosting and your host allows for it, you should include the following line in your .htaccess file: php_flag magic_quotes_sybase off';

$string['registerglobals'] = 'Certains de vos réglages PHP sont dangereux : register_globals est activé. Mahara va tenter de contourner ceci, mais vous devriez corriger ce réglage. Si vous utilisez les services d\'un hébergement mutualisé et que ce dernier vous le permet, vous pouvez ajouter la ligne de commande suivante à votre fichier .htaccess : php_flag register_globals off';
$string['magicquotesgpc'] = 'Certains de vos réglages PHP sont dangereux : magic_quotes_gpc est activé. Mahara va tenter de contourner ceci, mais vous devriez corriger ce réglage. Si vous utilisez les services d\'un hébergement mutualisé et que ce dernier vous le permet, vous pouvez ajouter la ligne de commande suivante à votre fichier .htaccess : php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'Certains de vos réglages PHP sont dangereux : magic_quotes_runtime est activé. Mahara va tenter de contourner ceci, mais vous devriez corriger ce réglage. Si vous utilisez les services d\'un hébergement mutualisé et que ce dernier vous le permet, vous pouvez ajouter la ligne de commande suivante à votre fichier .htaccess : php_flag magic_quotes_runtime off ';
$string['magicquotessybase'] = 'Certains de vos réglages PHP sont dangereux : magic_quotes_sybase est activé. Mahara va tenter de contourner ceci, mais vous devriez corriger ce réglage. Si vous utilisez les services d\'un hébergement mutualisé et que ce dernier vous le permet, vous pouvez ajouter la ligne de commande suivante à votre fichier .htaccess : php_flag magic_quotes_sybase off';

$string['safemodeon'] = 'Votre serveur semble tourner en mode sécurisé (safe mode). Mahara ne peut pas fonctionner dans ce mode. Vous devez désactiver ce mode soit dans le fichier php.ini, soit dans la configuration d\'Apache de votre site.

Si vous utilisez un hébergement mutualisé, il est peu probable que vous puissiez quoi que ce soit pour désactiver le mode sécurisé, si ce n\'est en faire la demande à votre hébergeur. Il vous faut peut-être envisager de changer d\'hébergeur.';
$string['apcstatoff'] = 'Votre serveur utilise un service APC avec le paramètre apc.stat=0. Mahara ne supporte pas cette configuration. Vous devez modifier ce paramètre en apc.stat=1 and le fichier php.ini de votre serveur.

Si vous utilisez un hébergement mutualisé, il est peu probable que vous puissiez quoi que ce soit pour désactiver le mode sécurisé, si ce n\'est en faire la demande à votre hébergeur. Il vous faut peut-être envisager de changer d\'hébergeur.';
$string['datarootinsidedocroot'] = 'Votre dossier de données est situé dans le dossier accessible par le web. Ceci représente une grosse faille de sécurité, puisque tout le monde peut avoir accès aux données de session (pour pirater par exemple les sessions d\'autres utilisateurs) ou à des fichiers déposés par d\'autres utilisateurs auxquels ils ne devraient pas avoir accès. Veuillez placer votre dossier de données en dehors du dossier accessible par le web.';
$string['datarootnotwritable'] = 'Le dossier de données que vous avez choisi, %s, n\'est pas accessible en écriture. Ceci signifie que ni les données de session, ni les fichiers des utilisateurs, ni rien d\'autre ne pourra être enregistré sur votre serveur. Veuillez créer le dossier s\'il n\'existe pas encore ou faire en sorte que le serveur web soit possesseur du dossier.';
$string['couldnotmakedatadirectories'] = 'Apparemment il n\'est pas possible de créer certains fichiers et dossiers nécessaires à Mahara dans le dossier de données. Cela ne devrait pas arrivé, étant donné que Mahara a vait préalablement détecté ce dossier comme accessible en écriture. Veuillez contrôler les permissions pour ce dossier et vous assurer qu\il est accessible en lecture/écriture par le compte de votre serveur web (par ex: www-data ou wwww).';

$string['dbconnfailed'] = 'Mahara ne peut pas se connecter à la base de données.

  * Si vous êtes en train de travailler avec Mahara, veuillez essayer plus tard.
  * Si vous êtes un administrateur, veuillez contrôler les réglages de votre base de données et vous assurer qu\'elle est bien disponible.

L\'erreur survenue est la suivante :
';
$string['dbnotutf8'] = 'L\'encodage de votre base de données n\'est pas UTF-8. Mahara stocke à l\'interne toutes ses données en format UTF-8. Veuillez supprimer et recréer votre base de données en choisissant l\'encodage UTF-8.';
$string['dbversioncheckfailed'] = 'La version de votre serveur de base de données n\'est pas assez récente pour faire fonctionner Mahara correctement. Votre serveur est %s %s, alors que Mahara requiert au moins la version %s.';

// general exception error messages
$string['blocktypenametaken'] = 'Le type de bloc %s est déjà utilisé par un autre plugin (%s)';
$string['artefacttypenametaken'] = 'Le type de production %s est déjà utilisé par un autre plugin (%s)';
$string['artefacttypemismatch'] = 'Types de production non concordants. Vous essayez d\'utiliser ce %s comme un %s';
$string['classmissing'] = 'La classe %s du type %s du plugin %s est manquante';
$string['artefacttypeclassmissing'] = 'Les types de production doivent tous implémenter une classe. %s est manquant';
$string['artefactpluginmethodmissing'] = 'Le plugin de production %s doit implémenter %s';
$string['blocktypelibmissing'] = 'Fichier lib.php manquant pour le bloc %s dans le plugin de production %s';
$string['blocktypemissingconfigform'] = 'Le type de bloc %s doit implémenter instance_config_form';
$string['versionphpmissing'] = 'Il manque le fichier version.php au plugin %s %s !';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'Ceci sera installé au cours de l\'installation du plugin de production %s';
$string['blockconfigdatacalledfromset'] = 'Configdata ne doit pas être assigné directement. Utilisez plutôt PluginBlocktype::instance_config_save';
$string['invaliddirection'] = 'Direction %s non valide';
$string['onlyoneprofileviewallowed'] = 'Vous n\'êtes autorisé à avoir qu\'une seule page de profil';
$string['onlyoneblocktypeperview'] = 'Impossible de placer plus d\'un type de bloc %s dans une page';

// if you change these next two , be sure to change them in libroot/errors.php
// as they are duplicated there, in the case that get_string was not available.
$string['unrecoverableerrortitle'] = '%s. Site non disponible';
$string['unrecoverableerror'] = 'Une erreur non rattrapable est survenue. Vous avez vraisemblablement rencontré un méchant bogue du système.';
$string['parameterexception'] = 'Un paramètre requis est manquant';

$string['notfound'] = 'Introuvable';
$string['notfoundexception'] = 'La page que vous recherchez est introuvable';

$string['accessdenied'] = 'Accès refusé';
$string['accessdeniedexception'] = 'Vous n\'avez pas l\'autorisation d\'accéder à cette page';

$string['viewnotfoundexceptiontitle'] = 'Page introuvable';
$string['youcannotviewthisusersprofile'] = 'Vous ne pouvez pas consulter le profil de cet utilisateur';
$string['viewnotfound'] = 'Page avec l\'identifiant %s introuvable';
$string['viewnotfoundexceptionmessage'] = 'Vous avez essayé d\'accéder à une page inexistante !';

$string['artefactnotfoundmaybedeleted'] = 'La production d\'identifiant %s n\'a pas été trouvée. Elle a peut-être été supprimée entre-temps';
$string['artefactnotfound'] = 'La production d\'identifiant %s n\'a pas été trouvée';
$string['artefactnotinview'] = 'La prodution %s n\'est pas inclue dans la page %s';
$string['artefactonlyviewableinview'] = 'Les productions de ce type ne peuvent être affichées qu\'au sein d\'une page.';
$string['notartefactowner'] = 'Cette production ne vous appartient pas';

$string['blockinstancednotfound'] = 'Instance du bloc d\'identifiant %s introuvable';
$string['interactioninstancenotfound'] = 'L\'instance d\'activité d\'identifiant %s est introuvable';

$string['invalidviewaction'] = 'Action de contrôle de page non valide : %s';

$string['missingparamblocktype'] = 'Essayez de sélectionner d\'abord un type de bloc à ajouter';
$string['missingparamcolumn'] = 'Spécification de colonne manquante';
$string['missingparamorder'] = 'Spécification d\'ordre manquante';
$string['missingparamid'] = 'Identifiant manquant';
$string['themenameinvalid'] = 'Le nom du thème « %s » contient des caractères non valides.';
$string['timezoneidentifierunusable'] = 'Le PHP installé sur votre serveur ne retourne pas une valeur utile pour identifier la zone horaire (%%z) - certains formats de date, comme celui utilisé par l\'exportation LEAP2A, seront erronés. %%z is un paramètrea PHP de formattage des dates. Ce problème est souvent attribué à une limitation de l\'implémentation de PHP sous Windows.';
$string['postmaxlessthanuploadmax'] = 'La valeur de la variable PHP post_max_size (%s) est plus petite que celle de upload_max_filesize setting (%s). Des téléchargements de taille suppérieure à %s échoueront sans afficher d\'erreur. Habituellement, la valeur de  post_max_size est supérieur à celle de upload_max_filesize.';
$string['smallpostmaxsize'] = 'La valeur de la variable PHP post_max_size (%s) est faible. Les téléchargements de taille supérieure à %s échoueront sans afficher d\'erreur.';
