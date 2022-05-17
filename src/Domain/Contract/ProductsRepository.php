<?php

namespace Pizzeria\Domain\Contract;

use Pizzeria\Domain\Model\Products\Products;

interface ProductsRepository{
  public function products():array;
  public function saveProducts(Products $product):bool;
  //public function updateProducts():bool;
  //public function deleteProducts():bool;
}