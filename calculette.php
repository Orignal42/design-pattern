<?php

interface ICalculation {
    
    public function result($a, $b);
    
}

abstract class AbstractOperationFactory {
    
    public function createCalculation(ICalculation $op)
    {
        return new $op;
    }
}

class AdditionFactory extends AbstractOperationFactory {
    
    public function make()
    {
        $additionCalculation = new AdditionCalculation;
        return $additionCalculation;
    }
}

class SoustractionFactory extends AbstractOperationFactory {
    
    public function make()
    {
        $SoustractionCalculation = new SoustractionCalculation;
        return new $SoustractionCalculation;
    }
}

class AdditionCalculation implements iCalculation {
    
    //public $type = "addition";
    public function result($a, $b) {
        $result = $a + $b;
        return $result;
    }
    
}

class SoustractionCalculation implements iCalculation {
    
    //public $type = "soustraction";
    public function result($a, $b) {
        $result = $a - $b;
        return $result;
    }
}

class CalculationDirector {
    
    public function getType($calculationType)
    {
        $class = ucfirst($calculationType)."Factory";
        return new $class;
    }
}

 
function client()
{
    $calculationType = "addition";
    $a = 11;
    $b = 5;
    
    // TODO
    $calcul = new CalculationDirector;
    $factory = $calcul->getType($calculationType);
    $type = $factory->make();
    $result = $type->result($a, $b);
    
    echo $result;
}
client();