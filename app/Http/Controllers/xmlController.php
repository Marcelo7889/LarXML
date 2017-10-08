<?php

namespace App\Http\Controllers;

use App\xmlModel;
use Illuminate\Http\Request;
use app\xmlParse;

class xmlController extends Controller
{

    public function savexml(){
        $arquivo = 'C:/wamp64/www/LarXML/public/43171045987005011980550010000277101090804384-nfe.xml';
        //$arquivo = 'C:/wamp64/www/LarXML/public/teste.xml';
        $xml = file_get_contents($arquivo);
        $dom = new \domDocument();
        $dom->loadXML($xml);
        $xml = simplexml_import_dom($dom);
        $nrNF = $xml->NFe->infNFe->ide->nNF;
        echo $nrNF;
        $nomeRem = $xml->NFe->infNFe->emit->xNome;
        $nomeDest = $xml->NFe->infNFe->dest->xNome;
       // $dtEmissao = $xml->NFe->infNFe->ide->dhEmi;
        $dtEmissao = '2017-10-06';
        $valorNF =  $xml->NFe->infNFe->total->ICMSTot->vNF;
        $this->addXml($nrNF,$nomeRem,$nomeDest,$dtEmissao,$valorNF);

        $nome = $xml->NFe->infNFe['Id'];

     return view('leitorxml', ['nome' => $nome]);
    }

    private function addXml($nfNF, $nomeRem, $nomeDes, $dtEmissao, $valorNF){
        $xml = new xmlModel;
        $xml->nrNF = $nfNF;
        $xml->nomeRemetente = $nomeRem;
        $xml->nomeDestinatario = $nomeDes;
        $xml->dataEmissao = $dtEmissao;
        $xml->valorNF = $valorNF;
        $xml->save();
       // return view('leitorxml',['nome' => $xml->nomeRemetente]);
    }

    public function getXml(){
     $xmls = xmlModel::all();
     return view('main', ['xmls' => $xmls]);
    }
}
