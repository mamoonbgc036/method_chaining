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