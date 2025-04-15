<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>i Blood Donor :: Donate Now & Save Lives</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png');?>">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="<?php echo base_url('welcome');?>"><img src="<?php echo base_url('assets/img/logo.png');?>" width="100"></a></h1>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
		<li><a class="nav-link scrollto" href="#">About Us</a></li>
		<li><a class="nav-link scrollto" href="<?php echo base_url('welcome/index'); ?>#contact">Search Donor</a></li>
        <li><a class="nav-link scrollto" href="<?php echo base_url('user/login'); ?>">Donate Now</a></li>        
        <li><a class="getstarted scrollto" href="<?php echo base_url('user/registration'); ?>">Become a Donor</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i> </nav>
    <!-- .navbar -->
  </div>
</header>
<!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center p-0">
  <div class="container p-0">    
	<div class="row">
	<img src="<?php echo base_url('assets/img/banner.png');?>" class="img-fluid" alt="">
	</div>
  </div>
</section>
<!-- End Hero -->
<main id="main">
  <section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="section-title">
        <h2>Search Blood Donor Now</h2>
      </div>
      <div class="row">
        <div class="col-lg-12"> <?php echo form_open('welcome',['class'=>'php-email-form']);?>
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="searchdata" class="form-control" autocomplete="off" 
                  id="name" placeholder="Please Enter Blood Group/State Name" required="">
            </div>
            <div class="form-group col-md-6">
              <button type="submit" name="submit" id="submit" value="Search Now" class="getstarted">Search Now</button>
            </div>
          </div>
          </form>
          <?php if(Isset($_POST['submit'])){ ?>
          <table class="table table-bordered table-stripped">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Donor Name</th>
                <th>Donor Email</th>
                <th>Donor Contact No</th>
                <th>Blood Group</th>
                <th>Donor Location</th>
              </tr>
            </thead>
            <tbody>
              <?php
count($searchresult);
if(count($searchresult)) :
$cnt=1; 
foreach ($searchresult as $row) :
?>
              <tr>
                <td><?php echo $cnt;?></td>
                <td><?php  echo $row->first_name;?>
                  <?php  echo $row->last_name;?></td>
                <td><?php  echo $row->email;?>
                  <br>
                <td><?php  echo $row->contact_no;?></td>
                <td><?php  echo $row->bloodname;?></td>
                <td><?php  echo $row->city;?></td>
                </td>
              </tr>
              <?php 
              $cnt++;
              endforeach;
              else : ?>
              <tr>
                <td colspan="6" style="text-align:center">No Record found</td>
              </tr>
              <?php
              endif;
              ?>
            </tbody>
          </table>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container footer-bottom clearfix">
    <div><center>Copyright &copy; 2020 <strong><span>i Blood Donor</span></strong>. All Rights Reserved.</center> </div>
  </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="<?php echo base_url('assets/js/main.js');?>"></script>
</body>
</html>
