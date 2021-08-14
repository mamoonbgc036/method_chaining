<?php  
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
