<?php
/**
 *
 * Quick Title Edition extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese  translation by eunaumtenhoid [2024][ver 1.0.1] (https://crowdin.com/profile/eunaumtenhoid)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// ’ » “ ” …
//

$lang = array_merge($lang, [
	// Select
	'QTE_ATTRIBUTES'	=> 'Atributos do tópico',
	'QTE_ATTRIBUTE'		=> 'Atributo do tópico',

	'QTE_ATTRIBUTE_ADD'		=> 'Selecione um atributo de tópico',
	'QTE_ATTRIBUTE_DELETE'	=> 'Delete o atributo do tópico',
	'QTE_ATTRIBUTE_DESIRED'	=> 'Selecionar o atributo desejado',
	'QTE_ATTRIBUTE_KEEP'	=> 'Manter o atributo atual',

	// Notifications
	'QTE_ATTRIBUTE_ADDED'	=> 'Um atributo foi aplicado ao título do tópico',
	'QTE_ATTRIBUTE_UPDATED'	=> 'O atributo do tópico foi atualizado',
	'QTE_ATTRIBUTE_DELETED'	=> 'O atributo do tópico foi deletado',

	'QTE_TOPIC_ATTRIBUTE_ADDED'		=> 'Um atributo foi aplicado ao tópico selecionado',
	'QTE_TOPICS_ATTRIBUTE_ADDED'	=> 'Um atributo foi aplicado aos tópicos selecionados',
	'QTE_TOPIC_ATTRIBUTE_UPDATED'	=> 'O atributo do tópico selecionado foi atualizado',
	'QTE_TOPICS_ATTRIBUTE_UPDATED'	=> 'O atributo dos tópicos selecionados foi atualizado',
	'QTE_TOPIC_ATTRIBUTE_DELETED'	=> 'O atributo do tópico selecionado foi deletado',
	'QTE_TOPICS_ATTRIBUTE_DELETED'	=> 'O atributo dos tópicos selecionados foi deletado',

	// Search
	'QTE_ATTRIBUTE_SELECT'	=> 'Selecionar um atributo de tópico',

	'QTE_ATTRIBUTE_SEARCH'			=> 'Pesquisar atributos',
	'QTE_ATTRIBUTE_SEARCH_EXPLAIN'	=> 'Selecione o atributo que você deseja pesquisar',

	// Sort
	'QTE_SORT'	=> 'Como atributo',
	'QTE_ALL'	=> 'Todos',

	// Errors
	'QTE_ATTRIBUTE_UNSELECTED'	=> 'Você deve selecionar um atributo!',

	// Placeholders
	'QTE_KEY_USERNAME'	=> '¦user¦',
	'QTE_KEY_DATE'		=> '¦date¦',

	// Topic attributes as keys
	'QTE_SOLVED'	=> '[Resolvido por %mod% :: %date%]',
	'QTE_CANCELLED'	=> 'Cancelado',
]);
