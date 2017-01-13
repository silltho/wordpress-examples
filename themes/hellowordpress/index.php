<?php
  get_header();
?>
<div class="col-lg-8">
	<?php while(have_posts()) : the_post();?>
	<div class="row">
		<div class="col-lg-12">
			<article>
				<header>
					<div class="article-header">
						<h2>
						    <a href="<?php the_permalink();?>">
						        <?php the_title(); ?>
						    </a>
						</h2>
					</div>
					<ul class="meta text-muted list-inline">
						<li><?php print ' Veröffentlicht am: ' . get_the_date('j. F');?></li>
					</ul>
				</header>
				<section class="post_content">
				    <?php the_excerpt(); ?>
				</section>
				<footer>
					<?php the_tags(); ?> 
				</footer>
			</article>
			<hr>
		</div>
	</div>
	<?php endwhile; ?>
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
