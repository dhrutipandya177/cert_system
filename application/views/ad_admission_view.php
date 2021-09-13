<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!--  -->
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
   <!-- ============================================================== -->
   <!-- Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <!-- <div class="page-breadcrumb">
      <div class="row">
          <div class="col-7 align-self-center">
              <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Grid</h4>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                          <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="col-5 align-self-center">
              <div class="customize-input float-right">
                  <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                      <option selected>Aug 19</option>
                      <option value="1">July 19</option>
                      <option value="2">Jun 19</option>
                  </select>
              </div>
          </div>
      </div>
      </div> -->
   <!-- ============================================================== -->
   <!-- End Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <!-- ============================================================== -->
   <style type="text/css">
      .t1{
      color: black;
      }
   </style>
   <!-- Container fluid  -->
   <!-- ============================================================== -->
   <!-- <div class="container-fluid"> -->
   <!-- ============================================================== -->
   <!-- Start Page Content -->
   <!-- ============================================================== -->
   <section id="main-content">
      <section class="wrapper">
         <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
               <div class="col-lg-12">
                  <section class="panel">
                     <header class="panel-heading">
                        <h6> Add Admission </h6>
                        
                     </header>
                     <div class="panel-body">
                        <div class="form">
                           <form class="cmxform form-horizontal " id="cer_addmission" class="cer_addmission" method="get" action="<?php echo base_url();?>ad_admission/ad_admission_ad" >
                              <div class="form-group ">
                                 <input type="hidden" name="ad_id" id="ad_id" class="form-control">
                                 <label for="department" class="control-label col-lg-3">Department</label>
                                 <div class="col-lg-6">
                                    <select id="depart" name="depart" class="form-control">
                                       <option>-----Select Department------</option>
                                       <option value="Design" >Design</option>
                                       <option value="multimedia" >Multimedia</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="lastname" class="control-label col-lg-3">Reg. No.</label>
                                 <div class="col-lg-6">
                                    <input class=" form-control" id="rgno" name="rgno" type="text" >
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="username" class="control-label col-lg-3">Student Name</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="sname" name="sname" type="text" >
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="password" class="control-label col-lg-3">GR ID</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="gr_id" name="gr_id" type="text">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="confirm_password" class="control-label col-lg-3">Contact no.</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="con_no" name="con_no" type="text">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="email" class="control-label col-lg-3">Course</label>
                                 <div class="col-lg-6">
                                    <select class="form-control" name="course" id="course" required>
                                       <option>-----Select course-----</option>
                                       <?php foreach($all_courses as $val) { ?>
                                       <option value="<?php echo $val->id; ?>"><?php echo $val->name; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="username" class="control-label col-lg-3">Branch</label>
                                 <div class="col-lg-6">
                                    <select class="form-control" name="branch" id="branch" required>
                                       <option>-----Select Branch-----</option>
                                       <?php foreach($all_branches as $val) { ?>
                                       <option value="<?php echo $val->branch_id; ?>"><?php echo $val->branch_name; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="password" class="control-label col-lg-3">Start Date</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="strat_date" name="strat_date" type="date">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="password" class="control-label col-lg-3">Duration</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="duration" name="duration" type="text">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="password" class="control-label col-lg-3">End Date</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="end_date" name="end_date" type="date">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="password" class="control-label col-lg-3">Issue Date</label>
                                 <div class="col-lg-6">
                                    <input class="form-control " id="issue_date" name="issue_date" type="date">
                                 </div>
                              </div>
                              <div class="form-group ">
                                 <label for="firstname" class="control-label col-lg-3">Grade</label>
                                 <div class="col-lg-6">
                                    <select id="grade" name="grade" class="form-control">
                                       <option>-----Select grade-----</option>
                                       <option value="A+">A+</option>
                                       <option value="A">A</option>
                                       <option value="B+">B+</option>
                                       <option value="B">B</option>
                                       <option value="c">C</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
            <!-- page end-->
      </section>
   </section>
   <!-- ============================================================== -->
   <!-- End Container fluid  -->
   <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- </div> -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" style="margin-top: -37px;">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
</body>
<?php include('footer.php'); ?>
<script>
   // jQuery.validator.setDefaults({
   
   //   debug: true,
   
   //   success: "valid"
   
   // });
   
   // $( "#cer_addmission" ).validate({
   //   rules: {
   //     w_template_name: {
   //       required: true,
   //     },
   //     w_template_message:{
   //       required: true,
   //     }
   //   },
   //   messages:{
   //    w_template_name:{
   //       required : "<div style='color:red'>Enter Template Name</div>",
   //     },
   //     w_template_message:{
   //       required : "<div style='color:red'>Please enter template Message</div>"
   //     }
   //   },
   //   submitHandler: function () {
   //        event.preventDefault();
   //        var formdata =  $('#cer_addmission').serialize();
   //        $.ajax({
   //           url : "<?php echo base_url(); ?>ad_admission/ad_admission_ad",
   //           type : "post",
   //           data: formdata,
   //           success:function(resp)
   //           {
   //             var data = $.parseJSON(resp);
   //             var ddd = data['all_record'].status;
   //             if(ddd == '1')
   //             {
   //                $('#result_msg').fadeIn();
   //                 $('#result_msg').html("<div class='alert alert-success'>Successfully Inserted Record</div>");
   //                 $('#result_msg').fadeOut(2000);
   //                 setTimeout(function() {
   //                     location.reload();
   //                 }, 3000);
   //             }
   //             else if(ddd == '2'){
   //               $('#result_msg').fadeIn();
   //                 $('#result_msg').html("<div class='alert alert-success'>Successfully Updated Record</div>");
   //                 $('#result_msg').fadeOut(2000);
   //                 setTimeout(function() {
   //                     location.reload();
   //                 }, 3000);
   //             }
   //             else if(ddd == '3')
   //             {
   //                $('#result_msg').fadeIn();
   //                 $('#result_msg').html("<div class='alert alert-danger'>Someting Wrong!!</div>");
   //                 $('#result_msg').fadeOut(2000);
   //                 setTimeout(function() {
   //                     location.reload();
   //                 }, 3000);
   //            }
   //           }
   //        });
   //    }
   // });
   
   
   
</script>
</html>