<?php

class Product {
    // Properties
    public $id;
    public $name;
    protected $user='admin';
    private $price='1200';
    // Methods
    //setter
    //set name
    function set_name($name) 
    {
        $this->name = $name;
    }
    //set id
    function set_id($id) 
    {
      $this->id = $id;
    }
    //getter
    //get id
    function get_id()
    {
        return $this->id;
    }

    //get name
    function get_name() 
    {
        return $this->name;
    }
    //private func
    private function MyPrivateMethod()
    {
        echo "This is a Private method"; 
    }
    //protected func
    protected function MyProtectMethod()
    {
        echo "This is a Protected method"; 
    } 
  //pubic function print protected & private property & function
    public function MyPrint()
    {
      echo $this->user.'<br/>';
      echo $this->price.'<br/>';
    }

}
//new class extended
class newProduct extends product {
    //use protected method & property
    
}
//define new obj from product
$mobile=new Product();
//use setter
$mobile->set_name('iphone');
$mobile->set_id('1');
//use getter
echo $mobile->get_name().'<br/>';
echo $mobile->get_id().'<br/>';
// use public function
$mobile->MyPrint();

// use public function
$mobile->MyProtectMethod();
//define new child obj 
$newmobile=new newProduct;
//use constant 
echo $newmobile::protectProperty;


?>
