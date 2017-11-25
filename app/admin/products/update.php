<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/product-helper.php"; ?>
<?php
print_r($_POST);
  if(isset($_POST["catalog_id"]) && isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["description"]) && isset($_POST["qty"]) && isset($_POST["price"]) && isset($_POST["id"])) {
    $catalog_id = $_POST["catalog_id"];
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $id = $_POST["id"];

    $sql = "update products set catalog_id=$catalog_id, name='$name', image = '$image', description='$description', qty=$qty, price=$price where id=$id";
    $result = $conn->query($sql);
    if ($result) {
      $_SESSION["flash"] = "record updated sucess";
    }else{
     $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
    }
    redirect("index.php");
  }
?>
