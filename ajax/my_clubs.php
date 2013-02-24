<?php
include('../includes/config.php');

$auth->checkLogin(3);
$club_id = isset($_GET['club_id'])?intval($_GET['club_id']):0;
if($_GET['ajax']==1){
	$data = $_POST;
	$team_data['user_id'] = $auth->USERID;
	$team_data['club_name'] = $data['club_name'];
	unset($data['club_name']);
	$address = $data;
	
	if($DB->check('tbl_clubs', array('club_id'=>$club_id), 'and')){
		$DB->update('tbl_clubs', $team_data, array('club_id'=>$club_id), 'and');
		$DB->update('tbl_address', $data, array('term_id'=>$club_id, 'type'=>'club'), 'and');
	}else{
		$address['term_id'] = $DB->save('tbl_clubs', $team_data);
		$address['type'] = 'club';
		$address_id = $DB->save('tbl_address', $address);
		$DB->save('tbl_club_player_relation', array('user_id'=>$auth->USERID, 'club_id'=>$address['term_id']));
	}
	die;
}


$clubs = $DB->select('tbl_clubs', array('club_id'=>$club_id));
$address = $DB->select('tbl_address', array('term_id'=>$club_id, 'type'=>'club'));
?>
<form name="my_clubs" id="my_teams" action="<?php echo $general->url;?>/ajax/my_clubs.php?club_id=<?php echo $club_id;?>" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>Club Name:</strong></td>
    <td width="60%"><input name="club_name" value="<?php echo $clubs['club_name'];?>" /></td>
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