
<!-- INFO GRID -->
<?php if( get_field('info_c1') && current_user_can('um_business-subscriber', 'read') || current_user_can('um_standard-subscriber', 'read') || current_user_can('administrator', 'read') || current_user_can('um_student-subscriber', 'read') ): ?>

<?php 
$c_num = get_field( 'total_columns' ); 
$cp_row = get_field( 'columns_per_row' ); 
?>

<style type="text/css">
.col1 { width:100%; padding:20px;} 
.col2 { width:50%; padding:20px;} 
.col3 { width:33%; padding:20px;} 
.col4 { width:25%; padding:20px;} 
</style>

<div style="box-sizing: border-box; display:flex; flex-wrap:wrap;">
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c1'); ?>
</div>
<?php if( get_field('info_c2')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c2'); ?>
</div>
<?php endif; ?> 
<?php if( get_field('info_c3')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c3') ?>
</div>
<?php endif; ?>     
<?php if( get_field('info_c4')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c4') ?>
</div>
<?php endif; ?> 
<?php if( get_field('info_c5')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c5') ?>
</div>
<?php endif; ?> 
<?php if( get_field('info_c6')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c6') ?>
</div>
<?php endif; ?> 
<?php if( get_field('info_c7')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c7') ?>
</div>
<?php endif; ?> 
<?php if( get_field('info_c8')): ?>
<div class="<?php echo 'col' . $cp_row; ?>">
<?php the_field('info_c8') ?>
</div>
<?php endif; ?> 
</div>
<?php endif; ?> 

    
    
