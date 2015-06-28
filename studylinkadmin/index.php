<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

//sec_session_start();

//toastr.success('Have fun storming the castle!', 'Miracle Max Says')
?>
<head>
<?php if (login_check($mysqli) == true || 1) : ?>
   <meta charset="utf-8" />
   <title>Study Link | Admin Dashboard</title>
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
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="assets/plugins/bootstrap-toastr/toastr.css" rel="stylesheet"/>   
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
   
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed" onload="showNotification()">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="index.php">
         <img src="assets/img/logo.png" alt="logo" class="img-responsive" width="120" />
         </a>
         <!-- END LOGO -->
         
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="assets/img/avatar1_small.jpg"/>
               <span class="username"><?php echo($_SESSION['username']); ?></span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li>
                  <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
                  </li>
                  <li><a href="login.php"><i class="icon-key"></i> Log Out</a>
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
               <div><br/><br/><br/></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="search-result.php" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input name="key" id = "key" type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
               <a href="index.html">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Students</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="http://localhost/CMS/add_student.php">Add Student</a>
                  </li>
                  <li >
                     <a href="http://localhost/CMS/update_student.php">
                     Update Student Info</a>
                  </li>
                  <li >
                     <a href="http://localhost/CMS/delete_student.php">
                     Delete a Student</a>
                  </li>
                  
               </ul>
            </li>
            <li class="tooltips" data-placement="left">
               <a href="http://localhost/CMS/pay_fees.php">
               <i class="icon-gift"></i> 
               <span class="title">Pay Fees</span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-bookmark-empty"></i> 
               <span class="title">Subject</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="add_student.php">
                     Add Subject</a>
                  </li>
                  <li >
                     <a href="ui_buttons.html">
                     Update Subject</a>
                  </li>
                  <li >
                     <a href="ui_typography.html">
                     Delete a Subject</a>
                  </li>
               </ul>
            </li>
			<li class="tooltips" data-placement="left">
               <a href="http://localhost/CMS/generateReport.php">
               <i class="icon-bar-chart"></i> 
				<span class="title">View Reports</span>
               </a>
            </li>
			<li class="">
               <a href="javascript:;">
               <i class="icon-download"></i> 
               <span class="title">Downloads</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
					<li >
                     <a href="download-student-info.php">
                     Student Info</a>
                  </li>
                  <li >
                     <a href="download-excel-report.php">
                     Detailed Excel Report</a>
                  </li>
                  <li >
                     <a href="download-pdf-report.php">
                     Detailed PDF Report</a>
                  </li>
               </ul>
            </li>
			<li class="tooltips" data-placement="left">
               <a href="http://www.studylinkclasses.com" target="_blank">
               <i class="icon-gift"></i> 
               <span class="title">Add Reminder</span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>THEME COLOR</span>
                  <ul>
                     <li class="color-black current color-default" data-style="default"></li>
                     <li class="color-blue" data-style="blue"></li>
                     <li class="color-brown" data-style="brown"></li>
                     <li class="color-purple" data-style="purple"></li>
                     <li class="color-grey" data-style="grey"></li>
                     <li class="color-white color-light" data-style="light"></li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>Layout</span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Header</span>
                  <select class="header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Sidebar</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Footer</span>
                  <select class="footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END BEGIN STYLE CUSTOMIZER -->  
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Dashboard <small>statistics and more</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat blue">
                  <div class="visual">
                     <i class="icon-comments"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                        1349
                     </div>
                     <div class="desc">                           
                        New Feedbacks
                     </div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat green">
                  <div class="visual">
                     <i class="icon-shopping-cart"></i>
                  </div>
                  <div class="details">
                     <div class="number">549</div>
                     <div class="desc">New Orders</div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat purple">
                  <div class="visual">
                     <i class="icon-globe"></i>
                  </div>
                  <div class="details">
                     <div class="number">+89%</div>
                     <div class="desc">Brand Popularity</div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat yellow">
                  <div class="visual">
                     <i class="icon-bar-chart"></i>
                  </div>
                  <div class="details">
                     <div class="number">12,5M$</div>
                     <div class="desc">Total Profit</div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
         </div>
         <!-- END DASHBOARD STATS -->
         <div class="clearfix"></div>
		 <?php
			$result = mysqli_query($mysqli, "SELECT s.sid, stud_name, temp.balance_fees, s.sem, s.branch
											FROM students AS s
											INNER JOIN (

											SELECT t1.sid, (
											t2.total_fees - t1.total_paid
											) AS balance_fees
											FROM (

											SELECT invoice_number, sid, sem, branch, SUM( payment_amount ) AS total_paid
											FROM payment
											GROUP BY sid
											) AS t1
											INNER JOIN (

											SELECT * 
											FROM fees
											) AS t2
											WHERE t1.sid = t2.sid
											) AS temp
											WHERE s.sid = temp.sid");
		?>
         <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-bell"></i>Pending Fees</div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-sm default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filter By
                           <i class="icon-angle-down"></i>
                           </a>
                           <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                              <label><input type="checkbox" /> Finance</label>
                              <label><input type="checkbox" checked="" /> Membership</label>
                              <label><input type="checkbox" /> Customer Support</label>
                              <label><input type="checkbox" checked="" /> HR</label>
                              <label><input type="checkbox" /> System</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
						<?php
						while($row = mysqli_fetch_array($result))
						{
							if($row['balance_fees']!=0)
							{
							?>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          <?php
										  echo $row['stud_name']." ";
										  echo 'sem'.$row['sem']." ";
										  echo $row['branch'];
										  ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    <?php
									echo $row['balance_fees'];
									?>
                                 </div>
                              </div>
                           </li>
						   <?php
						   }//end of if
						   }//end of while
						   ?>
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="pull-right">
                           <a href="#">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box green tasks-widget">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-check"></i>Tasks</div>
                     <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                     </div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn default btn-xs" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           More
                           <i class="icon-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="#"><i class="i"></i> All Project</a></li>
                              <li class="divider"></li>
                              <li><a href="#">AirAsia</a></li>
                              <li><a href="#">Cruise</a></li>
                              <li><a href="#">HSBC</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Pending <span class="badge badge-important">4</span></a></li>
                              <li><a href="#">Completed <span class="badge badge-success">12</span></a></li>
                              <li><a href="#">Overdue <span class="badge badge-warning">9</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="task-content">
                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
                           <!-- START TASK LIST -->
                           <ul class="task-list">
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Present 2013 Year IPO Statistics at Board Meeting</span>
                                    <span class="label label-sm label-success">Company</span>
                                    <span class="task-bell"><i class="icon-bell"></i></span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Hold An Interview for Marketing Manager Position</span>
                                    <span class="label label-sm label-danger">Marketing</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">AirAsia Intranet System Project Internal Meeting</span>
                                    <span class="label label-sm label-success">AirAsia</span>
                                    <span class="task-bell"><i class="icon-bell"></i></span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Technical Management Meeting</span>
                                    <span class="label label-sm label-warning">Company</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Kick-off Company CRM Mobile App Development</span>
                                    <span class="label label-sm label-info">Internal Products</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Prepare Commercial Offer For SmartVision Website Rewamp 
                                    </span>
                                    <span class="label label-sm label-danger">SmartVision</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Sign-Off The Comercial Agreement With AutoSmart</span>
                                    <span class="label label-sm label-default">AutoSmart</span>
                                    <span class="task-bell"><i class="icon-bell"></i></span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">Company Staff Meeting</span>
                                    <span class="label label-sm label-success">Cruise</span>
                                    <span class="task-bell"><i class="icon-bell"></i></span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li class="last-line">
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">KeenThemes Investment Discussion</span>
                                    <span class="label label-sm label-warning">KeenThemes</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Complete</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancel</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <!-- END START TASK LIST -->
                        </div>
                     </div>
                     <div class="task-footer">
                        <span class="pull-right">
                        <a href="#">See All Tasks <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box purple">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-calendar"></i>General Stats</div>
                     <div class="actions">
                        <a href="javascript:;" class="btn btn-sm yellow easy-pie-chart-reload"><i class="icon-repeat"></i> Reload</a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number transactions" data-percent="90"><span>+55</span>%</div>
                              <a class="title" href="#">Transactions <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number visits" data-percent="85"><span>+85</span>%</div>
                              <a class="title" href="#">New Visits <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number bounce" data-percent="46"><span>-46</span>%</div>
                              <a class="title" href="#">Bounce <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-calendar"></i>Server Stats</div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_bar"></div>
                              <a class="title" href="#">Network <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_bar2"></div>
                              <a class="title" href="#">CPU Load <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_line"></div>
                              <a class="title" href="#">Load Rate <i class="m-icon-swapright"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN REGIONAL STATS PORTLET-->
               <div class="portlet">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-globe"></i>Regional Stats</div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div id="region_statistics_loading">
                        <img src="assets/img/loading.gif" alt="loading"/>
                     </div>
                     <div id="region_statistics_content" class="display-none">
                        <div class="btn-toolbar margin-bottom-10">
                           <div class="btn-group" data-toggle="buttons">
                              <a href="" class="btn default btn-sm active">Users</a>
                              <a href="" class="btn default btn-sm">Orders</a> 
                           </div>
                           <div class="btn-group pull-right">
                              <a href="" class="btn default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                              Select Region <span class="icon-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu pull-right">
                                 <li><a href="javascript:;" id="regional_stat_world">World</a></li>
                                 <li><a href="javascript:;" id="regional_stat_usa">USA</a></li>
                                 <li><a href="javascript:;" id="regional_stat_europe">Europe</a></li>
                                 <li><a href="javascript:;" id="regional_stat_russia">Russia</a></li>
                                 <li><a href="javascript:;" id="regional_stat_germany">Germany</a></li>
                              </ul>
                           </div>
                        </div>
                        <div id="vmap_world" class="vmaps display-none"></div>
                        <div id="vmap_usa" class="vmaps display-none"></div>
                        <div id="vmap_europe" class="vmaps display-none"></div>
                        <div id="vmap_russia" class="vmaps display-none"></div>
                        <div id="vmap_germany" class="vmaps display-none"></div>
                     </div>
                  </div>
               </div>
               <!-- END REGIONAL STATS PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet paddingless">
                  <div class="portlet-title line">
                     <div class="caption"><i class="icon-bell"></i>Feeds</div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <!--BEGIN TABS-->
                     <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                           <li class="active"><a href="#tab_1_1" data-toggle="tab">System</a></li>
                           <li><a href="#tab_1_2" data-toggle="tab">Activities</a></li>
                           <li><a href="#tab_1_3" data-toggle="tab">Recent Users</a></li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_1_1">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
                                 <ul class="feeds">
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bell"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   You have 4 pending tasks.
                                                   <span class="label label-sm label-danger ">
                                                   Take action 
                                                   <i class="icon-share-alt"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             Just now
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New version v1.4 just lunched!   
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                20 mins
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">                      
                                                   <i class="icon-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Database server #12 overloaded. Please fix the issue.                      
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             30 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             40 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">                        
                                                   <i class="icon-plus"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New user registered.                
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             1.5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">                        
                                                   <i class="icon-bell-alt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Web server hardware needs to be upgraded. 
                                                   <span class="label label-sm label-default ">Overdue</span>             
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             2 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             3 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             18 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">                       
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">                        
                                                   <i class="icon-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   New order received. Please take care of it.                 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             22 hours
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_1_2">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <ul class="feeds">
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New order received 
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                10 mins
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">                      
                                                   <i class="icon-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                   Order #24DOP4 has been rejected.    
                                                   <span class="label label-sm label-danger ">Take action <i class="icon-share-alt"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                             24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <div class="col1">
                                             <div class="cont">
                                                <div class="cont-col1">
                                                   <div class="label label-sm label-success">                        
                                                      <i class="icon-bell"></i>
                                                   </div>
                                                </div>
                                                <div class="cont-col2">
                                                   <div class="desc">
                                                      New user registered
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col2">
                                             <div class="date">
                                                Just now
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_1_3">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Robert Nilson</a> 
                                             <span class="label label-sm label-success label-mini">Approved</span>
                                          </div>
                                          <div>29 Jan 2013 10:45AM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 10:45AM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div><a href="#">Eric Kim</a> <span class="label label-sm label-info">Pending</span></div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div><a href="#">Eric Kim</a> <span class="label label-sm label-info">Pending</span></div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Eric Kim</a> 
                                             <span class="label label-sm label-info">Pending</span>
                                          </div>
                                          <div>19 Jan 2013 12:45PM</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                       <div class="details">
                                          <div>
                                             <a href="#">Lisa Miller</a> 
                                             <span class="label label-sm label-danger">In progress</span>
                                          </div>
                                          <div>19 Jan 2013 11:55PM</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--END TABS-->
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet box blue calendar">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-calendar"></i>Calendar</div>
                  </div>
                  <div class="portlet-body light-grey">
                     <div id="calendar">
					 </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet">
                  <div class="portlet-title line">
                     <div class="caption"><i class="icon-comments"></i>Chats</div>
                     <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body" id="chats">
                     <div class="scroller" style="height: 435px;" data-always-visible="1" data-rail-visible1="1">
                        <ul class="chats">
                           <li class="in">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Bob Nilson</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar2.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Lisa Wong</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Bob Nilson</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Richard Doe</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Richard Doe</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Bob Nilson</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
                                 <a href="#" class="name">Richard Doe</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                 sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                 </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg" />
                              <div class="message">
                                 <span class="arrow"></span>
								 
                                 <a href="#" class="name"><?php if (login_check($mysqli) == true) : ?><?php echo($_SESSION['username']); ?><?php else : ?><p>
								<span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
								</p>
								<?php endif; ?>
								</a>
                                 <span class="datetime">at Jul 25, 2012 11:09</span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                 </span>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="chat-form">
                        <div class="input-cont">   
                           <input class="form-control" type="text" placeholder="Type a message here..." />
                        </div>
                        <div class="btn-cont"> 
                           <span class="arrow"></span>
                           <a href="" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
      </div>
      <!-- END PAGE -->
   </div>
   
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
		<a href="http://www.studylinkclasses.com" target="_blank">
         2013 &copy; Study Link Classes.
		 </a>
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <?php else : ?>
   <p>
	<span class="error">You are not authorized to access this page.</span> Please <a href="http://localhost/CMS/login.php">login</a>.
		</p>
	<?php endif; ?>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
   <script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
   <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/plugins/bootstrap-toastr/toastr.min.js"></script> 
   
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/index.js" type="text/javascript"></script>
   <script src="assets/scripts/tasks.js" type="text/javascript"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Tasks.initDashboardWidget();
      });
   </script>
   <script>
   function showNotification()	{
	   var note = getUrlVars()["q"];
	   if(note=="SuccessStudent")
	   {
		   toastr.success('Student Added Successfully')
	   }
   }
   </script>
   <script>
   function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	vars[key] = value;
	});
	return vars;
	}
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>