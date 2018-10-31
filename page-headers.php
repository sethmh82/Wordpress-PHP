
<div id="a2a_menu_container"></div>
<style type="text/css">#a2a_config.show_menu = { position: "relative", top: "0px", left: "0px" };</style>

	
<!-- POST IMAGE -->
<?php if ( get_field('remove_img') || get_field('stock_symbol')  ||  get_field('year_established')  ): ?>
<?php else: ?>
<div class="xmimg"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' ); endif; ?></div>
<?php endif; ?>

<!-- TITLE HEADER -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  <header class="entry-header">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>  <?php if ( get_theme_mod( 'single_meta', 1 ) ) { ?>
<div class="entry-meta"><?php onepress_posted_on(); ?></div>
<?php } ?>
</header>

<!-- IMAGE THUMBNAIL -->
<?php if ( get_theme_mod( 'single_thumbnail', 0 ) && has_post_thumbnail() ) { ?>
<div class="entry-thumbnail">
<?php $layout = onepress_get_layout(); $size = 'large'; the_post_thumbnail( 'large' ); ?>
</div>
<?php } ?>
