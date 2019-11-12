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
    
                <h6><a href="home">Home</a> / Create Post</h6>
                <div class="row">
                    <div class="col-md-12 col-lg-12 mb-5">
                        <form action="" method="" class="user-info-form bg-white"  enctype="multipart/form-data">
                            <!-- @csrf -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category<small class="text-danger">*</small> </label>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" id="categories" name="category">
                                            <option selected disabled>Select Category</option>
                                                <option value="1" selected>Marketplace</option>
                                                <option value="2">Jobs</option>
                                                <option value="3">Housing</option>
                                                <option value="4">Services</option>
                                        </select>
                                        <!-- @if($errors->has('category'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('category')}}
                                            </div>
                                        @endif -->
                                    </div>
                                </div>
                                <span><i class="fas fa-greater-than greater-than-icon"></i></span>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" id="subcategories" name="subcategory">
                                            <option selected disabled>Select Subcategory </option>
                                                <option value="1" selected>subcat1</option>
                                                <option value="2">subcat2</option>
                                                <option value="3">subcat3</option>
                                                <option value="4">subcat4</option>
                                                <option value="5">subcat5</option>
                                                <option value="6">subcat6</option>
                                        </select>
                                        <!-- @if($errors->has('subcategory'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('subcategory')}}
                                            </div>
                                        @endif -->
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Post Type<small class="text-danger">*</small> </label>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="is_offered" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="customRadioInline1">Offered</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="is_offered" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="customRadioInline2">Wanted</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title<small class="text-danger">*</small> </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" value="" placeholder="Title" >
                                            <!-- @if($errors->has('title'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('title')}}
                                                </div>
                                            @endif -->
                                            <small class="text-muted">Max 85 Characters</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="price" value="" placeholder="Price" >
                                            <!-- @if($errors->has('price'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('price')}}
                                                </div>
                                            @endif -->
                                            <small class="text-muted">Enter 0 if free</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description<small class="text-danger">*</small> </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description" placeholder="Description of the post"></textarea>
                                            <!-- @if($errors->has('description'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('description')}}
                                                </div>
                                            @endif -->
                                            <small>Max 2500 Characters</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Publicity<small class="text-danger">*</small> </label>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="edu" name="publicity"  class="custom-control-input" value="edu" checked>
                                                <label class="custom-control-label" for="edu">Personal</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="public" name="publicity" class="custom-control-input" value="public">
                                                <label class="custom-control-label" for="public" >Public</label>
                                            </div>
                                            <!-- @if($errors->has('publicity'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('publicity')}}
                                                </div>
                                            @endif -->
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row form-group create-row">
                                <div class="col-md-12 user-create-row mb-md-0">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Photos</label>
                                        <div class="col-md-10">
    
                                            <input type="file" id="uploadFile" multiple/>
                                            
                                            <div id="image_input"></div>
    
                                            <!-- {{-- field for down-sized images preview --}} -->
                                            <br/> <div id="image_preview"></div>
    
                                            <!-- @if($errors->has('postImages.*'))
                                                <small class="text-danger">{{$errors->first('postImages.*')}}</small><br>
                                            @endif -->
                                            
                                            <small>First image will feature. Max -5- photos.</small>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-btn">
                                <button type="submit" class="btn view-btn" id="btnSubmit">Preview</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        


        <?php include './partials/footer.blade.php'; ?>

    </body>

</html>  
