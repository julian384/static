<?php include('parsedown.php'); ?>
<html>
  <head>
    <title>Parsedown test</title>
  </head>
  <body>
    <?php
      $Parsedown = new Parsedown();
		$text = file_get_contents('content/_site/home.md');
      echo $Parsedown->text($text);
    ?>
  </body>
</html>
