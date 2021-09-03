 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jenis Pelayanan Edit</h3>
            </div>
			<?php echo form_open('jenispelayanan/edit/'.$jenis_pelayanan['id_pelayanan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_pelayanan" class="control-label"><span class="text-danger">*</span>Nama Pelayanan</label>
						<div class="form-group">
							<input type="text" name="nama_pelayanan" value="<?php echo ($this->input->post('nama_pelayanan') ? $this->input->post('nama_pelayanan') : $jenis_pelayanan['nama_pelayanan']); ?>" class="form-control" id="nama_pelayanan" />
							<span class="text-danger"><?php echo form_error('nama_pelayanan');?></span>
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