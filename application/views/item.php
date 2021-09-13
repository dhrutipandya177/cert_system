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
<div class="table-right-content">
            <button href="#" class="btn btn-info" data-toggle="modal" data-target="#ptm_add">
            <span><i class="fas fa-plus mr-1"></i></span>
            </button>
         </div>
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
   <div class="table-right-content">
            <button href="#" class="btn btn-info" data-toggle="modal" data-target="#ptm_add">
            <span><i class="fas fa-plus mr-1"></i></span>
            </button>
         </div>
   <div class="modal fade" id="ptm_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title text-dark" id="myLargeModalLabel">Create PTM Meeting</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
               </div>
               <form enctype="multipart/form-data" class="document-createmodal" method="post" name="ptm_meeting" id="ptm_meeting" action="<?php echo base_url(); ?>item/item_add">
                  <input type="hidden" name="item_id" id="item_id" class="form-control">
                  <div class="form-group row mb-2 " style="margin-left:45px;">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-10 p-2">
                              <label for="">product Name:<span style="color: red;">*</span></label>
                              <select class="form-control" name="product_id" id="product_id" required>
                                 <option>Select product</option>
                                 <?php foreach($product as $val) { ?>
                                 <option value="<?php echo $val->product_id; ?>"><?php echo $val->product_name; ?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div id="dynamic_field" class="dynamic_field">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-3">
                                 <label for="">Item Name:<span style="color: red;">*</span></label>
                                 <input class="form-control" name="item_name[]" id="item_name" required > 
                              </div>
                              <div class="col-md-3">
                                 <label for="">Item code:<span style="color: red;">*</span></label>
                                 <input class="form-control" name="item_code[]" id="item_code" required > 
                              </div>
                              <div class="col-md-2">
                                 <label for="">Item Des:<span style="color: red;">*</span></label>
                                 <input class="form-control" name="item_description[]" id="item_description" required > 
                              </div>
                              <div class="col-md-2">
                                 <label for="">Price:<span style="color: red;">*</span></label>
                                 <input class="form-control" name="item_price[]" id="item_price" >
                              </div>
                              <div class="col-md-2 p-4">
                                 <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button>
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
      </div>
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
                           <th>item name</th>
                           <th>item code</th>
                           <th>item des</th>
                           <th>item price</th>
                           <th>product id</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $sno = 1;
                           foreach ($item as $val) { ?>
                        <tr>
                           
                           <td><?php echo $sno; ?></td>
                           <td><?php echo $val->item_name; ?></td>
                           <td><?php echo $val->item_code; ?></td>
                           <td><?php echo $val->item_description; ?></td>
                           <td><?php echo $val->item_price; ?></td>
                           <td><?php echo $val->product_id; ?></td>
                           <td>
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


    <script>
         
         $(document).ready(function(){      
         var i=1;  
         $('#add').click(function(){  
         i++;  
         $('#dynamic_field').append('<div class="row"><div class="col-md-3"><label for="">Item Name:<span style="color: red;">*</span></label><input class="form-control" name="item_name[]" id="item_name'+i+'" required ></div><div class="col-md-3"><label for="">Item code:<span style="color: red;">*</span></label><input class="form-control" name="item_code[]" id="item_code'+i+'" required ></div><div class="col-md-2"><label for="">item_description:<span style="color: red;">*</span></label><input class="form-control" name="item_description[]" id="item_description'+i+'" required ></div><div class="col-md-2"><label for="">Price:<span style="color: red;">*</span></label><input class="form-control" name="item_price[]" id="item_price'+i+'" ></div><div class="col-md-2 p-4"><button type="button" name="remove" id="'+i+'" class="btn btn-icon btn-danger btn_remove"><i class="fas fa-times"></i></button></div></div></div>');
         });
         });   
         
         $(document).on('click', '.btn_remove', function() {
         if($('.row').length > 1) {
         $('row').last().remove();
         }
         });
      </script>

</html>