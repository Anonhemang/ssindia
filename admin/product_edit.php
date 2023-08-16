<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new careers from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSI India Admin | Product Edit</title>

  <?php $this->load->view('admin/csslink') ?> 

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>

  <?php $this->load->view('admin/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Careers Energy</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Careers Energy</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- general form elements disabled -->
            <div class="card card-primary container">
              
              <!-- /.card-header -->
              <div class="card-body ">
                <form action="<?php echo base_url();?>admin/product/updatedata" method="post" name="product" id="product" accept-charset="utf-8" enctype="multipart/form-data">   
                       <input type="hidden" name="update_id" value="<?php echo $data->pro_id;?>">

                       <!-- text input -->
                    <div class="form-group">
                      <label>Product Title :</label>
                      <input name="pro_title" type="text" class="form-control" placeholder="Enter ..." value="<?php echo $data->pro_title; ?>">
                    </div>
                    <br>

                    <div class="row"> 
                      <div class="col-md-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_1 :</label>
                          <textarea name="pro_1" id="editor2"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_1; ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_2 :</label>
                          <textarea name="pro_2" id="editor3"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_2; ?>
                          </textarea>
                        </div>
                      </div> 
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_3 :</label>
                          <textarea name="pro_3" id="editor4"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_3; ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_4 :</label>
                          <textarea name="pro_4" id="editor5"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_4; ?>
                          </textarea>
                        </div>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_5 :</label>
                          <textarea name="pro_5" id="editor6"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_5; ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_6 :</label>
                          <textarea name="pro_6" id="editor7"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_6; ?>
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class="row"> 
                      <div class="col-md-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_7 :</label>
                          <textarea name="pro_7" id="editor8"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_7; ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_8 :</label>
                          <textarea name="pro_8" id="editor9"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_8; ?>
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row"> 
                      <div class="col-md-12">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product_9 :</label>
                          <textarea name="pro_9" id="editor10"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_9; ?>
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class="row"> 
                      <div class="col-md-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product Description :</label>
                          <textarea name="pro_description" id="editor1"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_description; ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-6">  
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Product Packing :</label>
                          <textarea name="pro_packing" id="editor"  type="text" class="form-control"  placeholder="Enter ..."><?php echo $data->pro_packing; ?>
                          </textarea>
                        </div>
                      </div>
                    </div>
                    <br>


                      <!-- text input -->
                      <!-- <div class="form-group">
                        <label>Careers title :</label>
                        <input name="careers_title" type="text" class="form-control" value="<?php// echo $data->careers_title; ?>" placeholder="Enter ...">
                      </div> -->
                         
                      <!-- textarea -->
                     <!--  <div class="form-group">
                        <label>Careers Description :</label>
                        <textarea name="careers_description" id="editor1"  type="text" class="form-control"  placeholder="Enter ..."><?php// echo $data->careers_description; ?>
                        </textarea>
                      </div> -->
                        
                      <!-- textarea -->
                     <!--  <div class="form-group">
                        <label>Careers Contact :</label>
                        <textarea name="careers_contact" id="editor"  type="text" class="form-control"  placeholder="Enter ..."><?php// echo $data->careers_contact; ?>
                        </textarea>
                      </div> -->


                      <div class="">
                        <button type="submit" value="Create" class="btn btn-primary">Update</button>
                      </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <?php $this->load->view('admin/footer') ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php $this->load->view('admin/jslink') ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script >
 
if ($("#careers").length > 0) {
    $("#careers").validate({
    rules: {
      careers_title: {
        required: true,
      },
      careers_description: {
        required: true,
      },
    },
    messages: {
      careers_title: {
        required: "Please enter title",
      },
    },
  })
}
</script> 
<script>
 ClassicEditor
  .create( document.querySelector( '#editor' ) )
  .catch( error => {
      console.error( error );
  } );
 ClassicEditor
  .create( document.querySelector( '#editor1' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor2' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor3' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor4' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor5' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor6' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor7' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor8' ) )
  .catch( error => {
      console.error( error );
  } );
   ClassicEditor
  .create( document.querySelector( '#editor9' ) )
  .catch( error => {
      console.error( error );
  } );
    ClassicEditor
  .create( document.querySelector( '#editor10' ) )
  .catch( error => {
      console.error( error );
  } );
</script>
</body>
</html>
