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
$main = new Main($orderRepository);
$order = new Order();

$main->process($order);