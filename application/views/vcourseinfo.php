<?php include 'header.php';?>

    
    <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
     
              <div class="row">
               
                  <div class="col-md-8 col-md-offset-2">   
		 
	  
	  
	  <section class="panel">
                          <header class="panel-heading">
                         <center><b>Maklumat Program Latihan<b></center>
                          </header>
                          <div class="panel-body">
	  
	   <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
														 $this->load->helper('form');
															?>
	<form role="form" method="post" action="<?php  $this->load->helper('url'); echo site_url("courseinfo/insert"); ?>" enctype="multipart/form-data" >
	
			  <fieldset>
			  
			  
			 <?php $UID=$this->session->userdata('UID');echo "<input type='hidden' id='UID' name='UID' value='$UID'>"; ?>
		 <div class="form-group">
			<label for="inputName">Nama Kursus</label>
			<input type="text" class="form-control" id ="Coursename" name = "Coursename" required autofocus>
			 </div>
			
			
			<label for="inputComm">Kategori Kursus</label>
			<br/>
			 <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input name="course_catagory" id="course_catagory1" value="Kursus" type="radio" checked />Kursus
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="course_catagory" id="course_catagory2" value="Seminar" type="radio" />Seminar
												  </label>
                                              <label class="label_radio" for="radio-03">
                                                  <input name="course_catagory" id="course_catagory3" value="Konvensyen" type="radio" /> Konvensyen
                                              </label>
											   <label class="label_radio" for="radio-04">
                                                  <input name="course_catagory" id="course_catagory4" value="Bengkel/Workshop" type="radio" /> Bengkel/Workshop
                                              </label>
											   <label class="label_radio" for="radio-04">
                                                  <input name="course_catagory" id="course_catagory6" value="Simposium" type="radio" /> Simposium
                                              </label>
											  <label class="label_radio" for="radio-04">
                                                  <input name="course_catagory" id="course_catagory7" value="Kolokium" type="radio" /> Kolokium
                                              </label>
											  <label class="label_radio" for="radio-04">
                                                  <input name="course_catagory" id="course_catagory8" value="Lawatan Rasmi" type="radio" /> Lawatan Rasmi
                                              </label>
											   <label class="label_radio" for="radio-04">
                                                  <input name="course_catagory" id="course_catagory8" value="Klinik Kaunseling" type="radio" /> Klinik Kaunseling
                                              </label>
                                          </div>


			 <div class="form-group">
			<label for="inputID">Tempat Kursus</label>
			<input type="text" class="form-control" id ="Place_type" name = "Place_type"  required autofocus>
			
		</div> <div class="form-group">
			<label for="inputGrade">Muat Naik Sijil</label>
			<input class="btn btn-file" type="file" name="Cert_file"   >
		</div>
			<label for="inputDate">Tarikh Kursus</label>
			<input type="text" class="form-control" name = "Course_Date" id="datepicker"  required>
			<br/>
			<label for="inputComm">Anda gembira mengikuti program latihan ini?</label>
		
	 <div class="radios">	
	  <label class="label_radio" for="radio-01">
  <input type="radio" name="Satisfaction" id="Satisfaction1" value="1" checked> 1
</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Satisfaction" id="Satisfaction2" value="2"> 2
</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Satisfaction" id="Satisfaction3" value="3"> 3
</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Satisfaction" id="Satisfaction4" value="4"> 4
</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Satisfaction" id="Satisfaction5" value="5"> 5
	</label>

</div>
	<label for="inputComm">Anda mendapat pengetahuan yang diperlukan atau idea baru untuk menjalankan tugas.</label>
			
			<div class="radios">
			<label class="label_radio" for="radio-01">
	<input type="radio" name="Knowledge" id="Knowledge1" value="1" checked> 1
</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Knowledge" id="Knowledge2" value="2"> 2
</label><label class="label_radio" for="radio-01">

  <input type="radio" name="Knowledge" id="Knowledge3" value="3"> 3

	</label><label class="label_radio" for="radio-01">
  <input type="radio" name="Knowledge" id="Knowledge4" value="4"> 4
</label><label class="label_radio" for="radio-01">

  <input type="radio" name="Knowledge" id="Knowledge5" value="5"> 5
  </label>
 </div>
 <div class="form-group">
	<label for="inputName">Sila nyatakan pengetahuan/ idea yang mempunyai hubungkait dan boleh meningkatkan mutu kerja anda :</label>
	
   
    <textarea class="form-control" id="Comments" name="Comments" rows="4"></textarea>
 </div>
  <button type="submit" class="btn btn-primary btn-block" type="submit">Hantar</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
 </fieldset>
</form>
 </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </section>
      </div>
	  </div>
	 </div>
      </div></section></section></section>
	   
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 &copy; SyloBpsm by goldtechsolution.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="<?php echo base_url();?>js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="<?php echo base_url();?>js/ga.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="<?php echo base_url();?>js/respond.min.js" ></script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <!--common script for all pages-->
    <script src="<?php echo base_url();?>js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="<?php echo base_url();?>js/form-component.js"></script>

  </body>
</html>

