<div class="card p-3">
    <form method="post" enctype="multipart/form-data">
        <h4>Edit Course</h4>
        <div class="form-group">
            <label for="name" class="form-control-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo $course['name'] ?>">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <select name="subject" class="form-control" id="subject" disabled>
                <option><?= $this->getSubjectName($course['subject_id'])  ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="duration" class="form-control-label">Duration</label>
            <input class="form-control" type="number" value="<?php echo $course['duration'] ?>" name="duration" id="duration">
        </div>
        <div class="form-group">
            <label for="price" class="form-control-label">Price</label>
            <input class="form-control" name="price" value="<?php echo $course['price'] ?>" type="number" id="price">
        </div>
        <div class="form-group">
            <label for="image" class="form-control-label">Image</label>
            <input name="image" class="form-control" type="file" id="image">
            <label for="">Current Image</label>
            <input type="hidden" name="old_image" value="<?php echo $course['image'] ?>">
            <img class="mt-2" height="50px" src="/public/uploads/<?php echo $course['image'] ?>" alt="">
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"><?php echo $course['description'] ?></textarea>
        </div>
        <div class="form-group float-end">
            <button name="save-button" class="btn btn-primary" type="submit">Save</button>
            <a href="/admin/course"><button type="button" class="btn btn-secondary">Cancel</button></a>
        </div>


    </form>
</div>