<?php
function kelulusan($lulus)
{
    if ($lulus > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($k_grade)
{
    @$presentase = $k_grade;

    if ($presentase <= 35) {
        $presentase = "E";
        return "E";
    } elseif ($presentase <= 55) {
        $presentase = "D";
        return "D";
    } elseif ($presentase <= 69) {
        $presentase = "C";
        return "C";
    } elseif ($presentase <= 84) {
        $presentase = "B";
        return "B";
    } elseif ($presentase <= 100) {
        $presentase = "A";
        return "A";
    } else {
        $presentase = "I";
        return "I";
    }
}

function predikat($lulus)
{
    switch ($lulus) {
        case "A":
            return "Sangat memuaskan!";
            break;
        case "B":
            return "Memuaskan!";
            break;
        case "C":
            return "Cukup!";
            break;
        case "D":
            return  "Kurang!";
            break;
        case "E":
            return "Sangat Kurang!";
            break;

        default:
            return "Tidak Ada";
            break;
    }
}
