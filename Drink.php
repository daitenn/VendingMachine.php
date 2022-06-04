<?php

require_once('Item.php');

class Drink extends Item
{
  private const PRICES = [
    'cider' => 100,
    'cola' => 150,
  ];

  public function __construct(private string $name)
  {
    parent::__construct($name);
  }

  public function getPrice(): int
  {
    return self::PRICES[$this->name];
  }

  public function getCupNumber(): int
  {
    return 0;
  }
}
