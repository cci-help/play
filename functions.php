<?php

// Set below to 1 to get helpful errors on the page
ini_set('display_errors', 0);


// ** HTML Functions **


// To use the following functions, open the box inside a container
// (preferably inside the row aln-center div, but not required)
// Then, add your box content, and finally close the box 

//Creates an HTML flex box, with specified ID
function openBox($id){
    echo "<div class=\"col-4 col-6-medium col-12-small\" id=\"$id\">";
    echo "<section class=\"box style1\">";
}


//Closes the HTML flex box
function closeBox(){
    echo "</section>";
    echo "</div>";
}


// ** Server Functions **

// Query server and gather info
function getServerInfo(){
    // Always delete old results at start of query
    // Then later, if no results found are found it means server = offline
    if (file_exists('results.json')) {
        unlink('results.json');
    }
    // Query.php is the real meat of this equation,
    // it connects to the server and pulls the info into an array called $info
    require_once('query.php');
    $server = new Query('play.cci.fsu.edu');
    if ($server->connect()) {
            $info = $server->get_info();
            // Let's put the results of the $info array into a JSON file for later access
            file_put_contents("results.json",json_encode($info));
    }
}


// Create box with server status & server version number
 function getServerVersion() {

    // Starting HTML box with server icon & header
    openBox("version");
    echo "<span class=\"icon solid featured fa-server\"></span>";
    echo "<h3>Server Info</h3>";
    // Check to see if results file exists and if so, create an array called $results
    if (file_exists('results.json')) {
        $status = "Online";
        $results = json_decode(file_get_contents('results.json'), true);
        $version = $results["version"];
        echo "<ul>";
        echo "<li><strong>Server Status</strong>: "."<span style=\"color:green\">$status</span>";
        echo "<li><strong>Server Address</strong>: "."play.cci.fsu.edu";
        echo "<li><strong>Server Version</strong>: $version";
        echo " (Java, Vanilla)</li>";
        echo "<br><a class=\"button alt\" href=\"#instructions\" style=\"text-shadow:none;\">Connection Instructions</a>";
        echo "<br><a class=\"button alt scrolly\" href=\"#map\" style=\"text-shadow:none;\">View the Map</a>";
    
    } else {
    // If there is no results file, server is offline.
    $status = "Offline";
    echo "<ul>";
    echo "<li><strong>Server Status</strong>: "."<span style=\"color:red\">$status</span><br>";
    echo "Come back next time!";
    echo "</ul>";
    }
    closeBox();    
}


// Create box with server plugins
function getServerPlugins(){
    // Check to see if results file exists and if so, create an array called $results
    if (file_exists('results.json')) {
        $status = "Online";
        $results = json_decode(file_get_contents('results.json'), true);
        $plugins = "$results[plugins]";
        // Starting HTML box with plugins icon & header
        openBox("plugins");
            echo "<span class=\"icon solid featured fa-puzzle-piece\"></span>";
            echo "<h3>Plugins</h3>";

            // Plugins are stored as semicolon separated string
            // We need to explode them into their own array called pluginList and then print them on the page in a nested list
            $pluginList = explode(';', $plugins);
            echo "<ul id=\"pluginlist\">";
            foreach ($pluginList as &$plugin) {
                echo "<li>".$plugin."</li>";
            }
        echo "</ul>";
        closeBox();
    }
}

// Create box with number of current players
 function getServerPlayerCount(){
     // Check to see if results file exists and if so, create an array called $results
    if (file_exists('results.json')) {
        $status = "Online";
        $results = json_decode(file_get_contents('results.json'), true);
        $numplayers = $results["numplayers"];
        $maxplayers = $results["maxplayers"];
        // Starting HTML box with players icon & header
        openBox("players");
        echo "<span class=\"icon solid featured fa-users\"></span>";
        echo "<h3>Current Players</h3>";
        echo "<span style=\"font-size:2.0em\">";

        // Print list of current players out of max allowed
        // If max number of players is reached, it is displayed in red
        if ($numplayers < $maxplayers) {
            echo "$numplayers"."/"."$maxplayers";
            echo "</span>";
        } elseif ($numplayers == $maxplayers ) {
            echo "<span style=\"color:red\">"."$numplayers"."</span>"."/"."$maxplayers";
            echo "</span>";
    }
        closeBox();
        } else {
        }
}

// Create a list of current players, separated by a bullet point
 function getServerPlayerList(){
    // Check to see if results file exists and if so, create an array called $results
    if (file_exists('results.json')) {
        $status = "Online";
        $results = json_decode(file_get_contents('results.json'), true);
        // Only print list of users, if any
            if(!empty($results["players"])) {   
            echo "<br>";
            echo "<h5>Who's Online:</h5>";
            echo "<p>";
            $playerList = $results["players"];
            for ($i = 0; $i < count($playerList); $i++) {
                echo "&bull;"."$playerList[$i] "."&nbsp;";
                }
            echo "</p>";
            }
    }
}

// Creates a new article/section for the map with list of users below, if any
function getServerMap(){
// Check if server is alive, and include map if it is
$url = "https://play.cci.fsu.edu/map/"; 
// Get response code from map page
$headers = @get_headers($url); 
  
// If map is alive, let's show it!
if($headers && strpos( $headers[0], '200')) { 
    echo "<article id=\"map\" class=\"wrapper style6\">";
    echo "<div class=\"container large\">";
    echo "<h3>Minecraft Map</h3>";
    echo "<div style=\"border-radius: 0; width: 100%; overflow: hidden;\">";
    echo "<iframe src=\"https://play.cci.fsu.edu/map/?zoom=5\" width=\"100%\" height=\"650\">";
    echo "<p>Your browser does not support iframes.</p>";
    echo "</iframe>";
    echo "</div>";
    getServerPlayerList();
    echo "</div>";
    echo "</article>";
    }
}


?>



