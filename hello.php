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
    if($myName == "Mishal"){
      echo 'My name is Mishal';
    } elseif($myName != "Mishal"){
      echo 'My name is not Mishal'
    } else {
      print 'This statement will never be shown';
    }
    // if,elseif & else statements
    switch ($fruit) {
      case 'Apple': 'Apple':
        echo "Yummy.";
        break;
      default:
        echo 'Not Apple';
    }
    // switch statements
    $i = 5;
    
    switch ($i):
      case 0:
          echo '$i is 0.';
          break;
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
          echo '$i is somewhere between 1 and 5.';
          break;
      case 6:
      case 7:
          echo '$i is either 6 or 7.';
          break;
      default:
          echo "I don't know how much \$i is.";
    endswitch;
    // Adding case statements one after each other is known as falling through
    // Alternative syntax for curly brackets in switch 
    $array = array('one', 'two');
    // creates an array
    echo $array;
    // prints word array rather than actual array
    echo $array[0];
    echo $array{0};
    // prints 'one'
    $array[0] = 'something else';
    unset($array[1]);
    // removes array item
    unset($array);
    // removes array
    for ($i = 0; $i < 110; $i = $i + 10) {
      echo $i;
    }
    // for loop
    $array = array('a', 'b');
    foreach ($array as $item) {
      echo "<li>$item</li>";
    }
    unset($array);
    // foreach
    $loopCond = true;
    while ($loopCond == true){
      echo "true";
      $loopCond = false;
    }
    // while statement
    $loopCond = true;
    while ($loopCond == true):
      echo "true";
      $loopCond = false;
    endwhile;
    // alternative syntax
  ?>
</body>
</html>



