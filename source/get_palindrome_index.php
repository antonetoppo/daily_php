<?php
/**
 * Created by PhpStorm.
 * User: antone
 * Date: 18/03/19
 * Time: 21:43
 */

/**
 * Check if given input is a palindrome string or not?
 *
 * @param string $s
 * @return int
 * @author Antone
 */
function palindromeIndex($s)
{
    $output = -1;
    if (empty($s) || !is_string($s))
        return $output;

    $length = strlen($s);

    if ($length < 1 || $length > 100005)
        return $output;

    $limit = intval($length / 2);
    for ($i = 0; $i < $limit; $i++) {
        if ($s[$i] == $s[$length - 1 - $i])
            continue;
        $tempString1 = substr($s, 0, $i) . substr($s, $i + 1);
        $tempString2 = substr($s, 0, $length - 1 - $i) . substr($s, ($length - 1 - $i) + 1);
        if ($tempString1 == strrev($tempString1))
            $output = $i;
        else if ($tempString2 == strrev($tempString2))
            $output = $length - 1 - $i;

        break;
    }

    return $output;
}


echo palindromeIndex('aaab') . "<br>";
echo palindromeIndex('baa') . "<br>";
echo palindromeIndex('aaa') . "<br>";