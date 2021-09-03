<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mstunit Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mstunit/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                    <thead><tr>
                        <th>No</th>
                        <th>Nama Unit</th>
                        <th>Tanggal Buat</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($mstunit as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['unit_name']; ?></td>
						<td><?php echo $m['created_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('mstunit/edit/'.$m['unit_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('mstunit/remove/'.$m['unit_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>                
            </div>
        </div>
    </div>
</div>
