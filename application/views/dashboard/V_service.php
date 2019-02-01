<div class="container">
<div class="row m-3">
<div class="col-md-12  p-5 card ">
 <form action="<?php echo base_url('Dashboard/simpan_service') ?>" method="post" enctype="multipart/form-data">       
<label>Judul</label> 
<input type="text" name="judul" class="form-control">
<label>Title</label> 
<input type="text" name="title" class="form-control">

<label>Icon</label> 
<select name="icon" class="icons_select2">
<option value="ti-save" data-icon="ti-save">ti-save</option>
<option value="ti-save-alt" data-icon="ti-save-alt">ti-save-alt</option>
<option value="ti-direction" data-icon="ti-direction">ti-direction</option>
<option value="ti-direction-alt" data-icon="ti-direction-alt">ti-direction-alt</option>
<option value="ti-user" data-icon="ti-user">ti-user</option>
<option value="ti-link" data-icon="ti-link">ti-link</option>
<option value="ti-unlink" data-icon="ti-unlink">ti-unlink</option>
<option value="ti-trash" data-icon="ti-trash">ti-trash</option>
<option value="ti-target" data-icon="ti-target">ti-target</option>
<option value="ti-star" data-icon="ti-star">ti-star</option>
<option value="ti-spray" data-icon="ti-spray">ti-spray</option>
<option value="ti-signal" data-icon="ti-signal">ti-signal</option>
<option value="ti-shopping-cart" data-icon="ti-shopping-cart">ti-shopping-cart</option>
<option value="ti-shopping-cart-full" data-icon="ti-shopping-cart-full">"ti-shopping-cart-full</option>
<option value="ti-settings" data-icon="ti-settings">ti-settings</option>
<option value="ti-medall" data-icon="ti-medall">ti-medall</option>
<option value="ti-image" data-icon="ti-image">ti-image</option>
<option value="ti-palette" data-icon="ti-palette">ti-palette</option>
<option value="ti-world" data-icon="ti-world">ti-world</option>
<option value="ti-thought" data-icon="ti-thought">ti-thought</option>
<option value="ti-flag-alt" data-icon="ti-flag-alt">ti-flag-alt</option>
<option value="ti-wheelchair" data-icon="ti-wheelchair">ti-wheelchair</option>
<option value="ti-pie-chart" data-icon="ti-pie-chart">ti-pie-chart</option>
<option value="ti-gift" data-icon="ti-gift">ti-gift</option>

</select>
<label>background</label> 
<input type="file" name="background" class="form-control">

<label>Isi Service</label>
<textarea name="isi_service" class="form-control" id="isi_service"></textarea>

<hr>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>

</div>
 <script>
    CKEDITOR.replace( 'isi_service', {
	toolbarGroups: [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
 		{ name: 'links' },
                { name: 'paragraph', groups: [  'align',  'paragraph' ] },

	]

});
            </script>
<script type="text/javascript">
function iformat(icon) {
    var originalOption = icon.element;
    return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '</span>');
}
$('.icons_select2').select2({
    width: "100%",
    theme:"boostrap",
    templateSelection: iformat,
    templateResult: iformat,
    allowHtml: true
});
</script>    