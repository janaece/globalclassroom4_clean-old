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

$string['administration'] = 'Gestion du site';

// Installer
$string['installation'] = 'Installation';
$string['release'] = 'Version %s (%s)';
$string['copyright'] = 'Copyright &copy; 2006 et suivantes, Catalyst IT Ltd';
$string['agreelicense'] = 'J\'accepte';
$string['component'] = 'Composante ou extension';
$string['continue'] = 'Continuer';
$string['coredata'] = 'Données centrales';
$string['coredatasuccess'] = 'Données centrales correctement installées';
$string['fromversion'] = 'De la version';
$string['information'] = 'Information';
$string['installsuccess'] = 'Installation réussie de la version ';
$string['toversion'] =  'À la version';
$string['notinstalled'] = 'Pas installé';
$string['nothingtoupgrade'] = 'Rien à mettre à jour';
$string['performinginstallsandupgrades'] = 'Installations et mises à jour...';
$string['runupgrade'] = 'Lancer la mise à jour';
$string['successfullyinstalled'] = 'Installation de Mahara réussie!';
$string['thefollowingupgradesareready'] = 'Les mises à jour suivantes sont prêtes :';
$string['upgradeloading'] = 'Chargement...';
$string['upgrades'] = 'Mises à jour';
$string['upgradesuccess'] = 'Mise à jour réussie';
$string['upgradesuccesstoversion'] = 'Mise à jour réussie à la version ';
$string['upgradefailure'] = 'Échec de la mise à jour!';
$string['noupgrades'] = 'Rien à mettre à jour! Votre version est à jour!';
$string['youcanupgrade'] = 'Vous pouvez mettre à jour Mahara de la version %s (%s) à la version %s (%s)!';
$string['Plugin'] = 'Extension';

// Admin navigation menu
$string['adminhome'] = 'Gestion du site';
$string['configsite'] = 'Configuration';
$string['configusers'] = 'Utilisateurs';
$string['configextensions'] = 'Extensions';
$string['manageinstitutions'] = 'Institutions';

// Admin homepage strings
$string['siteoptions'] = 'Options générales';
$string['siteoptionsdescription'] = 'Configurer les options de base du site, comme le nom, la langue et le thème';
$string['editsitepages'] = 'Pages statiques';
$string['editsitepagesdescription'] = 'Modifier le contenu des pages statiques du site';
$string['linksandresourcesmenu'] = 'Liens et ressources';
$string['linksandresourcesmenudescription'] = 'Gestion des liens et des fichiers ressources';
$string['adminfiles'] = 'Fichiers de l\'administrateur';
$string['adminfilesdescription'] = 'Déposer et gérer les fichiers du menu « Liens et ressources »';
$string['networking'] = 'Réseau';
$string['networkingdescription'] = 'Configurer les options réseau de Mahara';

$string['staffusers'] = 'Personnel';
$string['staffusersdescription'] = 'Attribuer les permissions aux membres du personnel';
$string['adminusers'] = 'Administrateurs';
$string['adminusersdescription'] = 'Attribuer les droits de gestion du site';
$string['institutions'] = 'Institutions';
$string['institutiondetails'] = 'Détails de l\'institution';
$string['institutionauth'] = 'Autorités de l\'institution';
$string['institutionsdescription'] = 'Installer et gérer les institutions';
$string['adminnotifications'] = 'Notifications à l\'administrateur';
$string['adminnotificationsdescription'] = 'Vue d\'ensemble des notifications destinées aux administrateurs';
$string['uploadcsv'] = 'Ajouter par CSV';
$string['uploadcsvdescription'] = 'Ajout de nouveaux utilisateurs à partir d\'un fichier CSV';
$string['usersearch'] = 'Recherche';
$string['usersearchdescription'] = 'Rechercher tous les utilisateurs et gérer leurs comptes';
$string['usersearchinstructions'] = 'Vous pouvez chercher les utilisateurs en cliquant les initiales du prénom et du nom ou en tapant un nom ou une adressse courriel dans le champ de recherche.';

