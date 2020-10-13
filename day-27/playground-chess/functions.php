<?php
//this function copied from Jan

function fen2array($fen)
{
    $parts = preg_split('#\s+#', $fen);
    $rows = explode('/', $parts[0]);
 
    $pieces = array();
 
    $y = 8;
    foreach ($rows as $row) {
        $x = 1;
        for ($i = 0; $i < strlen($row); $i++) {
            if (is_numeric($row[$i])) {
                $x += intval($row[$i]);
            } else {
                $pieces[$x][$y] = $row[$i];
                $x++;
            }
        }
        $y--;
    }
 
    return $pieces;
}