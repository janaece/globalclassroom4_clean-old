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

// General form strings
$string['add']     = 'Ajouter';
$string['cancel']  = 'Annuler';
$string['delete']  = 'Supprimer';
$string['edit']    = 'Modifier';
$string['editing'] = 'Modification';
$string['save']    = 'Enregistrer';
$string['submit']  = 'Envoyer';
$string['update']  = 'Mettre à jour';
$string['change']  = 'Changer';
$string['send']    = 'Envoyer';
$string['go']      = 'Aller';
$string['default'] = 'Défaut';
$string['upload']  = 'Déposer';
$string['complete']  = 'Compléter';
$string['Failed']  = 'Échec';
$string['loading'] = 'Chargement...';
$string['showtags'] = 'Afficher mes mots clés';
$string['errorprocessingform'] = 'Une erreur est survenue lors du traitement de ce formulaire. Veuillez vérifier les champs indiqués et réessayer.';
$string['description'] = 'Description';
$string['remove']  = 'Retirer';

$string['no']     = 'Non';
$string['yes']    = 'Oui';
$string['none']   = 'Aucun';
$string['at'] = 'à';
$string['From'] = 'De';
$string['To'] = 'À';
$string['All'] = 'Tous';

$string['next']      = 'Suivant';
$string['nextpage']  = 'Page suivante';
$string['previous']  = 'Précédent';
$string['prevpage']  = 'Page précédente';
$string['first']     = 'Premier';
$string['firstpage'] = 'Première page';
$string['last']      = 'Dernier';
$string['lastpage']  = 'Dernière page';

$string['accept'] = 'Accepter';
$string['reject'] = 'Rejeter';
$string['sendrequest'] = 'Envoyer la demande';
$string['reason'] = 'Raison';
$string['select'] = 'Sélectionner';

$string['tags'] = 'Mots clés';
$string['tagsdesc'] = 'Saisir une liste de mots clés séparés par des virgules.';
$string['tagsdescprofile'] = 'Saisissez une liste de mots clés séparés par des virgules. Les éléments signalés par « Profil » sont affiché dans votre barre latérale.';
$string['youhavenottaggedanythingyet'] = 'Vous n\'avez encore pas attribué de mot clé.';

$string['selfsearch'] = 'Recherche';
$string['ssopeers'] = 'Paires SSO';

// Quota strings
$string['quota'] = 'Quota';
$string['quotausage'] = 'Vous avez utilisé <span id="quota_used">%s</span> de votre quota de <span id="quota_total">%s</span>.';

$string['updatefailed'] = 'Échec de la mise à jour';

$string['strftimenotspecified']  = 'Non indiqué';

// profile sideblock strings
$string['invitedgroup'] = 'groupe invité à';
$string['invitedgroups'] = 'groupes invités à';
$string['logout'] = 'Déconnexion';
$string['pendingfriend'] = 'Contact en attente';
$string['pendingfriends'] = 'Contacts en attente';
$string['profile'] = 'Mon profil';
$string['views'] = 'Pages publiques';

// Links and resources sideblock
$string['linksandresources'] = 'Liens et ressources';

// auth
$string['accessforbiddentoadminsection'] = 'L\'accès à la section d\'administration vous est interdit.';
$string['accountdeleted'] = 'Désolé, votre compte a été supprimé.';
$string['accountexpired'] = 'Désolé, votre compte est échu.';
$string['accountcreated'] = get_config('sitename') . ' : nouveau compte';
$string['accountcreatedtext'] = 'Bonjour %s,

Un nouveau compte a été créé pour vous sur %s. Voici les données d\'accès :

Nom d\'utilisateur : %s
Mot de passe :      %s

Rendez-vous sur ' . get_config('wwwroot') . ' pour commencer!

Cordiales salutations, l\'administrateur du site %s';
$string['accountcreatedchangepasswordtext'] = 'Bonjour %s,

Un nouveau compte a été créé pour vous sur %s. Voici les données d\'accès :

Nom d\'utilisateur : %s
Mot de passe :      %s

Lors de votre première connexion, vous devrez changer votre mot de passe.

Rendez-vous sur ' . get_config('wwwroot') . ' pour commencer!

Cordiales salutations, l\'administrateur du site %s';
$string['accountcreatedhtml'] = '<p>Bonjour %s,</p>

<p>Un nouveau compte a été créé pour vous sur <a href="' . get_config('wwwroot') . '">%s</a>. Voici les données d\'accès :</p>

<ul>
    <li><strong>Nom d\'utilisateur :</strong> %s</li>
    <li><strong>Mot de passe :</strong> %s</li>
</ul>

<p>Rendez-vous sur <a href="' . get_config('wwwroot') . '">' . get_config('wwwroot') . '</a> pour commencer!</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>
';
$string['accountcreatedchangepasswordhtml'] = '<p>Bonjour %s,</p>

<p>Un nouveau compte a été créé pour vous sur <a href="' . get_config('wwwroot') . '">%s</a>. Voici les données d\'accès :</p>

