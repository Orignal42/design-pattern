<?php

class EnemyDirector
{

    public function getEnemy()
    {
            $array=[];
            $enemies = scandir(__DIR__."/Class");
            foreach ($enemies as $enemy){
                if($enemy !='..'&& $enemy!='.'){
                $enemyClass="\\Enemies\\".str_replace(".php", "", $enemy);
                array_push($array,$enemyClass);
                }

                
                return new $array;
            }
        }
    
}