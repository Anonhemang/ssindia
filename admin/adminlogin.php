<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shree Shakti Industries | Login</title>

  <?php $this->load->view('admin/csslink') ?> 

</head>
<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>LOGIN</b></h1>
    </div>
    <div class="card-body">  
      <form action="<?php echo base_url();?>admin/login/matchdata" method="post" name="admin" id="admin" accept-charset="utf-8" enctype="multipart/form-data">
         <div class="col-md-12">     
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="admin_email" id="admin_email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="admin_password" id="admin_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
          </div>
          <div class="card-footer" style="background-color:white;">
             <a href="forgot-password.html">I forgot my password</a>
             <button type="submit" class="btn btn-primary" name="login" style="margin-left:18%;"> Submit </button>
          </div>
        </div>
      </form>
          
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('admin/jslink') ?>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script type="text/javascript"> 
  if ($("#admin").length > 0) {
      $("#admin").validate({
    rules: {
      admin_email: {
        required: true,
        email: true,
      },
      admin_password: {
        required: true,
        minlength: 5
      },
    },
    messages: {
      admin_email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      admin_password: {
        required: "Please enter a password",
        minlength: "Your password must be at least 5 characters long"
      },
    },
  })
}

</script> 
</body>
</html>
