<?php

declare(strict_types=1);

require_once(__DIR__ . '/../../lib/Drink.php');

use PHPUnit\Framework\TestCase;

final class DrinkTest extends TestCase
{
  public function testGetPrice(): void
  {
    $drink = new Drink('cola');
    $this->assertSame(150, $drink->getPrice());
  }

  public function testGetName(): void
  {
    $drink = new Drink('cola');
    $this->assertSame('cola', $drink->getName());
  }

  public function testGetCupNumber(): void
  {
    $drink = new Drink('cola');
    $this->assertSame(0, $drink->getCupNumber());
  }
}
