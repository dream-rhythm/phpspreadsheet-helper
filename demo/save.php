<?php

require __DIR__ . '/_config.php';

$filepath = \dream_rhythm\phpSpreadsheet\Helper::newSpreadsheet()
    ->addRow(['Add A1'])
    ->save("/tmp/save");

echo "Successful Wrtie to: {$filepath}";