$string['institutionmembersdescription'] = 'Associer les utilisateurs aux institutions';
$string['institutionstaffdescription'] = 'Attribuer les permissions au personnel';
$string['institutionadminsdescription'] = 'Attribuer les permissions des administrateurs d\'institution';

$string['pluginadmin'] = 'Gestion des extensions';
$string['pluginadmindescription'] = 'Installer et configurer les extensions';

// Site options
$string['allowpublicviews'] = 'Permettre un accès général aux pages publiques';
$string['allowpublicviewsdescription'] = 'Une fois ce réglage activé, les utilisateurs pourront créer des pages accessibles à tous, et non seulement aux utilisateurs connectés';
$string['defaultaccountinactiveexpire'] = 'Délai d\'inactivité du compte par défaut';
$string['defaultaccountinactiveexpiredescription'] = 'Durée pendant laquelle un compte utilisateur reste actif sans connexion de l\'utilisateur';
$string['defaultaccountinactivewarn'] = 'Délai d\'avertissement pour l\'expiration et la désactivation';
$string['defaultaccountinactivewarndescription'] = 'Durée entre l\'envoi d\'un avertissement d\'expiration ou de désactivation et l\'envoi d\'un avertissement à l\'utilisateur';
$string['defaultaccountlifetime'] = 'Durée de vie d\'un compte par défaut';
$string['defaultaccountlifetimedescription'] = 'Si ce réglage est renseigné, les comptes utilisateurs arriveront à échéance une fois cette durée écoulée, à partir de la date de création du compte';
$string['language'] = 'Langue';
$string['pathtoclam'] = 'Chemin d\'accès à Clam AV';
$string['pathtoclamdescription'] = 'Le chemin d\'accès au programme « clamscan » ou « clamdscan »';
$string['pathtofile'] = 'Chemin d\'accès au programme file';
$string['pathtofiledescription'] = 'Le chemin d\'accès au programme « file »';
$string['searchplugin'] = 'Extension de recherche';
$string['searchplugindescription'] = 'L\'extension de recherche à utiliser';
$string['sessionlifetime'] = 'Délai d\'inactivité (min.)';
$string['sessionlifetimedescription'] = 'Délai d\'inactivité en minutes avant la déconnexion automatique de la session de travail';
$string['setsiteoptionsfailed'] = 'Impossible d\'enregistrer le réglage %s';
$string['sitedefault'] = 'Réglage par défaut ';
$string['sitelanguagedescription'] = 'Langue par défaut du site';
$string['sitename'] = 'Nom du site';
$string['sitenamedescription'] = 'Le nom du site est affiché à divers endroits du site et dans les courriels envoyés par le site';
$string['siteoptionspagedescription'] = 'Vous pouvez régler ici des paramètres globaux qui s\'appliqueront par défaut à l\'ensemble du site.';
$string['siteoptionsset'] = 'Les préférences du site ont été mises à jour.';
$string['sitethemedescription'] = 'Le thème par défaut du site';
$string['theme'] = 'Thème';
$string['updatesiteoptions'] = 'Modifier les préférences du site';
$string['usersallowedmultipleinstitutions'] = 'Utilisateurs dans plusieurs institutions';
$string['usersallowedmultipleinstitutionsdescription'] = 'Une fois ce réglage activé, les utilisateurs pourront être membres de plusieurs institutions simultanément';
$string['usersseenewthemeonlogin'] = 'Le nouveau thème sera affiché lors de la prochaine connexion des utilisateurs.';
$string['viruschecking'] = 'Utiliser l\'anti-virus';
$string['viruscheckingdescription'] = 'Une fois ce réglage activé, la vérification anti-virus ClamAV sera activée pour tous les fichiers déposés';

