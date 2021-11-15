<?php
//Задание 1
abstract class Product
{
    abstract public function __construct(float $price);
    abstract protected function getProfit();
    public function showProfit()
    {
        echo $this->getProfit();
    }
}

class VirtualProduct extends Product {
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    protected function getProfit()
    {
        return $this->price;
    }
}

class BulkProduct extends Product {
    public function __construct(float $price, float $totalWeight = 0)
    {
        $this->price = $price;
        $this->totalWeight = $totalWeight;
    }

    protected function getProfit()
    {
        return $this->totalWeight * $this->price;
    }
}

class PieceProduct extends Product {
    public function __construct(float $price, int $quantity = 0)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

    protected function getProfit()
    {
        return $this->quantity * $this->price;
    }
}

$Virtual = new VirtualProduct(15);
$Virtual->showProfit();
$Bulk  = new BulkProduct(23, 23.3);
$Bulk->showProfit();
$Piece = new PieceProduct(16, 22);
$Piece->showProfit();

//Задание 2

trait Singleton {
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
    public static function getInstance()
    {
            if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
class SingleClass {
    use Singleton;
}
