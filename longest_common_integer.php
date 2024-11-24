<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
               if (empty($strs)) return "";

        $prefix = $strs[0];
        foreach ($strs as $str) {
            while (substr($str, 0, strlen($prefix)) !== $prefix) {
                $prefix = substr($prefix, 0, -1);
                if ($prefix === "") return "";
            }
        }
        return $prefix; 
    }
}