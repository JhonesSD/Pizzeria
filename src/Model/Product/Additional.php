<?php

namespace Pizzeria\Model\Peoples;

require './vendor/autoload.php';

class Additional
{
  private string $name;
  private float $price;

  public function __construct(string $name, float $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }


  public function setPrice($price): self
  {
    $this->price = $price;

    return $this;
  }
}
