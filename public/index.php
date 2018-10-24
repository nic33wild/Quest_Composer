<?php

use HelloWorld\SayHello;

require_once  __DIR__.'/../vendor/autoload.php';

use src\Wcs\Hello;

$hello = new Hello();
$helloworld = new SayHello();

echo $hello->talk();
echo $helloworld::world();
#var_dump($hello);
#var_dump($helloworld);