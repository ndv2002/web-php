<!-- ======= About Section ======= -->
<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= PATH_URL . "uploads/". $new['image'] ?>" alt="image"  style="width:100%"/>
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                    <h2><?= $new['title'] ?></h2>
                    <h3><?= $new['published_at'] ?></h3>
                    <p><?= $new['content'] ?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->