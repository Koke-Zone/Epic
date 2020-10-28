<?php
/*
*   this tempalte is used to display header
*/
?>
<!DOCTYPE html>
<html lang='en'>
    <meta charset="UTF-8">
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="site-main container">
            <header class ="site-header row">
                <div class ="site-branding col-4">
                    <?php the_custom_logo(); ?>
                </div>
                <div class ="site-navigation col-8">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'primary', 
                    )); ?>
                </div>
            </header>
         
           
     