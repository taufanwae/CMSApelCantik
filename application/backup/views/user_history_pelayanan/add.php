<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Historis Pelayanan</h3>
            </div>
            <?php echo form_open('user_history_pelayanan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">Nama pengguna</label>
						<div class="form-group">
							<select name="user_id" class="form-control">
								<option value="">Pilih Pengguna</option>
								<?php 
								foreach($all_mstunit as $user_aplikasi)
								{
									$selected = ($user_aplikasi['user_id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user_aplikasi['user_id'].'" '.$selected.'>'.$user_aplikasi['full_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasipelayanan_id" class="control-label">Lokasi Pelayanan</label>
						<div class="form-group">
							<select name="lokasipelayanan_id" class="form-control">
								<option value="">Pilih Lokasi Pelayanan</option>
								<?php 
								foreach($all_mstlokasipelayanan as $lokasi_pelayanan)
								{
									$selected = ($lokasi_pelayanan['lokasipelayanan_id'] == $this->input->post('lokasipelayanan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$lokasi_pelayanan['lokasipelayanan_id'].'" '.$selected.'>'.$lokasi_pelayanan['nama_lokasi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_keluhan" class="control-label">Keluhan / Konsultasi</label>
						<div class="form-group">
							<textarea name="text_keluhan" class="form-control" id="text_keluhan"><?php echo $this->input->post('text_keluhan'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_tindakan" class="control-label">Tindakan</label>
						<div class="form-group">
							<textarea name="text_tindakan" class="form-control" id="text_tindakan"><?php echo $this->input->post('text_tindakan'); ?></textarea>
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