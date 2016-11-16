<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Business\RuleFactory;
use App\Business\Rules\TotalWeight;

class RuleFactoryTest extends TestCase
{
    
    public function testShouldReturnNull()
    {
        $tw = $this->getMockBuilder(TotalWeight::class)->getMock();
        $factory = new RuleFactory($tw);
        
        $result=$factory->getRule(-1);
        $this->assertNull($result);
    }
}

?>