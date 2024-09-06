<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3>Subject: <?= $subject['name'] ?></h3>
                            <p>Created at: <?= $subject['created_at'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute  end-5">
                <div class="row">
                    <div class="col">
                        <form action="/admin/subject/delete" method="post" role="form">
                            <input type="text" name="id" hidden value="<?=$subject['id'];?>">
                            <button type="submit" class="btn btn-sm btn-info" name="deleting-btn">
                                Confirm
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <a href="/admin/subject" class="btn btn-primary">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>