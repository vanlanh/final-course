<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/catalog-helper.php"; ?>
<?php session_start(); ?>
<?php
  if(isset($_POST["name"]) && isset($_POST["description"])){
    $name = $_POST["name"];
    $description = $_POST["description"];

    if(is_empty($name,"name is not empty"))
      redirect("new.php");
    if(is_empty($description,"description is not empty"))
      redirect("new.php");

    if(!is_exist_name($name)){
      $sql = "INSERT INTO catalogs(name, description) VALUES('$name', '$description')";
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
