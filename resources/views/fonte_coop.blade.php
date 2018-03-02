@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="overflow-y: scroll;">
                <div class="panel-heading">
                    <div>
                         Fonte de Dados     
                    </div>
                    <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coop->cnpj_completo}}
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
                    {{-- <div align="center">
                        {{var_dump($tab_dados)}}
                        @foreach($tab_dados as $ano=>$dados)
                        {{var_dump($dados)}}
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
                    </div>   --}}    
                    <div align="center" >
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <tr>
                                <td>    </td>
                                 @foreach($tab_dados as $ano=>$dados)
                                    <td>{{$ano}}</td>
                            @endforeach  
                            </tr> 
                            <tr>
                                <td>  RA  </td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'RA')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                            <tr>
                                <td>  BP  </td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'BP')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                            <tr>
                                <td>Estatuto</td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'Estatuto')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                            <tr>
                                <td>Ata</td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'Ata')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                            <tr>
                                <td>Balancete</td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'Balancete')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                            <tr>
                                <td>DMPL</td>
                                @foreach($tab_dados as $ano=>$dados)
                                     @foreach($dados as $kDado=>$vDado)
                                        @if($kDado == 'DMPL')
                                            <td>{{($vDado)? "&#x2714;":"&#x25A2;"}} </td> 
                                        @endif
                                     @endforeach
                                @endforeach
                            </tr>
                        </table>
                    </div>                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
