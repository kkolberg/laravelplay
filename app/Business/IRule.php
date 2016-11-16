<?php
namespace App\Business;

use App\Model\Order;

interface IRule{
    public function run(Order $order, $values, $cars);
}
?>