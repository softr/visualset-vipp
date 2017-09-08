<?php
namespace Softr\Vipp\Core\Utils;

/**
 * Time manipulation helper.
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class Time
{
    /**
     * Convert date string do DateTime Object
     *
     * @param  string|null  $date  DateTime string
     * @return \DateTime
     */
    public static function stringToDateTime($date)
    {
        // Validar Data US (Y-m-d - xxxx-xx-xx)
        $dateUs = \DateTime::createFromFormat('Y-m-d', $date);

        if ($dateUs) {
            return $dateUs;
        }

        // Validar Data BR (d/m/Y - xx/xx/xxxx)
        $dateBr = \DateTime::createFromFormat('d/m/Y', $date);

        if ($dateBr) {
            return $dateBr;
        }

        // Validar Data BR (d/m/y - xx/xx/xx)
        $dateBr2 = \DateTime::createFromFormat('d/m/y', $date);

        if ($dateBr2) {
            return $dateBr2;
        }

        // Validar Data BR (dmy - 18031988)
        if (strpos($date, '/') === false && strlen($date) == 8) {
            $dateBr3 = \DateTime::createFromFormat('dmY', $date);

            if ($dateBr3) {
                return $dateBr3;
            }
        }

        // Validar Data BR (dmy - 180388)
        if (strpos($date, '/') === false && strlen($date) == 6) {
            $dateBr4 = \DateTime::createFromFormat('dmy', $date);

            if ($dateBr4) {
                return $dateBr4;
            }
        }

        // Validar Data Hora US (Y-m-d H:i:s - xxxx-xx-xx 00:00:00)
        $dateTimeUs = \DateTime::createFromFormat('Y-m-d H:i:s', $date);

        if ($dateTimeUs) {
            return $dateTimeUs;
        }

        // Validar Data Hora US (Y-m-d H:i - xxxx-xx-xx 00:00)
        $dateTimeUs2 = \DateTime::createFromFormat('Y-m-d H:i', $date);

        if ($dateTimeUs2) {
            return $dateTimeUs2;
        }

        // Validar Data Hora BR (d/m/Y H:i:s - xx/xx/xxxx 00:00:00)
        $dateTimeBr = \DateTime::createFromFormat('d/m/Y H:i:s', $date);

        if ($dateTimeBr) {
            return $dateTimeBr;
        }

        // Validar Data Hora BR (d/m/Y H:i - xx/xx/xxxx 00:00)
        $dateTimeBr2 = \DateTime::createFromFormat('d/m/Y H:i', $date);

        if ($dateTimeBr2) {
            return $dateTimeBr2;
        }

        // Validar Data Hora BR (d/m/y H:i:s - xx/xx/xx 00:00:00)
        $dateTimeBr3 = \DateTime::createFromFormat('d/m/y H:i:s', $date);

        if ($dateTimeBr3) {
            return $dateTimeBr3;
        }

        // Validar Data Hora BR (dmy H:i:s - 18031988 00:00:00)
        if (strpos($date, '/') === false && strlen($date) == 17) {
            $dateTimeBr4 = \DateTime::createFromFormat('dmY H:i:s', $date);

            if ($dateTimeBr4) {
                return $dateTimeBr4;
            }
        }

        // Validar Data Hora BR (dmy H:i:s - 180388 00:00:00)
        if (strpos($date, '/') === false && strlen($date) == 15) {
            $dateTimeBr5 = \DateTime::createFromFormat('dmy H:i:s', $date);

            if ($dateTimeBr5) {
                return $dateTimeBr5;
            }
        }

        // Tentar data completa
        $dateFull = new \DateTime($date);

        if ($dateFull) {
            return $dateFull;
        }

        return;
    }
}
