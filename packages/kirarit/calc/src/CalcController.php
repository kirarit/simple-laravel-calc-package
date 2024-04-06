<?php

namespace Kirarit\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalcController extends Controller
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }
}
