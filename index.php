<?php
require('includes/config.php');
$auth->checkLoginHome($general->url.'/home');

if(isset($_POST)){
	if($_GET['action']=='register' && $_POST['Submit']=='Register!'){
		if($_POST['email']!='' && $_POST['password']!='' && $_POST['confirm_password']!=''){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])){
				if($_POST['password']==$_POST['confirm_password']){
					$_POST['role'] = 3;
					$_POST['status'] = 1;
					unset($_POST['confirm_password']);
					$username = preg_replace('/[^a-zA-Z0-9\']/', '_', substr($_POST['email'],0, strpos($_POST['email'],'@')));		
					$_POST['username'] = $username;
							
					if(!$DB->check('tbl_user', array('email'=>$_POST['email']))){
						if($DB->save('tbl_user', $_POST)){
							$data = $DB->select('tbl_user', array('email'=>$_POST['email'], 'password'=>$_POST['password']), 'and');
							$login_data['NAME']= $data['first_name']==''?$data['email']:$data['first_name'];
							$login_data['EMAIL']= $data['email'];
							$login_data['USERID']= $data['user_id'];
							$login_data['ROLE']= $data['role'];
							$auth->login($login_data);
							$auth->setMsg("Your registration done successfully!");
							$auth->redirect('profile.php');
						}else{
							$auth->setMsg("Error Occurred, Try Again!");
						}
						$auth->redirect("index.php");
					}else{
						$auth->setMsg("Email Already Exist!");
					}
				}else{
					$auth->setMsg("Password do not match!");
				}
			}else{
				$auth->setMsg("Please enter a valid email address!");
			}
		}else{
			$auth->setMsg("Some field are left blank, which are mandatory!");
		}
	}

	if($_GET['action']=='login' && $_POST['Submit2']=='Login!'){
		

		if($_POST['email']!='' && $_POST['password2']!=''){
			unset($_POST['Submit2']);
					
			//print_r($_POST);
			if($DB->check('tbl_user', array('email'=>$_POST['email'], 'password'=>$_POST['password2']), 'and')){
				$data = $DB->select('tbl_user', array('email'=>$_POST['email'], 'password'=>$_POST['password2']), 'and');
				$login_data['NAME']= $data['first_name']==''?$data['email']:$data['first_name'];
				$login_data['EMAIL']= $data['email'];
				$login_data['USERID']= $data['user_id'];
				$login_data['ROLE']= $data['role'];
				$auth->login($login_data);
				if($data['role']==1 || $data['role']==2){
					$auth->redirect('admin/index.php');
				}else{
					if($_GET['redirect']!=''){
						$auth->redirect($_GET['redirect']);
					}else{
						$auth->redirect('profile.php');
					}
				}
			}else{
				$auth->setMsg("Invalid Email/Password!");
			}
		}
		else{
			$auth->setMsg("Email/Password can not be left blank!");
		}
	}
}
@extract($_POST);
$new_members = $DB->select('tbl_user',array(1=>1),'and', 'all', '0','5','user_id','desc');
$new_teams = $DB->select('tbl_teams',array(1=>1),'and', 'all', '0','5','user_id','desc');
$new_clubs = $DB->select('tbl_clubs',array(1=>1),'and', 'all', '0','5','user_id','desc');
?>

 <?php include('header.php');?>
<script type="text/javascript">
	function validateForm(frm){
		if(frm.first_name.value==''){
			alert("Enter Your First Name!");
			frm.first_name.focus();
			return false;
		}
		if(frm.last_name.value==''){
			alert("Enter Your Last Name!");
			frm.email.focus();
			return false;
		}
		if(frm.email.value==''){
			alert("Enter Email address!");
			frm.email.focus();
			return false;
		}
		if(!validateEmail(frm.email.value)){
			alert("Enter valid Email address!");
			frm.email.focus();
			return false;
		}
		if(frm.password.value==''){
			alert("Enter your password!");
			frm.password.focus();
			return false;
		}
		if(frm.password.value!=frm.confirm_password.value){
			alert("Confirm password do not match!");
			frm.confirm_password.focus();
			return false;
		}
	}
