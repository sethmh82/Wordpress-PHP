
<!-- INCLUDED IN REPORT TABLE -->
<?php if( !$allxusr ): ?>
    
    
<?php if( get_field('report_tbl') ): ?>   
<?php $table = get_field( 'report_tbl' );
if ( $table ) { echo '<div style="font-family:Prata;  color:#8e8669; background: #edebe6; padding: 15px 20px 1px 20px;"><span style="font-size:22px;margin-bottom:4px; letter-spacing:2px;">INCLUDED IN THIS STUDY</span><br><table width="100%" border="1" cellpadding="4" cellspacing="0">';
if ( $table['header'] ) { echo '<thead>'; echo '<tr>';
     foreach ( $table['header'] as $th ) {
            echo '<td bgcolor="#232323" style="color: #B19B57"><strong>';
            echo $th['c'];
            echo '</th>';} 
            echo '</tr>';
            echo '</thead>';}
            echo '<tbody>';
     foreach ( $table['body'] as $tr ) {
            echo '<tr>';
     foreach ( $tr as $td ) {
            echo '<td>'; 
            echo $td['c'];
            echo '</td>';}
            echo '</tr>';}
            echo '</tbody>';
            echo '</table></div>';} ?>
    
<div id="xpreview">
    <div style="font-family:Prata;  color:#8e8669; background: #edebe6; padding: 15px 20px 1px 20px;"><span style="font-size:22px;margin-bottom:4px; letter-spacing:2px;">SAMPLE DATA</span>
    <?php the_field('preview') ?>
    </div></div>
    
    <div style="padding: 15px; background: #f7f7f2; color: #877414;"><br /><img class="alignnone  wp-image-17553 aligncenter" src="https://www.statisticbrain.com/wp-content/uploads/2018/05/statistic_brain_logo.png" alt="" width="460" height="77" /><br />
<h2 style="text-align: center;">SUBSCRIBE NOW FOR INSTANT ACCESS TO ALL DATA</h2><br/>
<h4 style="text-align: center;">Full Access Starting at just $0.65 / Day</h4><br/>
<p style="text-align: center;">
<a href="https://statisticbrain.com"><img class="aligncenter size-full wp-image-17589" src="https://www.statisticbrain.com/wp-content/uploads/2017/08/Screen-Shot-2018-05-08-at-5.14.20-PM.png" alt="subscribe to statistic" width="154" height="40" /></a></p>
<p style="text-align: center;">
<img src="https://www.statisticbrain.com/wp-content/uploads/2018/05/statbrain_mockup.png" alt="statistic brain" width="400" />
</p></div>
    <?php else: ?>
<?php if( get_field('remove_register')): ?>
<?php else: ?>
<?php if( get_field('make_viewable') || in_category( 61 ) || in_category( 64 ) || in_category( 63 ) || in_category( 74 ) || in_category( 45 ) || in_category( 70 ) || in_category( 64 ) || in_category( 65 )   || in_category( 81 ) || in_category( 10 )  ): ?>
<?php else: ?>

<?php if( in_category( 69 )): ?>
    <table border="1" width="100%" cellspacing="0" cellpadding="4">
        <tr><td bgcolor="#edebe6"><span style="font-size:20px;"><b>SAMPLE DATA</b> : SUBSCRIBE TO VIEW COMPLETE DATA SETS ON EVERY ARTIST</span></td></tr>
    </table>
    <table border="1" width="100%" cellspacing="0" cellpadding="4"><thead><tr>
<td bgcolor="#232323" width="40%"><strong><?php the_title( '<span class="etitle">', '</span>' ); ?></strong></td>
<td bgcolor="#232323" width="20%"><strong>Peak Billboard Position</strong></td>
<td bgcolor="#232323" width="20%"><strong>Physical Albums Sold</strong></td>
<td bgcolor="#232323" width="20%"><strong>Digital Albums Sold</strong></td>
</tr></thead><tbody>
<tr><td>####### Single</td><td>####</td><td>####</td><td>###</td></tr>
<tr><td>####### Album</td><td>##</td><td>##</td><td>####</td></tr>
<tr><td>######### Album</td><td>###</td><td>##</td><td>##</td></tr>
<tr><td>####### Album</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>########## Album</td><td>##</td><td>##</td><td>###</td></tr>
<tr><td>####### Single</td><td>##</td><td>####</td><td>###</td></tr>
<tr><td>Total Sales</td><td>####</td><td>####</td><td>###</td></tr>
<tr>
<td bgcolor="#232323" width="40%"><strong>Concert Ticket Sales</strong></td>
<td bgcolor="#232323" width="20%"><strong>Box Office Revenue</strong></td>
<td bgcolor="#232323" width="20%"><strong>Total Shows</strong></td>
<td bgcolor="#232323" width="20%"><strong>Tickets Sold</strong></td>
</tr>
<tr><td>###### Tour</td><td>##</td><td>###</td><td>###</td></tr>
<tr><td>#### US Tour</td><td>##</td><td>##</td><td>####</td></tr>
<tr><td>##### World Tour</td><td>###</td><td>##</td><td>####</td></tr></tbody></table>  
    
    
    
<?php else: ?>  
<table border="1" width="100%" cellspacing="0" cellpadding="4"><thead><tr>
<td bgcolor="#232323" width="40%"><strong><?php the_title( '<span class="etitle">', '</span>' ); ?></strong></td>
<td bgcolor="#232323" width="20%"><strong>****</strong></td>
<td bgcolor="#232323" width="20%"><strong>****</strong></td>
<td bgcolor="#232323" width="20%"><strong>****</strong></td>
</tr></thead><tbody>
<tr><td>United States</td><td>####</td><td>####</td><td>##</td></tr>
<tr><td>United Kingdom</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>Europe</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>Asia</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>Africa</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>Australia</td><td>##</td><td>##</td><td>##</td></tr>
<tr><td>Pacific Islands</td><td>##</td><td>##</td><td>##</td></tr></tbody></table>  
<?php endif; ?> 
<?php endif; ?>
<div style="padding: 15px; background: #f7f7f2; color: #877414;"><br /><img class="alignnone  wp-image-17553 aligncenter" src="https://www.statisticbrain.com/wp-content/uploads/2018/05/statistic_brain_logo.png" alt="" width="460" height="77" /><br />
<h2 style="text-align: center;">SUBSCRIBE NOW FOR INSTANT ACCESS TO ALL DATA</h2><br/>
<h4 style="text-align: center;">Full Access Starting at just $0.65 / Day</h4><br/>
<p style="text-align: center;">
<a href="https://statisticbrain.com"><img class="aligncenter size-full wp-image-17589" src="https://www.statisticbrain.com/wp-content/uploads/2017/08/Screen-Shot-2018-05-08-at-5.14.20-PM.png" alt="subscribe to statistic" width="154" height="40" /></a></p>
<p style="text-align: center;">
<img src="https://www.statisticbrain.com/wp-content/uploads/2018/05/statbrain_mockup.png" alt="statistic brain" width="400" />
</p></div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
