<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="col-2">
                        <form action="/admin/subject/add" method="post">
                            <button type="submit" class="btn btn-sm btn-info" name="add-subject-btn">
                                Add
                            </button>
                        </form>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" summary="All subjects table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Subject
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subjects as $subject) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $subject['name']; ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="row">
                                                <div class="col-2">
                                                    <form action="/admin/subject/detail" method="post">
                                                        <input type="hidden" name="id" value="<?= $subject['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-primary" name="detail-subject-btn">
                                                            Detail
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-2">
                                                    <form action="/admin/subject/delete" method="post">
                                                        <input type="hidden" name="id" value="<?= $subject['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-danger" name="delete-subject-btn">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-2">
                                                    <form action="/admin/subject/edit" method="post">
                                                        <input type="hidden" name="id" value="<?= $subject['id']; ?>" />
                                                        <button type="submit" class="btn btn-sm btn-secondary" name="edit-subject-btn">
                                                            Edit
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
