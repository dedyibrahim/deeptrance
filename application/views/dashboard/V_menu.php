<div class="container-fluid bg-light">
    <div class="container p-2">
        <div class="row">
        <div class="col"> <h3 align="center">Selamat Datang <?php echo $this->session->userdata('nama_admin'); ?></h3></div>
        <div class="col-md-2"><a href="<?php echo base_url('Dashboard/keluar') ?>" class="nav-link btn btn-primary btn-sm" href="#">Keluar</a></div>
            
        </div>
</div>   
   <div class="navigation  bg-gray">
  
<div class="container p-3">
    <div class="row">
        <div class="col"><a class="nav-link btn btn-primary btn-sm" href="<?php echo base_url('Dashboard') ?>">EDIT BANNER</a></div>
        <div class="col"><a class="nav-link btn btn-primary btn-sm" href="<?php echo base_url('Dashboard/service') ?>">EDIT SERVICE</a></div>
        <div class="col"><a class="nav-link btn btn-primary btn-sm" href="#">EDIT ARTIKEL</a></div>
        <div class="col"><a class="nav-link btn btn-primary btn-sm" href="#">DATA CONTACT US</a></div>
        <div class="col"><a class="nav-link btn btn-primary btn-sm" href="<?php echo base_url('Dashboard/e_book') ?>">FREE E-BOOK</a></div>
      </div>

</div>
   </div>

</div>