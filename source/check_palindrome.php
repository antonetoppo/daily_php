<?php
/**
 * Created by PhpStorm.
 * User: antone
 * Date: 18/03/19
 * Time: 00:50
 */

/**
 * Check if given input is a palindrome string or not?
 *
 * @param string $input
 * @return bool
 * @author Antone
 */
function isPalindrome($input)
{
    if (empty($input) || !is_string($input)) {
        echo "Invalid input provided!\n";
        return false;
    }

    $sanitizedInput = strtolower($input);
    $length = strlen($input);

    $limit = intval(($length % 2 == 0) ? $length / 2 : (int)$length / 2 - 1);

    for ($i = 0; $i <= $limit; $i++) {
        if ($sanitizedInput[$i] != $sanitizedInput[$length - 1 - $i]) {
            echo $input . ": is not a palindrome.\n";
            return false;
        }
    }

    echo $input . ": is a palindrome.\n";
    return true;
}

isPalindrome('hello');
isPalindrome('Woow');
isPalindrome('tattarrattat');
