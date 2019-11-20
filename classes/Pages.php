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
class Pages extends OssnObject {
		public function addPage($title, $desc){
				if(empty($title) || empty($desc)){
					return false;	
				}
				$this->title 	   = $title;
				$this->description = $desc;
				$this->type		   = 'site';
				$this->subtype	   = 'custom:page';
				$this->owner_guid  = 1;
				return $this->addObject();
		}
		/**
		 * Get all Menus
		 *
		 * @param array $params A options
		 *
		 * @return array
		 */
		public function getAll(array $params = array()) {
				$default               = array();
				$default['type']       = 'site';
				$default['subtype']    = 'custom:page';
				
				$vars = array_merge($default, $params);
				return $this->searchObject($vars);
		}		
		public function getURL($edit = false){
				if(!$edit){
					$translit = OssnTranslit::urlize($this->title);
					return ossn_site_url("p/{$this->guid}/{$translit}");
				} else {
					return ossn_site_url("administrator/settings/cpages?mpage=edit&guid={$this->guid}");
				}
		}	
}//class