<?php

namespace Pizzeria\Model\Peoples;

require './vendor/autoload.php';

Class PizzaSaize{

  private int $slice;
  private float $price;

  public function __construct(int $slice, float $price) {
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
}