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
                    <div class="card m-5">
                        <div class="card-header">
                            <h5>Register</h5>
                        </div>

                        <div class="card-body">
                            <form method="" action="">
                                <!-- @csrf -->

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>

                                        <!-- @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email">

                                        <!-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                                        <!-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer text-center">
                            <h5>Already a user?</h5>
                            <a class="btn btn-success" role="button" href="login">LOGIN</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>        


        <?php include './partials/footer.blade.php'; ?>

    </body>

</html>





