<?php
function translate($native, $message_id){
  $langauges = array('Bemba', 'Nyanja');
  if($native == $langauges[0]){
    echo $native;
  }
}
$native = "Bemba";
translate($native);
?>
