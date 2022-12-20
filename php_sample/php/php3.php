<?php
// 5次元配列
    $array = [
        "a" => [
            "aa" => [
                "aaa" => [
                    "aaaa" => [
                        1,
                        2,
                        3
                    ]
                ]
            ]
        ],
        "b" => [
            "bb" => [
                "bbb" => [
                    "bbbb" => [
                        4,
                        5,
                        6
                    ]
                ]
            ]
        ],
        "c" => [
            "cc" => [
                "ccc" => [
                    "cccc" => [
                        7,
                        8,
                        9
                    ]
                ]
            ]
        ]
    ];
    echo $array["b"]["bb"]["bbb"]["bbbb"][1];
?>