<div class="card card-frame">
    <div class="card-body d-flex gap-5 ">
        <div class="">
            <img style="width: 500px;" src="<?= (PATH_URL . 'uploads/' . $news['image']) ?>" alt="Image">
        </div>


        <div class="w-100">
            <h3 class="text-primary"><?php echo $news['title'] ?></h3>
            <p class="text-secondary"><?php echo $news['content'] ?></p>
            <p class="text-secondary"><?php echo $news['published_at'] ?></p>
        </div>
    </div>
</div>