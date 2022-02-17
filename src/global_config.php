<?php

use Dotenv\Dotenv;

const NL  = "\n";
const TAB = "\t";
const DS  = DIRECTORY_SEPARATOR;

define('__ROOT__', dirname(__DIR__));

// eeldefineeritud väärtused ".env" failis kasutamiseks.
$_ENV['CWD'] = getcwd();

$dotEnv = Dotenv::createImmutable(__ROOT__);
$dotEnv->load();
