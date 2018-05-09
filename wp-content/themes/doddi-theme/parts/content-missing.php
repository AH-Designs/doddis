<div id="post-not-found" class="hentry">

	<?php if ( is_search() ) : ?>

		<div class="fc-content">

				<div class="subtitle-text">
					<h4><?php _e( 'Sorry, No Results.', 'jointswp' );?></h4>

					<p><?php _e( 'Try your search again.', 'jointswp' );?></p>

				</div>

				<div class="fc-content">
					<p><?php get_search_form(); ?></p>
				</div>


		</div>


</div>


	<?php else: ?>

		<div class="fc-content">

			<div class="subtitle-text">
				<h4><?php _e( 'Oops, Post Not Found!', 'jointswp' ); ?></h4>

				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'jointswp' ); ?></p>
			</div>

			<div class="fc-content">
				<p><?php get_search_form(); ?></p>
			</div>

		</div>
	<?php endif; ?>

</div>
