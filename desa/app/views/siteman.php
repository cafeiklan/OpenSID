<?php
// var_dump($data);exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<title><?php
				echo config_item('login_title')
					. ' ' . ucwords(config_item('sebutan_desa'))
					. (($data['nama_desa']) ? ' ' . unpenetration($data['nama_desa']) : '')
					. get_dynamic_title_page_from_path();
			?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url()?>desa/app/views/login-form/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>desa/app/views/login-form/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>desa/app/views/login-form/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>desa/app/views/login-form/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>desa/app/views/login-form/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>desa/app/views/login-form/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>desa/app/views/login-form/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>desa/app/views/login-form/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div id="logo"><img src="<?php echo base_url()?>desa/logo/logo.png"></div>
									 <h1 style="margin-bottom: 0px"><strong><?php echo ucwords(config_item('sebutan_desa'))?> <?php echo unpenetration($data['nama_desa'])?></strong></h1>
                            <div class="description" style="margin-top: 0px">
                            	<p>Kecamatan <?php echo unpenetration($data['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($data['nama_kabupaten'])?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sistem Informasi Desa</h3>
											<?php  if($_SESSION['siteman']==-1){ unset($_SESSION['siteman']); ?>
												<div class="alert alert-danger">  
												  <a class="close" data-dismiss="alert">×</a>  
												  <span><b>Login Gagal!</b><br>Username atau password yang Anda masukkan salah. Silahkan coba kembali!</span>
												</div>
											<?php  } else if($_SESSION['siteman']==-2) { unset($_SESSION['siteman']); ?>
												<div class="alert alert-danger">  
												  <a class="close" data-dismiss="alert">×</a>  
												  <span><b>Login Gagal!</b><br>Redaksi belum boleh login, SID belum memiliki sambungan internet.</span>
												</div>
											<?php } else { ?>
												<p>Masukkan username dan password:</p>
											<?php } ?>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo site_url('siteman/auth')?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Masuk!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
						  <?php /*
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
						  */?>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url()?>desa/app/views/login-form/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>desa/app/views/login-form/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>desa/app/views/login-form/assets/js/jquery.backstretch.min.js"></script>
        <!-- script src="<?php echo base_url()?>desa/app/views/login-form/assets/js/scripts.js"></script --ganti-- -->
        <script>
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch([
                    "<?php echo base_url()?>desa/app/views/login-form/assets/img/backgrounds/2.jpg"
	              , "<?php echo base_url()?>desa/app/views/login-form/assets/img/backgrounds/3.jpg"
	              , "<?php echo base_url()?>desa/app/views/login-form/assets/img/backgrounds/1.jpg"
	             ], {duration: 3000, fade: 750});
    
    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});
		  </script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url()?>desa/app/views/login-form/assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>