<?php
namespace App\Business\Rules;

use App\Model\Order;
use App\Business\IRule;

class TotalWeight implements IRule {
    public function run(Order $order, $values, $cars){
        return $cars;
    }
}
?>