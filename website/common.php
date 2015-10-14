<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="fancy.css"
  </head>
  <body>
     <script type="text/javascript" src="CollapsibleLists.js"></script>
    <script type="text/javascript">
      // code by Stephen Morley   http://code.stephenmorley.org
      // make the appropriate lists collapsible
      window.onload = function () {
      CollapsibleLists.apply();
      }
    </script>
    <nav>
      <ul class="collapsibleList">
        <li class="toplevel">Draft proposal
          <ul>
            <li><a href="intro.php">Introduction</a></li>
             <li title="The motivations to make" class="toplevel">Goals
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

             <li title="The things needed" class="toplevel">Resources
              <ul>            
                <li>Time</li>
                <li>Money</li>
                <li>Capabilities</li>
                <li>Feasibility study</li>
              </ul>
            </li>
            <li title="The process of making" class="toplevel">Activities
              <ul>
                <li>Learn, Collect, Summarize</li>
                <li>Design</li>
                <li>Develop</li>
                <li>Test</li>
                <li>Manufacture</li>
                <li>Write Documentation</li>
              </ul>
            </li>
            <li title="The things made" class="toplevel">Products
              <ul>
                <li>Hardware</li>
                <li>Software</li>
                <li>Documentation</li>
              </ul>
            </li>

          </ul>
       </li>
        <li class="toplevel">Gallery</li>
        <li class="toplevel">Documentation</li>
        <li class="toplevel">Download center</li>
        <!--
        Possible sections/subprojects:

        <li>News</li>
        <li>About us (Contacts)</li>
        <li>Partners (other OSS & OSH projects)</li>
        <li>Bibliography (mainly websites)</li>
        <li>History (shorter than reading the git log)</li
        <li>Roadmap (the future)</li>
        
          -->
      </ul>
    </nav>
    <main>
      <?php echo $mycontent; ?>
    </main>
  </body>
</html>
