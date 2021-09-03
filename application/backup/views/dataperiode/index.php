 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Master Periode Data</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('dataperiode/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead>
                        <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Actions</th>
                    </tr>
                   </thead>
                   <tbody>
                    <?php $no = 1; foreach($dataperiode as $m){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $m['bulan']; ?></td>
						<td><?php echo $m['tahun']; ?></td>
						<td>
                            <a href="<?php echo site_url('dataperiode/edit/'.$m['idperiode']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('dataperiode/remove/'.$m['idperiode']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                    </tbody>
                </table>             
            </div>
        </div>
    </div>
</div>
