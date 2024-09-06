<div class="card p-3">
    <h4>
        <span class="m-2 ">Edit news</span>
    </h4>
    <form method="post" enctype="multipart/form-data" >
        <!-- title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?=$news['title'];?>">
        </div>
        <!-- content -->
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">
<?= $news['content'] ?>
            </textarea>
        </div>
        <!-- image -->
        <div class="mb-3">
            <input type="hidden" name="old_image" value="<?$news['image'];?>">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" name="news_img" id="news_img">
        </div>
        <!-- published_at -->
        <div class="mb-3">
            <label for="published_at" class="form-label">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at" placeholder="Published At" value="<?=$news['published_at'];?>">
        </div>

        <button type="submit" class="btn btn-primary" name="edit-new-btn">Submit</button>
    </form>
</div>