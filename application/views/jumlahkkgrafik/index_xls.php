<?php 

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Data Jumlah Kartu Keluarga Kota Semarang.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

?>
<html>
<table border="1">
                    <thead>
                    <tr>
                        <th rowspan="2">Kecamatan</th>
                        <th colspan="2" class="text-center">Jenis Kelamin</th>
                        <th rowspan="2" class="text-center">Total</th>
                    </tr>
                    <tr>
                        <th class="text-center">Laki-laki</th>
                        <th class="text-center">Perempuan</th>
                    </tr>
                    </thead>
                    <?php $no = 1; foreach($dataperiode as $m){ ?>
                    <tr>
                        <td><?php echo $m['nama_kecamatan']; ?></td>
                        <td align="center"><?php echo number_format($m['jml_lakilaki']); ?></td>
                        <td align="center"><?php echo number_format($m['jml_perempuan']); ?></td>
                        <td align="center"><?php echo number_format($m['jml_lakilaki']+$m['jml_perempuan']); ?></td>
                        
                    </tr>
                    <?php $no++; } ?>
                </table> 
</html>