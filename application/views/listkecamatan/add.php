<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kecamatan Add</h3>
            </div>
            <?php echo form_open('listkecamatan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_kecamatan" class="control-label"><span class="text-danger">*</span>Nama Kecamatan</label>
						<div class="form-group">
							<input type="text" name="nama_kecamatan" value="<?php echo $this->input->post('nama_kecamatan'); ?>" class="form-control" id="nama_kecamatan" />
							<span class="text-danger"><?php echo form_error('nama_kecamatan');?></span>
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