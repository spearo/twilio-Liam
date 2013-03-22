<?php
  $button_pressed = $_REQUEST['Digits'];
  if($button_pressed == 1){
    $response = "You pressed button 1";
  }else{
    $response = "You pressed button $button_pressed";
  }
  header("content-type: text/xml");
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Say><?php echo $response; ?></Say>
</Response>
