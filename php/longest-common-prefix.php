<?php

class Solution
{
    /**
     * Find the same prefix for both strings
     *
     * @param string $a
     * @param string $b
     * @return string
     */
    private function getStringsIntersect(string $a, string $b): string
    {
        $i = 0;
        $intersect = '';

        while ($a[$i] && $b[$i] && $a[$i] == $b[$i]) {
            $intersect .= $a[$i];
            $i++;
        }

        return $intersect;
    }

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs): string
    {
        $prefix = $strs[0];

        if (strlen($prefix) == 0) {
            return '';
        }

        for ($i = count($strs) - 1; $i > 0; $i--) {
            $prefix = $this->getStringsIntersect($strs[$i], $prefix);
        }

        return $prefix;
    }
}
