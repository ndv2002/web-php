<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <?php echo $_SESSION['error'];
                                    unset($_SESSION['error']); ?>
                                </div>
                            <?php endif; ?>
                            <form action="/admin/subject/add" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="name" minlength= "1" maxlength="100" required>
                                </div>
                                <div class="text mt-2">
                                    <button type="submit" class="btn btn-sm btn-info" name="adding-btn">
                                        Add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute  end-5">
                <a href="/admin/subject" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </div>
</div>