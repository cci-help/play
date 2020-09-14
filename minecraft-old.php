<!DOCTYPE HTML>
<!--
   Inspired by: Miniport by HTML5 UP
   -->
<html lang="en">

<head>
   <title>Play - College of Communication and Information</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="assets/css/main.css" />

   <!-- FavIcon of FSU Seal-->
   <link rel="icon" sizes="16x16" href="images/icons/favicon.ico">
   <link rel="icon" sizes="32x32" type="image/png" href="images/icons/favicon-32x32.png">
   <!-- Android Icons-->
   <link rel="manifest" href="images/icons/manifest.json">
   <!-- Provides a high quality iPhone icon. Create an app out of this website by going to Safari > Share > Add to Homescreen-->
   <link rel="apple-touch-icon-precomposed" href="images/icons/apple-touch-icon-precomposed.png">
   <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-touch-icon-iphone-60x60-precomposed.png">
   <link rel="apple-touch-icon" sizes="120x120"
      href="images/icons/apple-touch-icon-iphone-retina-120x120-precomposed.png">
   <link rel="apple-touch-icon" sizes="152x152"
      href="images/icons/apple-touch-icon-ipad-retina-152x152-precomposed.png">
   <!-- Facebook share default image-->
   <link rel="image_src" href="images/icons/social-share-logo.jpg">
   <!-- High Quality Visuals for Pinned Sites in Windows 8-->
   <meta name="theme-color" content="#782F40">
   <title>College of Communication &amp; Information – at Florida State University</title>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <link rel="dns-prefetch" href="//use.fontawesome.com">
   <link rel="dns-prefetch" href="//fonts.googleapis.com">

   <!-- Facebook and Twitter Open Graph metas-->
   <meta property="og:url" content="https://play.cci.fsu.edu/">
   <meta property="og:site_name" content="Play &#64; College of Communication &amp; Information">
   <meta property="og:title" content="Play &#64; College of Communication &amp; Information">
   <meta property="og:description" content="at Florida State University">
   <meta property="og:type" content="website">
   <meta property="og:locale" content="en_US">
   <meta property="og:image" content="images/icons/fsu-seal-160.png">
   <meta property="og:image:secure_url" content="images/icons/fsu-seal-160.png">
   <meta name="twitter:card" content="summary">
   <meta name="twitter:site" content="@FSUCCI">
   <meta name="twitter:creator" content="@FSUCCI">
   <meta name="twitter:title" content="College of Communication &amp; Information">
   <meta name="twitter:description" content="at Florida State University">
   <meta name="twitter:image" content="images/icons/fsu-seal-160.png">
   <link rel="canonical" href="https://play.cci.fsu.edu/">
   <link rel="shortlink" href="https://play.cci.fsu.edu/">



</head>

