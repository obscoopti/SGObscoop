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
                <div align="center">
                     {{Form::open(array('url' => '/cadastro_coop','files'=>'true') ) }}
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
