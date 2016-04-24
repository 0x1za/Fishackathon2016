<?php
//Include Error Messages
include("messages.php");

function getWeather($key, $city){
  global $temperature;
  global $wind;
  global $direction;
  global $condition;

  $url = 'http://api.apixu.com/v1/current.json?key='.$key.'&q='.$city.'';
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $json_output=curl_exec($ch);
  $weather = json_decode($json_output);

  $temperature = $weather->current->temp_c.'<br>';
  $wind = $weather->current->wind_kph.'<br>';
  $direction = $weather->current->wind_degree.'<br>';
  $condition = $weather->current->condition->text.'<br>';
}



function accessRisk($wind, $condition){
  if($wind >= 25){
    $risk = 0;
    return $risk;
  } elseif($wind < 25){
    $risk = 1;
    return $risk;
  } else {
    $risk = 2;
    return $risk;
  }
}

function accessConditions($condition){
  $conditions = array('Cloudy', 'Sunny', 'Raining');
  if($condition == $conditions[0]){
   return $message = $messages[0];
  } elseif($condition == $conditions[1]){
   return $message = $messages[1];
  }
  else if($condition==$conditions[2]){
	 return $messages = $messages[2];
	  
  }
}
getWeather("Kariba","e16cc1edb75e012ecabd85ad9d0e66601cd08ba5");
accessRisk(25,10);
accessConditions();

?>
