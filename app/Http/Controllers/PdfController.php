<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Facture'];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('invoice.pdf');
    }
}