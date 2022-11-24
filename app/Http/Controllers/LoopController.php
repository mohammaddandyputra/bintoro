<?php

namespace App\Http\Controllers;

class LoopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $baris = 5;

        for ($i = 1; $i <= $baris; $i++) {
            for ($j = 1; $j <= $baris; $j++) {
                if ($j == $i) {
                    echo "*";
                } else {
                    echo $j;
                }
            }

            echo "<br>";
        }
    }
}
