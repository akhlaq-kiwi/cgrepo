<?php
if($_GET['ajax']==1){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$cricket_profile = $DB->select('tbl_cricket_profile', array('user_id'=>$auth->USERID));
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3">
                  <tr>
                    <td width="24%" align="right"><strong>Nick Name:</strong></td>
                    <td width="76%"><?php echo $cricket_profile['nick_name'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Playing Role:</strong></td>
                    <td><?php echo $cricket_profile['playing_role'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Batting Style:</strong></td>
                    <td><?php echo $cricket_profile['batting_style'];?></td>
                  </tr>
                  <tr>
                    <td align="right"><strong>Bowling Style: </strong></td>
                    <td><?php echo $cricket_profile['bowling_style'];?></td>
                  </tr>
				  <tr>
                    <td align="right"><strong>Fielding position: </strong></td>
                    <td><?php echo $cricket_profile['fielding_position'];?></td>
                  </tr>
                
</table>