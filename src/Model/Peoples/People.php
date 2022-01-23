<?php

namespace Pizzeria\Model\Peoples;

require './vendor/autoload.php';

use Pizzeria\Model\Peoples\Cpf;
use Pizzeria\Model\Peoples\Address;

class People
{
  private string $name;
  private int $age;
  private string $email;
  private string $password;
  private Cpf $cpf;
  private Address $address;

  public function __construct(
    string $name,
    string $birthDate,
    string $email,
    string $password,
    Address $address,
    Cpf $cpf
  ) {
    $this->name = $name;
    $this->age = $this->calculateAge($birthDate);
    $this->email = $email;
    $this->password = $this->setPassword($password);
    $this->cpf = $cpf;
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

  public function getCpf()
  {
    return $this->cpf;
  }

  public function getEmail()
  {
    return $this->email;
  }


  public function getPassword()
  {
    return $this->password;
  }


  public function setPassword($password): self
  {
    $this->password = password_hash($password, PASSWORD_DEFAULT);

    return $this;
  }

  private function calculateAge(string $birthDate): int
  {
    $date = date('Y-m-d', strtotime($birthDate));
    list($year, $mouth, $day) = explode('-', $date);

    $currentDate = date('Y');
    $age = $currentDate - $year;

    if (date('m') <= $mouth) {
      $age--;

      if (date('m') == $mouth && date('d') <= $day) {
        $age--;
      }
    }
    return $age;
  }
}
