@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                         Estatutos
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
                    <div align="center" >
                        <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                    <th> <strong> Ano </strong></th> <th> <strong> Status </strong> </th>
                                </thead>
                            @foreach($estatutos as $estatuto)
                                <tr>
                                    <td>  {{$estatuto->ano_estatuto}} </td>
                                    <td> {{($estatuto->estatuto_completo)?" &#x2714;": "&#x25A2;"}}</td>
                                    <td>
                                            {{Form::open(array('action' => 'CoopController@analisar_estatuto', 'method' => 'get') ) }}
                                            {{Form::hidden('ano',$estatuto->ano_estatuto) }}
                                            {{Form::hidden('cnpj',$cnpj) }}
                                            {{Form::submit('Analisar') }}
                                            {{Form::close() }}                            
                                        </td>
                                </tr>
                            @endforeach  
                        </table>
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
