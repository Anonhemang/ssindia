<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product | Shree Shakti Industries </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include('csslinks.php') ?>

</head>

<body>

  <?php include('header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="d-flex align-items-center">
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid row star">

        <div class="nav flex-column nav-pills col-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
         <?php
          foreach($productlist as $row)
          { ?>
          
          <a  id="<?php echo $row->pro_id;?>"  href="">
            <?php echo $row->pro_title;?>
              
          </a>
          
          <?php } ?>
         
        </div>
      <div class="tab-content col-9 " id="v-pills-tabContent">
        <?php
          foreach($productdetail as $row)
          { ?>
          <div class="container tabcol animate__animated animate__fadeInUp">
          <h2><?php echo $row->pro_title;?></h2><br>
          <div class="container">
            <div class="row fadeInDown">
              <?php if($row->pro_1!=''){?>
                <div class="col-lg-4 "><div class="icon-box1"><h5> <?php echo $row->pro_1;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_2!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_2;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_3!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_3;?> </h5></div> </div>
              <?php } ?>
              
               <?php if($row->pro_4!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_4;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_5!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_5;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_6!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_6;?> </h5></div> </div>
              <?php } ?><br>
              <?php if($row->pro_7!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_7;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_8!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_8;?> </h5></div> </div>
              <?php } ?>
               <?php if($row->pro_9!=''){?>
                <div class="col-lg-4"><div class="icon-box1"><h5> <?php echo $row->pro_9;?> </h5></div> </div>
              <?php } ?>
              </div>
            </div>
            <div><br>
                <h3>Description </h3>
                <p><?php echo $row->pro_description;?></p><br>
                <h3> Standard Packing </h3>
                <p><?php echo $row->pro_packing;?></p>
                
                <p> *Special packaging requirements can be accommodated.</p>
                <p><strong>The product is tested by our standard analytical method.</strong></p>
              </div>
          </div>
         <?php } ?>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!--<section id="counts" class="counts">-->
    <!--  <div class="container">-->

    <!--    <div class="row">-->

    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="count-box">-->
    <!--          <i class="icofont-doctor-alt"></i>-->
    <!--          <span data-toggle="counter-up">85</span>-->
    <!--          <p>Doctors</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="icofont-patient-bed"></i>-->
    <!--          <span data-toggle="counter-up">18</span>-->
    <!--          <p>Departments</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="icofont-laboratory"></i>-->
    <!--          <span data-toggle="counter-up">8</span>-->
    <!--          <p>Research Labs</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="icofont-award"></i>-->
    <!--          <span data-toggle="counter-up">150</span>-->
    <!--          <p>Awards</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section> End Counts Section -->

  </main><!-- End #main -->

 <?php include('footer.php') ?>

 <?php include('jslinks.php') ?>

</body>

</html>