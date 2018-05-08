<?php if(get_sub_field('documents')) { ?>

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-docs">
		<h4><?php the_sub_field('subtitle'); ?></h4>
	</div>
</div>
<?php } ?>

	<div class="row documents">
		<div class="small-12 columns fc-content documents-list">
			<div class="gutter-small">
				<ul class="page-docs">
				<?php while(has_sub_field('documents')): ?>

					<li>
						<i class="fas fa-arrow-right"></i>
						<a href="<?php the_sub_field('file'); ?>">
							<span class="link-label"><?php the_sub_field('link_text'); ?></span>
						</a>
					<?php if(get_sub_field('description')) { ?><span class="doc-desc"> - <?php the_sub_field('description'); ?></span><?php } ?>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