<ul>
    <li><strong>Nom d\'utilisateur :</strong> %s</li>
    <li><strong>Mot de passe :</strong> %s</li>
</ul>

<p>Lors de votre première connexion, vous devrez changer votre mot de passe.</p>

<p>Rendez-vous sur <a href="' . get_config('wwwroot') . '">' . get_config('wwwroot') . '</a> pour commencer!</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>
';
$string['accountexpirywarning'] = 'Avertissement d\'échéance de compte';
$string['accountexpirywarningtext'] = 'Bonjour %s,

Votre compte sur %s arrivera à échéance dans %s.

Nous vous recommandons d\'enregistrer le contenu de votre portfolio à l\'aide du l\'outil d\'exportation. Les instructions d\'utilisation de cette fonctionnalité se trouvent dans le guide d\'utilisation.

Si vous désirez prolonger votre accès ou si vous avez des questions à ce sujet, veuillez nous contacter :

%s

Cordiales salutations, l\'administrateur du site %s';
$string['accountexpirywarninghtml'] = '<p>Bonjour %s,</p>
    
<p>Votre compte sur %s arrivera à échéance dans %s.</p>

<p>Nous vous recommandons d\'enregistrer le contenu de votre portfolio à l\'aide du l\'outil d\'exportation. Les instructions d\'utilisation de cette fonctionnalité se trouvent dans le guide d\'utilisation.</p>

<p>Si vous désirez prolonger votre accès ou si vous avez des questions à ce sujet, veuillez <a href="%s">nous contacter</a>.</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>';
$string['institutionexpirywarning'] = 'Avertissement de fin d\'appartenance à une institution';
$string['institutionexpirywarningtext'] = 'Bonjour %s,

Votre appartenance à %s sur %s arrivera à échéance dans %s.

Si vous désirez étendre votre appartenance ou si vous avez des questions à ce sujet, veuillez nous contacter :

%s

Cordiales salutations, l\'administrateur du site %s';
$string['institutionexpirywarninghtml'] = '<p>Bonjour %s,</p>
    
<p>Votre appartenance à %s sur %s arrivera à échéance dans %s.</p>

<p>Si vous désirez étendre votre appartenance ou si vous avez des questions à ce sujet, veuillez <a href="%s">nous contacter</a>.</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>';
$string['accountinactive'] = 'Désolé, votre compte est actuellement désactivé';
$string['accountinactivewarning'] = 'Avertissement de désactivation de compte';
$string['accountinactivewarningtext'] = 'Bonjour %s,

Votre compte sur %s sera désactivé dans %s.

Une fois le compte désactivé, il ne sera plus possible de s\'y connecter jusqu\'à ce qu\'un administrateur ne le réactive.

Il vous est possible d\'éviter la désactivation en vous connectant maintenant.

Cordiales salutations, l\'administrateur du site %s';
$string['accountinactivewarninghtml'] = '<p>Bonjour %s,</p>

<p>Votre compte sur %s sera désactivé dans %s.</p>

<p>Une fois le compte désactivé, il ne sera plus possible de s\'y connecter jusqu\'à ce qu\'un administrateur ne le réactive.</p>

