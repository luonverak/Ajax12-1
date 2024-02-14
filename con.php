<?php
try {
    $con = new mysqli('localhost', 'root', '', 'db_php');
} catch (\Throwable $th) {
    //throw $th;
}