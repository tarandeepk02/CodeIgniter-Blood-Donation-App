<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<title>i Blood Donor :: Donate Now & Save Lives</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png');?>">
<!-- GLOBAL MAINLY STYLES-->
<link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>" rel="stylesheet" />
<!-- PLUGINS STYLES-->
<!-- THEME STYLES-->
<link href="<?php echo base_url('assets/css/main.min.css')?>" rel="stylesheet" />
<!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar">
<div class="page-wrapper">
  <!-- START HEADER-->
  <?php include APPPATH.'views/user/include/header.php';?>
  <!-- END HEADER-->
  <!-- START SIDEBAR-->
  <?php include APPPATH.'views/user/include/sidebar.php';?>
  <!-- END SIDEBAR-->
  <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
      <h1 class="page-title">Change Password</h1>
    </div>
    <div class="page-content fade-in-up">
      <div class="row">
        <div class="col-md-6">
          <div class="ibox">
            <!--success message -->
            <?php if($this->session->flashdata('success')){?>
            <p style="color:green">
              <?php  echo $this->session->flashdata('success');?>
            </p>
            <?php } ?>
            <!--error message -->
            <?php if($this->session->flashdata('error')){?>
            <p style="color:red">
              <?php  echo $this->session->flashdata('error');?>
            </p>
            <?php } ?>
            <div class="ibox-body"> <?php echo form_open('user/Changepwd',['name'=>'signup']);?>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <label>Current Password</label>
                  <?php echo form_password(['name'=>'currentpassword','id'=>'currentpassword','class'=>'form-control','placeholder'=>'Enter the Password','value'=>set_value('currentpassword')]);?> <span style="color:red;"><?php echo form_error('currentpassword')?></span> </div>
                <div class="col-sm-12 form-group">
                  <label>New Password</label>
                  <?php echo form_password(['name'=>'newpassword','id'=>'newpassword','class'=>'form-control','placeholder'=>'Enter the Password','value'=>set_value('newpassword')]);?> <span style="color:red;"><?php echo form_error('newpassword')?><span> </div>
                <div class="col-sm-12 form-group">
                  <label>Confiram Password</label>
                  <?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','placeholder'=>'Confirm the Password','value'=>set_value('confirmpassword')]);?> <span style="color:red;"><?php echo form_error('confirmpassword')?></span> </div>
              </div>
              <div class="form-group"> <?php echo form_submit(['name'=>'submit','id'=>'submit','class'=>'btn btn-primary','value'=>'Change']);?> </div>
              <?php echo form_close();?> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
    <?php include APPPATH.'views/user/include/footer.php';?>
  </div>
</div>
<!-- CORE PLUGINS-->
<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/popper.js/dist/umd/popper.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/metisMenu/dist/metisMenu.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<!-- CORE SCRIPTS-->
<script src="<?php echo base_url('assets/js/app.min.js')?>" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
</body>
</html>
