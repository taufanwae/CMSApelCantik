 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Image Banner Add</h3><br/>
              	<?php
              		if(!$this->session->flashdata('Message'))
              		{
              			echo '<h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              		}
              	 ?>
            </div>
            <?php echo form_open_multipart('imageslider/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="slider_file_name" class="control-label">File Gambar</label>
						<div class="form-group">
							<input type="file" accept="image/x-png,image/gif,image/jpeg" name="userfile" class="form-control" id="file" required />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_date" class="control-label">Tanggal Berakhir</label>
						<div class="form-group">
							<input type="text" name="end_date" value="<?php echo $this->input->post('end_date'); ?>" class="has-datepicker form-control" id="end_date" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="start_date" class="control-label">Tanggal Mulai</label>
						<div class="form-group">
							<input type="text" name="start_date" value="<?php echo $this->input->post('start_date'); ?>" class="has-datepicker form-control" id="start_date" />
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