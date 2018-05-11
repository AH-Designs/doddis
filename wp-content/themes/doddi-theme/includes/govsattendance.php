<?php if(get_field('committees_attendance')) { ?>
<?php while(has_sub_field('committees_attendance')): ?>
<h3><?php the_sub_field('committee_name'); ?></h3>


<?php $table = get_sub_field( 'attendance_table' );

if ( $table ) {

    echo '<table class="table table-striped" border="0">';

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
<?php endwhile; ?>
<?php } ?>