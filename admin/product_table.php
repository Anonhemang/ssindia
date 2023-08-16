<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new careers from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSI India Admin | Product List</title>

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
            <h1 class="m-0">Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               <a class="btn btn-primary " href="<?php echo base_url();?>admin/product" role="button" style="margin-left: 86%;">Add New Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-hover table-active">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Product Title</th>
                    <th>Product Description</th>
                    <th>Product Packing</th>
                    <th>pro_1</th>
                    <th>pro_2</th>
                    <th>pro_3</th>
                    <th>pro_4</th>
                    <th>pro_5</th>
                    <th>pro_6</th>
                    <th>pro_7</th>
                    <th>pro_8</th>
                    <th>pro_9</th>
                    <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=1;
                      foreach($productlist as $row)
                      { ?>
                  <tr>
                   <td><?php echo $row->pro_id ;?></td>
                   <td><?php echo $row->pro_title;?></td>
                   <td><?php echo substr($row->pro_description,0,50);?>...</td>
                   <td><?php echo substr($row->pro_packing,0,50);?>...</td>
                   <td><?php echo $row->pro_1;?></td>
                   <td><?php echo $row->pro_2;?></td>
                   <td><?php echo $row->pro_3;?></td>
                   <td><?php echo $row->pro_4;?></td>
                   <td><?php echo $row->pro_5;?></td>
                   <td><?php echo $row->pro_6;?></td>
                   <td><?php echo $row->pro_7;?></td>
                   <td><?php echo $row->pro_8;?></td>
                   <td><?php echo $row->pro_9;?></td>
                    <td>
                      <a  class="btn btn-primary btn-xs" href='<?php echo base_url();?>admin/product/editdata/<?php echo $row->pro_id;?>'><span class="nav-icon fas fa-edit"></span></a>  
                      <a class="btn btn-danger btn-xs" href='<?php echo base_url();?>admin/product/deletedata/<?php echo $row->pro_id;?>' id="career"><span class="nav-icon fas fa-trash-alt"></span> 
                      </a>
                    </td>
                  </tr>
                   <?php $i++; }
                   ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script type="text/javascript">
    $(function(){
    $('a#career').click(function(){
        if(confirm('Are you sure to delete ?')) {
            return true;
        }
        return false;
    });
})
</script>
</body>
</html>
