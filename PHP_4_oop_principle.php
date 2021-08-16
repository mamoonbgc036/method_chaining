 //php polymorphism

  interface Shape{
    public function calArea();
  }

  class Circle implements Shape{
    public $radius;

    public function __construct($radius){
      $this->radius = $radius;
    }

    public function calArea(){
      return $this->radius*$this->radius*3.1416;
    }
  }

  class Rectangle implements Shape{
    public $length;
    public $width;

    public function __construct($len,$wid){
      $this->length = $len;
      $this->width = $wid;
    }

    public function calArea(){
      return $this->length*$this->width;
    }
  }

  // here method name 'calArea' is same but code is different in above two class. this is the polymorphic expression.

  $x = new Circle(2);
  echo $x->calArea();
