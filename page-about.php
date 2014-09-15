<?php

/**
 * The About Us Page!
 */

ResourceManager::add('css/about.css', 'css');

?>
<?php get_header('about'); ?>

	<div id="primary" class="content-area yai-primary">
		<div id="content" class="site-content" role="main">
			<div class="yai-img-gallery">
				<div class="yai-gal-row">
					<div class="yai-gal-palms yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/palms.jpg'); ?>">
					</div>
					<div class="yai-gal-warf yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/onthewarf.jpg'); ?>">
					</div>
					<div class="yai-gal-straw yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/strawberry_water.jpg'); ?>">
					</div>
					<div class="yai-gal-wine yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/wine.jpg'); ?>">
					</div>
				</div>
				<div class="yai-gal-row">
					<div class="yai-gal-flowers yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/flowers.jpg'); ?>">
					</div>
					<div class="yai-gal-beach yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/beach.jpg'); ?>">
					</div>
					<div class="yai-gal-riviera yai-gal-img-div">
						<img class="yai-gal-img" src="<?php echo ResourceManager::getImg('about/riviera.jpg'); ?>">
					</div>
				</div>
			</div>
			<div class="yai-about-title yai-title">
				<span class="yai-about-name yai-about-alex">alex</span> + <span class="yai-about-name yai-about-soph">sophie</span>
			</div>
			<?php the_post();
			echo '<div class="entry-content yai-content">';
			the_content();
			echo '</div>';
			?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>