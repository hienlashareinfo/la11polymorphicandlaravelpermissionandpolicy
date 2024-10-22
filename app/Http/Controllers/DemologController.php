<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemologController extends Controller
{
    public function index()
    {
        $systemlog = app('systemlog');
        $systemlog->info('Log info nhé');
    }
}