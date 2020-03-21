<?php

try{

 $url = 'https://api.covid19api.com/summary';
 $response = file_get_contents($url);
 
 $json_array=json_decode($response,true); 
 //print_r($json_array); 
 

function display_array_recursive($json_rec){
		if($json_rec){
			foreach($json_rec as $key=> $value){
				if(is_array($value)){
					display_array_recursive($value);
				}else{
					echo $key.'--'.$value.'<br>';
					
				}	
			}	
		}	
	}
  	display_array_recursive($json_array);
	
	
	
	
	
	
	
}catch(Exception $e){
    echo $e->getMessage();
}


 

 
?>


