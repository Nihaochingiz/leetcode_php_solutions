<?php   
/*Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.



 

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]    

Учитывая массив целых чисел nums и целочисленное целевое значение, верните индексы двух чисел таким образом, чтобы они складывались в целевое значение.

Вы можете предположить, что каждый ввод будет иметь ровно одно решение, и вы не можете использовать один и тот же элемент дважды.

Вы можете вернуть ответ в любом порядке.*/

  function twoSum($nums, $target) {
        echo count($nums) . "\n";
        echo $nums[0] . "\n";
        for ($i = 0; $i < count($nums);$i++) {
            for ($j = $i  + 1; $j < count($nums); $j++) {
                if($nums[$i] + $nums[$j] == $target) {
                    return array($i,$j);
                }
            }
           
        }
        return array(0,0);
    }