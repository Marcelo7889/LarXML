<?php

namespace App\Http\Controllers;

use App\xmlModel;
use Illuminate\Http\Request;
use app\xmlParse;

class xmlController extends Controller
{

    public function index(){
        $arquivo = 'C:/wamp64/www/LarXML/public/43171045987005011980550010000277101090804384-nfe.xml';
        //$arquivo = 'C:/wamp64/www/LarXML/public/teste.xml';
        $xml = file_get_contents($arquivo);
        $dom = new \domDocument();
        $dom->loadXML($xml);
        $xml = simplexml_import_dom($dom);
       //dd($xml);

        $nome = $xml->NFe->infNFe->emit->xNome;

     return view('leitorxml', ['nome' => $nome]);
    }

    public function addXml(){
        $xml = new xmlModel;
        $xml->nrNF = 10;
        $xml->nomeRemetente = 'Marcelo';
        $xml->nomeDestinatario = 'Expresso Paganine';
        $xml->dataEmissao = '2017-10-06';
        $xml->valorNF = 10.00;
        $xml->save();
        return view('leitorxml',['nome' => 'XML adicionado']);
    }
}
