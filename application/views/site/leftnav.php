<div class="menu-item">
        <?php foreach ($categories as $category): ?>
    
            <a  data-id="<?php echo $category->id; ?>" href="<?php echo site_url('site/details?catID=' . $category->id.'&monthName=' . $this->session->userdata("visit_month")); ?>">
                <div class="menu-btn">
                    <div class="menu-btn-left-corner">    
                    </div>
                    <div class="menu-btn-bg">         
                    </div>
                    <div class="menu-btn-right-corner">
                        <div class="menu-btn-item"><img src="<?php echo base_url(); ?>assets/site/images/menu-image.png" width="26" height="20" class="left-float" />
                            <?php echo $category->name; ?>      
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>

    <div style="margin-top: 30px;">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMonthly.At.tahreek&tabs=timeline&width=210&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=273480586078649" width="210" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>

</div>  