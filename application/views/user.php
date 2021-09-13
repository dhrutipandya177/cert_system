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
                                <h4 class="card-title">User<a style="margin-left: 25px;"href="<?php echo base_url(); ?>welcome/dashboard">
                                <i class="fa fa-home"></i></a></h4>   
                                <form method="post" action="<?php echo base_url(); ?>settings/user">
                                    <input type="hidden" name="update_id" value="<?php if(!empty($select_user->user_id)) { echo $select_user->user_id; } ?>"/>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Branch</b></label>
                                                   <select required  name="branch_id" class="form-control" >
                                                    <option value="">Select Branch</option>
                                                    <?php foreach($branch_all as $val) { ?>
                                                        <option <?php if($val->branch_id==@$select_user->branch_id) { echo "selected"; } ?>   value="<?php echo $val->branch_id; ?>"><?php echo $val->branch_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Department</b></label>
                                                   <select required  name="department_id" class="form-control" >
                                                    <option value="">Select Department</option>
                                                    <?php foreach($department_all as $val) { ?>
                                                        <option <?php if($val->department_id==@$select_user->department_id) { echo "selected"; } ?>   value="<?php echo $val->department_id; ?>"><?php echo $val->department_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Logtype</b></label>
                                                   <select required  name="logtype" class="form-control" >
                                                    <option value="">Select Logtype</option>
                                                    <?php foreach($logtype_all as $val) { ?>
                                                        <option <?php if($val->logtype_id==@$select_user->logtype) { echo "selected"; } ?>   value="<?php echo $val->logtype_id; ?>"><?php echo $val->logtype_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Name</b></label>
                                                    <input type="text" value="<?php if(!empty($select_user->name)) { echo $select_user->name; } ?>" name="name" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                             <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Email</b></label>
                                                    <input type="email" value="<?php if(!empty($select_user->email)) { echo $select_user->email; } ?>" name="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Password</b></label>
                                                    <input type="password" value="<?php if(!empty($select_user->password)) { echo $select_user->password; } ?>" name="password" class="form-control" placeholder="password">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <div class="form-actions">
                                        <div class="text-left">
                                           <!--  <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button> -->
                                            <input type="submit" name="submit" value="submit"  class="btn btn-primary">
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
                                                <th>SR_No</th>
                                                <th>Logtype</th>
                                                <th>Details</th>
                                                <th>Branch</th>
                                                <th>Department</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php $sno=1; foreach($user_all as $val){ ?>
                                            <tr class="t1">
                                           <td><?php echo $sno; ?></td>
                                            <td>
                                         <?php $branch_ids = explode(",",$val->logtype);
                                         foreach($logtype_all as $row) { if(in_array($row->logtype_id,$branch_ids)) {  echo $row->logtype_name; }  } ?>   
                                            </td>
                                            <td>
                                            <?php echo "<b>Name :</b>".''. $val->name; ?><br>
                                            <?php echo "<b>Email :</b>".''. $val->email; ?>
                                            </td>
                                            <td>
                                          <?php $branch_ids = explode(",",$val->branch_id);
                                         foreach($branch_all as $row) { if(in_array($row->branch_id,$branch_ids)) {  echo $row->branch_name; }  } ?> 
                                            </td>
                                            <td>
                                         <?php $branch_ids = explode(",",$val->department_id);
                                         foreach($department_all as $row) { if(in_array($row->department_id,$branch_ids)) {  echo $row->department_name; }  } ?>   
                                            </td>
                                            <td>
                                            <a href="<?php echo base_url(); ?>settings/user?action=edit&id=<?php echo @$val->user_id; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url(); ?>settings/user?action=delete&id=<?php echo @$val->user_id; ?>" onclick="return confirm('Are you sure you want to delete this User?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>    
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