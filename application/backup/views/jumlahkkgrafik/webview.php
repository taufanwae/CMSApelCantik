<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CMS Aplikasi Pelaporan dan Informasi Keluarga Kota Semarang</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
     <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Jumlah Kartu Keluarga Kota Semarang</h3>
            </div>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-2">
                        <?php echo form_open('datakartukeluargagrafik/webview',array('id'=>'myForm','method'=>'post')); ?>
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
              <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
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
