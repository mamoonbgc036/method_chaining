<?php  

 try{

  $con = new PDO("mysql:host=localhost;dbname=tests", "root","");

  echo "connected";

 }catch(PDOException $e){
  echo $e->getMessage();
 }
    class dog {
        public $Name;

        public function bark() {
            print "Woof!\n";
        }

        public function meow() {
            print "ok Dogs don't meow!\n";
        }

        public function __call($function, $args) {
          echo "string";die();
            $args = implode(', ', $args);
            print "Call to $function() with args '$args' failed!\n";
        }
    }

    $poppy = new dog;
    $poppy->meow("foo", "bar", "baz");

//php abstract class
abstract class Animal  
{  
    public $name;  
    public $age;  
    public function Describe()  
        {  
                return $this->name . ", " . $this->age . " years old";      
        }  
    abstract public function Greet();  
}  
class Dog extends Animal  
{  
public function Greet()  
        {  
                return "Woof!";      
        }  
      
        public function Describe()  
        {  
                return parent::Describe() . ", and I'm a dog!";      
        }  
}  
$animal = new Dog();  
$animal->name = "Bob";  
$animal->age = 7;  
echo $animal->Describe();  
echo $animal->Greet(); 

//php type hinting
class Test1  
    {  
        public $var= "hello javatpoint and SSSIT";  
    }  
    //create function with class name argument  
    function typehint(Test1 $t1)  
    {  
        //call variable  
        echo $t1->var;  
    }  
    //call function with call name as a argument  
    typehint(new Test1());  

 // php abstruction

  abstract class Test{
    public $len;
    public $wid;

    public function __construct($len,$wid){
      $this->len = $len;
      $this->wid = $wid;
    }

    public function calArea(){
      return $this->len*$this->wid;
    }
  }

  class Another extends Test{

  }

  $x = new Another(50,10);

  // here how calculation is happend is hiden from the user. this is abstraction.

  echo $x->calArea();

  $x = new Another(50,10);

  // here how calculation is happend is hiden from the user. this is abstraction.

  echo $x->calArea();
    try{

    $con = new PDO("mysql:host=localhost;dbname=test","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    echo "connected";

  } catch (Exception $e){

    echo $e->getMessage();

  }

  // php encapsulation 

  //when the properties and method of an object is encapsulated in a single class is called encapsulation.

  // php inheritance

  // php inheritance 

  // when class x extends class y occured inheritance. inheritance can also be occured by trait. using trait multiple inheritance can be achieved.

$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));
