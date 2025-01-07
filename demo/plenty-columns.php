<?php

require __DIR__ . '/_config.php';

$row = [];
for ($i=1; $i <= 100 ; $i++) { 
    $value = \dream_rhythm\phpSpreadsheet\Helper::num2alpha($i);
    $row[] = $value;
}

\dream_rhythm\phpSpreadsheet\Helper::newSpreadsheet()
    ->addRow($row)
    ->output();