@extends('layouts.app')

@section('content')

<style type="text/css">
  
  a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="right" style="float:right;margin-top:-7px;">
                    <button type="button" class="btn btn-success">
                      <a style=" all: unset;" href="{{url('nova_coop')}}">+ Nova Cooperativa</a></button>
                  </div>
                  <div class="left">
                    Lista de cooperativas
                  </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="tabela_coop"  class="table table-striped table-bordered table-hover table-condensed">
                        <thead>    
                            <tr>
                                <th>CNPJ</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lista_coop as $coop)
                                <tr>
                                    <td>{{$coop->cnpj}}</td>
                                    <td  class="col-md-7">{{$coop->nome}}</td>
                                    <td >Tipo</td>
                                    <td>
                                      <div class="btn-group" role="group">
                                        <a href="{{url('upload_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs">U</a>
                                        <a href="{{url('fonte_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs">F</a>
                                        <a href="{{url('estatuto_coop/?cnpj='.$coop->cnpj)}}" type="button" class="button btn btn-secondary btn-xs">E</a>
                                        <a type="button" class="button btn btn-secondary btn-xs">R</a>
                                        <a type="button" class="button btn btn-secondary btn-xs">P</a>
                                      </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
