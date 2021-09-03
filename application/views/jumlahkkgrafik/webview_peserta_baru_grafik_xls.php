<?php 

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=".$judul.".xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

?>
<!DOCTYPE html>
<html>
  <table border="1">
                    <thead>
                    <tr>
                        <th class="text-center">Kecamatan</th>
                        <th class="text-center">IUD</th>
                        <th class="text-center">Suntik</th>
                        <th class="text-center">Implan</th>
                        <th class="text-center">Pil KB</th>
                        <th class="text-center">Kondom</th>
                        <th class="text-center">MOP</th>
                        <th class="text-center">MOW</th>
                        
                    </tr>
                    </thead>
                    <?php $no = 1; foreach($data->result_array() as $m){ ?>
                    <tr>
                        <td class="text-center"><?php echo $m['nama_kecamatan']; ?></td>
                        <td class="text-center"><?php echo $m['IUD']; ?></td>
                        <td class="text-center"><?php echo $m['Suntik']; ?></td>
                        <td class="text-center"><?php echo $m['Implan']; ?></td>
                        <td class="text-center"><?php echo $m['Pil']; ?></td>
                        <td class="text-center"><?php echo $m['Kondom']; ?></td>
                        <td class="text-center"><?php echo $m['MOP']; ?></td>
                        <td class="text-center"><?php echo $m['MOW']; ?></td>
                        
                    </tr>
                    <?php $no++; } ?>
                </table>  
                </html>



