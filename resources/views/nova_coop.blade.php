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
                   Nova cooperativa
                  </div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                      {{ Form::open(array('url' => '/nova_coop')) }}
                      <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr>
                          <td>
                            Tipo Cooperativa: {{ Form::select('tipo', array(
                                        'null' => 'Selecione',
                                        'Agro' => 'Agro',
                                        'Cred' => 'Cred',
                                        )) }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                                 CNPJ Cooperativa: 
                            </div>
                            <div class="col-md-6">
                                  {{ Form::text('cnpj') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              CEP: 
                            </div>
                            <div class="col-md-6">
                              {{ Form::text('cep') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Endereço:
                            </div>
                            <div class="col-md-6">
                              {{ Form::text('end') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Complemento:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('compl') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Bairro:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('bairro') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Município:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('municipio') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              E-mail:
                            </div>
                            <div class="col-md-6"> 
                              {{ Form::text('email') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Telefone:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('telefone') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Fax:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('fax') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              UF:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('uf') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Site:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('site') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Tipo Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('tipo_coop') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Natureza Jurídica:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('natureza') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Situação Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('sit') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Auditor:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('auditor') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Código Compensação:
                            </div>  
                            <div class="col-md-6">
                              {{ Form::text('cod_comp') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Classe Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('class_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Categoria Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('cat_coop') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Filiação:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('filiacao') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Latitude:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('lat') }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Longitude:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('long') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Nome Cooperativa:
                            </div>
                            <div class="col-md-6"> 
                              {{ Form::text('nome') }}
                            </div>
                          </td>
                        </tr>
                      </table>
                      {{Form::submit('Cadastrar!')}}
                      {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
