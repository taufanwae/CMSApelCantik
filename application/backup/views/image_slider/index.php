<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List Image Slider</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('imageslider/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead>
                        <tr>
                        <th>No</th>
                        <th>Gambar Slider</th>
                        <th>Nama File</th>
                        <th>Dibuat Oleh</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Status Slider</th>
                        <th>Actions</th>
                    </tr>
                   </thead><tbody>
                    <?php $no = 1; foreach($image_slider as $i){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><image src="<?php echo $i['slider_url']; ?>" width="100"></td>
						<td><?php echo $i['created_at']; ?></td>
						<td><?php echo $i['full_name']; ?></td>
						<td><?php echo $i['start_date']; ?></td>
						<td><?php echo $i['end_date']; ?></td>
						<td><?php echo $i['active_status'] == "1" ? "Aktif" : "Tidak Aktif"; ?></td>
						<td>
                            <a href="<?php echo site_url('imageslider/edit/'.$i['slider_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('imageslider/remove/'.$i['slider_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?></tbody>
                </table>
                             
            </div>
        </div>
    </div>
</div>
