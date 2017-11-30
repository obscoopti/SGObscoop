@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                         Fonte de dados
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
                    <div align="center">
                        <strong>Ano:</strong>
                        <select>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                        </select>
                        <table>
                            <tr>
                                <td>  RA: </td><td>{{(true)?" &#x25A2;": "&#x2714;"}}</td>
                            </tr> 
                           <tr>
                                <td> BP: </td><td>{{(false)?" &#x25A2;": "&#x2714;"}}</td>
                            </tr>  
                            <tr>
                                <td>  DMPL: </td><td>{{(true)?" &#x25A2;": "&#x2714;"}}</td>
                            </tr>        
                            <tr>
                                <td> Balancete:</td><td> {{(false)?" &#x25A2;": "&#x2714;"}}</td>
                            </tr>
                        </table>
                    </div>                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
