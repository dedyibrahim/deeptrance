<body class="bg-gray">
<div class="container">
<div class="col-md-4 card offset-4 p-5 mt-5">
<label>Email</label>
<input type="text" id="email" class="form-control" placeholder="email">

<label>Password</label>
<input type="password" id="password" class="form-control" placeholder="password">
<button id="login" class="btn btn-primary float-right">Login </button>
</div> 
</div>   
<script type="text/javascript">
$(document).ready(function(){
$("#login").click(function(){
var email = $("#email").val();    
var password = $("#password").val();

$.ajax({
type:"POST",
url:"<?php echo base_url('Login/proses_login') ?>",
data:"email="+email+"&password="+password,
success:function(data){
if(data == "berhasil"){
swal({
type: 'success',
title: 'Login berhasil.',
}).then(function(){
 window.location.href = "<?php echo base_url('Dashboard') ?>";   
});


}else{
swal({
type: 'error',
text: 'Password atau email  yang anda masukan salah'
});   
}   


}


});

});    


});
</script>    

</body>