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
            <div class="box-body">
                
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Nama Alat Kontrasepsi</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Tanggal Update Stok</th>
                        
                    </tr>
                    </thead>
                    <?php $no = 1; foreach($data->result_array() as $m){ ?>
                    <tr>
						<td class="text-center"><?php echo $m['nama_tipe']; ?></td>
                        <td class="text-center"><?php echo $m['jml_stok']; ?></td>
                        <td class="text-center"><?php echo date('d-M-y H:i',strtotime($m['updated_at'])); ?></td>
						
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

