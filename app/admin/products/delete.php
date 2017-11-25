<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/product-helper.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM products WHERE id=$id";
    $result = $conn->query($sql);
    if($result){
      $_SESSION["flash"] = "Da xoa thanh cong";
    }else{
      $_SESSION["flash"] = "Xoa khong thanh cong";
    }
  }else{
    $_SESSION["flash"] = "Sai tham so";
  }
  redirect("index.php");
?>
