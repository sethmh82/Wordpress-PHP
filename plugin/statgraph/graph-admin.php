<?php query("UPDATE ".$wpdb->prefix."statgraph_db SET f_visits = 0");?>
<div id="message" class="updated fade">
 
StatGraph Stats <strong>Reseted</strong>.</div>
<div class="wrap">
<h2>StatGraph Admin</h2>
<?php
get_results("SELECT * FROM ".$wpdb->prefix."statgraph_db");
foreach($results as $result)
{
    echo $result->f_name." : ";
    echo $result->f_visits."";
}
?>
 
<a href="?page=<?php echo $_GET['page']; ?>&graph-counter=reset">
    Reset Stats
</a>
</div>
