<style>
.search-box {
    margin-top: 50px;
}
.post-list-section {
    overflow: hidden;
    margin-top: 60px;
    min-height: 400px;
}
div#show_suggestion ul {
    position: absolute;
    z-index: 999;
    left: 0;
    top: 10px;
    background: #3da13f;
    padding: 15px;
    margin: 0;
    list-style: none;
}

div#show_suggestion {
    position: relative;
    width: 55%;
    margin-left: 33%;
    text-align: left;
}

div#show_suggestion ul li a {
    color: #fff;
    margin-bottom: 8px;
    display: block;
}
.main-search {
    text-align: center;
}

.main-search select {
    padding: 0 10px;
    width: 20%;
    height: 45px;
    border: 1px solid #3da13f;
    display: inline-block;
}

.main-search input {
    border: 1px solid #3da13f;
    padding: 0 15px;
    height: 45px;
    width: 50%;
    display: inline-block;
}

.main-search button {
    background: #3da13f;
    padding: 0 20px;
    height: 45px;
    color: #fff;
    margin-left: -4px;
    border: 1px solid #3da13f;
}
input:focus, select:focus {
    outline: none !important;
    border:1px solid #3da13f;
}
.category_article_list {
    overflow: hidden;
}
.info {
    float: left;
}
.read_more {
    float: right;
}
.info a {
    font-weight: 700;
    font-size: 13px;
}
.read_more a {
    background: #3da13f;
    color: #fff;
    padding: 7px 10px;
    font-weight: 400;
    border-radius: 3px;
    font-size: 12px;
    text-transform: uppercase;
    display: inline-block;
}
div#show_suggestion ul {
        width: 100%;
    }
@media only screen and (max-width: 767px) {
    .main-search select {
        width: 100%;
        margin-bottom: 10px;
    }
    .main-search input {
        width: 83%;
    }
    .category_article_list h3 {
        margin-bottom: 10px;
    }
    .read_more a {
        margin-top: 10px;
        display: inline-block;
    }
    div#show_suggestion {
        width: 100%;
        margin-left: 0;
    }
}
</style>

<div class="col-md-12 search-box">
    <div class="main-search">
        <input type="hidden" id="selected_category_id" value="">
        <select name="category_id" id="category_id">
            <option value="">সকল বিভাগ</option>
            <?php foreach($sidebar_categories as $row) : ?>
            <option value="<?= $row->id ?>"><?= $row->name ?></option>
            <?php endforeach; ?>
        </select>
        <input type="search" name="query" id="query" placeholder="খোজ করুন">
        <button type="button" id="submit_search"><i class="fa fa-search"></i></button>
         <div id="show_suggestion"></div>
    </div>
    
    <!--<div class="row">-->
    <!--    <div class="col-md-4 col-md-offset-1">-->
    <!--        <input type="hidden" id="selected_category_id" value="">-->
    <!--        <div class="form-group">-->
    <!--            <select name="category_id" id="category_id" class="form-control">-->
    <!--                <option value="">Select a Category</option>-->
    <!--                <?php foreach($sidebar_categories as $row) : ?>-->
    <!--                <option value="<?= $row->id ?>"><?= $row->name ?></option>-->
    <!--                <?php endforeach; ?>-->
    <!--            </select>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-5">-->
    <!--        <div class="form-group">-->
    <!--            <input type="text" name="query" id="query" class="form-control" placeholder="Search....">-->
    <!--            <div id="show_suggestion"></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-2">-->
    <!--        <div class="form-group">-->
    <!--            <button type="button" id="submit_search" class="btn btn-success">Search</button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</div>
<div class="col-md-12 post-list-section">
    <div id="show_search_result"></div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('change', '#category_id', function() {
            var category_id = $(this).val();
            $('#selected_category_id').val(category_id);
            $('#query').val("");
            $('#show_suggestion').html('');
        });
        
        $(document).on('keyup', '#query', function() {
            var category_id = $('#selected_category_id').val();
            var query = $(this).val();
            var url = "<?= base_url('welcome/search_suggestion') ?>";
            
            //console.log(category_id);
            
            $.ajax({
                type: 'POST',
                url: url,
                data: {category_id: category_id, query: query},
                cache: false,
                success: function (resp) {
                    //console.log(resp)
                    $('#show_suggestion').html(resp);
                }
            });
        });
        
        $(document).on('click', '#submit_search', function(e) {
            e.preventDefault();
            var category_id = $('#selected_category_id').val();
            var query = $('#query').val();
            var url = "<?= base_url('welcome/find_search_result') ?>";
            $('#show_search_result').html('<div class="text-center"><h4>Loading...</h4></div>');
            
            $.ajax({
                type: 'POST',
                url: url,
                data: {category_id: category_id, query: query},
                cache: false,
                success: function (resp) {
                    //console.log(resp)
                    $('#show_suggestion').html('');
                    $('#show_search_result').html(resp);
                }
            });
        });
    });
</script>






