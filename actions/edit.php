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
 $title = input('title');
 $desc  = input('description');
 $guid  = input('guid');
 
 if(empty($title) || empty($desc)) {
	 		ossn_trigger_message(ossn_print("cpages:fillfields"), 'error');
			redirect(REF);	 
 } 
 $page = com_pages_get_page($guid);
 if(!$page){
	 		ossn_trigger_message(ossn_print("cpages:invalid:page"), 'error');
			redirect(REF);			 
 }
 $page->title = $title;
 $page->description = $desc;
 
 if($page->save()){
	 		ossn_trigger_message(ossn_print("cpages:page:saved"));
			redirect("administrator/settings/cpages?mpage=list");
 } else {
	 		ossn_trigger_message(ossn_print("cpages:page:save:failed"), 'error');
			redirect(REF);	 
 }
 