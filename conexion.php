<?php
require_once("vendor/autoload.php");
use Medoo\Medoo;
$config['database_type'] = 'sqlite';
$config['database_file'] = '../database.db';
$config['loggin'] = true;

$medoo = new Medoo($config); 