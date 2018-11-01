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
    $table = $wpdb->prefix."statgraph_db";
    $structure = "CREATE TABLE $table (
        id INT(9) NOT NULL AUTO_INCREMENT,
        f_name VARCHAR(80) NOT NULL,
        f_mark VARCHAR(20) NOT NULL,
        f_visits INT(9) DEFAULT 0,
	UNIQUE KEY id (id)
    );";
    $wpdb->query($structure);
 

    $wpdb->query("INSERT INTO $table(f_mark, f_visits)
        VALUES('', 'horizontal')");
    $wpdb->query("INSERT INTO $table(f_mark, f_visits)
        VALUES('vertical', 'horizontal')");
}

add_action('statgraph/statgraph.php', 'graph_install');


function st_graph()
{
    global $wpdb;
    $browser_name = $_SERVER['HTTP_USER_AGENT'];
    $graphks = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix . "statgraph_db");
 
    foreach($graphks as $graphk)
    {
        if(eregi($graphk->f_mark, $browser_name))
        {
            $wpdb->query("UPDATE ".$wp->prefix."statgraph_db 
                SET f_visits = f_visits+1 WHERE id = ".$graphk->id);
            break;
        }
    }
}

add_action('wp_footer', 'statgraph');


function graphf_menu() {
	global $wpdb;
	    include 'graph-admin.php';
}
 


function graph_admin_actions()
{
    add_options_page("StatGraph", "StatGraph", 1, "graph-data", "graphf_menu");
}
 
add_action('admin_menu', 'graph_admin_actions');
