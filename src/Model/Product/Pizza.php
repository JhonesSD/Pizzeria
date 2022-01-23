<?php

namespace Pizzeria\Model\Product;

class Pizza
{

  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;   
  }

  public function getName()
  {
    return $this->name;
  }
}
