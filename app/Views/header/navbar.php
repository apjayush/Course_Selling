<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">Linux Adminstrator</a></li>
                        <li><a class="dropdown-item" href='#'>Python</a></li>
                        <li><a class="dropdown-item" href="#">Ethical Hacking</a></li>
                    </ul>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <!-- Sign In Button with Bootstrap button classes for students -->

                    <?php if (session()->has('isLoggedIn')) : ?>
                        <a href="/signout" class="btn btn-danger">Sign Out </a>
                    <?php else : ?>
                        <a href="/signin" class="btn btn-success">Sign In </a>
                    <?php endif; ?>
                    


                    <!-- Sign In Button with Bootstrap button classes for instructor -->
                    <a href="<?= base_url() ?>/instructor_login" class="btn btn-outline-primary">Teach</a>


                </li>
                <li class="nav-item">
                    <a class="nav-link cart-button" href="#">
                        <i class="fas fa-shopping-cart"></i> View Cart
                    </a>
                </li>
            </ul>


            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>

                <?php if (session()->has('user_id')) : ?>

                    <a href="<?= base_url() ?>/signout" class="btn btn-danger">Sign Out </a>
                <?php endif; ?>
            </form>

        </div>
    </div>
</nav>


<?php base_url() ?>