<?php 
// GRAB ALL DATA ROWS INTO OBJECT   
$rows = get_field('data_input'); 

// START A FOR LOOP TO GO THROUGH EACH ROW  
for ($ix = 0; $ix < count($rows); $ix++) {

    $first_row = $rows[$ix]; // get the first row
    $r_show = $first_row['opt_chart_data'];
    $r_vert = $first_row['opt_chart_vert'];
    $r_max = $first_row['opt_max'];
    $ztable = $first_row['data_table']; // get the sub field value 
    $r_headline = $first_row['headline'];
    $r_subhead = $first_row['sub_headline'];
    $r_dsource = $first_row['data_source'];
    $r_prefix = $first_row['g_prefix'];
    $r_sufix = $first_row['g_sufix'];

    // CREATE ARRAY
    $head_arr = array(); 
    
    // CREATE HEADER ARRAY
    foreach ( $ztable['header'] as $zth ) { array_push($head_arr, $zth['c']); } 
        
    $h_num = count($head_arr);  
    $te = $h_num;
    $oe = 0;
    unset($dat_cell);
    
// BLOCK START  
    foreach ( $ztable['body'] as $ztr ) {
        foreach ( $ztr as $ztd ) {
            $dat_cell[$oe] = $dat_cell[$oe] . '"' . $ztd['c'] . '", ';
            $oe++; }
            $oe = 0; } 
// BLOCK END
    echo '<div class="tbl_hx">' . $r_headline . '</div>';
    echo '<div class="tbl_inf">' . $r_subhead . '</div>';

// START TABLE CREATION
$table = $first_row['data_table'];
if ( $table ) { echo '<table width="100%" border="1" cellpadding="4" cellspacing="0">';
if ( $table['header'] ) { echo '<thead>'; echo '<tr>';
     foreach ( $table['header'] as $th ) {
            echo '<td bgcolor="#232323" style="color: #B19B57"><strong>';
            echo $th['c'];echo '</th>';} echo '</tr>';echo '</thead>';}echo '<tbody>';
     foreach ( $table['body'] as $tr ) {echo '<tr>';
     foreach ( $tr as $td ) {echo '<td>'; 
    	if (is_numeric($td['c'])) { echo number_format( $td['c'] );}
			else { echo $td['c']; }echo '</td>';}echo '</tr>';}echo '</tbody>';echo '</table>';} 
    
// IF SHOW GRAPH IS CHECKED 
if ($r_show[0] == 'yes') { $cha_name = 'chart_re_'; $chart_tb = $cha_name . $ix;
//SHOW GRAPH HEADER & INFO & SOURCE
echo '<div class="display_graph"><div class="tbl_hx2">' . $r_headline . '</div><div id="' . $chart_tb . '" style="background: center no-repeat url();"></div><span style="text-align:center; font-size:10px; font-weight:600;">CLICK BOX TO ISOLATE DATA</span></div><div class="tbl_src"><b>SOURCE: </b>' . $r_dsource . '</div>';
 
// OPTION FOR VERTICAL BARS
if ($r_vert[0] == 'no') { ?>
    <script>  
		function createChartD() {
		$("#<?php echo $chart_tb; ?>").kendoChart({ 
			title: { text: "" }, 
			legend: { spacing: 10, position: "bottom", 
		item: { visual: function (e) {
          var color = e.options.markers.background;
          var labelColor = e.options.labels.color;
          var rect = new kendo.geometry.Rect([0, 0], [150, 50]);
          var layout = new kendo.drawing.Layout(rect, { spacing: 5, alignItems: "center" });
          var marker = new kendo.drawing.Path({ 
			  fill: {color: color }
          }).moveTo(0, 0).lineTo(15, 0).lineTo(15, 15).lineTo(0, 15).close();
          var label = new kendo.drawing.Text(e.series.name, [0, 0], { 
			  fill: {color: labelColor}});
          layout.append(marker, label); 
			layout.reflow() 
			return layout;}}},
			seriesDefaults: { type: "column" },
        series: [{ 
			name: "<?php echo $head_arr[1]; ?>", 
				  data: [<?php echo $dat_cell[1]; ?>], color: "#3e657a"}
					<?php if($dat_cell[2]): ?> ,{ name: "<?php echo $head_arr[2]; ?>", data: [<?php echo $dat_cell[2]; ?>], color: "#c8c9ba" } <?php endif; ?>
					<?php if($dat_cell[3]): ?> ,{ name: "<?php echo $head_arr[3]; ?>", data: [<?php echo $dat_cell[3]; ?>], color: "#3e657a" } <?php endif; ?>
					<?php if($dat_cell[4]): ?> ,{ name: "<?php echo $head_arr[4]; ?>", data: [<?php echo $dat_cell[4]; ?>] ,color: "#c8c9ba" } <?php endif; ?>     
					<?php if($dat_cell[5]): ?> ,{ name: "<?php echo $head_arr[5]; ?>", data: [<?php echo $dat_cell[5]; ?>] ,color: "#3e657a" } <?php endif; ?>  
          			<?php if($dat_cell[6]): ?> ,{ name: "<?php echo $head_arr[6]; ?>", data: [<?php echo $dat_cell[6]; ?>] ,color: "#c8c9ba" } <?php endif; ?>  
                 	<?php if($dat_cell[7]): ?> ,{ name: "<?php echo $head_arr[7]; ?>", data: [<?php echo $dat_cell[7]; ?>] ,color: "#3e657a" } <?php endif; ?>  
					<?php if($dat_cell[8]): ?> ,{ name: "<?php echo $head_arr[8]; ?>", data: [<?php echo $dat_cell[8]; ?>] ,color: "#c8c9ba" } <?php endif; ?>  
				    <?php if($dat_cell[9]): ?> ,{ name: "<?php echo $head_arr[9]; ?>", data: [<?php echo $dat_cell[9]; ?>] ,color: "#3e657a" } <?php endif; ?>  
                ],
                valueAxis: { labels: { 
					format: "<?php echo $r_prefix; ?>{0} <?php  echo $r_suffix; ?>" }, 
							max: <?php echo $r_max; ?>, 
							line: {visible: false}, axisCrossingValue: 0},
                categoryAxis: { 
  						categories: [<?php echo $dat_cell[0]; ?>], 
						line: {visible: false}, 
						labels: {padding: {top: 10}
						}},
                tooltip: { visible: true,format: "<?php echo $r_prefix; ?>{0} <?php echo $r_suffix; ?>", 
				template: "#= series.name #: #= value #<?php echo $r_suffix; ?>"
												  }
												  });
		}
        $(document).ready(createChartD); 
		$(document).bind("kendo:skinChange", createChartD);
    </script>
<?php } ?>
	<!-- HERE COMES THE VERTICAL BAR CHART -->
<?php 
if ($r_vert[0] == 'yes') { ?>
<script> 
function createChartY() {
    $("#<?php echo $chart_tb; ?>").kendoChart({
		theme: "blueOpal", title: { text: "" }, 
		legend: { spacing: 10,
				 position: "bottom", 
				 item: { visual: function (e) {
        var color = e.options.markers.background;
        var labelColor = e.options.labels.color;
        var rect = new kendo.geometry.Rect([0, 0], [150, 50]);
        var layout = new kendo.drawing.Layout(rect, {spacing: 5, alignItems: "center"});
		var marker = new kendo.drawing.Path({ fill: { color: color}}).moveTo(0, 0).lineTo(15, 0).lineTo(15, 15).lineTo(0, 15).close();
		var label = new kendo.drawing.Text(e.series.name, [0, 0], { fill: { color: labelColor }});
      layout.append(marker, label); 
					 layout.reflow()
					 return layout; }}},
											   seriesDefaults: { type: "bar" },
 series: [{ name: "<?php echo $head_arr[1]; ?>", data: [<?php echo $dat_cell[1]; ?>], color: "#3e657a"}
					<?php if($dat_cell[2]): ?>, { name: "<?php echo $head_arr[2]; ?>", data: [<?php echo $dat_cell[2]; ?>], color: "#c8c9ba" } <?php endif; ?>
					<?php if($dat_cell[3]): ?>, { name: "<?php echo $head_arr[3]; ?>", data: [<?php echo $dat_cell[3]; ?>], color: "#3e657a" } <?php endif; ?>
					<?php if($dat_cell[4]): ?>, { name: "<?php echo $head_arr[4]; ?>", data: [<?php echo $dat_cell[4]; ?>] ,color: "#c8c9ba" } <?php endif; ?>     
					<?php if($dat_cell[5]): ?>, { name: "<?php echo $head_arr[5]; ?>", data: [<?php echo $dat_cell[5]; ?>] ,color: "#3e657a" } <?php endif; ?>  
          			<?php if($dat_cell[6]): ?>, { name: "<?php echo $head_arr[6]; ?>", data: [<?php echo $dat_cell[6]; ?>] ,color: "#c8c9ba" } <?php endif; ?>  
                 	<?php if($dat_cell[7]): ?>, { name: "<?php echo $head_arr[7]; ?>", data: [<?php echo $dat_cell[7]; ?>] ,color: "#3e657a" } <?php endif; ?>  
					<?php if($dat_cell[8]): ?>, { name: "<?php echo $head_arr[8]; ?>", data: [<?php echo $dat_cell[8]; ?>] ,color: "#c8c9ba" } <?php endif; ?>  
				    <?php if($dat_cell[9]): ?>, { name: "<?php echo $head_arr[9]; ?>", data: [<?php echo $dat_cell[9]; ?>] ,color: "#3e657a" } <?php endif; ?>  
                ],
                valueAxis: { 
					max: <?php echo $r_max; ?>, 
					line: { visible: false }, 
					minorGridLines: {visible: true}, labels: { rotation: "auto" } }, 
                categoryAxis: { 
						categories: [<?php echo $dat_cell[0]; ?>], 
						majorGridLines: { visible: false }}, 
						tooltip: {visible: true, 
						template: "#= series.name #: #= value #"}});}
	$(document).ready(createChartY);
	$(document).bind("kendo:skinChange", createChartY);
    </script>
<?php } unset($dat_cell); 
	 unset($head_arr);}} ?> 
    
    
