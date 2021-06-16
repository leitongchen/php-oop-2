<?php 

trait Utilities {


    static public function validateDate($date, $format = 'm/y') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}