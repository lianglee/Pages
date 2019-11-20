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
 $pages = new Pages;
 $all	= $pages->getAll();
 $count	= $pages->getAll(array(
 			'count' => true,
 ));
 ?>
 <a class="btn btn-success btn-sm" href="<?php echo ossn_site_url('administrator/settings/cpages?mpage=add');?>"><?php echo ossn_print('cpages:addnew');?></a>
 <div class="alert alert-info margin-top-10">
 	<?php echo ossn_print('cpages:menubuilder');?>
 </div>
 <table class="table table-striped margin-top-10">
  <tr>
    <th scope="col"><?php echo ossn_print('cpages:title');?></th>
    <th scope="col"><?php echo ossn_print('cpages:pageurl');?></th>
    <th scope="col"><?php echo ossn_print('cpages:settings:title');?></th>
  </tr>
  <?php if($all){
	  	foreach($all as $page){?>
  <tr>
    <td><a target="_blank" href="<?php echo $page->getURL();?>"><strong><?php echo $page->title;?></strong></a></td>
    <td><?php echo $page->getURL();?></td>
    <td>
    	<a target="_blank" href="<?php echo $page->getURL();?>" class="label label-warning" title="<?php echo ossn_print('cpages:view');?>"><i class="fa fa-arrows-alt"></i></a>
    	<a href="<?php echo $page->getURL(true);?>" class="label label-success" title="<?php echo ossn_print('cpages:edit');?>"><i class="fa fa-pencil"></i></a>
    	<a href="<?php echo ossn_site_url('action/cpages/delete?guid='.$page->guid, true);?>" class="label label-danger ossn-make-sure" title="<?php echo ossn_print('cpages:delete');?>"><i class="fa fa-trash-o"></i></a>
    </td>
  </tr>
<?php } 
  }?>  
</table>
<?php 
echo ossn_view_pagination($count); 

 

