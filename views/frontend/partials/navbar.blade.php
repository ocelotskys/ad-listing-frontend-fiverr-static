
<nav class="navbar navbar-expand-sm navbar-light bg-dark fixed-top">
    <div class="container">

        <!-- {{-- toggler --}} -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- {{-- logo --}} -->
        <a class="navbar-brand" href="home">
            <img src="../../assets/img/logo.png" width="100" height="30">
        </a>

        <!-- {{-- collapse nav --}} -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
            <!-- {{-- searchbar --}} -->
            <?php include 'search_bar.blade.php' ?>
        </div>

        <!-- {{-- post and dashboard buttons --}} -->
        <div class="form-inline">
            <a class="btn btn-primary mr-2" href="./create-post.blade.php">
                <i class="icon-plus-1"></i>&nbsp;<strong>Write a Post</strong>
            </a>

            <div class="dropdown show">
                <a class="btn btn-primary" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    James
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="dashboard.blade.php">Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dashboard#myposts">My posts</a>
                    <a class="dropdown-item" href="dashboard#favorites">Favorite posts</a>
                    <a class="dropdown-item" href="dashboard#replies">My replies</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dashboard#settings">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Logout</a>
                </div>
            </div>
        </div>

    </div>
    
</nav>