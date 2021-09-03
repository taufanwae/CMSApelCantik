<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Data Register Pelayanan <?php echo ($this->input->post('nama_lengkap') ? $this->input->post('nama_lengkap') : $list_user_register_pelayanan['nama_lengkap']); ?></h3>
            </div>
			<?php echo form_open('reg_pelayanan/edit/'.$list_user_register_pelayanan['id_reg_pelayanan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipe_kb" class="control-label">Jenis Kb</label>
						<div class="form-group">
							<select readonly name="tipe_kb" class="form-control">
								<option value="">select jenis_kb</option>
								<?php 
								foreach($all_msttipekb as $jenis_kb)
								{
									$selected = ($jenis_kb['tipekb_id'] == $list_user_register_pelayanan['tipe_kb']) ? ' selected="selected"' : "";

									echo '<option value="'.$jenis_kb['tipekb_id'].'" '.$selected.'>'.$jenis_kb['nama_tipe'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lokasipelayanan_id" class="control-label">Lokasi Pelayanan</label>
						<div class="form-group">
							<select readonly  name="lokasipelayanan_id" class="form-control">
								<option value="">select lokasi layanan</option>
								<?php 
								foreach($all_mstlokasipelayanan as $lokasi_pelayanan)
								{
									$selected = ($lokasi_pelayanan['lokasipelayanan_id'] == $list_user_register_pelayanan['lokasipelayanan_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$lokasi_pelayanan['lokasipelayanan_id'].'" '.$selected.'>'.$lokasi_pelayanan['nama_lokasi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_ktp" class="control-label">No Ktp</label>
						<div class="form-group">
							<input readonly  type="text" name="no_ktp" value="<?php echo ($this->input->post('no_ktp') ? $this->input->post('no_ktp') : $list_user_register_pelayanan['no_ktp']); ?>" class="form-control" id="no_ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_lengkap" class="control-label">Nama Lengkap</label>
						<div class="form-group">
							<input readonly  type="text" name="nama_lengkap" value="<?php echo ($this->input->post('nama_lengkap') ? $this->input->post('nama_lengkap') : $list_user_register_pelayanan['nama_lengkap']); ?>" class="form-control" id="nama_lengkap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input  readonly type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $list_user_register_pelayanan['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_bpjs" class="control-label">Jaminan Kesehatan</label>
						<div class="form-group">
							<input  readonly type="text" name="no_bpjs" value="<?php echo ($this->input->post('no_bpjs') ? $this->input->post('no_bpjs') : $list_user_register_pelayanan['no_bpjs']); ?>" class="form-control" id="no_bpjs" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input  readonly type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $list_user_register_pelayanan['no_telp']); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="hidden" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $list_user_register_pelayanan['user_id']); ?>" name="user_id">
							
							<input type="hidden" value="$list_user_register_pelayanan['status_pendaftaran']" name="status_edited">
							<textarea  readonly name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $list_user_register_pelayanan['alamat']); ?></textarea>
						</div>
					</div>
					<?php if(in_array($list_user_register_pelayanan['status_pendaftaran'],array('3','4'))) 
					{
						?>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Status Pendaftaran</label>
						<div class="form-group">
							<?php 
							$status = "";
								switch ($list_user_register_pelayanan['status_pendaftaran']) {
		                            case '1':  $status = "Pending"; break;
		                            case '2':  $status = "Diproses"; break;
		                            case '3':  $status = "Diterima"; break;
		                            case '4':  $status = "Ditolak"; break;
		                        }
							?>
							<input  readonly type="text" name="status_pendaftaran" value="<?php echo $status; ?>" class="form-control" id="status_pendaftaran" />
						</div>
					</div>
					 <?php
                           }else {
                                 ?>

					<div class="col-md-6">
						<label for="alamat" class="control-label">Ubah Status Pendaftaran</label>
						<div class="form-group">
							<select name="status_pendaftaran" class="form-control">
								<?php 
									$selected1 = "";
									$selected2 = "";
									$selected3 = "";
									$selected4 = "";

									switch ($list_user_register_pelayanan['status_pendaftaran']) {
										case '1': $selected1 = "selected"; break;
										case '3': $selected3 = "selected"; break;
										case '4': $selected4 = "selected"; break;
									}


									echo '<option value="1" '.$selected1.'>Pending</option>
									<option value="3" '.$selected3.'>Diterima</option>
									<option value="4" '.$selected4.'>Ditolak</option>';
								?>
							</select>
						</div>
					</div>
				<?php } ?>

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