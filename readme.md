Combinations.php
================

**What?**
A class that can generates every combination for a specific charset.


Usage
==========

 1. Download the file (combinations.class.php)
 2. Include it (`require combination.class.php`)


Examples
========
More example can be found in `examples/`

```php
<?php

require '../combinations.class.php';


Combinations::with("abc"); //Our charset
Combinations::length(3);   //Max length of output (1 => c, 2 => cc, 3 => ccc, ...)

while(($combination = Combinations::next())) //Get next combination
{ 
    echo $combination . PHP_EOL;
}

// -- Output --
/*
    a
    b
    c
    aa
    ab
    ac
    ba
    ...
    cba
    cbb
    cbc
    cca
    ccb
    ccc
*/
    
?>
```


Functions
=========
 - `Combinations::with((string/array) $charset)`
 - `Combinations::length((int) $maxLength)`
 - `Combinations::next()`
 - `Combinations::get((int) $position)`
 

Todo
====
`null` :D