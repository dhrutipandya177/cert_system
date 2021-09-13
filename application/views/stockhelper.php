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
                          Add Stock
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
                                                <th>SRNo</th>
                                                <th>Brand No</th>
                                                <th>Brand Name</th>
                                                <th>Brand Color</th>
                                                <th>Brand Type</th>
                                                <th>No-OF Meaters</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php $sno=1; foreach($all_clientstock as $val){ ?>
                                            <tr class="t1">
                                           <td><?php echo $sno; ?></td>
                                           <td>
                                            <?php echo $val->brand_no; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->brand_name; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->brand_color; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->brand_type; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->no_of_meaters; ?>
                                            </td>
                                            <td>
                                            <?php echo $val->amount; ?>  
                                            </td>
                                            <td>
                                              <a href="javascript:upgrade_clietstock(<?php echo $val->clientstock_id; ?>)" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                               <a href="javascript:trash_record(<?php echo $val->clientstock_id; ?>)" onclick="return confirm('Are You Sure You Want To Delete This Record?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Import Stock</h5>
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

                                        $q = "SELECT * FROM  clientstock ORDER BY clientstock_id DESC";
                                          $q1 = $this->db->query($q);
                                          $q2 = $q1->result();
                                          // echo "<pre>";
                                          // print_r();
                                          // die;
                                          $brand_no = 0;
                                          if(count($q2)>0)
                                          {
                                              if(!empty($q2[0]->brand_no))
                                              {

                                              $brand_no =  1+$q2[0]->brand_no;
                                              }
                                              else
                                              {
                                                $brand_no = 01; 
                                              }
                                          }
                                          else
                                          {
                                            $brand_no = 01;
                                          }

                                       ?>
                              <!--   <h4 class="card-title">Stock<a style="margin-left: 25px;"href="<?php echo base_url(); ?>welcome/dashboard">
                                <i class="fa fa-home"></i></a></h4> -->
                                <form method="post" name="add_stock" id="add_stock">
                                    <div class="form-body">
                                        <div class="row">

                                            <input type="hidden" name="clientstock_id" id="clientstock_id" class="form-control">
                                            <input type="hidden" name="brand_no" id="brand_no" class="form-control" value="<?php echo $brand_no; ?>">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Brand Name</b></label>
                                                    <input type="text" name="brand_name" id="brand_name" value="" class="form-control" placeholder="Brand Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Brand Color</b></label>
                                                    <input type="text" name="brand_color" id="brand_color" value="" class="form-control" placeholder="Brand Color">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Brand Type</b></label>
                                                    <input type="text"  name="brand_type" id="brand_type" value="" class="form-control" placeholder="Type">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>No-OF Meaters</b></label>
                                                    <input type="text"  name="no_of_meaters" id="no_of_meaters" value="" class="form-control" placeholder="NO OF Meaters">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><b>Amount</b></label>
                                                    <input type="text"  name="amount" id="amount" value="" class="form-control" placeholder="Amount">
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

$( "#add_stock" ).validate({

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

       var formdata =  $('#add_stock').serialize();



       $.ajax({

          url : "<?php echo base_url(); ?>StockConroller/import_stock",

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


function upgrade_clietstock(stockids){

  $.ajax({

     url : "<?php echo base_url(); ?>StockConroller/Getdata",

     type : "post",

     data:{

       'clientstock_id' : stockids

     },

     success:function(resp)
     {

      $("#exampleModal").modal();

      var data = $.parseJSON(resp);

      var clientstock_id = data['single_record'].clientstock_id;

      var brand_no = data['single_record'].brand_no;

      var brand_name = data['single_record'].brand_name;

      var brand_color = data['single_record'].brand_color;

      var brand_type = data['single_record'].brand_type;

      var no_of_meaters = data['single_record'].no_of_meaters;

      var amount = data['single_record'].amount;

      $('#brand_no').val(brand_no);
      
      $('#brand_name').val(brand_name);

      $('#brand_color').val(brand_color);

      $('#brand_type').val(brand_type);

      $('#no_of_meaters').val(no_of_meaters);

      $('#amount').val(amount);

      $('#clientstock_id').val(clientstock_id);

      $('#submit').val('Update');

     }

  });

}


 function trash_record(id)

  {

    var conf =  confirm("Are U Sure to Delete Record");

    if(conf){

        $.ajax({

          url : "<?php echo base_url(); ?>StockConroller/clietstock_trash",

          type :"post",

          data:{

            'clientstock_id' : id

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