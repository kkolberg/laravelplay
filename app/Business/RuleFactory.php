<?php
namespace App\Business;

use App\Business\IRule;

use App\Business\Rules\TotalWeight as TotalWeight;

class RuleFactory {
    private $totalWeightRule;
    
    public function __construct(TotalWeight $totalweight)
    {
        $this->totalWeightRule = $totalweight;
    }
    
    public function getRule($rule_id){
        $rule=null;
        
        switch ($rule_id) {
            case 0:
                $rule = $this->totalWeightRule;
                break;
            default:
                $rule=null;
                break;
            
        }
    
        return $rule;
    }
}
?>