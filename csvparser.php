<?php
function dd($arr, $die=true){
  echo '<pre>' . print_r($arr, true) . '</pre>';
  if($die) {
    die();
  }
}

if(isset($_POST['import'])) {

  if((isset($_FILES['file']) && is_array( $_FILES['file'] ))) {

    $csv = $_FILES['file'];

    dd($csv, 0);
    if(isset($csv['tmp_name']) && !empty($csv['tmp_name'])) {

      //
      //                                           
    }
  }
}


echo 'csv parser';
?>
