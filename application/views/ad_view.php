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
<button class="btn btn-md"><a class="btn btn-warning text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status" >  </a></button>
               <button class="btn btn-md"><a class="btn btn-warning text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status_panding" >  </a></button>
               <button class="btn btn-md"><a class="btn btn-warning text-white" href="<?php echo base_url(); ?>ad_admission/ad_view" >  </a></button>
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
               <button class="btn btn-md"><a class="btn btn-success text-white" href="<?php echo base_url(); ?>ad_admission/ad_view" > All <span
                             class="badge badge-transparent"><?php echo $count_all_data; ?></span></a></button>
               <button class="btn btn-md"><a class=" btn btn-info text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status" > Confirmed <span
                             class="badge badge-transparent"><?php echo $count_con_data; ?></span></a></button>
               <button class="btn btn-md"><a class="btn btn-danger text-white" href="<?php echo base_url(); ?>ad_admission/filter_by_status_panding" > Request <span
                             class="badge badge-transparent"><?php echo $count_pan_data; ?></span></a></button>
               <!-- <button class="btn btn-md"><a class="btn btn-info text-white" href="<?php echo base_url(); ?>ad_admission/ad_view" > To print </a></button> -->
                  <table id="zero_config" class="table">
                     <thead class="bg-primary text-white">
                        <tr>
                           <th>Sn</th>
                           <th>Department</th>
                           <th>Reg no</th>
                           <th>Student Name</th>
                           <th>GR ID</th>
                           <th>contect no</th>
                           <th>Course</th>
                           <th>branch</th>
                           <th>Starting Date</th>
                           <th>duration</th>
                           <th>End Date</th>
                           <th>Issue date</th>
                           <th>Grade</th>
                           <th>status</th>
                           <th>Request</th>
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
                              <?php if($val->status == 'PANDING' ){?>
                                 <td> <?php $xx = $val->ad_id; ?>
                                       <a class="dropdown-item has-icon" href="<?php echo base_url(); ?>ad_admission/updateStatus/<?php echo $val->ad_id; ?>" ><i class="far fa-edit" name="update"></i> confirm request </a>
                                 </td>
                                 <?php } else if ($val->status == 'APROOVED' ){?>
                                    <td> <?php $xx = $val->ad_id; ?>
                                       <p class="dropdown-item has-icon" >Print</p>
                                    </td>
                                    <?php  }?>
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