<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shabbir
 */

?>

	   <!--START FOOTER-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="text-center text-white footer-alt">
							<?php echo get_template_part('template-parts/socail-url'); ?>
                            
							<br />
							<?php $copy_right_text = get_field('copy_right_text','option'); 
							if($copy_right_text):  ?>
                            <p class="text-muted mb-0"><?php echo $copy_right_text; ?></p>
							<?php endif; ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->
      <?php wp_footer(); ?>
    </body>
</html>
