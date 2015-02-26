<?php include('parsedown.php'); ?>
<html>
  <head>
    <title>Parsedown test</title>
  </head>
  <body>
    <?php
    	//exec("git pull https://github.com/julian384/test-content.git master");
      $Parsedown = new Parsedown();
		$text = file_get_contents('https://raw.githubusercontent.com/julian384/test-content/master/_site/home.md');
      echo $Parsedown->text($text);
    ?>
  </body>
</html>
