<?php

require __DIR__ . '/_config.php';

$filepath = __DIR__ . '/import.xlsx';

\dream_rhythm\phpSpreadsheet\Helper::newSpreadsheet($filepath)
    ->addRow(['Modified A1'])
    ->output();