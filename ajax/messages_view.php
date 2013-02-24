<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$messages = $DB->select('tbl_messages', array('msg_to'=>$auth->USERID, 'msg_from'=>$auth->USERID), 'or', 'All');

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <?php if(is_array($messages) && count($messages)){
				  $i=1;
				  foreach($messages as $message){
				  $class = (($message['status']==0 and $message['msg_from']!=$auth->USERID)?'unread':'read');
				  ?>    
				  <tr>
				  <td><table class="read <?php echo $class;?>" id="" cellspacing="0" cellpadding="5" width="100%">
					  <tr>
						<td width="30" align="left"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($message['msg_to']);?>&width=50" /></td>
						<td width="100" align="left"><strong><?php $general->userList($message['msg_to']);?><br /><?php if($auth->USERID==$message['msg_to']) echo 'Recived'; else echo 'Sent' ;?></td>
						<td align="left"><?php echo $message['message'];?></td>
						<td width="100" align="right"><a href="<?php echo $general->url;?>/ajax/messages.php?msg_to=<?php echo $message['msg_from'];?>" class="edit">Reply</a> | <a href="">Delete</a></td>
					</tr>
					</table></td></tr>
			<?php $i++; } }else{?>
				<tr>
				    <td align="left"><strong>No Message Found</strong></td>
                </tr>  
			<?php }?>
</table>