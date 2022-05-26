<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cplparts
 */

?>

<!-- new code start -->
<div class="site__body">
	<div class="block post-view">
		<div class="post-view__header post-header post-header--has-image">
			<div class="post-header__image" style="background-image: url('images/posts/post-1-1903x500.jpg');"></div>
			<div class="post-header__body">
				<div class="post-header__categories">
					<ul class="post-header__categories-list">
						<li class="post-header__categories-item"><a href="#" class="post-header__categories-link">Latest News</a></li>
					</ul>
				</div>
				<!-- <h1 class="post-header__title"> -->
				<?php 
				if ( is_singular() ) :
					the_title( '<h1 class="post-header__title">', '</h1>' );
				else :
					the_title( '<h2 class="post-header__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; 
				if ( 'post' === get_post_type() ) :
		        ?>
				<!-- </h1> -->
				<div class="post-header__meta">
					<ul class="post-header__meta-list">
						<li class="post-header__meta-item">
							<?php cplparts_posted_on(); ?>
						</li>
						<li class="post-header__meta-item">
							<a href="#" class="post-header__meta-link">
							   <?php cplparts_posted_by(); ?>
						    </a>
					    </li>
						<li class="post-header__meta-item"><a href="#" class="post-header__meta-link">4 Comments</a></li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<div class="decor post-header__decor decor--type--bottom">
				<div class="decor__body">
					<div class="decor__start"></div>
					<div class="decor__end"></div>
					<div class="decor__center"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="post-view__body">
				<div class="post-view__item post-view__item-post">
					<div class="post-view__card post">
						<div class="post__body typography">
							<p>
							<?php
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cplparts' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								)
							);
							?>
							</p>
							<?php 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
			
							?>
						</div>
						<div class="post__pagination">
							<div class="post__pagination-title">Pages</div>
							<div class="post__pagination-list">
								<ul>
									<li><span class="post__pagination-link post__pagination-link--current">1</span></li>
									<li><a href="#" class="post__pagination-link">2</a></li>
									<li><a href="#" class="post__pagination-link">3</a></li>
								</ul>
							</div>
						</div>
						<div class="post__footer">
							<div class="post__tags tags tags--sm">
								<div class="tags__list"><a href="#">Promotion</a> <a href="#">Power Tool</a> <a href="#">Wrench</a> <a href="#">Electrodes</a></div>
							</div>
							<div class="post__share-links share-links">
								<ul class="share-links__list">
									<li class="share-links__item share-links__item--type--like"><a href="#">Like</a></li>
									<li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a></li>
									<li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a></li>
									<li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
								</ul>
							</div>
						</div>
						<div class="post__author">
							<div class="post__author-avatar"><img src="images/avatars/avatar-4-70x70.jpg" alt="" /></div>
							<div class="post__author-info">
								<div class="post__author-name">Ryan Ford</div>
								<div class="post__author-about">Aliquam ullamcorper elementum sagittis. Etiam lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec tellus pellentesque.</div>
							</div>
						</div>
					</div>
					<div class="post-view__card post-navigation">
						<div class="post-navigation__body">
					<?php 
							the_post_navigation(
									array(
										
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'cplparts' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'cplparts' ) . '</span> <span class="nav-title">%title</span>',
									)
								);
							?>
							</div>
							</div>
					<div class="post-view__card post-navigation">
						<div class="post-navigation__body">
						    
							<a class="post-navigation__item post-navigation__item--prev" href="#">
								<div class="post-navigation__item-image"><img src="images/posts/post-2-80x80.jpg" alt="" /></div>
								<div class="post-navigation__item-info">
									<div class="post-navigation__direction">
										<div class="post-navigation__direction-arrow">
											<svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg>
										</div>
										<div class="post-navigation__direction-title">Previous post</div>
									</div>
									<div class="post-navigation__item-title">Logic Is The Study Of Reasoning And Argument Part 2</div>
								</div>
							</a>
							<a class="post-navigation__item post-navigation__item--next" href="#">
								<div class="post-navigation__item-info">
									<div class="post-navigation__direction">
										<div class="post-navigation__direction-title">Next post</div>
										<div class="post-navigation__direction-arrow">
											<svg width="7" height="11">
												<path
													d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"
												/>
											</svg>
										</div>
									</div>
									<div class="post-navigation__item-title">Some Philosophers Specialize In One Or More Historical Periods</div>
								</div>
								<div class="post-navigation__item-image"><img src="images/posts/post-3-80x80.jpg" alt="" /></div>
							</a>
						</div>
					</div>
					<div class="post-view__card">
						<h2 class="post-view__card-title">Comments (4)</h2>
						
						<div class="post-view__card-body comments-view">
							<ol class="comments-list comments-list--level--0 comments-view__list">
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-1-38x38.jpg" alt="" /></div>
											<div class="comment__meta">
												<div class="comment__author">Jessica Moore</div>
												<div class="comment__date">November 30, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button></div>
											<div class="comment__content typography">Aliquam ullamcorper elementum sagittis. Etiam lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec tellus pellentesque.</div>
										</div>
									</div>
									<div class="comments-list__children">
										<ol class="comments-list comments-list--level--1">
											<li class="comments-list__item">
												<div class="comment">
													<div class="comment__body">
														<div class="comment__avatar"><img src="images/avatars/avatar-2-38x38.jpg" alt="" /></div>
														<div class="comment__meta">
															<div class="comment__author">Adam Taylor</div>
															<div class="comment__date">December 4, 2018</div>
														</div>
														<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button></div>
														<div class="comment__content typography">
															Ut vitae finibus nisl, suscipit porttitor urna. Integer efficitur efficitur velit non pulvinar. Aliquam blandit volutpat arcu vel tristique. Integer commodo ligula id
															augue tincidunt faucibus.
														</div>
													</div>
												</div>
											</li>
											<li class="comments-list__item">
												<div class="comment">
													<div class="comment__body">
														<div class="comment__avatar"><img src="images/avatars/avatar-3-38x38.jpg" alt="" /></div>
														<div class="comment__meta">
															<div class="comment__author">Helena Garcia</div>
															<div class="comment__date">December 12, 2018</div>
														</div>
														<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button></div>
														<div class="comment__content typography">
															Suspendisse dignissim luctus metus vitae aliquam. Vestibulum sem odio, ullamcorper a imperdiet a, tincidunt sed lacus. Sed magna felis, consequat a erat ut, rutrum
															finibus odio.
														</div>
													</div>
												</div>
											</li>
										</ol>
									</div>
								</li>
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-4-38x38.jpg" alt="" /></div>
											<div class="comment__meta">
												<div class="comment__author">Ryan Ford</div>
												<div class="comment__date">December 5, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button></div>
											<div class="comment__content typography">Nullam at varius sapien. Sed sit amet condimentum elit.</div>
										</div>
									</div>
								</li>
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-3-38x38.jpg" alt="" /></div>
											<div class="comment__meta">
												<div class="comment__author">Helena Garcia</div>
												<div class="comment__date">December 12, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button></div>
											<div class="comment__content typography">
												Suspendisse dignissim luctus metus vitae aliquam. Vestibulum sem odio, ullamcorper a imperdiet a, tincidunt sed lacus. Sed magna felis, consequat a erat ut, rutrum finibus odio.
											</div>
										</div>
									</div>
								</li>
							</ol>
							<div class="comments-view__pagination">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
											<span class="page-link__arrow page-link__arrow--left" aria-hidden="true">
												<svg width="7" height="11">
													<path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
												</svg>
											</span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active" aria-current="page">
										<span class="page-link">2 <span class="sr-only">(current)</span></span>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item page-item--dots"><div class="pagination__dots"></div></li>
									<li class="page-item"><a class="page-link" href="#">9</a></li>
									<li class="page-item">
										<a class="page-link page-link--with-arrow" href="#" aria-label="Next">
											<span class="page-link__arrow page-link__arrow--right" aria-hidden="true">
												<svg width="7" height="11">
													<path
														d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"
													/>
												</svg>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="post-view__card">
						<h2 class="post-view__card-title">Write A Comment</h2>
						<form class="post-view__card-body">
							<div class="form-row">
								<div class="form-group col-md-4"><label for="comment-first-name">First Name</label> <input type="text" class="form-control" id="comment-first-name" placeholder="First Name" /></div>
								<div class="form-group col-md-4"><label for="comment-last-name">Last Name</label> <input type="text" class="form-control" id="comment-last-name" placeholder="Last Name" /></div>
								<div class="form-group col-md-4"><label for="comment-email">Email Address</label> <input type="email" class="form-control" id="comment-email" placeholder="Email Address" /></div>
							</div>
							<div class="form-group"><label for="comment-content">Comment</label> <textarea class="form-control" id="comment-content" rows="6"></textarea></div>
							<div class="form-group mb-0"><button type="submit" class="btn btn-primary mt-md-4 mt-2">Post Comment</button></div>
						</form>
					</div>
				</div>
				<div class="post-view__item post-view__item-sidebar">
					<div class="card widget widget-search">
						<form action="get" class="widget-search__form">
							<input class="widget-search__input" name="s" type="search" placeholder="Blog search..." />
							<button class="widget-search__button">
								<svg width="20" height="20">
									<path
										d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
	c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
	c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"
									/>
								</svg>
							</button>
							<div class="widget-search__field"></div>
						</form>
					</div>
					<?php get_template_part( 'template-parts/sidebar/sidebar-primary-new'); ?>
					<div class="card widget-tags widget">
						<div class="widget__header"><h4>Tags Cloud</h4></div>
						<div class="widget-tags__body tags">
							
							<?php 
													
							$tags = get_tags(array(
							'hide_empty' => false
							));
							echo '<div class="tags__list">';
							foreach ($tags as $tag) {
							echo '<a href="#">' . $tag->name . '</a>';
							}
							echo ' </div>';
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
</div>
<!-- new code end -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- .entry-header -->

	

	<!-- .entry-content -->

	<footer class="entry-footer">
		<?php //cplparts_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>
 