 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Aplikasi Edit</h3>
            </div>
			<?php echo form_open('userapps/edit/'.$user_aplikasi['user_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<!-- div class="col-md-6">
						<label for="active_status" class="control-label">Active Status</label>
						<div class="form-group">
							<input type="text" name="active_status" value="<?php echo ($this->input->post('active_status') ? $this->input->post('active_status') : $user_aplikasi['active_status']); ?>" class="form-control" id="active_status" />
						</div>
					</di -->
				
					<div class="col-md-6">
						<label for="full_name" class="control-label"><span class="text-danger">*</span>Nama Lengkap</label>
						<div class="form-group">
							<input type="text" name="full_name" value="<?php echo ($this->input->post('full_name') ? $this->input->post('full_name') : $user_aplikasi['full_name']); ?>" class="form-control" id="full_name" />
							<span class="text-danger"><?php echo form_error('full_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user_aplikasi['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp" class="control-label">No Hp</label>
						<div class="form-group">
							<input type="text" name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $user_aplikasi['no_hp']); ?>" class="form-control" id="no_hp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_ktp" class="control-label">No KTP</label>
						<div class="form-group">
							<input type="text" name="no_ktp" value="<?php echo ($this->input->post('no_ktp') ? $this->input->post('no_ktp') : $user_aplikasi['no_ktp']); ?>" class="form-control" id="no_ktp" />
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