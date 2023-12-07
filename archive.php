<?php
  get_header();
?>

<main>
<?php
  if(have_posts()) {
    while(have_posts()) {
      the_post();
      
      get_template_part('template-parts/content', 'archive');
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