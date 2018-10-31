
<?php if( get_field('remove_register') ): ?>
<?php else: ?>
    
<?php if( current_user_can('um_business-subscriber', 'read')  ||  current_user_can('um_standard-subscriber', 'read') ||  current_user_can('administrator', 'read') ) : ?>
<?php if( get_field('graph_and_chart_code') ): ?>
<div style="padding:20px; margin-top:15px; padding-right:30px">
<?php the_field('graph_and_chart_code') ?>
</div>
<?php endif; ?>
<?php if( get_field('graph_and_chart_code') ): ?>
<div style="padding:20px; margin-top:15px; padding-right:30px">
<?php the_field('graph_and_chart_code') ?>
</div>
<?php endif; ?>

