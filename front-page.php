<?php
  get_header();
?>

<main>
<h1><?php the_title(); ?></h1>
<?php
  if(have_posts()) {
    while(have_posts()) {
      the_post();
      the_content();
    }
  }
?>

</main>

<?php
	wp_footer();
?>

<?php
  get_footer();
?>


