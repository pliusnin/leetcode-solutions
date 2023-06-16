<?php

class Solution {
    private static $BRACKETS = ['(' => 1, '{' => 2, '[' => 3, ')' => -1, '}' => -2, ']' => -3];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        // convert string to array
        $arr = str_split($s);
        // get a count of chars to use later
        $arrCount = strlen($s)-1;
        // $acc is our FILO-like stack to manage brackets. Let's push the first element initially
        $acc[] = self::$BRACKETS[$arr[$arrCount]];

        // loop over the rest elements
        for ($i = $arrCount-1; $i >= 0; $i--) {
            // if bracket is opposite to close state
            if (self::$BRACKETS[$arr[$i]] > 0) {
                // and it doesn't relate to previous bracket value, which we pop from $acc
                if (array_pop($acc) + self::$BRACKETS[$arr[$i]] != 0) {
                    // stop the loop, string is not valid
                    return false;
                }
            } else {
                // otherwise continue pushing to $acc
                $acc[] = self::$BRACKETS[$arr[$i]];
            }
        }

        return !$acc;
    }
}
