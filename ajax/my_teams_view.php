<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$teams = $DB->select('tbl_teams', array('user_id'=>$auth->USERID), 'and', 'All');

?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
              <?php if(is_array($teams) && count($teams)){
				  $i=1;
				  foreach($teams as $team){
					 $members = $DB->check('tbl_team_player_relation', array('team_id'=>$team['team_id']));	  
				  ?>    
				  <tr>
				    <td align="left"><strong><?php echo $i;?></strong></td>
                    <td align="left"><strong><?php echo $team['team_name'];?></strong>
					<br /><a href=""><?php echo $members;?> Members</a>
					</td>
                    <td align="right"><a href="<?php echo $general->url;?>/ajax/my_teams.php?team_id=<?php echo $team['team_id'];?>" class="edit">Edit</a> | Invite Friends</td>
                  </tr>
			  <?php $i++; } }?>
</table>