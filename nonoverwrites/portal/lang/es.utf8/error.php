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

$string['accessdenied'] = 'Acceso denegado';
$string['accessdeniedexception'] = 'No tiene permisos para ver esta página';
$string['artefactnotfound'] = 'El identificador %s del artefacto no existe';
$string['artefactnotfoundmaybedeleted'] = 'El identificador %s del artefacto no existe. Es posible que se haya eliminado';
$string['artefactpluginmethodmissing'] = 'El plugin del artefacto %s necesita %s y no está';
$string['artefacttypeclassmissing'] = 'Los tipos de artefacto deben de implementarse en una clase. Falta %s';
$string['artefacttypenametaken'] = 'El tipo de artefacto %s ya está en uso por otro plug-in (%s)';
$string['blockconfigdatacalledfromset'] = 'Los datos de configuración no se deben ajustar de forma directa, utilize <i>PluginBlocktype::instance_config_save</i> en su lugar';
$string['blockinstancednotfound'] = 'El identidicador de la instancia del bloque %s no existe';
$string['blocktypelibmissing'] = 'Falta <i>lib.php</i> para el bloque %s en el plugin del artefacto %s';
$string['blocktypemissingconfigform'] = 'El tipo de bloque %s debe contemplar <i>instance_config_from</i>';
$string['blocktypenametaken'] = 'El tipo de bloque %s está siendo utilizado por otro plugin (%s)';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'Esto tiene que estar instalado como parte de la instalación del plugin de artefacto %s';
$string['classmissing'] = 'La clase %s para el tipo %s en el plugin %s se perdió';
$string['couldnotmakedatadirectories'] = 'Por alguna razón algunos de los directorios del núcleo de  datos no pueden ser creados. Esto no debería ocurrir, ya que anteriormente la variable de configuración <i>dataroot en config.php</i>, que define este directorio fué detectado en la instalación con permisos de escritura. Por favor, compruebe los permisos en el directorio especificado.';
$string['curllibrarynotinstalled'] = 'En la configuración de su servidor web, se omitió la extensión <i>curl de php</i>. Mahara la necesita para la integración con Moodle y para actualizar los alimentadores de noticias RSS. Pongase en contacto con su administrador, verifique su configuración de php o instale esta extensión.';
$string['datarootinsidedocroot'] = 'El nucleo de datos del sistema es accesible desde la raiz de su sitio web. Esto representa un importante problema de seguridad ya que cualquiera puede acceder a los datos de sesión y suplantar identidades. También dejará sin efecto las restricciones de acceso a los datos o archivos de los portafolios. <strong>Asegurese de que la carpeta configurada en la variable <i>dataroot de config.php</i> apunte a un lugar no accesible desde la raiz de su sitio web</strong>';
$string['datarootnotwritable'] = 'La carpeta %s del nucleo de datos del sistema no tiene permisos de escritura para el usuario sobre el que se ejeccuta su servidor web. Asegurese de que esta carpeta existe y de que tiene concedidos los permisos necesarios (utilize mkdir, chmod y chown en unix/linux).';
$string['dbconnfailed'] = 'No se puede conectar con la base de datos<br><ul>
<li> Si está utilizando el sitio, puede deberse a una sobrecarga del servidor, intentelo de nuevo más tarde y si no funciona pongase en contacto con su administrador</li>
<li>Si tiene privilegios de administración verifique su servidor de base de datos</li>
</ul><br>El error recibido fué:';
$string['dbversioncheckfailed'] = 'La versión de su servidor de base de datos no es adecuada para ejecutar Mahara. Su servidor es %s %s, pero Mahara necesita al menos la versión %s.';
$string['gdextensionnotloaded'] = 'La configuración de su servidor no tiene habilitada la extensión <i>gd de php</i>. Mahara la necesita para realizar operaciones con las imágenes subidas. Revise su instalación de php o pongase en contacto con la administración de su servidor.';
$string['gdfreetypenotloaded'] = 'La configuración de la extensión gd en su servidor no tiene habilitado el soporte Freetype. Mahara la necesita para construir las imágenes para despistar a los robots de spam (CAPTCHA). Revise su configuración de gd para incluir el soporte o pongase en contacto con la administración de su servidor.';
$string['interactioninstancenotfound'] = 'El identificador %s de la instancia de la actividad no existe';
$string['invaliddirection'] = 'La dirección %s no es válida';
$string['invalidviewaction'] = 'La acción de control en la vista no es válida: %s';
$string['jsonextensionnotloaded'] = 'La confifiguración de su servidor, no tiene habilitada la extensión JSON. Mahara la necesita para interactuar entre su navegador y el servidor. Revise su configuración de php en su servidor o pongase en contacto con la administración de su servidor.';
$string['magicquotesgpc'] = 'Su servidor mantiene una configuración de PHP realmente peligrosa: <i>magic_quotes_gpc está en on</i>. Mahara está intentando trabajar al respecto, pero debe establecer esta variable a off. Revise su configuración de php en su servidor o pongase en contacto con la administración de su servidor.';
$string['magicquotesruntime'] = 'Su servidor mantiene una configuración de PHP realmente peligrosa: <i>magic_quotes_runtime está en on</i>. Mahara está intentando trabajar al respecto, pero debe establecer esta variable a off. Revise su configuración de php en su servidor o pongase en contacto con la administración de su servidor.';
$string['magicquotessybase'] = 'Su servidor mantiene una configuración de PHP realmente peligrosa: <i>magic_quotes_sybase está en on</i>. Mahara está intentando trabajar al respecto, pero debe establecer esta variable a off. Revise su configuración de php en su servidor o pongase en contacto con la administración de su servidor.';
$string['missingparamblocktype'] = 'Intente seleccionar en primer lugar el tipo de bloque que desea añadir.';
$string['missingparamcolumn'] = 'No se encontró la especificación de la columna';
$string['missingparamid'] = 'Identificador perdido';
$string['missingparamorder'] = 'Se perdió el orden de la especificación';
$string['mysqldbextensionnotloaded'] = 'La configuración de su servidor no tiene habilitada la extensión <i>mysql</i>. Mahara necesita una base de datos relacional para almacenar los datos. Revise la configuración de php o pongase en contacto con la administración de su sitio.';
$string['notartefactowner'] = 'No tiene permisos sobre este artefacto';
$string['notfound'] = 'No encontrado.';
$string['notfoundexception'] = 'La página que esta buscando no se puede encontrar';
$string['onlyoneprofileviewallowed'] = 'Tiene permiso para una sola vista del perfil';
$string['parameterexception'] = 'No se encontró un parámetro necesario';
$string['pgsqldbextensionnotloaded'] = 'La configuración de su servidor no tiene habilitada la extensión <i>pgsql</i>. Mahara necesita una base de datos relacional para almacenar los datos. Revise la configuración de php o pongase en contacto con la administración de su sitio.';
$string['phpversion'] = 'Mahara no puede funcionar con una versión de PHP inferior a la %s. Por favor, actualize su versión de PHP o pongase en contacto con la administración de su servidor.';
$string['registerglobals'] = 'Su servidor mantiene una configuración de PHP realmente peligrosa: <i>register_globals está en on</i>. Mahara está intentando trabajar al respecto, pero debe establecer esta variable a off. Revise su configuración de php en su servidor o pongase en contacto con la administración de su servidor.';
$string['safemodeon'] = 'Su servidor aparece funcionando en modo seguro (<i>safe mode on</i>). Mahara no soporta este tipo de funcionamiento, revise la configuración de PHP o pongase en contacto con la administración de su sitio.';
$string['sessionextensionnotloaded'] = 'La configuración de su servidor no tiene habilitada la extensión <i>session</i>. Mahara la necesita para identificar las cuentas de usuario. Revise la configuración de php o pongase en contacto con la administración de su sitio.';
$string['unknowndbtype'] = 'No se ha detectado un tipo de base de datos válido en la configuración del archivo config.php. Los valores posibles son: "postgres8" o "mysql5". Revise la variable database type.';
$string['unrecoverableerror'] = 'Un error irrecuperable se ha encontrado. Probablemente ha localizado un error en el sistema. Trate de repetir el proceso y notifique a la administración del  sistema lo que ha pasado.';
$string['unrecoverableerrortitle'] = 'El sitio %s no esta disponible';
$string['versionphpmissing'] = 'El Plugin %s %s falta en el archivo version.php';
$string['viewnotfound'] = 'El identificador %s de la vista no se encontró';
$string['viewnotfoundexceptionmessage'] = 'Esta intentando acceder a una vista que no existe';
$string['viewnotfoundexceptiontitle'] = 'No se encontro la vista';
$string['xmlextensionnotloaded'] = 'La configuración de su servidor no tiene habilitada la extensión %s. Mahara la necesita para traducir los datos XML de varias fuentes. Por favor, revise su configuración de PHP o pongase en contacto con la administración de su servidor.';

// mahara 1.2
$string['dbnotutf8'] = 'No está usando una base de datos UTF-8. Mahara almacena todos los datos internamente UTF-8. Por favor, elimine y cree de nuevo la base de datos empleando la codificación UTF-8.';
$string['artefacttypemismatch'] = "Incorrección de tipo de artefacto, esta intentando emplear %s como %s";
$string['youcannotviewthisusersprofile'] = 'Usted no puede ver este perfil de usuario \'s ';
$string['domextensionnotloaded'] = 'La configuración de su servidor no incluye la extensión dom. Mahara la necesita para procesar datos XML de una variedad de fuentes.';
$string['onlyoneblocktypeperview'] = 'No se puede añadir más de un block del tipo %s en una vista';



?>
