<?php

$types = [
    "h" => "height",
    "w" => "width"
];

foreach ($types as $typeShort => $prop) {
    $listPx = range(1, 300);
    $listPxPercent = [
        25,50,75,100
    ];
    $medaList = [
        "sm" => 600,
        "md" => 800,
        "lg" => 1200,
        "xl" => 1440,
    ];
    foreach ($listPx as $px) {
        echo sprintf(".%s-%s{%s: %s px}", $typeShort, $px, $prop, $px);
    }
    foreach ($listPxPercent as $px) {
        echo sprintf(".%s-%s-percent{ %s: %s%s }", $typeShort, $px, $prop, $px, "%");
    }
    echo sprintf(".%s-auto{%s: auto}", $typeShort, $prop);

    foreach ($medaList as $key => $value) {
        echo sprintf("@media (min-width: %s px) {", $value);
        foreach ($listPx as $px) {
            echo sprintf(".%s-%s-%s{%s: %spx}", $typeShort, $key, $px, $prop, $px);
        }
        foreach ($listPxPercent as $px) {
            echo sprintf(".%s-%s-%s-percent{%s: %s%s}", $typeShort, $key, $px, $prop, $px, "%");
        }
        echo sprintf(".%s-%s-auto{%s: auto}", $typeShort, $key, $prop);
        echo "}";
    }
}


