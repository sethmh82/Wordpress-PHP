<!-- BLUE GRAPH VERTICAL FOR COMPANIES -->
<?php if( in_category( 57 ) && !get_field('series_1') ): ?>
<div id="example">
    <div class="demo-section k-content wide">
        <div id="charthg" style="background: center no-repeat url('');"></div>
</div>
 
        
<?php if( get_field('xan_revx')):           
$c_rev = get_field('xan_revx');
else:
$c_rev =  rand(48, 637);
endif;
$ranx = rand(125, 135);
$ranx2 = $ranx * 0.001;
$ranxx3 = rand(1009, 1015);
$ranx3 = $ranxx3 * 0.001;
$ranxx4 = rand(1008, 1114);
$ranx4 = $ranxx4 * 0.001;
$ranxx5 = rand(1007, 1008);
$ranx5 = $ranxx5 * 0.001;
$ranxx6 = rand(1009, 1095);
$ranx6 = $ranxx6 * 0.001;
$ranxx7 = rand(1075, 1085);
$ranx7 = $ranxx7 * 0.001;
$ranxx8 = rand(1065, 1075);
$ranx8 = $ranxx8 * 0.001;
$ranxx9 = rand(1055, 1065);
$ranx9 = $ranxx9 * 0.001;
$ranxx10 = rand(1045, 1055);
$ranx10 = $ranxx10 * 0.001;
$ranxx11 = rand(1035, 1045);
$ranx11 = $ranxx11 * 0.001;
$rxn1 = $c_rev;
$rxn2 = round($c_rev * 0.991,2);
$rxn3 = round($c_rev * 0.980,2);
$rxn4 = round($c_rev * 0.961,2);
$rxn5 = round($c_rev * 0.944,2);
$rxn6 = round($c_rev * 0.928,2);
$rxn7 = round($c_rev * 0.913,2);
$rxn8 = round($c_rev * 0.898,2);
$rxn9 = round($c_rev * 0.873,2);
$rxn10 = round($c_rev * 0.843,2);
?>

<script>
        function createChart() {
            $("#charthg").kendoChart({
                title: {
                    <?php if(get_field('graph_title')): ?>
                    text: "<?php the_field('graph_title') ?>"
                        <?php else: ?>
                    text: "<?php echo 'Annual Revenue (In Millions)'; ?>"
                    <?php endif; ?>
                },
                legend: {
                    position: "top"
                },
                seriesDefaults: {
                    type: "column"
                },
                series: [{
                    name: "USD",
                    data: [<?php echo $rxn10 . ", " . $rxn9 . ", " . $rxn8 . ", " . $rxn7 . ", " . $rxn6 . ", " . $rxn5 . ", " . $rxn4 . ", " . $rxn3 . ", " . $rxn2 . ", " . $rxn1; ?>]
                }],
                valueAxis: {
                    labels: {
                        format: "${0} M"
                    },
                    line: {
                        visible: false
                    },
                    axisCrossingValue: 0
                },
                categoryAxis: {
                    categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017],
                    line: {
                        visible: false
                    },
                    labels: {
                        padding: {top: 60}
                    }
                },
                tooltip: {
                    visible: true,
                    format: "${0} M",
                    template: "#= series.name #: #= value #"
                }
            });
        }
        $(document).ready(createChart);
        $(document).bind("kendo:skinChange", createChart);
    </script>
</div>
<?php endif; ?>
<?php endif; ?> 
    
