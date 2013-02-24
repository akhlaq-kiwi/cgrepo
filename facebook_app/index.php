<?php
require 'facebook-php-sdk-6c82b3f/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => '213073892116028',
  'secret' => 'd69ad1c027751f600cae4db802567c56',
));
$accessToken = $facebook->getAccessToken();
//$session = $facebook->getSession();
$uid = $facebook->getUser(); 
$frnd = $facebook ->api('/me/friends?access_token='.$accessToken);
 
 foreach($frnd['data'] as $f){
 $attachment = array(
            'message' => 'Hello '.$f['name'].', Please Like this page',
            'link'   => 'http://www.facebook.com/cricketgali'
        );
echo $f['id'].'<br />';
	if($f['id']>100002514482238 || 1){
		if($result = $facebook->api('/'.$f['id'].'/feed', 'POST', $attachment)){
			echo 'Succ';
		}else{
			echo 'Falure';
		}
	}
 }
 
 ?>