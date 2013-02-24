<?php
include('../includes/config.php');

$auth->checkLogin(3);

if($_GET['ajax']==1){
	$data = $_POST;
	$data['user_id'] = $auth->USERID;
	
	if($DB->check('tbl_cricket_profile', array('user_id'=>$auth->USERID), 'and')){
		$DB->update('tbl_cricket_profile', $data, array('user_id'=>$auth->USERID), 'and');
	}else{
		$DB->save('tbl_cricket_profile', $data);
	}
	die;
}

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$cricket_profile = $DB->select('tbl_cricket_profile', array('user_id'=>$auth->USERID));
?>
<form name="cricket_profile" id="cricket_profile" action="<?php echo $general->url;?>/ajax/cricket_profile.php" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>Nick Name::</strong></td>
    <td width="60%"><input name="nick_name" value="<?php echo $cricket_profile['nick_name'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Playing Role:</strong></td>
    <td><?php echo $general->selectList('playing_role', $general->playing_role, $cricket_profile['playing_role']);?></td>
  </tr>
  <tr>
    <td align="right"><strong>Batting Style:</strong></td>
    <td><?php echo $general->selectList('batting_style', $general->batting_style, $cricket_profile['batting_style']);?></td>
  </tr>
  <tr>
    <td align="right"><strong>Bowling Style:</strong></td>
    <td><?php echo $general->selectList('bowling_style', $general->bowling_style, $cricket_profile['bowling_style']);?></td>
  </tr>
  <tr>
    <td align="right"><strong>Fielding position:</strong></td>
    <td><?php echo $general->selectList('fielding_position', $general->fielding_position, $cricket_profile['fielding_position']);?></td>
  </tr>
  <tr>
    <td align="right"><input class="button submit" name="submit" id="btn_cricket_profile" type="submit" value="Save" /></td>
    <td><input type="button" value="Cancel" class="cancel button" /></td>
  </tr>
</table>
</form>