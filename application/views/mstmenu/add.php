<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Menu Add</h3>
            </div>
            <?php echo form_open('mstmenu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="parent_menu" class="control-label">Parent Menu</label>
						<div class="form-group">
							<select name="parent_menu" class="form-control">
								<option value="0">-</option>
								<?php 
								foreach($all_mstmenu as $menu)
								{
									$selected = ($menu['menu_id'] == $this->input->post('parent_menu')) ? ' selected="selected"' : "";

									echo '<option value="'.$menu['menu_id'].'" '.$selected.'>'.$menu['menu_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_name" class="control-label">Nama Menu</label>
						<div class="form-group">
							<input type="text" name="menu_name" value="<?php echo $this->input->post('menu_name'); ?>" class="form-control" id="menu_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="script_menu" class="control-label">Url Menu</label>
						<div class="form-group">
							<input type="text" name="script_menu" value="<?php echo $this->input->post('script_menu'); ?>" class="form-control" id="script_menu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_fas" class="control-label">Icon Menu</label>
						<div class="form-group">
							<input type="text" name="menu_fas" value="<?php echo $this->input->post('menu_fas'); ?>" class="form-control" id="menu_fas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="active_status" class="control-label">Status Menu</label>
						<div class="form-group">
							<select name="active_status" class="form-control">
								<option value="1">Aktif</option>
								<option value="0">Non Aktif</option>
								?>
							</select>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>