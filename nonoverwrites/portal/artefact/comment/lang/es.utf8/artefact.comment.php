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

$string['pluginname'] = 'Comentario';
$string['Comment'] = 'Comentario';
$string['Comments'] = 'Comentarios';
$string['comment'] = 'comentario';
$string['comments'] = 'comentarios';

$string['Allow'] = 'Permitir';
$string['allowcomments'] = 'Permitir comentarios';
$string['approvalrequired'] = 'Los comentarios son moderados, por lo que si usted decide hacer público este comentario, no será visible para los demás que haya sido aprobada por el dueño.';
$string['attachfile'] = "Adjuntar archivo";
$string['Attachments'] = "Archivos adjuntos";
$string['cantedithasreplies'] = 'Sólo puede editar el comentario más reciente';
$string['canteditnotauthor'] = 'Usted no es el autor de este comentario';
$string['cantedittooold'] = 'Sólo puede editar los comentarios que son menos de %d minutos de edad';
$string['commentmadepublic'] = "Comentario público";
$string['commentdeletedauthornotification'] = "Tu comentario en %s se ha eliminado:\n%s";
$string['commentdeletednotificationsubject'] = 'Opina sobre %s eliminado';
$string['commentnotinview'] = 'Comentar %d punto de vista %d';
$string['commentremoved'] = 'Comentario eliminado';
$string['commentremovedbyauthor'] = 'Comentario eliminado por el autor';
$string['commentremovedbyowner'] = 'Comentario eliminado por el propietario';
$string['commentremovedbyadmin'] = 'Comentario eliminado por un administrador';
$string['commentupdated'] = 'Comentario actualizado';
$string['editcomment'] = 'Editar Comentario';
$string['editcommentdescription'] = 'Usted puede actualizar sus comentarios si tienen menos de %d minutos de edad y no han tenido respuestas más recientes agregó. Después de este tiempo usted puede todavía ser capaz de borrar sus comentarios y añadir otras nuevas.';
$string['entriesimportedfromleapexport'] = 'Entradas importados de una exportación de LEAP, que no pudieron ser importados en otro lugar';
$string['feedback'] = 'Feedback';
$string['feedbackattachdirname'] = 'archivos de comentarios';
$string['feedbackattachdirdesc'] = 'Archivos adjuntos a los comentarios de su cartera';
$string['feedbackattachmessage'] = 'El archivo adjunto(s) ha sido añadido a su carpeta';
$string['feedbackonviewbyuser'] = 'Feedback en %s por %s';
$string['feedbacksubmitted'] = 'Feedback enviado';
$string['makepublic'] = 'Hacer público';
$string['makepublicnotallowed'] = 'No está permitido hacer público este comentario';
$string['makepublicrequestsubject'] = 'Solicitud para cambiar comentario privado a público';
$string['makepublicrequestbyauthormessage'] = '%s a pedido que haga sus comentarios públicos.';
$string['makepublicrequestbyownermessage'] = '%s ha solicitado que realice sus comentarios públicos.';
$string['makepublicrequestsent'] = 'Un mensaje ha sido enviado a % s para solicitar que el comentario se harán públicas.';
$string['messageempty'] = 'El mensaje está vacío. Mensaje en blanco sólo se permite si el archivo adjunto.';
$string['Moderate'] = 'Moderar';
$string['moderatecomments'] = 'Moderar comentarios';
$string['moderatecommentsdescription'] = 'Comentarios permanecerá en privado hasta que sean aprobados por usted.';
$string['newfeedbacknotificationsubject'] = 'Nuevo feedback en %s';
$string['placefeedback'] = 'Ponga el feedback';
$string['reallydeletethiscomment'] = '¿Está seguro que desea eliminar este comentario?';
$string['thiscommentisprivate'] = 'Este comentario es privado';
$string['typefeedback'] = 'Feedback';
$string['youhaverequestedpublic'] = 'Usted ha solicitado que este comentario se harán públicas.';

$string['feedbacknotificationhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>%s comentario a %s</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">Respuesta a este comentario en línea</a></p>
</div>";
$string['feedbacknotificationtext'] = "%s comentario a %s
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver y responder a la línea comentario, siga este enlace:
%s";
$string['feedbackdeletedhtml'] = "<div style=\"padding: 0.5em 0; border-bottom: 1px solid #999;\"><strong>Un comentario en %s fue eliminado</strong><br>%s</div>

<div style=\"margin: 1em 0;\">%s</div>

<div style=\"font-size: smaller; border-top: 1px solid #999;\">
<p><a href=\"%s\">%s</a></p>
</div>";
$string['feedbackdeletedtext'] = "Un comentario en %s fue eliminado
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
Para ver %s en línea, siga este enlace:
%s";
?>
