<?php
function findMissingNumber($array, $start, $end)
{
    if ($start > $end)
        return $end + 1;
    if ($start != $array[$start])
        return $start;
    $mid = ($start + $end) / 2;
    if ($array[$mid] == $mid)
        return findMissingNumber($array, $mid + 1, $end);
    return findMissingNumber($array, $start, $mid);
}
    $arr = array (0, 1, 2, 3, 4, 5, 6, 7, 10);
    $n = count($arr);
    echo "Output: " ,
          findMissingNumber($arr, 2, $n - 1);
         
?>