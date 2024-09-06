<div class="container pt-20">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login</h1>
            </div>
            <!-- wrong email or password -->
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <!-- success message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?php echo $_SESSION['success'];
                    unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
            <div class="form">
                <form action="/authorize/login" method="post">
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                    </div>
                    <!-- Login button -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>
                    <!-- Sign up -->
                    <button type="submit" name="login-btn"class="btn btn-primary btn-block mt-3">
                        Sign In
                    </button>
                    <p class="mt-3">Not a member?
                        <a href="/authorize/register">Sign Up</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>