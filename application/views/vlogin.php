<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>SyloBpsm</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="lock-screen">

    <div class="container">

       <form class="form-signin" role="form"  method="post" action="<?php  $this->load->helper('url'); echo site_url("/login/process"); ?>">
        <h2 class="form-signin-heading">SyloBpsm</h2>
        <div class="login-wrap">
			<?php if(! is_null($msg)) echo $msg;?>  
            <input class="form-control" type="text" class="form-control" id ="UID" name ="UID" placeholder="Username" required autofocus> 
           <input type="password" class="form-control" id ="Password" name ="Password" placeholder="Password" required>
		 
		 <select class="form-control" id= "User_type" name="User_type">
			<option value="User">Kakitangan</option>
			<option value="Admin">Admin</option>			
		</select>

<br/>
           
            <button class="btn btn-lg btn-login btn-block" type="submit">Log Masuk</button>
           
           
            <div class="registration">
                Daftar Akaun Baru?
                <a class="" href="<?php  $this->load->helper('url'); echo site_url("/creg"); ?>">
                    Daftar
                </a>
            </div>

        </div>


      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


  </body>
</html>
