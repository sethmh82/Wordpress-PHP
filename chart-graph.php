 <?php if ($r_vert == 'yes') { ?>
    
     <script>
     
function createChartY() {
    $("#<?php echo $chart_tb; ?>").kendoChart({
        theme: "blueOpal",
                title: { text: "<?php echo $r_headline; ?>" },
                legend: { position: "bottom" },
                seriesDefaults: { type: "bar" },

         series: [{
                    name: "<?php echo $head_arr[1]; ?>",
                    data: [<?php echo $dat_cell[1]; ?>],
                    color: "#a0b0c0"
             
                } <?php if($dat_cell[2]): ?> ,{
                    name: "<?php echo $head_arr[2]; ?>",
                    data: [<?php echo $dat_cell[2]; ?>]
                }   <?php endif; ?>
                    <?php if($dat_cell[3]): ?>       
                ,{
                    name: "<?php echo $head_arr[3]; ?>",
                    data: [<?php echo $dat_cell[3]; ?>]
                }   <?php endif; ?>
                    <?php if($dat_cell[4]): ?>   
                ,{
                    name: "<?php echo $head_arr[4]; ?>",
                    data: [<?php echo $dat_cell[4]; ?>]
                }   <?php endif; ?>     
                    <?php if($dat_cell[5]): ?>       
                ,{
                    name: "<?php echo $head_arr[5]; ?>",
                    data: [<?php echo $dat_cell[5]; ?>]
                }   <?php endif; ?>     
                ],
        
                    
        
                valueAxis: {
                    max: <?php echo $r_max; ?>,
                    line: { visible: false },
                    minorGridLines: {
                        visible: true
                    },
                    labels: { rotation: "auto" } }, 
                categoryAxis: {
                        categories: [<?php echo $dat_cell[0]; ?>],
                        majorGridLines: { visible: false }
                },
                tooltip: {
                        visible: true,
                        format: "<?php echo $r_prefix; ?>{0} <?php echo $r_suffix; ?>",
                        template: "#= series.name #: #= value #"
                }
            });
        }
        $(document).ready(createChartY);
        $(document).bind("kendo:skinChange", createChartY);
    </script>
    
    <?php } ?>
        
