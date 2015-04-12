<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <?php
    echo '<p>Hello World</p>';
    // displays text
    phpinfo(); 
    // displays system information from php
    echo $_SERVER['HTTP_USER_AGENT'];
    // $_SERVER => reserved PHP variable that contains all web server information
    $myName = "Mishal";
    // variables start with $
  ?>
</body>
</html>