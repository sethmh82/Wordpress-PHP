<?php if( get_field('stat_table_3') &&  current_user_can('um_business-subscriber', 'read')  ||  current_user_can('um_standard-subscriber', 'read') ||  current_user_can('administrator', 'read') ||  current_user_can('um_student-subscriber', 'read') ): ?>
<?php if(get_field('tbl3_header')): ?><div class="tbl_hx"><?php the_field('tbl3_header'); ?></div><?php endif; ?>   
        <?php if(get_field('table_3_info')): ?><div class="tbl_inf"><?php the_field('table_3_info'); ?></div><?php endif; ?>    
<?php
$table = get_field( 'stat_table_3' );
if ( $table ) {
    echo '<table width="100%" border="1" cellpadding="4" cellspacing="0">';
        if ( $table['header'] ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<td bgcolor="#232323" style="color: #B19B57"><strong>';
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
}
?>
<?php endif; ?> 
