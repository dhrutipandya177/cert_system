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
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <style type="text/css">
                .t1{
                    color: black;
                }
            </style>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course<a style="margin-left: 25px;"href="<?php echo base_url(); ?>welcome/dashboard">
                                <i class="fa fa-home"></i></a></h4>
                                <form method="post" action="<?php echo base_url(); ?>settings/course">
                                    <input type="hidden" name="update_id" value="<?php if(!empty($select_course->course_id)) { echo $select_course->course_id; } ?>"/>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Course Name</b></label>
                                                    <input type="text" name="course_name" value="<?php if(!empty($select_course->course_name)) { echo $select_course->course_name; } ?>" class="form-control" placeholder="Course Name">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><b>Course code</b></label>
                                                    <input type="text" value="<?php if(!empty($select_course->course_code)) { echo $select_course->course_code; } ?>" name="course_code" class="form-control" placeholder="name">
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
                                <h4 class="card-title">Course Data</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>SR_No</th>
                                                <th>Course_name</th>
                                                <th>Course Code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php $sno=1; foreach($course_all as $val){ ?>
                                            <tr class="t1">
                                           <td><?php echo $sno; ?></td>
                                            <td>
                                            <?php echo $val->course_name; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->course_code; ?>
                                            </td>
                                            
                                            <td>
                            
                              <a href="<?php echo base_url(); ?>settings/course?action=edit&id=<?php echo @$val->course_id; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                               <a href="<?php echo base_url(); ?>settings/course?action=destroy&id=<?php echo @$val->course_id; ?>" onclick="return confirm('Are you sure you want to delete this Course?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                              
                           
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