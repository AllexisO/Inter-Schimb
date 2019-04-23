<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package interschimb
 */

get_header(); ?>

<!-- 404 ERROR HEADER -->
<section id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /404 ERROR HEADER -->

<div class="container">
    <div class="row">
        <div class="col-md-12 error-page">
            <div class="error">
                <section class="page-header">
                  <div class="container">
                        <h1 class="text-center">
                            <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'interschimb' ); ?>
                        </h1>

                      <div class="<?php echo $class;?> detail-content">


                            <div class="not-found">
                                <p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location.', 'ultrabootstrap' ); ?></p>
                            </div>
                      </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>