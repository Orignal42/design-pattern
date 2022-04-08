<?php
class HeroShip
{
    public $heroshippoint = 200;

    public function remainningPoint()
    {

        if (isset($_POST['remainingPointsHeroShip'])) {
            if ($_POST['remainingPointsHeroShip'] != '') {
                $heroShipPoints = $_POST['remainingPointsHeroShip'];
                return $heroShipPoints;
            }
        }
    }
}
