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
                            CNPJ Cooperativa:  {{ Form::text('cnpj') }}
                          </td>
                          <td>
                            CEP: {{ Form::text('cep') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Endereço:  {{ Form::text('end') }}
                          </td>
                          <td>
                            Complemento:  {{ Form::text('compl') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Bairro:  {{ Form::text('bairro') }}
                          </td>
                          <td>
                            Município:  {{ Form::text('municipio') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            E-mail: {{ Form::text('email') }}
                          </td>
                          <td>
                            Telefone:  {{ Form::text('telefone') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Fax:  {{ Form::text('fax') }}
                          </td>
                          <td>
                            UF:  {{ Form::text('uf') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Site:  {{ Form::text('site') }}
                          </td>
                          <td>
                            Tipo Cooperativa:  {{ Form::text('tipo_coop') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Natureza Jurídica:  {{ Form::text('natureza') }}
                          </td>
                          <td>
                            Situação Cooperativa:  {{ Form::text('sit') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Auditor:  {{ Form::text('auditor') }}
                          </td>
                          <td>
                            Código Compensação:  {{ Form::text('cod_comp') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Classe Cooperativa:  {{ Form::text('class_coop') }}
                          </td>
                          <td>
                            Categoria Cooperativa:  {{ Form::text('cat_coop') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Filiação:  {{ Form::text('filiacao') }}
                          </td>
                          <td>
                            Latitude:  {{ Form::text('lat') }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Longitude:  {{ Form::text('long') }}
                          </td>
                          <td>
                            Nome Cooperativa: {{ Form::text('nome', $value = null) }}
                          </td>
                        </tr>
                      </table>
                      {{ Form::close() }}
                      {{Form::submit('Cadastrar!')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
