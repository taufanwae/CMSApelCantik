<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Level Akses Edit</h3>
            </div>
			<?php echo form_open('levelakses/edit/'.$level_akses['level_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_level" class="control-label"><span class="text-danger">*</span>Nama Level</label>
						<div class="form-group">
							<input type="text" name="nama_level" value="<?php echo ($this->input->post('nama_level') ? $this->input->post('nama_level') : $level_akses['nama_level']); ?>" class="form-control" id="nama_level" />
							<span class="text-danger"><?php echo form_error('nama_level');?></span>
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