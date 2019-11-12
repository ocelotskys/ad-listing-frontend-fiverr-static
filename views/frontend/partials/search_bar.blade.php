<form class="form-inline" action="" method="">
    <!-- @csrf -->
    <div class="input-group">
        <div class="input-group-prepend search-panel">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span id="search_dropdown">All site</span>
            </button>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">All Site</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#1">Marketplace</a>
                <a class="dropdown-item" href="#2">Housing</a>
                <a class="dropdown-item" href="#3">Jobs</a>
                <a class="dropdown-item" href="#4">Community</a>
                <a class="dropdown-item" href="#5">Services</a>
            </div>
        </div>

        <input 
            type="search" 
            class="form-control" 
            placeholder="Search" 
            aria-label="Search" 
            name="search"
            value=""
        >
    </div>
    <input 
        type="hidden" 
        name="category_id" 
        id="category_id"
        value="1"
    >

</form>

<script>
    $(document).ready(function(e){

        // search dropdown click handle
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var categoryId = $(this).attr("href").replace("#","");
            var categoryName = $(this).text();
            $('#search_dropdown').text(categoryName);
            $('#category_id').val(categoryId);
        });
    });
</script>
