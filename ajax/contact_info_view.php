<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$contact = $DB->select('tbl_contact', array('user_id'=>$auth->USERID));
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
                  <tr>
                    <td width="24%" align="right"><strong>Alternate Email:</strong></td>
                    <td width="76%"><?php echo $contact['alt_email'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Mobile No:</strong></td>
                    <td><?php echo $contact['mobile_no'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Alternate Mobile No:</strong></td>
                    <td><?php echo $contact['alt_mobile_no'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Phone No: </strong></td>
                    <td><?php echo $contact['phone_no'];?></td>
                  </tr>
                
</table>