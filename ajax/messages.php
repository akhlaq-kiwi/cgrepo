<?php
include('../includes/config.php');

$auth->checkLogin(3);
$msg_to = isset($_GET['msg_to'])?intval($_GET['msg_to']):0;
if($_GET['ajax']==1){
	$data = $_POST;
	$data['msg_from'] = $auth->USERID;
	if($DB->check('tbl_messages', array('message_id'=>$message_id), 'and')){
		$DB->update('tbl_messages', $data, array('club_id'=>$club_id), 'and');
	}else{
		$DB->save('tbl_messages', $data);
	}
	die;
}


$message = $DB->select('tbl_messages', array('message_id'=>$message_id));
?>
<form name="message" id="message" action="<?php echo $general->url;?>/ajax/messages.php" method="POST" >
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="40%" align="right"><strong>To:</strong></td>
    <td width="60%"><?php $general->userList($msg_to, 'list', $name='msg_to', $echo=true);?></td>
  </tr>
  <tr>
    <td width="40%" align="right"><strong>Message:</strong></td>
    <td width="60%"><textarea name="message"><?php echo $message['message'];?></textarea></td>
  </tr>
  <td align="right"><input class="button submit" name="submit" id="btn_my_teams" type="submit" value="Save" /></td>
    <td><input type="button" value="Cancel" class="cancel button" /></td>
  </tr>
</table>
</form>