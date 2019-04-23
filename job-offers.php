<?php
/*
Template Name: Job Offers
*/
?>

<?php get_header(); ?>

<!-- PhotoGallery HEADER -->
<section id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Job Offers</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /PhotoGallery HEADER -->


<div class="container">
        <div class="row">

<?php
$id=6; // ID çàäàííîé ðóáðèêè
$n=10;   // êîëè÷åñòâî âûâîäèìûõ çàïèñåé
$recent = new WP_Query("cat=$id&showposts=$n"); 
while($recent->have_posts()) : $recent->the_post();
?>
<a href="<?php the_permalink() ?>" rel="bookmark">
<?php the_title(); ?>
</a><br><?php the_excerpt(); ?> 
<?php endwhile; ?>
                
         
    </div>
</div>


<?php wp_list_categories('exclude=5&title_li='); ?>

<?php get_footer(); ?>