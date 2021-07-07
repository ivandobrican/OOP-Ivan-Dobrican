<?php

class Station extends Calculator {
    public $name = '';
    public $workers = [];
    private static $instance = null;

    private function __construct($name)
    {
        $this->name = $name;
    }

    public static function createStation($name){
        if(self::$instance === null){
            self::$instance = new Station($name);
        }
        return self::$instance;
    }

    public function addWorker($worker){
        $this->workers[] = $worker;
    }

    public static function calculateTotal($station){
        $count = 0;
            foreach ($station->workers as $worker){
                foreach ($worker->vehicles as $vehicle) {
                    $count += $vehicle->toll;
                }
            }
            return $count;
    }

}

