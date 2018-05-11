<?php if(get_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtile-gov-table">
		<h3><?php the_field('subtitle'); ?></h3>
	</div>
</div>
<?php } ?>


<?php if(get_field('gov_info_table')) { ?>

<div class="fc-content">
	<table class="fc-table table-striped table-bordered govs-info">
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Appointed by</th>
				<th>Office</th>
				<th>Term</th>
				<th>Committees</th>
				<th>Registered Interests</th>
			</tr>
		</thead>
		<tbody>
			<?php while(has_sub_field('gov_info_table')): ?>
			<tr <?php if(get_sub_field('inactive')) { echo 'class="inactive"'; } ?>>
				<td class="mobile-title-portrate"><?php if(get_sub_field('link_to_pen_portrait')) { ?><a href="<?php the_sub_field('link_to_pen_portrait'); ?>"><?php the_sub_field('governor'); ?></a><?php } else { ?><?php the_sub_field('governor'); ?><?php } ?></td>
				<td class="mobile-title-governor"><?php the_sub_field('type_of_governor'); ?></td>
				<td class="mobile-title-appointing"><?php the_sub_field('appointing_body'); ?></td>
				<td class="mobile-title-office"><?php the_sub_field('office'); ?></td>
				<td class="mobile-title-term"><?php the_sub_field('term'); ?></td>
				<td class="mobile-title-committees"><?php the_sub_field('committees'); ?></td>
				<td class="mobile-title-interests"><?php the_sub_field('registered_interests'); ?></td>
			<?php endwhile; ?>
		</tbody>
	</table>
</div>

<?php } ?>
