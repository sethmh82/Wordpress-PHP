

<!-- DECLARATION OF USER GROUPS -->
<!-- BUSINESS / STANDARD / ADMINISTRATOR -->
<?php  $topxusr = current_user_can('um_business-subscriber', 'read') || current_user_can('um_standard-subscriber', 'read') || current_user_can('administrator', 'read');?>
<!-- BUSINESS / STANDARD / ADMINISTRATOR / STUDENT -->
<?php  $allxusr = current_user_can('um_cancel-requested', 'read') || current_user_can('um_business-subscriber', 'read') || current_user_can('um_standard-subscriber', 'read') || current_user_can('administrator', 'read') || current_user_can('um_student-subscriber', 'read');?>
<!-- PAST DUE / CANCELLED -->
<?php  $badxusr = current_user_can('um_pastdue', 'read') || current_user_can('um_cancelled', 'read');?>
<!-- PAST DUE / CANCELLED / NOT LOGGED IN -->
<?php  $bad2xusr = current_user_can('um_pastdue', 'read') || current_user_can('um_cancelled', 'read') || !is_user_logged_in();?>



<!-- DECLARATION OF POST OPTIONS -->
<?php $opt_rem_reg = get_field('remove_register');?>
<?php $opt_rem_img = get_field('remove_img')?>

<!-- DECLARATION OF INPUTS -->
<?php $p_stock = get_field('stock_symbol')?>
<?php $p_estab = get_field('year_established')?>


<!-- DECLARATION OF USER GROUPS -->
<?php $top_user = current_user_can('um_business-subscriber', 'read') || current_user_can('um_standard-subscriber', 'read') || current_user_can('administrator', 'read');?>
<?php $all_user = current_user_can('um_cancel-requested', 'read') || current_user_can('um_business-subscriber', 'read') || current_user_can('um_standard-subscriber', 'read') || current_user_can('um_student-subscriber', 'read') || current_user_can('administrator', 'read');?>

<?php $bus_user = current_user_can('um_business-subscriber', 'read');?>
<?php $sta_user = current_user_can('um_standard-subscriber', 'read');?>
<?php $stu_user = current_user_can('um_student-subscriber', 'read');?>

<?php $stu_user = current_user_can('um_cancel-requested', 'read');?>

<?php $can_user = current_user_can('um_cancelled', 'read');?>
<?php $pas_user = current_user_can('um_pastdue', 'read');?>
<?php $not_user = current_user_can('um_cancelled', 'read') || current_user_can('um_pastdue', 'read') || !is_user_logged_in();?>

<?php $adm_user = current_user_can('administrator', 'read');?>

<?php $in_user = is_user_logged_in();?>
<?php $out_user = !is_user_logged_in();?>

<?php $ads_user = !is_user_logged_in() || current_user_can('um_student-subscriber', 'read') || current_user_can('um_pastdue', 'read') || current_user_can('um_cancelled', 'read') || current_user_can('administrator', 'read');
?>
