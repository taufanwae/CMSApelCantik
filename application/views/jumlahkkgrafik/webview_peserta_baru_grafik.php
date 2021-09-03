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
                <h3 class="box-title"><?php echo $judul; ?></h3>
            </div>
                <div>
                  <canvas id="myChart"></canvas>
                </div><br/>&nbsp;
            <div class="box-body">
                
                <table class="table table-bordered">
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
                </table><br/><br> 
                <div>
                    <a class="button btn btn-primary" href="<?php echo site_url().$link?>">Download File Excel</a>
                </div>                 
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
                var ctx = document.getElementById('myChart').getContext("2d");
            var data = {
                 <?php 
                 $kecamatan = "";
                 $IUD = "";
                 $Suntik = "";
                 $Implan = "";
                 $Pil = "";
                 $Kondom = "";
                 $MOW = "";
                 $MOP = "";

                    foreach ($data->result_array() as $key) {
                        $kecamatan  .=  '"'.$key['nama_kecamatan'].'",';
                         $IUD       .= $key['IUD'].",";
                         $Suntik    .= $key['Suntik'].",";
                         $Implan    .= $key['Implan'].",";
                         $Pil       .= $key['Pil'].",";
                         $Kondom    .= $key['Kondom'].",";
                         $MOW    .= $key['MOW'].",";
                         $MOP    .= $key['MOP'].",";
                    }
                    // var_dump($Suntik); die;

                    $kecamatan  = substr($kecamatan, 0,-1);
                    $IUD        = substr($IUD, 0,-1);
                    $Suntik     = substr($Suntik, 0,-1);
                    $Implan     = substr($Implan, 0,-1);
                    $Pil        = substr($Pil, 0,-1);
                    $Kondom     = substr($Kondom, 0,-1);
                    $MOW     = substr($MOW, 0,-1);
                    $MOP     = substr($MOP, 0,-1);
                ?>
                labels: [
                <?php echo $kecamatan; ?>
                ],
                datasets: [
                    {
                        label: "IUD",
                        fillColor: "#F38630",
                        strokeColor: "#F38630",
                        highlightFill: "rgba(231,76,60,0.75)",
                        highlightStroke: "rgba(231,76,60,1)",
                        backgroundColor: 'rgba(99, 132, 0, 0.6)',
                        borderColor: 'rgba(99, 132, 0, 1)',
                        data: [<?php echo $IUD; ?>]
                    },
                    {
                        label: "Suntik",
                        fillColor: "#69D2E7",
                        strokeColor: "#69D2E7",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(105, 210, 231, 0.6)',
                        borderColor: 'rgba(105, 210, 231, 1)',
                        data: [<?php echo $Suntik; ?>]
                    },
                    {
                        label: "Implan",
                        fillColor: "#24A512",
                        strokeColor: "#24A512",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(36, 165, 18, 0.6)',
                        borderColor: 'rgba(36, 165, 18, 1)',
                        data: [<?php echo $Implan; ?>]
                    },
                    {
                        label: "Pil KB",
                        fillColor: "#1D12A5",
                        strokeColor: "#1D12A5",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(29, 18, 165, 0.6)',
                        borderColor: 'rgba(29, 18, 165, 1)',
                        data: [<?php echo $Pil; ?>]
                    },
                    {
                        label: "Kondom",
                        fillColor: "#A51222",
                        strokeColor: "#A51222",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(165, 18, 34, 255, 0.6)',
                        borderColor: 'rgba(165, 18, 34, 1)',
                        data: [<?php echo $Kondom; ?>]
                    },
                    {
                        label: "MOW",
                        fillColor: "#F9280B",
                        strokeColor: "#F9280B",
                        highlightFill: "rgba(49,48,48,0.75)",
                        highlightStroke: "rgba(49,48,48,1)",
                        backgroundColor: 'rgba(249, 40, 11, 1, 0.6)',
                        borderColor: 'rgba(249, 40, 11, 1)',
                        data: [<?php echo $MOW; ?>]
                    },
                    {
                        label: "MOP",
                        fillColor: "#95A5A6",
                        strokeColor: "#95A5A6",
                        highlightFill: "rgba(149, 165, 166, 1)",
                        highlightStroke: "rgba(149, 165, 166, 1)",
                        backgroundColor: 'rgba(149, 165, 166, 1, 0.6)',
                        borderColor: 'rgba(149, 165, 166, 1)',
                        data: [<?php echo $MOP; ?>]
                    }
                ]
            };
            //var myBarChart = new Chart(ctx).Bar(data);
            var barChart = new Chart(ctx, {
              type: 'bar',
              data: data
            });
</script>