<p>Il vous est possible d\'éviter la désactivation en vous connectant maintenant.</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>';
$string['accountsuspended'] = 'Votre compte a été suspendu le %s. La raison de la suspension est&nbsp;:<blockquote>%s</blockquote>';
$string['youraccounthasbeensuspended'] = 'Votre compte a été suspendu.';
$string['youraccounthasbeenunsuspended'] = 'Votre compte est de nouveau actif.';
$string['changepassword'] = 'Changer de mot de passe';
$string['changepasswordinfo'] = 'Vous devez changer votre mot de passe avant de continuer.';
$string['confirmpassword'] = 'Confirmer le mot de passe';
$string['javascriptnotenabled'] = 'Javascript n\'est pas activé pour ce site dans votre navigateur. Mahara a besoin de Javascript pour que vous puissiez vous connecter';
$string['cookiesnotenabled'] = 'Les fichiers-témoins (cookies) sont désactivés ou sont bloqués pour ce site dans votre navigateur. Mahara a besoin des fichiers-témoins pour que vous puissiez vous connecter';
$string['institution'] = 'Institution';
$string['loggedoutok'] = 'Session terminée';
$string['login'] = 'Connexion';
$string['loginfailed'] = 'Vous n\'avez pas fourni les bonnes informations pour vous connecter. Veuillez vérifier que votre nom d\'utilisateur et votre mot de passe sont corrects.';
$string['loginto'] = 'Se connecter à %s';
$string['newpassword'] = 'Nouveau mot de passe';
$string['nosessionreload'] = 'Recharger la page pour vous connecter';
$string['oldpassword'] = 'Mot de passe actuel';
$string['password'] = 'Mot de passe ';
$string['passworddescription'] = ' ';
$string['passwordhelp'] = 'Le mot de passe pour accéder au système';
$string['passwordnotchanged'] = 'Vous n\'avez pas changé de mot de passe. Veuillez choisir un nouveau mot de passe';
$string['passwordsaved'] = 'Votre nouveau mot de passe a été enregistré';
$string['passwordsdonotmatch'] = 'Les mots de passe ne correspondent pas';
$string['passwordtooeasy'] = 'Votre mot de passe est trop simple! Veuillez choisir un mot de passe plus compliqué';
$string['register'] = 'Créer votre compte';
$string['sessiontimedout'] = 'Votre session est échue. Veuillez saisir vos données de connexion pour continuer.';
$string['sessiontimedoutpublic'] = 'Votre session est échue. Veuillez vous <a href="?login">connecter</a> pour continuer.';
$string['sessiontimedoutreload'] = 'Votre session est échue. Rechargez la page pour vous connecter à nouveau.';
$string['username'] = 'Nom d\'utilisateur ';
$string['preferredname'] = 'Nom choisi';
$string['usernamedescription'] = ' ';
$string['usernamehelp'] = 'Le nom d\'utilisateur qui vous a été attribué pour accéder à ce système.';
$string['yournewpassword'] = 'Votre nouveau mot de passe';
$string['yournewpasswordagain'] = 'Votre nouveau mot de passe (confirmation)';
$string['invalidsesskey'] = 'Clef de session non valide';
$string['cannotremovedefaultemail'] = 'Vous ne pouvez pas retirer votre adresse de courriel principale.';
$string['emailtoolong'] = 'Les adresses de courriel ne peuvent pas être plus longues que 255 caractères.';
$string['mustspecifyoldpassword'] = 'Vous devez indiquer votre mot de passe actuel.';
$string['captchatitle'] = 'Image CAPTCHA';
$string['captchaimage'] = 'Image CAPTCHA';
$string['captchadescription'] = 'Tapez les caractères que vous lisez dans l\'image sur la droite. La casse des caractères n\'est pas importante.';
$string['captchaincorrect'] = 'Tapez les caractères que vous lisez dans l\'image.';

// Misc. register stuff that could be used elsewhere
$string['emailaddress'] = 'Adresse de courriel';
$string['emailaddressdescription'] = ' ';
$string['firstname'] = 'Prénom';
$string['firstnamedescription'] = ' ';
$string['lastname'] = 'Nom';
$string['lastnamedescription'] = ' ';
$string['studentid'] = 'Code étudiant';
$string['displayname'] = 'Nom affiché';
$string['fullname'] = 'Nom complet';
$string['registerstep1description'] = 'Bienvenue! Pour utiliser ce site, vous devez avant tout vous enregistrer. Vous devez également accepter les <a href="terms.php">conditions d\'utilisation</a> du site. Les données que nous enregistrons seront stockées dans le respect de notre <a href="privacy.php">déclaration de protection des données</a>.';
$string['registerstep3fieldsoptional'] = '<h3>Choisissez une image de profil optionnelle</h3><p>Vous vous êtes enregistré sur le site. ' . get_config('sitename') . '! Vous pouvez maintenant choisir pour votre profil une image qui sera affichée comme votre avatar.</p>';
$string['registerstep3fieldsmandatory'] = '<h3>Remplir les champs obligatoires</h3><p>Les champs suivants sont requis. Vous devez les remplir pour poursuivre votre enregistrement.</p>';
$string['registeringdisallowed'] = 'Désolé, il n\'est pas possible de vous enregistrer sur ce site.';
$string['membershipexpiry'] = 'Votre appartenance arrive à échéance.';
$string['institutionfull'] = 'L\'institution que vous avez sélectionnée n\'accepte plus d\'inscriptions.';
$string['registrationnotallowed'] = 'L\'institution que vous avez sélectionnée n\'accepte pas d\'auto-inscription.';
$string['registrationcomplete'] = 'Merci pour votre inscription à %s.';
$string['language'] = 'Langue ';

// Forgot password
$string['cantchangepassword'] = 'Désolé, vous ne pouvez pas changer de mot de passe dans cette interface. Veuillez pour cela utiliser l\'interface de votre institution';
$string['forgotpassword'] = 'Mot de passe oublié?';
$string['forgotpasswordtext'] = 'Si vous avez oublié votre mot de passe, tapez ci-dessous l\'adresse de courriel que vous avez indiquée dans votre profil. Nous vous enverrons un message contenant un lien vous permettant de choisir un nouveau mot de passe';
$string['passwordreminder'] = 'Rappel du mot de passe';
$string['pwchangerequestsent'] = 'Vous allez prochainement recevoir par courriel un message contenant un lien vous permettant de changer le mot de passe de votre compte';
$string['forgotpassemailsubject'] = 'Demande de changement de mot de passe pour %s';
$string['forgotpassemailmessagetext'] = 'Bonjour %s,

Une demande de changement de votre mot de passe pour votre compte %s nous est parvenue.

Veuillez suivre le lien ci-dessous pour continuer le processus de modification.

' . get_config('wwwroot') . 'forgotpass.php?key=%s

