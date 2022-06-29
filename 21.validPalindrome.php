<?php   

/* Valid Palindrome

Solution
A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

Given a string s, return true if it is a palindrome, or false otherwise.

 

Example 1:

Input: s = "A man, a plan, a canal: Panama"
Output: true
Explanation: "amanaplanacanalpanama" is a palindrome.
Example 2:

Input: s = "race a car"
Output: false
Explanation: "raceacar" is not a palindrome.      */


class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        if (empty($s)) {
            return false;
        }

        $s = preg_replace("/[^A-Za-z0-9]/", "", strtolower($s));

        $length = strlen($s);

        if ($length == 1) {
            return true;
        }

        $reverceStrign = "";
        for ($i = $length - 1; $i >= 0; $i--) {
            $reverceStrign .= $s[$i];
        }

        if ($s === $reverceStrign) {
            return true;
        }

        return false;
    }
}