<?php get_header(); ?>

<div id="left" class="eleven columns" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

	<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="postmeta"> 	<span>ارسال شده توسط <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> | <span><?php the_category(', '); ?></span> </div>
	</div>

	<div class="entry">


		<?php
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 600, 300, true ); //resize & crop the image
			?>
			
		 <?php if($image) : ?>	<img class="scale-with-grid postimg" src="<?php echo $image ?>"/>	<?php endif; ?>


	<?php the_excerpt(); ?>
	<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

<?php endwhile; ?>
<?php getpagenavi(); ?>
<?php else : ?>
	<h1 class="title">یافت نشد</h1>
	<p>متاسفیم، چیزی که به دنبالش هستید اینجا نیست!</p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>