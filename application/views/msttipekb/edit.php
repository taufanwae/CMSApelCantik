<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jenis Kb Edit</h3>
            </div>
			<?php echo form_open('msttipekb/edit/'.$jenis_kb['tipekb_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_tipe" class="control-label"><span class="text-danger">*</span>Nama Tipe</label>
						<div class="form-group">
							<input type="text" name="nama_tipe" value="<?php echo ($this->input->post('nama_tipe') ? $this->input->post('nama_tipe') : $jenis_kb['nama_tipe']); ?>" class="form-control" id="nama_tipe" />
							<span class="text-danger"><?php echo form_error('nama_tipe');?></span>
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