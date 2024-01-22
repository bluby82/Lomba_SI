<?php

namespace App\Models;

class Regu
{
    static $teams = [
        [
            "regu" => "Nama regu",
            "anggota" => [
                "anggota1" => "Ryan1",
                "anggota2" => "Ryan2",
                "anggota3" => "Ryan3"
            ],
            "soal" => 5,
            "skor" => 19
        ],
        [
            "regu" => "Nama regu 2",
            "anggota" => [
                "anggota1" => "Ryan4",
                "anggota2" => "Ryan5",
                "anggota3" => "Ryan6"
            ],
            "soal" => 5,
            "skor" => 19
        ]
    ];

    public static function All()
    {
        return self::$teams;
    }
}
