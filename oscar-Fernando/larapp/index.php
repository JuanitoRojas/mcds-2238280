<?php
 
require __DIR__ . '/vendor/autoload.php';
 
use Carbon\Carbon;
 
printf("Fecha y hora del sistema: %s", Carbon::now());