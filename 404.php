<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shabbir
 */

get_header();
?>


 <!-- START HOME -->
        <section class="section header-bg-img h-100vh clippath_none" id="home">
            <div class="bg-overlay"></div>
            <div class="header-table">
                <div class="header-table-center">
                    <div class="container position-relative z-index">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center header-content mx-auto">
                                    <h1 class="text-white first-title mb-4">404 ERROR | Page Not Found</h1>
                                  
                                    <div class="mt-4 pt-2">
                                        <a href="<?php  echo home_url(); ?>" class="btn btn-outline-custom btn-round">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

<?php
get_footer();
