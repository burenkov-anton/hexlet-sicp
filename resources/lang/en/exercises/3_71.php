<?php

return [
    'title' => 'Ramanujan numbers',
    'description' =>
        "Numbers that can be expressed as the sum of two cubes in more than one way are sometimes called Ramanujan numbers, in honor of the mathematician Srinivasa Ramanujan. " .
        "Ordered streams of pairs provide an elegant solution to the problem of computing these numbers. " .
        "To find a number that can be written as the sum of two cubes in two different ways, we need only generate the stream of pairs of integers (i,j) weighted according to the sum i³ + j³ (see exercise 3.70), then search the stream for two consecutive pairs with the same weight. " .
        "Write a procedure to generate the Ramanujan numbers. The first such number is 1,729. What are the next five?"
];
