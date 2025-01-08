<?php

require __DIR__ . '/_config.php';

\dream_rhythm\phpSpreadsheet\Helper::newSpreadsheet()
    ->addRow(['ID', 'Name', 'Email'])
    ->addRows([
        ['1', 'Nick','helloworld@example.com'],
        ['2', 'Eric','eric@.....'],
    ])
    ->output('My Excel');