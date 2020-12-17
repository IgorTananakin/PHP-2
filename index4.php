<?php

class Customer
{
    protected $name;
    protected $orders;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // public function setOrders(array $orders) {
    //     $this->orders = $orders;
    // }

    public function addOrder(Order $order) {
        $this->orders[] = $order;
    }

    // public function getOrders() {
    //     return $this->orders;
    // }
}

class Order
{
    protected $customer;
    protected $title;

    public function __construct($title, $customer) {
        $this->customer = $customer;
        $this->title = $title;
    }

    // public function getCustomer() {
    //     return $this->customer;
    // }
}

$customer = new Customer("Alex");
 $customer->addOrder(new Order('order1', $customer->getName()));
$customer->addOrder(new Order('order2', $customer->getName()));

echo '<pre>';
var_dump($customer);
