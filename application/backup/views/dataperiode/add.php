<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Periode Data</h3>
            </div>
            <?php echo form_open('dataperiode/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="bulan" class="control-label"><span class="text-danger">*</span>Bulan</label>
						<div class="form-group">
							<select name="bulan" class="form-control">
								<option value="">Pilih Bulan</option>
								<?php 
								foreach($arrbulan as $bulan)
								{
									$selected = ($bulan == $this->input->post('nama_bulan')) ? ' selected="selected"' : "";

									echo '<option value="'.$bulan.'" '.$selected.'>'.$bulan.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('bulan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tahun" class="control-label"><span class="text-danger">*</span>Tahun</label>
						<div class="form-group">
							<select name="tahun" class="form-control">
								<option value="">Pilih Tahun</option>
								<?php 
								for($a = date('Y'); $a > 2004; $a--)
								{
									$selected = ($a == $this->input->post('tahun')) ? ' selected="selected"' : "";

									echo '<option value="'.$a.'" '.$selected.'>'.$a.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('tahun');?></span>
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