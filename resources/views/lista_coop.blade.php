@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de cooperativas</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="tabela_coop">
                        <th>CNPJ</th>
                        <th>Nome</th>
                        <th>Menu</th>
                        @foreach($lista_coop as $coop)
                        <tr>
                            <td>{{$coop->cnpj}}</td>
                            <td>{{$coop->nome}}</td>
                            <td>{{'fasdfas'}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
