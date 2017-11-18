<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/catalog-helper.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM catalogs WHERE id=$id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $name = $row["name"];
      $description = $row["description"];
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao catalog</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <div class="wrapper">
      <form method="post" action="create.php">
        <div class="row">
          <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
        </div><!--end row-->
        <div>
          <h1>Chinh sua catalog</h1>
        </div>
        <div class="row">
          <label>Ten catalog:</label>
          <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Description:</label>
          <input type="text" name="description" value="<?php echo $description; ?>" class="form-control">
        </div><!--end row-->
        <br>
        <div class="row">
          <button class="btn ntm =primary">Submit</button>
        </div><!--end row-->
      </form>
    </div><!--end wrapper-->
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
