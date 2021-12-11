<?php
//define a trait
trait like {
public function AddLike($likely) {
    echo "you like  ".$likely.'<br>';
  }
}
class Product {
	use like;
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
        echo "This is a Private method<br>"; 
    }
    //protected func
    protected function MyProtectMethod()
    {
        echo "This is a Protected method<br>"; 
    }  //protected func
    final function MyFinalMethod()
    {
        echo "This is a final method<br>"; 
    } 
  //pubic function print protected & private property & function
    public function MyPrint()
    {
      echo $this->user.'<br/>';
      echo $this->price.'<br/>';
    }

}
//new class extended
class newProduct extends Product{
//overrride function
  function MyPrint()
  {

	 // use protected method
	$this->MyProtectMethod();
	 echo 'override myprint <br/>';
  }
}
abstract class AbstractProduct
{
    abstract protected function MyPrint($name);
	function Publicfunc()
	{
		echo 'abstract class have public method<br>';
	}
}

class Digital extends AbstractProduct
{

    public function MyPrint($name)
	{
       echo $name.' a Digital production<br>';
    }
}

interface DigitalProduct {
  public function Brand();
}
interface mobile{
  public function HaveCamera();
}
class applemobile implements DigitalProduct,mobile {
  public function Brand() {
    echo " apple <br>";
  }
  public function HaveCamera()
  {
	echo 'this mobile have camera <br>';  
  }
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
//use trait
$mobile->AddLike('iphne');

//define new child obj 
$newmobile=new newProduct;
//use override method 
$newmobile->MyPrint();
//define new child object from AbstractProduct
$digital=new Digital;
//use abstract method  
$digital->MyPrint('laptop');
//use functional method
$digital->Publicfunc('laptop');
//define new object from interface chid
$iphone6 = new applemobile;
$iphone6->Brand();
$iphone6->HaveCamera();

?>
