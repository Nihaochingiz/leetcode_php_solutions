<?php

/*Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.*/

function isAnagram($s, $t)
    {

        if (strlen($s) != strlen($t)) return false;

        for ($i = 0; $i < strlen($s); $i++) {
            $first[$s[$i]]++;
        }

        for ($i = 0; $i < strlen($t); $i++) {
            $second[$t[$i]]++;
        }

        return array_diff_assoc($first, $second) ? false : true;
    }