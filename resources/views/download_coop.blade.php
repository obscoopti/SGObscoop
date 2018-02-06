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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                         Download Arquivos
                    </div>
                    <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coopcnpj->cnpj_completo}}
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
                    <table class="table table-bordered">
                        <thead>
                            <th>Nome Arquivo</th>
                            <th>Tipo</th>
                            <th>Ano</th>
                            <th>Atualizado</th>
                            <th>Action</th>
                        </thead>    
                        <tbody>
                            @foreach($coop as $coops)
                            <tr>
                                <td>{{$coops->nome}}</td>
                                <td>{{$coops->tipo}}</td>
                                <td>{{$coops->ano}}</td>
                                <td>{{$coops->updated_at}}</td>
                                <td>
                                    {{Form::open(array('url' => '/download_coop','files'=>'true') ) }}
                                    {{Form::hidden('coop_id',$coopcnpj->id) }}
                                    {{Form::hidden('arq_tipo',$coops->tipo) }}
                                    {{Form::hidden('arq_nome',$coops->nome) }}
                                    {{Form::submit('Download') }}
                                    {{Form::close() }}

                                  {{--   <form id="carrega_arquivo" method="get" action="{{route('download_coop')}}" target="_blank">
                                    <input type="hidden" id="exporta_pdf" name="exporta_pdf" value="{{$versao->id}}" />
                                    <input type="hidden" id="data_implat" name="data_implat" value="{{$versao->data_inicial}}" />
                                    <input type="hidden" id="tipo" name="tipo" value="cli_" />
                                    <input type="hidden" id="completa" name="completa" value="{{$versao->completa}}" />
                                    <input type="hidden" id="onload_click" name="onload_click" value="1" />
                                    <input type="hidden" id="incompleta" name="incompleta" value="{{$incompleta}}" />
                                    <button id="button_exportar" class="btn btn-default btn-sm botaopequeno" type="submit"><i class="fa fa-file-pdf-o iconbotaopequeno" ></i> Exportar</button>
                                    </form> --}}

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
