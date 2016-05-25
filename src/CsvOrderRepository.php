<?php namespace Twk;

class CsvOrderRepository implements OrderRepositoryInterface {

    private $logFile;

    public function __construct($logFile)
    {
        $this->logFile = __DIR__ . "/storage/$logFile";
    }

    public function logOrder(Order $order)
    {
        $fp = fopen($this->logFile, 'w');
        fputcsv($fp, [
            'id' => $order->id,
            'amount' => $order->amount,
        ]);
        fclose($fp);
    }
}