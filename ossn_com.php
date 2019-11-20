<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

define('PAGES', ossn_route()->com . 'Pages/');
require_once(PAGES . 'classes/Pages.php');
/**
 * Pages Init
 *
 * @return void
 */
function com_pages_init() {
		ossn_extend_view('css/ossn.default', 'cpages/css');
		ossn_extend_view('js/opensource.socialnetwork', 'cpages/js');
	
		ossn_register_site_settings_page('cpages', 'settings/admin/cpages');
	 	ossn_register_admin_sidemenu('admin:cpages', 'admin:cpages', ossn_site_url('administrator/settings/cpages?mpage=list'), ossn_print('admin:sidemenu:settings'));
		
		if(ossn_isAdminLoggedin()) {
				ossn_register_action('cpages/add', PAGES . 'actions/add.php');
				ossn_register_action('cpages/edit', PAGES . 'actions/edit.php');
				ossn_register_action('cpages/delete', PAGES . 'actions/delete.php');
		}
		ossn_register_page('p', 'com_pages_page_handler');		
}
/** 
 * Get page object
 * 
 * @param integer $guid A page guid
 * 
 * @return object|boolean
 */
function com_pages_get_page($guid) {
		if($object = ossn_get_object($guid)) {
				$type = (array) $object;
				if($object->subtype = 'custom:page') {
						return arrayObject($type, 'Pages');
				}
		}
		return false;
}
/** 
 * Pages pages
 * 
 * @param array $pages A pages
 * 
 * @return mixdata
 */
function com_pages_page_handler($pages){
			$page		 = com_pages_get_page($pages[0]);
			if(!$page) {
					ossn_error_page();
			}
			$title               = $page->title;
			$contents['content'] = ossn_plugin_view('cpages/view', array(
					'page' 		  => $page,
			));
			$content             = ossn_set_page_layout('contents', $contents);
			echo ossn_view_page($title, $content);
}
ossn_register_callback('ossn', 'init', 'com_pages_init');