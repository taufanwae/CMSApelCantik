<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Artikel</h3>
            </div>
			<?php echo form_open_multipart('sekilasinfo/edit/'.$news__info['info_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="info_title" class="control-label"><span class="text-danger">*</span>Judul Artikel</label>
						<div class="form-group">
							<input type="text" name="info_title" value="<?php echo ($this->input->post('info_title') ? $this->input->post('info_title') : $news__info['info_title']); ?>" class="form-control" id="info_title" />
							<span class="text-danger"><?php echo form_error('info_title');?></span>
						</div>
					</div>

					
				</div>
				<div class="row clearfix">
					
					<div class="col-md-12">
						<label for="file_name" class="control-label">Gambar Header Artikel</label>
						<div class="form-group">
							<input type="file" accept="image/x-png,image/gif,image/jpeg" name="userfile" class="form-control" id="file" />
							<br/>gambar saat ini <br/><image src="<?php echo $news__info['image_url'];?>" width="200px">
						</div>
					</div>
					
					
				</div>
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="info_summary" class="control-label"><span class="text-danger">*</span>Summary Artikel (maksimal 200 huruf)</label>
						<div class="form-group">
							<textarea required name="info_summary" class="form-control" id="info_summary"><?php echo ($this->input->post('info_summary') ? $this->input->post('info_summary') : $news__info['info_summary']); ?></textarea>
							<span class="text-danger"><?php echo form_error('info_summary');?></span>
						</div>
					</div>
				</div>
				<div class="row clearfix">

					<div class="col-md-12">
						<label for="info_desc" class="control-label"><span class="text-danger">*</span>Detail Artikel</label>
						<div class="form-group">
							<textarea name="info_desc" class="form-control" id="info_desc"><?php echo ($this->input->post('info_desc') ? $this->input->post('info_desc') : $news__info['info_desc']); ?></textarea>
							<span class="text-danger"><?php echo form_error('info_desc');?></span>
						</div>
					</div>
				</div>
				<div class="row clearfix">

					<div class="col-md-6">
						<label for="active_status" class="control-label">Status Artikel</label>
						<div class="form-group">
							<select class="form-control" name="active_status">
								<?php $selected1 = $news__info['active_status'] == "1" ? "selected" : ""; ?>
								<?php $selected0 = $news__info['active_status'] == "0" ? "selected" : ""; ?>
								<option value="1" <?php echo $selected1; ?>>Aktif</option>
								<option value="0" <?php echo $selected0; ?>>Non Aktif</option>
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