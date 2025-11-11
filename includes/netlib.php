<?php
// Helper functions
function make_tracking_number() {
    $prefix = 'IC';
    $random = strtoupper(substr(md5(uniqid((string)mt_rand(), true)), 0, 8));
    return $prefix . $random;
}
