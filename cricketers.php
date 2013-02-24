<?php
include('includes/config.php');

$data = $DB->select('tbl_user', array('username'=>$_GET['cricketer_id']));
$profile = $DB->select('tbl_profile', array('user_id'=>$data['user_id']));
$cricket_profile = $DB->select('tbl_cricket_profile', array('user_id'=>$data['user_id']));
$address = $DB->select('tbl_address', array('term_id'=>$data['user_id'], 'type'=>'user'));
$contact = $DB->select('tbl_contact', array('user_id'=>$data['user_id']));
$sql_team_data = "SELECT count(tpr.team_id) members, team_name FROM tbl_team_player_relation tpr inner join tbl_teams tt on tpr.team_id=tt.team_id where tpr.user_id='".$data['user_id']."' group by tpr.team_id";
$res_team_data = $DB->execute($sql_team_data);
$team_data = $DB->fecthAll($res_team_data);

$sql_club_data = "SELECT count(cpr.club_id) members, club_name FROM tbl_club_player_relation cpr inner join tbl_clubs tt on cpr.club_id=tt.club_id where cpr.user_id='".$data['user_id']."' group by cpr.club_id";
$res_club_data = $DB->execute($sql_club_data);
$club_data = $DB->fecthAll($res_club_data);

$age = date('Y')-intval($profile['date_of_birth']);
$data['meta_title'] = $data['first_name'].' '.$data['last_name'];


$adrs_to_point = $general->showAddress($data['user_id']).', India';
 
  $adrs_to_point = stripslashes($adrs_to_point);
 
  $apicall = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($adrs_to_point)."&sensor=false";
 
  $ret = $general->curl_fetch($apicall);
 
  $decoded = json_decode($ret,true);
 
  $latitude  = $decoded['results'][0]['geometry']['location']['lat'];
  $longitude = $decoded['results'][0]['geometry']['location']['lng'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Cricketer <?php echo $data['meta_title'];?> - CricketGali.com </title>
  <meta name="Keywords" content="<?php echo $data['meta_keyword'];?>">
  <meta name="Description" content="<?php echo $data['meta_desc'];?>">
  <link href="<?php echo $general->url;?>/css/styles.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo $general->url;?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $general->url;?>/js/calender/jquery-1.7.1.js"></script>
  <script src="<?php echo $general->url;?>/js/calender/ui/jquery.ui.core.js"></script>
  <script src="<?php echo $general->url;?>/js/calender/ui/jquery.ui.widget.js"></script>
  <script src="<?php echo $general->url;?>/js/calender/ui/jquery.ui.datepicker.js"></script>
  <link rel="stylesheet" href="<?php echo $general->url;?>/js/calender/demo.css">
  <script src="<?php echo $general->url;?>/js/script-ajax.js" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
 <script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
  });
</script>  
<script src="http://maps.google.com/maps?file=api&v=1&key=AIzaSyDz8MlA3JbBOuE75jD2vWOWIF1WJwS-v4M" type="text/javascript"></script>
<?php if(1){?>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27709921-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php }?>
</head>
 <body>
  <div id="main">
		
    <div id="banner">
