 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah File Perpustakaan</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
            <?php echo form_open_multipart('kieperpustakaan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File</label>
						<div class="form-group">
							<input type="file" onChange="return validate_video(this,'add')"  accept="application/pdf" name="userfile" class="form-control" id="file" required />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
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
	

	function validate_video(params, tipe = ""){
		//alert(parid);
		var file 			= params;
		var file_name 		= file.value;
		var extension 		= file_name.split('.').pop().toLowerCase();
		var size      		= file.files[0].size;
		var allowedFormats 	= ["pdf"];
		var msg = "";

		
		
		if(!(allowedFormats.indexOf(extension) > -1)){
		
			//alert("Tipe ekstensi cover harus MP4");
			msg = "tipe yang diizinkan PDF";
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
			
			

		
	}
</script>