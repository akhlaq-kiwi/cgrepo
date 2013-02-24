<?php
include('../includes/config.php');

$auth->checkLogin(3);
$team_id = isset($_GET['team_id'])?intval($_GET['team_id']):0;
if($_GET['ajax']==1){
	$data = $_POST;
	$team_data['user_id'] = $auth->USERID;
	$team_data['team_name'] = $data['team_name'];
	unset($data['team_name']);
	$address = $data;
	
	if($DB->check('tbl_teams', array('team_id'=>$team_id), 'and')){
		$DB->update('tbl_teams', $team_data, array('team_id'=>$team_id), 'and');
		$DB->update('tbl_address', $data, array('term_id'=>$team_id, 'type'=>'team'), 'and');
	}else{
		$address['term_id'] = $DB->save('tbl_teams', $team_data);
		$address['type'] = 'team';
		$address_id = $DB->save('tbl_address', $address);
		$DB->save('tbl_team_player_relation', array('user_id'=>$auth->USERID, 'team_id'=>$address['term_id']));
	}
	die;
}


$teams = $DB->select('tbl_teams', array('team_id'=>$team_id));
$address = $DB->select('tbl_address', array('term_id'=>$team_id, 'type'=>'team'));
?>
<form name="my_teams" id="my_teams" action="<?php echo $general->url;?>/ajax/my_teams.php?team_id=<?php echo $team_id;?>" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>Team Name:</strong></td>
    <td width="60%"><input name="team_name" value="<?php echo $teams['team_name'];?>" /></td>
  </tr>
  <tr>
    <td width="40%" align="right"><strong>State:</strong></td>
    <td width="60%"><?php $general->stateList($address['state'], 'list', 'state', 'show');?></td>
  </tr>
  <tr>
    <td width="40%" align="right"><strong>City:</strong></td>
    <td width="60%"><div id="city_container"><?php $general->cityList($address['city'], 'list', 'city', $profile['state']);?></div></td>
  </tr>
  <tr>
    <td width="40%" align="right"><strong>Address:</strong></td>
    <td width="60%"><textarea name="address"><?php echo $address['address'];?></textarea></td>
  </tr>
  <td align="right"><input class="button submit" name="submit" id="btn_my_teams" type="submit" value="Save" /></td>
    <td><input type="button" value="Cancel" class="cancel button" /></td>
  </tr>
</table>
</form>