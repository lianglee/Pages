<div>
        <label><?php echo ossn_print('cpages:title');?></label>
		<input type="text" name="title" autocomplete="off" />
</div>
<div>      
        <label><?php echo ossn_print('cpages:description');?></label>
        <textarea class="ossn-pages-editor" name="description"  autocomplete="off"></textarea>
</div>   
<input type="submit" class="btn btn-success btn-sm margin-top-10" value="<?php echo ossn_print('save');?>" />
<?php
echo ossn_plugin_view('cpages/editor_js');