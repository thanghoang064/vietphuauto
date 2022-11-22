<?php

namespace Modules\Admin\Http\Controllers;
use Illuminate\Http\Request;
use PDF;


class AdminPdfController extends AdminBaseController
{
    public function index()
    {


            $pdf = \App::make('dompdf.wrapper');
            $html = view('admin::pdf.index')->render();
            $pdf->loadHTML($html);
          
            return $pdf->stream('hop-dong.pdf');
        }
     

    
}
