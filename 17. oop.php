<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User
{
  //properties
  private $name;
  public $email;
  public $password;

  //contructor
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  //methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

$user1 = new User('Luna', 'luna@email.com', 'password');
$user1->set_name('Luna');

$user2 = new User('Sol', 'sol@email.com', 'passwordd');
$user2->set_name('Sol');

echo $user1->get_name();


//INHERITANCE
class Employee extends User
{
  //properties
  private $title;

  //overriding 
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);

    //this.title = title na parameter/arg
    $this->title = $title;
  }

  //setter methods and getter methods

  public function get_title()
  {
    return $this->title;
  }
}


$employee = new Employee('Eli', 'eli@email.com', 'password', 'manager');

// echo $employee->get_title();
