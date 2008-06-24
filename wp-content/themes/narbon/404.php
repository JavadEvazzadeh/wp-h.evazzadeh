<?php get_header(); ?>


<div id="left" class="eleven columns" >
<div class="post">
<div class="title-404">
<h2>اووپس! اين صفحه وجود ندارد</h2>
</div>
<div class="entry"><p>آدرس را دوباره چک کنید و یا از طریق لینک های زیر به مسیر مورد نظر خود بروید.</p>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div class="widget">
						<h2 class="widgettitle"><?php _e( 'دسته های کاربردی', 'toolbox' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
						</ul>
					</div>

					<?php
					$archive_content = '<p>' . sprintf( __( 'در بین آرشیوها جستجو کنید', 'toolbox' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>