<?php

namespace Pizzeria\Domain\Model\People;

class Address
{
  private string $street;
  private string $numberHouse;
  private string $district;
  private string $cep;

  public function __construct(string $street, string $numberHouse, string $district, string $cep)
  {
    $this->street = $street;
    $this->numberHouse = $numberHouse;
    $this->district = $district;
    $this->cep = $cep;
  }

  public function getStreet()
  {
    return $this->street;
  }

  public function setStreet($street): self
  {
    $this->street = $street;
    return $this;
  }

  public function getNumberHouse()
  {
    return $this->numberHouse;
  }

  public function setNumberHouse($numberHouse): self
  {
    $this->numberHouse = $numberHouse;
    return $this;
  }

  public function getDistrict()
  {
    return $this->district;
  }

  public function setDistrict($district): self
  {
    $this->district = $district;
    return $this;
  }

  public function getCep()
  {
    return $this->cep;
  }

  public function setCep($cep): self
  {
    $this->cep = $cep;
    return $this;
  }
}
