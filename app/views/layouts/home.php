<?php
include_once(USER_PATH . 'views/layouts/inc/header.php');
include_once(USER_PATH . 'views/layouts/inc/hero.php');

?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="public/css/user_home/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="public/css/user_home/user_home.css" rel="stylesheet">
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            


            <section class="content inner-page pt-4">
                <?= @$content ?>
            </section>


        </div>
    </section><!-- End Breadcrumbs -->



<?php
include_once(USER_PATH . 'views/layouts/inc/footer.php');
?>