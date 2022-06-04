<?php

require_once('Item.php');

class CupDrink extends Item
{
  private const PRICES = [
    'ice cup coffee' => 100,
    'hot cup coffee' => 100,
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
    return 1;
  }
}
