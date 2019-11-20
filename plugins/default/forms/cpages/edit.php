<?php
$page = com_pages_get_page(input('guid'));
if(!$page){
	return;	
}
?>
<div>
        <label><?php echo ossn_print('cpages:title');?></label>
		<input type="text" name="title" autocomplete="off" value="<?php echo $page->title;?>" />
</div>
<div>      
        <label><?php echo ossn_print('cpages:description');?></label>
        <textarea class="ossn-editor" name="description"  autocomplete="off"><?php echo html_entity_decode($page->description);?></textarea>
</div>   
<input type="hidden" value="<?php echo $page->guid;?>" name="guid" />
<input type="submit" class="btn btn-success btn-sm margin-top-10" value="<?php echo ossn_print('save');?>" />