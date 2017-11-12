<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $name = $row["name"];
      $email = $row["email"];
      $role = $row["role"];
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao users</title>
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
          <h1>Chinh sua nguoi dung</h1>
        </div>
        <div class="row">
          <label>Ten nguoi dung:</label>
          <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Email:</label>
          <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Mat khau:</label>
          <input type="password" name="password" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Nhap lai mat khau:</label>
          <input type="password" name="repassword" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Quyen:</label>
          <select class="form-control" name="role" >
            <option  <?php if($role == 2) echo "selected='true'";?> value= "2" >user
            </option>
            <option  <?php if($role == 1) echo "selected='true'";?> value= "1" >editer
            </option>
            <option  <?php if($role == 0) echo "selected='true'";?> value= "0" >admin
            </option>
          </select><!--end form-control-->
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