// Site content
$string['about'] = 'À propos';
$string['discardpageedits'] = 'Annuler vos modifications à cette page?';
$string['editsitepagespagedescription'] = 'Vous pouvez modifier ici le contenu de certaines pages du site, par exemple la page d\'accueil (différente pour les utilisateurs connectés) et les pages référencées dans le pied de page.';
$string['home'] = 'Accueil';
$string['loadsitepagefailed'] = 'Échec du chargement de la page';
$string['loggedouthome'] = 'Accueil des visiteurs non-connectés';
$string['pagename'] = 'Nom de la page';
$string['pagesaved'] = 'Page enregistrée';
$string['pagetext'] = 'Contenu de la page';
$string['privacy'] = 'Protection des données';
$string['savechanges'] = 'Enregistrer les modifications';
$string['savefailed'] = 'Échec de l\'enregistrement';
$string['sitepageloaded'] = 'Page chargée';
$string['termsandconditions'] = 'Conditions d\'utilisation';
$string['uploadcopyright'] = 'Mention de copyright des fichiers';

// Éditeur menu Liens et ressources
$string['adminfile'] = 'Fichiers de l\'administrateur';
$string['adminpublicdirname'] = 'public';  // Name of the directory in which to store public admin files
$string['adminpublicdirdescription'] = 'Fichiers accessibles par les visiteurs non-connectés';
$string['badmenuitemtype'] = 'Type d\'élément inconnu';
$string['confirmdeletemenuitem'] = 'Voulez-vous vraiment supprimer cet élément?';
$string['deletingmenuitem'] = 'Suppression d\'un élément';
$string['deletefailed'] = 'La suppression de cet élément a échoué';
$string['externallink'] = 'Lien externe';
$string['editmenus'] = 'Modifier la section « Liens et ressources »';
$string['linkedto'] = 'Lié à';
$string['linksandresourcesmenupagedescription'] = 'La section « Liens et ressources » est affichée pour tous les utilisateurs sur la plupart des pages. Vous pouvez ajouter des liens vers d\'autres sites web ou vers des fichiers déposés dans la section %sFichiers de l\'administrateur%s.';
$string['loadingmenuitems'] = 'Chargement des éléments';
$string['loadmenuitemsfailed'] = 'Le chargement des éléments a échoué';
$string['loggedinmenu'] = 'Liens et ressources pour les utilisateurs connectés';
$string['loggedoutmenu'] = 'Liens et ressources publics';
$string['menuitemdeleted'] = 'Élément supprimé';
$string['menuitemsaved'] = 'Élément enregistré';
$string['menuitemsloaded'] = 'Éléments chargés';
$string['name'] = 'Nom';
$string['noadminfiles'] = 'Aucun fichier d\'administrateur est disponible';
$string['public'] = 'public';
$string['savingmenuitem'] = 'Enregistrement de l\'élément';
$string['type'] = 'Type';

// Admin Files
$string['adminfilespagedescription'] = 'Vous pouvez déposer des fichiers qui pourront être inclus dans la section %sLiens et ressources%s.';

// Networking options
$string['networkingextensionsmissing'] = 'Désolé, vous ne pouvez pas configurer le réseau Mahara, car votre installation PHP ne comporte pas les extensions nécessaires :';
$string['publickey'] = 'Clef publique';
$string['publickeydescription'] = 'Cette clef publique est générée automatiquement et est modifiée tous les 28 jours.';
$string['publickeyexpires'] = 'La clef publique arrive à échéance';
$string['enablenetworkingdescription'] = 'Permet à votre serveur Mahara de communiquer avec d\'autres serveurs Moodle ou d\'autres applications.';
$string['enablenetworking'] = 'Activer le réseau';
$string['networkingenabled'] = 'Le réseau a été activé.';
$string['networkingdisabled'] = 'Le réseau a été désactivé. ';
$string['networkingpagedescription'] = 'La fonctionnalité de réseau de Mahara lui permettent de communiquer avec d\'autres sites Mahara ou Moodle tournant sur la même machine ou sur une autre. Si le réseau est activé, vous pouvez configurer l\'authentification unique (SSO) pour les utilisateurs se connectant à leur Moodle ou leur Mahara.';
$string['networkingunchanged'] = 'Les réglages réseau n\'ont pas été modifiés';
$string['promiscuousmode'] = 'Enregistrer automatiquement tous les serveurs';
$string['promiscuousmodedisabled'] = 'L\'auto-enregistrement a été désactivé. ';
$string['promiscuousmodeenabled'] = 'L\'auto-enregistrement a été activé. ';
$string['promiscuousmodedescription'] = 'Créer une nouvelle institution pour chaque serveur qui se connecte et permettre à ses utilisateurs de se connecter à Mahara';
$string['wwwroot'] = 'WWW Root';
$string['wwwrootdescription'] = 'L\'URL par lequel vos utilisateurs accèdent à ce site Mahara et l\URL pour lequel les clefs SSL sont générées';

