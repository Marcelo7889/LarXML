<?php
/**
 * Created by PhpStorm.
 * User: 3green
 * Date: 06/10/2017
 * Time: 16:01
 */
namespace app;
class xmlParse
{

    public function lerxml(){
        $arquivo = 'C:/wamp64/www/LarXML/public/43171045987005011980550010000277101090804384-nfe.xml';
        $xml = file_get_contents($arquivo);
        $dom = new domDocument();
        $dom->loadXML($xml);
        $xml = simplexml_import_dom($dom);
        return $xml->nfeProc->NFe->infNFe->ide->cNF;
    }
}