Si vous n\'avez pas effectué cette demande, veuillez ignorer ce message.

Pour toute question à ce sujet, veuillez nous contacter.

' . get_config('wwwroot') . 'contact.php

Cordiales salutations, l\'administrateur du site %s

' . get_config('wwwroot') . 'forgotpass.php?key=%s';
$string['forgotpassemailmessagehtml'] = '<p>Bonjour %s,</p>

<p>Une demande de changement de votre mot de passe pour votre compte %s nous est parvenue.</p>

<p>Veuillez suivre le lien ci-dessous pour continuer le processus de modification.</p>

<p><a href="' . get_config('wwwroot') . 'forgotpass.php?key=%s">' . get_config('wwwroot') . 'forgotpass.php?key=%s</a></p>

<p>Si vous n\'avez pas effectué cette demande, veuillez ignorer ce message.</p>

<p>Pour toute question à ce sujet, veuillez nous <a href="' . get_config('wwwroot') . 'contact.php">contacter</a>.</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>

<p><a href="' . get_config('wwwroot') . 'forgotpass.php?key=%s">' . get_config('wwwroot') . 'forgotpass.php?key=%s</a></p>';
$string['forgotpassemailsendunsuccessful'] = 'Désolé, le message n\'a pas pu être envoyé par courriel. Nous nous en excusons. Veuillez réessayer dans quelques instants.';
$string['forgotpassnosuchemailaddress'] = 'L\'adresse de courriel que vous avez donnée ne correspond à aucun utilisateur de ce site.';
$string['forgotpasswordenternew'] = 'Veuillez entrer votre nouveau mot de passe.';
$string['nosuchpasswordrequest'] = 'Il n\'y a pas de telle demande de changement de mot de passe.';
$string['passwordchangedok'] = 'Votre mot de passe a été changé.';

// Reset password when moving from external to internal auth.
$string['noinstitutionsetpassemailsubject'] = '%s : appartenance à %s';
$string['noinstitutionsetpassemailmessagetext'] = 'Bonjour %s,

Vous n\'êtes plus membre de %s.
Vous pouvez continuer à utiliser %s avec votre nom d\'utilisateur actuel %s, mais vous devez changer votre mot de passe.

Veuillez suivre le lien ci-dessous pour modifier le mot de passe.

' . get_config('wwwroot') . 'forgotpass.php?key=%s

Si vous avez des questions à ce sujet, veuillez nous contacter.

' . get_config('wwwroot') . 'contact.php

Cordiales salutations, l\'administrateur du site %s

' . get_config('wwwroot') . 'forgotpass.php?key=%s';
$string['noinstitutionsetpassemailmessagehtml'] = '<p>Bonjour %s,</p>

<p>Vous n\'êtes plus membre de %s.</p>
<p>Vous pouvez continuer à utiliser %s avec votre nom d\'utilisateur actuel %s, mais vous devez changer votre mot de passe.</p>

<p>Veuillez suivre le lien ci-dessous pour modifier le mot de passe.</p>

<p><a href="' . get_config('wwwroot') . 'forgotpass.php?key=%s">' . get_config('wwwroot') . 'forgotpass.php?key=%s</a></p>

<p>Si vous avez des questions à ce sujet, veuillez <a href="' . get_config('wwwroot') . 'contact.php"> nous contacter</a>.</p>

<p>Cordiales salutations, l\'administrateur du site %s</p>

<p><a href="' . get_config('wwwroot') . 'forgotpass.php?key=%s">' . get_config('wwwroot') . 'forgotpass.php?key=%s</a></p>';


// Expiry times
$string['noenddate'] = 'Pas de date d\'échéance';
$string['day']       = 'jour';
$string['days']      = 'jours';
$string['weeks']     = 'semaines';
$string['months']    = 'mois';
$string['years']     = 'années';
// Boolean site option

// Site content pages
$string['sitecontentnotfound'] = 'Contenu de %s non disponible';

// Contact us form
$string['name']                     = 'Nom';
$string['email']                    = 'Courriel';
$string['subject']                  = 'Objet';
$string['message']                  = 'Message';
$string['messagesent']              = 'Votre message a été envoyé.';
$string['nosendernamefound']        = 'Aucun expéditeur indiqué';
$string['emailnotsent']             = 'Échec de l\'envoi de courriel. Le message d\'erreur est : "%s"';

// mahara.js
$string['namedfieldempty'] = 'Le champ requis « %s » est vide.';
$string['processing']     = 'Traitement';
$string['requiredfieldempty'] = 'Un champ requis est vide';
$string['unknownerror']       = 'Une erreur inconnue est survenue (0x20f91a0)';

// menu
$string['home']        = 'Accueil';
$string['myportfolio'] = 'Mon portfolio';
$string['myviews']       = ' Mes pages publiques';
$string['settings']    = 'Préférences';
$string['myfriends']          = 'Mes contacts';
$string['findfriends']        = 'Chercher des contacts';
$string['groups']             = 'Mon réseau';
$string['mygroups']           = 'Mes groupes';
$string['findgroups']         = 'Chercher des groupes';
$string['returntosite']       = 'Retour au site';
$string['siteadministration'] = 'Gestion du site';
$string['useradministration'] = 'Gestion des utilisateurs';

