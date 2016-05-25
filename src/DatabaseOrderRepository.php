<?php namespace Twk;

class DatabaseOrderRepository implements OrderRepositoryInterface {

    protected $connection;

    public function connect($username, $password)
    {
        $this->connection = new DatabaseConnection($username, $password);
    }

    public function logOrder(Order $order)
    {
        var_dump("Log order {$order->id} in database.");
        $this->connection->run('insert into orders values (?, ?)', [
            $order->id,
            $order->amount,
        ]);
    }
}