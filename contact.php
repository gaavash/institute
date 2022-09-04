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
          <li><a href="team.php">Team</a></li>

          <li><a class="active" href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
            <?php
            $query1 ="SELECT * FROM contactinfos";
            $result1 =mysqli_query($conn, $query1);
            $data1= $result1->fetch_assoc(); 
            ?>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p><?php echo $data1['location']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php echo $data1['email']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php echo $data1['phone']; ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <?php
                      if(isset($_POST['submit'])){
                        $map=$_POST['map'];
                        $contact_desc= $_POST['contact_desc'];
                        $name= $_POST['name'];
                        $email= $_POST['email'];
                        $person= $_POST['person'];
                        $message= $_POST['message'];
                        $phone= $_POST['phone'];
                        if($name!="" && $email!="" && $person!="" && $message!="" && $phone!=""){
                            $query ="INSERT INTO contacts (map ,contact_desc, name, email, person, message, phone) VALUES ('$map','$contact_desc','$name','$email','$person','$message','$phone')"; 
                            $result =mysqli_query($conn, $query);
                            if($result){
                                echo " <span style='color:green' class='bg-success text-white px-5'>data is  submitted</span>";
                                // header('Refresh: 0.34; url=manage-skills.php');
                                ?>
                                <meta http-equiv="refresh" content=" 0 ; url =contact.php" />
            <?php
                            }
                            else {
                                echo " <span style='color:red'>data is not submitted</span>";
                            }
                        }
                        else{
                            echo "<span style='color:warning' class='bg-danger text-white px-5'>All Fields are required</span>";
                        }

                      }
                      ?>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                                <label for="exampleInputText1" class="form-label">Name
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="" name="name">
                                            
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                                <label for="exampleInputText1" class="form-label">Email
                                                </label>
                                                <input type="email" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="" name="email">
                                            
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                                <label for="exampleInputText1" class="form-label">Subject
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="" name="subject">
                                          
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                                <label for="exampleInputText1" class="form-label">Phone
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="" name="phone">
                                          
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                                <label for="exampleInputText1" class="form-label">Message
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="" name="message">
                                         
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <div class="button text-center">
                                    <button type="submit" name="submit" class="btn  btn-primary"> submit</button>
                                </div>
                            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <?php require("inc/footer.php") ?>