 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Jumlah Kartu Keluarga Kota Semarang</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('datakartukeluarga/add'); ?>" class="btn btn-success btn-sm">Add</a> 

                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Periode</th>
						<th>Kecamatan</th>
						<th>Laki Laki</th>
                        <th>Perempuan</th>
                        <th>Total</th>
						<th>Actions</th>
                    </tr>
                    <?php $no = 1; foreach($dataperiode as $m){ ?>
                    <tr>
                        <td><?php echo $m['bulan']." ".$m['tahun']; ?></td>
						<td><?php echo $m['nama_kecamatan']; ?></td>
						<td><?php echo number_format($m['jml_lakilaki']); ?></td>
                        <td><?php echo number_format($m['jml_perempuan']); ?></td>
                        <td><?php echo number_format($m['jml_lakilaki']+$m['jml_perempuan']); ?></td>
						<td>
                            <a href="<?php echo site_url('datakartukeluarga/edit/'.$m['idjumlahkk']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('datakartukeluarga/remove/'.$m['idjumlahkk']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>               
            </div>
        </div>
    </div>
</div>
