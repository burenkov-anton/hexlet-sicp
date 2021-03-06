<?php

return [
    'title' => "Print-queue procedure",
    'description' => [
        '1' =>
        "Ben Bitdiddle decides to test the queue implementation described above. He types in the procedures to the Lisp interpreter and proceeds to try them out:",
        '2' =>
        "''It's all wrong!'' he complains. ''The interpreter's response shows that the last item is inserted into the queue twice. " .
        "And when I delete both items, the second b is still there, so the queue isn't empty, even though it's supposed to be.'' " .
        "Eva Lu Ator suggests that Ben has misunderstood what is happening. ''It's not that the items are going into the queue twice,'' she explains. " .
        "''It's just that the standard Lisp printer doesn't know how to make sense of the queue representation. If you want to see the queue printed correctly, you'll have to define your own print procedure for queues.'' " .
        "Explain what Eva Lu is talking about. In particular, show why Ben's examples produce the printed results that they do. " .
        "Define a procedure ",
        '3' =>
        " that takes a queue as input and prints the sequence of items in the queue.",
    ],
];
