<?php
if($_GET['ajax']){
include_once('../includes/config.php');
}else{
include_once('includes/config.php');
}
if(isset($_GET['action']) && $_GET['action']=='change_image'){
	$DB->update('tbl_image', array('profile_image'=>0), array('user_id'=>$auth->USERID));
	$DB->update('tbl_image', array('profile_image'=>1), array('image_id'=>$_GET['image_id']));
}

if(isset($_GET['delete']) && $_GET['delete']!=''){
	$image = $DB->select('tbl_image', array('image_id'=>$_GET['delete']));
	unlink($general->path.'uploads/users/'.$image['name']);
	$DB->delete('tbl_image', array('image_id'=>$_GET['delete']));
}
if(isset($_POST) && $_FILES['image_name']['name']!=''){
	$name = $_FILES['image_name']['name'];
	$name = $image->getName($name);
	if(move_uploaded_file($_FILES['image_name']['tmp_name'], $general->path.'uploads/users/'.$name)){
		$data = array('user_id'=>$auth->USERID, 'name'=>$name, 'profile_image'=>0);
		$DB->save('tbl_image', $data);
		$auth->setMsg('Image Uploaded Successfully!');
	}else{
		$auth->setMsg('Error Occured in uploading in Image!');
	}
}
$images = $DB->select('tbl_image', array('user_id'=>$auth->USERID),'and', 'all');

if(isset($images) && count($images)){
	$img_txt = '';
	$i=1;
	foreach($images as $image){
		$img_txt .= '<div id="img'.$i.'" class="thumb_image"><img width="134" height="150" id="'.$image['image_id'].'" src="'.$general->url.'/uploads/Thumb.php?path=users/'.$image['name'].'&width=134" /><br />
		<a href="'.$general->url.'/ajax/upload_photo.php?delete='.$image['image_id'].'" class="delete_image">Delete</a>
		</div>';
	$i++;
	}
}
if($_GET['ajax']){
	$auth->showMsg();
	echo $img_txt;
	die;
}


$auth->checkLogin(3);
?>
<script type="text/javascript" src="<?php echo $general->url;?>/js/jquery.form.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#image_name').live('change', function(){
		//$("#preview").html('');
		$("#preview").html('<div style="text-align:center"><img src="<?php echo $general->url;?>/images/loader.gif" alt="Uploading...."/></div>'+$("#preview").html());
			$("#imageform").ajaxForm({
				target: '#preview'
			}).submit();
		});

		$('.delete_image').live('click', function(){
			$.ajax({
			  url: this.href+'&ajax=1',
			  data:'',
			  success: function( data ) {
				$('#preview').html(data);
			  }
			});
			return false;
		});

	});
</script>
<div class="uploader">
<form id="imageform" method="post" enctype="multipart/form-data" action='<?php echo $general->url;?>/ajax/upload_photo.php'>
Upload image <input type="file" name="image_name" id="image_name" />
</form>
</div>
<div id='preview'>
<?php echo $img_txt;?>
</div>