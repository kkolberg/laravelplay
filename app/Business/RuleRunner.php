<?php
namespace App\Business;

use App\Business\IRule;
use App\Model\Order;
use App\Model\Car;
use App\Model\CarRule;

use App\Business\RuleFactory as RuleFactory;

class RuleRunner{
    private $factory;
    
    public function __construct(RuleFactory $ruleFactory)
    {
        $this->factory = $ruleFactory;
    }
    
    public function runRules(Order $order) {
        $rules=CarRule::all()->toArray();
        
        $cars=$order->cars;
        foreach($rules as $key => $rule ) {
            $r=$ruleFactory->getRule($rule->id);

            if($r==null){
                continue;
            }

            $cars=$r->run($order,$rule->values,$cars);
        }

        return $cars;
    }
}

?>