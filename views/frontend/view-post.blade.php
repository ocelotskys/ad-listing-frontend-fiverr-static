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

        
        <div class="main-section site-section bg-light">
            <div class="container">

                <h2 class="mb-4">iPad Pro 256GB Unlocked Grey mint condition - $450</h2>
                <small>Available to Public</small>
                <a href="#" id="favorite" data-postid="123">
                    <i class="icon-heart-empty"></i>
                </a>
                <p>Likes: 27</p>
                <p>Replies: 8</p>

                <div class="row">
                    <div class="slider">
                        <input type="radio" name="slide" id="image0" checked/>
                        <label for="image0">
                            <img src="https://via.placeholder.com/150?text=SampleImage0"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage0"/>

                        <input type="radio" name="slide" id="image1"/>
                        <label for="image1">
                            <img src="https://via.placeholder.com/150?text=SampleImage1"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage1"/>

                        <input type="radio" name="slide" id="image2"/>
                        <label for="image2">
                            <img src="https://via.placeholder.com/150?text=SampleImage2"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage2"/>

                        <input type="radio" name="slide" id="image3"/>
                        <label for="image3">
                            <img src="https://via.placeholder.com/150?text=SampleImage3"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage3"/>

                        <input type="radio" name="slide" id="image4"/>
                        <label for="image4">
                            <img src="https://via.placeholder.com/150?text=SampleImage4"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage4"/>

                        <input type="radio" name="slide" id="image5"/>
                        <label for="image5">
                            <img src="https://via.placeholder.com/150?text=SampleImage5"/>
                        </label>
                        <img src="https://via.placeholder.com/500?text=SampleImage5"/>
                    </div>
                </div>

                <h5 class="mt-5" data-aos="fade">Ullamco reprehenderit reprehenderit nisi esse fugiat sit officia aute do voluptate. Culpa commodo pariatur eu exercitation et dolor. Laborum occaecat officia deserunt non Lorem magna elit quis voluptate nulla deserunt ad velit occaecat. Laboris adipisicing est esse eu consectetur incididunt laboris adipisicing.</h5>


                    <div class="mt-5 bg-light">
                        <div class="container">
                            
                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-5">
                                    <form action="" method="" class="p-5 bg-white" data-aos="fade">
                                        <!-- @csrf -->
                                        
                                        <div class="row form-group mb-5">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Message<span class="text-danger">*</span> </label>
                                                    <div class="col-md-10">
                                                        <textarea type="text" name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
                                                        <!-- @if($errors->has('message'))
                                                            <div class="invalid-feedback">
                                                                {{$errors->first('message')}}
                                                            </div>
                                                        @endif -->
                                                        <small class="text-muted">Your email will be shared with creator of this post, but will not be shared publically</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-btn float-right">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>        


        <?php include './partials/footer.blade.php'; ?>

    </body>

</html>



