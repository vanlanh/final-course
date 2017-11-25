<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/product-helper.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $user_id = $row["user_id"];
      $catalog_id = $row["catalog_id"];
      $name = $row["name"];
      $image = $row["image"];
      $description = $row["description"];
      $qty = $row["qty"];
      $price = $row["price"];
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>chinh sua san pham</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <div class="wrapper">
      <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="row">
          <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
        </div><!--end row-->
        <div>
          <h1>Chinh sua san pham</h1>
        </div>
        <div class="row">
          <label>Ten san pham:</label>
          <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Anh san pham:</label>
          <input type="text" name="image" value="<?php echo $image; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Mo ta san pham:</label>
          <input type="text" name="description" value="<?php echo $description; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>So luong:</label>
          <input type="text" name="qty" value="<?php echo $qty; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Gia san pham:</label>
          <input type="text" name="price" value="<?php echo $price; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Danh muc:</label>
          <select class="form-control" name="catalog_id">
            <?php
              $sql = "SELECT * FROM catalogs";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php }
              }
            ?>
          </select>
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
