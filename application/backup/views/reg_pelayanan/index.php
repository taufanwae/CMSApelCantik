 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List User Registerasi Pelayanan</h3>
            	<!-- <div class="box-tools">
                    <a href="<?php echo site_url('reg_pelayanan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div> -->
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                    <thead><tr>
                        <th>No</th>
                        <th>Nama Layanan</th>
                        <th>No KTP</th>
                        <th>Nama Lengkap</th>
                        <th>Lokasi Pelayanan</th>
                        <th>No Telp</th>
                        <th>Tanggal Registrasi</th>
                        <th>Status Pendaftaran</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($reg_pelayanan as $r){ 

                        switch ($r['status_pendaftaran']) {
                            case '1':  $status = "Pending"; break;
                            case '2':  $status = "Diproses"; break;
                            case '3':  $status = "Selesai"; break;
                            case '4':  $status = "Ditolak"; break;
                        }
                        ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $r['nama_pelayanan']; ?></td>
						<td><?php echo $r['no_ktp']; ?></td>
						<td><?php echo $r['nama_lengkap']; ?></td>
						<td><?php echo $r['nama_lokasi']; ?></td>
						<td><?php echo $r['no_telp']; ?></td>
						<td><?php echo date('d-m-Y',strtotime($r['register_date'])); ?></td>
                        <td><label><?php echo $status; ?></label></td>
						<td>
                            <a href="<?php echo site_url('reg_pelayanan/edit/'.$r['id_reg_pelayanan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Detail</a> 
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>
                          
            </div>
        </div>
    </div>
</div>
