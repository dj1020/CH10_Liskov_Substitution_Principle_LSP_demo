<?php namespace Twk;

class DatabaseOrderRepository implements OrderRepositoryInterface {

    protected $connector;

    public function __construct(DatabaseConnector $connector)
    {
        $this->connector = $connector;
    }

    public function connect()
    {
        return $this->connector->bootConnection();
    }

    public function logOrder(Order $order)
    {
        var_dump("Log order {$order->id} in database.");

        $connection = $this->connect();

        $connection->run('insert into orders values (?, ?)', [
            $order->id,
            $order->amount,
        ]);
    }
}