$string['unreadmessages'] = 'messages non lus';
$string['unreadmessage'] = 'message non lu';

// footer
$string['termsandconditions'] = 'Conditions';
$string['privacystatement']   = 'Protection des données';
$string['about']              = 'À propos';
$string['contactus']          = 'Contact';

// my account
$string['account'] =  'Mon compte';
$string['accountprefs'] = 'Préférences';
$string['preferences'] = 'Préférences';
$string['activityprefs'] = 'Préférences des notifications';
$string['changepassword'] = 'Changer le mot de passe';
$string['notifications'] = 'Liste des notifications';
$string['institutionmembership'] = 'Institutions';
$string['institutionmembershipdescription'] = 'Si vous êtes membre d\'institutions, elles seront indiquées ici. Vous pouvez demander de devenir membre d\'une institution. D\'autre part, si une institution vous a invité à la rejoindre, vous pouvez accepter ou décliner l\'invitation.';
$string['youareamemberof'] = 'Vous êtes membre de %s';
$string['leaveinstitution'] = 'Quitter l\'institution';
$string['reallyleaveinstitution'] = 'Voulez-vous vraiment quitter cette institution ?';
$string['youhaverequestedmembershipof'] = 'Vous avez demander de faire partie de %s';
$string['cancelrequest'] = 'Annuler la demande';
$string['youhavebeeninvitedtojoin'] = 'Vous avez été invité à rejoindre %s';
$string['confirminvitation'] = 'Confirmer l\'invitation';
$string['joininstitution'] = 'Rejoindre l\'institution';
$string['decline'] = 'Décliner';
$string['requestmembershipofaninstitution'] = 'Demander de faire partie d\'une institution';
$string['optionalinstitutionid'] = 'Identifiant institution (optionel)';
$string['institutionmemberconfirmsubject'] = 'Confirmation d\'appartenance à une institution';
$string['institutionmemberconfirmmessage'] = 'Vous êtes maintenant membre de %s.';
$string['institutionmemberrejectsubject'] = 'Demande de faire partie d\'une institution rejetée';
$string['institutionmemberrejectmessage'] = 'Votre demande de faire partie de %s a été rejetée.';

$string['emailname'] = 'Mahara System'; // robot! 

$string['config'] = 'Configuration';

$string['sendmessage'] = 'Envoyer votre message';

$string['notinstallable'] = 'Ne peut être installer!';
$string['installedplugins'] = 'Plugins installées';
$string['notinstalledplugins'] = 'Plugins non installées';
$string['plugintype'] = 'Type de plugin';

$string['settingssaved'] = 'Préférences enregistrées';
$string['settingssavefailed'] = 'Échec de l\'enregistrement des préférences';

$string['width'] = 'Largeur';
$string['height'] = 'Hauteur';
$string['widthshort'] = 'l';
$string['heightshort'] = 'h';
$string['filter'] = 'Chercher';
$string['expand'] = 'Développer';
$string['collapse'] = 'Refermer';
$string['more...'] = 'Plus...';
$string['nohelpfound'] = 'Il n\'y a pas d\'aide pour cet élément.';
$string['nohelpfoundpage'] = 'L\'aide pour cette page n\'a pas été trouvée.';
$string['couldnotgethelp'] = 'Une erreur est survenue lors de la tentative de chargement de la page d\'aide.';
$string['profileimage'] = 'Image du profil';
$string['primaryemailinvalid'] = 'Votre adresse de courriel principale n\'est pas valide.';
$string['addemail'] = 'Ajouter une adresse de courriel';

// Search
$string['search'] = 'Recherche';
$string['searchusers'] = 'Chercher des utilisateurs';
$string['Query'] = 'Requête';
$string['advancedsearch'] = 'Recherche avancée';
$string['query'] = 'Requête';
$string['querydescription'] = 'Termes à rechercher';
$string['result'] = 'résultat';
$string['results'] = 'résultat';
$string['Results'] = 'Résultats';
$string['noresultsfound'] = 'Aucun résultat trouvé';

// artefact
$string['artefact'] = 'production';
$string['Artefact'] = 'Production';
$string['Artefacts'] = 'Productions';
$string['artefactnotfound'] = 'La production %s n\'a pas été trouvée.';
$string['artefactnotrendered'] = 'Production non traitée';

$string['belongingto'] = 'Appartenant à';
$string['allusers'] = 'Tous les utilisateurs';

