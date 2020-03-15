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
          'detailDesc' => 'Service en heure forfaitaire',
          'detailQty' => 2,
          'detailPriceHtva' => number_format(40, 2, ',', '.'),
          'TVA' => '21 %',
          'detailPrice' => number_format((40 * 1.21), 2, ',', '.'),
          'detailFinalPrice' => number_format(((40 * 1.21) * 2), 2, ',', '.'),
          'totalInvoice' => number_format(290.4, 2, ',', '.'),
          'dateLimitPayment' => date("d/m/Y",strtotime('+30 days'))
        ];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('invoice.pdf');
    }
}