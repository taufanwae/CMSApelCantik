<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
?>
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
    </head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<!--<img src="<?php echo base_url()?>images/logo2.png" width="150px"/>-->
		<b>Selamat Datang</b><br/> 	</div>
	<!-- /.login-logo -->
	
	<div class="login-box-body">
		<p class="login-box-msg">Login CMS</p>
		<?php 
		if($this->session->flashdata('Message'))
		{
				echo "<div class='alert alert-danger' id='msg'>".$this->session->flashdata('Message')."</div>";
		}

		?>
		<form action="<?php echo site_url();?>login/auth"  autocomplete="off" method="POST" >
		<div class="form-group has-feedback">

			<input type="text" name="email" class="form-control"  placeholder="Email" required autocomplete="off" >
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="off"  >
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		
		
		<div class="row">
			
			<!-- /.col -->
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat" id="btnLogin" >Masuk</button>
			</div>
			<!-- /.col -->
		</div>
		<?php //form_close(); ?>
	</form>

    <div class="social-auth-links text-center">
    </div>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>
<input type="hidden" id="baseUrl" value="<?= base_url() ?>" />
<!-- /.login-box -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <div class="modal-body">
        		<div class="box-body">
					<form name="frmForgotPassword" id="frmForgotPassword" class="form-horizontal" action="#" method="POST">
						<div class="form-group">
							<label class="col-sm-4 control-label">Email</label>
							<div class="col-sm-6">
								<input type="text" name="user_email" id="user_email" class="form-control" placeholder="Email" autocomplete="off">
							</div>
						</div><br/><br/>
						<div class="form-group" style="display:none;" id="div_secret_question">
							<label class="col-sm-4 control-label">Secret Question</label>
							<div class="col-sm-6">
								<input type="text" name="secret_question" id="secret_question" class="form-control" value="" readonly>
							</div><br/><br/>
						</div>
						<div class="form-group" style="display:none;" id="div_secret_answer">
							<label class="col-sm-4 control-label">Answer Question</label>
							<div class="col-sm-6">
								<input type="text" name="secret_answer" id="secret_answer" class="form-control" value="" autocomplete="off">
							</div>
						</div>
</form>
						
				</div>
      </div>
      <div class="modal-footer" style="text-align: center !important;">
					
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<!--<button type="button" class="btn btn btn-info">Save</button>-->
					<input type="submit" id="btnSubmit" class="btn btn btn-info" data-loading-text="Loading <i class='fa-spinner'></i>" value="Reset Password" style="display:none;">
					<input type="button" id="btnGetSecretQuestion" class="btn btn btn-info" data-loading-text="Loading <i class='fa-spinner'></i>" value="Next">
					<div class="col-md-12" id="justSpinner" style="display:none;"><br/>
						<center><h4><img style="width: 100px" src="<?= base_url(). '/assets/images/loader_a.gif'; ?>" /></h4></center>
					</div>					
	  </div>
    </div>
  </div>
</div>
<!-- jQuery 2.2.3 -->
 <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
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

</body>
</html>
