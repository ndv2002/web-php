<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php echo $_SESSION['error'];
                            unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post">
                        <h4>Change password</h4>
                        <div class="form-group">
                            <label for="password" class="form-control-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-control-label">Confirm password</label>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm password" required>
                        </div>
                        <div class="form-group float-end mt-5">
                            <button name="save-button" class="btn btn-primary" type="submit">Save</button>
                            <a href="/user/profile"><button type="button" class="btn btn-secondary">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>