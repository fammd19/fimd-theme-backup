<?php
  get_header();
?>

<main>
    <div class="card gap-3">
        <?php
        if(have_posts()) {
            while(have_posts()) {
            the_post();
            
            get_template_part('template-parts/content', 'archive');
            }
        }
        ?>
    </div>
</main>

<?php
    the_posts_pagination();
?>

<?php
	wp_footer();
?>

<?php
  get_footer();
?>

