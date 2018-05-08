<?php if( get_row_layout() == 'fc-table' ): ?>

<?php if(get_sub_field('subtitle')) { ?>
<div class="row">
	<div class="small-12 medium-12 columns fc-content subtitle-table">
		<h3><?php the_sub_field('subtitle'); ?></h3>
	</div>
</div>
<?php } ?>

<div class="row text fc-content fc-table">
	<div class="small-12 columns">
		<div class="gutter-small">

				<?php $table = get_sub_field( 'table' );

			if ( $table ) {

			    echo '<table border="0">';

			        if ( $table['header'] ) {

			            echo '<thead>';

			                echo '<tr>';

			                    foreach ( $table['header'] as $th ) {

			                        echo '<th>';
			                            echo $th['c'];
			                        echo '</th>';
			                    }

			                echo '</tr>';

			            echo '</thead>';
			        }

			        echo '<tbody>';

			            foreach ( $table['body'] as $tr ) {

			                echo '<tr>';

			                    foreach ( $tr as $td ) {

			                        echo '<td>';
			                            echo $td['c'];
			                        echo '</td>';
			                    }

			                echo '</tr>';
			            }

			        echo '</tbody>';

			    echo '</table>';
			} ?>


		</div>
	</div>
</div>
<?php endif; ?>
