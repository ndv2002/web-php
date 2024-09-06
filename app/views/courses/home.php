<div id="tg-wrapper" class="tg-wrapper">
	<div class="tg-innerbanner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ol class="tg-breadcrumb">
						<li><a href="javascript:void(0);">home</a></li>
						<li><a href="javascript:void(0);">courses</a></li>
						<li class="tg-active">List</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
				Inner Banner End
		*************************************-->
	<!--************************************
				Main Start
		*************************************-->
	<main id="tg-main" class="tg-main tg-haslayout">
		<div class="container">
			<div class="row">
				<div id="tg-twocolumns" class="tg-twocolumns">
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
						<div id="tg-content" class="tg-content">
							<div class="tg-resultandstyle">
								<!-- <span class="tg-searchresult">Showing <span id="page"></span> of <span id="numOfCourses"></span> results</span> -->
								<!--<ul class="tg-poststyleswitcher">
										<li><a href="coursesgrid.html"><i class="fa fa-th"></i></a></li>
										<li class="tg-active"><a href="courseslist.html"><i class="fa fa-th-list"></i></a></li>
									</ul>-->
							</div>
							<div class="tg-courses tg-list">
								<div class="row">
									<div id="course-list">
										<?php foreach ($data['courses'] as $course) : ?>
											<div class="single-course">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
													<article class="tg-themepost tg-course">
														<figure class="tg-featuredimg">
															<a href="javascript:void(0);">
																<img src="<?=PATH_URL . "uploads/". $course['image']; ?>" alt="image description">
															</a>
														</figure>
														<div class="tg-themepostcontent">
															<ul class="tg-themeposttags">
																<li><?= $course['subject_name']; ?></li>
															</ul>
															<div class="tg-themeposttitle">
																<form action="/course/detail" method="post">
																	<input type="hidden" name="id" value="<?= $course['id']; ?>" />
																	<button type="submit" name="post-course-id">
																		<h3><?= $course['name']; ?></h3>
																	</button>
																</form>
															</div>
															<div class="tg-description">
																<p><?= $course['description']; ?></p>
															</div>
															<ul class="tg-matadata">
																<!--<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-user"></i>
																	<span>1205</span>
																</a>
															</li>
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-comment-o"></i>
																	<span>1205</span>
																</a>
															</li>-->
															</ul>
															<span class="tg-pricebox"><a href="javascript:void(0);">$<?= $course['price']; ?></a></span>
														</div>
													</article>
												</div>
											</div>
										<?php endforeach; ?>
									</div>

								</div>
							</div>
							<ul class="tg-pagination">

								<li class="tg-prevpage"><a href="#" id="prev"><i class="fa fa-angle-left"></i></a></li>
								<div class="number-page" id="number-page">
							</div>
								<li class="tg-nextpage"><a href="#" id="next"><i class="fa fa-angle-right"></i></a></li>

							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
						<aside id="tg-sidebar" class="tg-sidebar">
							<div class="tg-widget tg-widgetsearchcourse">
								<div class="tg-widgettitle">
									<h3>Search Course</h3>
								</div>
								<div class="tg-widgetcontent">
									<form class="tg-formtheme tg-formsearchcourse" action="/course" method="POST">
										<fieldset>
											<div class="tg-inputwithicon">
												<i class="icon-book"></i>
												<input type="search" name="keyword" class="form-control" placeholder="Keyword">
											</div>
											<select>
															<?php foreach ($data['subjects'] as $subject) : ?>
															<option value=""><?= $subject['name'] ?></option>
															<?php endforeach; ?>
														</select>
													</span>
												</div> -->
											<button type="submit" class="tg-btn" name="search-box">search now</button>
											<a href="/course/home">View All Courses</a>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="tg-widget tg-widgetcoursecategories">
								<div class="tg-widgettitle">
									<h3>Course Categories</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<a href="/course/home">
												<span>All</span>
												<span>(<?= $data['total'] ?>)</span>
											</a>
										</li>
										<?php foreach ($data['subjects'] as $subject) : ?>
											<form action="/course/home" method="post">
												<li>
													<a href="/course/home?subject_id=<?= $subject['id'] ?>">
														<span><?= $subject['name'] ?></span>
														<span>(<?= $subject['count'] ?>)</span>
													</a>

												</li>


											</form>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<!-- <div class="tg-widget tg-widgetlatestcourses">
									<div class="tg-widgettitle">
										<h3>Latest Courses</h3>
									</div>
									<div class="tg-widgetcontent">
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="public/images/user_courses/home/img-01.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">International Conference on Material Science 2017</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="public/images/user_courses/home/img-02.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">Biggest Reality Virtual University Convocatio Biggest Reality Virtual University</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="public/images/user_courses/home/img-03.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">Launching Best Concept Motorbike for Abnormal Best Concept Motorbike</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
									</div>
								</div> -->
							<!-- <div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Admission Form 2017</h3>
										<div class="tg-description">
											<p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
										</div>
										<a class="tg-btn tg-btnicon" href="javascript:void(0);">
											<i class="fa fa-file-pdf-o"></i>
											<span>Download PDF</span>
										</a>
									</div>
								</div> -->
						</aside>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!--************************************
				Main End
		*************************************-->
	<!--************************************
				Footer Start
		*************************************-->

	<!--************************************
				Footer End
		*************************************-->
</div>
<!--************************************
			Wrapper End
	*************************************-->