 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Image Banner Edit</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
			<?php echo form_open_multipart('imageslider/edit/'.$image_banner['slider_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File Gambar</label>
						<div class="form-group">
							<input type="file" accept="image/x-png,image/gif,image/jpeg" name="userfile" class="form-control" id="file" />
							<br/>gambar saat ini <br/><image src="<?php echo $image_banner['slider_url'];?>" width="400px">
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="start_date" class="control-label">Tanggal Mulai</label>
						<div class="form-group">
							<input type="text" name="start_date" value="<?php echo ($this->input->post('start_date') ? $this->input->post('start_date') : $image_banner['start_date']); ?>" class="has-datepicker form-control" id="start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_date" class="control-label">Tanggal Berakhir</label>
						<div class="form-group">
							<input type="text" name="end_date" value="<?php echo ($this->input->post('end_date') ? $this->input->post('end_date') : $image_banner['end_date']); ?>" class="has-datepicker form-control" id="end_date" />
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
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>