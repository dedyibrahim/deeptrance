<div class="container mt-1">
<div class="row">
<div class="col-md-6 card p-2">

<form action="<?php echo base_url('Dashboard/upload_banner') ?>" method="POST" enctype="multipart/form-data">   
<label>Text1</label> 
<input type="text" name="text1" placeholder="Isi text1" class="form-control">

<label>Text2</label> 
<input type="text" name="text2"  placeholder="Isi text2" class="form-control">

<label>Text3</label> 
<input type="text" name="text3"  placeholder="Isi text3" class="form-control">

<label>Title</label> 
<input type="text" name="title"  placeholder="Title" class="form-control">


<label>Banner</label> 
<input name="banner" type="file" class="form-control-file">
<hr>
<button type="submit" class="btn btn-primary">Simpan Banner</button>
</form>
</div>

<div class="col ">

    
<?php 
$query = $this->db->get('banner');
foreach ($query->result_array() as $banner){
?> 
    <div class="row">
        <div class="col-md-6"><img  style="width: 100%;" class="card p-2  mt-1" src="<?php echo base_url('uploads/banner/'.$banner['banner']) ?>">
            <hr>
            <a href="<?php echo base_url('Dashboard/hapus_banner/'.$banner['id_banner'].'/'.$banner['banner']) ?>"><button class="btn btn-danger btn-sm centered">Hapus</button></a>
        </div>
        
        <div class="col-md-6"><?php echo $banner['text1'] ?><hr><?php echo $banner['text2'] ?><hr><?php echo $banner['text3'] ?><hr><?php echo $banner['title'] ?></div>
    </div>
    <hr>
<?php } ?>
</div>    


</div>

