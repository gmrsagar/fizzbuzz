<?php

/**
 * @return array
 * Iterate over specified numbers, print respective strings
 */
function foobar()
{
    $output = [];

    for ($i=1; $i<=100; $i++) {
        if ($i%15 == 0) {
            $output[] = "foobar";
            continue;
        } elseif ($i%3==0) {
            $output[] = "foo";
            continue;
        } elseif ($i%5==0) {
            $output[] = "bar";
            continue;
        }
        $output[] = $i;
    }

    return $output;
}

$output = implode(', ', foobar());
echo $output;
