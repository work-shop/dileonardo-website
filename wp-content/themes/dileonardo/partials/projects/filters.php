<section class="block filters sticky-nav before" id="filters">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 col-md-8">
				<div class="row">
					<div class="col filter-menu filter-primary filter-category closed" id="filters-primary">
						<div class="row filter-content-row">
							<div class="col">
								<h4 class="medium filter-title filter-menu-toggle" data-toggle-target="#filter-buttons-categories">
									Type
									<span class="icon ml1" data-icon="”"></span>
								</h4>
								<h5 class="filter-current filter-current-category inactive" data-toggle-target="#filter-buttons-categories"></h5>
								<?php
								$terms = get_terms( array(
									'taxonomy' => 'project-categories',
									'hide_empty' => true,
									'exclude' => array(27)
								) );
								?>
								<?php if( $terms ){ ?>
									<ul class="filter-buttons-list closed" id="filter-buttons-categories">
										<li>
											<a  href="#" class="filter-button filter-button-category filter-button-all filter-button-all-category filter-button-reset filter-active" data-target="all">
												All
											</a>
										</li>
										<?php 
										foreach ( $terms as $term ) { ?>
											<li>
												<a  href="#" class="filter-button filter-button-category" data-slug="<?php echo $term->slug; ?>" data-target="filter-category-<?php echo $term->slug; ?>">
													<?php echo $term->name; ?>
												</a>
											</li>
										<?php } ?>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col filter-menu filter-secondary filter-region closed" id="filters-secondary">
						<div class="row filter-content-row">
							<div class="col">
								<h4 class="medium filter-title filter-menu-toggle" data-toggle-target="#filter-buttons-regions">
									Region
									<span class="icon ml1" data-icon="”"></span>
								</h4>
								<h5 class="filter-current filter-current-region inactive" data-toggle-target="#filter-buttons-regions"></h5>
								<?php
								$terms = get_terms( array(
									'taxonomy' => 'project-regions',
									'hide_empty' => true
								) );
								?>
								<?php if( $terms ){ ?>
									<ul class="filter-buttons-list closed" id="filter-buttons-regions">
										<li>
											<a  href="#" class="filter-button filter-button-region filter-button-all filter-button-all-region filter-button-reset filter-active" data-target="all">
												All
											</a>
										</li>
										<?php 
										foreach ( $terms as $term ) { ?>
											<li>
												<a href="#" class="filter-button filter-button-region" data-slug="<?php echo $term->slug; ?>" data-target="filter-region-<?php echo $term->slug; ?>">
													<?php echo $term->name; ?>
												</a>
											</li>
										<?php } ?>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<?php if(false){ ?>
					<div class="row" id="filter-messages">
						<div class="col">
							<div class="bg-error filter-message">
								<h4 class="filter-messages-text error centered">
									Sorry, we couldn't find any results that match your selection.
								</h4>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>