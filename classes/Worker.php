<?php
use Log as Log;

class Worker extends Calculator {
    public $name;
    public $vehicles = [];

    public static function createWorker($name){
        $worker = new Worker();
        $worker->name = $name;
        $message = 'Kreiran radnik '.$name;
        Log::createLog($message);
        return $worker;
    }

    public function vehicleCharge($vehicle){
        $this->vehicles[] = $vehicle;
        $message = 'Naplata putarine za vozilo '.$vehicle->brand.' '.$vehicle->model;
        Log::createLog($message);
    }

    public static function calculatePerWorker($worker)
    {
        $count = 0;
        foreach($worker->vehicles as $vehicle){

            $count += $vehicle->toll;
        }
        return $count;
    }
}

