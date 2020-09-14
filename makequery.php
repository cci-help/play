<?php

// This file calls the following functions to get information from the server
// and then present it on the page
require('functions.php');


getServerInfo();
getServerVersion("version");
getServerPlugins();
getServerPlayerCount();

?>