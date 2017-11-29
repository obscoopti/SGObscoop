@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de cooperativas</div>

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
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lista_coop as $coop)
                                <tr>
                                    <td>{{$coop->cnpj}}</td>
                                    <td  class="col-md-8">{{$coop->nome}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-secondary">L</button>
                                          <button type="button" class="btn btn-secondary">M</button>
                                          <button type="button" class="btn btn-secondary">R</button>
                                          <button type="button" class="btn btn-secondary">P</button>
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
