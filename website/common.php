<!DOCTYPE html>
<?php
if (isset($page_author) == FALSE) {
  $page_author = "The lateriz Team";
}
if (isset($page_content) == FALSE) {
  $page_content = "Please add some content here.";
}
if (isset($page_title) == FALSE) {
  $page_title = "This page is part of the Lateriz website";
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="brick.css">
    <meta name="author" content="<?php echo $page_author; ?>">
    <meta name="keywords" content="">
    <meta name="description" content="Open Hardware and Libre Software">
    <!--Start of FAVICON -->
      <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
      <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
      <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
      <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="favicons/manifest.json">
      <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
      <link rel="shortcut icon" href="favicons/favicon.ico">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
      <meta name="msapplication-config" content="favicons/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
    <!--END of FAVICON -->
  </head>
  <body>
    <header>
        <!--put the project logo here -->
        <nav>
          <ul>
            <li><a href="index.php"><img src="logo.png" alt="Home Page"></a></li>
            <li><a href="intro.php">Introduction</a></li>
            <li><a href="lateriz-hardware.php">The hardware parts</a></li>
            <li><a href="lateriz-software.php">The software parts</a></li>
            <li><a href="contributing.php">Your part in the project</a></li>
            <li><a href="credits.php">Credits</a></li>
          </ul>
        </nav>
    </header>
    <main>
      <h1>
        <?php echo $page_title; ?>
      </h1>
      <?php echo $page_content; ?>
    </main>
    <footer role="contentinfo">
      <div class="license">
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
        <img alt="Creative Commons Licence" style="border-width:0"
        src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png"></a>
        <br>
        <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">
      the Lateriz project</span>
       by
       <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.argo3.altervista.org"
      property="cc:attributionName" rel="cc:attributionURL">Stefano Carlesso
      <br>
      </a> is licensed under a <a rel="license" href=
      "http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons
      Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
      </div>
    </footer>
  </body>
</html>