// Upload CSV
$string['csvfile'] = 'Fichier CSV';
$string['emailusersaboutnewaccount'] = 'Envoyer aux utilisateurs un courriel au sujet de leur compte?';
$string['emailusersaboutnewaccountdescription'] = 'Indique si un courriel doit être envoyé aux utilisateurs au sujet de leur nouveau compte';
$string['forceuserstochangepassword'] = 'Imposer le changement de mot de passe?';
$string['forceuserstochangepassworddescription'] = 'Indique si les utilisateurs doivent modifier leur mot de passe dès leur première connexion';
$string['uploadcsvinstitution'] = 'Institution et méthode d\'authentification des nouveaux utilisateurs';
$string['uploadcsvconfigureauthplugin'] = 'Vous devez configurer une méthode d\'authentification avant de pouvoir ajouter des utilisateurs par CSV';
$string['csvfiledescription'] = 'Fichier contenant les utilisateurs à ajouter';
$string['uploadcsverrorinvalidfieldname'] = 'Le nom de champ «%s» est invalide';
$string['uploadcsverrorrequiredfieldnotspecified'] = 'Un champ requis «%s» n\'a pas été indiqué dans la ligne format';
$string['uploadcsverrornorecords'] = 'Le fichier semble ne contenir aucun enregistrement (même si l\'en-tête est correcte)';
$string['uploadcsverrorunspecifiedproblem'] = 'Les enregistrements de votre fichier CSV n\'ont pas pu être insérés. Si le format de votre fichier est correct, il s\'agit vraisemblablement d\'un bogue. Merci de <a href="https://eduforge.org/tracker/?func=add&group_id=176&atid=739">créer un rapport de bogue</a>, en y joignant le fichier CSV file (n\'oubliez pas de retirer les mots de passes!) et, si possible, le journal des erreurs';
$string['uploadcsverrorinvalidemail'] = 'Erreur à la ligne %s de votre fichier : l\'adresse de courriel de cet utilisateur est invalide';
$string['uploadcsverrorincorrectnumberoffields'] = 'Erreur à la ligne %s de votre fichier : cette ligne ne comporte pas le bon nombre de champs';
$string['uploadcsverrorinvalidpassword'] = 'Erreur à la ligne %s de votre fichier : le mot de passe de cet utilisateur est invalide';
$string['uploadcsverrorinvalidusername'] = 'Erreur à la ligne %s de votre fichier : le nom d\'utilisateur est incorrect';
$string['uploadcsverrormandatoryfieldnotspecified'] = 'La ligne %s du fichier ne comporte pas le champ requis «%s»';
$string['uploadcsverroruseralreadyexists'] = 'La ligne %s du fichier indique un nom d\'utilisateur «%s» qui existe déjà dans le système';
$string['uploadcsverroremailaddresstaken'] = 'La ligne %s du fichier indique une adresse de courriel «%s» qui existe déjà dans le système';
$string['uploadcsvpagedescription'] = '<p>Vous pouvez utiliser cet outil pour créer de nouveaux utilisateurs à partir d\'un fichier <acronym title="Comma Separated Values">CSV</acronym> (séparateur virgule).</p>
   
<p>La première ligne de votre fichier CSV doit indiquer le format de vos données CSV. Par exemple, il pourrait ressembler à cela :</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>Cette ligne doit obligatoirement inclure les champs <tt>username</tt>, <tt>password</tt>, <tt>email</tt>, <tt>firstname</tt> et <tt>lastname</tt>, ainsi que les autres champs de l\'institution (des nouveaux utilisateurs) qui sont à la fois obligatoires et verrouillés. Vous pouvez <a href="%s">configurer les champs obligatoires</a> pour toutes les institutions, ou <a href="%s">configurer les champs verrouillés pour toutes les institutions</a>.</p>

