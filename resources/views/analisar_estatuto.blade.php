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
            <strong>Informações do Estatuto</strong>
          </div>
          <div align="right" style="float:right;margin-top:-22px;">
            <fonte style="font-family:verdana"> 
              <strong>
                CNPJ {{$cnpj}}
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
          <div>
            <table class="table table-striped table-bordered table-hover table-condensed">
              <thead>
                <th>Tipo</th>
                <th>Dado</th>
              </thead>  
              <tbody>
                @foreach ($estatuto as $key => $value)
                    <tr>
                      <td>{{$key}}</td>
                      <td>{{$value}}</td>
                    </tr>                         
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
