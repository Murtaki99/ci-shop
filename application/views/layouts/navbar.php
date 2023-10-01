<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">CI Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-1">
                        <a href="admin-category.html" class="dropdown-item">Category</a>
                        <a href="admin-product.html" class="dropdown-item">Products</a>
                        <a href="admin-order.html" class="dropdown-item">Orders</a>
                        <a href="admin-user.html" class="dropdown-item">Users</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="cart.html" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Cart</a>
                </li>
                <?php if (!$this->session->userdata('is_login')) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('/login'); ?>" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('/register'); ?>" class="nav-link">Sign Up</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-2">
                            <a href="admin-categoty.html" class="dropdown-item">Profile</a>
                            <a href="admin-order.html" class="dropdown-item">Orders</a>
                            <hr>
                            <a href="<?= base_url('/logout'); ?>" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            <!-- <form class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
        </div>
    </div>
</nav>