<?php

include_once (__DIR__ . '/vendor/autoload.php');

$app = new \BrunoFerreiraTBA\Itau\Itau();

echo $app->gerar();