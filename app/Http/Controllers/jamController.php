<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jamController extends Controller
{
    public function jam() {
        $current = mktime(0, 0, 0, 10, 20, 2023);
        $future = mktime(0, 0, 0, 10, 4, 2023);
        $different = $future - $current;

        $hours = ($different / 3600) % 24;

        $minutes = ($different / 60) % 60;

        $days = ($different / 3600) / 24;

        $computedDays = $days < 0 ? $days = ceil($days) : $days = floor($days);

        echo floor($computedDays);
    }
}
