<?php
  function is_empty($field, $message){
    if(strlen(trim($field)) == 0){
    $_SESSION["flash"] = $message;
    return true;
    }
    return false;
  }
  function is_exist_email($email){
    $sql = "select * from users where email='$email'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $_SESSION["flash"] = "Email was existed.";
    return true;
    }
    return false;
  }
  function redirect($url){
    header("location: $url");
    die();
  }
?>
