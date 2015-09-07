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
 * @subpackage lang
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

// IMAP
$string['host'] = 'Nom d\'hôte ou adresse du serveur';
$string['wwwroot'] = 'WWW Root';

$string['port'] = 'Numéro de port'; 
$string['protocol'] = 'Protocole';
$string['changepasswordurl'] = 'URL de changement de mot de passe';
$string['cannotremove']  = 'Impossible de supprimer cette méthode d\'authentification, car c\'est la seule utilisée pour cette institution.';
$string['cannotremoveinuse']  = 'Impossible de supprimer cette méthode d\'authentification, car elle est utilisée par des utilisateurs.\nVeuillez modifier leur compte avant de supprimer la méthode.';
$string['saveinstitutiondetailsfirst'] = 'Veuillez enregistrer les renseignements de cette institution avant de configurer les méthodes d\'authentification.';

$string['editauthority'] = 'Modifier une autorité';
$string['addauthority']  = 'Ajouter une autorité';

$string['updateuserinfoonlogin'] = 'Mettre à jour les renseignements des utilisateurs lors de la connexion';
$string['updateuserinfoonlogindescription'] = 'Récupérer sur le serveur distant les informations des utilisateurs et les mettre à jour localement lors de chacune de leurs connexions.';
$string['xmlrpcserverurl'] = 'URL du serveur XML-RPC';
$string['ipaddress'] = 'Adresse IP';
$string['shortname'] = 'Nom abrégé de votre site';
$string['name'] = 'Nom du site';
$string['nodataforinstance'] = 'Impossible de trouver les données de l\'instance d\'authentification ';
$string['authname'] = 'Nom de l\'autorité';
$string['weautocreateusers'] = 'Création automatique des utilisateurs localement';
$string['theyautocreateusers'] = 'Création automatique des utilisateurs sur le serveur distant';
$string['parent'] = 'Autorité parente';
//$string['wessoout'] = 'We SSO out';
//$string['theyssoin'] = 'They SSO in';
$string['application'] = 'Application';
$string['cantretrievekey'] = 'Une erreur est survenue lors de la récupération de la clef publique du serveur distant.<br />Veuillez vous assurer que les champs « Application » et « WWW Root » sont renseignés correctement et que le réseau est activé sur le serveur distant.';

$string['errorcertificateinvalidwwwroot'] = 'Ce certificat a été créé pour %s, mais vous essayez de l\'utiliser pour %s.';
$string['errnoauthinstances']   = 'Il semble n\'y avoir aucune instance de méthode d\'authentification configurée pour le serveur à ';
$string['errornotvalidsslcertificate'] = 'Ce n\'est pas un certificat SSL valide';
$string['errnoxmlrcpinstances'] = 'Il semble n\'y avoir aucune instance de méthode d\'authentification XMLRPC configurée pour le serveur à ';
$string['errnoxmlrcpwwwroot']   = 'Aucune donnée disponible pour le serveur à ';
$string['errnoxmlrcpuser']      = 'Impossible de vous authentifier actuellement. Les raisons suivantes peuvent en être la cause :

    * votre session SSL est échue. Retourner à l\'autre application et cliquez le lien pour vous connecter de nouveau à Mahara ;
    * vous n\'avez pas les autorisations pour vous connecter à Mahara via SSO. Veuillez contacter votre administrateur si vous pensez que vous devriez avoir ce droit.';

$string['unabletosigninviasso'] = 'Impossible de se connecter via SSO';
$string['xmlrpccouldnotlogyouin'] = 'Impossible de vous connecter :(';
$string['xmlrpccouldnotlogyouindetail'] = 'Désolé, il vous est impossible de vous connecter à Mahara actuellement. Veuillez essayer dans quelques minutes et, si le problème persiste, contactez votre administrateur';

$string['requiredfields'] = 'Champs du profil requis';
$string['requiredfieldsset'] = 'Jeu de champs du profil requis';

?>
