<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$clubs = $DB->select('tbl_clubs', array('user_id'=>$auth->USERID), 'and', 'All');

?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
              <?php if(is_array($clubs) && count($clubs)){
				  $i=1;
				  foreach($clubs as $club){
					 $members = $DB->check('tbl_club_player_relation', array('club_id'=>$club['club_id']));	  
				  ?>    
				  <tr>
				    <td align="left"><strong><?php echo $i;?></strong></td>
                    <td align="left"><strong><?php echo $club['club_name'];?></strong>
					<br /><a href=""><?php echo $members;?> Members</a>
					<br /><a href="">Upload Images</a>
					</td>
                    <td align="right"><a href="<?php echo $general->url;?>/ajax/my_clubs.php?club_id=<?php echo $club['club_id'];?>" class="edit">Edit</a> | Invite Friends</td>
                </tr>
			<?php $i++; } }else{?>
				<tr>
				    <td align="left"><strong>No CLub Found</strong></td>
                </tr>  
			<?php }?>
</table>