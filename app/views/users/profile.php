<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?= BASE_PATH . 'public/uploads/avt/' . $user['avatar']; ?>" alt="image" style= "max-width:380px; max-height:350px;">
                        </div>
                        <div class="col-8">
                            <h3>Full name: <?= $user['first_name'] . ' ' . $user['last_name'] ?></h3>
                            <p>Username: <?= $user['username'] ?></p>
                            <p>Email: <?= $user['email'] ?></p>
                            <p>Gender: <?= $user['gender'] ?></p>
                            <p>Age: <?= $user['age'] ?></p>
                            <p>Phone: <?= $user['phone'] ?></p>
                            <p>Address: <?= $user['address'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <form action="/user/update" method="post">
                                <button type="submit" class="btn btn-sm btn-primary" name="update-user-btn">
                                    Update
                                </button>
                            </form>
                        </div>
                        <div class="col-2">
                            <form action="/user/pw" method="post">
                                <button type="submit" class="btn btn-sm btn-secondary" name="pw-user-btn">
                                    Change password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>