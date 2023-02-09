<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helpers {

    public static function showSex($status)
    {
        $value = '';

        if ($status == 'M') {
            $value = 'Masculino';
        } else if ($status == 'F') {
            $value = 'Femenino';
        } 
        return $value;
    }

    public static function showBoletin($status)
    {
        $value = '';

        if ($status == '0') {
            $value = 'No';
        } else if ($status == '1') {
            $value = 'Si';
        } else if ($status == NULL) {
            $value = 'No';
        } 
        return $value;
    }
}
    
?>