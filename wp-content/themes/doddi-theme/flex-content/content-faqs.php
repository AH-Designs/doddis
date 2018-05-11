<?php if(get_sub_field('faqs')) { ?>

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle">
		<h3><?php the_sub_field('subtitle'); ?></h3>	
	</div>
</div>
<?php } ?>

	<div class="row">
		<div class="small-12 columns fc-content faqs">
			<?php while(has_sub_field('faqs')): ?>
				<div class="faq">
					<h4><?php the_sub_field('question'); ?></h4>
					<div class="answer"><?php the_sub_field('answer'); ?></div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php } ?>