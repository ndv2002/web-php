<?php
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$last = end($parts);
$last = explode('?', $last);
$last = $last[0];

include_once(USER_PATH . 'views/layouts/inc/header.php');
?>


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li> <?=$last ?></li>
            </ol>


            <section class="content inner-page pt-4">
                <?= @$content ?>
            </section>


        </div>
    </section><!-- End Breadcrumbs -->



<?php
include_once(USER_PATH . 'views/layouts/inc/footer.php');
?>