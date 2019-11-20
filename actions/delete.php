<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2019 SOFTLAB24 LIMITED
 * @license   SOFTLAB24 LIMITED, COMMERCIAL LICENSE  https://www.softlab24.com/license/commercial-license-v1
 * @link      https://www.softlab24.com/
 */
 $guid = input('guid');
 $page = com_pages_get_page($guid);
 if(!$page){
	 		ossn_trigger_message(ossn_print("cpages:invalid:page"), 'error');
			redirect(REF);			 
 }
 if($page->deleteObject()){
	 		ossn_trigger_message(ossn_print("cpages:page:deleted"));
			redirect("administrator/settings/cpages?mpage=list");
 } else {
	 		ossn_trigger_message(ossn_print("cpages:page:delete:failed"), 'error');
			redirect(REF);	 
 }