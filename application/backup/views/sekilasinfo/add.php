<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Artikel Baru</h3>
            </div>
            <?php echo form_open_multipart('sekilasinfo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="info_title" class="control-label"><span class="text-danger">*</span>Judul Artikel</label>
						<div class="form-group">
							<input type="text" name="info_title" value="<?php echo $this->input->post('info_title'); ?>" class="form-control" id="info_title" required />
							<span class="text-danger"><?php echo form_error('info_title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_name" class="control-label">Gambar Header Artikel</label>
						<div class="form-group">
							<input type="file" accept="image/x-png,image/gif,image/jpeg" name="userfile" class="form-control" id="file" required />
						</div>
					</div>
					
				</div>
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="info_summary" class="control-label"><span class="text-danger">*</span>Summary Artikel (maksimal 200 huruf)</label>
						<div class="form-group">
							<textarea required name="info_summary" class="form-control" id="info_summary"><?php echo $this->input->post('info_summary'); ?></textarea>
							<span class="text-danger"><?php echo form_error('info_summary');?></span>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="info_desc" class="control-label"><span class="text-danger">*</span>Detail Artikel</label>
						<div class="form-group">
							<textarea required name="info_desc" class="form-control" id="info_desc"><?php echo $this->input->post('info_desc'); ?></textarea>
							<span class="text-danger"><?php echo form_error('info_desc');?></span>
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