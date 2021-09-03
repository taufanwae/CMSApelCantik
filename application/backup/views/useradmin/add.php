 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Add</h3>
            </div>
            <?php echo form_open('useradmin/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
          			<div class="col-md-6">
						<label for="full_name" class="control-label"><span class="text-danger">*</span>Full Name</label>
						<div class="form-group">
							<input type="text" name="full_name" value="<?php echo $this->input->post('full_name'); ?>" class="form-control" id="full_name" />
							<span class="text-danger"><?php echo form_error('full_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit_id" class="control-label"><span class="text-danger">*</span>Unit</label>
						<div class="form-group">
							<select name="unit_id" class="form-control">
								<option value="">Pilih Unit</option>
								<?php 
								foreach($all_mstunit as $unit)
								{
									$selected = ($unit['unit_id'] == $this->input->post('unit_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$unit['unit_id'].'" '.$selected.'>'.$unit['unit_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('unit_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="level_akses" class="control-label"><span class="text-danger">*</span>Level Akses</label>
						<div class="form-group">
							<select name="level_akses" class="form-control">
								<option value="">select level_akses</option>
								<?php 
								foreach($all_mstlevel_akses as $level_akses)
								{
									$selected = ($level_akses['level_id'] == $this->input->post('level_akses')) ? ' selected="selected"' : "";

									echo '<option value="'.$level_akses['level_id'].'" '.$selected.'>'.$level_akses['nama_level'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('level_akses');?></span>
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