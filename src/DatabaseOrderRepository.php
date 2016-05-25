<?php namespace Twk;

class DatabaseOrderRepository implements OrderRepositoryInterface {
    public function logOrder(Order $order)
    {
        var_dump("Log order {$order->id} in database.");
    }
}