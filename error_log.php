<?php
function countDown()
{
    $i = 12; 
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        if ($i == 0 && $i < 11) {
            return 'Er is iets goed gegaan';  
        } else{ error_log("er is iets fout gegaan", "error.log") ;
        }
    } 
}
echo countDown();
?>