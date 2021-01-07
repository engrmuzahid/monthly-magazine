<style>
    .styled_breadcumb {
        overflow: unset;
        background: #e2e3e5;
        color:#000;
    }
    .styled_breadcumb a,.bread-artile-info p,.bread-artile-info p span{
         color:#000;
    }
    .bread-title h1{
        
        color: #116f21;
        font-size:26px;
        line-height:32px;
    }
    hr{
        margin:0px;
        border-color:#313131;
    }
    .bread-artile-info{
        padding: 2px 0px;
        
    }
    .bread-artile-info p{
        width:60%;
    }
</style>
<div class="styled_breadcumb">
    <!--<div class="shadow"></div>-->
	<div class="breadcrumb-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <a href="<?php echo base_url('/'); ?>"><i class="fa fa-home"></i> মূলপাতা </a>
                        <span>></span>
                        <a href="<?php echo base_url('monthly_archive/'.$bookinfo->id); ?>"><?php echo $breadcumb_month_name; ?></a>
                        <span>></span>
                        <a href="<?php echo base_url('category_archive/'.$category_info->id); ?>"><?php echo $breadcumb_cat_name; ?></a>
                    </div>
                    <hr style="margin-top:10px">
                    <div class="bread-title">
                        <h1><?php echo $breadcumb_title->name; ?></h1>
                    </div>
                    <hr>
                    <div class="bread-artile-info">
                        <p> <?php if($article_details->writer_id>1): ?><a href="<?php echo base_url('writer_archive/'.$article_details->writer_id); ?>"><?php echo $breadcumb_writer_name; ?></a> | <?php endif; ?><?php
                            $fmt_date = date('d F Y', strtotime($publish_date));
                            echo bn_date($fmt_date); ?> <span class="view-count mobile"><?php echo
                                $s_view_count; ?> বার পঠিত</span></p>
                        <div class="sharethis-inline-share-buttons"></div>
                        <!--<ul class="share_btn">-->

                        <!--    <li>-->
                        <!--        <a href="https://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="//cdn.printfriendly.com/buttons/printfriendly-pdf-email-button-md.png" alt="Print"/></a></li>-->
                        <!--</ul>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
