<?php

/* ------------------------ *\
    Example 2, for loop
\* ------------------------ */
/*
    1. The code
    2. The output
*/

require '../combinations.class.php';


Combinations::with("abc"); //Our charset

for ($i=0; $i < 39; $i++)
{ 
    echo Combinations::get($i) . PHP_EOL; 
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