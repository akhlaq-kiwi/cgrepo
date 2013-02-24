<?php
include('../includes/config.php');

$auth->checkLogin(3);

if($_GET['ajax']==1){
	$data = $_POST;
	$data['user_id'] = $auth->USERID;
	
	if($DB->check('tbl_contact', array('user_id'=>$auth->USERID), 'and')){
		$DB->update('tbl_contact', $data, array('user_id'=>$auth->USERID), 'and');
	}else{
		$DB->save('tbl_contact', $data);
	}
	die;
}

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$contact = $DB->select('tbl_contact', array('user_id'=>$auth->USERID));
?>
<form name="contact_info" id="contact_info" action="<?php echo $general->url;?>/ajax/contact_info.php" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>Alternate Email:</strong></td>
    <td width="60%"><input name="alt_email" value="<?php echo $contact['alt_email'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Mobile No:</strong></td>
    <td><input name="mobile_no" value="<?php echo $contact['mobile_no'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Alternate Mobile No:</strong></td>
    <td><input name="alt_mobile_no" value="<?php echo $contact['alt_mobile_no'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Phone No:</strong></td>
    <td><input type="text" name="phone_no" value="<?php echo $contact['phone_no'];?>" /></td>
  </tr>
  <tr>
    <td align="right"><input class="button submit" name="submit" id="btn_contact_info" type="submit" value="Save" /></td>
    <td><input type="button" value="Cancel" class="cancel button" /></td>
  </tr>
</table>
</form>