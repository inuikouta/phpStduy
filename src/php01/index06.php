<?php

function san($wi,$he) {
    $answer = $wi * $he / 2;
    echo "三角形の面積は、".$answer."です。";
}

function si($wi,$he) {
    $answer = $wi * $he;
    echo "四角形の面積は、".$answer."です。";
}

function da($top,$bottom,$he) {
    $answer = ($top+$bottom) * $he / 2;
    echo "台形の面積は、".$answer."です。";
}

san(20,30,20);