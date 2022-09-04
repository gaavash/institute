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
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>

          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
        <?php
        $query1 ="SELECT * FROM abouts";
        $result1 =mysqli_query($conn, $query1);
        $data1= $result1->fetch_assoc(); 
        ?>
          <div class="col-lg-6">
            <img src="<?php echo "uploads/".$data1['img']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><?php echo $data1['title'] ?></h3>
            <p class="fst-italic">
            <?php echo $data1['about_desc'] ?>
            </p>
           
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">
          <?php
          $query2 ="SELECT * FROM abouts";
          $result2 =mysqli_query($conn, $query2);
          while($data2=mysqli_fetch_array($result2)){
          ?>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $data2['sub_num'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $data2['sub_title'] ?></p>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>We can have the skills mentioned below:</p>
        </div>

        <div class="skills-content">
          <?php
          $query3 ="SELECT * FROM skills";
          $result3 =mysqli_query($conn, $query3);
          while($data3=mysqli_fetch_array($result3)){
          ?>

          <div class="progress">
            <div class="progress-bar bg-<?php echo $data3['color'] ?>" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?php echo $data3['title'] ?> <i class="val"></i></span>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Tetstimonials</h2>
          <p>A testimonial is an honest endorsement of your product or service that usually comes from a customer, colleague, or peer who has benefited from or experienced success as a result of the work you did for them.</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
            <?php
            $query4 ="SELECT * FROM testimonials";
            $result4 =mysqli_query($conn, $query4);
            while($data4=mysqli_fetch_array($result4)){
            ?>
            <div class="testimonial-item swiper-slide">
              <img src="<?php echo "uploads/".$data4['img']; ?>" class="testimonial-img" alt="">
              <h3><?php echo $data4['name'] ?></h3>
              <h4><?php echo $data4['post'] ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $data4['statement'] ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
            <?php } ?>

            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->

  <?php require("inc/footer.php") ?>