<?php
include('includes/config.php');

$auth->checkLogin(3);

$data = $DB->select('tbl_user', array('user_id'=>$auth->USERID));
$profile = $DB->select('tbl_profile', array('user_id'=>$auth->USERID));

$data['meta_title'] = $data['first_name'].' '.$data['last_name'];

?>

 <?php include('header-inner.php');?>
 <div id="content">
 
			<div id="profile_left">
				<?php include('profile_left.php');?>
			</div>

			<div id="profile_content">
				<h1 class="inner_title"><span>Upload Photo</span></h1>
				<?php $auth->showMsg();?>
			  <div id="profile_content_inner">
			  <?php include('ajax/upload_photo.php');?>
			  </div>
			</div>
			<div class="clr"></div>
 </div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
