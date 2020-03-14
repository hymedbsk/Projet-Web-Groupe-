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
        $data = ['title' => 'Facture',
          'date' => date("d/m/Y"),
          'providerName' => 'EPHEC ASBL',
          'providerRoad' => 'Avenue Konrad Adenauer 3',
          'providerLocality' => '1200 Woluwe-Saint-Lambert',
          'providerCountry' => 'Belgique',
          'clientName' => 'Toto',
          'clientRoad' => 'Avenue du Ciseau 15',
          'clientLocality' => '1348 Louvain-la-Neuve',
          'clientCountry' => 'Belgique',
          'totalInvoice' => 1000];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('invoice.pdf');
    }
}