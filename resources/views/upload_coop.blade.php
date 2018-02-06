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
                         Upload Arquivos
                    </div>
                    <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coop->cnpj}}
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
                    <div align="center">
                     {{Form::open(array('url' => '/upload_coop','files'=>'true') ) }}
                     {{Form::label('tArq', 'Tipo de arquivo:')}}
                     {{Form::select('tArq', $array_lFonte) }} 
                     <br> 
                     <br> 
                     {{Form::label('anoArq', 'Ano do arquivo:')}}
                     {{Form::select('anoArq', ['2010' => '2010',
                                                 '2011' => '2011',
                                                 '2012' => '2012',
                                                 '2013' => '2013',
                                                 '2014' => '2014',
                                               ]) }}

                     <br>
                     <br>
                     {{Form::file('arq') }}
                     {{Form::hidden('coop_id',$coop->id) }}
                     {{Form::hidden('coop_cnpj',$coop->cnpj) }}
                     <br>
                     {{Form::submit('Upload File') }}
                     {{Form::close() }}
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
