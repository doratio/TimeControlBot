<?php
require_once 'Logger.php';

class FLogger extends Logger
{
    public $file;
    public $lines = [];

    public function __construct($fn)
    {
        $this->file = fopen($fn, 'w+');
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    public function log($textLog)
    {
        fputs($this->file,date('F Y H:i:s')."\n".$textLog . "\n\n");
    }
}