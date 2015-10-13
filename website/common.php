<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="fancy.css"
  </head>
  <body>
    <nav>
      <ul class="collapsibleList">
        <li title="About"><a href="intro.php">Introduction</a>
        </li>
        <li title="The motivations to make">Goals
          <ul>
            <li>Alternative user experience</li>
            <li>Learning experiment</li>
            <li>Made with my hands</li>
            <li>Privacy and freedom</li>
            <li>Workers' rights</li>
            <li>Jobs in Europe</li>
            <li>Environment protection</li>
          </ul>
        </li>
        <li title="The things needed">Resources
          <ul>            
            <li>Time</li>
            <li>Money</li>
            <li>Capabilities</li>
            <li>Feasibility study</li>
          </ul>
        </li>
        <li title="The process of making">Activities
          <ul>
            <li>Learn, Collect, Summarize</li>
            <li>Design</li>
            <li>Develop</li>
            <li>Test</li>
            <li>Manufacture</li>
            <li>Write Documentation</li>
          </ul>
        </li>
        <li title="The things made">Products
          <ul>
            <li>Hardware</li>
            <li>Software</li>
            <li>Documentation</li>
          </ul>
        </li>
     </ul>
    </nav>
    <main>
      <?php echo $mycontent; ?>
    </main>
  </body>
</html>
