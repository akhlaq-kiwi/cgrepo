<?php
include('../includes/config.php');
$auth->checkLogin(3);
if($_GET['state_id']!=''){
$general->cityList($profile['city_id'], 'list', 'city', $_GET['state_id']);
}
?>