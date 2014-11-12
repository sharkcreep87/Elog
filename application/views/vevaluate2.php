<?php 
 
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Evaluate</title>
	<link href="<?php echo base_url();?>css/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/css/bootstrap.min.css" rel="stylesheet">
<style>

body {
 
  background-color: #eee;
}


.form-horizontal {

  max-width: 630px;
  padding: 25px;
  margin: 0 auto;
   background-color: #fff;
}
.form-control {
 
  margin-bottom: 10px;
}
  
.navbar-collapse {
        position: absolute;
        left: 40%;
        text-align: center;
     top:15%;
	  font-family: 'Georgia';
    }
	.navbar-brand-centered1 {
        position: absolute;
        left: 70%;
		text-align: center;
		top:0%;
		 font-family: 'Arial';
    }
</style>
	
 <script src="<?php echo base_url();?>css/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>css/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap-dropdown.js"></script>
  </head>

  

  <body >
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
   
   <ul class="nav navbar-nav">
        <li><a href="<?php  $this->load->helper('url'); echo site_url("/home/index"); ?>">Home</a></li>
   </ul>
  <div class="collapse navbar-collapse">
      <h4> You have signed in as <b> <?php echo $this->session->userdata('UID'); ?> </b> </h4>
        
    </div>
	
	<div class="navbar-brand navbar-brand-centered1">
       
    <b><a href="<?php  $this->load->helper('url'); echo site_url("/login/do_logout"); ?>"> <span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></b>
    
        
    </div>
    </div> 

	
   <div class="jumbotron">
   <div class="container">

  <div class="row">
  <div class="col-md-3">
   <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="<?php  $this->load->helper('url'); echo site_url("/courseinfo/index"); ?>">Enter Course Info<span class="badge"></span></a></li>
  
  <li role="presentation"><a>Evaluate<span class="badge"></span></a></li>
  
</ul>
</div>
		<div class="col-md-6 ">
		
	  <div class="panel panel-default">
	  
	  <div class="panel-heading">Evaluate</div>
	  
	<p>No Data to Evaluate.</p>
	
	    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </div>
      </div>
	  </div>
	 </div>
      </div>
	  
  </body>
</html>
