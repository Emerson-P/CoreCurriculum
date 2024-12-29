<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class App extends Controller
{
    public function returnPageHome(){
        return view('App.Home');
    }
    public function pdf(){
            
    $data = [
        'title' => 'Exemplo de PDF',
        'content' => 'Este é um exemplo de conteúdo para o arquivo PDF.',
    ];

    // Renderizar a view como HTML
    $pdf = FacadePdf::loadView('App.pdf.pdf_template', $data);

    // Retornar o PDF para download
    return $pdf->download('arquivo-exemplo.pdf');
    // return $pdf;
    }
}
