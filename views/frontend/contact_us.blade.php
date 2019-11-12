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

        
        <div class="site-section bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-lg-8 mb-5">
                        <form action="" method="" class="p-5 bg-white">
                            <!-- @csrf -->
                            
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="fullname">Full Name</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="fullname" value="">
                                    <!-- @if($errors->has('fullname'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('fullname')}}
                                        </div>
                                    @endif -->
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" value="">
                                    <!-- @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif -->
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Subject</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Enter Subject" name="subject" value="">
                                    <!-- @if($errors->has('subject'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('subject')}}
                                        </div>
                                    @endif -->
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                                    <!-- @if($errors->has('message'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('message')}}
                                        </div>
                                    @endif -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send" class="btn btn-primary  py-2 px-4">
                                </div>
                            </div>
                            
                            <small>
                                This contact form is protected by Invisible reCAPTCHA. 
                                (<a href="https://www.google.com/intl/en/policies/privacy/">Privacy</a>, 
                                <a href="https://www.google.com/intl/en/policies/terms/">Terms</a>)
                            </small>

                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="p-4 mb-3 bg-white">
                            <h3 class="h5 text-black mb-3">Contact Info</h3>
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                        </div>

                        <div class="p-4 mb-3 bg-white">
                            <h3 class="h5 text-black mb-3">More Info</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                            <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        


        <?php include './partials/footer.blade.php'; ?>

    </body>

</html>    
