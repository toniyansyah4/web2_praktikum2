<?php

function grade($nilai_akhir)
{
    switch ($nilai_akhir) {
        case ($nilai_akhir >= 0) && ($nilai_akhir <= 35):
            print("E");
            break;
        case ($nilai_akhir >= 36) && ($nilai_akhir <= 55):
            print("D");
            break;
        case ($nilai_akhir >= 56) && ($nilai_akhir <= 69):
            print("C");
            break;
        case ($nilai_akhir >= 70) && ($nilai_akhir <= 84):
            print("B");
            break;
        case ($nilai_akhir >= 85) && ($nilai_akhir <= 100):
            print("A");
            break;
        case ($nilai_akhir < 0) && ($nilai_akhir > 100):
            print("I");
            break;
    }
}

function kelulusan($nilai_akhir)
{
    if ($nilai_akhir > 55) {
        return print("LULUS");
    } else {
        return print("TIDAK LULUS");
    }
}

function predikat($nilai_akhir)
{
    switch ($nilai_akhir) {
        case ($nilai_akhir >= 0) && ($nilai_akhir <= 35):
            print("Sangat Kurang");
            break;
        case ($nilai_akhir >= 36) && ($nilai_akhir <= 55):
            print("Kurang");
            break;
        case ($nilai_akhir >= 56) && ($nilai_akhir <= 69):
            print("Cukup");
            break;
        case ($nilai_akhir >= 70) && ($nilai_akhir <= 84):
            print("Memuaskan");
            break;
        case ($nilai_akhir >= 85) && ($nilai_akhir <= 100):
            print("Sangat cukup");
            break;
        case ($nilai_akhir < 0) && ($nilai_akhir > 100):
            print("Tidak Ada");
            break;
    }
}
