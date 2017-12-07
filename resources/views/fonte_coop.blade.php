@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                         Fonte de dados
                    </div>
                    <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coop->cnpj}}
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
                    <div align="center">
                        @foreach($tab_dados as $ano=>$dados)
                          <strong>Ano: {{$ano}} </strong>
                          <table>
                            @foreach($dados as $kDado=>$vDado)
                              <tr>
                                <td> {{$kDado}}: </td>
                                <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                              </tr>
                            @endforeach
                          </table>
                          <br>
                          <br>
                        @endforeach
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
