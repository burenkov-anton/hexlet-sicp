<?php

return [
    'title' => "Каскадный сумматор",
    'description' => [
        '1' =>
        "На рисунке 3.27 изображен каскадный сумматор (ripple-carry adder), полученный выстраиванием в ряд n сумматоров. " .
        "Это простейшая форма параллельного сумматора для сложения двух n-битных двоичных чисел. " .
        "На входе мы имеем A₁, A₂, A₃, ..., Aₙ и B₁, B₂, B₃, ..., Bₙ — два двоичных числа, подлежащих сложению (каждый из Aₖ и Bₖ имеет значение либо 0, либо 1). " .
        "Схема порождает S₁, S₂, S₃, ..., Sₙ — первые n бит суммы, и C – бит переноса после суммы. " .
        "Напишите процедуру riple-carry-adder, которая бы моделировала эту схему. " .
        "Процедура должна в качестве аргументов принимать три списка по n проводов в каждом (Aₖ, Bₖ и Sₖ), а также дополнительный провод C. " .
        "Главный недостаток каскадных сумматоров в том, что приходится ждать, пока сигнал распространится. " .
        "Какова задержка, требуемая для получения полного вывода n-битного каскадного сумматора, выраженная в зависимости от задержек И-, ИЛИ-элементов и инверторов?",
        '2' =>
        "Рис. 3.27. Каскадный сумматор для n-битных чисел."
    ]
];
