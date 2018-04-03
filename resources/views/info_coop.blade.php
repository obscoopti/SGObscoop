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
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="left">
                   <strong>Informações da Cooperativa</strong>
                  </div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                      <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr>
                          <td>
                            <div>
                              <strong>Segmento:</strong> {{$coop->tipo}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>CNPJ:</strong> {{$coop->cnpj}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Nome Cooperativa:</strong> {{$coop->nome}} 
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Filiação:</strong> {{$coop->filiacao}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                           <td>
                            <div >
                              <strong>Classe Cooperativa:</strong> {{$coop->classe_cooperativa}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Situação Cooperativa:</strong> {{$coop->situacao}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Auditor:</strong> {{$coop->auditor}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Natureza Jurídica:</strong> {{$coop->natureza_juridica}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Categoria Cooperativa:</strong> {{$coop->categ_coop_sing}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Tipo Cooperativa:</strong> {{$coop->tipo_cooperativa}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Endereço:</strong> {{$coop->endereco}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Complemento:</strong> {{$coop->complemento}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Bairro:</strong> {{$coop->bairro}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Município:</strong> {{$coop->municipio}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>UF:</strong> {{$coop->uf}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>CEP:</strong> {{$coop->cep}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Código Município:</strong> {{$coop->cod_municipio}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Código UF:</strong> {{$coop->cod_uf}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Telefone:</strong> {{$coop->telefone}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Fax:</strong> {{$coop->fax}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>E-mail:</strong> {{$coop->endereco_eletronico}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Site:</strong> {{$coop->site}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Longitude:</strong> {{$coop->long}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Latitude:</strong> {{$coop->lat}}
                            </div>
                          </td>
                        </tr>
                      </table>
                      <div class="btn-group" role="group">  

                        <a href="{{url('fonte_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Fonte de Dados">Fonte-de-Dados</a>

                        <a href="{{url('estatuto_coop/?cnpj='.$coop->cnpj_completo)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Estatuto">Estatutos</a>

                        <a href="{{url('df_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Demonstrativo Financeiro">Demostrativo-Financeiro</a>

                        <a href="{{url('upload_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Upload">Upload</a>

                        <a href="{{url('download_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Download">Download</span></a>

                        <a href="{{url('editar_coop/?id='.$coop->id)}}" type="button" class="button btn btn-secondary btn-xs" data-toggle="tooltip" title="Editar">Editar</span></a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
