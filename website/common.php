<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="brick.css">
  </head>
  <body>

    <nav>
      <ul>
        <li><a href="intro.php">Introduction</a></li>
        <li><a href="lateriz-hardware.php">The hardware parts</a></li>
        <li><a href="lateriz-software.php">The software parts</a></li>
        <li><a href="contributing.php">Your part in the project</a></li>
      </ul>

    </nav>
    <main>
      <?php echo $mycontent; ?>
    </main>

  </body>
</html>
