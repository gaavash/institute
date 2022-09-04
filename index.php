
  <?php require("inc/header.php") ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>

          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <?php
				$query1 ="SELECT * FROM sliders";
				$result1 =mysqli_query($conn, $query1);
        $data1= $result1->fetch_assoc();
        ?>
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span><?php echo $data1['title'] ?></span></h2>
          <p class="animate__animated animate__fadeInUp"><?php echo $data1['home_desc'] ?></p>
          
        </div>
      </div>
     

     

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
      <?php
			$query2 ="SELECT * FROM homes";
			$result2 =mysqli_query($conn, $query2);
			$data2= $result2->fetch_assoc(); 
			?>

        <div class="section-title">
          <h2>Home</h2>
          <p><?php echo $data2['home_desc'] ?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="<?php echo "uploads/".$data2['img']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?php echo $data2['sub_title'] ?></h3>
            <p class="fst-italic">
            <?php echo $data2['sub_desc'] ?>
            </p>
            
          </div>
        </div>

       

      </div>
    </section><!-- End Features Section -->

    
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
  </main><!-- End #main -->

  <?php require("inc/footer.php") ?>