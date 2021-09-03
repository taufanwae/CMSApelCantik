 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Jumlah Kartu Keluarga Kota Semarang</h3>
            </div>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-2">
                        <?php echo form_open('datakartukeluargagrafik/index',array('id'=>'myForm','method'=>'post')); ?>
                        <label for="kecamatan_id" class="control-label">Pilih Periode :</label>
                            <select onchange="submitForm()" class="form-control" name="idperiode">
                            <?php 
                                foreach($all_periode as $periode)
                                {
                                    $selected = ($periode['idperiode'] == $this->input->post('idperiode')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$periode['idperiode'].'" '.$selected.'>'.$periode['bulan']." ".$periode['tahun'].'</option>';
                                } 
                                ?>
                            </select>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div>
                  <canvas id="myChart"></canvas>
                </div>
                <table class="table table-bordered">
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
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function submitForm()
    {
            document.getElementById('myForm').submit();

    }
</script>

<script type="text/javascript">
                var ctx = document.getElementById('myChart').getContext("2d");
            var data = {
                 <?php 
                 $kecamatan = "";
                 $lakilaki = 0;
                 $perempuan = 0;
                    foreach ($dataperiode as $key) {
                        $kecamatan .=  '"'.$key['nama_kecamatan'].'",';
                        $lakilaki .= $key['jml_lakilaki'].",";
                        $perempuan .= $key['jml_perempuan'].",";
                    }

                    $kecamatan = substr($kecamatan, 0,-1);
                    $lakilaki = substr($lakilaki, 0,-1);
                    $perempuan = substr($perempuan, 0,-1);
                ?>
                labels: [
               
                <?php echo $kecamatan; ?>
                ],
                datasets: [
                    {
                        label: "Laki-laki",
                        fillColor: "#F38630",
                        strokeColor: "#F38630",
                        highlightFill: "rgba(231,76,60,0.75)",
                        highlightStroke: "rgba(231,76,60,1)",
                        backgroundColor: 'rgba(99, 132, 0, 0.6)',
                         borderColor: 'rgba(99, 132, 0, 1)',
                        data: [<?php echo $lakilaki; ?>]
                    },
                    {
                        label: "Perempuan",
                        fillColor: "#69D2E7",
                        strokeColor: "#69D2E7",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(153, 102, 255, 0.6)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        data: [<?php echo $perempuan; ?>]
                    }
                ]
            };
            //var myBarChart = new Chart(ctx).Bar(data);
            var barChart = new Chart(ctx, {
              type: 'bar',
              data: data
            });
</script>
