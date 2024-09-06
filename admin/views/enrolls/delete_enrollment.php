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
                            <p>Price: <?= $data['price'] ?></p>
                            <p>Enrollment date <?= $data['enrollment_date'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <h1>Are you sure you want to delete this enrollment?</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <div><a href="/admin/enroll" class="btn btn-default">No</a></div>
                            <form action="/admin/enroll/delete_enrollment" method="post">                               
                                    <input type="hidden"  name="id-to-delete" value="<?= $data['id']; ?>" />
                                    
                                        <button type="submit" class="btn btn-success" name="confirm-delete-enrollment">
                                            
                                                Yes
                                                
                                        </button>  
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>