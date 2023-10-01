<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card border border-success">
                <div class="card-header bg-success text-white">
                    <span>Categories</span>
                    <span class="">
                        <a href="admin-category-form.html" class="btn btn-light btn-sm text-success"><i class="fa-solid fa-tags"></i> add category</a>
                    </span>
                    <div class="float-right">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr>
                                    <td class="pt-3"><?= $row->name; ?></td>
                                    <td class="pt-3"><?= $row->slug; ?></td>
                                    <td class="pt-3">
                                        <form action="">
                                            <a href="#">
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </button>
                                            </a>
                                            <button class="btn btn-sm" type="submit" onclick="return confirm('Are you sure ?')">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div>
                        <nav aria-label="Page navigation example">
                            <?= $pagination ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>