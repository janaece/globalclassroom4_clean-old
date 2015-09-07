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
 * @subpackage fr.utf8
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @author     Dominique-Alain JAN <djan@mac.com>
 * @copyright  (C) 2006-2011 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['addauthority'] = 'Ajouter une autorité';
$string['application'] = 'Application';
$string['authloginmsg'] = 'Indiquez un message à afficher lorsqu\'un utilisateur essaie de se connecter depuis le formulaire de connexion de Mahara';
$string['authname'] = 'Nom d\'autorité';
$string['cannotremove'] = 'Impossible de supprimer ce plug-in d\'authentification, car c\'est le seul utilisé pour cette institution.';
$string['cannotremoveinuse'] = 'Impossible de supprimer ce plug-in d\'authentification, car il est utilisé par des utilisateurs. Veuillez modifier leur compte avant de supprimer le plug-in.';
$string['cantretrievekey'] = 'Une erreur est survenue lors de la récupération de la clef publique du serveur distant.<br />Veuillez vous assurer que les champs Application et WWW Root sont renseignés correctement et que le réseau est activé sur le serveur distant.';
$string['changepasswordurl'] = 'URL de changement de mot de passe';
$string['duplicateremoteusername'] = 'Le nom d\'utilisateur utilisé pour cette connexion externe est déjà pris par l\'utilisateur %s. Les noms d\'utilisateurs doivent être uniques au sein de chaque méthode d\'authentification.';
$string['duplicateremoteusernameformerror'] = 'Les noms d\'utilisateurs doivent être uniques au sein de chaque méthode d\'authentification.';
$string['editauthority'] = 'Modifier une autorité';
$string['errnoauthinstances'] = 'Il semble n\'y avoir aucune instance de plugin d\'authentification configurée pour le serveur d\'adresse %s';
$string['errnoxmlrcpuser'] = 'Impossible de vous authentifier actuellement. Les raisons suivantes peuvent en être la cause :

    * votre session SSL est échue. Retourner à l\'autre application et cliquez le lien pour vous connecter de nouveau à Mahara ;
    * vous n\'avez pas les autorisations pour vous connecter à Mahara via SSO. Veuillez contacter votre administrateur si vous pensez que vous devriez avoir ce droit.';
$string['errnoxmlrpcinstances'] = 'Il semble n\'y avoir aucune instance de plugin d\'authentification XMLRPC configurée pour le serveur d\'adresse %s';
$string['errnoxmlrpcuser'] = 'Nous ne pouvons pas vous authentifier cette fois-ci. Les causes de ce problème peuvent être: * Votre cession SSO a expiré. Retournez dans l\'application de départ et cliquez à nouveau sur le lien qui vous mène à ce serveur Mahara. * Vous n\'êtes pas autorisé à effectuer une authentification SSO dans ce Mahara. Veuillez vérifier cela avec votre administrateur s\'il vous semble qu\'il s\'agisse d\'une erreur.';
$string['errnoxmlrpcwwwroot'] = 'Il n\'y a pas d\'enregistrement pour aucun serveur d\'adresses %s';
$string['errorcertificateinvalidwwwroot'] = 'Ce certificat a été créé pour %s, mais vous essayez de l\'utiliser pour %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'Impossible de générer une nouvelle clef SSL. Veuillez vous assurer que le logiciel openssl et que le module PHP pour openssl soient tous les deux installés sur le serveur.';
$string['errornotvalidsslcertificate'] = 'Ce n\'est pas un certificat SSL valide';
$string['host'] = 'Nom d\'hôte ou adresse';
$string['hostwwwrootinuse'] = 'Cette racine web (wwwroot) est déjà utilisée par une autre institution (%s)';
$string['ipaddress'] = 'Adresse IP';
$string['name'] = 'Nom du site';
$string['noauthpluginconfigoptions'] = 'Il n\'a pas pas d\'option de configuration pour ce plug-in';
$string['nodataforinstance'] = 'Impossible de trouver les données de l\'instance d\'authentification';
$string['parent'] = 'Autorité parente';
$string['port'] = 'Numéro de port';
$string['protocol'] = 'Protocole';
$string['requiredfields'] = 'Champs du profil requis';
$string['requiredfieldsset'] = 'Jeu de champs du profil requis';
$string['saveinstitutiondetailsfirst'] = 'Veuillez enregistrer les renseignements de cette institution avant de configurer les plug-ins d\'authentification.';
$string['shortname'] = 'Nom abrégé de votre site';
$string['ssodirection'] = 'Direction SSO';
$string['theyautocreateusers'] = 'Création automatique des utilisateurs sur le serveur distant';
$string['theyssoin'] = 'Connexion par SSO sur ce serveur des utilisateurs distants';
$string['unabletosigninviasso'] = 'Impossible de se connecter via SSO';
$string['updateuserinfoonlogin'] = 'Mettre à jour les renseignements des utilisateurs lors de la connexion';
$string['updateuserinfoonlogindescription'] = 'Récupérer sur le serveur distant les informations des utilisateurs et les mettre à jour localement lors de chacune de leurs connexions.';
$string['weautocreateusers'] = 'Création automatique des utilisateurs ici';
$string['weimportcontent'] = 'Importation du contenu ici (seulement certaines applications)';
$string['weimportcontentdescription'] = '(seulement certaines applications)';
$string['wessoout'] = 'Connexion des utilisateurs à d\'autres applications par SSO à partir d\'ici';
$string['wwwroot'] = 'Racine WWW';
$string['xmlrpccouldnotlogyouin'] = 'Impossible de vous connecter :(';
$string['xmlrpccouldnotlogyouindetail'] = 'Désolé, il vous est impossible de vous connecter à Mahara actuellement. Veuillez essayer plus tard et, si le problème persiste, contactez votre administrateur';
$string['xmlrpcserverurl'] = 'URL du serveur XML-RPC';
