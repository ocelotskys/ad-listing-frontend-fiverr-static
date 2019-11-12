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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Verify Your Email Address</div>

                        <div class="card-body">
                            <!-- @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    A fresh verification link has been sent to your email address.
                                </div>
                            @endif -->

                            Before proceeding, please check your email for a verification link.
                            If you did not receive the email,
                            <form class="d-inline" method="" action="">
                                <!-- @csrf -->
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Click here to request another</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        


        <?php include './partials/footer.blade.php'; ?>

    </body>

</html>