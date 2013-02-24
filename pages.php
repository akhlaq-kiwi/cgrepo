<?php
require('includes/config.php');
$data = $DB->select('tbl_pages', array('uri'=>$_GET['page_uri'], 'STATUS'=>1), 'and');
if($data==0){
	$auth->redirect($general->url.'/404.html');
}
?>

 <?php include('header-inner.php');?>
 <div id="content">
 <?php $auth->showMsg();?>
			<h1 class="inner_title"><?php echo $data['title'];?></h1>
			<div class="inner-content">
				<?php echo $data['content'];?> 
			</div>
			<div class="inner-right">
				
			</div>
			<div class="clr"></div>
	</div>
	</div>
 <?php include('footer.php');?>
</body>
</html>
