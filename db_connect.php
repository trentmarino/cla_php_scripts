<?php
      $url=parse_url(getenv("mysql://:@/?reconnect=true"));
      $server = "us-cdbr-iron-east-03.cleardb.net";
       $username = "b9b98665377990";
       $password = "b375b17e";
       $db = "heroku_0b5ab614720338a";
          // Create connection
          $conn = new mysqli($servername, $username, $password, $db);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
?>
