<div class="location">
	<ul>
	<li><b><?php echo $head_show;?></b></li>
	<?php $states = $DB->select('tbl_states', array(1=>1),'and', 'all', '', '', 'state_name', 'asc');
	if($states){
	foreach($states as $st){?>
	<li><a href="<?php echo $general->url.'/state/'.$content_type.'-in-'.$st['state_uri'];?>"><?php echo $st['state_name'];?></a>
	</li>
	<?php		
	$cities = $DB->select('tbl_cities', array('state_id'=>$st['state_id']),'and', 'all');	
	if($cities && ($rep_data == $st['state_uri'] || $city_data['state_id']==$st['state_id'])){
		foreach($cities as $ct){?>
			<li><a class="city" href="<?php echo $general->url.'/city/'.$content_type.'-in-'.$ct['city_uri'];?>"> &raquo; <?php echo $ct['city_name'];?></a>
			</li>
	<?php }}?>
	<?php }}?>
	</ul>
</div>