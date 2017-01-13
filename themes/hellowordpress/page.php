<?php
  get_header();
  the_post();
?>
<div class="col-lg-8">
<p>
    <h2>
      <?php the_title(); ?>
    </h2>

    <!-- Content here -->
    <?php the_content(); ?>
</p>
</div>
<?php
  get_footer();
 ?>