<p>Votre fichier CSV peut inclure n\'importe quel autre champ de profil à votre gré. La liste complète des champs est :</p>

%s';
$string['uploadcsvsomeuserscouldnotbeemailed'] = 'Certains messages n\'ont pu être envoyés à certains utilisateurs. Soit parce que leurs adresses est invalide, soit parce que le serveur n\'est pas configuré pour envoyer des courriels. Vérifier le journal des messages d\'erreur pour obtenir plus de détails. Pour le moment, vous devez contacter ces personnes à l\'aide de votre messagerie :';
$string['uploadcsvusersaddedsuccessfully'] = 'Les utilisateurs dans ce fichier ont été ajouté à votre Mahara.';
$string['uploadcsvfailedusersexceedmaxallowed'] = 'Aucun utilisateur n\a été ajouté, parce que votre fichier contient trop d\'utilisateurs et que le nombre des utilisateurs de votre institution dépasse le maximum autorisé.';

// Admin Users
$string['adminuserspagedescription'] = '<p>Vous pouvez choisir ici les administrateurs du site. Les administrateurs actuels sont listés sur la droite, les administrateurs potentiels sont sur la gauche.</p><p>Le système doit avoir au moins un administrateur.</p>';
$string['institutionadminuserspagedescription'] = 'Vous pouvez choisir ici les administrateurs de l\'institution. Les administrateurs actuels sont listés sur la droite, les administrateurs potentiels sont sur la gauche.';
$string['potentialadmins'] = 'Administrateurs potentiels';
$string['currentadmins'] = 'Administrateurs actuels';
$string['adminusersupdated'] = 'Administrateurs mis à jour';

// Staff Users
$string['staffuserspagedescription'] = 'Vous pouvez choisir ici les membres du personnel qui animeront le site. Les membres du personnel actuels sont sur la droite, et les membres du personnels potentiels sont sur la gauche.';
$string['institutionadminuserspagedescription'] = 'Vous pouvez choisir ici les membres du personnel qui animeront le site de l\'institution. Les membres du personnel actuels sont sur la droite, et les membres du personnels potentiels sont sur la gauche.';
$string['potentialstaff'] = 'Membres potentiels du personnel';
$string['currentstaff'] = 'Membres actuels du personnel';
$string['staffusersupdated'] = 'Liste des membres du personnel mise à jour';

// Admin Notifications

// Suspended Users
$string['deleteusers'] = 'Supprimer des utilisateurs';
$string['confirmdeleteusers'] = 'Voulez-vous vraiment supprimer les utilisateurs sélectionnés ?';
$string['exportingnotsupportedyet'] = 'L\'exportation des profils n\'est pas encore disponible';
$string['exportuserprofiles'] = 'Exporter les profils des utilisateurs';
$string['nousersselected'] = 'Pas d\'utilisateur sélectionné';
$string['suspenduser'] = 'Suspendre un utilisateur';
$string['suspendedusers'] = 'Utilisateurs suspendus';
$string['suspensionreason'] = 'Raison de la suspension';
$string['errorwhilesuspending'] = 'Une erreur est survenue lors de la suspension';
$string['suspendedusersdescription'] = 'Suspendre ou réactiver des utilisateurs de ce site';
$string['unsuspendusers'] = 'Réactiver des utilisateurs';
$string['usersdeletedsuccessfully'] = 'Utilisateurs supprimés';
$string['usersunsuspendedsuccessfully'] = 'Utilisateurs réactivés';
$string['suspendingadmin'] = 'Administrateur ayant suspendu';
$string['usersuspended'] = 'Utilisateur suspendu';
$string['userunsuspended'] = 'Utilisateur réactivé';

