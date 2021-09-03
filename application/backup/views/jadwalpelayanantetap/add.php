<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Info Jadwal Pelayanan Tetap Add</h3>
            </div>
            <?php echo form_open('jadwalpelayanantetap/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lokasipelayanan_id" class="control-label"><span class="text-danger">*</span>Lokasi Pelayanan</label>
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
							<span class="text-danger"><?php echo form_error('lokasipelayanan_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label"><span class="text-danger">*</span>Jadwal Pelayanan</label>
						<div class="form-group">
							<input type="text" name="tanggal" placeholder="Misal : Setiap hari" value="<?php echo $this->input->post('tanggal'); ?>" class=" form-control"  />
							<span class="text-danger"><?php echo form_error('tanggal');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_mulai" class="control-label"><span class="text-danger">*</span>Jam Mulai (format Jam:Menit , misal 08:00)</label>
						<div class="form-group">
							<input type="text" placeholder="Misal : 08:00" name="jam_mulai" value="<?php echo $this->input->post('jam_mulai'); ?>" class="form-control" id="jam_mulai" />
							<span class="text-danger"><?php echo form_error('jam_mulai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger">*</span>Jam Selesai (format Jam:Menit , misal 17:00)</label>
						<div class="form-group">
							<input type="text" placeholder="Misal : 17:00" name="jam_selesai" value="<?php echo $this->input->post('jam_selesai'); ?>" class="form-control" id="jam_selesai" />
							<span class="text-danger"><?php echo form_error('jam_selesai');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_selesai" class="control-label"><span class="text-danger"></span>Keterangan</label>
						<div class="form-group">
							<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
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