<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Study Link - Enroll a Diploma Student</title>
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
<body class="page-header-fixed" onload="loadStudentsName()">
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
                  Student <small>enroll student</small>
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
					<a href="#">Enroll Student</a>
				  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <form action="http://localhost/studylinkadmin/scripts/insertSubjectDetails.php" class="form-horizontal form-nobordered" method="POST"  enctype="multipart/form-data">
				<div class="form-body">
					<div class="form-group">
					
					<!--Semester Field-->
						<label class="control-label col-md-1">Semester</label>
						<div class="col-md-2">
							<select  class="form-control input-small select2me" data-placeholder="Select..." id="sem" name="sem" onclick="loadStudentsName();">
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="CA CPT">CA CPT</option>
								<option value="CA CPT Test Series">CA CPT Test Series</option>
								<option value="CA IPCC Regular">CA IPCC Regular</option>
								<option value="CA IPCC Group 1">CA IPCC Group 1</option>
								<option value="CA IPCC Group 2">CA IPCC Group 2</option>
								<option value="CA IPCC Test Series">CA IPCC Test Series</option>
							</select>
                        </div>
						<!--End of Semester Field-->
						
						<!--Branch Field-->
						<label class="control-label col-md-1">Branch</label>
						<div class="col-md-2" id="hey">
							<select class="form-control input-small select2me" data-placeholder="Select..." id="branch" name="branch" onclick="loadStudentsName();">
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
						</div>
						<!--End of Branch Field-->
						
						<label class="control-label col-md-2">Select Student's Name </label>
						<div class="col-md-2">
							<select  class="form-control input-medium select2me" data-placeholder="Select..." id="stud_name" name="stud_name" onclick="getSubjectsDetails();">
							</select>
						</div>
					</div>
				</div>
				<h4>Subject Details</h4>
							
							<!--Subject's List Field-->
							<div class="form-group">
							   <label class="control-label col-md-3">Enroll Subject</label>
							   <div class="col-md-4">
								  <div class="checkbox-list" id="subject_list">
								  </div>
								  <div id="form_payment_error"></div>
							   </div>
							</div>
							<!--End of Subject's List Field-->
							
							<!--Total Fees Field-->
							<div class="form-group">
								<label class="control-label col-md-3">Total Fees</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="fees" id ="fees" readonly onchange="calcGrandTotal()">
								</div>
							</div>
							<!--End of Total Fees Field>
							
							<!--Discount Field-->
							<div class="form-group">
								<label class="control-label col-md-3">Discount</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="discount" id ="discount" value="0" onchange="calcGrandTotal()">
									<span class="help-block">Provide Discount Amount If Any</span>
								</div>
							</div>
							<!--End of Discount Field-->
							
							<!--Discount Description Field-->
							<div class="form-group">
								<label class="control-label col-md-3">Discount Description</label>
								<div class="col-md-4">
									<textarea class="form-control" rows="3" name="discount_description" id="discount_description" value=""> </textarea>
									<span class="help-block">Provide Discount Description</span>
								</div>
							</div>
							<!--End of Discount Description Field-->
							
							<!--Grand Total Fees Field-->
							<div class="form-group">
								<label class="control-label col-md-3">Grand Total</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="grand_total" id ="grand_total" readonly>
								</div>
							</div>
							<!--End of Grand Total Fees Field-->
				<div class="form-actions fluid">
				   <div class="row">
					  <div class="col-md-12">
						 <div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn purple"><i class="icon-ok"></i> Submit</button>
						 </div>
					</div>
				   </div>
				</div>
				</form>
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

	<script>
function getfees()
{
	fee = document.getElementsByName("fees");
	sub=document.getElementsByName("subject[]");
	var total=0;
	for (var i=0;i<sub.length;i++) 
	{
		if (sub[i].checked==true) 
		{
			total = total + parseInt(fee[i].value);
		}
	}
	var tot1 = document.getElementById("fees")
	tot1.value = total;
	calcGrandTotal();
}
</script>
<script>
function calcGrandTotal()
{
	total = document.getElementById("fees");
	discount = document.getElementById("discount");
	var grand_total = document.getElementById("grand_total");
	grand_total.value = parseInt(total.value) - parseInt(discount.value);
}
</script>

<script>
function loadStudentsName()
{
	var selID=document.getElementById("sem");
	var str=selID.options[selID.selectedIndex].text;
	var selID=document.getElementById("branch");
	var text=selID.options[selID.selectedIndex].text;
	text = text.trim();
	document.getElementById("stud_name").selectedIndex="None";
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("stud_name").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","scripts/getStudentsName.php?sem="+str+"&branch="+text,true);
	xmlhttp.send();
}
</script>

<script>
function getSubjectsDetails()
{
	var selID=document.getElementById("sem");
	var sem=selID.options[selID.selectedIndex].text;
	var selID=document.getElementById("branch");
	var branch=selID.options[selID.selectedIndex].text;
	branch = branch.trim();
	document.getElementById("subject_list").innerHTML="";
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("subject_list").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","scripts/getSubjectDetails.php?sem="+sem+"&branch="+branch,true);
	xmlhttp.send();
}
<!--End of Script for image control-->
</script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>