// User account settings
$string['accountsettings'] = 'Réglages du compte';
$string['siteaccountsettings'] = 'Réglage du compte';
$string['resetpassword'] = 'Réinitialiser le mot de passe';
$string['resetpassworddescription'] = 'Le texte saisi dans ce champ remplacera le mot de passe actuel de l\'utilisateur.';
$string['forcepasswordchange'] = 'Exiger le changement de mot de passe lors de la prochaine connexion';
$string['forcepasswordchangedescription'] = 'L\'utilisateur devra modifier son mot de passe lors de sa prochaine connexion.';
$string['sitestaff'] = 'Personnel';
$string['sitestaffdescription'] = 'Si cette option est activée, l\'utilisateur pourra créer des groupes, recevoir et approuver des pages publiques sur soumissions et accéder aux profils détaillés des utilisateurs.';
$string['siteadmins'] = 'Administrateurs';
$string['siteadmin'] = 'Administrateur';
$string['siteadmindescription'] = 'Les administrateurs du site peuvent accéder à toutes les fonctionnalités et toutes les sections du site';
$string['accountexpiry'] = 'Échéance du compte';
$string['accountexpirydescription'] = 'Date à laquelle la connexion de l\'utilisateur sera automatiquement désactivée.';
$string['suspended'] = 'Suspendu';
$string['suspendedreason'] = 'Raison de la suspension';
$string['suspendedreasondescription'] = 'Texte affiché à l\'utilisateur lors de sa prochaine connexion.';
$string['unsuspenduser'] = 'Réactiver un utilisateur';
$string['thisuserissuspended'] = 'Cet utilisateur a été suspendu';
$string['suspendedby'] = 'Cet utilisateur a été suspendu par %s';
$string['filequota'] = 'Quota (Mo)';
$string['filequotadescription'] = 'Capacité totale de stockage dans la zone de fichiers de l\'utilisateur.';
$string['confirmremoveuserfrominstitution'] = 'Voulez-vous vraiment retirer cet utilisateur de cette institution?';

// Add User
$string['adduser'] = 'Créer un utilisateur';
$string['adduserdescription'] = 'Créer un nouvel utilisateur';
$string['adduserpagedescription'] = '<p>Vous pouvez ajouter un nouvel utilisateur. Une fois le compte ajouté, un courriel comprenant le nom d\'utilisateur et le mot de passe sera automatiquement envoyé à l\'utilisateur pour l\'informer de la création de son nouveau compte. Lors de la première connexion l\'utilisateur devra changer son mot de passe.</p>';
$string['createuser'] = 'Créer un utilisateur';

// Login as
$string['loginasuser'] = 'Connecté sous le nom %s';
$string['becomeadminagain'] = 'Revenir au compte %s';
// Login-as exceptions
$string['loginasdenied'] = 'Tentative de se connecter sous le nom d\'un autre utilisateur sans permission';
$string['loginastwice'] = 'Tentative de se connecter sous le nom d\'un autre utilisateur étant déjà connecté sous un autre nom';
$string['loginasrestorenodata'] = 'Pas de données à restaurer';

