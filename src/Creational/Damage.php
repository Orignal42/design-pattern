<?php


class Damage implements IDamage
{
    public function setDamage($heroShipPoints,$degatEnemyShip){

        $heroShipPoints = $heroShipPoints - $degatEnemyShip;
        
    }
}