<?php

namespace Pizzeria\Domain\Service\Repositorys;

use Pizzeria\Domain\Model\Products\Products;
use Pizzeria\Domain\Contract\ProductsRepository as ContractProductsRepository;
use PDO;
use PDOStatement;

Class ProductsRepository implements ContractProductsRepository
{

  private PDO $connection;

  public function __construct(PDO $connection) {
    $this->connection = $connection;
  }

  public function products():array
  {
    $sqlQuery = 'SELECT * FROM tb_products';
    $stmt =$this->connection->query($sqlQuery);
    return $this->hydrateResults($stmt);
    
  }

  public function saveProducts(Products $product):bool
  {
    $sqlQuery = "INSERT INTO tb_products (:NAME, :SIZE, :TYPE, :PRICE) VALUES (':NAME', ':SIZE', ':TYPE', ':PRICE')";
    $stmt = $this->connection->prepare($sqlQuery);

    $success = $stmt->execute([
      ':NAME' => $product->getName(),
      ':SIZE' => $product->getSize(),
      ':TYPE' => $product->getType(),
      'PRICE' => $product->getPrice()
    ]);

    return $success;
  }

  public function hydrateResults(PDOStatement $stmt):array
  {
    $result = $stmt->fetchAll();
    $productList = [];

    foreach($result as $product){
      $productList[] = new Products(
        $product['ID'],
        $product['NAME'],
        $product['SIZE'],
        $product['TYPE'],
        $product['PRICE']
      );
    }
    return $productList;
  }
}