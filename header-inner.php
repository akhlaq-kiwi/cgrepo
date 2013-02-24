<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title><?php echo $data['meta_title'];?> - CricketGali.com </title>
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
  <?php if(0){?>
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
		
    <div id="header">
		    <div class="logo">
		      <a href="<?php echo $general->url;?>" title="Play Cricket, Cricket Club, Cricket Team, Cricketer Profile"><img src="<?php echo $general->url;?>/images/logo.jpg" alt="CricketGali.com" border="0" /></a>		      
		    </div>
	    	<div class="accountinfo">
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
						  <td><input type="submit" name="Submit2" value="Login!" /></td>
                        </tr>
                       </table>
					</form>

					<?php }?>
				</div>
				<div class="top_menu" id="top_menu">
		  			<ul>
						<li style="border-color:#02ACE9;"><a class="blue" title="Home - CricketGali.com" href="<?php echo $general->url;?>">HOME</a></li>
						<li style="border-color:#2BBC3C;"><a class="green" title="About Us - CricketGali.com" href="<?php echo $general->url;?>/page/about_us.html">ABOUT US</a></li>
						<li style="border-color:#F00000;"><a class="red" title="Contact Us - CricketGali.com" href="<?php echo $general->url;?>/page/contact_us.html">CONTACT US</a></li>
						<li style="border-color:#E09600;"><a class="orenge" title="Help - CricketGali.com" href="<?php echo $general->url;?>/page/help.html">HELP</a></li>
					</ul>
				</div>
			</div>
			<div class="clr"></div>
			<div class="main_menu">
					<ul>
						<li><a href="<?php echo $general->url.'/clubs-in-india';?>">CLUBS</a></li>
						<li><a href="<?php echo $general->url.'/teams-in-india';?>">TEAMS</a></li>
						<li><a href="<?php echo $general->url.'/cricketers-in-india';?>">CRICKETERS</a></li>
						<li><a href="<?php echo $general->url.'/livescore';?>">LIVE SCORE</a></li>
					</ul>
			</div>
			<div class="search">
				<input type="text" name="keyword" value="" /><input type="button" name="search_btn" value="GO" />
			</div>
		 </div>   
		 
    	