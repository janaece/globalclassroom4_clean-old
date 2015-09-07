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
 * @subpackage auth-internal
 * @author     Piers Harding <piers@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

//$string['defaultidpidentity'] = 'Default IdP Identidad del Servicio';
$string['defaultinstitution'] = 'Institución por defecto';
$string['description'] = 'Autenticación con un servicio de SAML 2.0 IdP';
$string['errorbadinstitution'] = 'Institución para la conexión del usuario no se resuelve';
$string['errorretryexceeded'] = 'Máximo número de intentos excedido (%s) - tiene que haber un problema con el Servicio de Identidad';
$string['errnosamluser'] = 'No se encuentra el usuario';
$string['errorbadlib'] = 'SimpleSAMLPHP lib directorio %s no es correcto.';
$string['errorbadconfig'] = 'SimpleSAMLPHP config del directorio %s está en la posición correcta.';
$string['errorbadcombo'] = 'Sólo puede elegir la creación de usuarios de automóviles, si no ha seleccionado usuario remoto';
//$string['idpidentity'] = 'IdP Identidad del servicio';
$string['institutionattribute'] = 'Atributo Institución (contiene "%s")';
$string['institutionvalue'] = 'Valor de la institución para comprobar contra el atributo';
$string['institutionregex'] = 'No coinciden cadena parcial con nombre corto institución';
$string['notusable'] = 'Por favor, instale las bibliotecas simpleSAMLPHP SP';
$string['samlfieldforemail'] = 'Campo de SSO de correo electrónico';
$string['samlfieldforfirstname'] = 'Campo de SSO para Nombre';
$string['samlfieldforsurname'] = 'Campo de SSO para Apellido';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'Actualización de datos de usuario al iniciar sesión';
$string['userattribute'] = 'Atributo del usuario';
$string['simplesamlphplib'] = 'Directorio simpleSAMLPHP lib';
$string['simplesamlphpconfig'] = 'SimpleSAMLPHP config directorio';
$string['weautocreateusers'] = 'Se cree automáticamente los usuarios';
$string['remoteuser'] = 'Atributo de nombre de usuario Match remoto nombre de usuario';
?>
