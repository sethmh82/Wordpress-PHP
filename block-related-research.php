
<?php if( get_field('rel_research') ):
$link_rows = get_field('rel_research');
// START A FOR LOOP TO GO THROUGH EACH ROW	
for ($irr = 0; $irr < count($link_rows); $irr++) {

	$first_link = $link_rows[$irrx]; // get the first row
	$link_url = $first_link['link_url'];

echo'
<div>
<table width="100%" border="1" cellspacing="0" cellpadding="4"><tr>
<td width="50%" bgcolor="#B19B57" style="color: #232323">
<a style="font-weight: 600; color:#232323;" href="'. <?php the_field('link_url')[0] ?> .'">
<i style="font-size: 15px !important;  color:#232323;" class="fa fa-arrow-circle-left" aria-hidden="true"></i>' . <?php the_field('link_url')[1] ?> . '</a></td>
</tr></table>';
}
 endif; ?>	



<?php $rows = get_field('data_input'); // GRAB ALL DATA ROWS INTO OBJECT

// START A FOR LOOP TO GO THROUGH EACH ROW	
for ($ix = 0; $ix < count($rows); $ix++) {

	$first_row = $rows[$ix]; // get the first row
	$r_show = $first_row['opt_chart_data'];
	$ztable = $first_row['data_table']; // get the sub field value 
	$r_headline = $first_row['headline'];
	$r_subhead = $first_row['sub_headline'];
	$r_dsource = $first_row['data_source'];
	$r_prefix = $first_row['g_prefix'];
	$r_sufix = $first_row['g_sufix'];

		
	$head_arr = array(); //create array container
	foreach ( $ztable['header'] as $zth ) {
    array_push($head_arr, $zth['c']);  // push to array    
	}
		
	$h_num = count($head_arr);	
	$oe = 0;
	

	
			foreach ( $ztable['body'] as $ztr ) {
				foreach ( $ztr as $ztd ) {
						if ($oe === 0):

						$dr1a = '"' . $ztd['c'];
						$dr1b = '", ';
						$d_col1 = $d_col1 . $dr1a . $dr1b;
						$oe = 2;

						elseif ($oe === 2):

						$dr2a = $ztd['c'];
						$dr2b = ", ";
						$d_col2 = $d_col2 . $dr2a . $dr2b;
						$oe = ($h_num - 2);

						elseif ($oe === 1):

						$dr3a = $ztd['c'];
						$dr3b = ", ";
						$d_col3 = $d_col3 . $dr3a . $dr3b;
						$oe = 0;
						endif;
					}

			}
	
	echo '<div class="tbl_hx">' . $r_headline . '</div>';
	echo '<div class="tbl_inf">' . $r_subhead . '</div>';
	
	$table = $first_row['data_table'];
	
if ( $table ) { echo '<table width="100%" border="1" cellpadding="4" cellspacing="0">';
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
    if (is_numeric($td['c'])) {
        echo number_format( $td['c'] );
    } else {
        echo $td['c'];
    }

            echo '</td>';}
            echo '</tr>';}
        	echo '</tbody>';
    		echo '</table>';} 
	
	
	if ($r_show[$ix] == 'yes') {
		
	$cha_name = 'chart_re_';
	$chart_tb = $cha_name . $ix;

	
	echo '<div class="display_graph">
	<div class="tbl_hx2">' . $r_headline . '</div>
        	<div id="' . $chart_tb . '" style="background: center no-repeat url();"></div>
    		</div>';
	echo '<div class="tbl_src"><b>SOURCE: </b>' . $r_dsource . '</div>';
	?>
