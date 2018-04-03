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
                         Cadastro Cooperativas Automático
                    </div>
                </div>
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div align="center">
                     {{Form::open(array('url' => '/cadastro_coop','files'=>'true') ) }}
                     <br><br>
                     <strong>Escolha um tipo de Cooperativa</strong>
                     <br> <br>
                     {{ Form::select('seg_coop' ,array(
                                        '' => 'Selecione',
                                        '1' => 'Cooperativa de Agro',
                                        '0' => 'Cooperativa de Crédito',
                                        '2' => 'Posto de Atendimento',
                                        )) }}
                     <br> <br>
                     <p><strong> Selecione o CSV com as Cooperativas </strong></p>
                     <br>
                     {{Form::file('arq') }}
                     <br> 
                     {{Form::submit('Cadastrar Cooperativas') }}
                     {{Form::close() }}
                    </div>    
            </div>
        </div>
    </div>
</div>
@endsection
