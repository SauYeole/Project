<?php 

    include 'include/conn.php';

    $id=$_GET['id'];

    $sel=mysql_query("SELECT * FROM add_vol WHERE vol_id='$id'");
    $fetch=mysql_fetch_assoc($sel);

        $vol_id=$fetch['vol_id'];
        $vol_name=$fetch['vol_name'];
        $vol_add=$fetch['vol_add'];
        $vol_contact=$fetch['vol_contact'];
        $vol_occu=$fetch['vol_occu'];
        $vol_intr_wrk=$fetch['vol_intr_wrk'];
        $doj_day=$fetch['doj_day'];
        $doj_month=$fetch['doj_month'];
        $doj_yr=$fetch['doj_yr'];
        $dob_day=$fetch['dob_day'];
        $dob_month=$fetch['dob_month'];
        $dob_yr=$fetch['dob_yr'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>NGO Management System | By Harshada Patil</title>            
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
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
               
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB 
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Add Event</li>
                </ul>
                END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit </strong> Volunteer Details</h3>
                                    
                                </div>
                                
                                
                                <div class="panel-body">                                                  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Volunteer Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="vol_name" value="<?php echo $vol_name; ?>" type="text" class="form-control" disabled/>
                                            </div>                                            
                                            <span class="help-block">Add Volunteer Full Name Here</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Volunteer Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <textarea class="form-control" name="vol_add" disabled><?php echo $vol_add; ?></textarea>
                                            </div>                                            
                                            <span class="help-block">Add Volunteer Address Here</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Volunteer Contact No.</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="vol_contact" value="<?php echo $vol_contact; ?>" type="number" class="form-control" disabled/>
                                            </div>                                            
                                            <span class="help-block">Add Volunteer Contact No Here</span>
                                        </div>
                                    </div>

                                
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Volunteer's Occupation</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="vol_occu" value="<?php echo $vol_occu; ?>" type="text" class="form-control" disabled/>
                                            </div>                                            
                                            <span class="help-block">Add Volunteer's Occupation Here</span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Intrested Work Area in NGO</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="vol_intr_wrk" value="<?php echo $vol_intr_wrk; ?>" type="text" class="form-control" disabled/>
                                            </div>                                            
                                            <span class="help-block">Fund Raising Target</span>
                                        </div>
                                    </div>  

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Date of Joining</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group col-md-12">
                                                
                                                 <div class="col-md-4">
                                                    <select class="form-control select" name="doj_day" disabled>
                                                        <option><?php echo $doj_day; ?></option>
                                                       
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control select" name="doj_month" disabled>
                                                        <option><?php echo $doj_month; ?></option>
                                                       
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control select" name="doj_yr" disabled>
                                                        <option><?php echo $doj_yr; ?></option>
                                                       

                                                                                                               
                                                    </select>
                                                </div>         
                                            </div>                                            
                                            <span class="help-block">Add Volunteer's Date of Joining Here</span>
                                        </div>
                                    </div>  


                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">DOB</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group col-md-12">
                                                
                                                 <div class="col-md-4">
                                                    <select class="form-control select" name="dob_day" disabled>
                                                        <option><?php echo $dob_day; ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control select" name="dob_month" disabled>
                                                        <option><?php echo $dob_month; ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control select" name="dob_yr" disabled>
                                                        <option><?php echo $dob_yr; ?></option>                 
                                                    </select>
                                                </div>         
                                            </div>                                            
                                            <span class="help-block">Add Volunteer's Date of Birth Here</span>
                                        </div>
                                    </div>                                  
                                

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
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






