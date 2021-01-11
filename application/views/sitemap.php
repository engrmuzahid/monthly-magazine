<?php echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'.PHP_EOL;
?>    <?php foreach ($menus as $menu): ?>
    <?php
       if ($menu->menu_url == 'writer') {
           $url = base_url('/writer-list'); ?>
    <?php echo '<url>'.PHP_EOL; ?> 
        <?php echo '<loc>'.$url.'</loc>'.PHP_EOL; ?> 
        <?php echo '<lastmod>'.date("Y-m-d",strtotime("NOW")).'</lastmod>'.PHP_EOL; ?>
        <?php echo '<changefreq>daily</changefreq>'.PHP_EOL; ?>
        <?php echo '<priority>0.5</priority>'.PHP_EOL; ?>
    <?php echo '</url>'.PHP_EOL; ?>
     <?php
     } elseif ($menu->menu_url == 'subject') {
        $url = base_url('/subject-list');
      ?>
    <?php echo '<url>'.PHP_EOL; ?> 
        <?php echo '<loc>'.$url.'</loc>'.PHP_EOL; ?> 
        <?php echo '<lastmod>'.date("Y-m-d",strtotime("NOW")).'</lastmod>'.PHP_EOL; ?>
        <?php echo '<changefreq>daily</changefreq>'.PHP_EOL; ?>
        <?php echo '<priority>0.5</priority>'.PHP_EOL; ?>
    <?php echo '</url>'.PHP_EOL; ?>
     <?php 
    } elseif ($menu->menu_url == 'category') {
        $url = base_url('/category-list'); ?>
     <?php echo '<url>'.PHP_EOL; ?> 
        <?php echo '<loc>'.$url.'</loc>'.PHP_EOL; ?> 
        <?php echo '<lastmod>'.date("Y-m-d",strtotime("NOW")).'</lastmod>'.PHP_EOL; ?>
        <?php echo '<changefreq>daily</changefreq>'.PHP_EOL; ?>
        <?php echo '<priority>0.5</priority>'.PHP_EOL; ?>
    <?php echo '</url>'.PHP_EOL; ?>
     <?php 
    } else {
        ?>
         <?php echo '<url>'.PHP_EOL; ?> 
        <?php echo '<loc>'.base_url() . $menu->menu_url.'</loc>'.PHP_EOL; ?> 
        <?php echo '<lastmod>'.date("Y-m-d",strtotime("NOW")).'</lastmod>'.PHP_EOL; ?>
        <?php echo '<changefreq>daily</changefreq>'.PHP_EOL; ?>
        <?php echo '<priority>0.5</priority>'.PHP_EOL; ?>
    <?php echo '</url>'.PHP_EOL; ?>
    <?php 
    }
    ?>    
    <?php endforeach; ?>
 <?php echo '</urlset>'.PHP_EOL; ?>