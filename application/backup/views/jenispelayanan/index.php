 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jenis Pelayanan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jenispelayanan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                    <thead><tr>
                        <th>No</th>
                        <th>Nama Pelayanan</th>
                        <th>Dibuat Tanggal</th>
                        <th>Dibuat Oleh</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($jenis_pelayanan as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['nama_pelayanan']; ?></td>
						<td><?php echo date('d-m-Y',strtotime($m['created_at'])); ?></td>
						<td><?php echo $m['full_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('jenispelayanan/edit/'.$m['id_pelayanan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jenispelayanan/remove/'.$m['id_pelayanan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>
                               
            </div>
        </div>
    </div>
</div>
