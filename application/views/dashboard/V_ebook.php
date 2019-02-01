<div class="container">
<div class="row">
<div class="col-md-7 card mt-2 mb-2 p-2">
<form action="<?php echo base_url('Dashboard/simpan_ebook') ?>" method="POST" enctype="multipart/form-data"> 
<label>Cover</label>
<input type="file" name="cover" class="form-control">
<label>Ebook</label>
<input type="file" name="ebook" class="form-control">

<label>Judul Buku</label>
<input type="text" name="judul_buku" class="form-control">

<label>Penulis</label>  
<input type="text" name="penulis" class="form-control">
<label>Deskripsi</label>
<textarea class="form-control-plaintext" name="deskripsi"  rows="15"></textarea>

<hr>
<button type="submit" class="form-control btn btn-primary">Simpan E-book</button>
</form>
</div>

<div class="col">
  <table class="table-bordered table-striped table-condensed" style="width: 100%;">
<tr>
<th>No</th>    
<th>Judul Buku</th>    
<th>Penulis</th>    
<th>Aksi</th>    
</tr>

<?php $static = $this->db->get('data_ebook'); 
$no =1;
foreach ($static->result_array() as $data){
?> 
<tr>
<td><?php echo $no++ ?></td>   
<td><?php echo $data['judul_buku'] ?></td>   
<td><?php echo $data['penulis'] ?></td>   
<td><a href="<?php echo base_url('Dashboard/hapus_ebook/'.$data['id_ebook']) ?>"><button class="btn btn-danger btn-small">Hapus</button></a></td>   
</tr>        
<?php }?> 
</table>    
<hr>    
<h4 align="center"> yang Telah Mendownload Buku</h>
<hr>
<table class="table-bordered table-striped table-condensed" style="width: 100%;">
<tr>
<th>No</th>    
<th>Email</th>    
<th>Nama</th>    
<th>Judul</th>    
</tr>

<?php $s = $this->db->get('data_download'); 
$no =1;
foreach ($s->result_array() as $z){
?> 
<tr>
<td><?php echo $no++ ?></td>   
<td><?php echo $z['email'] ?></td>   
<td><?php echo $z['nama'] ?></td>   
<td><?php echo $z['buku'] ?></td>   
</tr>        
<?php }?> 
</table>     
    
</div>
</div>    
</div>
