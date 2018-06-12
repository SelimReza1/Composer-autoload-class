<?php
/**
 * Created by PhpStorm.
 * User: Selim Reza
 * Date: 6/12/2018
 * Time: 3:50 AM
 */
require 'vendor/autoload.php'; //just one file need to require in composer autoloading system

use countries\Sydney;
use countries\Melbourne;
use countries\Dhaka;
use countries\Chittagong;
use countries\India;

$sydney = new Sydney();
$dhaka = new Dhaka();
$chittagong = new Chittagong();
$melbourne = new Melbourne();
$india = new India();
