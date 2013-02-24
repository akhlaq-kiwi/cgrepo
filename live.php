<?php 
   set_time_limit("0");
	include('cURL.php');
	$ashish->curl = new cURL();
	$ashish->getScore();

	class ashish{
		var $curl;
		var $resultFile;
		
		function getScore(){
		$this->resultFile=$this->curl->get('http://scores.sify.com/index.shtml','');
		if(preg_match("/Choose a Type/is",$this->resultFile,$matcher)) {
				$this->resultFile=$this->after($matcher[0],$this->resultFile);
				}
				if(preg_match("/Explore Our Site/is",$this->resultFile,$matche)) {
				$this->resultFile=$this->before($matche[0],$this->resultFile);
				}
				echo $this->resultFile;
		
		} 


		function before ($inthis, $inthat){
			return substr($inthat, 0, strpos($inthat, $inthis));
		}

		function after ($inthis, $inthat){
			if (!is_bool(strpos($inthat, $inthis)))
			return substr($inthat, strpos($inthat,$inthis)+strlen($inthis));
		}
	}
?>
		

		


		