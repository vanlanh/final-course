<?php
  function is_empty($name, $description){
    if(strlen(trim($name)) == 0){
    $_SESSION["flash"] = $description;
    return true;
    }
    return false;
  }
  function is_exist_name($name){
    $sql = "select * from catalogs where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $_SESSION["flash"] = "Name was existed.";
    return true;
    }
    return false;
  }
  function redirect($url){
    header("location: $url");
    die();
  }
?>
