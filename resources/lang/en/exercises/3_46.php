<?php

return [
    'title' => 'Draw a timing diagram',
    'description' => [
        '1' =>
        "Suppose that we implement test-and-set! using an ordinary procedure as shown in the text, without attempting to make the operation atomic. " .
        "Draw a timing diagram like the one in figure 3.29 to demonstrate how the mutex implementation can fail by allowing two processes to acquire the mutex at the same time.",
        '2' =>
        "Figure 3.29:  Timing diagram showing how interleaving the order of events in two banking withdrawals can lead to an incorrect final balance.",
    ],
];
