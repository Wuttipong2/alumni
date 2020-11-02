
<html>
<head>
<title>Edit</title>
<?php
$this->load->view('header');
$this->load->view('bootstap');
?>
</head>
<br><br><br><br><br><br><br><br><br><br>
<body>

<div class="container">
  <div class="row">
    <div class="col">
    
    </div>
    <?php foreach ($query as $x){ ?>
      
    <div class="col-md-10 ">
<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header">Edit Profile</div>
  <div class="card-body">
    <h5 class="card-title">
    <form action="./edit"  method="post">
  <div class="form-group">
    <label for="txtid" >ID  : </label>
    <input type="hidden" name="txtid" value="<?php echo $x->Member_id;?>"><?php echo $x->Member_id;?>
  </div>

  <div class="form-group">
  <label for="txtname">Name : </label>
  <input class="form-control" type="text" name="txtname" size="20" value="<?php echo $x->F_name;?>">
  </div>
  <div class="form-group">
  <label for="txtlastname">Last Name : </label>
  <input class="form-control" type="text" name="txtlastname" size="20" value="<?php echo $x->L_name;?>">
  </div>
  <div class="form-group">
  <label for="txttPhone">Phone : </label>
  <input class="form-control" type="text" name="txtPhone" size="20" value="<?php echo $x->Phone;?>">
  </div>
  <label for="txttEmail">Email : </label>
  <input class="form-control" type="text" name="txtEmail" size="20" value="<?php echo $x->Email;?>">
  </div>
  
  <div align="center">


  <input type="submit" class="btn btn-success" name="submit" value="ตกลง">
  <a href="<?php echo site_url('Show/edit'); ?>"><input type="button" value=" ยกเลิก " class="btn btn-danger" />
  


</form>
</div>
</h5>


  
     
 <br>
      <?php } ?>
  </form>
</div>
<br>
</div>
<br>

  </div>
</div>
    </div>
    <div class="col">
  
    </div>
  </div>
</div>

<br><br>
<?php $this->load->view('footer'); ?>
</body>
</html>