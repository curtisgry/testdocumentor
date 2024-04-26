<?php
/**
 * Test files for documentation gh pages
 * 
 * @package Toast
 */

/**
 * Adds two numbers and returns the result.
 *
 * @param int|float $num1 The first number.
 * @param int|float $num2 The second number.
 * @return int|float The sum of the two numbers.
 */
function add($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Multiplies two numbers and returns the result.
 *
 * @param int|float $num1 The first number.
 * @param int|float $num2 The second number.
 * @return int|float The product of the two numbers.
 */
function multiply($num1, $num2) {
    return $num1 * $num2;
}

/**
 * Checks if a number is even.
 *
 * @param int $num The number to check.
 * @return bool True if the number is even, false otherwise.
 */
function even($num) {
    return $num % 2 === 0;
}
