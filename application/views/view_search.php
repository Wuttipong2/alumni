<?php defined('BASEPATH') or exit('No direct script access allowed');
     
      $this->load->view('header');
      $this->load->view('bootstap');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br><br><br><br><br><br><br>
<div class="container">
<br>
<nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลนักศึกษาในระบบ</li>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="row" >
                                <form method="post" action="<?php echo site_url('Show/search'); ?>">
                                    <div class="row" >
                                        <div class="col-9">
                                            <input class="form-control" type="text" placeholder="ค้นหาโดยใช้ รหัส" name="search" />
                                        </div>
                                        <div class="col-3">
                                            <input type="submit" class="btn btn-block btn-primary" style="width:100px" name="submit" value="ค้นหา">
                                        </div>
                                        </div>
                                </form>
              </div>
					</ol>
                   
				</nav>

  <div class="row">
  
  <?php 
  if ($xx != null)
  foreach ($xx as $x){ ?>
    
    <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    ชื่อ <?php echo $x->F_name;?>
    <?php echo $x->L_name;?>
    <br>รหัสนักศึกษา <?php echo $x->Studentcode;?>
    </h4>
    <form action="./profil_info" method="POST">
    <input type="text" name="Member_id" value="<?php echo $x->Member_id; ?>" hidden>
    <input type="submit" class="btn btn-success" name="submit" value="ดูรายละเอียด"></form></a>
    </form>
</div></div><br>
</div>
  <?php }; ?>
    
  </div>
</div>

</div>

</body>
<?php $this->load->view('footer'); ?>
</html>