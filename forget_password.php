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
function validatecontact(frm_frgpwd){

var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


if(frm_frgpwd.forget_email.value==''){
	alert("Please Enter e-mail!");
	//frm.name.focus();
	return false;
}
if(!re.test(frm_frgpwd.forget_email.value)){
	alert("Please Enter valid email address!");
	//frm.message.focus();
	return false;
}

}
 </script>
			<?php 
			
			
			if(isset($_POST['forget_email'])){
			$email=$_POST['forget_email'];

			 $sql="SELECT user_id  FROM `tbl_user` where `email`='$email'";
			 $arrusr=mysql_fetch_assoc( $DB->execute($sql));
			 $user_id=$arrusr['user_id'];
			 if($user_id==''){
			 
			 $msg="This e-mail is not exist!";
			 }else{
			 
			
			$homeurl=$general->url;
			$url_to_reset_password=$homeurl.'/reset_password.php?uid='.$user_id;
            
			$to      = $email;
			$subject = 'Reset your CricketGali.com password';
			$message = "To reset your cricketgali.com password<a href=".$url_to_reset_password.">Click Here</a>";
			
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers
			$headers .= 'To: User <'.$email.'>' . "\r\n";
			$headers .= 'From: Change Password <info@clicketgali.com>' . "\r\n";
			
			mail($to, $subject, $message, $headers);

			$update_status_qur="UPDATE `tbl_user` SET pwd_status='1' where user_id ='$user_id'";

            mysql_query($update_status_qur);


			// header("location:$url_to_reset_password");
			 $msg="Please check your e-mail to reset your password!";
			 
			 }

			}
			
			?>

			<div id="general_content">
				<h1 class="inner_title">Forget Password</h1>
				<table>
				<tr><td colspan="2">&nbsp;<?php if($msg!=''){echo $msg;}?></td><tr>
				
				<form action="" method="post" name="frm_frgpwd">
				<tr><td><strong>Enter e-mail:</strong></td>
				<td><input type="text" class="txtbox" name="forget_email" id="forget_pwd" size="35"><td>
				<tr>
				<tr><td colspan="2">&nbsp;</td><tr>
				<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Click To Submit"  onclick="return validatecontact(this.form);" ></td><tr>
				
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
