<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}

$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$profile = $DB->select('tbl_profile', array('user_id'=>$data['user_id']));
$address = $DB->select('tbl_address', array('term_id'=>$data['user_id'], 'type'=>'user'));
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
                  <tr>
                    <td width="24%" align="right"><strong>Name:</strong></td>
                    <td width="76%"><?php echo $data['first_name'].' '.$data['last_name'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>About You:</strong></td>
                    <td><?php echo $profile['about'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Gender:</strong></td>
                    <td><?php $general->gender($profile['gender'],'show');?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Age:</strong></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Date Of Birth: </strong></td>
                    <td><?php echo $profile['date_of_birth'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>State:</strong></td>
                    <td><?php $general->stateList($address['state']);?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>City:</strong></td>
                    <td><?php $general->cityList($address['city']);?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Address:</strong></td>
                    <td><?php echo nl2br($address['address']);?></td>
                  </tr>
                  <tr>
                    <td align="right"><a href="<?php echo $general->url;?>/cricketer/<?php echo $data['username'];?>.html">PreView Profile</a></td>
                    <td><a href="<?php echo $general->url;?>/ajax/basic_info.php" class="edit">Edit</a></td>
                  </tr>
                  
                </table>