<body class="is-preload">

   <!-- Navigation -->
   <nav id="nav">
      <a href="index.php#top">Home</a>
      <a href="index.php#games">Games</a>
      <div id="seal"><img src="images/fsu-seal-full-color.png"></div>
      <a href="#disclaimer">Usage Policy</a>
      <a href="#contact">Get Help</a>
   </nav>


   <!-- Home -->
   <article id="top" class="wrapper style1">
      <div class="container">
         <div class="row">
            <div class="col-4 col-5-large col-12-medium">
               <span class="icon solid header fa-gamepad"></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
               <header>
                  <h1>Welcome to Play @ CCI!</h1>
               </header>
               <p>College of Communication & Information Minecraft Server</p>
            </div>
         </div>
      </div>
   </article>
   <article id="gameinfo" class="wrapper style2">
      <div class="container">
            <div class="col-4 col-6-medium col-12-small">
               <section class="box style1" id="minecraft">
                  <span class="image feature"><img src="images/minecraft-logo-med.png"></span>
                  <h3>Minecraft</h3>
                  <p>Join your fellow CCI faculty, staff, and students in an open world!</p>
                  <?php
                     // Require the query php file to get info from Minecraft server and define server address
                     require_once('query.php');
                     $server = new Query('play.cci.fsu.edu');

                     // Connect to Minecraft server and print details
                     if ($server->connect()) {
                     $info = $server->get_info();
                     echo "<ul>";
                     echo "<li><strong>Server Status</strong>: "."<span style=\"color:green\">Online</span>";
                     echo "<li><strong>Server Address</strong>: "."play.cci.fsu.edu";

                     echo "<li><strong>Server Version</strong>: ";
                     print_r($info[version]);
                     echo " (Java, Vanilla)</li>";

                     echo "<li><strong>Current Players</strong>: ";
                     print_r($info[numplayers]);
                     echo "/";
                     print_r($info[maxplayers]);
                     echo "</li>";

                     //Plugins are stored as semicolon separated string
                     //We need to explode them into their own array called pluginList and then print them on the page in a nested list
                     echo "<li><strong>Plugins</strong>: ";
                     $plugins = "$info[plugins];";
                     $pluginList = explode(';', $plugins);
                     echo "<ul id=\"pluginlist\">";
                     foreach ($pluginList as &$plugin) {
                        echo "<li>".$plugin."</li>";
                     }
                     echo "</ul>";
                     echo "</li>";
                     echo "</ul>";
                     } else {
                        echo "<ul>";
                        echo "<li><strong>Server Status</strong>: "."<span style=\"color:red\">Offline</span><br>";
                        echo "Come back next time!";
                        echo "</ul>";

                     }
                     // Print list of players, if any
                     if(!empty($info[players])) {
                        echo "<ul id=\"playerlist\"><li><strong>Who's Online:</strong></li>";
                        $playerList = $info[players];
                        for ($i = 0; $i < count($playerList); $i++) {
                           echo "<li>$playerList[$i]</li>";
                       }
                       echo "</ul>";
                        
                     }
                     

               ?>
                  </p>
               </section>
            </div>
         
      </div>
   </article>
   </article>

   <!-- Minecraft Map -->

   <article id="map" class="wrapper style6">

      <div class="container large">
         <h3>Minecraft Map</h3>
         <?php 
         if ($server->connect()) {

         echo "<div style=\"border-radius: 0; width: 100%; overflow: hidden;\">";
         echo "<iframe src=\"https://play.cci.fsu.edu/map/?zoom=5\" width=\"100%\" height=\"650\">";
         echo "<p>Your browser does not support iframes.</p>";
         echo "</iframe>";
         echo "</div>";


         }
         else {
            echo "<p>The server is "."<span style=\"color:red\">offline</span>.<br>";
            echo "Come back next time!</p>";
            echo "<br>";
         }








       ?>

      </div>
   </article>
  <!-- TOS and Usage Disclaimer -->
   <article id="disclaimer" class="wrapper style2">

      <div class="container medium">
         <br>
         <h3>Play Usage Policy</h3>
         <p class="disclaimer">Play, and all of the games hosted here, are intended for students, faculty, and staff of the College of Communication and Information to participate in activities solely for the purpose of entertainment. All activities on the server are logged. No illegal content or communication is allowed, including sharing copyrighted material,
            x-rated content, sensitive data about yourself or others, and commercial transactions or advertising. Please also refrain from using inflammatory or offensive language. Do not harass others. Be a good sport!
            Content that is not permitted or that generates excessive bandwidth are subject to immediate removal without notice.
            Play and its users are required to follow University policies regarding appropriate use of IT resources [<a
               href="https://policies.vpfa.fsu.edu/policies-and-procedures/information-security-policy">4-OP-H-5</a>].
            Failure to abide by these policies will cause your access to be revoked,
            content removed, and subject to the consequences as described in the FSU policy for use of IT resources.
         </p>
      </div>
   </article>


   <!-- Contact -->
   <article id="contact" class="wrapper style3">

      <div class="container medium">
         <hr />
         <h3>Need help?</h3>
         <p><strong>Need technical support? Contact the CCI HelpDesk at <a
                  href="https://support.cci.fsu.edu"><em>support.cci.fsu.edu</em></a> or call
               <em>850-644-8108</em>.</strong></p>
         <hr />
         <img src="images/fsu-three-torches-smallest.png">
      </div>

   </article>

   <article id="footer" class="wrapper style5">
      <div class="container medium">
         <p>&copy; <a href="https://cci.fsu.edu">College of Communication and Information</a> at <a
               href="https://fsu.edu/">Florida State University</a>. All rights reserved.</p>
      </div>
   </article>
   <!-- Scripts -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/jquery.scrolly.min.js"></script>
   <script src="assets/js/browser.min.js"></script>
   <script src="assets/js/breakpoints.min.js"></script>
   <script src="assets/js/util.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/seal-shrink.js"></script>
</body>

</html>