<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <title>tao users</title>
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
          <h1>tao moi nguoi dung</h1>
        </div>
        <div class="row">
          <label>Ten nguoi dung:</label>
          <input type="text" name="name" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Email:</label>
          <input type="text" name="email" class="form-control">
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
          <select class="form-control" name="role">
            <option value="0">User</option>
            <option value="1">Editer</option>
            <option value="2">Admin</option>
          </select>
        </div><!--end row-->
        <br>
        <div class="row">
          <button class="btn ntm =primary">Submit</button>
        </div><!--end row-->
      </form>
      <a href="index.php?id=<?php echo $row["id"]; ?>">Quay lai trang chinh</a>
    </div><!--end wrapper-->
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
