<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    /**
     * @return jsonResponse
     */


    public function index():View
    {
        return view('homepage');
    }
}
