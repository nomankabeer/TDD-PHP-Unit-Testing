<?php
function revert(string $input) : string {
    // get all characters; asuming ascii
    $chars = [];
    for($i = 0; $i < strlen($input); $i++) {
        if (ctype_alpha($input[$i])) {
            $chars[] = $input[$i];
        }
    }
//var_dump( $chars); die();
    // replace characters
    for($i = 0;$i < strlen($input); $i++) {
        if (ctype_alpha($input[$i])) {
            $input[$i] = array_pop($chars);
        }
    }

    return $input;
}

$val = "z<*zj";
$val = "fd@af*hgs!z<*zj";
echo revert($val);

?>