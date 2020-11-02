
<html>
<head>
<title>ข้อมูล</title>
<?php
$this->load->view('header');
$this->load->view('bootstap');
?>
</head>


<body>
<br><br><br><br><br><br><br><br>

  <br>
<div class="container">

        <div class="p-3 mb-2" style="background-color: #111111 ">
<div class="card mb-3">
<br>
<h1 class="card-title">&nbsp&nbsp<?php echo "ข้อมูลส่วนตัว";?></h1>

<br>
<?php foreach ($query as $x){ ?>

  <div class="card-body">
  <div align="center">
  <img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" class="d-block w-50" alt="...">
  <br>
  <h4 class="card-text">ชื่อ : <?php echo $x->F_name;?>&nbsp&nbsp<?php echo $x->L_name;?>
  &nbsp รหัสนักศึกษา :&nbsp<?php echo $x->Studentcode;?> 
 </h4> &nbsp ป/ด/ว :&nbsp<?php echo $x->Date_of_birth;?>
  &nbsp เพศ :&nbsp<?php echo $x->Sex;?>
  &nbsp เบอร์โทร :&nbsp<?php echo $x->Phone;?>
  &nbsp Email :&nbsp<?php echo $x->Email;?></h4>
 
  
<?php } ?>
    

  
    </div>
    </div>
</div>
</div>
</div>

<br>

</body>
<?php $this->load->view('footer'); ?>
</html>

