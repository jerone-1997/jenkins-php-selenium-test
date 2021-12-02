<?php
function checkIfXSS($input) {
    preg_match('<script>', $input, $match);
    if (count($match) >= 1) {
        reutrn True;
    } else {
        return False;
    }
}
?>