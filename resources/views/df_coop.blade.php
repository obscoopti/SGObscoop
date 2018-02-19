@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                         Demonstrativo Financeiro
                    </div>
                    <div align="right" style="float:right;margin-top:-22px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coop->cnpj_completo}}
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
                    <div align="center" >
                        <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                    <th> <strong> Ano </strong></th> <th> <strong> Status </strong> </th>
                                </thead>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>  {{$dado->ano}} </td><td> {{" &#x2714;"}}</td>
                                </tr>
                            @endforeach  
                        </table>
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
