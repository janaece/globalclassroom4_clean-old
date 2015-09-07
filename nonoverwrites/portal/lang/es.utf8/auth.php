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
 * @subpackage lang/es.utf8
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['addauthority'] = 'Añadir autoridad';
$string['application'] = 'Aplicación';
$string['authname'] = 'Nombre de la autoridad';
$string['cannotremove'] = 'No se puede eliminar este plugin de autentificación, es el único que existe para esta institución.';
$string['cannotremoveinuse'] = 'No se puede eliminar este plugin de autentificación, está siendo usado por algunos usuarios. Debe actualizar sus datos para poder eliminarlo.';
$string['cantretrievekey'] = 'Ocurrió un error al intentar obtener la clave pública del servidor remoto.<br>Asegurese de que la aplicación y la ruta raiz a su URL son las correctas. También debe asegurarse de que el servidor remoto tenga habilitados los servicios de red.';
$string['changepasswordurl'] = 'URl para el cambio de contraseña';
$string['editauthority'] = 'Modificar una autoridad';
$string['errnoauthinstances'] = 'No existen indicios de configuración en el plug-in de autentificación en el servidor remoto %s';
$string['errnoxmlrpcinstances'] = 'No existen indicios de configuración en el plugin de autentificación XMLRPC en el servidor remoto %s';
$string['errnoxmlrpcuser'] = 'No podemos identificarle en este momento. Algunas de las razones pueden ser:<br><ul>
<li>Su sesión SSO ha caducado: Vuelva al sitio de donde vino e intente entrar aqui de nuevo.</li></ul>
<li>No tiene autorización para abrir una sesión SSO en este sitio: Contacte con su administrador si piensa lo contrario.</li>';
$string['errnoxmlrpcwwwroot'] = 'No existen registros para su host en %s';
$string['errorcertificateinvalidwwwroot'] = 'El certificado que utiliza es para %s, pero usted esta intentando utilizarlo para %s.';
$string['errornotvalidsslcertificate'] = 'El certificado de seguridad SSL no es válido';
$string['host'] = 'Nombre del host o URL';
$string['ipaddress'] = 'Dirección IP';
$string['name'] = 'Nombre del sitio';
$string['noauthpluginconfigoptions'] = 'Este plugin no requiere parámetros de configuración';
$string['nodataforinstance'] = 'No se pueden encontrar los datos necesarios para autentificar la instancia';
$string['parent'] = 'Autoridad superior';
$string['port'] = 'Nº de puerto';
$string['protocol'] = 'Protocolo';
$string['requiredfields'] = 'Campos de perfil requeridos';
$string['requiredfieldsset'] = 'Juego de campos del perfil requeridos';
$string['saveinstitutiondetailsfirst'] = '¡Por favor!. Guarde los detalles de la institución antes de continuar configurando los plugiun de autentificación.';
$string['shortname'] = 'Nombre corto de su sitio';
$string['theyautocreateusers'] = 'Creará nuevas cuentas';
$string['theyssoin'] = 'Peticiones SSO';
$string['unabletosigninviasso'] = 'Identificar entradas via SSO';
$string['updateuserinfoonlogin'] = 'Actualizar datos al entrar';
$string['updateuserinfoonlogindescription'] = 'Recoger la información del usuario del servidor remoto y actualizarla en su cuenta local cada vez que entre.';
$string['weautocreateusers'] = 'Crearé cuentas nuevas';
$string['weimportcontent'] = 'Importar contenidos (restringido)';
$string['wessoout'] = 'Identificar salidas vía SSO';
$string['wwwroot'] = 'raiz del sitio';
$string['xmlrpccouldnotlogyouin'] = 'Lo sentimos, no puede identificarse :-(';
$string['xmlrpccouldnotlogyouindetail'] = 'Lo sentimos, no puede identificarse en este sitio ahora. Reintentelo más tarde y si el problema continua contacte con su administrador.';
$string['xmlrpcserverurl'] = 'URL del servidor XML-RPC';

// mahara 1.2
$string['weimportcontentdescription'] = '(solo para algunas aplicaciones)';
$string['authloginmsg'] = "Introduzca el mensaje a mostrar cuando un usuario intenta entrar en Mahara vía formulario de entrada";
$string['ssodirection'] = 'dirección SSO';
$string['errorcouldnotgeneratenewsslkey'] = 'No pudo generarse una nueva clave SSL. ¿Está seguro de que tanto openssl como el nuevo módulo PHP para openssl se hallan instalados en su servidor?';
$string['hostwwwrootinuse'] = 'WWW raíz ya en uso para otra institución (%s)';

?>
