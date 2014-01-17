<?php snippet('header') ?>


		<div id="st-container" class="st-container">
			<!-- content push wrapper -->
			<div class="st-pusher">
				<nav class="st-menu st-effect-3" id="menu-3">
					<h2 class="icon icon-lab">Articles</h2>
<?php snippet('blog-list') ?>
				</nav>

				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<div class="main clearfix">
							<div id="st-trigger-effects" class="column">
								<button data-effect="st-effect-3">Articles</button>
							</div>

							<section class="content">

							  <article>

									<div class="content">
										<h1 class="beta"><?php echo html($page->title()) ?></h1>

										<div class="tags">
											Tagged with: <?php foreach(str::split($page->tags()) as $tag): ?>
												<a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
											<?php endforeach ?>
										</div>

										<?php echo kirbytext($page->text()) ?>


									</div>

									<div class="prevnext">
										<?php snippet('prevnext') ?>
									</div>    

							  </article>

								<section>
									<?php snippet('author') ?>
								</section>

							</section>


						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->



<?php snippet('footer') ?>