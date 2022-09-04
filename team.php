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
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a  class="active" href="team.php">Team</a></li>
         
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Team</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
        <?php
				$query3 ="SELECT * FROM teams";
				$result3 =mysqli_query($conn, $query3);
				while($data3=mysqli_fetch_array($result3)){
				?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo "uploads/".$data3['img']; ?>" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href="<?php echo $data3['facebook'] ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $data3['instagram'] ?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $data3['gmail'] ?>"><i class="bi fa fa-google-plus"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $data3['name'] ?></h4>
                <span><?php echo $data3['post'] ?></span>
                <p><?php echo $data3['message'] ?></p>
              </div>
            </div>
          </div>

          <?php } ?>

        

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <?php require("inc/footer.php") ?>