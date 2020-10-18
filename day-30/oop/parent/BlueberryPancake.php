<?php

require_once 'Pancake.php';
class BlueberryPancake extends Pancake
{
    public function howToMakePancake ()
    {
        //It calls the method of parent class regardless it was overwritten by the extending class
        parent::howToMakePancake();
        echo 'Preparing jam...<br>';

    }

}
