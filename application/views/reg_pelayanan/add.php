<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">List User Register Pelayanan Add</h3>
            </div>
            <?php echo form_open('reg_pelayanan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_pelayanan" class="control-label">Jenis Pelayanan</label>
						<div class="form-group">
							<select name="id_pelayanan" class="form-control">
								<option value="">select jenis_pelayanan</option>
								<?php 
								foreach($all_jenis_pelayanan as $jenis_pelayanan)
								{
									$selected = ($jenis_pelayanan['id_pelayanan'] == $this->input->post('id_pelayanan')) ? ' selected="selected"' : "";

									echo '<option value="'.$jenis_pelayanan['id_pelayanan'].'" '.$selected.'>'.$jenis_pelayanan['id_pelayanan'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Aplikasi</label>
						<div class="form-group">
							<select name="user_id" class="form-control">
								<option value="">select user_aplikasi</option>
								<?php 
								foreach($all_mstunit as $user_aplikasi)
								{
									$selected = ($user_aplikasi['user_id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user_aplikasi['user_id'].'" '.$selected.'>'.$user_aplikasi['user_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipe_kb" class="control-label">Jenis Kb</label>
						<div class="form-group">
							<select name="tipe_kb" class="form-control">
								<option value="">select jenis_kb</option>
								<?php 
								foreach($all_msttipekb as $jenis_kb)
								{
									$selected = ($jenis_kb['tipekb_id'] == $this->input->post('tipe_kb')) ? ' selected="selected"' : "";

									echo '<option value="'.$jenis_kb['tipekb_id'].'" '.$selected.'>'.$jenis_kb['tipekb_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasipelayanan_id" class="control-label">Lokasi Pelayanan</label>
						<div class="form-group">
							<select name="lokasipelayanan_id" class="form-control">
								<option value="">select lokasi_pelayanan</option>
								<?php 
								foreach($all_mstlokasipelayanan as $lokasi_pelayanan)
								{
									$selected = ($lokasi_pelayanan['lokasipelayanan_id'] == $this->input->post('lokasipelayanan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$lokasi_pelayanan['lokasipelayanan_id'].'" '.$selected.'>'.$lokasi_pelayanan['lokasipelayanan_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_ktp" class="control-label">No Ktp</label>
						<div class="form-group">
							<input type="text" name="no_ktp" value="<?php echo $this->input->post('no_ktp'); ?>" class="form-control" id="no_ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_lengkap" class="control-label">Nama Lengkap</label>
						<div class="form-group">
							<input type="text" name="nama_lengkap" value="<?php echo $this->input->post('nama_lengkap'); ?>" class="form-control" id="nama_lengkap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_bpjs" class="control-label">No Bpjs</label>
						<div class="form-group">
							<input type="text" name="no_bpjs" value="<?php echo $this->input->post('no_bpjs'); ?>" class="form-control" id="no_bpjs" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="register_date" class="control-label">Register Date</label>
						<div class="form-group">
							<input type="text" name="register_date" value="<?php echo $this->input->post('register_date'); ?>" class="has-datetimepicker form-control" id="register_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
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