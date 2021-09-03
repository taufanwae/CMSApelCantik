<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Info Jadwal Pelayanan Terpusat</h3>
            </div>
			<?php echo form_open('jadwalpelayananterpusat/edit/'.$info_jadwal_pelayanan_terpusat['jadwal_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kecamatan_id" class="control-label"><span class="text-danger">*</span>Lokasi Pelayanan</label>
						<div class="form-group">
							<select name="kecamatan_id" class="form-control">
								<option value="">Pilih Lokasi Pelayanan</option>
								<?php 
								foreach($all_mstlokasipelayanan as $lokasi_pelayanan)
								{
									$selected = ($lokasi_pelayanan['kecamatan_id'] == $info_jadwal_pelayanan_terpusat['kecamatan_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$lokasi_pelayanan['kecamatan_id'].'" '.$selected.'>'.$lokasi_pelayanan['nama_kecamatan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('kecamatan_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger"></span>Tempat pelayanan</label>
						<div class="form-group">
							<input type="text" name="tempat_pelayanan" value="<?php echo ($this->input->post('tempat_pelayanan') ? $this->input->post('tempat_pelayanan') : $info_jadwal_pelayanan_terpusat['tempat_pelayanan']); ?>" class="form-control" />
							<span class="text-danger"><?php echo form_error('tempat_pelayanan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label"><span class="text-danger">*</span>Tanggal</label>
						<div class="form-group">
							<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $info_jadwal_pelayanan_terpusat['tanggal']); ?>" class="has-datepicker form-control" id="tanggal" />
							<span class="text-danger"><?php echo form_error('tanggal');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_mulai" class="control-label"><span class="text-danger">*</span>Jam Mulai (format Jam:Menit , misal 08:00)</label>
						<div class="form-group">
							<input type="text" name="jam_mulai" value="<?php echo ($this->input->post('jam_mulai') ? $this->input->post('jam_mulai') : $info_jadwal_pelayanan_terpusat['jam_mulai']); ?>" class="form-control" id="jam_mulai" />
							<span class="text-danger"><?php echo form_error('jam_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger">*</span>Jam Selesai (format Jam:Menit , misal 17:00)</label>
						<div class="form-group">
							<input type="text" name="jam_selesai" value="<?php echo ($this->input->post('jam_selesai') ? $this->input->post('jam_selesai') : $info_jadwal_pelayanan_terpusat['jam_selesai']); ?>" class="form-control" id="jam_selesai" />
							<span class="text-danger"><?php echo form_error('jam_selesai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger"></span>Keterangan / Info</label>
						<div class="form-group">
							<input type="text" name="keterangan" value="<?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $info_jadwal_pelayanan_terpusat['keterangan']); ?>" class="form-control" id="keterangan" />
							<span class="text-danger"><?php echo form_error('keterangan');?></span>
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