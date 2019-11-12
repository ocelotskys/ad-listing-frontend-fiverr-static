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
            <h5>Home / Dashboard</h5>
            <button type="submit" class="btn btn-danger  float-right">Logout</button>
        </div>
    
    
        <div class="container">
            <h3>My posts</h3>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category/Subcategory</th>
                            <th scope="col">Last activity</th>
                            <th scope="col">Visible to</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="">Sint ullamco labore velit aliqua eu fugiat quis enim fugiat adipisicing</a>
                                </td>
                                <td>$12</td>
                                <td>Marketplace / Bikes</td>
                                <td>1 min ago</td>
                                <td>public</td>
                                <td>Published</td>
                                <th>
                                    <button class="d-inline btn btn-danger" type="submit">Remove</button>
                                    <button class="d-inline btn btn-success" type="submit">Publish</button>
                                </th>
                            </tr>
    
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="">Ut excepteur officia irure cupidatat eiusmod do officia fugiat aute reprehenderit</a>
                                </td>
                                <td>$59.99</td>
                                <td>Services / Volenteer</td>
                                <td>10 min ago</td>
                                <td>public</td>
                                <td>Draft</td>
                                <th>
                                    <button class="d-inline btn btn-danger" type="submit">Remove</button>
                                    <button class="d-inline btn btn-success" type="submit">Publish</button>
                                </th>
                            </tr>
                    </tbody>
                </table>
                
        </div>
    
        
    
        <div class="container">
            <h3>Favorite posts</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category/Subcategory</th>
                            <th scope="col">Last activity</th>
                            <th scope="col">Visible to</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="">Laboris nostrud deserunt sint incididunt incididunt pariatur tempor anim amet reprehenderit conseq</a>
                                </td>
                                <td>$66</td>
                                <td>Housing / Sublet</td>
                                <td>Yesterday</td>
                                <td>Private</td>
                                <th>
                                    <button class="favorite d-inline btn btn-success" type="submit">Saved!</button>
                                </th>
                            </tr>
    
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="">Nostrud deserunt cillum ea aliqua consequat ethurasi</a>
                                </td>
                                <td>$19</td>
                                <td>Housing / Wanted</td>
                                <td>2 days ago</td>
                                <td>Public</td>
                                <th>
                                    <button class="favorite d-inline btn btn-success" type="submit">Saved!</button>
                                </th>
                            </tr>
                    </tbody>
                </table>
                
        </div>
    
        <div class="container">
            <h3>Replys</h3>
    
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category/Subcategory</th>
                            <th scope="col">Last activity</th>
                            <th scope="col">Visible to</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="">Cillum culpa ex veniam elit aliquip officia non do eiusmod culpa cillum ullamco proident voluptate.</a>
                                </td>
                                <td>$32</td>
                                <td>Marketplace / Instruments</td>
                                <td>10 days ago</td>
                                <td>Public</td>
                                <th>
                                </th>
                            </tr>
    
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="">Deserunt ad sit Lorem magna magna duis dolore id eu minim tempor mollit laboris aliqua.</a>
                                </td>
                                <td>$0</td>
                                <td>Marketplace / free stuff</td>
                                <td>10 days ago</td>
                                <td>Public</td>
                                <th>
                                </th>
                            </tr>
                    </tbody>
                </table>
        </div>
    
        <div class="container">
            <h3>Account settings</h3>
            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="name" value="James">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="email" value="your@email.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="joinedOn" class="col-sm-2 col-form-label">Joined on</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="joinedOn" value="12/3/2018">
                    </div>
                </div>
            </form>
            <form method="" action="">
                <!-- @csrf -->
                <button class="btn btn-danger d-inline">Delete Account</button>
            </form>
    
        </div>
        

        <?php include './partials/footer.blade.php'; ?>


    </body>

</html>




    