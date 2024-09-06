<div class="container pt-20">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register</h1>
            </div>
            <!-- wrong email or password -->
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <div class="form">
                <form action="/authorize/register" method="post">
                    <!-- name -->
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="User name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm password" required>
                    </div>
                    <!-- confirm our policy -->
                    <div class="form-group mt-3">
                        <p class="">
                        <input type="checkbox" class="form-check-input" name="confirmPolicy" id="confirmPolicy" required>
                            I agree to the
                            <a href="#">policy</a>.
                        </p>
                    </div>
                    <!-- Sign up -->
                    <button type="submit" name="register-btn"class="btn btn-primary btn-block">
                        Sign Up
                    </button>
                    <p class="mt-3">Already a member?
                        <a href="/authorize/login">Sign In</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>