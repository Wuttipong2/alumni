<html>
  <?php
    $this->load->view('header');
    $this->load->view('bootstap');
  ?>
<body>
<br><br><br><br><br><br><br><br><br>
<div class="container mt-2">
<div class="alert alert-info" role="alert" align="center">
  <h3>Log in</h3>
</div>
<form class="alert alert-info" action="./login_user" method="post">

  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name="Username">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="Password" class="form-control" name="Password">
  </div>
  <center>
  <a href="<?php echo site_url('Manage_register/regis'); ?>" class="btn btn-primary">สมัครสมาชิก</a>
  <input type="submit" name="login"  class="btn btn-success" value="Login" />
  </center>
</form>
</div>
</body>
</html>