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
            <div class="alert bg-white">
                <div class="container">
                    <div class="bg-light remov-alert ">
                        <div class="alert-message p-4">
                            <h5>Remove Post</h5>
                            <p>Are you sure you want to delete the following post?</p>
                            <i>Duis magna elit est anim esse consequat officia laborum incididunt.</i>

                            <div class="mt-4" data-aos="fade">
                                    <form method="" action="">
                                        <!-- @csrf -->
                                        <button class="d-inline btn btn-danger" type="submit">Delete</button>
                                    </form>
                                    <form method="" action="">
                                        <!-- @csrf -->
                                        <button class="d-inline btn btn-Info" type="submit">Cancel</button>
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
