<?php
namespace SRC;
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 9/2/2016
 * Time: 5:51 AM
 */
class Order
{
    private $items = [],
        $status = "PENDING";

    public function setItems($items)
    {
        return $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setStatus($status)
    {
        return $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}