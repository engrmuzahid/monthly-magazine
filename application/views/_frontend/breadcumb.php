<!--Start Breadcumb Section-->
    <section class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $breadcumb_title->name; ?></a></h1>
                <?php if($show_pdf_btn == TRUE) : ?>
                    <div class="save-pdf">
                        <a target="_blank" href="<?php echo $pdf_download_link; ?>">Download as PDF</a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcumb Section-->