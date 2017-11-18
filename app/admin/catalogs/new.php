<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <title>tao catalog</title>
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
          <h1>tao moi catalog</h1>
        </div>
        <div class="row">
          <label>Ten catalog:</label>
          <input type="text" name="name" class="form-control">
        </div><!--end row-->
        <div class="row">
          <label>Description:</label>
          <input type="text" name="description" class="form-control">
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
