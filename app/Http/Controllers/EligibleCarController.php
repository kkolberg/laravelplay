<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuleRunner as RuleRunner;

class EligibleCarController extends Controller
{
        private $runner;
    
    public function __construct(RuleRunner $ruleRunner)
    {
        $this->runner = $ruleRunner;
    }

    public function filter(Request $reqeust){

    }
}
