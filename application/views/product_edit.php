<html>
<?php include('header.php'); ?>
<div class="main-wrapper main-wrapper-1">
   <div class="main-content">
      <section class="section">
         <div class="section-body">
            <div class="row">
               <div class="col-12 d-flex justify-content-between">
                  <h6 class="page-title text-dark mb-3">product Edit</h6>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item active" aria-current="page">product Edit</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-12 col-md-6 col-lg-6">
                  <div class="card card-primary">
                     <div id="msg"></div>
                     <form enctype="multipart/form-data" class="document-createmodal" method="post" name="item_add" id="item_add">
                        <div class="card-body">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-10 p-2">
                                    <label for="">Product Name:<span style="color: red;">*</span></label>
                                    <select class="form-control" name="package_id" id="package_id" required>
                                       <option>Select product</option>
                                       <?php $product_ids = explode(",",$single_reco->product_id);
                                          foreach($product_all as $val) { ?>
                                       <option <?php if(in_array($val->product_id,$product_ids)) { echo "selected"; } ?> value="<?php echo $val->product_id; ?>"><?php echo $val->product_name; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div id="dynamic_field">
                              <div class="col-md-12">
                                 <div class="row">
                                    <input type="hidden" class="form-control" name="item_id[]" value="<?php echo $single_reco->item_id ; ?>">  
                                    <div class="col-md-2">
                                       <label for="">Item name:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_name[]" id="item_name" value="<?php echo $single_reco->item_name; ?>">
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item code:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_code[]" id="item_code" value="<?php echo $single_reco->item_code; ?>">
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item Description:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_description[]" id="item_description" value="<?php echo $single_reco->item_description; ?>">
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item price:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_price[]" id="item_price" value="<?php echo $single_reco->item_price; ?>">
                                    </div>
                                    <div class="col-md-2 p-4">
                                       <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                    </div>
                                 </div>
                              </div>
                              <?php for($i=1; $i<sizeof($match_data); $i++){ if($match_data[$i]->item_status=="0") { ?>
                              <input type="hidden" class="form-control" name="item_id[]" value="<?php echo $match_data[$i]->item_id ; ?>">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-2">
                                       <label for="">Item name:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_name[]" id="item_name" value="<?php echo $match_data[$i]->item_name; ?>">
                              <?php echo "<pre>"; print_r($match_data); die();?>
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item code:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_code[]" id="item_code" value="<?php echo $match_data[$i]->item_code; ?>">
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item Description:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_description[]" id="item_description" value="<?php echo $match_data[$i]->item_description; ?>">
                                    </div>
                                    <div class="col-md-2">
                                       <label for="">Item price:<span style="color: red;">*</span></label>
                                       <input class="form-control" name="item_price[]" id="item_price" value="<?php echo $match_data[$i]->item_price; ?>">
                                    </div>
                                    <div class="col-md-2 p-4">
                                       <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                    </div>
                                 </div>
                              </div>
                              <?php } } ?>
                           </div>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" id="Submit" name="submit" value="Submit">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>  

</div>
</body>
<script type="text/javascript">
$("#item_add").validate({
        rules: {
          w_template_name: {
            required: true,
          },
          w_template_message: {
            required: true
          },
          branch_logo: {
            required: true,
          }
        },
        messages: {
          w_template_name: {
            required: "<div style='color:red'>Enter Template Name</div>",
          },
          w_template_message: {
            required: "<div style='color:red'>Please enter template Message</div>"
          }
        },
        submitHandler: function() {
          event.preventDefault();
          var form = $('#item_add')[0];
          var data = new FormData(form);

          $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>item/update_product",
            type: "post",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(resp) {
              var data = $.parseJSON(resp);
              var ddd = data['all_record'].status;
              if (ddd == '1') {
                $('#msg').html(iziToast.success({
                  title: 'Success',
                  timeout: 2000,
                  message: 'HI! This Record Updated.',
                  position: 'topRight'
                }));

                setTimeout(function() {
                  location.reload();
                }, 2020);
              } else if (ddd == '2') {
                $('#msg').html(iziToast.error({
                  title: 'Canceled',
                  timeout: 2000,
                  message: 'Someting Wrong!!',
                  position: 'topRight'
                }));

                setTimeout(function() {
                  location.reload();
                }, 2020);
              }
            }
          });
        }
      });

    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<div id="dynamic_field" class="dynamic_field"><div class="col-md-12"><div class="row"><div class="col-md-3"><label for="">Item Name:<span style="color: red;">*</span></label><input class="form-control" name="item_name[]" id="item_name'+i+'" required > </div><div class="col-md-3"><label for="">Item code:<span style="color: red;">*</span></label>    <input class="form-control" name="item_code[]" id="item_code'+i+'" required > </div><div class="col-md-2"><label for="">Item Des:<span style="color: red;">*</span></label><input class="form-control" name="item_description[]" id="item_description'+i+'" required > </div><div class="col-md-2"><label for="">Price:<span style="color: red;">*</span></label><input class="form-control" name="item_price[]" id="item_price'+i+'" ></div><div class="col-md-2 p-4"><button type="button" name="remove" id="'+i+'" class="btn btn-icon btn-danger btn_remove"><i class="fas fa-times"></i></button></div></div></div></div>');
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
  
    });  

   </script>
   <script type="text/javascript">
  $('#course_id').change(function(){
   
   var course_id = $('#course_id').val();
   
    $.ajax({
     url:"<?php echo base_url(); ?>AddmissionController/get_subcourse",
     method:"POST",
     data:{ 'course_id' : course_id }, 
     success:function(data)
     {
       $('#subcourse_id').html(data);
     }
    });
   });
</script>
</html>