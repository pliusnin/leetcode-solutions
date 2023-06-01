<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $strLength = strlen($s);

        if ($strLength <= 1) {
            return $strLength;
        }

        $lettersArr = str_split($s);
        $sBuffer = $lettersArr[0];
        $longest = 1;

        for ($i = 1; $i < $strLength; $i++) {
            $dupPos = strpos($sBuffer, $lettersArr[$i]);
            $sBuffer .= $lettersArr[$i];

            if (false !== $dupPos) {
                $sBuffer = substr($sBuffer, $dupPos + 1);
            } else {
                $longest = max(strlen($sBuffer), $longest);
            }
        }

        return $longest;
    }
}
