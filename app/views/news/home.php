<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <?php
            // Path: app\views\news\home.php
            foreach ($news as $new) :
            ?>
                <!-- all news card -->
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= PATH_URL . "uploads/" .  $new['image'] ?>" alt="news">
                        <a class="blog-overlay text-decoration-none" href="/news/detail?id=<?= $new['id'] ?>">
                            <h5 class="mb-3"><?= $new['title'] ?></h5>
                            <p class="text-primary m-0"><?= $new['published_at'] ?></p>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>