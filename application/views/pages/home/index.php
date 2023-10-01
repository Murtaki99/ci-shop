<main role="main" class="container">
    <div class="jumbotron mt-5">
        <h1>Online Shop : CodeIgniter</h1>
        <!-- <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll,
                it will remain fixed to the top of your browser’s viewport.</p> -->
        <!-- <a class="btn btn-lg btn-primary" href="/docs/4.3/components/navbar/" role="button">View navbar docs
                &raquo;</a> -->
    </div>
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <!-- Left -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            Category: <strong>All Categories</strong>
                            <span class="float-right">
                                List Price: <a href="#" class="badge badge-primary">Cheapest</a> | <a href="#" class="badge badge-primary">Expensive</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="http://placehold.co/100x70" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Name Product</h5>
                            <p class="card-text"><strong>Rp.100.000,00</strong></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Doloribus, facilis.</p>
                            <a href="#" class="badge badge-primary"><i class="fas fa-tags"> Category</i></a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="number" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">+ <i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="http://placehold.co/100x70" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Name Product</h5>
                            <p class="card-text"><strong>Rp.100.000,00</strong></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Doloribus, facilis.</p>
                            <a href="#" class="badge badge-primary"><i class="fas fa-tags"> Category</i></a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="number" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">+ <i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Right -->
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Search
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Categories
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">All Categories</li>
                            <li class="list-group-item">All Categories</li>
                            <li class="list-group-item">All Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>