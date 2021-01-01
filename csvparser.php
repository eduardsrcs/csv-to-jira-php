<?php
function dd($arr, $die=true){
  echo '<pre>' . print_r($arr, true) . '</pre>';
  if($die) {
    die();
  }
}

if(isset($_POST['fn'])) {
        if((isset($_FILES['fn']) && is_array( $_FILES['fn'] ))) {
  echo 'Hello';
}
}
  dd($_POST, 0);
  echo 'csv parser';
?>
