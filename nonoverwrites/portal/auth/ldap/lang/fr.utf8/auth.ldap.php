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

$string['title'] = 'LDAP';
$string['description'] = 'Utiliser un serveur LDAP comme source d\'authentification';
$string['notusable'] = 'Veuillez installer l\'extension PHP LDAP';

$string['contexts'] = 'Contextes';
$string['distinguishedname'] = 'Nom distingué (DN)';
$string['hosturl'] = 'URL de l\'hôte';
$string['ldapfieldforemail'] = 'Champ LDAP pour le courriel';
$string['ldapfieldforfirstname'] = 'Champ LDAP pour le prénom';
$string['ldapfieldforsurname'] = 'Champ LDAP pour le nom de famille';
$string['ldapversion'] = 'Version LDAP';
$string['starttls'] = 'Cryptage TLS';
$string['password'] = 'Mot de passe';
$string['searchsubcontexts'] = 'Recherche dans les sous-contextes';
$string['userattribute'] = 'Attribut utilisateur';
$string['usertype'] = 'Type utilisateur';
$string['weautocreateusers'] = 'Mahara crée automatiquement les utilisateurs';
$string['updateuserinfoonlogin'] = 'Mettre à jour les informations utilisateur lors de la connexion';
$string['cannotconnect'] = 'Impossible de se connecter à un serveur hôte LDAP.';