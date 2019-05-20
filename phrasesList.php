<!doctype html>
<html lang="en">
  <head>
    <?php
    include('config.php');
    $text = file_get_contents($filename);
    $statements = file($filename, FILE_IGNORE_NEW_LINES);
    ?>
  </head>
  <body>
  <?php
    foreach ($statements as $stmt){
        echo "<p>". $stmt . "</p>";
    }
    ?>
  </body>
</html>