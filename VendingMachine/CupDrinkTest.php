<?php

declare(strict_types=1);

require_once(__DIR__ . '/../../lib/CupDrink.php');

use PHPUnit\Framework\TestCase;

final class CupDrinkTest extends TestCase
{
  public function testGetPrice(): void
  {
    $drink = new CupDrink('ice cup coffee');
    $this->assertSame(100, $drink->getPrice());
  }

  public function testGetName(): void
  {
    $drink = new CupDrink('ice cup coffee');
    $this->assertSame('ice cup coffee', $drink->getName());
  }

  public function testGetCupNumber(): void
  {
    $drink = new CupDrink('ice cup coffee');
    $this->assertSame(1, $drink->getCupNumber());
  }
}
