<?php include('header.php'); ?>

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
<!-- <div class="table-right-content">
            <button href="#" class="btn btn-info" data-toggle="modal" data-target="#ptm_add">
            <span><i class="fas fa-plus mr-1"></i></span>
            </button>
         </div> -->
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
   <!-- <div class="modal fade" id="ptm_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title text-dark" id="myLargeModalLabel">Add product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
               </div>
               <form enctype="multipart/form-data" class="document-createmodal" method="post" name="ptm_meeting" id="ptm_meeting" action="<?php echo base_url(); ?>item/product_add">
                  <input type="hidden" name="item_id" id="item_id" class="form-control">
                  <div class="form-group row mb-2 " style="margin-left:45px;">
                     <div id="dynamic_field" class="dynamic_field">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-3">
                                 <label for="">Product:<span style="color: red;">*</span></label>
                                 <input class="form-control" name="item_name[]" id="item_name" required > 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row1">
                           <div class="col-md-12">
                              <input type="submit" class="btn btn-primary" id="Submit" name="submit" value="Submit">
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            </form>  
            </section>
         </div>
      </div> -->
      <!--   -->
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
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">User Data</h4>
               <div class="table-responsive">
                  <table id="zero_config" class="table">
                     <thead class="bg-primary text-white">
                        <tr>
                           <th>Sn</th>
                           <th>Department</th>
                           <th>Reg no</th>
                           <th>Name</th>
                           <th>GRID</th>
                           <th>con no</th>
                           <th>Course</th>
                           <th>branch</th>
                           <th>Start </th>
                           <th>duration</th>
                           <th>End</th>
                           <th>Issue</th>
                           <th>Grade</th>
                           <th>status</th>
                           <th>Print</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php $sno = 1;
                           foreach ($all_adms as $val) { ?>
                        <tr>
                            <td><?php echo $sno ?></td>
                           <td><?php echo $val->depart; ?></td>
                           <td><?php echo $val->regno; ?></td>
                           <td><?php echo $val->sname; ?></td>
                           <td><?php echo $val->gr_id; ?></td>
                           <td><?php echo $val->con_no; ?></td>
                           <td><?php echo $val->course; ?></td>
                           <td><?php echo $val->branch; ?></td>
                           <td><?php echo $val->strat_date; ?></td>
                           <td><?php echo $val->duration; ?></td>
                           <td><?php echo $val->end_date; ?></td>
                           <td><?php echo $val->issue_date; ?></td>
                           <td><?php echo $val->grade; ?></td>
                           <td><?php echo $val->status; ?></td>
                           <td> <?php $xx = $val->ad_id; ?>
                                       <a class="dropdown-item has-icon" href="<?php echo base_url(); ?>ad_admission/updateStatus/<?php echo $val->ad_id; ?>" ><i class="far fa-edit" name="update"></i>Print</a>
                           </td>
                        </tr>
                        <?php $sno++;
                           } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</body>
<?php include('footer.php'); ?>


</html>