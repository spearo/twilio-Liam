<?php
  $button_pressed = $_REQUEST['Digits'];
  if($button_pressed == 1){
    $response = "You pressed button 1";
  }else{
    $response = "haha, you is a wanker!! $button_pressed";
  }
  header("content-type: text/xml");
?>

<?xml version="1.0" encoding="UTF-8"?>
<Response>
    <Say><?php echo $response; ?></Say>
</Response>
