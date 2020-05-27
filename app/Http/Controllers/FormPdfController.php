<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPdfController extends Controller
{
    /**
     * Show the form dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('formPDF');
    }
}
