<?php

namespace Pizzeria\Model\Products;

require './vendor/autoload.php';

class Pizza
{

  private string $name;
  private string $description;

  public function __construct(string $name, string $description)
  {
    $this->name = $name; 
    $this->description = $description;  
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDescription()
  {
    return $this->description;
  }
}
