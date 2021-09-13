<?php include('header.php'); ?>
       
<?php include('sidebar.php'); ?>
       
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <!-- <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"></h4> -->
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>welcome/dashboard" class="text-muted"><i class="fa fa-home"></i></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Add Customer
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <style type="text/css">
                .t1{
                    color: black;
                    font-size: 12px;
                }
            </style>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                            <div class="table-responsive">
                                    <table id="zero_config" class="table">
                                        <thead class="bg-primary text-white">
                                            <tr style="font-size: 13px;">
                                              <th>BillNo</th>
                                              <th>Brand Name</th>
                                              <th>Name</th>
                                              <th>MobileNo</th>
                                              <th>No-OF Meaters</th>
                                              <th>Amount</th>
                                              <th>Action</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno=1; foreach($all_customer_stock as $val){ ?>
                                            <tr class="t1">
                                           <td>
                                             <?php echo $val->billno; ?>
                                           </td>
                                            <td>
                                            <?php $brandids = explode(",",$val->brand_name);
                                            foreach($all_clientstock as $row) { if(in_array($row->clientstock_id,$brandids)) {  echo $row->brand_name; }  } ?>
                                            </td>
                                            <td>
                                            <?php echo $val->customer_name; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->mobile_no; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->customer_no_of_meaters; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->customer_amount; ?>  
                                            </td>
                                            <td>
                                              <a href="javascript:upgrade_customerstock(<?php echo $val->customer_stock_id; ?>)" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                               <a href="javascript:trash_record(<?php echo $val->customer_stock_id; ?>)" onclick="return confirm('Are You Sure You Want To Delete This Record?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Customer Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: #c4c5c8;">
                    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="result_msg"></div>
                                 <?php 

                                        $q = "SELECT * FROM  customer_stock  ORDER BY customer_stock_id DESC";
                                          $q1 = $this->db->query($q);
                                          $q2 = $q1->result();
                                          // echo "<pre>";
                                          // print_r();
                                          // die;
                                          $billno = 0;
                                          if(count($q2)>0)
                                          {
                                              if(!empty($q2[0]->billno))
                                              {

                                              $billno =  1+$q2[0]->billno;
                                              }
                                              else
                                              {
                                                $billno = 01; 
                                              }
                                          }
                                          else
                                          {
                                            $billno = 01;
                                          }

                                       ?>
                              <!--   <h4 class="card-title">Stock<a style="margin-left: 25px;"href="<?php echo base_url(); ?>welcome/dashboard">
                                <i class="fa fa-home"></i></a></h4> -->
                                <form method="post" name="add_customer_stock" id="add_customer_stock">
                                
                                    <div class="form-body">
                                        <div class="row">

                                            <input type="hidden" name="customer_stock_id" id="customer_stock_id">
                                            <input type="hidden" name="billno" id="billno" class="form-control" value="<?php echo $billno; ?>">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Brand Name</b></label>
                                                  <select class="form-control" name="brand_name" id="brand_name">
                                                 <option value="">Select</option>
                                                <?php foreach($all_clientstock as $ld) { ?>
                                                <option 
                                                value="<?php echo $ld->clientstock_id; ?>"><?php echo $ld->brand_name; ?></option>
                                              <?php } ?>
                                              </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Name</b></label>
                                                    <input type="text" name="customer_name" id="customer_name" value="" class="form-control" placeholder="Customer Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>MobileNo</b></label>
                                                    <input type="text" name="mobile_no" id="mobile_no" value="" class="form-control" placeholder="+91-00000-00000">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>No-OF Meaters</b></label>
                                                    <input type="text"  name="customer_no_of_meaters" id="customer_no_of_meaters" value="" class="form-control" placeholder="NO OF Meaters">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Amount</b></label>
                                                    <input type="text"  name="customer_amount" id="customer_amount" value="" class="form-control" placeholder="Amount">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <!-- <button type="submit" name="submit" class="btn btn-info">Submit</button> -->
                                            <input type="submit" name="submit" id="submit" value="Save"  class="btn btn-info">
                                            <!-- <button type="reset" class="btn btn-dark">Reset</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
           
            </div>
           
        </div>
       
    </div>
      </div>
        
    </div>
  </div>
</div>


    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


<script>

// just for the demos, avoids form submit

jQuery.validator.setDefaults({

  debug: true,

  success: "valid"

});

$( "#add_customer_stock" ).validate({

  rules: {

    w_template_name: {

      required: true,

    },

    w_template_message:{

      required: true

    }

  },

  messages:{

    w_template_name:{

      required : "<div style='color:red'>Enter Template Name</div>",

    },

    w_template_message:{

      required : "<div style='color:red'>Please enter template Message</div>"

    }

  },

  submitHandler: function () {

       event.preventDefault();

       var formdata =  $('#add_customer_stock').serialize();



       $.ajax({

          url : "<?php echo base_url(); ?>StockConroller/import_customer_stock",

          type : "post",

          data: formdata,

          success:function(resp)

          {

            var data = $.parseJSON(resp);

            var ddd = data['all_record'].status;

            if(ddd == '1')

            {

                $('#result_msg').fadeIn();

                $('#result_msg').html("<div class='alert alert-success'>Successfully Inserted Record</div>");

                $('#result_msg').fadeOut(2000);



                setTimeout(function() {

                    location.reload();

                }, 3000);



            }

            else if(ddd == '2'){

              $('#result_msg').fadeIn();

                $('#result_msg').html("<div class='alert alert-success'>Successfully Updated Record</div>");

                $('#result_msg').fadeOut(2000);



                setTimeout(function() {

                    location.reload();

                }, 3000);

            }

            else if(ddd == '3')

            {

               $('#result_msg').fadeIn();

                $('#result_msg').html("<div class='alert alert-danger'>Someting Wrong!!</div>");

                $('#result_msg').fadeOut(2000);



                setTimeout(function() {

                    location.reload();

                }, 3000);

            }

          }

       });

   }

});


function upgrade_customerstock(cutomerids){

  $.ajax({

     url : "<?php echo base_url(); ?>StockConroller/Getdata_customer",

     type : "post",

     data:{

       'customer_stock_id' : cutomerids

     },

     success:function(resp)
     {

      $("#exampleModal").modal();

      var data = $.parseJSON(resp);

      var customer_stock_id = data['single_record'].customer_stock_id;

      var billno = data['single_record'].billno;

      var brand_name = data['single_record'].brand_name;

      var customer_name = data['single_record'].customer_name;

      var  mobile_no = data['single_record'].mobile_no;

      var customer_no_of_meaters = data['single_record'].customer_no_of_meaters;

      var customer_amount = data['single_record'].customer_amount;

      $('#customer_stock_id').val(customer_stock_id);

      $('#billno').val(billno);

      $('#brand_name').val(brand_name);

      $('#customer_name').val(customer_name);

      $('#mobile_no').val(mobile_no);

      $('#customer_no_of_meaters').val(customer_no_of_meaters);s

      $('#customer_amount').val(customer_amount);

      $('#submit').val('Update');

     }

  });

}


 function trash_record(id)

  {

    var conf =  confirm("Are U Sure to Delete Record");

    if(conf){

        $.ajax({

          url : "<?php echo base_url(); ?>StockConroller/customerstock_trash",

          type :"post",

          data:{

            'customer_stock_id' : id

          },

          success:function(res)

          {

            setTimeout(function() {

                location.reload();

            },100);

          }

        });

    }

  }
</script>

    </body>


</html>