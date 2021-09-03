<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Menu Edit</h3>
            </div>
			<?php echo form_open('mstmenu/edit/'.$menu['menu_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="parent_menu" class="control-label">Parent Menu</label>
						<div class="form-group">
							<select name="parent_menu" class="form-control">
								<option value="0">-</option>
								<?php 
								foreach($all_mstmenu as $menus)
								{

									if($menus['parent_menu'] != "0")
									{
										foreach ($all_mstmenu as $key) {
											if($key['menu_id'] == $menus['parent_menu'])
											{									
												echo '<option value="'.$key['menu_id'].'" selected>'.$key['menu_name'].'</option>';
											}
										}
									}
									echo '<option value="'.$menus['menu_id'].'">'.$menus['menu_name'].'</option>';

								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_name" class="control-label">Nama Menu</label>
						<div class="form-group">
							<input type="text" name="menu_name" value="<?php echo $menu['menu_name']; ?>" class="form-control" id="menu_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="script_menu" class="control-label">URL Menu</label>
						<div class="form-group">
							<input type="text" name="script_menu" value="<?php echo ($this->input->post('script_menu') ? $this->input->post('script_menu') : $menu['script_menu']); ?>" class="form-control" id="script_menu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_fas" class="control-label">Icon Menu</label>
						<div class="form-group">
							<input type="text" name="menu_fas" value="<?php echo ($this->input->post('menu_fas') ? $this->input->post('menu_fas') : $menu['menu_fas']); ?>" class="form-control" id="menu_fas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="active_status" class="control-label">Status Menu</label>
						<div class="form-group">
							<select name="active_status" class="form-control">
								<?php $selected = $this->input->post('active_status') == "0" ? "selected" : ""; 

								?>
								<option value="1" <?php echo $selected; ?> >Aktif</option>
								<option value="0" <?php echo $selected; ?> >Non Aktif</option>
								?>
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