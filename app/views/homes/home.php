<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="public/images/user_home/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1>Innovative Way To Learn</h1>
                </div>
                <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
                <a href="/aboutus" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Explore Top Subjects</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-1.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Web Design</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-2.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Development</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-3.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Game Design</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-4.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Apps Design</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-5.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Marketing</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-6.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Research</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-7.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">Content Writing</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/cat-8.jpg" alt="">
                    <a class="cat-overlay text-white text-decoration-none" href="">
                        <h4 class="text-white font-weight-medium">SEO</h4>
                        <span>100 Courses</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category Start -->


<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
            <h1>Our Popular Courses</h1>
        </div>


        <div class="row">
            <?php
            // Database connection


            // Query to get records with displayed attribute of 1



            // Loop through the result set and add a new div for each record

            /*while($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2" style="width: 100%;height: 100%;">
                            <img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100%" height="100%">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>'.$row['number_of_students'].' Students</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>'.$row['duration'].'</small>
                                </div>
                                <a class="h5" href="">'.$row['name'].'</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>'.$row['rating'].' <small>('.$row['number_of_comments'].')</small></h6>
                                        <h5 class="m-0">$'.$row['price'].'</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }*/

            ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
                <div class="team-img position-relative">
                    <img class="img-fluid" src="public/images/user_home/team-1.jpg" alt="">
                    <div class="team-social">
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="bg-secondary p-4">
                    <h5>Jhon Doe</h5>
                    <p class="m-0">Web Designer</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
                <div class="team-img position-relative">
                    <img class="img-fluid" src="public/images/user_home/team-2.jpg" alt="">
                    <div class="team-social">
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="bg-secondary p-4">
                    <h5>Jhon Doe</h5>
                    <p class="m-0">Web Designer</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
                <div class="team-img position-relative">
                    <img class="img-fluid" src="public/images/user_home/team-3.jpg" alt="">
                    <div class="team-social">
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="bg-secondary p-4">
                    <h5>Jhon Doe</h5>
                    <p class="m-0">Web Designer</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
                <div class="team-img position-relative">
                    <img class="img-fluid" src="public/images/user_home/team-4.jpg" alt="">
                    <div class="team-social">
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="bg-secondary p-4">
                    <h5>Jhon Doe</h5>
                    <p class="m-0">Web Designer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
            <h1>What Say Our Students</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="public/images/user_home/testimonial-1.jpg" alt="">
                        <h5 class="m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="public/images/user_home/testimonial-2.jpg" alt="">
                        <h5 class="m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="public/images/user_home/testimonial-3.jpg" alt="">
                        <h5 class="m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/blog-1.jpg" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                        <p class="text-primary m-0">Jan 01, 2050</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/blog-2.jpg" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                        <p class="text-primary m-0">Jan 01, 2050</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="public/images/user_home/blog-3.jpg" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                        <p class="text-primary m-0">Jan 01, 2050</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->






<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>