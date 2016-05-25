<?php namespace Twk;

require '../vendor/autoload.php';

class Main {
    public function __construct(OrderRepositoryInterface $orders)
    {
        $this->orders = $orders;
    }

    public function process(Order $order)
    {
       $this->orders->logOrder($order);
    }
}

$orderRepository = new CsvOrderRepository('orders.log');
$order = new Order(1, 100);

$main = new Main($orderRepository);
$main->process($order);