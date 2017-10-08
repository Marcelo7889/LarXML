@extends('master')
   @section('content')
    <div>
        <table class="table table-bordered table-sm table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Placa</th>
            </tr>
            </thead>
            <tbody>
          @foreach($carros as $carro)
            <tr>
                <th scope="row">{{$carro->id}}</th>
                <td>{{$carro->placa}}</td>
            </tr>
            @endforeach
            <tr>
                <th></th>
                <td>
                    <div class="col-lg-6">
                        <form method="post" action="{{url('carros')}}">
                        <div class="input-group">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" placeholder="Adicionar carro..." aria-label="Adicionar..." name="placa">
                            <button class="btn btn-secondary" type="submit">ADD</button>
                        </div>
                        </form>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
     </div>
    @stop

