<?php
$page = input('mpage', '', 'add');
switch($page){
	case 'add':
		echo ossn_view_form('cpages/add', array(
    		'action' => ossn_site_url() . 'action/cpages/add',
		));
		break;
	case 'list':
		echo ossn_plugin_view('cpages/list');
		break;		
	case 'edit':
		echo ossn_view_form('cpages/edit', array(
    		'action' => ossn_site_url() . 'action/cpages/edit',
		));	
		break;		
}	