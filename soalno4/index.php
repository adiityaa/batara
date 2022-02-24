<?php
function pemisah($thestring)
{
    $a = strlen($thestring);
    $result = '';
    for ($i = 0; $i < $a; $i++) {
        $char = substr($thestring, $i, 1);
        if ($char % 2 == 0 && $i != $a-1) {
            $result = $result . $char . "-";
        } else {
            $result = $result . $char;
        }
    }
        return $result;
}
echo pemisah(43356);
