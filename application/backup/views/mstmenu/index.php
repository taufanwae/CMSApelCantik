<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mstmenu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mstmenu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                    <thead><tr>
                        <th>No</th>
                        <th>Parent Menu</th>
                        <th>Nama Menu</th>
                        <th>URL Menu</th>
                        <th>Icon Menu</th>
                        <th>Status Menu</th>
                        <th>Aksi</th>
                    </tr></thead><tbody>
                    <?php
                    $i = 1;
                     foreach($mstmenu as $m){
                       ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $m['parent_menu_name'] == "" ? "-" : $m['parent_menu_name']; ?></td>
						<td><?php echo $m['menu_name']; ?></td>
						<td><?php echo $m['script_menu']; ?></td>
						<td><i class="<?php echo $m['menu_fas']; ?>"></i></td>
						<td><?php echo $m['active_status'] = "1" ? "Aktif" : "Non Aktif"; ?></td>
						<td>
                            <a href="<?php echo site_url('mstmenu/edit/'.$m['menu_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Ubah</a> 
                            <a href="<?php echo site_url('mstmenu/remove/'.$m['menu_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; } ?></tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
