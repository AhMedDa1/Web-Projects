<?php require 'inclolude/header.php'; ?>
<title>Student Login</title>
<div class="container" >
  <div class="row" style="height: 500px; ">
    <div class="col-md-4" ></div>
    <div class="col-md-4" style=" margin-top: 110px;top 99px;">
      <form  action="fun.php" method="post" style="padding-left: 0px;margin-left: 37px;margin-right: 66px;" >
        <div class="form-group">
          <label style="font-size:25px;">User Name</label>
          <input type="text" name="ID" placeholder="UserName" class="form-control">
        </div>
        <div class="form-group">
          <label style="font-size:25px;">PassWord</label>
          <input type="password" name="Name" placeholder="Must contain Capital char " class="form-control">
        </div>
        <h4 style="padding-left: 105px;padding-right: -36px;margin-right: -64px;">New Student ?  <a href="register.php">Register Now</a>
        </h4><br>
        <div class="form-group">
          <input type="submit" value="Login" class="btn btn-primary" style="padding-top: 0.375rem;margin-top: -156px;">
        </div>
      </form>
    </div>
    <div class="col-md-4" style=></div>
  </div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/popper.min.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>
<?php require 'inclolude/footer.php'; ?>
