<?php require("inc/header.php") ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
            <?php
            $query0 ="SELECT * FROM navbars";
            $result0 =mysqli_query($conn, $query0);
            $data0= $result0->fetch_assoc();
            ?>
        <h1 class="text-light"><a href="index.php"><span><img src="<?php echo "uploads/".$data0['logo']; ?>" alt=""></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>

          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <?php
				$query3 ="SELECT * FROM services";
				$result3 =mysqli_query($conn, $query3);
				while($data3=mysqli_fetch_array($result3)){
				?>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><?php echo $data3['icon'] ?></div>
              <h4 class="title"><a href="#"><?php echo $data3['title'] ?></a></h4>
              <p class="description"><?php echo $data3['service_desc'] ?></p>
            </div>
          </div>

        </div>

        <?php } ?>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
   <!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <?php
          $query4 ="SELECT * FROM views ";
          $result4 =mysqli_query($conn, $query4);
          while($data4=mysqli_fetch_array($result4)){
          ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo "uploads/".$data4['img']; ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?php echo $data4['title'] ?></a></h5>
                <p class="card-text"><?php echo $data4['views_desc'] ?></p>
                
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Service Details Section -->

   

  </main><!-- End #main -->

  <?php require("inc/footer.php") ?>