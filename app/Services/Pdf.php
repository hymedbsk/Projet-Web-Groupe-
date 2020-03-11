<?php 

namespace App\Services; 

use App\Invoice;
use Dompdf\Dompdf; 
use Illuminate\Support\Facades\View; 

class Pdf extends Dompdf 
{ 
    /** 
     * Create a new pdf instance. 
     * 
     * @param  array $config 
     * @return void 
     */ 
    public function __construct(array $config = []) 
    { 
        parent::__construct($config); 
    }

    /** 
     * Determine id the user wants to view (or download). 
     * 
     * @return string 
     */ 
    public function action() 
    { 
        return request()->has('download') ? 'attachment' : 'inline';
    }


    /**
     * Render the PDF.
     *
     * @param  \App\Invoice  $invoice
     * @return string
     */
    public function generate(Invoice $invoice)
    {
        $this->loadHtml(
            View::make('template.html', compact('invoice'))->render()
        );

        $this->render();

        return $this->output();
    }
}