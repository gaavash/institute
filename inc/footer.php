 <!-- ======= Footer ======= -->
 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolios.php">Portfolios</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="team.php">Our Staffs</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
                    <?php
					$query9 ="SELECT * FROM services";
					$result9 =mysqli_query($conn, $query9);
					while($data9=mysqli_fetch_array($result9)){
					?>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $data9['title'] ?>:</span><?php echo $data9['opening_time'] ?></a></li>
                  <?php } ?>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <?php
            $query10 ="SELECT * FROM contactinfos";
            $result10 =mysqli_query($conn, $query10);
            $data10= $result10->fetch_assoc(); 
            ?>
        <p>
        <?php echo $data10['location']; ?><br><br>
          <strong>Phone:</strong><?php echo $data10['phone']; ?><br>
          <strong>Email:</strong><?php echo $data10['email']; ?><br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
                <?php
				$query11 ="SELECT * FROM footers";
				$result11 =mysqli_query($conn, $query11);
				$data11= $result11->fetch_assoc(); 
				?><hr>
        <h3>About</h3>
        <p><?php echo $data11['desc']; ?></p>
        <div class="social-links mt-3">
          <a href="<?php echo $data11['twitter']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?php echo $data11['facebook']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?php echo $data11['instagram']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
                <?php
				$query12 ="SELECT * FROM homes";
				$result12 =mysqli_query($conn, $query12);
				$data12= $result12->fetch_assoc(); 
				?><hr>
    &copy; Copyright <strong><span><?php echo $data12['title']; ?></span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>