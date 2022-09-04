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
          <li><a href="services.php">Services</a></li>
          <li><a class="active" href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>

          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Portfolio</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Graphics</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
         
          <?php
          $query3 ="SELECT * FROM portfolios";
          $result3 =mysqli_query($conn, $query3);
          while($data3=mysqli_fetch_array($result3)){
          ?>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-<?php echo $data3['class'] ?>">
            <div class="portfolio-item">
              <img src="<?php echo "uploads/".$data3['img']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><?php echo $data3['sub_title'] ?></h3>
                <p><?php echo $data3['sub_desc'] ?></p>
                <div>
                  <a href="<?php echo "uploads/".$data3['img']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.php" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php require("inc/header.php") ?>