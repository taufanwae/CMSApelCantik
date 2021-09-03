<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Unit</h3>
            </div>
			<?php echo form_open('mstunit/edit/'.$unit['unit_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="unit_name" class="control-label"><span class="text-danger">*</span>Nama Unit</label>
						<div class="form-group">
							<input type="text" name="unit_name" value="<?php echo ($this->input->post('unit_name') ? $this->input->post('unit_name') : $unit['unit_name']); ?>" class="form-control" id="unit_name" />
							<span class="text-danger"><?php echo form_error('unit_name');?></span>
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