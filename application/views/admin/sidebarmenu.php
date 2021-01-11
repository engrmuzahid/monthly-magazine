<aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content"> 
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
                    <span class="glyphicons glyphicons-projector"></span> All Books
                </a>
            </li>
            

        </ul>
    </li>

   <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-projector"></span>
            <span class="sidebar-title"> Page  </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="<?php echo site_url("admin/page"); ?>">
                    <span class="glyphicons glyphicon-list-alt"></span> Other Page
                </a>
            </li>
            

        </ul>
    </li>
     <li>
                 <a class="accordion-toggle" href="#">
             <span class="glyphicon glyphicon-wrench"></span>  
            <span class="sidebar-title"> Setting  </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
                 
                    <li>
                        <a  href="<?php echo site_url('admin/contacts'); ?>">
                            <span class="fa fa-info"></span>
                            <span class="sidebar-title">Information</span>
                        </a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('admin/menu'); ?>">
                            <span class="fa fa-underline"></span>
                            <span class="sidebar-title">Menu</span>
                        </a>
                    </li>
                </ul>
            </li>
  
</ul>

        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
    </div>
</aside>