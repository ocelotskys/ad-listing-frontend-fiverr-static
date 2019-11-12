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
                            <h5>Permanently Delete Account</h5>
                            <p>You are about to permanently delete your account. This action is not reversible and all your data (including images) will be lost. Please type <i>confirm</i> to continue.</p>

                            <div class="mt-4" data-aos="fade">
                                <div class="users-remove-btn">
                                    <form method="" action="">
                                        <!-- @csrf -->
                                        <input type="text" class="form-control col-md-1" name="confirmation" autofocus>
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
        </div>


        <?php include './partials/footer.blade.php'; ?>


    </body>

</html>