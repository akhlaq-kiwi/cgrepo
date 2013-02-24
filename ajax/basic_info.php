<?php
include('../includes/config.php');
//hello changes to check
$auth->checkLogin(3);

if($_GET['ajax']==1){
	$data = $_POST;
	$data['user_id'] = $auth->USERID;
	$data_user['first_name'] = $data['first_name'];
	$data_user['last_name'] = $data['last_name'];
	$address = $data;
	
	unset($data['first_name'], $data['last_name'],  $data['state'], $data['city'], $data['address']);
	unset($address['first_name'], $address['last_name'],  $address['date_of_birth'], $address['gender'], $address['user_id'], $address['about']);
	if($DB->check('tbl_profile', array('user_id'=>$auth->USERID), 'and')){
		$DB->update('tbl_profile', $data, array('user_id'=>$auth->USERID), 'and');
		$DB->update('tbl_user', $data_user, array('user_id'=>$auth->USERID), 'and');
		$address['term_id'] = $auth->USERID;
		$address['type'] = 'user';
		$address_id = $DB->update('tbl_address', $address, array('term_id'=>$auth->USERID), 'and');
	}else{
		$DB->save('tbl_profile', $data);
		$address['term_id'] = $auth->USERID;
		$address['type'] = 'user';
		$address_id = $DB->save('tbl_address', $address);
	}
	die;
}

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$profile = $DB->select('tbl_profile', array('user_id'=>$auth->USERID));
$address = $DB->select('tbl_address', array('term_id'=>$auth->USERID, 'type'=>'user'));
?>
<form name="basic_info" id="basic_info" action="<?php echo $general->url;?>/ajax/basic_info.php" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>First Name:</strong></td>
    <td width="60%"><input name="first_name" value="<?php echo $data['first_name'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Last Name:</strong></td>
    <td><input name="last_name" value="<?php echo $data['last_name'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>About You:</strong></td>
    <td><textarea name="about"><?php echo $profile['about'];?></textarea>
	</td>
  </tr>
  <tr>
    <td align="right"><strong>Gender:</strong></td>
    <td><?php $general->gender($profile['gender']);?>
	</td>
  </tr>
  <tr>
    <td align="right"><strong>Date Of Birth: </strong></td>
    <td><input type="text" name="date_of_birth" class="date" value="<?php echo $profile['date_of_birth'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>State:</strong></td>
    <td><?php $general->stateList($address['state'], 'list', 'state', 'show');?></td>
  </tr>
  <tr>
    <td align="right"><strong>City:</strong></td>
    <td><div id="city_container"><?php $general->cityList($address['city'], 'list', 'city', $profile['state']);?></div></td>
  </tr>
  <tr>
    <td align="right"><strong>Address:</strong></td>
    <td><textarea name="address"><?php echo $address['address'];?></textarea></td>
  </tr>
  <tr>
    <td align="right"><input class="button submit" name="submit" id="btn_basic_info" type="submit" value="Save" /></td>
    <td><input type="button" value="Cancel" class="cancel button" /></td>
  </tr>
</table>
</form>