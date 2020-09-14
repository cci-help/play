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
   <script src="assets/js/jquery.min.js"></script>


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
               <!-- <span class="icon solid header fa-gamepad"></span> -->

               <img src="images/minecraft-logo.png" style="width:200px;" alt="Minecraft icon">

            </div>
            <div class="col-8 col-7-large col-12-medium">
               <header>
                  <h1>Let's Play Minecraft!</h1>
               </header>
               <p>College of Communication & Information Minecraft Server</p>
            </div>
         </div>
      </div>
   </article>
   <article id="gameinfo" class="wrapper style2">
      <div class="container">
        <div class="row aln-center" id="loadingzone">
         <!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script>           -->
         <script type="text/javascript">
            // Check if the page has loaded completely                                         
            $(document).ready( function() { 
               // Replace contents of #loadingzone div with makequery.php
            $('#loadingzone').hide().fadeIn('slow');
            $('#loadingzone').load('makequery.php');
            }); 
         </script> 
         <div class="col-4 col-6-medium col-12-small">
         <section class="box style1" id="minecraft">
         <h4>Communicating with server</h4>
         <img src="images/loading2.gif">
         </section>
         </div>     
            </div>
      </div>
      
   </article>


   <!-- Minecraft Map -->
<?php 
require('functions.php');
// Will only show map if server is live
getServerMap();
?>
  
  <!-- TOS and Usage Disclaimer -->
   <article id="disclaimer" class="wrapper style3">

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
   <article id="contact" class="wrapper style2">

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
   <script src="assets/js/jquery.scrolly.min.js"></script>
   <script src="assets/js/browser.min.js"></script>
   <script src="assets/js/breakpoints.min.js"></script>
   <script src="assets/js/util.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/seal-shrink.js"></script>
</body>

</html>