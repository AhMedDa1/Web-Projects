<?php require 'inclolude/header.php'; ?>
<title>Student Login</title>
<div class="container">
    <div class="row" style="height: 500px; padding-left: 135px; margin-bottom :auto; padding-bottom: 4px;padding-top: 52px;">
      <div class="col-md-4" top: style=" margin-top: 20px ;top 99px;" /*style=" margin-top: 65px; top 99px; background-color: gray; margin-bottom: 147px;margin-right: 12px;padding-right: 40px;padding-left: 40px; "*/>
      <div class="form-group">
        <label>First Name </label>
        <input type="text" placeholder="Full name" name="Name" class="form-control">
      </div>
      <div class="form-group">
        <label>Major</label>
        <input type="text"  name="Name" placeholder="Major" class="form-control">
      </div>
      <div class="form-group">
        <label>PassWord</label>
        <input type="password" placeholder="PassWord" name="Name" class="form-control">
      </div>
      <div class="form-group">
        <label>UserName</label>
        <input type="text" placeholder="UserName" name="Name" class="form-control">
      </div>
    </div>
    <div class="col-md-4" top: style=" margin-top: 20px ;top 99px;" /*style=" margin-top: 65px; top 99px; background-color: gray; margin-bottom: 147px;margin-right: 12px;padding-right: 40px;padding-left: 40px; "*/>
    <form  action="fun.php" method="post" >
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" placeholder="Family name" name="ID" class="form-control">
      </div>
      <div class="form-group">
        <label> Level </label>
        <input type="text" placeholder="Level" name="Name" class="form-control">
      </div>
      <div class="form-group">
        <label>RE-PassWord</label>
        <input type="password" placeholder="password" name="Name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" placeholder="Your Email" name="Name" class="form-control">
      </div>
    </form>
    </div>
    <div class="col-md-4" style=""><div class="form-group">
      <input type="submit" value="Register" class="btn btn-primary" style="margin-left: 60px;margin-top: 309px;">
    </div></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/popper.min.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>
<?php require 'inclolude/footer.php'; ?>
