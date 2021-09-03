 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Edit</h3>
            </div>
			<?php echo form_open('useradmin/edit/'.$admin['admin_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="full_name" class="control-label"><span class="text-danger">*</span>Full Name</label>
						<div class="form-group">
							<input type="text" name="full_name" value="<?php echo ($this->input->post('full_name') ? $this->input->post('full_name') : $admin['full_name']); ?>" class="form-control" id="full_name" />
							<span class="text-danger"><?php echo form_error('full_name');?></span>
						</div>
					</div>
				
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $admin['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : ""); ?>" placeholder="Isi Password jika ingin ubah password, kosongkan password jika tidak ingin diubah" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="level_akses" class="control-label"><span class="text-danger">*</span>Level Akses</label>
						<div class="form-group">
							<select name="level_akses" onchange="showDiv()" class="form-control">
								<option value="">select level_akses</option>
								<?php 
								foreach($all_mstlevel_akses as $level_akses)
								{
									$selected = ($level_akses['level_id'] == $admin['level_akses']) ? ' selected="selected"' : "";

									echo '<option value="'.$level_akses['level_id'].'" '.$selected.'>'.$level_akses['nama_level'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('level_akses');?></span>
						</div>
					</div>
					<?php 
					$none = $admin['lokasipelayanan_id'] != "7" ? "" : "display: none";
					?>
					<div id="div_lokasi" class="col-md-6" style="<?php echo $none?>;">
						<label for="lokasipelayanan_id" class="control-label"><span class="text-danger">*</span>Untuk Lokasi Faskes / Pelayanan</label>
						<div class="form-group">
							<select name="lokasipelayanan_id" class="form-control">
								<option value="">Pilih Lokasi</option>
								<?php 
								foreach($all_mstlokasi as $unit)
								{
									$selected = ($unit['lokasipelayanan_id'] == $admin['lokasipelayanan_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$unit['lokasipelayanan_id'].'" '.$selected.'>'.$unit['nama_lokasi'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('unit_id');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="active_status" class="control-label">Active Status</label>
						<div class="form-group">
							<?php
								$selected1 = $admin['active_status'] == "1" ? "selected" : "";
								$selected2 = $admin['active_status'] == "0" ? "selected" : "";
							?>
							<select class="form-control" name="active_status">
								<option value="1" <?php echo $selected1; ?>>Aktif</option>
								<option value="0" <?php echo $selected2; ?>>Non Aktif</option>
							</select>
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
<script type="text/javascript">
	function showDiv()
	{
		var id = $('#level_akses').val();

		if(id == "7")
		{
			$('#div_lokasi').css("display", "");
		}else 
		{
			$('#div_lokasi').css("display", "none");
		}
	}
</script>