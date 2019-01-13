<?php

include_once (__DIR__ . '/vendor/autoload.php');

$app = new \BrunoFerreira\Itau\Itau();

echo $app->gerar();