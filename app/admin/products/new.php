<?php session_start() ?>
<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>tao moi san pham</title>
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
          <h1>Tao moi san pham</h1>
        </div>
        <div class="row">
          <label>Ten san pham:</label>
          <input type="text" name="name" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Anh san pham:</label>
          <input type="text" name="image" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Mo ta san pham:</label>
          <input type="text" name="description" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>So luong:</label>
          <input type="text" name="qty" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Gia san pham:</label>
          <input type="text" name="price" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Danh muc:</label>
          <select class="form-control" name="catalog_id">
            <?php
              $sql = "SELECT * FROM catalogs";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
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
      <a href="index.php">Quay lai trang chinh</a>
    </div><!--end wrapper-->
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
