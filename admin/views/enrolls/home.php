<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All orders</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" summary="All users table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Username
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Course
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['orders'] as $order) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= PATH_URL ?>/admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $order['username']; ?></h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <?= $order['email']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p><?= $order['course_name']; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">                                           
                                            <div class="row">
                                                <!-- reject -->
                                                <!-- reject -->
                                                <div class="col">
                                                    <form action="/admin/enroll/reject" method="post">
                                                        <input type="hidden" name="id" value="<?= $order['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-danger" name="reject-order">
                                                            Reject
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- approve -->
                                                <div class="col">
                                                    <form action="/admin/enroll/approve" method="post">
                                                        <input type="hidden" name="id" value="<?= $order['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-success" name="approve-order">
                                                            Approve
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- detail -->
                                                <div class="col">
                                                    <form action="/admin/enroll/detail" method="post">
                                                        <input type="hidden" name="id" value="<?= $order['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-primary" name="detail-order">
                                                            Detail
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All enrollments</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" summary="All users table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Username
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Course
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Enrollment Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['enrollments'] as $enrollment) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= PATH_URL ?>/admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $enrollment['username']; ?></h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <?= $enrollment['email']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p><?= $enrollment['course_name']; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p><?= $enrollment['enrollment_date']; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">                                           
                                            <div class="row">
                                                <div class="col">
                                                    <form action="/admin/enroll/delete_enrollment" method="post">
                                                        <input type="hidden" name="id" value="<?= $enrollment['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete-enrollment">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                    <form action="/admin/enroll/detail_enrollment" method="post">
                                                        <input type="hidden" name="id" value="<?= $enrollment['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-primary" name="detail-enrollment">
                                                            Detail
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>