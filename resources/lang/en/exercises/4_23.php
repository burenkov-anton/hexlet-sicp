<?php

return [
    'title' => 'Compare the two versions of analyze-sequence',
    'description' => [
        '1' => "Alyssa P. Hacker doesn't understand why analyze-sequence needs to be so complicated. All " .
        "the other analysis procedures are straightforward transformations of the corresponding evaluation " .
        "procedures (or eval clauses) in section 4.1.1. She expected analyze-sequence to look like this:",
        '2' => "Eva Lu Ator explains to Alyssa that the version in the text does more of the work of " .
        "evaluating a sequence at analysis time. Alyssa's sequence-execution procedure, rather than having " .
        "the calls to the individual execution procedures built in, loops through the procedures in order " .
        "to call them: In effect, although the individual expressions in the sequence have been analyzed, " .
        "the sequence itself has not been.",
        '3' => "Compare the two versions of analyze-sequence. For example, consider the common case " .
        "(typical of procedure bodies) where the sequence has just one expression. What work will the " .
        "execution procedure produced by Alyssa's program do? What about the execution procedure produced " .
        "by the program in the text above? How do the two versions compare for a sequence with two expressions?"
    ]
];
