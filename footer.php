<?php
/*
*   this tempalte is used to display footer
*/
?>  
<footer class="site-footer">
    <div class="site-widgets row">
        <div class="widget-col col-4">
            <?php dynamic_sidebar( 'footerwid1' ); ?>
        </div>
        <div class="widget-col col-4">
            <?php dynamic_sidebar( 'footerwid2' ); ?>
        </div>
        <div class="widget-col col-4">
            <?php dynamic_sidebar( 'footerwid3' ); ?>
        </div>
    </div>
</footer>
</div> <!--  Close of main-container -->
</body>
<?php wp_footer(); ?>
</html>