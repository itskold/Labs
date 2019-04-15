
<?php
get_header();
?>

<div class="container single-post-container mt-5">
  <?php while (have_posts()): the_post();?>
	  <h2 class="text-center text-uppercase text-secondary mb-0">Hello</h2>
	  <div class="post-content">
	    <?php the_content();?>
	  </div>
	  <?php endwhile;?>
</div>

<?php
get_footer();
?>