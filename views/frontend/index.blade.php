<!doctype html>

<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php include './includes/styles.blade.php'; ?>
        <?php include './includes/scripts.blade.php'; ?>

    </head>

    <body>

        <?php include './partials/navbar.blade.php'; ?>

        <div class="container">
            <!-- @include('partials.session') -->
            <div class="site-section">
                <div class="container">
                    <div class="row mb-4">
                        <div class="" data-aos="fade">
                            <h2 class="font-weight-bold text-black">Latest Posts</h2>
                        </div>
                    </div>
                    <div class="row card-row" id="post_data">
                        <?php include './partials/card_post.blade.php'; ?>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class="btn font-weight-bold" type="button" id="load_more_button">View More</button>
                </div>
            </div>

            <div class="row" data-aos="fade">
                <div class="col-md-12" id="feature-data">
                    <h2 class="mr-3 text-black" >Featured Posts</h2>
                    <?php include './partials/featured_post.blade.php' ?>
                </div>

            </div>

            <div class="row" data-aos="fade">
                <div class="col-md-12" id="post-data">
                    <h2 class="mt-5 text-black" id="post_data">Recent Posts</h2>
                    <?php include './partials/recent_post.blade.php' ?>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="mt-5" data-aos="fade">
                    <button class="btn font-weight-bold" type="button" id="load-recent-post">View More</button>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="categories-footer">
                <div class="container">
                <div class="row justify-content-center">
                    
                    <!-- {{-- a bunch of categories and subcategories --}} -->
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="text-uppercase">
                            <a href=""><h5>Marketplace</h5></a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link active" href="">bikes motorbikes</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">instruments</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">free stuff</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 4</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcsdfat 5</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">sdfhjh sjgf</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">dsjhg jsdhgf</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">dkjh jk 8</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">dvkj kjh k 9</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">kjh kuya 10</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">lwjak fdjh 12</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">lxslfi fg 13</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="text-uppercase">
                            <a href=""><h5>Services</h5></a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link active" href="">Services 1</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Services 2</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Services 3</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Services 4</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Services 5</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Services 6</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="text-uppercase">
                            <a href=""><h5>Housing</h5></a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 1</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 2</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 3</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 4</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 5</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 6</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="text-uppercase">
                            <a href=""><h5>Community</h5></a>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 1</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 2</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 3</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 4</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 5</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 6</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 7</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 8</a></li>
                            <li class="nav-item"><a class="nav-link active" href="">Subcat 9</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-3 col-lg-2">
                            <div class="text-uppercase">
                                <a href=""><h5>Jobs</h5></a>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 1</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 2</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 3</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 4</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 5</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 6</a></li>
                                <li class="nav-item"><a class="nav-link active" href="">Subcat 7</a></li>
                            </ul>
                        </div>

                </div>
                </div>
            </div>
        </div>


        <?php include './partials/footer.blade.php'; ?>



    </body>

</html>



    