<?php



$medaList = [
	"sm" => 600,
	"md" => 800,
	"lg" => 1200,
	"xl" => 1440,
];

$sizes = [
    6,
    7,
    8,
    9,
    10,
    15,
    20,
    25,
    30,
    35,
    40,
    45,
    50,
    55,
    60,
    70,
    80,
    90,
    100,
    110,
    120,
    130,
    140,
    150,
    160,
    170,
    180,
    190,
    200
];

$properties = [
    "p" => function($size) {
        return sprintf("padding: %s px;", $size);
    },
    "px" => function($size) {
        return sprintf("padding-left: %s px; padding-right: %s px;", $size, $size);
    },
    "py" => function($size) {
        return sprintf("padding-top: %s px; padding-bottom: %s px;", $size, $size);
    },
    "pr" => function($size) {
        return sprintf("padding-right: %s px;", $size);
    },
    "pl" => function($size) {
        return sprintf("padding-left: %s px;", $size);
    },
    "pt" => function($size) {
        return sprintf("padding-top: %s px;", $size);
    },
    "pb" => function($size) {
        return sprintf("padding-bottom: %s px;", $size);
    },



    "m" => function($size) {
        return sprintf("margin: %s px;", $size);
    },
    "mx" => function($size) {
        return sprintf("margin-left: %s px; margin-right: %s px;", $size, $size);
    },
    "my" => function($size) {
        return sprintf("margin-top: %s px; margin-bottom: %s px;", $size, $size);
    },
    "mr" => function($size) {
        return sprintf("margin-right: %s px;", $size);
    },
    "ml" => function($size) {
        return sprintf("margin-left: %s px;", $size);
    },
    "mt" => function($size) {
        return sprintf("margin-top: %s px;", $size);
    },
    "mb" => function($size) {
        return sprintf("margin-bottom: %s px;", $size);
    },
];



foreach ($sizes as $size) {
    foreach ($properties as $key => $property) {
        echo sprintf(".%s-%s { %s }", $key, $size, $property($size));
    }
}

function stringSelectorList($prefix, $properties, $sizes): string
{

    foreach ($sizes as $size) {
        foreach ($properties as $key => $property) {
            $rows[] = sprintf(".%s-%s-%s { %s }", $key, $prefix, $size, $property($size));
        }
    }

    return implode("", $rows ?? []);
}


foreach ($medaList as $prefix => $media) {
    echo sprintf("@media (min-width: %s px){ %s }", $media, stringSelectorList($prefix, $properties, $sizes));
}

