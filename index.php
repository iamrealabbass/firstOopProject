<?php

class Product {
  // Properties
  public $id;
  public $name;

  // Methods
  //setter
  function set_name($name) 
  {
    $this->name = $name;
  }
  function set_id($id) 
  {
    $this->id = $id;
  }
  //getter
  function get_id()
  {
    return $this->id;
  }
  function get_name() 
  {
    return $this->name;
  }
}
$mobile=new Product();
$mobile->set_name('iphone');
$mobile->set_id('1');
echo $mobile->get_name();
echo $mobile->get_id();
?>