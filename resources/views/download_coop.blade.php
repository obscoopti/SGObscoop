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
                            <th>Data</th>
                            <th>User</th>
                        </thead>    
                        <tbody>
                            @foreach($coop as $coops)
                            <tr>
                                <td>{{$coops->nome}}</td>
                                <td>{{$coops->tipo}}</td>
                                <td>{{$coops->ano}}</td>
                                <td>{{$coops->updated_at}}</td>
                                <td>{{$coops->user}}</td>
                                <td>
                                    {{Form::open(array('action' => 'CoopController@download_submit', 'method' => 'get') ) }}
                                    {{Form::hidden('coop_id',$coopcnpj->id) }}
                                    {{Form::hidden('arq_tipo',$coops->tipo) }}
                                    {{Form::hidden('arq_nome',$coops->nome) }}
                                    {{Form::submit('Download') }}
                                    {{Form::close() }}                                   
                                </td>
                                @if($user->nivel == 1)
                                <td>
                                    {{Form::open(array('action' => 'CoopController@download_delete', 'method' => 'get') ) }}
                                    {{Form::hidden('coop_id',$coopcnpj->id) }}
                                    {{Form::hidden('arq_tipo',$coops->tipo) }}
                                    {{Form::hidden('arq_nome',$coops->nome) }}
                                    {{Form::submit('Delete') }}
                                    {{Form::close() }}                                   
                                </td>
                                @endif
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
