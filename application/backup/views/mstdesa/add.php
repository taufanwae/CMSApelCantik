 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Desa</h3>
            </div>
            <?php echo form_open('mstdesa/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kecamatan_id" class="control-label"><span class="text-danger">*</span>Kecamatan</label>
						<div class="form-group">
							<select name="kecamatan_id" class="form-control">
								<option value="">Pilih kecamatan</option>
								<?php 
								foreach($all_mstkecamatan as $kecamatan)
								{
									$selected = ($kecamatan['kecamatan_id'] == $this->input->post('kecamatan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$kecamatan['kecamatan_id'].'" '.$selected.'>'.$kecamatan['nama_kecamatan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('kecamatan_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_desa" class="control-label"><span class="text-danger">*</span>Nama Desa</label>
						<div class="form-group">
							<input type="text" name="nama_desa" value="<?php echo $this->input->post('nama_desa'); ?>" class="form-control" id="nama_desa" />
							<span class="text-danger"><?php echo form_error('nama_desa');?></span>
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