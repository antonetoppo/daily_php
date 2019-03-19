<?php
/**
 * Created by PhpStorm.
 * User: antone
 * Date: 19/03/19
 * Time: 23:14
 */

/**
 * Get word count from camelCase string
 *
 * @param string $s
 * @return int
 * @author Antone
 */
function camelcase($s) {
    if (empty($s) || !is_string($s))
        return 0;
    $length = strlen($s);
    if ($length < 1 || $length > 100000)
        return 0;
    preg_match_all('/[A-Z]+/m', $s, $matches, PREG_SET_ORDER, 0);

    $wordCount = count($matches) + 1;
    if (!empty($matches) && strpos($s, $matches[0][0]) == 0)
        return 0;
    return $wordCount;
}