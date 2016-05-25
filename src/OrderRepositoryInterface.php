<?php namespace Twk;

interface OrderRepositoryInterface {
    public function logOrder(Order $order);
}