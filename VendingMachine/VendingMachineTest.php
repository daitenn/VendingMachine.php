<?php

declare(strict_types=1);

require_once(__DIR__ . '/../../lib/VendingMachine.php');

use PHPUnit\Framework\TestCase;

final class VendingMachineTest extends TestCase
{
  public function testDepositCoin(): void
  {
    $vendingMachine = new VendingMachine();
    $this->assertSame(0, $vendingMachine->depositCoin(0));
    $this->assertSame(0, $vendingMachine->depositCoin(150));
    $this->assertSame(100, $vendingMachine->depositCoin(100));
  }

  public function testPressButton(): void
  {
    $cider = new Drink('cider');
    $cola = new Drink('cola');
    $hotCupCoffee = new CupDrink('hot cup coffee');
    $vendingMachine = new VendingMachine();

    //お金が投入されていない場合は購入できない
    $this->assertSame('', $vendingMachine->pressButton($cider));

    //100円を投入した時サイダーを購入できる
    $vendingMachine->depositCoin(100);
    $this->assertSame('cider', $vendingMachine->pressButton($cider));

    //100円を投入した時コーラは購入できない
    $vendingMachine->depositCoin(100);
    $this->assertSame('', $vendingMachine->pressButton($cola));

    //200円の時コーラが購入できる
    $vendingMachine->depositCoin(100);
    $this->assertSame('cola', $vendingMachine->pressButton($cola));

    //カップを投入されていない場合は購入できない
    $vendingMachine->depositCoin(100);
    $this->assertSame('', $vendingMachine->pressButton($hotCupCoffee));

    //カップを入れた場合は購入できる
    $vendingMachine->addCup(1);
    $this->assertSame('hot cup coffee', $vendingMachine->pressButton($hotCupCoffee));
  }

  public function testAddCup()
  {
    $vendingMachine = new VendingMachine();
    $this->assertSame(99, $vendingMachine->addCup(99));
    $this->assertSame(100, $vendingMachine->addCup(1));
    $this->assertSame(100, $vendingMachine->addCup(1));
  }
}
