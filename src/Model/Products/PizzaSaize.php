<?php

namespace Pizzeria\Model\Products;

require './vendor/autoload.php';

Class PizzaSaize{

  private string $name;
  private int $slice;
  private float $price;

  public function __construct(string $name, int $slice, float $price) {
    $this->name = $name;
    $this->slice = $slice;
    $this->price = $price;
  }

  public function getSlice()
  {
    return $this->slice;
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

  public function getName()
  {
    return $this->name;
  }
}