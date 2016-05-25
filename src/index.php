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

// delete orders.log
if (file_exists(__DIR__ . '/storage/orders.log')) {
    unlink(__DIR__ . '/storage/orders.log');
}

// $orderRepository = new CsvOrderRepository('orders.log');
$orderRepository = new DatabaseOrderRepository();
$main = new Main($orderRepository);

$order = new Order(1, 100);
$main->process($order);

$order2 = new Order(2, 200);
$main->process($order2);

$order3 = new Order(3, 300);
$main->process($order3);
