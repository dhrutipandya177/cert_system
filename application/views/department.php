<?php include('header.php'); ?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php include('sidebar.php'); ?>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Department<a style="margin-left: 25px;"href="<?php echo base_url(); ?>welcome/dashboard">
                                <i class="fa fa-home"></i></a></h4>
                                <form method="post" action="<?php echo base_url(); ?>settings/department">
                                    <input type="hidden" name="update_id" value="<?php if(!empty($select_department->department_id)) { echo $select_department->department_id; } ?>"/>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Branch Name</b></label>
                                                   <select required  name="branch_id" class="form-control" >
                                                    <option value="">Select Branch</option>
                                                    <?php foreach($branch_all as $val) { ?>
                                                        <option <?php if($val->branch_id==@$select_department->branch_id) { echo "selected"; } ?>   value="<?php echo $val->branch_id; ?>"><?php echo $val->branch_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Department name</b></label>
                                                    <input type="text" value="<?php if(!empty($select_department->department_name)) { echo $select_department->department_name; } ?>" name="department_name" class="form-control" placeholder="Department Name">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <!-- <button type="submit" name="submit" class="btn btn-info">Submit</button> -->
                                            <input type="submit" name="submit" value="submit" class="btn btn-info">
                                            <!-- <button type="reset" class="btn btn-dark">Reset</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
           
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
     <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="margin-top: -85px;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Department Data</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>SR_No</th>
                                                <th>Branch Name</th>
                                                <th>Department Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php $sno=1; foreach($department_all as $val){ ?>
                                            <tr class="t1">
                                           <td><?php echo $sno; ?></td>
                                          <td>
                                         <?php $branch_ids = explode(",",$val->branch_id);
                                         foreach($branch_all as $row) { if(in_array($row->branch_id,$branch_ids)) {  echo $row->branch_name; }  } ?>   
                                            </td>
                                            <td>
                                            <?php echo $val->department_name; ?>
                                            </td>
                                            <td><label> <?php if($val->depart_status=="0") { echo "<b style='color: #22ca80;'>Active</b>"; } if($val->depart_status=="1") { echo  "<b style='color: #ff4f70;'>Disable</b>"; } ?> </label>
                                            </td>
                                             <td>
                            
                              <a href="<?php echo base_url(); ?>settings/department?action=edit&id=<?php echo @$val->department_id; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                              <a href="<?php echo base_url(); ?>settings/department?action=destroy&id=<?php echo @$val->department_id; ?>" onclick="return confirm('Are you sure you want to delete this Department?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                              <?php if($val->depart_status==0) { ?>
                              <a href="<?php echo base_url(); ?>settings/department?action=delete&id=<?php echo @$val->department_id; ?>&status=<?php echo @$val->depart_status; ?>" class="btn-sm btn-success"><i class="fas fa-id-badge"></i></a>
                              <?php } else {  ?>
                              
                              <a href="<?php echo base_url(); ?>settings/department?action=delete&id=<?php echo @$val->department_id; ?>&status=<?php echo @$val->depart_status; ?>" class="btn-sm btn-danger"><i class="fas fa-id-badge"></i></a>
                             <?php } ?>
                           
                                            </td>

                                            </tr>
                                            <?php $sno++; } ?>
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