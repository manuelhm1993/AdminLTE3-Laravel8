<?php

namespace App\MH\Clases;

use DateTime;

class Helper {
    // Devuelve un string con la diferencia entre dos fechas
    public static function getDateDiffToString(string $date1, string $date2) {
        $fechaIncorporacion = new DateTime($date1);
        $fechaActual = new DateTime($date2);

        $interval = $fechaIncorporacion->diff($fechaActual);

        switch($interval->d) {
            case 0:
                $diferencia = $interval->format('Hoy');
                break;
            case 1:
                $diferencia = $interval->format('Hace %d día');
                break;
            default:
                $diferencia = $interval->format('Hace %d días');
        }

        return $diferencia;
    }
}
