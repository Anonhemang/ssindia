<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inquiry | Shree Shakti Industries </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include('csslinks.php') ?>

</head>

<body>

  <?php include('header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero5" class="d-flex align-items-center">  
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Inquiry Form</h2>
        </div>
        <form action="">inquiry/sendmail" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="cname" id="cname" placeholder="Company Name" data-rule="email" data-msg="Please enter a valid email">
              <!--<div class="validate"></div>-->
            </div>
            
          </div>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone No." data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <!--<div class="validate"></div>-->
            </div> 
          </div>
          <div class="form-row">
            <div class="col-md-12 form-group">
               <textarea class="form-control" name="enq" id="enq" rows="5" placeholder="Enquiry Message"></textarea>
              <!--<div class="validate"></div>-->
            </div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center">
               <input type="submit" value="Make an Appointment" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </section><!-- End Appointment Section -->
  </main><!-- End #main -->

 <?php include('footer.php') ?>

 <?php include('jslinks.php') ?>

</body>

</html>