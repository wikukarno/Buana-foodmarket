<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('frontend/images/logo/Logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navb" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#meals">Meals</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#beverages">Beverages</a>
                    </li>
                </ul>
                <!-- mobile button -->
                <form class="form-inline d-sm-block d-md-none mt-2">
                    <div class="nav-item">
                        <a href="#" class="nav-icon"><i class="bi bi-bell-fill"></i></a>
                    </div>
                </form>
                <form class="form-inline d-sm-block d-md-none mt-2">
                    <div class="nav-item">
                        <a href="#" class="nav-icon"><i class="bi bi-cart-plus-fill"></i></a>
                    </div>
                </form>
                <form class="form-inline d-sm-block d-md-none mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="nav-item">
                        <button type="button" class="btn btn-account-mobile">My Account</button>
                    </div>
                </form>
                <!-- End Mobile -->

                <!-- Desktop -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <div class="nav-item">
                        <a href="#" class="nav-icon mx-3"><i class="bi bi-bell-fill"></i></a>
                    </div>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <div class="nav-item">
                        <a href="#" class="nav-icon mx-3"><i class="bi bi-cart-plus-fill"></i></a>
                    </div>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-none d-lg-block ml-5">
                    <div class="nav-item">
                        <img src="frontend/images/Path 9.png" alt="">
                    </div>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="nav-item">
                        <button type="button" class="btn btn-account-desktop">My Account</button>
                    </div>
                </form>
            </div>
            <!-- End Menu -->
        </div>
        </div>
    </nav>

    