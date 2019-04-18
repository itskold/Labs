<?php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
];
$query = new WP_Query($args);
?>
<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-sm-7 blog-posts">
                <?php while ($query->have_posts()): $query->the_post();?>
						<!-- Post item -->
						<div class="post-item">
							<div class="post-thumbnail">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<div class="post-date">
                                    <h2><?= get_the_date("j"); ?></h2>
                                    <h3><?= get_the_date("F Y"); ?></h3>
								</div>
							</div>
							<div class="post-content">
								<h2 class="post-title"><?=the_title();?></h2>
								<div class="post-meta">
                                    <a href=""><?= the_author() ?></a>
							        <a href="">
                                    <?php
                                        $allTags = get_the_tags();
                                        foreach($allTags as $tag){
                                            echo $tag->name . ' ,';
                                        }
                                    ?>	
                                    </a>
                                    <a href=""><?= get_comments_number() ?> Comments</a>
								</div>
								<p><?=the_content();?></p>
								<a href="<?= the_permalink(get_the_ID())?>" class="read-more">Read More</a>
							</div>
	                    </div>
			        <?php endwhile;?>
                    <!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
                </div>

                <!-- SUITS -->

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/1.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/2.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/3.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/4.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/5.jpg" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/6.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/add.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
