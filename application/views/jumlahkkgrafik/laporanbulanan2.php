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
                <center><h3 class="box-title">CAPAIAN LAPORAN TINGKAT KOTA SEMARANG TAHUN 2021</h3></center>
            </div>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-2">
                        <?php echo form_open('laporanbulanan/webview',array('id'=>'myForm','method'=>'post')); ?>
                        <label for="kecamatan_id" class="control-label">Pilih Tahun :</label>
                            <select onchange="submitForm()" class="form-control" name="idperiode">
                            <?php 
                                for($a = date('Y'); $a >= date('Y'); $a--)
                                {
                                    $selected = ($a == $this->input->post('tahun')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$a.'" '.$selected.'>'.$a.'</option>';
                                } 
                                ?>
                            </select>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" valign="center" rowspan="2">NO</th>
                                <th class="text-center" rowspan="2">INDIKATOR</th>
                                <th class="text-center" colspan="13">CAPAIAN (BULAN)</th>
                            </tr>
                            <tr>
                                <th class="text-center">DES 2020</th>
                                <th class="text-center">JAN</th>
                                <th class="text-center">FEB</th>
                                <th class="text-center">MAR</th>
                                <th class="text-center">APR</th>
                                <th class="text-center">MEI</th>
                                <th class="text-center">JUN</th>
                                <th class="text-center">JUL</th>
                                <th class="text-center">AGT</th>
                                <th class="text-center">SEP</th>
                                <th class="text-center">OKT</th>
                                <th class="text-center">NOV</th>
                                <th class="text-center">DES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jumlah PUS</td>
                                <td align="right">254,260</td>
                                <td align="right">237,022</td>
                                <td align="right">238,058</td>
                                <td align="right">237,894</td>
                                <td align="right">236,907</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jumlah PB</td>
                                <td align="right">1,772</td>
                                <td align="right">2,095</td>
                                <td align="right">2,036</td>
                                <td align="right">1,624</td>
                                <td align="right">1,846</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jumlah PB SD</td>
                                <td align="right">23,688</td>
                                <td align="right">2,095</td>
                                <td align="right">4,131</td>
                                <td align="right">5,755</td>
                                <td align="right">7,601</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Jumlah PA</td>
                                <td align="right">195,620</td>
                                <td align="right">169,044</td>
                                <td align="right">170,650</td>
                                <td align="right">172,200</td>
                                <td align="right">171,778</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Jumlah MKJP</td>
                                <td align="right">49,276</td>
                                <td align="right">47,319</td>
                                <td align="right">47,807</td>
                                <td align="right">47,534</td>
                                <td align="right">47,863</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Jumlah Unmetneed</td>
                                <td align="right">26,251</td>
                                <td align="right">32,642</td>
                                <td align="right">31,868</td>
                                <td align="right">30,854</td>
                                <td align="right">30,342</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Jumlah BKB</td>
                                <td align="right">12,359</td>
                                <td align="right">12,361</td>
                                <td align="right">12,361</td>
                                <td align="right">12,336</td>
                                <td align="right">12,336</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Jumlah BKR</td>
                                <td align="right">5,057</td>
                                <td align="right">5,053</td>
                                <td align="right">5,053</td>
                                <td align="right">4,918</td>
                                <td align="right">4,924</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Jumlah BKL</td>
                                <td align="right">3,642</td>
                                <td align="right">3,459</td>
                                <td align="right">3,459</td>
                                <td align="right">3,459</td>
                                <td align="right">3,459</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Hamil</td>
                                <td align="right">7,352</td>
                                <td align="right">7,503</td>
                                <td align="right">7,457</td>
                                <td align="right">7,373</td>
                                <td align="right">7,374</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>PB Pasca Persalinan</td>
                                <td align="right">523</td>
                                <td align="right">333</td>
                                <td align="right">480</td>
                                <td align="right">485</td>
                                <td align="right">500</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>PB Pasca Keguguran</td>
                                <td align="right">51</td>
                                <td align="right">11</td>
                                <td align="right">11</td>
                                <td align="right">22</td>
                                <td align="right">18</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                                <td align="right">-</td>
                            </tr>
                            

                        </tbody>
                    </table>  
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

