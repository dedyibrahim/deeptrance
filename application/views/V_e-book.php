<section class="section bg-gray">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 text-center" id="ebook">
<h5 class="section-title-sm">E-book</h5>
<h2 class="section-title section-title-border-gray">Free E-book</h2>
</div>
</div>
<!-- work slider -->
<div class="row work-slider">
<?php $static = $this->db->get('data_ebook'); 
foreach ($static->result_array() as $data){
?>    

<div class="work-slider-image">
<img class="img-fluid w-100"  src="<?php echo base_url('uploads/cover_ebook/'.$data['cover']) ?>" alt="work-image">
<div class="image-overlay">
<a onclick="get_book(<?php echo $data['id_ebook'] ?>);" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class="ti-download"></i></a>
<a class="h4 buku<?php echo $data['id_ebook'] ?>" href="#" tabindex="-1"><?php echo $data['judul_buku'] ?></a>
<p><?php echo $data['penulis'] ?></p>
</div>
</div>
<?php } ?>    

</div>
</div>
</section>


<script type="text/javascript">
$(document).ready(function(){
$('.work-slider').not('.slick-initialized').slick({
dots: true,
infinite: true,
speed: 300,
slidesToShow: 4,
slidesToScroll: 4,
arrows: false,
autoplay: true,
responsive: [{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 401,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});   

});
function get_book(id){
$.ajax({
type:"POST",
url:"<?php echo base_url('DeepTrance/get_book') ?>",
data:"id_ebook="+id,
success:function(data){
var z = JSON.parse(data);

for(i=0; i<z.length; i++){
  document.getElementById("judul_buku").innerHTML = z[i].judul_buku;
  document.getElementById("deskripsi").innerHTML = z[i].deskripsi;
  document.getElementById("id_ebook").innerHTML = z[i].id_ebook;
  document.getElementById("d_ebook").innerHTML = z[i].ebook;
}
} 
});
}
</script>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Download Buku <span id="judul_buku"></span></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h4 align="center">Deskripsi Buku</h4>
<span id="deskripsi"></span>
<hr>
<div style="display: none" id="id_ebook"></div>
<label>Nama</label>
<input type="text" id="nama" value="" class="form-control" placeholder="Your Name . . .">
<label>Email</label>
<input type="text" id="email" value="" class="form-control"  placeholder="Your Email . . .">
<label>Institusi/Perusahaan</label>
<input type="text" id="institusi" value="" class="form-control"  placeholder="Your Institusi . . .">

<div style="display:none;" id="d_ebook"></div>
</div>
<div class="modal-footer">
    <button type="button" id="download" class="btn btn-primary">Download <span class="ti-download"></span></button>
</div>
</div>

</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$("#download").click(function(){
var id_ebook     = $("#id_ebook").html();
var nama         = $("#nama").val();
var email        = $("#email").val();
var institusi    = $("#institusi").val();
var buku         = $("#judul_buku").html();
var ebook        = $("#d_ebook").html();

 
if(nama !='' && email !='' && institusi !='' && buku !=''){

$.ajax({
type:"POST",
url:"<?php echo base_url('DeepTrance/simpan_user_download'); ?>",
data:"nama="+nama+"&email="+email+"&institusi="+institusi+"&buku="+buku+"&ebook="+ebook,
success:function(data){
if(data == "berhasil"){
swal({
type:"success",
html:"Link Download telah berhasil kami kirimkan ke email " + email,
});    
}else{
swal({
type:"error",
html:data,
});   
} 
 
}       
});

}else{
swal({
type:"warning",
html:"Untuk dapat mendownload ebook ini silahkan isi nama , institusi,dan email anda terlebih dahulu."
});

}

});    
    
});
</script>    
    