// Institutions
$string['admininstitutions'] = 'Administrer les institutions';
$string['adminauthorities'] = 'Administrer les autorités';
$string['addinstitution'] = 'Ajouter une institution';
$string['authplugin'] = 'Méthode d\'authentification';
$string['deleteinstitution'] = 'Supprimer une institution';
$string['deleteinstitutionconfirm'] = 'Voulez-vous vraiment supprimer cette institution?';
$string['institutionaddedsuccessfully'] = 'Institution ajoutée. Veuillez configurer une méthode d\'authentification pour cette institution.';
$string['institutiondeletedsuccessfully'] = 'Institution supprimée';
$string['institutionname'] = 'Nom de l\'institution';
$string['institutionnamealreadytaken'] = 'Ce nom d\'institution est déjà utilisé';
$string['institutiondisplayname'] = 'Nom affiché de l\'institution';
$string['institutionupdatedsuccessfully'] = 'Institution modifiée';
$string['registrationallowed'] = 'Enregistrement autorisé?';
$string['registrationalloweddescription'] = 'Les utilisateurs peuvent-ils s\'enregistrer dans le système avec cette institution?';
$string['defaultmembershipperiod'] = 'Durée de membre par défaut';
$string['defaultmembershipperioddescription'] = 'Temps durant lequel les nouveaux membres font partie de votre institution';
$string['authenticatedby'] = 'Méthode d\'authentification';
$string['authenticatedbydescription'] = '';
$string['remoteusername'] = 'Nom d\'utilisateur pour authentification externe';
$string['remoteusernamedescription'] = 'Si cet utilisateur est authentifié par une méthode externe et que vous voulez l\'associer à une identité différente dans la base de données distante, saisissez ici leur nom d\'utilisateur distant.';
$string['institutionsettings'] = 'Réglages de l\'institution';
$string['changeinstitution'] = 'Modifier l\'institution';
$string['institutionstaff'] = 'Institutions - Personnel';
$string['institutionadmins'] = 'institutions - Administrateurs';
$string['institutionadmin'] = 'Administrateur de l\'institution';
$string['institutionadministrator'] = 'Administrateur de l\'institution';
$string['institutionadmindescription'] = 'Si cette option est activée, l\'utilisateur pourra gérer tous les utilisateurs de cette institution.';
$string['settingsfor'] = 'Réglages pour :';
$string['institutionadministration'] = 'Administration des institutions';
$string['institutionmembers'] = 'Institutions - Utilisateurs';
$string['notadminforinstitution'] = 'Vous n\'êtes pas un administrateur de cette institution';
$string['institutionmemberspagedescription'] = 'Vous pouvez voir sur cette page les utilisateurs ayant demandé de faire partie de votre institution et les ajouter comme membres. Vous pouvez aussi retirer des utilisateurs de votre institution ou inviter des utilisateurs à s\'y joindre.';

$string['institutionusersinstructionsrequesters'] = 'La liste des utilisateurs sur la gauche montre tous les utilisateurs ayant demandé de faire partie de votre institution. Vous pouvez utiliser le champ de recherche pour réduire le nombre des utilisateurs affichés. Pour ajouter des utilisateurs à l\'institution ou refuser leur demande, déplacez d\'abord les utilisateurs concernés du côté droit en les sélectionnant et en cliquant sur la flèche à droite. Le bouton « Ajoutez des membres » ajoute à l\'institution tous les utilisateurs de la liste de droite. Le bouton « Rejeter la demande » retire des demandes les utilisateurs de la liste de droite.';
$string['institutionusersinstructionsnonmembers'] = 'La liste des utilisateurs sur la gauche montre tous les utilisateurs ne faisant pas partie de votre institution. Vous pouvez utiliser le champ de recherche pour réduire le nombre des utilisateurs affichés. Pour inviter des utilisateurs à se joindre à votre institution, déplacez d\'abord les utilisateurs concernés du côté droit en les sélectionnant et en cliquant sur la flèche à droite. Le bouton « Inviter des utilisateurs » envoie une invitation à tous les utilisateurs de la liste de droite. Ces utilisateurs ne seront pas membres de votre institution avant qu\'ils n\'acceptent l\'invitation.';
$string['institutionusersinstructionsmembers'] = 'La liste des utilisateurs sur la gauche montre tous les membres de l\'institution. Vous pouvez utiliser le champ de recherche pour réduire le nombre des utilisateurs affichés. Pour retirer des  des utilisateurs de l\'institution, déplacez d\'abord les utilisateurs concernés du côté droit en les sélectionnant et en cliaquant sur la flèche à droite. Le bouton « Retirer des utilisateurs » enlève de votre institution tous les utilisateurs de la liste de droite. Les utilisateurs de la liste de gauche resteront dans l\'institution.';

$string['editmembers'] = 'Modifier les utilisateurs';
$string['editstaff'] = 'Modifier les membres du personnel';
$string['editadmins'] = 'Modifier les administrateurs';
$string['membershipexpiry'] = 'Échéance de l\'appartenance';
$string['membershipexpirydescription'] = 'Date à laquelle l\'utilisateur sera automatiquement retiré de l\'institution.';
$string['studentid'] = 'Code étudiant';
$string['institutionstudentiddescription'] = 'Un identifiant optionnel spécifique à l\'institution. Ce champ ne peut pas être modifié par l\'utilisateur.';