</script>

 <div id="content">
 <?php $auth->showMsg();?>
			<div class="text">
				<h1>Welcome to CricketGali.com</h1>
				<p>CricketGali.com is cricket social networking website where you can create your cricket team and your own cricket club. The concept of CricketGali.com is to provide a plateform where anyone can find people to play crciket match with them. In this busy schedule it is very hard to arrange cricket players to challenge them so CricketGali.com is a place where any one can find players to play match with them. This is very simple, only one step registration and create your team and ask your friends to join your team and support it so join now, It is free. </p> 

				<div class="new_items">
					<div class="new_items_head">New Members! <a href="<?php echo $general->url;?>/cricketers-in-india" class="view_all" >View All</a></div>
					<div class="new_items_List">
						<?php if(is_array($new_members) && count($new_members)){?>
							<ul class="new_items">
							<?php foreach($new_members as $nm){?>
								<li>
									<div class="home_image"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($nm['user_id']);?>&width=96" /></div>
									<div class="home_name"><a href="<?php echo $general->url;?>/cricketer/<?php echo $nm['username'];?>.html"><?php echo $nm['first_name']!=''?$nm['first_name']:substr($nm['email'],0,strpos($nm['email'], '@'))?></a></div>
									
								</li>
							<?php } ?>
							</ul>
						
						<?php }else{ echo 'No New Member Found!';}?>
						<div style="clear:both"></div>
					</div>
				
				</div>
				<div class="new_items">
					<div class="new_items_head">New Teams</div>
					<div class="new_items_List">
						<?php if(is_array($new_teams) && count($new_teams)){?>
							<ul class="new_items">
							<?php foreach($new_teams as $nt){?>
								<li>
									<div class="home_image"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($nt['team_id']);?>&width=96" height="120" width="96"/></div>
									<div class="home_name"><?php echo substr($nt['team_name'],0,10);?></div>
								</li>
							<?php } ?>
							</ul>
						
						<?php }else{ echo 'No New Team Found!';}?>
						<div style="clear:both"></div>
					</div>
				</div>
				<div class="new_items">
,					<div class="new_items_head">New Clubs </div>
					<div class="new_items_List">
						<?php if(is_array($new_clubs) && count($new_clubs)){?>
							<ul class="new_items">
							<?php foreach($new_clubs as $nc){?>
								<li>
									<div class="home_image"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($nc['club_id']);?>&width=96" height="120" width="96" /></div>
									<div class="home_name"><?php echo $nc['club_name'];?></div>
								</li>
							<?php } ?>
							</ul>
						
						<?php }else{ echo 'No New Club Found!';}?>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>
			<a id="register"></a>
			<div class="box_container">
				<div class="box">
					<div class="box_top">
						Like Us On FaceBook.com
					</div>
					<div class="box_middle" style="padding:10px 0 0 10px;">
						<table>
							<tr>
								<td><g:plusone></g:plusone></td>
								<td><fb:like href="http://www.facebook.com/pages/CricketGali/206772812754522" layout="button_count" show_faces="false" width="50" action="like"  font="segoe ui" colorscheme="light" /></td>
							</tr>
						</table>
					</div>
					<div class="box_bottom"><img src="images/box-bottom.jpg"></div>
				</div>
				<div class="box">
					<div class="box_top">
						New User, Register Here!
					</div>
					<div class="box_middle">
					<form id="register" name="register" method="post" action="index.php?action=register">
					  <table width="100%" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="43%" align="right"><b>First Name:</b></td>
                          <td width="57%"><label>
                            <input type="text" class="txtbox" name="first_name" value="<?php echo $first_name;?>" />
                          </label></td>
                        </tr>
						<tr>
                          <td width="43%" align="right"><b>Last Name:</b></td>
                          <td width="57%"><label>
                            <input type="text" class="txtbox" name="last_name" value="<?php echo $last_name;?>" />
                          </label></td>
                        </tr>
						<tr>
                          <td width="43%" align="right"><b>Email:</b></td>
                          <td width="57%"><label>
                            <input type="text" class="txtbox" name="email" value="<?php echo $email;?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td align="right"><b>Password:</b></td>
                          <td><input type="password" class="txtbox" name="password" value="" /></td>
                        </tr>
                        <tr>
                          <td align="right"><b>Confirm Password:</b> </td>
                          <td><input type="password" class="txtbox" name="confirm_password" value=""></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" class="button" name="Submit" value="Register!" onclick="return validateForm(this.form);" /></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
					  </form>
					</div>
					<div class="box_bottom"><img src="images/box-bottom.jpg"></div>
				</div>
				<div class="clr"></div>	
				<!--<div class="featured_box">
				dsfsdfsdf
				</div>-->			
			</div>
			
			<div class="clr"></div>	
		</div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
