<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usermenu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usermenu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead> <tr>
                        <th>No</th>
                        <th>Nama Level</th>
                        <th>Nama Menu</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($usermenu as $u){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $u['nama_level']; ?></td>
						<td><?php echo $u['menu_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('usermenu/edit/'.$u['idusermenu']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('usermenu/remove/'.$u['idusermenu']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>              
            </div>
        </div>
    </div>
</div>
