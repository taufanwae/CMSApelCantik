 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Alat Kontrasepsi</h3>
            </div>
            <?php echo form_open('stok_alat_kontrasepsi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipekb_id" class="control-label"><span class="text-danger">*</span>Jenis Kb</label>
						<div class="form-group">
							<select name="tipekb_id" class="form-control">
								<option value="">select jenis_kb</option>
								<?php 
								foreach($all_msttipekb as $jenis_kb)
								{
									$selected = ($jenis_kb['tipekb_id'] == $this->input->post('tipekb_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$jenis_kb['tipekb_id'].'" '.$selected.'>'.$jenis_kb['nama_tipe'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('tipekb_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jml_stok" class="control-label"><span class="text-danger">*</span>Jml Stok</label>
						<div class="form-group">
							<input type="text" name="jml_stok" value="<?php echo $this->input->post('jml_stok'); ?>" class="form-control" id="jml_stok" />
							<span class="text-danger"><?php echo form_error('jml_stok');?></span>
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