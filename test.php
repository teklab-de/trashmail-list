<?php

function trashmail($checkmail) {
    $domain_list = file('trashmail.lst', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
    return in_array(explode('@', $checkmail)[1], $domain_list);
}

// Test

$checkmail = "test@einrot.com";
if (trashmail($checkmail) === true) {
    echo 'Warning: Trashmail';
}else{
    echo 'Passed :)';
}

?>