<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Menu Edit</h3>
            </div>
			<?php echo form_open('usermenu/edit/'.$user_menu['idusermenu']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="level_id" class="control-label"><span class="text-danger">*</span>Level Akses</label>
						<div class="form-group">
							<select name="level_id" class="form-control">
								<option value="">select level_akses</option>
								<?php 
								foreach($all_mstlevel_akses as $level_akses)
								{
									$selected = ($level_akses['level_id'] == $user_menu['level_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$level_akses['level_id'].'" '.$selected.'>'.$level_akses['nama_level'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('level_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_id" class="control-label"><span class="text-danger">*</span>Menu</label>
						<div class="form-group">
							<select name="menu_id" class="form-control">
								<option value="">select menu</option>
								<?php 
								foreach($all_mstmenu as $menu)
								{
									$selected = ($menu['menu_id'] == $user_menu['menu_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$menu['menu_id'].'" '.$selected.'>'.$menu['menu_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('menu_id');?></span>
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