    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Learnhub</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>
                <div class="col-sm-4">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="course">Courses</a></li>
                        <li><a href="aboutus">About us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Contact us</h4>
                    <ul class="social-icons">
                        <!-- phone -->
                        <li><a href="#"><i class="fas fa-phone"></i> <?= $setting['contact_phone'] ?></a></li>
                        <!-- email -->
                        <li><a href="#"><i class="fas fa-envelope"></i> <?= $setting['contact_email'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; 2023 Learnhub. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#header" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= PATH_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= PATH_URL ?>plugins/aos/aos.js"></script>
    <script src="<?= PATH_URL ?>plugins/glightbox/js/glightbox.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/swiper/swiper-bundle.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= PATH_URL ?>js/main.js"></script>

    </body>

    </html>