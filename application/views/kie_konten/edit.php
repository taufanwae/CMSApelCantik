 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Konten</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
			<?php echo form_open_multipart('kiekonten/edit/'.$image_banner['slider_id']); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div style="display: none;" class="col-md-6">
						<label for="slider_file_name" class="control-label">Jenis</label>
						<div class="form-group">
							<select name="jenis" onchange="pilihJenis()" id="jenis" class="form-control">
								<?php
								$selected =$image_banner['jenis'] == "image" ? "selected" : "";
								$selected1 = $image_banner['jenis'] == "video" ? "selected" : "";
								?>
								<option value="image" <?php echo $selected; ?>>Gambar</option>
								<option value="video" <?php echo $selected1; ?>>Video</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File</label>
						<div class="form-group">
							<?php $accept = "";
							if($image_banner['jenis'] == "image")
							{
								$accept = "image/x-png,image/gif,image/jpeg";
							}else
							{
								$accept = "video/*";
							}
							?>
							<input type="file" onChange="return validate_video(this,'add')"  accept="<?php echo $accept ?>" name="userfile" class="form-control" id="file" />
							<?php if($image_banner['jenis'] == "image")
							{
								?>

							<br/>gambar saat ini <br/><image src="<?php echo $image_banner['slider_url'];?>" width="400px">
								<?php
							}else
							{
								?>

								<video id="videoAdd" width="320" height="176" controls>
								  <source src="<?php echo $image_banner['slider_url'];?>" >
								  Your browser does not support HTML5 video.
								</video>
								<?php
							} ?>
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
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $image_banner['judul']); ?>" class="form-control" id="judul" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<textarea name="deskripsi" id="deskripsi" class="form-control" ><?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $image_banner['deskripsi']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="active_status" class="control-label">Status Aktif</label>
						<div class="form-group">
							<select name="active_status" class="form-control">
								<?php
								$selected =$image_banner['active_status'] == "0" ? "selected" : "";
								$selected1 = $image_banner['active_status'] == "1" ? "selected" : "";
								?>
								<option value="1" <?php echo $selected1; ?>>Aktif</option>
								<option value="0" <?php echo $selected; ?>>Non Aktif</option>
							</select>
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
			msg = "tipe yang diizinkan MP4, MPEG4, MPG, MPEG, JPG, PNG, JPEG";
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