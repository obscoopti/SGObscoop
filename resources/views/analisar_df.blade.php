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
                  @if($tipo == 'Cooperativa de Crédito')
                    <div class="left">
                    <strong>Informações do Balancete {{$anob}}</strong>
                    </div>
                  @endif
                  @if($tipo == 'Cooperativa de Agro')
                    <div class="left">
                    <strong>Informações do Demostrativo {{$ano}}</strong>
                    </div>
                  @endif
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
                    @if($tipo == 'Cooperativa de Agro')
                      <div>
                        <table class="table table-striped table-bordered table-hover table-condensed">
                          <thead>
                            <th>Tipo</th>
                            <th>Valor</th>
                          </thead>
                          <tbody>
                            @foreach ($balancetes as $key => $value)
                              @foreach ($value as $keyy => $valuee) 
                              <tr>
                                <td>{{$keyy}}</td>
                                <td>{{$valuee}}</td>
                              </tr>
                              @endforeach            
                              @break;
                            @endforeach
                          </tbody>
                        </table>                       
                      </div>
                    @endif
                    @if($tipo == 'Cooperativa de Crédito')
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