// Upload manager
$string['quarantinedirname'] = 'quarantaine';
$string['clammovedfile'] = 'Le fichier a été placé dans un dossier de quarantaine.';
$string['clamdeletedfile'] = 'Ce fichier a été supprimé.';
$string['clamdeletedfilefailed'] = 'Le fichier n\'a pas pu être supprimé.';
$string['clambroken'] = 'Votre administrateur a activé le contrôle anti-virus pour les fichiers déposés, mais la configuration est erronée. Votre fichier n\'a pas pu être déposé. L\'administrateur a reçu un message pour lui signaler le problème. Veuillez essayer de déposer votre fichier ultérieurement.';
$string['clamemailsubject'] = '%s :: Alerte Clam AV';
$string['clamlost'] = 'Clam AV est configuré pour contrôler les fichiers déposés, mais le chemin d\'accès %s au logiciel Clam AV est incorrect.';
$string['clamfailed'] = 'Clam AV n\'a pas pu se lancer. Le message d\'erreur retourné est %s. Voici le message de Clam :';
$string['clamunknownerror'] = 'Une erreur inconnue est survenue avec le logiciel Clam AV.';
$string['image'] = 'Image';
$string['filenotimage'] = 'Le fichier que vous avez déposé n\'est pas dans un format d\'image valable. Ce doit être un fichier en format PNG, JPEG ou GIF.';
$string['uploadedfiletoobig'] = 'Le fichier est trop volumineux. Veuillez demander plus d\'information à votre administrateur.';
$string['notphpuploadedfile'] = 'Le fichier a été perdu lors de son dépôt. Cela ne devrait pas arriver. Veuillez demander plus d\'information à votre administrateur.';
$string['virusfounduser'] = 'Le fichier %s que vous avez déposé a été vérifié par un anti-virus et diagnostiqué comme infecté! Le fichier n\'a pas été enregistré.';
$string['fileunknowntype'] = 'Le format de fichier que vous avez déposé n\'a pu être déterminé. Votre fichier est peut être corrompu ou il peut s\'agir d\'un problème de configuration. Veuillez contacter votre administrateur.';
$string['filetypenotallowed'] = 'Vous n\'avez pas le droit de déposer de fichiers de ce type. Veuillez contacter votre administrateur pour plus d\'information.';
$string['virusrepeatsubject'] = 'Attention! %s dépose des fichiers infectés de façon répétée.';
$string['virusrepeatmessage'] = 'L\'utilisateur %s a déposé plusieurs fichiers diagnostiqués comme infectés par le logiciel anti-virus.';

$string['youraccounthasbeensuspended'] = 'Votre compte a été suspendu.';
$string['youraccounthasbeensuspendedtext'] = 'Votre compte a été suspendu.'; // @todo: more info?
$string['youraccounthasbeenunsuspended'] = 'Votre compte a été réactivé.';
$string['youraccounthasbeenunsuspendedtext'] = 'Votre compte a été réactivé.'; // @todo: more info?

// size of stuff
$string['sizemb'] = 'Mo';
$string['sizekb'] = 'Ko';
$string['sizegb'] = 'Go';
$string['sizeb'] = 'o';
$string['bytes'] = 'octets';

// countries

