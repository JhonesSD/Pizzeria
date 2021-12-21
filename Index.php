<?php

use Pizzeria\Model\Peoples\Address;
use Pizzeria\Model\Peoples\People;

require './vendor/autoload.php';

$client = new People('jhones', new DateTime('1998-04-29'), new Address('joao zarpelon', '143b', 'costeira', '83015-183'));

$client->getName();
echo $client->getAddress()->setStreet('Paulo')->getStreet();
