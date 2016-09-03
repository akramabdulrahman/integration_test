<?php
use \SRC\Order;

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 9/2/2016
 * Time: 5:59 AM
 */
class OrderFactory
{
    public static function build($cart)
    {
        $order = new Order();
        return $order->setItems($cart->getItems());
    }
}