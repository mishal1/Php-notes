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
    $length = strlen("mishal");
    print $length;
    // string length
    $name = "mishal";
    $partial = substr($name, 0, 4);
    print $partial;
    // print partial string
    $upper = strtoupper($name);
    print $upper;
    // uppercase
    $lower = strtolower($name);
    print $name;
    // lowercase
    print strpos("mishal", "i");
    // string position
    $round = round(4.12345, 4);
    print $round;
    // print round number to 4 decimal places
    print rand();
    // prints a number between 0 and 32767
    print rand(1,10);
    // prints a number between 1 and 10
    $array = array();
    array_push($array, 'mishal');
    print count($array);
    // array functions
    $the_array = array(1, 6, 8, 5);
    sort($the_array);
    // sort
    print join(", ", $the_array);
    // join array
    rsort($the_array);
    // reverse
    print join(", ", $the_array);
    // join array
    function helloWorld(){
      echo "hello world"
    }
    helloWorld();
    function returnName(){
      return 'Mishal';
    }
    returnName();
    function aboutMe($name, $age){
      echo "Hello! My name is $name and I am $age years old.";
    }
    aboutMe("mishal", 22);
    // prints out variables in string
    class Class {
      public $prop1 = true;
      public $prop2;

      public function __construct($prop2) {
        $this->prop2 = $prop2;
      }

      public function functionName(){
        return $this->prop1;
      }
    }
    $class = new Class('hello');
    echo $class->prop1;
    // prints 1
    echo $class->prop2;
    // prints 'hello'
    echo $class->functionName();

    if(is_a($class, "Class")){
      echo 'Class exists';
    }

    if(property_exists($class, "prop1")){
      echo 'Property exists';
    }

    if(method_exists($class, "functionName")){
      echo 'Method exists';
    }

    class Shape {
      public $hasSides = true;
    }
    
    class Square extends Shape {
    
    }
    
    $square = new Square();
    if (property_exists($square, "hasSides")) {
      echo "I have sides!";
    }
    // inheritance

    class Circle extends Shape {
      public $hasSides = false;
    }
    // overrides parent property

    class something {
      final public function blah(){
        return 'no overriding'
      }
    }
    // parent class can prevent its methods to be overridden
    // error message will show if child class attempts to override method

    class Blah {
      const something = 'hello';
    }
    // variable cannot be changed
    echo Blah::something;
    // echoes 'hello'
    // :: -> known as scope resolution operator
    class Person {
      public static $isAlive = true;
      public static function greet(){
        echo 'Hello'
      }
    }
    echo Person::greet();
    // static keyword lets you use a class property or method without creating a new instance of that class
    
  ?>
</body>
</html>