<?php 

    include 'include/conn.php';

    $id=$_GET['id'];

    $sel=mysqli_query($conn,"SELECT * FROM add_beni WHERE don_id='$id'");

    $fetch=mysqli_fetch_assoc($sel);

        $don_id=$fetch['don_id'];
        $don_name=$fetch['don_name'];
        $don_addr=$fetch['don_addr'];
        $don_mob=$fetch['don_mob'];
        $don_email=$fetch['don_email'];
        $don_dob=$fetch['don_dob'];
        $dona_type=$fetch['dona_type'];
        $dona_amt=$fetch['dona_amt'];
        $dona_date=$fetch['dona_date'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
       <title>NGO Management System | By Atharv Patil</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
         <!-- CSS INCLUDE        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>--> 
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-forest-head-light.css">
        <!-- EOF CSS INCLUDE -->                
    </head>
     <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            
            <!-- START PAGE SIDEBAR -->
                <?php include 'include/header.php'; ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                     <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES --> 
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                     
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB 
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms Stuff</a></li>
                    <li><a href="#">Form Layout</a></li>
                    <li class="active">Two Column</li>
                </ul>
                END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add</strong> Donar</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">           
                                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Full Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="don_name" value="<?php echo $don_name; ?>" class="form-control" disabled/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Full Name of Donar Here(Surname | First Name | Middle Name)</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Address</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" name="don_addr" rows="5" disabled><?php echo $don_addr; ?></textarea>
                                                    <span class="help-block">Enter Address of Donar</span>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Mobile No</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="number" name="don_mob" value="<?php echo $don_mob; ?>" class="form-control" disabled/>
                                                    </div>            
                                                    <span class="help-block">Enter Mobile No of Donar</span>
                                                </div>
                                            </div>

                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email Id</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="email" name="don_email" value="<?php echo $don_email; ?>" class="form-control" disabled/>
                                                    </div>            
                                                    <span class="help-block">Enter email id of Donar</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date of Birth</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name="don_dob" value="<?php echo $don_dob; ?>" class="form-control datepicker" disabled>                                            
                                                    </div>
                                                    <span class="help-block">Select Date of Birth</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Donation Type</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="dona_type" value="<?php echo $dona_type; ?>" disabled>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Online Banking">Online Banking</option>
                                                        <option value="DD">DD</option>
                                                        <option value="RTGS/NEFT">RTGS/NEFT</option>
                                                        <option value="GPay">GPay</option>
                                                    </select>
                                                    <span class="help-block">Select box example</span>
                                                </div>
                                            </div>

                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Amount</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input type="number" name="dona_amt" value="<?php echo $dona_amt; ?>" class="form-control" disabled/>
                                                    </div>            
                                                    <span class="help-block">Enter Donation Amount Here</span>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date of Donation</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name="dona_date" value="<?php echo $dona_date; ?>" class="form-control datepicker" disabled>                                            
                                                    </div>
                                                    <span class="help-block">Select Date of Donation</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button type="submit" name="save" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
         
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






