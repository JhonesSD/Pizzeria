<?php

namespace Pizzeria\Model\Peoples;

require './vendor/autoload.php';

use DateTime;
use Pizzeria\Model\Peoples\Address;

class People
{
  private string $name;
  private DateTime $age;
  private Address $address;

  public function __construct(string $name, DateTime $age, Address $address)
  {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getAddress()
  {
    return $this->address;
  }
}
