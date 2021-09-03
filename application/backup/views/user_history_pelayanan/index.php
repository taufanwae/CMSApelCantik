<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing History Pelayanan</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user_history_pelayanan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                    <thead><tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Lokasi Pelayanan</th>
                        <th>Tanggal Rekam</th>
                        <th>Keluhan</th>
                        <th>Tindakan</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $a = 1; foreach($user_history_pelayanan as $u){ ?>
                    <tr>
						<td><?php echo $a; ?></td>
						<td><?php echo $u['full_name']; ?></td>
						<td><?php echo $u['nama_lokasi']; ?></td>
						<td><?php echo date('d-M-Y H:i',strtotime($u['history_datetime'])); ?></td>
						<td><?php echo $u['text_keluhan']; ?></td>
						<td><?php echo $u['text_tindakan']; ?></td>
						<td>
                            <a href="<?php echo site_url('user_history_pelayanan/edit/'.$u['id_history']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user_history_pelayanan/remove/'.$u['id_history']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php  } ?></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
