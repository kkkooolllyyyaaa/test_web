<?php
session_start();
function validate($x, $y, $r)
{
    return is_numeric($x) &&
        is_numeric($r) &&
        is_numeric($y) && in_array($y, array(-3, -2, -1, 0.0, 1, 2, 3, 4, 5)) &&
        $x > -3 && $x < 3 &&
        $r > 2 && $r < 5;
}

function is_hit($x, $y, $r)
{
    if (($x >= 0 && $y >= 0 && ($x * $x + $y * $y) <= ($r * $r)) ||
        ($x <= 0 && $y <= 0 && abs($y) <= $r && abs($x) <= ($r / 2)) ||
        ($x <= 0 && $y >= 0 && $y <= ($x + $r / 2)))
        return true;
    else return false;
}

if (isset($_POST['check'])) {
    date_default_timezone_set('Europe/Moscow');
    $exc_time = microtime(true);
    $cur_time = date("H:i:s");
    $x = (($_POST["x"]) != null && isset($_POST["x"])) ? str_replace(",", ".", $_POST["x"]) : null;
    if (abs($x - round($x)) <= 1e-7)
        $x = round($x);
    $y = (($_POST["y"] != null) && isset($_POST["y"])) ? $_POST["y"] : null;
    if (abs($y - round($y)) <= 1e-7)
        $y = round($y);
    $r = (!empty($_POST["r"]) && isset($_POST["r"])) ? str_replace(",", ".", $_POST["r"]) : null;
    if (abs($r - round($r)) <= 1e-7)
        $r = round($r);
    if (validate($x, $y, $r)) {
        $res_style = "style=\"color:";
        if (strval(is_hit($x, $y, $r))) {
            $res_style .= "green\"";
            $is_hit = "true";
        } else {
            $res_style .= "red\"";
            $is_hit = "false";
        }
        $exc_time = round((microtime(true) - $exc_time) * 1e6, 2) . " ms";
        if (!isset($_SESSION['table'])) {
            $_SESSION['table'] = array();
        }
        $res_arr = array($x, $y, $r, $cur_time, $exc_time, $is_hit, $res_style);
        array_push($_SESSION['table'], $res_arr);
    } else {
        http_response_code(400);
    }
} else if (isset($_POST['clear'])) {
    require_once('funcs.php');
    clear_table();
}

header('Location: ../index.php');
