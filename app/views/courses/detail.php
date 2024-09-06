    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3><?= $data['others']['name'] ?></h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6><?= $data['others']['subject_name'] ?> </h6>
                                    </div>
                                </li>
                        </div> <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="<?= PATH_URL . "uploads/" .  $data['others']['image'] ?>" alt="Courses">
                        </div> <!-- corses singel image -->

                        <div class="corses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false">Syllabus</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Comments</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="singel-description pt-40">
                                            <h6>Course Description</h6>
                                            <p><?= $data['others']['description'] ?></p>
                                        </div>

                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6><?= $data['others']['name'] ?> Lecture </h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <?php foreach ($data['others']['sylla'] as $index => $section) : ?>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Week <?= $index + 1 ?></span></li>
                                                                <li><span class="head"><?= $section['name'] ?></span></li>
                                                                <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span><?= $section['time'] ?> hours</span></span></li>
                                                            </ul>
                                                        </a>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p><?= $section['description'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div> <!-- curriculam cont -->
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                        <div class="title">
                                            <h6>Student Reviews</h6>
                                        </div>
                                        <ul>
                                            <?php foreach ($data['comments'] as $comment) : ?>
                                                <li>
                                                    <div class="singel-reviews">
                                                        <div class="reviews-author">
                                                            <div class="author-thum">
                                                                <img src="/public/admin/img/team-2.jpg" alt="Reviews" width="70" height="70">
                                                            </div>
                                                            <div class="author-name">
                                                                <h6><?= $comment['user_name'] ?></h6>
                                                                <span><?= $comment['comment_date'] ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-description pt-20">
                                                            <p><?= $comment['comment'] ?></p>
                                                            <!-- <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div> -->
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- corses singel left -->

                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                                <h4>Course Features </h4>
                                <ul>
                                    <li>Duration : <span><?= $data['others']['duration'] ?> Hours</span></li>
                                    <li>Lectures : <span><?= count($data['others']['sylla']) ?></span></li>

                                </ul>
                                <?php if (isset($_SESSION['auth'])) : ?>
                                    <?php if ($data['isOrdered'] == true) : ?>
                                        <div class="price-button pt-10">
                                            <span>Price : <b>$<?= $data['others']['price'] ?></b></span>
                                            <span>Your order is waiting to be approved</span>
                                        </div>
                                    <?php elseif ($data['isEnrolled'] == true) : ?>
                                        <div class="price-button pt-10">
                                
                                        <span>You can learn now</span>
                                        </div>
                                        <?php else : ?>
                                        <form action="/course/detail" method="post">
                                            <div class="price-button pt-10">
                                                <span>Price : <b>$<?= $data['others']['price'] ?></b></span>
                                                <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id']; ?>" />
                                                <input type="hidden" name="course_id" value="<?= $data['others']['id']; ?>" />
                                                <button type="submit" class="main-btn" name="enroll">Enroll Now</button>
                                            </div>

                                        </form>
                                    <?php endif; ?>





                                <?php else : ?>
                                    <div class="price-button pt-10">
                                        <span>Price : <b>$<?= $data['others']['price'] ?></b></span>
                                        <button class="main-btn" onclick="alert('You have to sign in first!')">Enroll now</button>
                                    </div>


                                <?php endif; ?>

                            </div> <!-- course features -->
                        </div>
                        <!-- <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You may like </h4> 
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="/public/images/user_courses/detail/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Introduction to machine languages</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="/public/images/user_courses/detail/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>How to build a basis game with java </h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="/public/images/user_courses/detail/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Basic accounting from primary</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div> <!-- row -->
            <!-- <div class="row">
                <div class="col-lg-8">
                    <div class="releted-courses pt-95">
                        <div class="title">
                            <h3>Releted Courses</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="/public/images/user_courses/detail/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="/public/images/user_courses/detail/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="/public/images/user_courses/detail/cu-1.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="/public/images/user_courses/detail/t-3.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="/public/images/user_courses/detail/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="/public/images/user_courses/detail/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="/public/images/user_courses/detail/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="/public/images/user_courses/detail/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                        </div> 
                    </div> 
                </div>
            </div>  -->
        </div>
    </section>

    <!--====== COURSES SINGEl PART ENDS ======-->

    <!--====== FOOTER PART START ======-->


    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->