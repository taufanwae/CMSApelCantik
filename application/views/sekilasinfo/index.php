<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Artikel</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sekilasinfo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead> <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Gambar Artikel</th>
                        <th>Dibuat Oleh</th>
                        <th>Dibuat Tanggal</th>
                        <th>Status Artikel</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($mstinfo as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['info_title']; ?></td>
                        <td><image src="<?php echo $m['image_url']; ?>" width="100"></td>
						<td><?php echo $m['full_name']; ?></td>
						<td><?php echo date('d-m-Y H:i',strtotime($m['created_at'])); ?></td>
						<td><?php echo $m['active_status'] == "1" ? "Aktif" : "Non Aktif"; ?></td>
						<td>
                            <a href="<?php echo site_url('sekilasinfo/edit/'.$m['info_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sekilasinfo/remove/'.$m['info_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
