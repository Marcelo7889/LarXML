@extends('master')
   @section('content')
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nota</th>
                <th>Remetente</th>
                <th>Destinatario</th>
                <th>valor</th>
            </tr>
            </thead>
            <tbody>
          @foreach($xmls as $xml)
            <tr>
                <th scope="row">{{$xml->id}}</th>
                <td>{{$xml->nrNF}}</td>
                <td>{{$xml->nomeRemetente}}</td>
                <td>{{$xml->nomeDestinatario}}</td>
                <td>{{$xml->valorNF}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
     </div>
    @stop

