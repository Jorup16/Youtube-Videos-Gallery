<?php
/**
*
* @package phpBB Extension - Youtube Videos Gallery
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author _Vinny_ - http://www.suportephpbb.com.br
*
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_VIDEO_EXPLAIN'								=> 'Extensión de galería de videos',
	'ACP_VIDEO_GENERAL_SETTINGS'					=> 'Configuración general',
	'ACP_VIDEO_ENABLE'								=> 'Habilitar página de videos',
	'ACP_VERSION_CURRENT'							=> 'Versión',
	'ACP_GOOGLE_KEY'								=> 'Clave API pública de Google',
	'ACP_GOOGLE_KEY_EXPLAIN'						=> 'Para usar la galería de videos, debe de crear una <strong>Clave API pública de Google</strong>. Por favor, visite <strong><a href="https://support.google.com/cloud/answer/6158862/">Configurar claves API</a></strong> para generar la clave. Si tiene problemas para generar su clave, lea la guía de <strong><a href="https://developers.google.com/console/help/new/#generatingdevkeys">Ayuda de Google para Desarrolladores de Consola: claves API</a></strong>. Hasta que configure su clave, la galería no estará disponible.',
	'ACP_VIDEOS_PER_PAGE'							=> 'Videos por página',
	'ACP_VIDEOS_PER_PAGE_EXPLAIN'					=> 'Establecer valor para videos por página.<br /><em>El valor predeterminado es 10</em>.',
	'ACP_COMMENTS_PER_PAGE'							=> 'Comentarios por página',
	'ACP_COMMENTS_PER_PAGE_EXPLAIN'					=> 'Establecer valor para comentarios en la página de video.<br /><em>El valor predeterminado es 10</em>.',
	'ACP_ENABLE_COMMENTS'							=> 'Habilitar comentarios en videos',
	'ACP_ENABLE_COMMENTS_EXPLAIN'					=> 'Esta opción mostrará los comentarios en la página de video.',
	'ACP_ENABLE_VIDEO_GLOBAL'						=> 'Habilitar galería de videos',
	'ACP_ENABLE_VIDEO_GLOBAL_EXPLAIN'				=> 'Habilitar la extensión de la galería de videos global.',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX'				=> 'Habilitar estadísticas de video en la página principal del foro',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX_EXPLAIN'		=> 'Esta opción mostrará las estadísticas de video en la página principal del foro.',
	'ACP_ENABLE_VIDEO_ON_INDEX'						=> 'Habilitar los últimos videos en la página principal del foro',
	'ACP_ENABLE_VIDEO_ON_INDEX_EXPLAIN'				=> 'Esta opción mostrará los videos en la página principal del foro.',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION'			=> 'Mostrar los últimos videos en la parte superior de la página principal del foro',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION_EXPLAIN'	=> 'Parte superior o inferior del foro.',
	'ACP_VIDEO_ON_INDEX_VALUE'						=> 'Mostrar los últimos videos',
	'ACP_VIDEO_ON_INDEX_VALUE_EXPLAIN'				=> 'Establezca el valor para los últimos videos en la página principal.<br /><em>El valor predeterminado es 6</em>.',
	'ACP_VIDEO_SETTINGS_SAVED'						=> 'Configuración de la galería de videos guardada',
	'ACP_VIDEO_TOP'									=> 'Parte superior',
	'ACP_VIDEO_BOTTOM'								=> 'Parte inferior',
	'ACP_ENABLE_VIDEO_CHAT'							=> 'Habilitar la publicación de videos en mChat',
	'ACP_ENABLE_VIDEO_CHAT_EXPLAIN'					=> 'Cuando se establece en sí, el enlace de video cargado se publicará en mChat.',
	'ACP_ENABLE_VIDEO_CHAT_COMMENT'					=> 'Habilitar la publicación de comentarios en mChat',
	'ACP_ENABLE_VIDEO_CHAT_COMMENT_EXPLAIN'			=> 'Cuando se establece en sí, los comentarios cargados en los videos se publicarán en mChat.',
	'ACP_ENABLE_VIDEO_YOUTUBE_STATS'				=> 'Habilitar estadísticas de Youtube',
	'ACP_ENABLE_VIDEO_YOUTUBE_STATS_EXPLAIN'		=> 'Cuando se establece en sí, se muestran las estadísticas de Youtube.',
	'ACP_VIDEO_SYNC_UPDATED'						=> 'Descripción del video actualizada.',

	// ACP Categories
	'ACP_CATEGORY_CREATED'			=> 'Esta categoría se ha agregado con éxito.',
	'ACP_CATEGORY_DELETE'			=> '¿Está seguro de que desea eliminar esta categoría?',
	'ACP_CATEGORY_DELETED'			=> 'Esta categoría ha sido eliminada exitosamente',
	'ACP_CATEGORY_EDIT'				=> 'Editar categoria',
	'ACP_CATEGORY_UPDATED'			=> '¡Esta categoría ha sido actualizada con éxito!',
	'ACP_VIDEO_CAT_ADD'				=> 'Añadir nueva categoría',
	'ACP_VIDEO_CAT_TITLE'			=> 'Título de la categoría',
	'ACP_VIDEO_CAT_TITLE_EXPLAIN'	=> 'Ingrese el título de la categoría.',
	'ACP_VIDEO_CAT_TITLE_TITLE'		=> 'Debe ingresar un <strong>título</strong> para esta categoría',
	'ACP_VIDEO_OVERVIEW'			=> 'Categorías de video',
	'ACP_VIDEO_OVERVIEW_EXPLAIN'	=> 'Aquí puede administrar las categorías de los videos de su foro.',
	'ACP_VIDEO_TITLE_EXPLAIN'		=> 'Aquí puede administrar los títulos de los videos de su foro.',
	'ACP_TITLE_DELETE'				=> '¿Está seguro de que desea eliminar este título?',
	'ACP_TITLE_DELETED'				=> 'Este título ha sido eliminado exitosamente',
));
