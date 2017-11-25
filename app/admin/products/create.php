<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/product-helper.php"; ?>
<?php session_start(); ?>
<?php
  if(isset($_POST["catalog_id"]) && isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["description"]) && isset($_POST["qty"]) && isset($_POST["price"])){
    $user_id = $_POST["user_id"];
    $catalog_id = $_POST["catalog_id"];
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    if(is_empty($catalog_id,"catalog_id is not empty"))
      redirect("new.php");
    if(is_empty($name,"name is not empty"))
      redirect("new.php");
    if(is_empty($image,"image is not empty"))
      redirect("new.php");
    if(is_empty($description,"description is not empty"))
      redirect("new.php");
    if(is_empty($qty,"qty is not empty"))
      redirect("new.php");
    if(is_empty($price,"price is not empty"))
      redirect("new.php");

    if(!is_exist_name($name)){
      $sql = "INSERT INTO products(catalog_id, name, image, description, qty, price) VALUES('$catalog_id', '$name', '$image', '$description', '$qty', '$price')";
      $result = $conn -> query($sql);
      if($result){
        $_SESSION["flash"] = "New record added success";
      }else{
        $_SESSION["flash"] = "Error: ".sql."<br/>".$conn->error;
      }
    }

    redirect("new.php");
  }
?>
