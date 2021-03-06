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
                            <a style=" all: unset;" href="{{url('auditor_coop')}}">+ Cadastro Governança/Gestão</a>
                        </button>
                    </div>
                    <div class="right" style="float:right;margin-top:-7px;">
                        <button type="button" class="btn btn-success">
                            <a style=" all: unset;" href="{{url('cadastro_coop')}}">+ Cadastro Automático Coop</a>
                        </button>
                    </div>
                    <div class="right" style="float:right;margin-top:-7px;">
                        <button type="button" class="btn btn-success">
                            <a style=" all: unset;" href="{{url('nova_coop')}}">+ Cadastro Manual Coop</a>
                        </button>
                    </div>
                    
                    <div class="left">
                        Lista de Cooperativas
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lista_coop as $coop)
                                <tr>
                                    <td>{{$coop->cnpj_completo}}</td>
                                    <td  class="col-md-7">{{$coop->nome}}</td>
                                    <td >{{$coop->tipo}}</td>
                                    <td>
                                      <div class="btn-group" role="group">  

                                        <button type="button" class="btn btn-success">
                                            <a style=" all: unset;" href="{{url('info_coop/?id='.$coop->id)}}">Acessar Coop</a>
                                        </button>
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
