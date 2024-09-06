<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 position-relative">
            <div class="card card-frame">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="" alt="image">
                        </div>
                        <div class="col-8">
                            <p>Username: <?= $data['username'] ?></p>
                            <p>Email: <?= $data['email'] ?></p>
                            <p>Course: <?= $data['course_name'] ?></p>
                            <p>Subject: <?= $data['subject_name'] ?></p>
                            <p>Order date: <?= $data['order_date'] ?></p>
                            <p>Status: <?= $data['status'] ?></p>
                            <p>Price: <?= $data['price'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute  end-5"><a href="/admin/enroll" class="btn btn-primary">Go back</a></div>
        </div>
    </div>
</div>