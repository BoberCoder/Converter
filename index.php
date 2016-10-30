<?php

require_once __DIR__ . '/vendor/autoload.php';

$mk = new \Vendor\Converter\Species\ConvertToDB('mile to km',1.6);

echo $mk->convert(60)."\n";