<?php

/* ------------------------ *\
    Example 1, while loop
\* ------------------------ */
/*
    1. The code
    2. The output
*/

require '../combinations.class.php';


Combinations::with("abc"); //Our charset
Combinations::length(3);   //Max length of output (1 => c, 2 => cc, 3 => ccc, ...)

while(($combination = Combinations::next())) //Get next combination
{ 
    echo $combination . PHP_EOL;
}



/* ------------------------ *\
    Output
\* ------------------------ */
/*
    a
    b
    c
    aa
    ab
    ac
    ba
    bb
    bc
    ca
    cb
    cc
    aaa
    aab
    aac
    aba
    abb
    abc
    aca
    acb
    acc
    baa
    bab
    bac
    bba
    bbb
    bbc
    bca
    bcb
    bcc
    caa
    cab
    cac
    cba
    cbb
    cbc
    cca
    ccb
    ccc
*/

?>