
<div class="search-form">
<a href="#" class="close" id="searchClose">
<i class="ti-close"></i>
</a>
<div class="container">
<form action="#" class="row">
<div class="col-lg-10 mx-auto">
<h3>Search Here</h3>
<div class="input-wrapper">
<input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required="">
<button>
<i class="ti-search"></i>
</button>
</div>
</div>
</form>
</div>
</div>
<section>






<section>
<div class="hero-slider position-relative">
<?php $query = $this->db->get('banner');
foreach ($query->result_array() as $banner){
?>  
<div class="hero-slider-item py-160" style="background-image: url(uploads/banner/<?php echo $banner['banner'] ?>); width: 1349px;" data-icon="ti-package" data-text="Human Resources" data-slick-index="-1" aria-hidden="true" tabindex="-1">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="hero-content off">
<h4 class="text-uppercase mb-1 animated off" ><?php echo $banner['text1'] ?></h4>
<h1 class="font-weight-bold mb-3 animated off" ><?php echo $banner['text2'] ?></h1>
<p class="text-dark mb-50 animated off" ><?php echo $banner['text3'] ?>
</p>
<a href="#" class="btn btn-outline text-uppercase" >more details</a>

</div>
</div>
</div>
</div>
</div>
<?php } ?>



</div>    
</section>

<script type="text/javascript">
$(document).ready(function(){
$.ajax({
type:"GET",
url:"<?php echo base_url('Dashboard/data_banner') ?>",
data:"",
success:function(data){
    
}

});

$('.hero-slider').slick({
autoplay: true,
infinite: true,
arrows: true,
prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-arrow-left\'></i></button>',
nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-arrow-right\'></i></button>',
dots: true,


customPaging: function (slider, i) {
var text = $(slider.$slides[i]).data('text');
return '<a><i class=""></i><span>' + text + '</span></a>';
},
        
responsive: [{
breakpoint: 576,
settings: {
arrows: false
}
}]




});

$('.hero-slider').on('afterChange', function(event, slick, currentSlide) {
$('.animated').removeClass('off');
$('.animated').addClass('activate fadeInDown');
});		

$('.hero-slider').on('beforeChange', function(event, slick, currentSlide) {
$('.animated').removeClass('activate fadeInDown');
$('.animated').addClass('off');
});

});       

</script>    
