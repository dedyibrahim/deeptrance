<?php 
$static       = $this->db->get_where('data_service',array('id_service'=>$this->uri->segment(3)))->row_array(); 
$data_service = $this->db->get('data_service') ?>
<section class="section">
<div class="container">
<div class="row">
<!-- sidebar -->
<aside class="col-lg-4 order-lg-1 order-2">
<!-- service menu -->
<ul class="service-menu pl-0 border rounded mb-50">
<?php foreach ($data_service->result_array() as $service){ ?> 
<li class="<?php if($this->uri->segment(3) == $service['id_service']){ echo "active"; } ?> border-bottom">
<a class="d-block font-primary text-dark p-4 rounded-top" href="<?php echo base_url('DeepTrance/service_single/'.$service['id_service']) ?>"><?php echo $service['judul'] ?></a>
</li>
<?php } ?>
<li>
<a class="d-block font-primary text-dark p-4 rounded-top" href="<?php echo base_url() ?>">Home</a>    
</li>
</ul>



</aside>
<!-- service single content -->
<div class="col-lg-8 order-lg-2 order-1">
<h3 class="mb-10"><?php echo $static['judul'] ?></h3>
<p class="mb-40">
<?php echo $static['isi_service'] ?>        
</p>


</div>
</div>
</div>
</section>


