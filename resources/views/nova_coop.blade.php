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
                       Nome Cooperativa: {{ Form::text('nome') }}
                       <br><br>
                       CNPJ Cooperativa:  {{ Form::text('cnpj') }}
                       <br><br>
                       CEP: {{ Form::text('cep') }}
                       <br><br>
                       Endereço:  {{ Form::text('end') }}
                       <br><br>
                       E-mail: {{ Form::text('email') }}
                       <br><br>
                       Telefone:  {{ Form::text('telefone') }}
                       <br><br>
                       {{Form::submit('Cadastrar!')}}
                      {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
