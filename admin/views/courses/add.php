<div class="card p-3">
    <form action="/admin/course/add" method="post" enctype="multipart/form-data">
        <h4>New course</h4>
        <div class="form-group">
            <label for="name" class="form-control-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Course name...">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <select name="subject" class="form-control" id="subject">
                <option>Choose Subject...</option>
                <?php foreach ($subjects as $subject) : ?>
                    <option value="<?php echo $subject['id'] ?>"><?= $subject['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="duration" class="form-control-label">Duration</label>
            <input class="form-control" type="number" value="" name="duration" id="duration" placeholder="Duration...">
        </div>
        <div class="form-group">
            <label for="price" class="form-control-label">Price</label>
            <input class="form-control" name="price" type="number" value="" id="price" placeholder="Price...">
        </div>
        <div class="form-group">
            <label for="image" class="form-control-label">Image</label>
            <input name="image" class="form-control" type="file" value="" id="image" placeholder="Image...">
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description..."></textarea>
        </div>
        <div class="form-group float-end">
            <button name="addCourseButton" class="btn btn-primary" type="submit">Submit</button>
            <a href="/admin/course"><button type="button" class="btn btn-secondary">Cancel</button></a>
        </div>


    </form>
</div>