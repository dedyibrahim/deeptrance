<?php $data_service = $this->db->get('data_service') ;?>
  
<section class="section">
<div class="container">
<div class="row justify-content-center" id="service">
<div class="col-lg-12 text-center">
<h5 class="section-title-sm">Best Service</h5>
<h2 class="section-title section-title-border">Service We Provide</h2>
</div>
<!-- service item -->

<?php foreach ($data_service->result_array() as $service){ ?>

<div class="col-lg-4 col-sm-6 mb-5 mt-5 mb-lg-0">
<?php if ($this->session->userdata('id_admin')){ ?>    
<a href="<?php echo base_url('Dashboard/hapus_service/'.$service['id_service']) ?>" class="btn btn-danger translateY-25">Hapus Service</a>

<?php } ?>
<a href="<?php echo base_url('DeepTrance/service_single/'.$service['id_service']) ?>" >
<div class="card text-center">
<h4 class="card-title pt-3"><?php echo $service['judul'] ?></h4>
<div class="card-img-wrapper">
<img class="card-img-top rounded-0"  src="<?php echo base_url('uploads/background_service/'.$service['background_service']) ?>" alt="service-image">
</div>
<div class="card-body p-0">
<a href="<?php echo base_url('DeepTrance/service_single/'.$service['id_service']) ?>" class="btn btn-secondary translateY-25">Read More</a>
</div>
</div>
</div>
<!-- service item -->
<?php } ?>
</div>
</div>
</section>
