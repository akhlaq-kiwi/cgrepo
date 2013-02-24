<?php
require('includes/config.php');

if (isset($_POST) && $_POST['submit']=='Send') {
	@extract($_POST);
	$to = 'info@cricketgali.com';

	// subject
	$subject = 'Enquiry/feedback received on CricketGali.com';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: Admin <info@cricketgali.com>' . "\r\n";
	$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);

	$auth->setMsg("Thank you for your feedback, we will get back to you soon!");
	$auth->redirect($general->url."/page/contact_us.html");
}

$data['meta_title'] = "Contact Us - CricketGali.com";
$data['meta_keyword'] = "Contact Us - CricketGali.com";
$data['meta_description'] = "Contact Us - CricketGali.com";
?>

 <?php include('header-inner.php');?>
 <script type="text/javascript">
 	function validatecontact(frm){
 		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 		

 		if(frm.name.value==''){
 			alert("Please Enter your name!");
 			frm.name.focus();
 			return false;
 		}
 		if(!re.test(frm.email.value)){
 			alert("Please Enter valid email address!");
 			frm.message.focus();
 			return false;
 		}
 		if(frm.message.value==''){
 			alert("Please Enter your Message!");
 			frm.message.focus();
 			return false;
 		}
 	}
 </script>
 <div id="content">
 <?php $auth->showMsg();?>
			<h1 class="inner_title">Contact Us</h1>
			<div class="inner-content">
				<?php $auth->showMsg();?>
				Thank you for showing your interest in crikctegali.com, If you have any query and suggestions you can send us by form below or direct to <a href="mailto:info@cricketgali.com">info@cricketgali.com</a>. You can help us to improve this website by sending you feedback.

				<FORM name="contact_us" method="POST" acrion="<?php echo $general->url ?>/pages/contact_us.html">
					<table>
						<tr>
							<td>Name:</td><td><input type="text" name="name" value="" /></td>
						</tr>
						<tr>
							<td>Email:</td><td><input type="text" name="email" value="" /></td>
						</tr>
						<tr>
							<td>Your Message:</td><td><textarea cols="40" name="message" ></textarea></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" name="submit" value="Send" onclick="return validatecontact(this.form);" /></td>
						</tr>
					</table>
				</FORM>
				
			</div>
			<div class="inner-right">
				
			</div>
			<div class="clr"></div>
	</div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
