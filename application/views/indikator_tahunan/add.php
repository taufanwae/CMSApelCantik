 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Upload Laporan Tahunan</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
            <?php echo form_open_multipart('indikatortahunan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="end_date" class="control-label">Nama File</label>
						<div class="form-group">
							<input type="text" name="nama_file" value="<?php echo $this->input->post('nama_file'); ?>" class=" form-control"   />
						</div>
					</div>
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File</label>
						<div class="form-group">
							<input type="file" onChange="return validate_video(this,'add')" name="userfile" class="form-control" id="file" required />
						</div>
					</div>

					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">Download Format Upload Laporan</label>
						<div class="form-group">
							<a href="<?php echo base_url()?>upload/file/format_laporan_tahunan.xls">Download Format laporan </a>
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
		var allowedFormats 	= ["xls"];
		var msg = "";

		
		
		if(!(allowedFormats.indexOf(extension) > -1)){
		
			//alert("Tipe ekstensi cover harus MP4");
			msg = "tipe file yang diizinkan XLS";
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

		}
			
			

		
	}
</script>