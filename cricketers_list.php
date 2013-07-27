<?php
if($rep_data=='india'){
	$sql = "SELECT * FROM tbl_user where 1 group by user_id desc"; //"u inner join tbl_states s inner join tbl_address a on s.state_id=a.state and a.term_id=u.user_id where 1 and a.type='user' and state_uri='".$_GET['state']."'";
	$cricketers = $DB->fetchWithPagination($sql);
}else if($_GET['state']!=''){
	$sql = "SELECT * FROM tbl_user u inner join tbl_states s inner join tbl_address a on s.state_id=a.state and a.term_id=u.user_id where 1 and a.type='user' and state_uri='".$_GET['state']."'  group by u.user_id desc";
	$cricketers = $DB->fetchWithPagination($sql);
}else if($_GET['city']!=''){
	$sql = "SELECT * FROM tbl_user u inner join tbl_cities c inner join tbl_address a on c.city_id=a.city and a.term_id=u.user_id where 1 and a.type='user' and city_uri='".$_GET['city']."' group by u.user_id desc";
	$cricketers = $DB->fetchWithPagination($sql);
}

?>

				<div class="list">
				<ul>
				<li class="head"><h2><?php echo ucwords($content_type);?> In <?php echo ucwords(str_replace('_', ' ', $rep_data));?></h2></li>
				<?php if(is_array($cricketers) && count($cricketers)){
					$i=0;
					foreach ($cricketers as $cricketer){
					?>
					<li class="<?php echo ($i%2==0?'even':'odd')?>"><table>
						<tr>
							<td width="30" align="left"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($cricketer['user_id']);?>&width=50" /></td>
							<td valign="top" width="72%"><?php echo $cricketer['first_name']!=''?$cricketer['first_name'].' '.$cricketer['last_name']:substr($cricketer['email'],0,strpos($cricketer['email'], '@'))?>
								<br />Teams Joined: <?php echo $DB->getRecordsOfTable( 'tbl_team_player_relation', array('user_id'=>$cricketer['user_id']));?> Teams
								<br />Clubs Joined: <?php echo $DB->getRecordsOfTable( 'tbl_club_player_relation', array('user_id'=>$cricketer['user_id']));?> Clubs
							</td>
							<td width="100" align="right"><a href="<?php echo $general->url;?>/cricketer/<?php echo $cricketer['username'];?>.html">View Profile</a><br />
							<a class="edit" href="<?php echo $general->url;?>/ajax/messages.php?msg_to=<?php echo $cricketer['user_id']?>">Send Message</a>
							</td>
						</td>
					</table></li>
				<?php $i++; } }else{?>
				<li>No Cricketer Found! Register and Create your profile in <?php echo ucwords(str_replace('_', ' ', $rep_data));?></li>	
				<?php }?>
				</ul>
				</div>
				<?php echo $DB->pagination_string;?>
			
