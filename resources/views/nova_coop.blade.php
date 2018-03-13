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
                   Cadastro Cooperativa Manual
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
                            Segmento: {{ Form::select('seg_coop', array(
                                        '' => 'Selecione',
                                        'Cooperativa de Agro' => 'Cooperativa de Agro',
                                        'Cooperativa de Crédito' => 'Cooperativa de Crédito',
                                        )) }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              CNPJ Cooperativa Abreviado:
                            </div>
                            <div class="col-md-6"> 
                              {{ Form::text('cnpj_coop', '', array('placeholder'=>'Ex: 12345')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              CEP: 
                            </div>
                            <div class="col-md-6">
                              {{ Form::text('cep_coop', '', array('onKeypress'=>'MascaraCep(this)', 'placeholder'=>'00000-000')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                           <td>
                            <div class="col-md-6">
                              Nome Cooperativa:
                            </div>
                            <div class="col-md-6"> 
                              {{ Form::text('nome_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Endereço:
                            </div>
                            <div class="col-md-6">
                              {{ Form::text('end_coop', '', array('placeholder'=>'Ex:Rua, Número')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Tipo Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('tipo_coope', '', array('placeholder'=>'Ex:Livre de Admissão')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Complemento:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('compl_coop', '', array('placeholder'=>'Sala,Andar,Apto,Edifício')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Categoria Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('cat_coop', '', array('placeholder'=>'Ex:Clássica')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Bairro:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('bairro_coop', '', array('placeholder'=>'Ex:Centro')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Classe Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('class_coop', '', array('placeholder'=>'Ex:Singular')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Município:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('municipio_coop', '', array('placeholder'=>'Ex:São Paulo')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Situação Cooperativa:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('sit_coop', '', array('placeholder'=>'Ex:Autorizada em Atividade')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              UF:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('uf_coop', '', array('placeholder'=>'Ex Sigla: SP ')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Natureza Jurídica:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('natureza_coop', '', array('placeholder'=>'Ex:Sociedade Cooperativa')) }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Telefone:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('telefone_coop', '', array('onKeypress'=>'MascaraTelefone(this)', 'placeholder'=>'(00)0000-0000')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Auditor:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('auditor_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Fax:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('fax_coop', '', array('onKeypress'=>'MascaraTelefone(this)', 'placeholder'=>'(00)0000-0000')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Código Compensação:
                            </div>  
                            <div class="col-md-6">
                              {{ Form::text('cod_comp_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              E-mail:
                            </div>
                            <div class="col-md-6"> 
                              {{ Form::text('email_coop', '', array('placeholder'=>'Ex:wiltor@gmail.com')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Filiação:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('filiacao_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Site:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('site_coop','', array('placeholder'=>'Ex:www.wiltor.com.br')) }}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="col-md-6">
                              Longitude:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('long_coop') }}
                            </div>
                          </td>
                          <td>
                            <div class="col-md-6">
                              Latitude:
                            </div>
                            <div class="col-md-6">  
                              {{ Form::text('lat_coop') }}
                            </div>
                          </td>
                        </tr>
                      </table>
                      {{Form::submit('Cadastrar')}}
                      {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
