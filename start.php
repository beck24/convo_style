<?php
/**
 *	Convo_style
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Matt Beckett
 * @copyright Matt Beckett 2011
 */

function convo_style_init() {
	
	if (elgg_is_logged_in()) {
	  elgg_register_js('farbtastic.js', elgg_get_site_url() . 'mod/convo_style/vendors/farbtastic/farbtastic.js');
	  elgg_register_css('farbtastic.css', elgg_get_site_url(). 'mod/convo_style/vendors/farbtastic/farbtastic.css');
	
	  elgg_extend_view('css', 'convo_style/css');
	  elgg_extend_view('js/elgg', 'convo_style/js');
	  elgg_extend_view('footer/analytics', 'convo_style/stylechange');
	
	  $url = elgg_get_site_url() . 'settings/plugins/' . elgg_get_logged_in_user_entity()->username . '#convo_stylesettings';
	  $item = new ElggMenuItem('convo_style', elgg_echo('convo_style:menulink'), $url);
	  $item->setContext('settings');
	  elgg_register_menu_item('page', $item);
	}
}

// add our submenu links
elgg_register_event_handler('init','system','convo_style_init');