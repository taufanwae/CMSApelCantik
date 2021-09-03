<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Info Jadwalpelayanantetap Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jadwalpelayanantetap/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="exampleButtonExport">
                   <thead> <tr>
                        <th>No</th>
                        <th>Nama Lokasi Pelayanan</th>
                        <th>Jadwal Pelayanan</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Actions</th>
                    </tr></thead><tbody>
                    <?php $no = 1; foreach($info_jadwalpelayanantetap as $i){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $i['nama_lokasi']; ?></td>
						<td><?php echo $i['tanggal']; ?></td>
						<td><?php echo date('H:i',strtotime($i['jam_mulai'])); ?></td>
                        <td><?php echo date('H:i',strtotime($i['jam_selesai'])); ?></td>
						<td>
                            <a href="<?php echo site_url('jadwalpelayanantetap/edit/'.$i['info_jadwal_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jadwalpelayanantetap/remove/'.$i['info_jadwal_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?></tbody>
                </table>
                              
            </div>
        </div>
    </div>
</div>
