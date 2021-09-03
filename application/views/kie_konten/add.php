 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Konten</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
            <?php echo form_open_multipart('kiekonten/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">Jenis</label>
						<div class="form-group">
							<select name="jenis" onchange="pilihJenis()" id="jenis" class="form-control">
								<option value="image">Gambar</option>
								<option value="video">Video</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File</label>
						<div class="form-group">
							<input type="file" onChange="return validate_video(this,'add')"  accept="image/x-png,image/gif,image/jpeg,video/*" name="userfile" class="form-control" id="file" required />
						</div>
					</div>
					<div id="jenisvideo" style="display: none;" class="col-md-6"><center>
								<video id="videoAdd" width="320" height="176" controls>
								  <source src="" >
								  Your browser does not support HTML5 video.
								</video></center>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<textarea name="deskripsi" id="deskripsi" class="form-control" ><?php echo $this->input->post('deskripsi'); ?></textarea>
						</div>
					</div>
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script type="text/javascript">
	function pilihJenis()
	{
		var jenis = $("#jenis").val();

		if(jenis == "video")
		{
			$("#jenisvideo").show();
		}else 
		{
			$("#jenisvideo").hide();
		}
	}

	function validate_video(params, tipe = ""){
		//alert(parid);
		var file 			= params;
		var file_name 		= file.value;
		var extension 		= file_name.split('.').pop().toLowerCase();
		var size      		= file.files[0].size;
		var allowedFormats 	= ["mp4", "mpeg4", "mpg", "mpeg","png","jpg","jpeg"];
		var msg = "";

		
		
		if(!(allowedFormats.indexOf(extension) > -1)){
		
			//alert("Tipe ekstensi cover harus MP4");
			msg = "tipe yang diizinkan MP4, MPEG4, MPG, atau MPEG, JPEG, JPG, PNG";
			alert(msg);

			//CLEARED
			$(':file').val('');

			return false; 

		}else if(((size/20480 )/1024) > 1){
		
			//alert("Maksimal file 100 MB");
			msg = "Maximal file yang diizinkan 20 MB";
			alert(msg);

			//CLEARED
			$(':file').val('');

			return false;

		}else if(file_name.indexOf(' ') > -1){ 

			msg = "nama tidak boleh ada spasi";
			alert(msg);

			//CLEARED
			$(':file').val('');

			return false;

		}
		

	
			var file = params.files[0];
			var blobURL = URL.createObjectURL(file);
			$('#videoAdd').attr('src', blobURL);		
			

		
	}
</script>