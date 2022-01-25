<?php

namespace Pizzeria\Model\Products;

require './vendor/autoload.php';

class MiscellaneousProducts
{

  private string $name;
  private string $description;
  private float $price;

  public function __construct(string $name, string $description, float $price)
  {
    $this->name = $name;
    $this->description = $description;
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

  public function getDescription()
  {
    return $this->description;
  }
}
