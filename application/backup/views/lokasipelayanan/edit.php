<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lokasi Pelayanan Edit</h3>
            </div>
			<?php echo form_open('lokasipelayanan/edit/'.$lokasi_pelayanan['lokasipelayanan_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kecamatan_id" class="control-label"><span class="text-danger">*</span>Kecamatan</label>
						<div class="form-group">
							<select name="kecamatan_id" class="form-control">
								<option value="">select kecamatan</option>
								<?php 
								foreach($all_mstkecamatan as $kecamatan)
								{
									$selected = ($kecamatan['kecamatan_id'] == $lokasi_pelayanan['kecamatan_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$kecamatan['kecamatan_id'].'" '.$selected.'>'.$kecamatan['nama_kecamatan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('kecamatan_id');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="nama_lokasi" class="control-label"><span class="text-danger">*</span>Nama Lokasi</label>
						<div class="form-group">
							<input type="text" name="nama_lokasi" value="<?php echo ($this->input->post('nama_lokasi') ? $this->input->post('nama_lokasi') : $lokasi_pelayanan['nama_lokasi']); ?>" class="form-control" id="nama_lokasi" />
							<span class="text-danger"><?php echo form_error('nama_lokasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipekb" class="control-label"><span class="text-danger">*</span>Layanan KB</label>
						<div class="form-group">
							<?php 
								foreach($all_tipekb as $tipekb)
								{
									 // $selected = ($tipekb['tipekb_id'] == $lokasi_pelayanan['tipekb_id']) ? ' selected="selected"' : "";
									$checked = "";

									foreach ($layanankb as $key) {
										if($key['tipekb_id'] == $tipekb['tipekb_id'])
										{

											$checked = "checked";
											break;
										}

									}

									echo '<div class="checkbox">
											  <label><input type="checkbox" name="tipekb[]" '.$checked.' value="'.$tipekb['tipekb_id'].'">'.$tipekb['nama_tipe'].'</label>
										</div>';


								} 
							?>
							<span class="text-danger"><?php echo form_error('tipekb');?></span>
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