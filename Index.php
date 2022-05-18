<?php

require './vendor/autoload.php';

use Pizzeria\Domain\Model\Products\Products;
use Pizzeria\Domain\Service\Database\Connection;
use Pizzeria\Domain\Service\Repositorys\ProductsRepository;



$connection = Connection::myConnection();
$tst = new ProductsRepository($connection);

$delete = $tst->products()['ID'] = 5;
$tst->deleteProducts($delete);
var_dump($tst->products());