$string['country.af'] = 'Afghanistan';
$string['country.ax'] = 'Îles Åland';
$string['country.al'] = 'Albanie';
$string['country.dz'] = 'Algérie';
$string['country.as'] = 'Samoa américaines'; # Samoa orientales
$string['country.ad'] = 'Andorre';
$string['country.ao'] = 'Angola';
$string['country.ai'] = 'Anguilla';
$string['country.aq'] = 'Antarctique';
$string['country.ag'] = 'Antigua et Barbuda';
$string['country.ar'] = 'Argentine';
$string['country.am'] = 'Arménie';
$string['country.aw'] = 'Aruba';
$string['country.au'] = 'Australie';
$string['country.at'] = 'Autriche';
$string['country.az'] = 'Azerbaïdjan';
$string['country.bs'] = 'Bahamas';
$string['country.bh'] = 'Bahrein';
$string['country.bd'] = 'Bangladesh';
$string['country.bb'] = 'Barbades';
$string['country.by'] = 'Bélarus'; # Biélorussie
$string['country.be'] = 'Belgique';
$string['country.bz'] = 'Bélize';
$string['country.bj'] = 'Bénin';
$string['country.bm'] = 'Bermudes';
$string['country.bt'] = 'Bhoutan';
$string['country.bo'] = 'Bolivie';
$string['country.ba'] = 'Bosnie-Herzégovine';
$string['country.bw'] = 'Botswana';
$string['country.bv'] = 'Îles Bouvet';
$string['country.br'] = 'Brésil';
$string['country.io'] = 'Territoire Britanique de l\'Océan Indien';
$string['country.bn'] = 'Brunei Darussalam';
$string['country.bg'] = 'Bulgarie';
$string['country.bf'] = 'Burkina Faso';
$string['country.bi'] = 'Burundi';
$string['country.kh'] = 'Cambodge';
$string['country.cm'] = 'Cameroun';
$string['country.ca'] = 'Canada';
$string['country.cv'] = 'Cap Vert';
$string['country.ky'] = 'Îles Cayman';
$string['country.cf'] = 'République centrafricaine';
$string['country.td'] = 'Tchad';
$string['country.cl'] = 'Chili';
$string['country.cn'] = 'Chine';
$string['country.cx'] = 'Île Christmas';
$string['country.cc'] = 'Île des Cocos';
$string['country.co'] = 'Colombie';
$string['country.km'] = 'Comores';
$string['country.cg'] = 'République du Congo Brazzaville';
$string['country.cd'] = 'République démocratique du Congo';
$string['country.ck'] = 'Îles Cook';
$string['country.cr'] = 'Costa Rica';
$string['country.ci'] = 'Côte d\'Ivoire';
$string['country.hr'] = 'Croatie';
$string['country.cu'] = 'Cuba';
$string['country.cy'] = 'Chypre';
$string['country.cz'] = 'République tchèque';
$string['country.dk'] = 'Danemark';
$string['country.dj'] = 'Djibouti';
$string['country.dm'] = 'Dominique';
$string['country.do'] = 'République Dominicaine';
$string['country.ec'] = 'Équateur';
$string['country.eg'] = 'Égypte';
$string['country.sv'] = 'El Salvador';
$string['country.gq'] = 'Guinée Équatoriale';
$string['country.er'] = 'Érithrée';
$string['country.ee'] = 'Estonie';
$string['country.et'] = 'Éthiopie';
$string['country.fk'] = 'Îles Malouines';
$string['country.fo'] = 'Îles Féroe';
$string['country.fj'] = 'Fidji';
$string['country.fi'] = 'Finlande';
$string['country.fr'] = 'France';
$string['country.gf'] = 'Guyane Française';
$string['country.pf'] = 'Polynésie Française';
$string['country.tf'] = 'Terres Australes Françaises';
$string['country.ga'] = 'Gabon';
$string['country.gm'] = 'Gambie';
$string['country.ge'] = 'Géorgie';
$string['country.de'] = 'Allemagne';
$string['country.gh'] = 'Ghana';
$string['country.gi'] = 'Gibraltar';
$string['country.gr'] = 'Grèce';
$string['country.gl'] = 'Groenland';
$string['country.gd'] = 'Grenade';
$string['country.gp'] = 'Guadeloupe';
$string['country.gu'] = 'Guam';
$string['country.gt'] = 'Guatemala';
$string['country.gg'] = 'Guernesey';
$string['country.gn'] = 'Guinée';
$string['country.gw'] = 'Guinée-Bissau';
$string['country.gy'] = 'Guyane';
$string['country.ht'] = 'Haïti';
$string['country.hm'] = 'Îles Heard et Mc Donald';
$string['country.va'] = 'Saint-Siège (État de la Cité du Vatican)';
$string['country.hn'] = 'Honduras';
$string['country.hk'] = 'Hong Kong';
$string['country.hu'] = 'Hongrie';
$string['country.is'] = 'Islande';
$string['country.in'] = 'Inde';
$string['country.id'] = 'Indonésie';
$string['country.ir'] = 'Iran';
$string['country.iq'] = 'Irak';
$string['country.ie'] = 'Irlande';
$string['country.im'] = 'Île de Man';
$string['country.il'] = 'Israël';
$string['country.it'] = 'Italie';
$string['country.jm'] = 'Jamaïque';
$string['country.jp'] = 'Japon';
$string['country.je'] = 'Jersey';
$string['country.jo'] = 'Jordanie';
$string['country.kz'] = 'Kazakhstan';
$string['country.ke'] = 'Kenya';
$string['country.ki'] = 'Kiribati';
$string['country.kp'] = 'Corée du Nord';
$string['country.kr'] = 'Corée du Sud';
$string['country.kw'] = 'Koweït';
$string['country.kg'] = 'Kyrgyzstan';
$string['country.la'] = 'Laos';
$string['country.lv'] = 'Lettonie';
$string['country.lb'] = 'Liban';
$string['country.ls'] = 'Lesotho';
$string['country.lr'] = 'Liberia';
$string['country.ly'] = 'Libye';
$string['country.li'] = 'Liechtenstein';
$string['country.lt'] = 'Lituanie';
$string['country.lu'] = 'Luxembourg';
$string['country.mo'] = 'Macao';
$string['country.mk'] = 'Macédoine';
$string['country.mg'] = 'Madagascar';
$string['country.mw'] = 'Malawi';
$string['country.my'] = 'Malaisie';
$string['country.mv'] = 'Maldives';
$string['country.ml'] = 'Mali';
$string['country.mt'] = 'Malte';
$string['country.mh'] = 'Îles Marshall';
$string['country.mq'] = 'Martinique';
$string['country.mr'] = 'Mauritanie';
$string['country.mu'] = 'Île Maurice';
$string['country.yt'] = 'Mayotte';
$string['country.mx'] = 'Mexique';
$string['country.fm'] = 'Micronésie';
$string['country.md'] = 'Moldavie';
$string['country.mc'] = 'Monaco';
$string['country.mn'] = 'Mongolie';
$string['country.ms'] = 'Montserrat';
$string['country.ma'] = 'Maroc';
$string['country.mz'] = 'Mozambique';
$string['country.mm'] = 'Myanmar (Birmanie)';
$string['country.na'] = 'Namibie';
$string['country.nr'] = 'Nauru';
$string['country.np'] = 'Népal';
$string['country.nl'] = 'Pays-Bas';
$string['country.an'] = 'Antilles Néerlandaises';
$string['country.nc'] = 'Nouvelle Calédonie';
$string['country.nz'] = 'Nouvelle Zélande';
$string['country.ni'] = 'Nicaragua';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.nu'] = 'Niue';
$string['country.nf'] = 'Île Norfolk';
$string['country.mp'] = 'Îles Mariannes du Nord';
$string['country.no'] = 'Norvège';
$string['country.om'] = 'Oman';
$string['country.pk'] = 'Pakistan';
$string['country.pw'] = 'Palau';
$string['country.ps'] = 'Territoire palestinien (occupée)';
$string['country.pa'] = 'Panama';
$string['country.pg'] = 'Papouasie-Nouvelle Guinée';
$string['country.py'] = 'Paraguay';
$string['country.pe'] = 'Pérou';
$string['country.ph'] = 'Philippines';
$string['country.pn'] = 'Pitcairn';
$string['country.pl'] = 'Pologne';
$string['country.pt'] = 'Portugal';
$string['country.pr'] = 'Porto Rico';
$string['country.qa'] = 'Qatar';
$string['country.re'] = 'La Réunion';
$string['country.ro'] = 'Roumanie';
$string['country.ru'] = 'Russie';
$string['country.rw'] = 'Rwanda';
$string['country.sh'] = 'Sainte Hélène';
$string['country.kn'] = 'Saint Kitts et Nevis';
$string['country.lc'] = 'Saint Lucia';
$string['country.pm'] = 'Saint Pierre et Miquelon';
$string['country.vc'] = 'Saint Vincent et les Grenadines';
$string['country.ws'] = 'Samoa';
$string['country.sm'] = 'Saint-Marin';
$string['country.st'] = 'Sao Tomé et Principe';
$string['country.sa'] = 'Arabie Saoudite';
$string['country.sn'] = 'Sénégal';
$string['country.cs'] = 'Serbie et Monténégro';
$string['country.sc'] = 'Seychelles';
$string['country.sl'] = 'Sierra Leone';
$string['country.sg'] = 'Singapour';
$string['country.sk'] = 'Slovaquie ';
$string['country.si'] = 'Slovénie';
$string['country.sb'] = 'Îles Salomon';
$string['country.so'] = 'Somalie';
$string['country.za'] = 'Afrique du Sud';
$string['country.gs'] = 'Georgie du Sud et Îles Sandwich du Sud';
$string['country.es'] = 'Espagne';
$string['country.lk'] = 'Sri Lanka';
$string['country.sd'] = 'Soudan';
$string['country.sr'] = 'Surinam';
$string['country.sj'] = 'Svalbard et Île Jan Mayen';
$string['country.sz'] = 'Swaziland';
$string['country.se'] = 'Suède';
$string['country.ch'] = 'Suisse';
$string['country.sy'] = 'Syrie';
$string['country.tw'] = 'Taiwan';
$string['country.tj'] = 'Tajikistan';
$string['country.tz'] = 'Tanzanie';
$string['country.th'] = 'Thaïlande';
$string['country.tl'] = 'Timor oriental';
$string['country.tg'] = 'Togo';
$string['country.tk'] = 'Tokelau';
$string['country.to'] = 'Tonga';
$string['country.tt'] = 'Trinité et Tobago';
$string['country.tn'] = 'Tunisie';
$string['country.tr'] = 'Turquie';
$string['country.tm'] = 'Turkménistan';
$string['country.tc'] = 'Iles Turks et Caïques';
$string['country.tv'] = 'Tuvalu';
$string['country.ug'] = 'Ouganda';
$string['country.ua'] = 'Ukraine';
$string['country.ae'] = 'Émirats Arabes Unis';
$string['country.gb'] = 'Royaume-Uni';
$string['country.us'] = 'États-Unis d\'Amérique';
$string['country.um'] = 'Petites Îles des États-Unis d\'Amérique';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Ouzbékistan';
$string['country.vu'] = 'Vanuatu';
$string['country.ve'] = 'Vénézuela';
$string['country.vn'] = 'Viêtnam';
$string['country.vg'] = 'îles Vierges britanniques';
$string['country.vi'] = 'îles Vierges américaines';
$string['country.wf'] = 'Wallis et Futuna';
$string['country.eh'] = 'Sahara Occidental';
$string['country.ye'] = 'Yémen';
$string['country.zm'] = 'Zambie';
$string['country.zw'] = 'Zimbabwe';

// general stuff that doesn't really fit anywhere else
$string['system'] = 'Système';
$string['done'] = 'Terminé';
$string['back'] = 'Retour';
$string['alphabet'] = 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';

?>
