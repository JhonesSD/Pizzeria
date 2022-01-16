<?php

require './vendor/autoload.php';

use Pizzeria\Model\Peoples\Address;
use Pizzeria\Model\Peoples\Cpf;
use Pizzeria\Model\Peoples\People;

$client = new People('jhones', '1998-04-29', new Address('joão zarpelon', '168', 'costeira', '83015-190'), new Cpf('03194808281'));

echo $client->getAge();