<?php
 if($data['user_id']==$auth->USERID){?>
	<div class="poster"><a href="">Change Your Poster</a></div>  
<?php	}?>		
		  
    
		      <div class="top_menu_container"> 
		      
				<div class="login_box">
					<?php if($auth->USERID!=''){?>
					Welcome <?php echo $auth->NAME;?> | <a href="<?php echo $general->url;?>/logout.php">Logout</a>
					<?php }else{?>
						
					
					<form id="login" name="login" method="POST" action="<?php echo $general->url;?>/index.php?action=login" align="right"  >
					  <table border="0" cellspacing="2" cellpadding="0">
                        <tr>
							<td colspan="3">Already Mereber Login Here! | <a href="<?php echo $general->url;?>/index.php#register">New User</a></td>
						</tr>
						<tr>
                          <td><input type="text" class="txtbox" name="email" value="" /></td>
						  <td><input type="password" class="txtbox" name="password2" value="" /></td>
						  <td><input type="submit" name="Submit2" class="button" value="Login!" /></td>
                        </tr>
                       </table>
					</form>

					<?php }?>
				
				</div>
		      <div class="power_by">Powered By:<br><h1><a href="<?php echo $general->url;?>">CricketGali.com</a></h1></div>
		      <div class="clr"></div>
				<div class="top_menu" id="top_menu">
		  			<ul>
						<li style="border-color:#02ACE9;"><a class="blue" title="Home - CricketGali.com" href="<?php echo $general->url;?>">HOME</a></li>
						<li style="border-color:#2BBC3C;"><a class="green" title="About Us - CricketGali.com" href="<?php echo $general->url;?>/page/about_us.html">ABOUT US</a></li>
						<li style="border-color:#F00000;"><a class="red" title="Contact Us - CricketGali.com" href="<?php echo $general->url;?>/page/contact_us.html">CONTACT US</a></li>
						<li style="border-color:#E09600;"><a class="orenge" title="Help - CricketGali.com" href="<?php echo $general->url;?>/page/help.html">HELP</a></li>
					</ul>
				</div>
				</div>
	 </div>
	 
 <div id="content_profile">
 		<div class="profile_image_public"><img src="<?php echo $general->url;?>/uploads/Thumb.php?path=users/<?php echo $image->profileImage($data['user_id']);?>&width=180" /></div>
		<div class="personal_info">
			<div style="text-align:right;">
			
				<table align="right">
					<tr>
					<td><fb:like href="<?php echo $general->url;?>/cricketer/<?php echo $data['username']; ?>.html" layout="button_count" show_faces="false" width="50" action="like"  font="segoe ui" colorscheme="light" /></td>
					<td><g:plusone></g:plusone></td>
					</tr>
				</table>
				
			</div>
			<table summary="" width="100%">	
					<tr>
						<td><h1><?php echo $data['first_name'].' '.$data['last_name'].($cricket_profile['nick_name']!=''?'('.$cricket_profile['nick_name'].')':'');?></h1></td>					
					</tr>
					<?php if(isset($cricket_profile) && count($cricket_profile)){?><tr>
						<td><?php echo ucwords($cricket_profile['batting_style']).' Hand '.ucwords($cricket_profile['playing_role']).' with '.ucwords($cricket_profile['bowling_style']).' bowling. In the field '.ucwords(str_replace('_', ' ', $cricket_profile['fielding_position']));?></td>					
					</tr>
					<?php }?>
					<tr>
						<td><b>Age:</b> <?php echo $age;?> Years</td>					
					</tr>
					<tr>
						<td><b>Gender:</b> <?php $general->gender($profile['gender'],'show');?></td>					
					</tr>
					<tr>
						<td><b>Address:</b> <?php echo $general->showAddress($data['user_id'])?></td>					
					</tr>
				</table>
				<?php if($general->contact_info){?>
				<table summary="" width="100%" class="contact_info">	
					<?php if($contact['mobile_no']!='') {?>					
					<tr>
						<td><b>Mobile:</b> <?php echo $contact['mobile_no'];?></td>					
					</tr>
					<?php }?>
					<?php if($contact['alt_mobile_no']!='') {?>					
					<tr>
						<td><b>Alt. Mobile:</b> <?php echo $contact['alt_mobile_no'];?></td>					
					</tr>
					<?php }?>
					<?php if($contact['phone_no']!='') {?>					
					<tr>
						<td><b>Phone:</b> <?php echo $contact['phone_no'];?></td>					
					</tr>
					<?php }?>
					<?php if($contact['alt_email']!='') {?>					
					<tr>
						<td><b>Additional Email:</b> <?php echo $contact['alt_email'];?></td>					
					</tr>
					<?php }?>
				</table>
				<?php }?>
					
		</div>
		<div class="clr"></div>
		<div class="about"><?php echo $profile['about'];?></div>
		<div class="teams">
			<table width="100%">
				<tr>
					<td class="new_items_head" width="50%">My Teams</td>
					<td class="new_items_head" width="50%">MyClubs</td>
				</tr>
				<tr>
					<td valign="top">
					<ul>
					<?php if(is_array($team_data) && count($team_data)){
						foreach($team_data as $td){?>
						<li><?php echo $td['team_name']?><span><?php echo $td['members'];?> member(s)</span></li>
					<?php } }else{?>
						<li>No Team Joined Yet!</li>
					<?php }?>
					</ul>
					</td>
					<td valign="top"><ul>
					<?php if(is_array($club_data) && count($club_data)){
						foreach($club_data as $cd){?>
						<li><?php echo $cd['club_name']?><span><?php echo $cd['members'];?> member(s)</span></li>
					<?php } }else{?>
						<li>No Club Joined Yet!</li>
					<?php }?>
					</ul></td>
				</tr>
			</table>
		</div>
		<div id="map" class="map"></div>
		<script type="text/javascript">
		var map = new GMap(document.getElementById("map"));
		var point = new GPoint(<?php echo $longitude; ?>,<?php echo $latitude; ?>);
		var address = "<?php echo $adrs_to_point;?>";
		var mark = createInfoMarker(point, address);
		map.addOverlay(mark);
		function createInfoMarker(point, address) {
			var marker = new GMarker(point);
			map.centerAndZoom(point, 3);
			
			GEvent.addListener(marker,"mouseover",
			function() {
			marker.openInfoWindowHtml(address);
		}
		);
		return marker;
		}
		</script>
 </div>
  <div class="advertise">
		<img src="<?php echo $general->url;?>/images/adv.png" />
 		</div>
 		<div class="clr"></div>
	</div>
 <?php include('footer.php');?>
</body>
</html>