<?php
if (isset($_POST['convert'])) {
    $l1 = $_POST['l1'];

    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $r = 0;
    $rate = 23000;
    if ($c1 == 'vnd') {
        if ($c2 == 'usd') {
            $r = $l1 / $rate;
            echo $r;
        }
        if ($c2 == 'vnd') {
            echo $l1;
        }
    } else {
        if ($c2 == 'vnd') {
            $r = $l1 * $rate;
            echo $r;
        }
        if ($c2 == 'usd') {
            echo $l1;
        }

    }
}
?>