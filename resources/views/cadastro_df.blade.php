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
                  <div class="left">
                    Cadastro DF
                  </div>
                  <button id="df_1" class="right">Df 1</button>
                  <button id="df_2" class="right">Df 2</button>
                  <button id="df_3" class="right">Df 3</button>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Form::open(array('url' => '/df_submit')) }}
                     {{Form::submit('Cadastrar')}}
                    <div id="div_df_1" class="grupos">
                     <br>
                     <br>
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_1 as $df)
                                    <tr>
                                        <td>{{$df['codigo']}}</td>
                                        <td>{{$df['nome']}}</td>
                                        <td> {{ Form::text($df['codigo']) }}</td>
                                        <td>{{$df['explicacao']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="div_df_2" class="grupos" style="display: none;">
                     <br>
                     <br>
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_2 as $df)
                                    <tr>
                                        <td>{{$df['codigo']}}</td>
                                        <td>{{$df['nome']}}</td>
                                        <td> {{ Form::text($df['codigo']) }}</td>
                                        <td>{{$df['explicacao']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="div_df_3" class="grupos" style="display: none;">
                     <br>
                     <br>
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_3 as $df)
                                    <tr>
                                        <td>{{$df['codigo']}}</td>
                                        <td>{{$df['nome']}}</td>
                                        <td> {{ Form::text($df['codigo']) }}</td>
                                        <td>{{$df['explicacao']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{ Form::close() }}
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
