@extends('layouts.default')

@section('title')
    Food Market
@endsection

@section('content')
    <!-- Header -->
    <section class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-6">
                    <h1 class="mb-2"><span>Find Food</span> According <br> to Your Taste</h1>
                    <p>Enjoy our restaurant food with <br> your beloved family, with a special menu.</p>
                    <a href="#" class="btn btn-get-now mt-4">Get Now</a>
                </div>
                <div class="col-5 offset-1 d-none d-md-block">
                    <img src="frontend/images/hero/hero_img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Statistik -->
    <section class="section-statistik mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-3 text-center">
                    <h5 class="fw-bold">230.000+</h5>
                    <p>Menu Foods</p>
                </div>
                <div class="col-6 col-md-3 mb-3 text-center">
                    <h5 class="fw-bold">50.000+</h5>
                    <p>Course</p>
                </div>
                <div class="col-6 col-md-3 mb-3 text-center">
                    <h5 class="fw-bold">170.000+</h5>
                    <p>Graduate</p>
                </div>
                <div class="col-6 col-md-3 mb-3 text-center">
                    <h5 class="fw-bold">280.000+</h5>
                    <p>Chef</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Statistik -->

    <!-- Seafood -->
    <section class="section-seafood">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Seafood Pizza</h1>
                    <h3 class="mt-3">$15.00
                        <a href="#">
                            <img src="frontend/images/about/btn_get.png" class="img-fluid ms-3" width="30px" alt="">
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Seafood -->

    <!-- Images -->
    <section class="section-seafood-content">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-2">
                    <div class="media">
                        <img src="frontend/images/about/disc_1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="d-none d-md-block col-md-2">
                    <div class="media">
                        <img src="frontend/images/about/disc_2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="d-none d-md-block col-md-2">
                    <div class="media">
                        <img src="frontend/images/about/disc_3.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Images -->

    <!-- About -->
    <section class="section-about-content d-flex justify-content-end">
        <div class="section-about d-none d-md-block">
            <h3 class="mt-4">About Cake</h3>
            <p>
                Pizza adalah sebuah hidangan yang gurih <br> dan nikmat berasal dari italia yang berbentuk bundar <br> dan dilumuri saus tomat dan keju. <br> <br> Pizza mengandung banyak vitamin dan juga protein <br> yang bagus untuk kesehatan tubuh,
                terutama
                <br> jika di hidangkan di saat perut sedang lapar <br>
            </p>
        </div>
    </section>
    <!-- End About -->


    <!-- Menu Special -->
    <section class="section-menu-special">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h3><span>Special</span> In Our <br> Restaurant</h3>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu1.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Pizza Hut</h4>
                        <p>Chow Marcell</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu2.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Meat Cook</h4>
                        <p>Kelvin Sanco</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu3.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Steak Potato</h4>
                        <p>Clara Devi</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu4.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Friedrice Special</h4>
                        <p>Deina</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu5.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Mead Steak</h4>
                        <p>Worf</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu6.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Salad Fresh </h4>
                        <p>Angelista</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu7.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Burger Keju</h4>
                        <p>Margaretha</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="img-special text-center">
                        <figure class="figure">
                            <a href="#">
                                <img src="frontend/images/special/menu8.jpg" class="img-figure img-fluid" alt="">
                            </a>
                        </figure>
                        <h4 class="mt-1">Soup Noodles</h4>
                        <p>Syaina</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Special -->

    <!-- Category -->
    <section class="section-category-content" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h3>Category <br> <span>Meals & Beverages</span></h3>
                </div>
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <button class="nav-link active" id="juice-tab" data-bs-toggle="tab" data-bs-target="#juice" type="button" role="tab" aria-controls="juice" aria-selected="true">Juice</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vegetable-tab" data-bs-toggle="tab" data-bs-target="#vegetable" type="button" role="tab" aria-controls="vegetable" aria-selected="false">Vegetable</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="healty-tab" data-bs-toggle="tab" data-bs-target="#healty" type="button" role="tab" aria-controls="healty" aria-selected="false">Healty Food</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seafood-tab" data-bs-toggle="tab" data-bs-target="#seafood" type="button" role="tab" aria-controls="seafood" aria-selected="false">Seafood</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category -->

    <!-- juices -->
    <section class="section-juices-category tab-content" id="myTabContent">
        <div class="container">
            <div class="row">
                <div class="tab-content text-center" id="myTabContent">
                    <div class="tab-pane fade show active" id="juice" role="tabpanel" aria-labelledby="juice-tab">
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice1.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice2.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Orange Juice</h4>
                            <p class="text-muted">IDR25000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice3.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice4.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice5.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/juice6.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <a href="#" class="btn btn-next text-center">See all</a>
                    </div>
                    <div class="tab-pane fade" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item1.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item2.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item3.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item4.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item5.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/vegetables/item6.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Strawbery Juice</h4>
                            <p class="text-muted">IDR23000</p>
                        </figure>
                        <a href="#" class="btn btn-next text-center">See all</a>
                    </div>
                    <div class="tab-pane fade" id="healty" role="tabpanel" aria-labelledby="healty-tab">
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item1.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item2.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item3.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item4.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item5.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/healty/item6.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <a href="#" class="btn btn-next text-center">See all</a>
                    </div>
                    <div class="tab-pane fade" id="seafood" role="tabpanel" aria-labelledby="seafood-tab">
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item1.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item2.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item3.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item4.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item5.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <figure class="figure col-12 col-md-5 col-lg-4 text-center px-2">
                            <div class="category-img">
                                <img src="frontend/images/category/seafood/item6.jpg" class="figure-img img-fluid w-100" alt="">
                                <a href="#" class="d-flex justify-content-center">
                                    <img src="frontend/images/category/eye.png" class="img-fluid align-self-center" alt="">
                                </a>
                            </div>
                            <h4 class="mt-3">Chocollate</h4>
                            <p class="text-muted">IDR15000</p>
                        </figure>
                        <a href="#" class="btn btn-next text-center">See all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End juices -->


    <!-- Reviews -->
    <section class="section-reviews-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center mb-5">
                    <h3>Customer <span>Reviews</span></h3>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card text-center">
                        <img src="frontend/images/reviews/avatar1.jpg" class="card-img-top img-fluid w-50 mx-auto mt-5" alt="...">
                        <div class="card-body">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <h5 class="card-text">Wiku Karno, 21</h5>
                            <p>"Masakannya Lezat, nikmat, <br> bikin nagih terus."</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card text-center">
                        <img src="frontend/images/reviews/avatar2.jpg" class="card-img-top img-fluid w-50 mx-auto mt-5" alt="...">
                        <div class="card-body">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <h5 class="card-text">Elya Fitriyani, 17</h5>
                            <p>"Masakannya Lezat, nikmat, <br> bikin nagih terus."</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card text-center">
                        <img src="frontend/images/reviews/avatar3.jpg" class="card-img-top img-fluid w-50 mx-auto mt-5" alt="...">
                        <div class="card-body">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <h5 class="card-text">Siti Sandah , 21</h5>
                            <p>"Masakannya Lezat, nikmat, <br> bikin nagih terus."</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="card text-center">
                        <img src="frontend/images/reviews/avatar4.jpg" class="card-img-top img-fluid w-50 mx-auto mt-5" alt="...">
                        <div class="card-body">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <h5 class="card-text">Yursanto, 36</h5>
                            <p>"Masakannya Lezat, nikmat, <br> bikin nagih terus."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reviews -->
@endsection