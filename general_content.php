<?php
include('includes/config.php');
if($_GET['country']!=''){
	$rep_data = $_GET['country'];
}else if($_GET['state']!=''){
	$rep_data = $_GET['state'];
}else if($_GET['city']!=''){
	$rep_data = $_GET['city'];
	$city_data = $DB->select('tbl_cities', array('city_uri'=>$rep_data));
}else{
	$rep_data = 'India';
}
print_r($_GET);

$head_show = 'India';//ucwords(str_replace('_', ' ', $rep_data));

$content_type = $_GET['content_type'];
$data1 = $DB->select('tbl_pages', array('type'=>$_GET['content_type']));
if($data1==0){
	$auth->redirect($general->url.'/404.html');
}
$data = $general->replaceInArray($data1, ucwords(str_replace('_', ' ',$rep_data)), '#rep#');


?>

 <?php include('header-inner.php');?>
 <div id="content">
 <?php $auth->showMsg();?>
			<div id="general_left">
				<?php include('state_city.php');?>
			</div>

			<div id="general_content">
				<h1 class="inner_title"><?php echo $data['title'];?></h1>
				<div class="general_content_inner"><?php echo $data['content'];?></div>
				<?php if($content_type=='cricketers'){
					include_once 'cricketers_list.php';
				 }elseif ($content_type=='clubs') {
					include_once 'clubs_list.php';
				 }?>
			</div>
			<div id="general_right">
				 jghj ghj ghj
			</div>
			<div class="clr"></div>
		</div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
