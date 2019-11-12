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

                <div class="row">
                    <div class="col-md-12">
                        <p>Post under Marketplace / Electronics</p>
                        <p>Avaiable to Public</p>
                    </div>
                </div>

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

                <div class="mt-3">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="terms_ac">
                        <label class="custom-control-label h5" for="terms_ac">I accept the <a href="terms">terms and conditions</a></label>
                    </div>
                </div>

                <div class="mt-4 " data-aos="fade">
                    <div class="form-inline">
                        <form action="" method="">
                            <!-- @csrf -->
                            <button class="btn d-inline btn-info mr-2" type="submit">Edit</button>
                        </form>
                        <form action="" method="" enctype="multipart/form-data">
                            <!-- @csrf -->
                            <button class="btn d-inline btn-success mr-2" type="submit" id="btnSubmit">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <?php include './partials/footer.blade.php'; ?>


        
        <script>
            // Post button will only be enabled when user agree on terms and conditions
            $(document).ready(function () {

                $("#btnSubmit").attr("disabled", true);

                $(function () {
                    $("#terms_ac").click(function () {
                        if ($(this).is(":checked")) {
                            $("#btnSubmit").attr("disabled", false);
                        } else {
                            $("#btnSubmit").attr("disabled", true);

                        }
                    });
                });
                
            })
        </script>        

    </body>

</html>
