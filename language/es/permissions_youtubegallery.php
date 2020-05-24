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
	'ACL_U_VIDEO_VIEW_FULL'			=> 'Puede ver la galería de videos',
	'ACL_U_VIDEO_VIEW'				=> 'Puede ver videos',
	'ACL_U_VIDEO_DELETE'			=> 'Puede borrar sus propios videos',
	'ACL_U_VIDEO_POST'				=> 'Puede publicar videos',
	'ACL_U_VIDEO_COMMENT'			=> 'Puede publicar comentarios en el video',
	'ACL_U_VIDEO_COMMENT_DELETE'	=> 'Puede borrar sus propios comentarios en el video',
));
