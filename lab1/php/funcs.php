<?php
session_start();
function debug($data)
{
    echo '<pre>' . print_r($data) . '</pre>';
}

function clear_table()
{
    $_SESSION['table'] = array();
}