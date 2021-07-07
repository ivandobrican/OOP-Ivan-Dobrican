<?php
use Log as Log;
class Auto{
    public static $types = [1=>'Automobil',2=>'Autobus',3=>'Kamion bez prikolice',4=>'Kamion sa prikolicom'];
    public static $tolls = [1=>240,2=>300,3=>350,4=>450];
    public static function createAuto($type,$properties){
        $auto = new self();
        $auto->type = self::$types[$type];
        foreach ($properties as $key=>$value){
               $auto->$key = $value;

            }
        $auto->toll = self::$tolls[$type];
        $message = 'Kreiran '.self::$types[$type];
        Log::createLog($message);
        return $auto;

    }

    private function calculatePeage($type){

    }
}