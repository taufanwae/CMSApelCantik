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
                <center><h3 class="box-title">LAPORAN TAHUNAN</h3></center>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <?php 
                                $no1 = 0;
                                foreach ($data_excell as $key => $value) {
                                    $no1++;
                                    # code...
                                   if($no1 == 0)
                                   {

                                        foreach ($value as $dt) {
                                            echo "\t\t<th class='text-center'>$dt</th>\n";
                                        }
                                   }
                                }
                             ?>
                            </tr>
                        </thead>
                        <tbody>
                             <?php 
                                $no = 0;
                                foreach ($data_excell as $key => $value) {
                                    $no++;
                                    # code...
                                   if($no > 0)
                                   {
                                         echo "\t<tr>\n";

                                        foreach ($value as $dt) {
                                            echo "\t\t<td>$dt</td>\n";
                                        }
                                        echo "\t</tr>\n";
                                   }
                                }
                             ?>
                        </tbody>
                    </table>
                </div>            
                <div>
                    <a class="button btn btn-primary" href="<?php echo base_url().$link;?>">Download File Excel</a>
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

    function submitForm()
    {
            document.getElementById('myForm').submit();

    }
</script>

