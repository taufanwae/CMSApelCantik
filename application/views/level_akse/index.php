 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mstlevel Akses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('levelakses/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                    <thead><tr>
                        <th>No</th>
                        <th>Nama Level</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($mstlevel_akses as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['nama_level']; ?></td>
						<td>
                            <a href="<?php echo site_url('levelakses/edit/'.$m['level_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('levelakses/remove/'.$m['level_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
