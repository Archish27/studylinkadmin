<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Study Link - Add Diploma Student</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   
   <!--Date Picker Styles-->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <!--end of Date Picker Styles-->
   
   <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
   
   <!-- BEGIN PAGE LEVEL STYLES -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <!-- END PAGE LEVEL STYLES -->
   
   
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="../favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="http://localhost/studylinkadmin/index.php">
         <img src="assets/img/logo.png" alt="logo" class="img-responsive" width="120"/>
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="assets/img/avatar1_small.jpg"/>
               <span class="username">Rahul Bhaliya</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li>
                  <li><a href="login.html"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start ">
               <a href="http://localhost/studylinkadmin/index.php">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               </a>
            </li>
            
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->   
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Student <small>add student</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="http://localhost/studylinkadmin/index.php">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
				  <li>
                     <a href="#">Student</a>
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
					<a href="#">Add Student</a>
				  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN VALIDATION STATES-->
               <div class="portlet box green">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-reorder"></i>Admission Details</div>
                  </div>
                  <div class="portlet-body form">
                     <!-- BEGIN FORM-->
                     <form action="http://localhost/studylinkadmin/scripts/insertStudentInfo.php" id="insert_stuudent" method="POST" class="form-horizontal">
					 <br/>
					 <h4>Student Details</h4>
						<!--Setting Image Control-->
							<div class="form-group">
								<label class="control-label col-md-3">Select Photo</label>
								<div class="col-md-4">
									<div class="thumbnail" style="width: 200px;">
										<img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" id="s_image">
									</div>
									<div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
										<div class="input-group input-group-fixed">
											<span class="input-group-btn">
												<span class="uneditable-input">
													<i class="icon-file fileupload-exists"></i> 
													<span class="fileupload-preview"></span>
												</span>
											</span>
											<span class="btn default btn-file">
												<span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
												<span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
												<input type="file" class="default" id="stud_pic" name="stud_pic" onchange="readURL(this);" />
											</span>
										</div>
									</div>
								</div>
							</div>
						<!--End of Image Control-->
                        <div class="form-body">
						
							
						
							<!--Name Textfield-->
                           <div class="form-group">
                              <label class="control-label col-md-3">Name</label>
                              <div class="col-md-4">
                                 <input type="text" name="stud_name" id="stud_name" data-required="1" class="form-control"/>
								 <span class="help-block">Provide Student's Name</span>
                              </div>

                           </div>
						   <!--End of Name Textfield-->
						   
						   <!--Date of Birth Field-->
						   <div class="form-group">
							   <label class="control-label col-md-3">Date of Birth</label>
							   <div class="col-md-4">
								  <div class="input-group date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
									 <input type="text" name="stud_dob" id="stud_dob" class="form-control" readonly>
									 <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span>
								  </div>
								  <span class="help-block">Provide Student's DOB</span>
								  <!-- /input-group -->                                 
							   </div>
							</div>
						   <!--End of Date of Birth Field-->
						   
						   <!--Address Field-->
							<div class="form-group">
                                <label class="control-label col-md-3">Address</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" rows="3" name="stud_address" id="stud_address" value=""> </textarea>
									<span class="help-block">Provide Student's Address</span>
								</div>
                            </div>
							<!--End of Address Field-->		
							
							<!--Email ID Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Email</label>
                              <div class="col-md-4">
                                 <input name="stud_email" id="stud_email" type="text" class="form-control"/>
								 <span class="help-block">Provide Student's Email ID</span>
                              </div>
							</div>
							<!--End of Email ID Field-->
						   
						   <!--Phone Number Field-->
                           <div class="form-group">
                              <label class="control-label col-md-3">Phone Number</label>
                              <div class="col-md-4">
                                 <input name="stud_number" id="stud_number" type="text" class="form-control"/>
								 <span class="help-block">Provide Student's Mobile Number</span>
                              </div>
                           </div>
						   <!--End of Phone Number Field-->
						   
						   <!--College Name Field-->
                           <div class="form-group">
                              <label class="control-label col-md-3">College Name</label>
                              <div class="col-md-4">
                                 <input name="college_name" id="college_name" type="text" class="form-control"/>
								 <span class="help-block">Provide Student's College Name</span>
                              </div>
                           </div>
						   <!--End of College Name Field-->
						   
						   <!--Branch Field-->
						   <div class="form-group">
								<label class="control-label col-md-3">Branch</label>
								<div class="col-md-4">
									<select class="form-control input-large select2me"  name="branch" id="branch" class="form-control" data-placeholder="Select...">
										<option value=""></option>
										<option value="CM">CM</option>
										<option value="CO">CO</option>
										<option value="IF">IF</option>
										<option value="EJ">EJ</option>
										<option value="EX">EX</option>
										<option value="IE">IE</option>
										<option value="EV">EV</option>
										<option value="Other">Other</option>
										<option value="Commerce">Commerce</option>
									</select>
									<span class="help-block">Select Branch of Student</span>
								</div>
							</div>
						   <!--End of Branch Field-->
						   
						   
							<hr>
							<h4>Parent's Details</h4>
							
							<!--Father's Name Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Father's Name</label>
                              <div class="col-md-4">
                                 <input name="father_name" id="father_name" type="text" class="form-control"/>
								 <span class="help-block">Provide Father's Name of Student</span>
                              </div>
							</div>
							<!--End of Father's Name Field-->
							
							<!--Father's Number Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Father's Number</label>
                              <div class="col-md-4">
                                 <input name="father_number" id="father_number" type="text" class="form-control"/>
								 <span class="help-block">Provide Father's Number of Student</span>
                              </div>
							</div>
							<!--End of Father's Number Field-->
							
							<!--Father's Email Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Father's Email</label>
                              <div class="col-md-4">
                                 <input name="father_email" id="father_email" type="text" class="form-control"/>
								 <span class="help-block">Provide Father's Email ID of Student</span>
                              </div>
							</div>
							<!--End of Father's Email Field-->
							
							<!--Mother's Name Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Mother's Name</label>
                              <div class="col-md-4">
                                 <input name="mother_name" id="mother_name" type="text" class="form-control"/>
								 <span class="help-block">Provide Mother's Name of Student</span>
                              </div>
							</div>
							<!--End of Mother's Name Field-->
							
							<!--Mother's Number Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Mother's Number</label>
                              <div class="col-md-4">
                                 <input name="mother_number" id="mother_number" type="text" class="form-control"/>
								 <span class="help-block">Provide Mother's Number of Student</span>
                              </div>
							</div>
							<!--End of Mother's Number Field-->
							
							<!--Mother's Email Field-->
							<div class="form-group">
                              <label class="control-label col-md-3">Mother's Email</label>
                              <div class="col-md-4">
                                 <input name="mother_email" id="mother_email" type="text" class="form-control"/>
								 <span class="help-block">Provide Mother's Email ID of Student</span>
                              </div>
							</div>
							<!--End of Mother's Email Field-->	
							
                        </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green">Submit</button>
                           </div>
                        </div>
                     </form>
                     <!-- END FORM-->
                  </div>
               </div>
               <!-- END VALIDATION STATES-->
            </div>
         </div>
         <!-- END PAGE CONTENT--> 
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2015 &copy; Study Link Admin by MAD Softwares.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   
   
   
   <!-- Date Picker Script Now -->
   <script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
   <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <!-- End of Date Picker Script-->
 
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   
   <!-- BEGIN PAGE LEVEL STYLES -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-components.js"></script>
   <script src="assets/scripts/form-validation.js"></script> 
   <!-- END PAGE LEVEL STYLES -->    
   <script>
      jQuery(document).ready(function() {   
         // initiate layout and plugins
         App.init();
         FormValidation.init();
		 FormComponents.init();
      });
   </script>
   
   
   <!--Script for image control-->
	<script>
	function readURL(input) 
	{
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#s_image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>

	<!--End of Script for image control-->
   
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>