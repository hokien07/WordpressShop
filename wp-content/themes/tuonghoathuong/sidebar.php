<?php global $hk_options; ?>
<div class="widget cate">
	<h3 class="title">
		<span>Danh mục sản phẩm</span>
	</h3>
	<div class="content-w">
		<ul>
			<?php $args = array( 
			    'hide_empty' => 0,
			    'taxonomy' => 'product_cat',
			    'orderby' => id,
			    'parent' => 0
			    ); 
			    $categories = get_categories( $args ); 
			    foreach ( $categories as $category ) { ?>
			    <?php $id = $category->term_id; ?>
					<li>
						<a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name ?></a>
						<?php $args = array( 
					    'hide_empty' => 0,
					    'taxonomy' => 'product_cat',
					    'orderby' => id,
					    'parent' => $id
					    ); 
					    $categories = get_categories( $args ); ?>
					    <?php if(count($categories) > 0 ) { ?>
					    <span class="togo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
					    <ul>
					    <?php foreach ( $categories as $category ) { ?>
							<li>
								<a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $category->name ?></a>
							</li>
						<?php } ?>
						</ul>
						<?php } ?>
					</li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="widget">
	<h3 class="title">
		<span>Tin mới</span>
	</h3>
	<div class="content-w-new">
		<ul>
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&cat=1'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php show_thumb(80,60,1,'c'); ?></a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="clear"></div>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>
<div class="widget">
	<div class="banner">
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/hotro.png" alt=""></a>
	</div>
	<div class="banner">
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/giolamviec.png" alt=""></a>
	</div>
</div>

<div class="widget">
	<h3 class="title">
		<span>Facebook</span>
	</h3>
	<div class="content-w">
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-page" data-href="https://www.facebook.com/tuonghoathuong/" data-tabs="timeline" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tuonghoathuong/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tuonghoathuong/">Tượng Hoà Thượng</a></blockquote></div>
	</div>
</div>