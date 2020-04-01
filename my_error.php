<?php
function countDown() {
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'Er is iets fout gegaan';
    } 
}

echo countDown();
?>