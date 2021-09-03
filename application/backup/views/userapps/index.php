 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mstunit Listing</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                  <thead>  <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>No KTP</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Tanggal Registrasi</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($mstunit as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['full_name']; ?></td>
						<td><?php echo $m['email']; ?></td>
						<td><?php echo $m['no_hp']; ?></td>
						<td><?php echo $m['no_ktp']; ?></td>
                        <td><?php echo $m['nama_kecamatan']; ?></td>
                        <td><?php echo $m['nama_desa']; ?></td>
						<td><?php echo date('d-m-Y H:i',strtotime($m['created_at'])); ?></td>
						<td>
                            <a href="<?php echo site_url('userapps/edit/'.$m['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('userapps/remove/'.$m['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
