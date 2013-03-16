<?php
include('includes/config.php');
$data['meta_title'] = 'Cricket Live Score | Live Match | Cricket Commentry';
$data['meta_keyword'] = 'Cricket Live Score, Live Match, Cricket Commentry';
$data['meta_description'] = 'Cricket gali.com provide Cricket Live Score, Live Match and Live Cricket Commentry';
?>

 <?php include('header-inner.php');?>
 <div id="content">
 <?php $auth->showMsg();?>
			<div id="general_left">
				<?php //include('state_city.php');?>
			</div>
<script type="text/javascript">
function validatecontact(frm_reset){


if(frm_reset.new_pwd.value==''){
	alert("Please Enter new password!");
	//frm.name.focus();
	return false;
}
if(frm_reset.re_new_pwd.value==''){
	alert("Please Enter re-type password!");
	//frm.name.focus();
	return false;
}

}
 </script>
<?php 

$uid=$_REQUEST['uid'];

$sql="SELECT pwd_status  FROM `tbl_user` where `user_id`='$uid'";
$arrusr=mysql_fetch_assoc( $DB->execute($sql));
$pwd_status=$arrusr['pwd_status'];


if(isset($_POST['submit']) and $pwd_status=='1'){
 $newpwd=$_POST['new_pwd'];

 $sql="UPDATE `tbl_user` SET password='$newpwd' where user_id ='$uid'";

 if(mysql_query($sql)){
 $update_status_qur="UPDATE `tbl_user` SET pwd_status='0' where user_id ='$uid'";

  mysql_query($update_status_qur);


 
 $msg="Your password is reset successfully!";
 }
 else{
 
$msg="An error occured in reset password!";
 
 }
}else{

$msg="This link is expired!";
}

?>

			<div id="general_content">
				<h1 class="inner_title">Reset Password</h1>
				<table>
				<tr><td colspan="2">&nbsp;<?php if($msg!=''){echo $msg;}?></td><tr>
				
				<form action="" method="post" name="frm_reset">
				<tr><td><strong>Enter new password:</strong></td>
				<td><input type="password" class="txtbox" name="new_pwd" id="new_pwd" size="35"><td>
				<tr>
				<tr><td colspan="2">&nbsp;</td><tr>
				<tr><td><strong>Re-type password:</strong></td>
				<td><input type="password" class="txtbox" name="re_new_pwd" id="re_new_pwd" size="35"><td>
				<tr>
				<tr><td colspan="2">&nbsp;</td><tr>
				<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Reset Password"  onclick="return validatecontact(this.form);" ></td><tr>
				
				</form>
				</table>
				
			</div>
			<div id="general_right">
				 Ads here
			</div>
			<div class="clr"></div>
		</div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
