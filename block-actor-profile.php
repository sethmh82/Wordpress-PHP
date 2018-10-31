<!-- ACTOR STATS -->
<?php if( get_field('actor_name') ): ?>
<div style="width:100%; font-size:18px;">
<table>
<tr><td style="color: #b19b57;" bgcolor="#232323"><strong><?php the_field('actor_name') ?> Net Worth & Box Office</strong>
</td><td style="color: #b19b57;" bgcolor="#232323"></td></tr>
<?php endif; ?>

<?php if( get_field('net_worth') ): ?>
<tr><td style="font-size: 20px; color: #b19b57;" >Net Worth
</td><td style="font-size: 20px;  color: #b19b57;"><?php the_field('net_worth') ?></td></tr>
<?php endif; ?>

<?php if( get_field('lifetime_box_office') ): ?>
<tr><td style="font-size: 20px; " >
Lifetime Box Office Sales Worldwide
</td><td style="font-size: 20px; " ><?php the_field('lifetime_box_office') ?></td></tr>
<?php endif; ?>

<?php if( get_field('average_box_office') ): ?>
<tr><td style="font-size: 20px;" >
Average Movie Box Office Revenue
</td><td style="font-size: 20px; " ><?php  the_field('average_box_office') ?></td></tr>
 <?php endif; ?>

<?php if( get_field('average_opening_weekend') ): ?>
<tr><td style="font-size: 20px; " >
Average Opening Weekend Box Office
</td><td style="font-size: 20px; " ><?php the_field('average_opening_weekend') ?></td></tr>
 <?php endif; ?>

<?php if( get_field('top_grossing_movie') ): ?>
<tr><td>
Top Grossing Movie<br>
<sup>Adjusted for Inflation & Wide Release</sup>
</td><td><?php the_field('top_grossing_movie') ?></td></tr>
 <?php endif; ?>

<?php if( get_field('lowest_grossing_movie') ): ?>
<tr><td>
Lowest Grossing Movie<br>
<sup>Adjusted for Inflation & Wide Release</sup>
</td><td><?php  the_field('lowest_grossing_movie') ?></td></tr>
<?php  endif; ?>

<?php if( get_field('actor_name') ): ?>
</table>
</div>
<?php endif; ?>
