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
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(function(){
        $('#select1').change(function(){
          $('#warning1').hide();
          $('#warning2').hide();
          $('#warning3').hide();
          if ($(this).val() == "Cooperativa de Crédito") {
            $('#warning1').show();
          }
          else if($(this).val() == "Cooperativa de Agro") 
            $('#warning2').show();
          else if($(this).val() == "Posto de Atendimento") 
            $('#warning3').show();
          else{
            $('#warning1').hide();
            $('#warning2').hide();
            $('#warning3').hide();
          }
        });
      });
    </script>
  </head>
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
            <tr>                                         
              <td>
                Segmento: <select id="select1">
                            <option value="0"></option>
                            <option value="Cooperativa de Crédito">Cooperativa de Crédito</option>
                            <option value="Cooperativa de Agro">Cooperativa de Agro</option>
                            <option value="Posto de Atendimento">Posto de Atendimento</option>
                            </select>
              </td>
            </tr>
            <div id="warning1" style="display:none">
              {{ Form::open(array('url1' => '/nova_coop')) }}
              <table class="table table-striped table-bordered table-hover table-condensed"> 
                <tr>
                  <td>
                    {{ Form::open(array('url' => '/nova_coop')) }}
                    <div class="col-md-6">
                      CNPJ Cooperativa:
                    </div>
                    <div class="col-md-6"> 
                      {{ Form::text('cnpj_coop', '', array('placeholder'=>'Ex: 12345')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      : 
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
              {{Form::hidden('seg_coop','Cooperativa de Crédito') }}
              {{ Form::close() }}
            </div>
<!-- ____________________________________________________________________________________________________________________________________________ -->
            <div id="warning2" style="display:none">
              {{ Form::open(array('url3' => '/nova_coop')) }}
              <table class="table table-striped table-bordered table-hover table-condensed"> 
                <tr>
                  <td>
                    {{ Form::open(array('url' => '/nova_coop')) }}
                    <div class="col-md-6">
                      CNPJ Cooperativa:
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
              {{Form::hidden('seg_coop','Cooperativa de Agro') }}
              {{Form::submit('Cadastrar')}}
              {{ Form::close() }}
            </div> 
<!-- ____________________________________________________________________________________________________________________________________________ -->
            <div id="warning3" style="display:none">
              {{ Form::open(array('url2' => '/nova_coop')) }}
              <table class="table table-striped table-bordered table-hover table-condensed"> 
                <tr>
                  <td>
                    <div class="col-md-6">
                      CNPJ:
                    </div>
                    <div class="col-md-6"> 
                      {{ Form::text('cnpj_post', '', array('placeholder'=>'Ex: 12345')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      Nome Instituição: 
                    </div>
                    <div class="col-md-6">
                      {{ Form::text('insti_post') }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      Nome Instalação:
                    </div>
                    <div class="col-md-6"> 
                      {{ Form::text('insta_post') }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      Tipo Dependência:
                    </div>
                    <div class="col-md-6">
                      {{ Form::text('tipo_post') }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      Ano:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('ano_post', '', array('placeholder'=>'Ex:2015')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      Endereço:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('end_post', '', array('placeholder'=>'Rua Joaquim, 1070')) }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      Complemento:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('comp_post', '', array('placeholder'=>'Ex:Apto 130')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      Bairro:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('bairro_post', '', array('placeholder'=>'Ex:Centro')) }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      Município:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('muni_post', '', array('placeholder'=>'Ex:Porto Ferreira')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      UF:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('uf_post', '', array('placeholder'=>'Ex:São Paulo')) }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      CEP:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('cep_post', '', array('placeholder'=>'Ex:14010100')) }}
                    </div>
                  </td>
                  <td>
                    <div class="col-md-6">
                      Latitude:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('lat_post') }}
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-md-6">
                      Longitude:
                    </div>
                    <div class="col-md-6">  
                      {{ Form::text('long_post') }}
                    </div>
                  </td>
                </tr>
              </table>  
              {{Form::hidden('seg_coop','Posto de Atendimento') }}
              {{Form::submit('Cadastrar3')}}
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection