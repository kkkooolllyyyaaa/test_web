<?php
session_start();
if (sizeof($_SESSION['table']) == 0)
    $_SESSION['table'] = array();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>lab 1</title>
    <link rel="icon" type="image/png" href="img/pricel.png"/>
    <style>
        body {
            margin: 0;
            color: #a25d06;
            font-family: monospace, sans-serif;
            font-size: 16px;
            background: bisque;
        }

        /*HEADER*/
        .header {
            margin: 1.5em auto;
            width: 70%;
            font-size: 105%;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75em;
        }

        #header .personal-info {
            align-items: center;
            margin-left: 1em;
        }

        #header .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #header .nav .link {
            color: inherit;
            margin-right: 1em;
            text-decoration: none;
        }

        .rounded-signboard {
            box-shadow: -5px -5px 20px burlywood, 5px 5px 20px saddlebrown;
            border-radius: 32px;
            background-color: burlywood;
        }

        /*MAIN*/
        .main-content {
            margin: 2.25em auto 1.5em;
            padding: 0.5em;
            font-size: 18px;
            overflow: hidden;
            width: 72.35%;
        }

        /*FORM*/
        .parameter-form {
            width: 20em;
            padding: 1em;
            margin: 1em;
            background-color: burlywood;
            border-radius: 32px;
            float: left;
            text-align: center;
        }

        .parameter-form h3 {
            text-align: left;
            margin-left: 1.5em;
            margin-block-start: 0.7em;
            margin-block-end: 0.7em;
        }

        .text-input {
            background: none;
            border: none;
            border-bottom: 2px solid #8b4512;
            color: #a25d06;
            line-height: 2em;
            text-align: left;
            padding: 0.5em 0.25em;
        }

        .text-input::placeholder {
            color: #8b4512;
        }

        .text-input:focus {
            outline: 2px solid #734108;
            font-size: 70%;
        }

        .action-buttons {
            margin-block-start: 1em;
            padding: 0.5em;
            height: auto;
        }

        .action-button {
            padding: 0.25em;
            color: #734108;
            background-color: burlywood;
            border: #734108 solid 2px;
            border-radius: 10px;
            width: 6em;
        }

        .action-button:hover, .action-button:focus {
            border: bisque solid 2px;
            cursor: pointer;
        }

        .action-button:active {
            color: inherit;
            font-weight: bold;
            background-color: #fcc57d;
        }

        /*GRAPH*/
        .svg-coordinates {
            margin: 3.5em 1em 1em 6em;
            padding: 1em;
        }

        .coordinates-figure {
            fill: burlywood;
            stroke-width: 2px;
            stroke: #a25d06;
        }

        .coordinate-axis {
            stroke-width: 2px;
            stroke: #734108;
            fill: bisque;
        }

        .coordinates-marker {
            stroke-width: 2px;
            stroke: #734108;
        }

        .coordinates-text {
            fill: #734108;
            stroke-width: 1px;
            stroke: #734108;
        }

        /*RES*/
        .result {
            margin-right: 9.5em;
            margin-left: auto;
            width: 50%;
        }

        .result-table {
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border: 2px solid saddlebrown;
            border-radius: 2em;
            border-spacing: 0.5em;
            font-size: 18px;
            margin-right: auto;
            margin-left: auto;
        }

        td {
            padding: 0.35em 0.5em;
            text-align: center;
        }

        /*COMMON*/
        #header .nav a[href] {
            font-weight: bold;
            font-size: 105%;
        }

        #header .nav a:hover {
            background-color: #fcc57d;
        }
    </style>
</head>

<body>
<div class="header">
    <header class="rounded-signboard" id="header">
        <div class="personal-info">
            <p>Tsypandin Nikolai Petrovich P3210</p>
        </div>

        <div class="nav">
            <a class="link" href="html/se.html">
                Variant 10212
            </a>
            <a class="link" href="https://github.com/kkkooolllyyyaaa/test_web" target="_blank">
                <img alt="github" src="img/github.svg" width="35">
            </a>
        </div>
    </header>
</div>
<div class="main-content" id='header'>
    <form class="parameter-form" action="php/check.php" method="post" name="form">
        <h3>X value:</h3>
        <label>
            <input id='textX' class="text-input" maxlength="6" type="text" name="x" placeholder="(-3; 3)" size="13">
        </label>

        <h3>Y value:</h3>
        <table class="y-table">
            <tbody>
            <tr>
                <td><label>
                        <input id="radio1" class="radioY" type="radio" name="y" value="-3">-3</label></td>
                <td><label>
                        <input id="radio2" class="radioY" type="radio" name="y" value="-2">-2</label></td>
                <td><label>
                        <input id="radio3" class="radioY" type="radio" name="y" value="-1">-1</label></td>
            </tr>
            <tr>
                <td><label>
                        <input id="radio4" class="radioY" type="radio" name="y" value="0"> 0</label></td>
                <td><label>
                        <input id="radio5" class="radioY" type="radio" name="y" value="1"> 1</label></td>
                <td><label>
                        <input id="radio6" class="radioY" type="radio" name="y" value="2"> 2</label></td>
            </tr>
            <tr>
                <td><label>
                        <input id="radio7" class="radioY" type="radio" name="y" value="3"> 3</label></td>
                <td><label>
                        <input id="radio8" class="radioY" type="radio" name="y" value="4"> 4</label></td>
                <td><label>
                        <input id="radio9" class="radioY" type="radio" name="y" value="5"> 5</label></td>
            </tr>
            </tbody>
        </table>

        <h3>Radius:</h3>
        <label>
            <input id="textR" class="text-input" maxlength="6" type="text" name="r" placeholder="(2; 5)" size="13">
        </label>

        <div class="action-buttons">
            <button class="action-button" type="submit" id="submit_request" name="check" value="check">
                Check
            </button>
            <button class="action-button" type="submit" id="clear_table" name="clear" value="clear">
                Clear
            </button>

            <button class="action-button" type="reset" id="reset_values" name=reset" value="reset">
                Reset
            </button>
        </div>
    </form>
    <svg class="svg-coordinates" height="350" width="350" xmlns="http://www.w3.org/2000/svg" id="area-graph">
        <rect class="coordinates-figure" x="105" y="175" width="70" height="140"></rect>
        <path class="coordinates-figure" d="M 175 105 h0 v70 h70 v0 A70 70 0 0 0 175 105z"></path>
        <polygon class="coordinates-figure" points="105,175 175,105 175,175 "></polygon>

        <line class="coordinate-axis" x1="0" x2="345" y1="175" y2="175"></line>
        <line class="coordinate-axis" x1="175" x2="175" y1="350" y2="5"></line>

        <polygon class="coordinate-axis" points="350,175 335,170 335,180"></polygon>
        <polygon class="coordinate-axis" points="175,0 180,15 170,15"></polygon>

        <text class="coordinates-text" x="182" y="11">y</text>
        <text class="coordinates-text" x="335" y="167">x</text>

        <line class="coordinates-marker" x1="171" x2="179" y1="35" y2="35"></line>
        <line class="coordinates-marker" x1="171" x2="179" y1="105" y2="105"></line>
        <line class="coordinates-marker" x1="171" x2="179" y1="245" y2="245"></line>
        <line class="coordinates-marker" x1="171" x2="179" y1="315" y2="315"></line>

        <line class="coordinates-marker" x1="35" x2="35" y1="171" y2="179"></line>
        <line class="coordinates-marker" x1="105" x2="105" y1="171" y2="179"></line>
        <line class="coordinates-marker" x1="245" x2="245" y1="171" y2="179"></line>
        <line class="coordinates-marker" x1="315" x2="315" y1="171" y2="179"></line>

        <text class="coordinates-text" id="Ry" x="180" y="40">R</text>
        <text class="coordinates-text" id="R2y" x="180" y="110">R/2</text>
        <text class="coordinates-text" id="-R2y" x="180" y="250">-R/2</text>
        <text class="coordinates-text" id="-Ry" x="180" y="320">-R</text>

        <text class="coordinates-text" id="-Rx" x="20" y="167">-R</text>
        <text class="coordinates-text" id="-R2x" x="85" y="167">-R/2</text>
        <text class="coordinates-text" id="R2x" x="235" y="167">R/2</text>
        <text class="coordinates-text" id="Rx" x="310" y="167">R</text>
    </svg>
</div>

<div class="result">
    <table class="result-table">
        <thead style="font-weight: bold">
        <tr>
            <td>
                X val
            </td>
            <td>
                Y val
            </td>
            <td>
                R val
            </td>
            <td>
                Cur time
            </td>
            <td>
                Exc time
            </td>
            <td>
                Result
            </td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($_SESSION['table'] as $value) {
            echo "<tr>
                <td> $value[0]</td>
                <td> $value[1]</td>
                <td> $value[2]</td>
                <td> $value[3]</td>
                <td> $value[4]</td>
                <td $value[6]> $value[5]</td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
<script src="js/validator.js">

</script>
</html>
