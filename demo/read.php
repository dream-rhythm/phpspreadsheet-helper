<?php

require __DIR__ . '/_config.php';

$filepath = __DIR__ . '/import.xlsx';

$data = \dream_rhythm\phpSpreadsheet\Helper::newSpreadsheet($filepath)
    ->getRows();

print_r($data);