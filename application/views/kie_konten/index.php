<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List Data Konten</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kiekonten/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="example2">
                   <thead>
                        <tr>
                        <th>No</th>
                        <th>Konten</th>
                        <th>Judul File</th>
                        <th>Jenis Konten</th>
                        <th>Dibuat Oleh</th>
                        <th>Status File</th>
                        <th>Actions</th>
                    </tr>
                   </thead><tbody>
                    <?php $no = 1; foreach($image_slider as $i){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><a href="<?php echo $i['slider_url']; ?>" target="_blank">klik untuk lihat</a></td> 
                        <td><?php echo $i['judul']; ?></td>
                        <td><?php echo $i['jenis']; ?></td>
                        <td><?php echo $i['full_name']; ?></td>
                        <td><?php echo $i['active_status'] == "1" ? "Aktif" : "Tidak Aktif"; ?></td>
						<td>
                            <a href="<?php echo site_url('kiekonten/edit/'.$i['slider_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit / Lihat</a> 
                            <a href="<?php echo site_url('kiekonten/remove/'.$i['slider_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?></tbody>
                </table>
                             
            </div>
        </div>
    </div>
</div>
