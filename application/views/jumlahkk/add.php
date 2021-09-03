<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Data Jumlah Kartu Keluarga</h3>
              	<?php 
              	if($this->session->flashdata('Message'))
              	{
              		echo '<br><br><h3 class="box-title">'.$this->session->flashdata('Message').'</h3>';
              	}
              	?>
            </div>
            <?php echo form_open('datakartukeluarga/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kecamatan_id" class="control-label"><span class="text-danger">*</span>Kecamatan</label>
						<div class="form-group">
							<select name="kecamatan_id" class="form-control">
								<option value="">Pilih kecamatan</option>
								<?php 
								foreach($all_mstkecamatan as $kecamatan)
								{
									$selected = ($kecamatan['kecamatan_id'] == $this->input->post('kecamatan_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$kecamatan['kecamatan_id'].'" '.$selected.'>'.$kecamatan['nama_kecamatan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('kecamatan_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idperiode" class="control-label"><span class="text-danger">*</span>Periode</label>
						<div class="form-group">
							<select name="idperiode" class="form-control">
								<option value="">Pilih Periode</option>
								<?php 
								foreach($all_periode as $periode)
								{
									$selected = ($periode['idperiode'] == $this->input->post('idperiode')) ? ' selected="selected"' : "";

									echo '<option value="'.$periode['idperiode'].'" '.$selected.'>'.$periode['bulan']." ".$periode['tahun'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idperiode');?></span>
						</div>
					</div>
				</div>
				<div class="row clearfix">

					<div class="col-md-6">
						<label for="jml_lakilaki" class="control-label"><span class="text-danger">*</span>Jumlah Laki Laki</label>
						<div class="form-group">
							<input type="number" required name="jml_lakilaki" value="<?php echo $this->input->post('jml_lakilaki'); ?>" class="form-control" id="jml_lakilaki" />
							<span class="text-danger"><?php echo form_error('jml_lakilaki');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="jml_perempuan" class="control-label"><span class="text-danger">*</span>Jumlah Perempuan</label>
						<div class="form-group">
							<input type="number" required name="jml_perempuan" value="<?php echo $this->input->post('jml_perempuan'); ?>" class="form-control" id="jml_perempuan" />
							<span class="text-danger"><?php echo form_error('jml_perempuan');?></span>
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