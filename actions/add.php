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

 if(empty($title) || empty($desc)) {
	 		ossn_trigger_message(ossn_print("cpages:fillfields"), 'error');
			redirect(REF);	 
 } 
 $pages = new Pages;
 if($pages->addPage($title, $desc)){
	 		ossn_trigger_message(ossn_print("cpages:page:added"));
			redirect("administrator/settings/cpages?mpage=list");
 } else {
	 		ossn_trigger_message(ossn_print("cpages:page:add:failed"), 'error');
			redirect(REF);	 
 }
 