<?php

$sizeList = [
    "0" => "0",
    "1" => "4px",
    "2" => "8px",
    "3" => "12px",
    "4" => "16px",
    "5" => "20px",
    "6" => "24px",
    "7" => "28px",
    "8" => "32px",
    "9" => "36px",
    "10" => "40px",
];
$sizeList2 = [
    "1" => "4px",
    "2" => "8px",
    "3" => "12px",
    "4" => "16px",
    "5" => "20px",
    "6" => "24px",
    "7" => "28px",
    "8" => "32px",
    "9" => "36px",
    "10" => "40px",
];


$breakpointList = [
    "" => "0px",
    "sm-" => "428px",
    "md-" => "768px",
    "lg-" => "1024px",
    "xl-" => "1366px"
];


foreach ($breakpointList as $breakpointKey => $breakpointSize) {
    echo "@media (min-width: {$breakpointSize}) {";

    foreach ($sizeList as $sizeIndex => $sizeValue) {
        $a = <<<EON
            .m-{$breakpointKey}{$sizeIndex} {
                margin: {$sizeValue} !important;
            }
            
            .mt-{$breakpointKey}{$sizeIndex},
            .my-{$breakpointKey}{$sizeIndex} {
                margin-top: {$sizeValue};
            }
            
            .mr-{$breakpointKey}{$sizeIndex},
            .mx-{$breakpointKey}{$sizeIndex} {
                margin-right: {$sizeValue} !important;
            }
            
            .mb-{$breakpointKey}{$sizeIndex},
            .my-{$breakpointKey}{$sizeIndex} {
                margin-bottom: {$sizeValue} !important;
            }
            
            .ml-{$breakpointKey}{$sizeIndex},
            .mx-{$breakpointKey}{$sizeIndex} {
                margin-left: {$sizeValue} !important;
            }
        EON;

        echo $a;
    }

    foreach ($sizeList as $sizeIndex => $sizeValue) {
        $a = <<<EON
            .p-{$breakpointKey}{$sizeIndex} {
                padding: {$sizeValue} !important;
            }
            
            .pt-{$breakpointKey}{$sizeIndex},
            .py-{$breakpointKey}{$sizeIndex} {
                padding-top: {$sizeValue} !important;
            }
            
            .pr-{$breakpointKey}{$sizeIndex},
            .px-{$breakpointKey}{$sizeIndex} {
                padding-right: {$sizeValue} !important;
            }
            
            .pb-{$breakpointKey}{$sizeIndex},
            .py-{$breakpointKey}{$sizeIndex} {
                padding-bottom: {$sizeValue} !important;
            }
            
            .pl-{$breakpointKey}{$sizeIndex},
            .px-{$breakpointKey}{$sizeIndex} {
                padding-left: {$sizeValue} !important;
            }
        EON;

        echo $a;
    }

    foreach ($sizeList2 as $sizeIndex => $sizeValue) {
        $a = <<<EON
            .m-{$breakpointKey}n{$sizeIndex} {
                margin: -{$sizeValue} !important;
            }
            
            .mt-{$breakpointKey}n{$sizeIndex},
            .my-{$breakpointKey}n{$sizeIndex} {
                margin-top: -{$sizeValue} !important;
            }
            
            .mr-{$breakpointKey}n{$sizeIndex},
            .mx-{$breakpointKey}n{$sizeIndex} {
                margin-right: -{$sizeValue} !important;
            }
            
            .mb-{$breakpointKey}n{$sizeIndex},
            .my-{$breakpointKey}n{$sizeIndex} {
                margin-bottom: -{$sizeValue} !important;
            }
            
            .ml-{$breakpointKey}n{$sizeIndex},
            .mx-{$breakpointKey}n{$sizeIndex} {
                margin-left: -{$sizeValue} !important;
            }
            EON;

        echo $a;
    }


    echo <<<EON
            .m-{$breakpointKey}auto {
                margin: auto !important;
            }
            
            .mt-{$breakpointKey}auto,
            .my-{$breakpointKey}auto {
                margin-top: auto !important;
            }
            
            .mr-{$breakpointKey}auto,
            .mx-{$breakpointKey}auto {
                margin-right: auto !important;
            }
            
            .mb-{$breakpointKey}auto,
            .my-{$breakpointKey}auto {
                margin-bottom: auto !important;
            }
            
            .ml-{$breakpointKey}auto,
            .mx-{$breakpointKey}auto {
                margin-left: auto !important;
            }
            
            .h-{$breakpointKey}100 {
                height: 100%;
            }
            
            .h-{$breakpointKey}auto {
                height: auto;
            }
        EON;

    echo "}";
}


?>

