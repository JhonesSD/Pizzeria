<?php

namespace Pizzeria\Model\Order;

require './vendor/autoload.php';

use DateTime;
use Pizzeria\Model\Peoples\People;
use Pizzeria\Model\Products\PizzaSaize;

class Order
{
  private People $clientName;
  private DateTime $date;
  private $orderList = [];
  private PizzaSaize $price;
}
