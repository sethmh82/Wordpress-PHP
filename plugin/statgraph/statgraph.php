/*
Plugin Name: Graph Functions
Plugin URI: http://statisticbrain.com/statgraph/
Description: Plugin to run graph functions
Author: Seth Harden
Version: 1.0
Author URI: http://statisticbrain.com/
*/

function graph_install()
{
    global $wpdb;
    $table = $wpdb->prefix."statgraph";
    $structure = "CREATE TABLE $table (
        id INT(9) NOT NULL AUTO_INCREMENT,
        f_graph VARCHAR(80) NOT NULL,
        f_table VARCHAR(20) NOT NULL,
        f_val INT(9) DEFAULT 0,
	UNIQUE KEY id (id)
    );";
    $wpdb->query($structure);
 
    // Populate table
    $wpdb->query("INSERT INTO $table(f_graph, f_val)
        VALUES('vertical', 'horizontal')");
    $wpdb->query("INSERT INTO $table(f_graph, f_val)
        VALUES('vertical', 'horizontal')");
}

add_action('statgraph/statgraph.php', 'graph_install');



function bot()
{
    global $wpdb;
    $browser_name = $_SERVER['HTTP_USER_AGENT'];
    $bots = $wpdb->get_results("SELECT * FROM ".
        $wpdb->prefix."bot_counter");
 
    foreach($bots as $bot)
    {
        if(eregi($bot->bot_mark, $browser_name))
        {
            $wpdb->query("UPDATE ".$wp->prefix."bot_counter 
                SET bot_visits = bot_visits+1 WHERE id = ".$bot->id);
 
            break;
        }
    }
}

add_action('wp_footer', 'graphf');


function graphf_menu()
{
    global $wpdb;
    include 'statgraph-admin.php';
}
 
function data_admin_actions()
{
    add_options_page("StatGraph", "StatGraph", 1,
"Graphs", "DataSets");
}
 
add_action('admin_menu', 'data_admin_actions');
