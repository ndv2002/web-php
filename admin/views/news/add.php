<div class="card p-3">
    <h4>
        <span class="m-2 ">Add news</span>
    </h4>
    <form method="post" enctype="multipart/form-data" >
        <!-- title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <!-- content -->
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <!-- image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" name="news_img" id="news_img">
        </div>
        <!-- published_at -->
        <div class="mb-3">
            <label for="published_at" class="form-label">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at" placeholder="Published At">
        </div>

        <button type="submit" class="btn btn-primary" name="add-news-btn">Submit</button>
    </form>
</div>