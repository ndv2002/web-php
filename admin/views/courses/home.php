<div class="card p-3">

    <div class="table-responsive">
        <h4>
            <span class="m-2 ">All courses</span>
            <a href="/admin/course/add">
                <button class="float-end btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon m-1"><i class="fa fa-plus"></i></i></span>
                    <span class="btn-inner--text">Add Course</span>
                </button>
            </a>
        </h4>

        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary  font-weight-bolder opacity-7 ps-2">#</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Name</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Subject</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Date</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course) : ?>
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $course['id'] ?></p>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $course['name'] ?></p>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $this->getSubjectName($course['subject_id']) ?></p>
                        </td>
                        <td>
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $course['created_at'] ?></span>
                        </td>
                        <td>

                            <form class="d-inline" action="/admin/course/detail" method="post">
                                <input style="display: inline;" type="hidden" name="id" value="<?= $course['id']; ?>" />
                                <button type="submit" class="bg-white border-0" name="detail-course-btn">
                                    <i class="fa fa-info-circle text-primary"></i>
                                </button>
                            </form>
                            <form class="d-inline" action="/admin/course/delete" method="post">
                                <input style="display: inline;" type="hidden" name="id" value="<?= $course['id']; ?>" />
                                <button type="submit" class="bg-white border-0" name="delete-course-btn">
                                    <i class="fa fa-times-circle text-danger"></i>
                                </button>
                            </form>
                            <a href="/admin/course/edit?id=<?= $course['id']; ?>">
                                <!-- <input form="form1" style="display: inline;" type="hidden" name="id" value="<?= $course['id']; ?>" /> -->
                                <button class="bg-white border-0">
                                    <i class="fa fa-pen-square text-info"></i>
                                </button>
                            </a>


                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>