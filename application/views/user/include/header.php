<?php  $userid=$this->session->userdata('fname'); ?>
<header class="header">
  <div class="page-brand"> <a class="link" > <span class="brand">i Blood Donor <span class="brand-tip"></span> </span> <span class="brand-mini">BD</span> </a> </div>
  <div class="flexbox flex-1">
    <!-- START TOP-LEFT TOOLBAR-->
    <ul class="nav navbar-toolbar">
      <li> <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a> </li>      
    </ul>
    <!-- END TOP-LEFT TOOLBAR-->
    <!-- START TOP-RIGHT TOOLBAR-->
    <ul class="nav navbar-toolbar">
      <li class="dropdown dropdown-user"> <a class="nav-link dropdown-toggle link" data-toggle="dropdown"> <img src="<?php echo base_url('assets/img/admin-avatar.png')?>" /> <span></span><?php echo htmlentities($userid);?><i class="fa fa-angle-down m-l-5"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="<?php echo base_url('user/Profile'); ?>"><i class="fa fa-user"></i>My Profile</a> <a class="dropdown-item" href="<?php echo base_url('user/Changepwd');?>"><i class="fa fa-support"></i>Change Password</a>
          <li class="dropdown-divider"></li>
          <a class="dropdown-item" href="<?php echo base_url('user/logout');?>"><i class="fa fa-power-off"></i>Logout</a>
        </ul>
      </li>
    </ul>
    <!-- END TOP-RIGHT TOOLBAR-->
  </div>
</header>
<style>
.header .dropdown-user a.dropdown-toggle {
padding: 0 47px !important;
}
</style>
