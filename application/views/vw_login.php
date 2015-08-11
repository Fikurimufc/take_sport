<?php $this->load->library('form_validation'); 
		$this->load->helper('url');
?>
<html>
	<head>
		<!-- css-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/admin/css/AdminLTE.min.css">
		<link rel="stylesheet" type="text/css" href="">

		<script type="text/javascript" src="<?php echo base_url()?>asset/admin/plugin/jQuery/jQuery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    <?php  $err = validation_errors()?>
		<title>Login form</title>		
	</head>
	<body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Take Sport</b>TS</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <br>
        <p class="login-box-msg"><?php echo $err; ?></p>
        <?php $attr = array(
              'class' => 'alert alert-danger',
              'role'  => 'alert');
        ?>
        <?php echo form_open('Auth')?>
        
        <form>	
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->