<?php namespace Twk;

class CsvOrderRepository implements OrderRepositoryInterface {
    public function logOrder(Order $order)
    {
        var_dump('log order in csv file');
    }
}