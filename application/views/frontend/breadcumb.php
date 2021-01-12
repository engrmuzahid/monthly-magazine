<style>
    .styled_breadcumb {
        overflow: unset;
        background: #e2e3e5;
        color:#000;
        padding-top:30px;
    }
    .styled_breadcumb a,.bread-artile-info p,.bread-artile-info p span{
         color:#000;
    }
    .bread-title h1{
        
        color: #116f21;
        font-size:32px;
        line-height:42px;
    } 
</style>
    <section class="styled_breadcumb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="bread-title">
                        <h1><?php echo $breadcumb_title->name; ?></h1>
                    </div>
                <?php if($show_pdf_btn == TRUE) : ?>
                    <div class="save-pdf pull-right">
                        <a target="_blank" href="<?php echo $pdf_download_link; ?>">Download as PDF</a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcumb Section-->