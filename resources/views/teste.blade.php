@extends('layouts.app')
@section('content')


<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function myFunction1() {
    var x = document.getElementById("de Produtos Agropecuários");
    
    if (x.style.display === "none") {
        $("#de Produtos Agropecuários").show();
    } else {
        $(x).attr('disabled','disabled');
        $(x).prop( "disabled", true );
        // $(x).hide();
    }
}

function myFunction12(){

    var x = document.getElementById("de Produtos Agropecuários");

    if (x.style.display == "none") {
        
        
        $("#de Produtos Agropecuários").show();
    } 
    else {
        $("#de Produtos Agropecuários").hide();
        
       
    }
};
</script>
</head>

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
                                    @if($df['codigo'] == "1.1.3" || $df['codigo'] == "1.1.4")
                                        
                                        <tr  id= {{$df['nome']}} class="grupo1" style="display: none">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.3.1" || $df['codigo'] == "1.1.3.2" || $df['codigo'] == "1.1.3.3")
                                        
                                        <tr  id= {{$df['nome']}} class="grupo1" style="display: none">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.3.1.1" || $df['codigo'] == "1.1.3.1.2" || $df['codigo'] == "1.1.3.1.3")
                                        
                                        <tr  id= {{$df['nome']}}>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                            @if($df['codigo'] == "1.1.3.1.1")
                                                <td><button type="button" onclick="myFunction()">Open</button></td>
                                            @endif
                                        </tr>
                                    
                                    @elseif($df['codigo'] == "1.1.3.2.1" || $df['codigo'] == "1.1.3.2.2" || $df['codigo'] == "1.1.3.2.3")
                                        
                                        <tr  id= {{$df['nome']}}>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                            @if($df['codigo'] == "1.1.3.2.1")
                                                <td><button type="button" onclick="myFunction()">Open</button></td>
                                            @endif
                                        </tr>
                                    
                                    @elseif($df['codigo'] == "1.1.3.3.1" || $df['codigo'] == "1.1.3.3.2" || $df['codigo'] == "1.1.3.3.3")
                                        
                                        <tr  id= {{$df['nome']}}>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                            @if($df['codigo'] == "1.1.3.3.1")
                                                <td><button type="button" onclick="myFunction()">Open</button></td>
                                            @endif
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.4.1" || $df['codigo'] == "1.1.4.2")
                                        
                                        <tr  id= "{{$df['nome']}}" style="display: none">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.4.1.1" || $df['codigo'] == "1.1.4.1.2" || $df['codigo'] == "1.1.4.1.3" || $df['codigo'] == "1.1.4.1.4" || $df['codigo'] == "1.1.4.1.5" || $df['codigo'] == "1.1.4.1.6")
                                        
                                        <tr  id= "{{$df['nome']}}">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo'], ['disabled' => 'disabled']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                            @if($df['codigo'] == "1.1.4.1.1")
                                                <td><button type="button" onclick="myFunction1()">Open1</button></td>
                                            @endif
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.4.2.1" || $df['codigo'] == "1.1.4.2.2")
                                        
                                        <tr  id= {{$df['nome']}}>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                            @if($df['codigo'] == "1.1.4.2.1")
                                                <td><button type="button" onclick="myFunction()">Open</button></td>
                                            @endif
                                             @if($df['codigo'] == "1.1.4.2.6")
                                                </tbody> 
                                                </table>
                                            @endif
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @elseif($df['codigo'] == "1.1.1" || $df['codigo'] == "1.1.2" || $df['codigo'] == "1.1.5")
                                        
                                        <tr  id= {{$df['nome']}}>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
<!-- ________________________________________________________________________________________________________________________________________________________________ -->
                                    @else
                                        @if($df['codigo'] == "1.2")
                                               <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed"> 
                                                    <tbody>
                                        @endif
                                        <tr>
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td> {{ Form::text($df['codigo']) }}</td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @endif
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

-----------------------------------------------------------------------------------------------------------------------------------------------

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
                    <form action="/SGObscoop/public/df_submit">
                    <input type="submit" value="Cadastrar">
                     {{-- {{ Form::open(array('url' => '/df_submit')) }}
                      {{Form::submit('Cadastrar')}}  --}}
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
                                        {{-- <td> {{ Form::text($df['codigo']) }}</td> --}}
                                       <td><input type="text" name="{{$df['codigo']}}"></td>
                                        <td>{{$df['explicacao']}}</td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div id="div_df_2" class="grupos" style="display: none;">
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
                    </div> --}}
                   {{--  <div id="div_df_3" class="grupos" style="display: none;">
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
                    </div> --}}
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

<script type="text/javascript">

                    var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    var aux16 = document.getElementById('Investimentos').value;
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    var aux21 = document.getElementById('Imobilizado').value;
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    var aux36 = document.getElementById('Intangível').value;
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    var aux39 = document.getElementById('Diferido').value;
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;


        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){