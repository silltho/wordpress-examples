<?php
  get_header();
  the_post();
?>
  <div class="col-lg-8 blog-post">
    <h2 class="blog-post-title">
      <?php the_title(); ?>
    </h2>

    <p class="blog-post-meta">
      <?php the_date();?>
    </p>
    <!-- Content here -->
    <?php the_content(); ?>
  </div>
    <div class="col-sm-4 sidebar">
    <div class="sidebar-module" style="background-color: rgba(0, 0, 0, 0.2); padding: 5px;">
      <h4>Tags</h4>
      <?php
        echo get_the_tag_list('<p>',', ','</p>');
      ?>
    </div>
  </div>
<?php
  get_footer();
 ?>
