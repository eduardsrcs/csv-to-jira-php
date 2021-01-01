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
      $finfo = finfo_open(FILEINFO_MIME_TYPE);
      $mime = finfo_file($finfo, $csv['tmp_name']);
      finfo_close($finfo);

      $allowed_mime = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
      //
      if(in_array($mime, $allowed_mime) && is_uploaded_file($csv['tmp_name'])) {
        //
        echo 'MIME type passes<br>';
      }
      //                                           
    }
  }
}


echo 'csv parser';
?>
