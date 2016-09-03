<?php
use SRC\Order;
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 9/2/2016
 * Time: 5:51 AM
 */
class OrderTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function Order_can_contain_many_items(){
        $order = new Order();
        assertEmpty($order->getItems());
        assertInternalType("array",$order->getItems());
        $order->setItems([new Item(),new Item(),new Item(),new Item()]);
        assertEquals(4,count($order->getItems()));
        //it should be clear now that order can have multiple elements , to verify that Objects of class Item can be added
        $item=$order->getItems()[0];
        assertInstanceOf(Item::class,$item);
    }
    /**@test */
    public function Order_must_have_an_editable_status(){
        $order = new Order();
        assertEquals('PENDING',$order->getStatus());
        assertEquals($order->getStatus(),$order->setStatus('PAID'));
    }
    /**@test */
    public function Cart_must_be_converted_to_Order_to_start_the_checkout_process(){
        $cart= new Cart();
        $order = OrderFactory::build($cart);
        assertInstanceOf("Order",$order);
        $order->checkout();

    }
}
