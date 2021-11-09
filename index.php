<?php
//задание 1,2,3,4
class Product { //Класс продукта
    public $id;
    public $name;
    public $image;
    public $price;

    public function __construct($id, $name, $image, $price) {
        this->id = $id;
        this->name = $name;
        this->image = $image;
        this->price = $price;
    }

    public function render(){ 
        
    }
}

class ProductOnSale extends Product { //Класс продукта на распродаже
    public $discount;

    public function __construct($discount){
        parent::__construct();
        this->discount = $discount;
    }

    public function priceWithDiscount($price) {
        return this->price = $price - ($discount / 100) * $price;
    }
}

//Задание 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo();//1 
    $a2->foo();//2
    $a1->foo();//3
    $a2->foo();//4  т.к. $x статическое свойство, то принадлежит классу А и при каждом вызове foo() увеличивается на 1, не смотря на то, что а1 и а2 разные экземпляры класса А

//Задание 6
class A {
    public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    class B extends A {
    }
    $a1 = new A();
    $b1 = new B();
    $a1->foo();//1
    $b1->foo();//1
    $a1->foo();//2
    $b1->foo();//2 т.к. класс В наследник от A, то при вызове $b1->foo() $x увеличивается в дочернем классе, а при $a1->foo() $x увеличивается в родительском

//Задание 7
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
        }
    }
    class B extends A {
    }
    $a1 = new A;
    $b1 = new B;
    $a1->foo();//1
    $b1->foo();//1
    $a1->foo();//2
    $b1->foo();//2 тоже самое как и в Задании 6, только новый класс создаётся без (), т.к. они необязательны если не конструтора и в него не нужно передавать обязательные свойства