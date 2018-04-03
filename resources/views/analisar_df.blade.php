@extends('layouts.app')

@section('content')

<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="left">
                   <strong>Informações do Balancete {{$anob}}</strong>
                  </div>
                  <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$cnpj}}
                            </strong>
                        </fonte>
                    </div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                      <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <th>Conta</th>
                            <th>Nome da Conta</th>
                            <th>Saldo</th>
                        </thead>  
                        <tbody>
                            @foreach($balancetes as $balancete)
                            <tr>
                                <td>{{$balancete->conta}}</td>
                                <td>{{$balancete->nome_conta}}</td>
                                <td>{{$balancete->saldo}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
