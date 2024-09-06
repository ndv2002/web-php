<div class="card p-3">

    <div class="table-responsive">
        <h4>
            <span class="m-2 ">All news</span>
            <a href="/admin/news/add">
                <button class="m-2 float-end  btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon m-1"><i class="fa fa-plus"></i></i></span>
                    <span class="btn-inner--text">Add News</span>
                </button>
            </a>
        </h4>

        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary  font-weight-bolder opacity-7 ps-2">#</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Title</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Publish At</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newss as $news) : ?>
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $news['id'] ?></p>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $news['title'] ?></p>
                        </td>
                        <td>
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $news['published_at'] ?></span>
                        </td>
                        <td>

                            <a href="/admin/news/detail?id=<?= $news['id'] ?>">
                                <button type="submit" class="bg-white border-0" name="detail-news-btn">
                                    <i class="fa fa-info-circle text-primary"></i>
                                </button>
                            </a>

                            <form class="d-inline" action="/admin/news/delete" method="post">
                                <input style="display: inline;" type="hidden" name="id" value="<?= $news['id']; ?>" />
                                <button type="submit" class="bg-white border-0" name="delete-btn">
                                    <i class="fa fa-times-circle text-danger"></i>
                                </button>
                            </form>
                            <a href="/admin/news/edit?id=<?= $news['id']; ?>">
                                <button class="bg-white border-0">
                                    <i class="fa fa-pen-square text-info"></i>
                                </button>
                            </a>


                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>