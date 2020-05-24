<?php
/**
*
* @package phpBB Extension - Youtube Videos Gallery
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author _Vinny_ - http://www.suportephpbb.com.br
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'VIDEO_INDEX'				=> 'Galeria de videos',
	'VIDEO_SELECT_CAT'			=> 'Seleccione una categoría',
	'VIDEO_SUBMIT'				=> 'Nuevo video',
	'VIDEO_URL'					=> 'Ingrese la URL del video',
	'VIDEOS_TIP'				=> 'Ayuda y sugerencias',
	'VIDEOS_TIPS_PART_01'		=> 'Vaya a <a href="https://www.youtube.com/">Youtube.com</a>, busque sus videos favoritos.',
	'VIDEOS_TIPS_PART_02'		=> 'Copie la URL del video, péguela en el campo de arriba, elija la categoría y envíe el formulario.',
	'VIDEOS_TIPS_PART_03'		=> 'Puede usar <strong>youtube.com</strong> y <strong>youtu.be</strong>, ambas son aceptados por la Extensión.',
	'VIDEOS_TIPS_PART_04'		=> 'Advertencia',
	'VIDEOS_TIPS_PART_05'		=> '¡esta página no es para subir videos a Youtube !',
	'VIDEO_UNAUTHED'			=> 'No tiene autorización para ver este video.',
	'INVALID_VIDEO'				=> 'El video que seleccionó no existe.',
	'VIDEO'						=> 'Videos',
	'VIDEO_EXPLAIN'				=> 'Ver galería de videos de Youtube',
	'VIEW_CAT'					=> 'Ver categoría',
	'VIEW_VIDEO'				=> 'Ver video',
	'VIDEO_CAT'					=> 'Categoría',
	'VIDEO_CATS'				=> 'Categorías',
	'VIDEO_COPY_BUTTON'			=> 'Copiar',
	'VIDEO_CREATED'				=> 'Este video ha sido agregado con éxito.',
	'VIDEO_DATE'				=> 'Fecha',
	'VIDEO_DELETE'				=> 'Eliminar video',
	'VIDEO_DELETED'				=> 'Este video ha sido eliminado con éxito.',
	'VIDEO_LAST'				=> 'Último',
	'VIDEO_VERSION'				=> 'Version',
	'PAGE_RETURN'				=> '%sRegresar a la página de videos%s',
	'COMMENTS'					=> 'Comentarios',
	'POST_COMMENT'				=> 'Publicar un comentario',
	'COMMENT_CREATED'			=> 'Su comentario ha sido agregado exitosamente.',
	'VIDEO_CMNT_SUBMIT'			=> 'Publicar un nuevo comentario',
	'NO_VIDEOS_COMMENTS'		=> 'Este video no tiene comentarios.',
	'VIDEO_COMMENT'				=> 'Comentario',
	'VIDEO_COMMENTS'			=> 'Comentarios',
	'NEED_VIDEO_MESSAGE'		=> 'Ningún comentario agregado',
	'COMMENT_DELETED_SUCCESS'	=> 'Este comentario ha sido eliminado con éxito.',
	'DELETE_COMMENT_CONFIRM'	=> '¿Seguro que quiere eliminar este comentario?',
	'DELETE_COMMENT_NOT'		=> 'Comentario <strong>no</strong> eliminado.',
	'DELETE_VIDEO'				=> '¿Está seguro de que desea eliminar este video?',
	'MY_VIDEOS'					=> 'Ver sus videos',
	'NEED_VIDEO_URL'			=> 'Debe de ingresar una <strong>url</strong> para este video.',
	'NEWEST_VIDEOS'				=> 'Videos más nuevos',
	'NO_VIDEOS'					=> 'Esta página no tiene videos.',
	'NO_CAT_VIDEOS'				=> 'Esta categoría no tiene videos o no existe.',
	'NO_USER_VIDEOS'			=> 'Este usuario no tiene videos o no existe.',
	'NO_CATEGORIES'				=> 'Esta página no tiene categorías.',
	'NO_TITLE'					=> 'Esta página no tiene títulos.',
	'RETURN_TO_VIDEO_INDEX'		=> 'Regresar a la galería de videos',
	'SEARCH_VIDEOS'				=> 'Buscar videos',
	'STATS_FROM_YOUTUBE'		=> 'Estadísticas de youtube',
	'TOTAL_VIDEOS'				=> 'Videos totales',
	'VIDEO_ADD_CHAT'			=> '[i]Agregar un nuevo video:[/i] [url=%2$s]%1$s[/url] [i]en la categoría: [b]%3$s[/b][/i]',
	'VIDEO_COMMENT_CHAT'		=> '[i]Hizo un comentario en:[/i] [url=%2$s]%1$s[/url]',
	'TOTAL_CATEGORIES'	=> array(
		0 => 'Sin categorías',
		1 => 'Total <strong>%1$d</strong> categoría',
		2 => 'Total <strong>%1$d</strong> categorías',
	),
	'TOTAL_VIDEO'		=> array(
		0 => 'No videos',
		1 => 'Total <strong>%1$d</strong> video',
		2 => 'Total <strong>%1$d</strong> videos',
	),
	'TOTAL_VIEWS'		=> array(
		0 => 'No views',
		1 => 'Total <strong>%1$d</strong> visualización',
		2 => 'Total <strong>%1$d</strong> visualizaciones',
	),
	'TOTAL_COMMENTS'	=> array(
		0 => 'Sin comentarios',
		1 => 'Total <strong>%1$d</strong> comentario',
		2 => 'Total <strong>%1$d</strong> comentarios',
	),
	'VIDEO_VIEWS_YOUTUBE'	=> array(
		0 => 'Sin visualizaciones en youtube',
		1 => 'Total <strong>%s</strong> visualización en youtube',
		2 => 'Total <strong>%s</strong> visualizaciones en youtube',
	),
	'USER_VIDEOS'				=> 'Todos los videos del usuario',
	'USER_VIDEOS_EXPLAIN'		=> 'Mostrar todo',
	'NO_KEY_ADMIN'				=> 'Estimado administrador, para usar la galería de videos, debe configurar un <strong>Clave API pública de Google</strong>, vaya al panel de control de administración y siga las instrucciones.',
	'NO_KEY_USER'				=> 'Estimado usuario, la galería no está disponible. Por favor regrese más tarde.',
	'NO_CURL'					=> 'Debe habilitar curl.',
	'COMMENTS_DISABLED'			=> 'Los comentarios están deshabilitados.',
	'DELETE_COMMENT'			=> 'Eliminar comentario',

	// View Video
	'FLASH_IS_OFF'				=> '[flash] está <em>APAGADO</em>',
	'FLASH_IS_ON'				=> '[flash] está <em>ENCENDIDO</em>',
	'VIDEO_ADD_BY'				=> 'Agregado por',
	'VIDEO_BBCODE'				=> 'BBcode',
	'VIDEO_EMBED'				=> 'Insertar video',
	'VIDEO_LINK'				=> 'Enlace de video',
	'VIDEO_LINKS'				=> 'Enlaces',
	'VIDEO_LINK_YOUTUBE'		=> 'Enlace de video de Youtube',
	'VIDEO_VIEWS'				=> 'Visualizaciones',
	'VIDEO_DURATION'			=> 'Duración',

	// Youtube video text
	'VIDEO_AUTHOR'				=> 'Autor',
	'VIDEO_WATCH'				=> 'Verlo en Youtube',

	// UCP
	'UCP_YOUTUBEGALLERY_TITLE'	=> 'Ver sus videos',
	'UCP_NO_USER_VIDEOS'		=> 'Aún no hay videos subidos por usted.',

	//Pagination
	'LIST_COMMENT'		=>	array(
		1 => '%s comentario',
		2 => '%s comentarios',
	),
	'LIST_VIDEO'		=>	array(
		1 => '%s video',
		2 => '%s videos',
	),

	'VIDEO_CATEGORIES_TITLE'			=> array(
		0 => 'Ocultar video',
		1 => 'Mostrar video',
	),
));
