<div class="main-body-area">
    <div class="article-homepg">
        <a href="#"><span class="article-type"><strong> <?php echo $article->name ?></strong></span></a>
        <hr/>
        <h2 align="center"><strong><?php echo $article->title ?></strong></h2>
        <p align="right"><em><?php echo $article->writer ?></em></p>
        <p><?php echo $article->description ?></p>


        <div>
            <br clear="all" /> 


            <div class="style2" id="ftn2">
                <p><?php echo $article->reference ?> </p>
            </div> 
        </div>

    </div>

<!--    <a href="#"><span class="article-type"><strong> Comments </strong></span></a>
    <hr/>-->
<!--    <div id="load_comments">

        <div class="comments">
            <div style=" padding: 20px;">
                <p style="text-align: justify;"> এ চ্যালেঞ্জে বিজয়ী হ’তে হ’লে সংগঠনের সকল পর্যায়ের কর্মী ও দায়িত্বশীলকে খালেছ অন্তরে কঠিনভাবে শপথ করতে হবে এবং দো‘আ করতে হবে যে, হে আল্লাহ! আমাদের প্রত্যেকটি কাজ যেন স্রেফ তোমার সন্তুষ্টির জন্য হয় এবং আমাদের কোন কাজ যেন সংগঠনের ক্ষতির কারণ না হয়। আল্লাহ আমাদের সকলকে সেই তাওফীক দান করুন-আমীন! </p>
                <p style="text-align: right;"> muzahid islam </p>
                <p style="text-align: right;"> muzahid@sfsdhgf.sdfsdf </p>
            </div>

        </div>

        <div class="comments">
            <div style=" padding: 20px;">
                <p style="text-align: justify;"> এ চ্যালেঞ্জে বিজয়ী হ’তে হ’লে সংগঠনের সকল পর্যায়ের কর্মী ও দায়িত্বশীলকে খালেছ অন্তরে কঠিনভাবে শপথ করতে হবে এবং দো‘আ করতে হবে যে, হে আল্লাহ! আমাদের প্রত্যেকটি কাজ যেন স্রেফ তোমার সন্তুষ্টির জন্য হয় এবং আমাদের কোন কাজ যেন সংগঠনের ক্ষতির কারণ না হয়। আল্লাহ আমাদের সকলকে সেই তাওফীক দান করুন-আমীন! </p>
                <p style="text-align: right;"> muzahid islam </p>
                <p style="text-align: right;"> muzahid@sfsdhgf.sdfsdf </p>
            </div>

        </div>

        <div class="comments">
            <div style=" padding: 20px;">
                <p style="text-align: justify;"> এ চ্যালেঞ্জে বিজয়ী হ’তে হ’লে সংগঠনের সকল পর্যায়ের কর্মী ও দায়িত্বশীলকে খালেছ অন্তরে কঠিনভাবে শপথ করতে হবে এবং দো‘আ করতে হবে যে, হে আল্লাহ! আমাদের প্রত্যেকটি কাজ যেন স্রেফ তোমার সন্তুষ্টির জন্য হয় এবং আমাদের কোন কাজ যেন সংগঠনের ক্ষতির কারণ না হয়। আল্লাহ আমাদের সকলকে সেই তাওফীক দান করুন-আমীন! </p>
                <p style="text-align: right;"> muzahid islam </p>
                <p style="text-align: right;"> muzahid@sfsdhgf.sdfsdf </p>
            </div>

        </div>


    </div>-->





</div>

<script type="text/javascript">
  
//    function load_comments(article_id = null) {
//        $("#load_comments").html("Loading...");
//        var data = {};
//        if (article_id) {
//            var data = {'article_id': article_id};
//        }
//        $.post("<?php echo site_url('site/load_comments'); ?>", data, function (resp) {
//            $("#load_comments").html(resp);
//        });
//    }
//    $(document).ready(function () {
//        load_comments(<?php echo $article->id ?>); 
//    });
</script>
