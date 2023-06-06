<?php

/**
 * Submitted with 12ms runtime
 */
class Solution {

    /**
     * @param Integer[][] $coordinates
     * @return Boolean
     */
    function checkStraightLine($coordinates) {
        $first = array_pop($coordinates);
        $last = array_pop($coordinates);
        $dx = $first[0] - $last[0];
        $dy = $first[1] - $last[1];

        for ($i = count($coordinates)-1; $i >= 0; $i--) {
            // if delta X is 0, then all x-coordinates should be the same
            if ($dx == 0) {
                if ($coordinates[$i][0] != $first[0]) return false;
                continue;
            }

            // if delta Y is 0, then all y-coordinates should be the same
            if ($dy == 0) {
                if ($coordinates[$i][1] != $first[1]) return false;
                continue;
            }

            // using canonical to calculate is selected coordinate on the straight line
            if (($coordinates[$i][0] - $last[0])/$dx != ($coordinates[$i][1] - $last[1])/$dy) {
                return false;
            }
        }

        return true;
    }
}
