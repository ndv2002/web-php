<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All users</h6>
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
                                        Total purchased
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= PATH_URL ?>/admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $user['username']; ?></h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <?= $user['email']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">100 $$$</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <!-- block button -->
                                            <div class="row">
                                                <div class="col">
                                                    <form action="/admin/user/block" method="post">
                                                        <input type="hidden" name="id" value="<?= $user['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-danger" name="btn-blockUser">
                                                            Block
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- view detail -->
                                                <div class="col">
                                                    <form action="/admin/user/detail" method="post">
                                                        <input type="hidden" name="id" value="<?= $user['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-primary" name="detail-user-btn">
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

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Blocked Users</h6>
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
                                        Total purchased
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($blockedUser as $user) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= PATH_URL ?>/admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $user['username']; ?></h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <?= $user['email']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">100 $$$</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <!-- block button -->
                                            <div class="row">
                                                <div class="col">
                                                    <form action="/admin/user/unblock" method="post">
                                                        <input type="hidden" name="id" value="<?= $user['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-danger" name="btn-unblockUser">
                                                            Unblock
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- view detail -->
                                                <div class="col">
                                                    <form action="/admin/user/detail" method="post">
                                                        <input type="hidden" name="id" value="<?= $user['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-primary" name="detail-user-btn">
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