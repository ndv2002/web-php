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
                    <h4>Edit profile</h4>
                    <form enctype="multipart/form-data" method="POST" action="/user/update">
                        <div class="form-group">
                            <!-- current avatar -->
                            <img src="<?= BASE_PATH . 'public/uploads/avt/' . $user['avatar'] ?>" alt="image" style="max-width:380px; max-height:350px;"> <br>
                            <input type="hidden" name="old_img" value="<?= $user['avatar'] ?>">
                            <!-- new avatar -->
                            <label for="avt_img" class="form-control-label"> Avatar</label>
                            <input class="form-control" type="file" name="avt_img" id="avt_img">
                        </div>
                        <div class="form-group">
                            <label for="f_name" class="form-control-label">First name</label>
                            <input class="form-control" type="text" name="f_name" id="f_name" value="<?php echo $user['first_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="l_name" class="form-control-label">Last name</label>
                            <input class="form-control" type="text" name="l_name" id="l_name" value="<?php echo $user['last_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-control-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" value="<?php echo $user['username'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email" value="<?php echo $user['email'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-control-label">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                                <?php if ($user['gender'] == "male") { ?>
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                <?php } else if ($user['gender'] == "female") { ?>
                                    <option value="male">Male</option>
                                    <option value="female" selected>Female</option>
                                    <option value="other">Other</option>
                                <?php } else if ($user['gender'] == "other") { ?>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other" selected>Other</option>
                                <?php } else { ?>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $user['phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input class="form-control" type="text" name="address" id="adress" value="<?php echo $user['address'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="age" class="form-control-label">Age</label>
                            <input class="form-control" type="number" name="age" id="age" value="<?php echo $user['age'] ?>">
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