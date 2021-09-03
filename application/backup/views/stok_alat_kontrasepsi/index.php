 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Stok Alat Kontrasepsi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('stok_alat_kontrasepsi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                    <thead><tr>
                        <th>No</th>
                        <th>Tipekb Id</th>
                        <th>Jml Stok</th>
                        <th>Tanggal Stok Update</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($stok_alat_kontrasepsi as $s){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $s['tipekb_id']; ?></td>
						<td><?php echo $s['jml_stok']; ?></td>
						<td><?php echo date('d-m-Y H:i',strtotime($s['updated_at'])); ?></td>
						<td>
                            <a href="<?php echo site_url('stok_alat_kontrasepsi/edit/'.$s['stok_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('stok_alat_kontrasepsi/remove/'.$s['stok_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
