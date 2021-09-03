 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mstlokasipelayanan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lokasipelayanan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                   <thead> <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Nama Lokasi</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $n=1; foreach($mstlokasipelayanan as $m){ ?>
                    <tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $m['nama_kecamatan']; ?></td>
						<td><?php echo $m['nama_lokasi']; ?></td>
						<td>
                            <a href="<?php echo site_url('lokasipelayanan/edit/'.$m['lokasipelayanan_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lokasipelayanan/remove/'.$m['lokasipelayanan_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $n++; } ?></tbody>
                </table>              
            </div>
        </div>
    </div>
</div>
