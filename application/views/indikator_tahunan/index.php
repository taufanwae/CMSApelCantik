<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Tahunan</h3>
            	<?php 
                    if(count($image_slider) < 1)
                    {
                            ?>
                            <div class="box-tools">
                                <a href="<?php echo site_url('indikatortahunan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                            </div>
                            
                            <?php
                    }

                ?>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama File</th>
                        <th>Actions</th>
                    </tr>
                   </thead><tbody>
                    <?php $no = 1; foreach($image_slider as $i){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $i['nama_file']; ?></td>
						<td>
                            <a href="<?php echo site_url('indikatortahunan/edit/'.$i['id_laporan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('indikatortahunan/remove/'.$i['id_laporan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?></tbody>
                </table>
                             
            </div>
        </div>
    </div>
</div>
