<div class="card card-frame">
    <div class="card-body d-flex gap-5 ">

        <div class="">
            <img style="width: 500px;" src="/public/uploads/<?php echo $course['image'] ?>" alt="">

        </div>


        <div class="w-100">
            <label for="name" class="form-control-label">Course Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo $course['name'] ?>" disabled>
            <label for="id" class="form-control-label">Course ID</label>
            <input class="form-control" type="text" name="id" id="id" value="<?php echo $course['id'] ?>" disabled>

            <label for="subject">Subject</label>
            <input value="<?php echo $course['subject_id'] ?>" class="form-control id=" subject" name="subject" type="text" disabled>


            <label for="duration" class="form-control-label">Duration</label>
            <input class="form-control" type="number" name="duration" id="duration" value="<?php echo $course['duration'] ?>" disabled>


            <label for="price" class="form-control-label">Price</label>
            <input class="form-control" name="price" type="number" id="price" value="<?php echo $course['price'] ?>" disabled>


            <!-- <label for="image" class="form-control-label">Image</label>
        <input name="image" class="form-control" type="text" id="image" value="<?php echo $course['image'] ?>" disabled> -->


            <label for="description" class="form-control-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" disabled><?php echo $course['description'] ?></textarea>

            <label for="date" class="form-control-label">Created Date</label>
            <input name="created_at" class="form-control" type="text" id="date" value="<?php echo $course['created_at'] ?>" disabled>
            <div class="form-group float-end mt-2">
                <a href="/admin/course"><button type="button" class="btn btn-primary">Go Back</button></a>
            </div>
        </div>
    </div>
</div>