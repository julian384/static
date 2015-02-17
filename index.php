<?php include('parsedown.php'); ?>
<html>
  <head>
    <title>Parsedown test</title>
  </head>
  <body>
    <?php
      $Parsedown = new Parsedown();
      echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
    ?>
  </body>
</html>
