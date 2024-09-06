<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?= $user['avatar']; ?>" alt="image">
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
                </div>
            </div>
            <div class="position-absolute  end-5"><a href="/admin/user" class="btn btn-primary">Go back</a></div>
        </div>
    </div>
</div>