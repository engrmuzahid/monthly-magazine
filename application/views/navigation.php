<ul class="nav sidebar-menu">
    <li class="pt20 active">
        <a href="<?php echo site_url("home"); ?>">
            <span class="fa fa-dashboard"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>

    <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-book"></span>
            <span class="sidebar-title"> Book  </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="<?php echo site_url("bookinfo"); ?>">
                    <span class="glyphicons glyphicons-projector"></span> Book Info
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("category"); ?>">
                    <span class="glyphicons glyphicons-projector"></span> Category
                </a>
            </li>

            <li>
                <a href="<?php echo site_url("subject"); ?>">
                    <span class="glyphicons glyphicons-projector"></span> Subject
                </a>
            </li>



        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-bookmark"></span>
            <span class="sidebar-title"> Notice  </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="<?php echo site_url("notice"); ?>">
                    <span class="glyphicons glyphicons-projector"></span> Right Side Notice
                </a>
            </li> 

        </ul>
    </li>

    <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-bookmark"></span>
            <span class="sidebar-title"> Writer  </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="<?php echo site_url("writer"); ?>">
                    <span class="glyphicons glyphicons-projector"></span> Writers
                </a>
            </li> 

        </ul>
    </li>

 <li>
    <a  href="<?php echo site_url('contacts'); ?>">
        <span class="fa fa-info"></span>
        <span class="sidebar-title">Site Information</span>
    </a>
</li>
<li>
    <a  href="<?php echo site_url('pages'); ?>">
        <span class="fa fa-underline"></span>
        <span class="sidebar-title">Create Page</span>
    </a>
</li>
<li>
    <a  href="<?php echo site_url('menu'); ?>">
        <span class="fa fa-list"></span>
        <span class="sidebar-title">Menu</span>
    </a>
</li>
<?php 
    $new_comment = $this->db->get('user_comments')->result();
?>
<li>
    <a  href="<?php echo site_url('comments'); ?>">
        <span class="fa fa-comment"></span>
        <span class="sidebar-title">Comments (<?php echo count($new_comment); ?>)</span>
    </a>
</li>



</ul>
