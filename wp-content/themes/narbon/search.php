<?php get_header(); ?>


<div id="left" class="eleven columns" >

<div class="topnav">	
	<?php
		$mySearch =& new WP_Query("s=$s & showposts=-1");
		$num = $mySearch->post_count;
		echo $num.' نتیجه برای جستجو عبارت "'; the_search_query();
	?>" در <?php  get_num_queries(); ?> <?php timer_stop(1); ?> ثانیه یافت شد.
</div>
<hr/>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="لینک مستقیم به <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">
	<?php the_excerpt(); ?>
	<div class="clear"></div>
</div>


</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

<div class="post">
<div class="title">
		<h2>هیچ نتیجه ای برای جستجوی عبارت - <?php the_search_query();?> - یافت نشد.</h2>
</div>


<div class="entry">
<p>پیشنهادات:</p>
<ul>
   <li>  املای تمام لغات را دوباره بررسی کنید.</li>
   <li>  از کلمات کلیدی دیگری استفاده کنید.</li>
   <li>  از کلمات عمومی تری استفاده کنید.</li>
</ul>
</div></div>


<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>