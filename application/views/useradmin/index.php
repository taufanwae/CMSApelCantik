 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">list User Admin</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('useradmin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                   <thead> <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Level Akses</th>
                        <th>Nama Lokasi Pelayanan</th>
                        <th>Status Aktif</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($mstadmin as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
                        <td><?php echo $m['full_name']; ?></td>
                        <td><?php echo $m['email']; ?></td>
						<td><?php echo $m['nama_level']; ?></td>
                        <td><?php echo $m['nama_lokasi']; ?></td>
						<td><?php echo $m['active_status'] == "1" ? "Aktif" : "Non Aktif"; ?></td>
						<td>
                            <a href="<?php echo site_url('useradmin/edit/'.$m['admin_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('useradmin/remove/'.$m['admin_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>               
            </div>
        </div>
    </div>
</div>
