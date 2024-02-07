<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">

<section class="vendor-banner-image">
    <img src="https://dummyimage.com/1300x500/000/fff" class="about-banner-image">
</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting">Vendor Listing</a></li>
        <li class="breadcrumb-item active" aria-current="page">Catering</li>
    </ol>
</nav>
<section class="category-slider">
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body category-card-1">
                                <div class="category-img-box img-1">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Venues.png">  -->
                                </div>
                                <div class="category-box-content">
                                    <h2 id="category-box-caption-1">Venues</h2>
                                    <span>
                                        <h6 id="category-box-sub-caption-1"> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-2">
                                <div class="category-img-box img-2">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Bridal_Wear.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Bridal Wear</h2>
                                    <span>
                                        <h6>490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-3">
                                <div class="category-img-box img-3">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Groom_Wear.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Groom Wear</h2>
                                    <span>
                                        <h6> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-4">
                                <div class="category-img-box img-4">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Photographers.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Photographers</h2>
                                    <span>
                                        <h6> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-5">
                                <div class="category-img-box img-5">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Make_Up_Artists.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Make Up Artists</h2>
                                    <span>
                                        <h6> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-6">
                                <div class="category-img-box img-6">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Mehendi_Artists.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Mehendi Artists</h2>
                                    <span>
                                        <h6> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <a href="<?php echo base_url() ?>Vendor/Bridal_Jewellery">
                                <div class="card card-body category-card-7">
                                    <div class="category-img-box img-7">
                                        <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Bridal_Jewellery.png"> -->
                                    </div>
                                    <div class="category-box-content">
                                        <h2>Bridal Jewellery</h2>
                                        <span>
                                            <h6>490+</h6>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-8">
                                <div class="category-img-box img-8">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Decoration.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Decoration</h2>
                                    <span>
                                        <h6> 490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-9">
                                <div class="category-img-box img-9">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Gifts-Invitations.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Gifts & Invitations</h2>
                                    <span>
                                        <h6>490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-10">
                                <div class="category-img-box img-10">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Catering.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Catering</h2>
                                    <span>
                                        <h6>490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-11">
                                <div class="category-img-box img-11">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Wedding_Entertainment.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Wedding Entertainment</h2>
                                    <span>
                                        <h6>490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body category-card-12">
                                <div class="category-img-box img-12">
                                    <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Others.png"> -->
                                </div>
                                <div class="category-box-content">
                                    <h2>Others</h2>
                                    <span>
                                        <h6>490+</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bridal Jewellery -->
<section class="vendor-catalogue-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="vendor-catalogue-heading">
                    <h2>Top Catering (2):</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="vendor-catalogue-sub-heading">
                    <h6>To improve these suggestions - Fill Requirements for Catering
                    </h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 vendor-col">
                <span class="vendor-tag"><i class="fas fa-heart"></i> Most Popular</span>
                <a href="<?php echo base_url() ?>vendor/blessings_by_trupti">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="<?php echo  base_url() ?>assets/front/image/vendor/GirishColdDrink.jpeg" class="img-fluid" />
                            <a href="<?php echo base_url() ?>vendor/blessings_by_trupti">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6>Catering
                            </h6>
                            <h5 class="card-title font-weight-bold"><a>Girish Cold Drink and Caterers</a></h5>
                            <hr class="my-4" />
                            <p class="mb-2"> <i class="fas fa-star text-warning fa-xs"> </i>0
                            </p>
                            <p class="card-text">
                                <b>0</b> Reviews
                            </p>
                            <p class="lead"><strong><i class="fas fa-location"></i>  Navrangpura, Ahmedabad
                                </strong></p>
                            <a href="<?php echo base_url() ?>vendor/blessings_by_trupti" class="white-text d-flex justify-content-end view-vendor-detail">
                                <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> </span> View
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 vendor-col">
                <span class="vendor-tag"><i class="fas fa-heart"></i> Most Popular</span>
                <a href="<?php echo base_url() ?>vendor/blessings_by_trupti">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="<?php echo  base_url() ?>assets/front/image/vendor/saiagarwalcaterers.jpeg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6>Catering
                            </h6>
                            <h5 class="card-title font-weight-bold"><a>Sai Agarwal Caterers</a></h5>
                            <hr class="my-4" />
                            <p class="mb-2"> <i class="fas fa-star text-warning fa-xs"> </i>4.4
                            </p>
                            <p class="card-text">
                                <b>6</b> Reviews
                            </p>
                            <p class="lead"><strong><i class="fas fa-location"></i>Surya Nagar,  Ghaziabad
                                </strong></p>
                            <a href="#!" class="white-text d-flex justify-content-end view-vendor-detail">
                                <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>