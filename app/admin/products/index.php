<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php define("URL_IMAGE", "http://localhost/final-course/public/uploads/"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Danh sach nguoi dung</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <div class="container">
      <h2>Danh sach san pham</h2>
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div><!--end row-->
      <table class="table">
        <thead>
          <tr>
            <th>Anh</th>
            <th>Name</th>
            <th>Description</th>
            <th>So luong</th>
            <th>Gia san pham</th>
            <th>#</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><img src="<?php echo URL_IMAGE.$row['image']; ?>" width="32" height="32"></td>
            <td><?php  echo $row["name"]; ?></td>
            <td><?php  echo $row["description"]; ?></td>
            <td><?php  echo $row["qty"]; ?></td>
            <td><?php  echo $row["price"]; ?></td>
            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
          </tr>
          <?php    }
            }
          ?>
        </tbody>
      </table><!--end table-->
      <a id="new" href="new.php">New</a>
    </div><!--end container-->
  </body>
</html>
