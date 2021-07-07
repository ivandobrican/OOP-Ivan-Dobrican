<?php

class Log{
    public static function createLog($message){
        $log = '['.date("Y.m.d H:i:s").'] '.$message.PHP_EOL;
        file_put_contents('action.log', $log, FILE_APPEND);
    }
}