$string['userstodisplay'] = 'Utilisateurs à afficher :';
$string['institutionusersrequesters'] = 'Utilisateur ayant demandé de faire partie de l\'institution';
$string['institutionusersnonmembers'] = 'Utilisateur n\'ayant pas demandé de faire partie de l\'institution';
$string['institutionusersmembers'] = 'Membres actuels de l\'institution';

$string['addnewmembers'] = 'Ajouter de nouveaux membres';
$string['addnewmembersdescription'] = '';
$string['usersrequested'] = 'Utilisateurs ayant demandé de devenir membre';
$string['userstobeadded'] = 'Utilisateurs à ajouter comme membres';
$string['userstoaddorreject'] = 'Utilisateurs à ajouter ou à rejeter';
$string['addmembers'] = 'Ajouter des membres';
$string['inviteuserstojoin'] = 'Inviter des utilisateurs à se joindre à l\'institution';
$string['Non-members'] = 'Non-membres';
$string['userstobeinvited'] = 'Utilisateurs à inviter';
$string['inviteusers'] = 'Inviter des utilisateurs';
$string['removeusersfrominstitution'] = 'Retirer des utilisateurs de l\'institution';
$string['currentmembers'] = 'Membres actuels';
$string['userstoberemoved'] = 'Utilisateurs à retirer';
$string['removeusers'] = 'Retirer des utilisateurs';
$string['declinerequests'] = 'Rejeter la demande';
$string['nousersupdated'] = 'Aucun utilisateur modifié';

$string['institutionusersupdated_addUserAsMember'] = 'Utilisateurs ajoutés';
$string['institutionusersupdated_declineRequestFromUser'] = 'Demandes rejetées';
$string['institutionusersupdated_removeMembers'] = 'Utilisateurs retirés';
$string['institutionusersupdated_inviteUser'] = 'Invitations envoyées';

$string['maxuseraccounts'] = 'Nombre maximum de comptes utilisateurs autorisés';
$string['maxuseraccountsdescription'] = 'Le nombre maximum de comptes utilisateurs pouvant être associés à votre institution. Pour ne fixer aucune limite, laissez ce champ vide.';
$string['institutionuserserrortoomanyusers'] = 'Les utilisateurs n\'ont pas été ajoutés. Le nombre de membres ne peut pas dépasser le maximum autorisé pour l\'institution. Vous pouvez ajouter moins d\'utilisateurs, retirer d\'autres utilisateurs de votre institution ou demander à l\'administrateur du site d\'augmenter cette limite.';
$string['institutionuserserrortoomanyinvites'] = 'Les invitations n\'ont pas été envoyées. Le nombre de membres actuels ajouté de celui des invitations ne peut pas dépasser le maximum autorisé pour l\'institution.  Vous pouvez inviter moins d\'utilisateurs, retirer d\'autres utilisateurs de votre institution ou demander à l\'administrateur du site d\'augmenter cette limite.';

$string['Members'] = 'Membres';
$string['Maximum'] = 'Maximum';
$string['Staff'] = 'Personnel';
$string['Admins'] = 'Administrateurs';

$string['noinstitutions'] = 'Pas d\'institution';
$string['noinstitutionsdescription'] = 'Si vous voulez associer des utilisateurs avec une institution, vous devez d\'abord créer l\'institution.';

// Admin User Search
$string['Query'] = 'Requête';
$string['Institution'] = 'Institution';
$string['confirm'] = 'Confirmer';
$string['invitedby'] = 'Invité par';
$string['requestto'] = 'Demande à';
$string['useradded'] = 'Utilisateur ajouté';
$string['invitationsent'] = 'Invitation envoyée';

// general stuff
$string['notificationssaved'] = 'Préférences des notifications enregistrées';
$string['onlyshowingfirst'] = 'N\'afficher que les';
$string['resultsof'] = 'premiers résultats sur';

$string['installed'] = 'Installé';
$string['errors'] = 'Erreurs';
$string['install'] = 'Installer';
$string['reinstall'] = 'Réinstaller';
?>
