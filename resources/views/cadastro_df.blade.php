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
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        function myFunction(appId) {
            var idval = document.getElementById(appId).value;
            var idid = document.getElementById(appId);
            if(appId == 'Ativo Circulante'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133'), i;
                    for (var i = 0; i < appBanners.length; i ++) {

                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('11x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none';                    
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1131'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1132'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1133'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1141'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1142'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('11x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row';                    
                    }
                }
            }
            //----------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Créditos'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1131'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1132'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1133'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux1 = document.getElementById('Disponibilidades').value;
                    var aux2 = document.getElementById('Ativos Financeiros').value;
                    var aux16 = document.getElementById('Estoques').value;
                    var aux17 = document.getElementById('Estoque Próprio').value;
                    var aux18 = document.getElementById('de Produtos Agropecuários').value;
                    var aux19 = document.getElementById('de Bens de Fornecimento').value;
                    var aux20 = document.getElementById('de Produtos Industrializados').value;
                    var aux21 = document.getElementById('de Ativos Biológicos').value;
                    var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                    var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                    var aux24 = document.getElementById('Mercadorias em Depósito').value;
                    var aux25 = document.getElementById('de Cooperados').value;
                    var aux26 = document.getElementById('de Terceiros').value;
                    var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                        var appBanners = document.getElementsByClassName('11'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Disponibilidades' || appId == 'Ativos Financeiros' || appId == 'Dispêndios do Exercício Seguinte'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Disponibilidades').value;
                    var aux2 = document.getElementById('Ativos Financeiros').value;
                    var aux3 = document.getElementById('Créditos').value;
                    var aux4 = document.getElementById('Cooperados').value;
                    var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                    var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                    var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                    var aux8 = document.getElementById('Clientes').value;
                    var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                    var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                    var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                    var aux12 = document.getElementById('Outros Créditos').value;
                    var aux13 = document.getElementById('Outros - Valores a Receber').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                    var aux16 = document.getElementById('Estoques').value;
                    var aux17 = document.getElementById('Estoque Próprio').value;
                    var aux18 = document.getElementById('de Produtos Agropecuários').value;
                    var aux19 = document.getElementById('de Bens de Fornecimento').value;
                    var aux20 = document.getElementById('de Produtos Industrializados').value;
                    var aux21 = document.getElementById('de Ativos Biológicos').value;
                    var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                    var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                    var aux24 = document.getElementById('Mercadorias em Depósito').value;
                    var aux25 = document.getElementById('de Cooperados').value;
                    var aux26 = document.getElementById('de Terceiros').value;
                    var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                        var appBanners = document.getElementsByClassName('11'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //----------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Cooperados'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1131x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux8 = document.getElementById('Clientes').value;
                    var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                    var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                    var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                    var aux12 = document.getElementById('Outros Créditos').value;
                    var aux13 = document.getElementById('Outros - Valores a Receber').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                    if(aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('113'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Disponibilidades').value;
                        var aux2 = document.getElementById('Ativos Financeiros').value;
                        var aux16 = document.getElementById('Estoques').value;
                        var aux17 = document.getElementById('Estoque Próprio').value;
                        var aux18 = document.getElementById('de Produtos Agropecuários').value;
                        var aux19 = document.getElementById('de Bens de Fornecimento').value;
                        var aux20 = document.getElementById('de Produtos Industrializados').value;
                        var aux21 = document.getElementById('de Ativos Biológicos').value;
                        var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                        var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                        var aux24 = document.getElementById('Mercadorias em Depósito').value;
                        var aux25 = document.getElementById('de Cooperados').value;
                        var aux26 = document.getElementById('de Terceiros').value;
                        var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                            var appBanners = document.getElementsByClassName('11'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //-----------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Cooperados - Valores a Receber' || appId == '(-) Perdas Estimadas c/ CLD - Cooperados' || appId == '(-) Ajuste a Valor Presente - Cooperados'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1131'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                    var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                    var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                    if(aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0){
                        var appBanners = document.getElementsByClassName('1131'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux8 = document.getElementById('Clientes').value;
                        var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                        var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                        var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                        var aux12 = document.getElementById('Outros Créditos').value;
                        var aux13 = document.getElementById('Outros - Valores a Receber').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                        if(aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                            var appBanners = document.getElementsByClassName('113'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Disponibilidades').value;
                            var aux2 = document.getElementById('Ativos Financeiros').value;
                            var aux16 = document.getElementById('Estoques').value;
                            var aux17 = document.getElementById('Estoque Próprio').value;
                            var aux18 = document.getElementById('de Produtos Agropecuários').value;
                            var aux19 = document.getElementById('de Bens de Fornecimento').value;
                            var aux20 = document.getElementById('de Produtos Industrializados').value;
                            var aux21 = document.getElementById('de Ativos Biológicos').value;
                            var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                            var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                            var aux24 = document.getElementById('Mercadorias em Depósito').value;
                            var aux25 = document.getElementById('de Cooperados').value;
                            var aux26 = document.getElementById('de Terceiros').value;
                            var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                                var appBanners = document.getElementsByClassName('11'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                  
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Clientes'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1132x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux4 = document.getElementById('Cooperados').value;
                    var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                    var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                    var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                    var aux12 = document.getElementById('Outros Créditos').value;
                    var aux13 = document.getElementById('Outros - Valores a Receber').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                    if(aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('113'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Disponibilidades').value;
                        var aux2 = document.getElementById('Ativos Financeiros').value;
                        var aux16 = document.getElementById('Estoques').value;
                        var aux17 = document.getElementById('Estoque Próprio').value;
                        var aux18 = document.getElementById('de Produtos Agropecuários').value;
                        var aux19 = document.getElementById('de Bens de Fornecimento').value;
                        var aux20 = document.getElementById('de Produtos Industrializados').value;
                        var aux21 = document.getElementById('de Ativos Biológicos').value;
                        var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                        var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                        var aux24 = document.getElementById('Mercadorias em Depósito').value;
                        var aux25 = document.getElementById('de Cooperados').value;
                        var aux26 = document.getElementById('de Terceiros').value;
                        var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                    }
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                        var appBanners = document.getElementsByClassName('11'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Clientes - Valores a Receber' || appId == '(-) Perdas Estimadas c/ CLD - Clientes' || appId == '(-) Ajuste a Valor Presente - Clientes'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1132'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                    var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                    var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                    if(aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0){
                        var appBanners = document.getElementsByClassName('1132'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux4 = document.getElementById('Cooperados').value;
                        var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                        var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                        var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                        var aux12 = document.getElementById('Outros Créditos').value;
                        var aux13 = document.getElementById('Outros - Valores a Receber').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                        if(aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 ){
                            var appBanners = document.getElementsByClassName('113'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                              
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Disponibilidades').value;
                            var aux2 = document.getElementById('Ativos Financeiros').value;
                            var aux16 = document.getElementById('Estoques').value;
                            var aux17 = document.getElementById('Estoque Próprio').value;
                            var aux18 = document.getElementById('de Produtos Agropecuários').value;
                            var aux19 = document.getElementById('de Bens de Fornecimento').value;
                            var aux20 = document.getElementById('de Produtos Industrializados').value;
                            var aux21 = document.getElementById('de Ativos Biológicos').value;
                            var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                            var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                            var aux24 = document.getElementById('Mercadorias em Depósito').value;
                            var aux25 = document.getElementById('de Cooperados').value;
                            var aux26 = document.getElementById('de Terceiros').value;
                            var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                                var appBanners = document.getElementsByClassName('11'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                               
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Outros Créditos'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1133x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux4 = document.getElementById('Cooperados').value;
                    var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                    var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                    var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                    var aux8 = document.getElementById('Clientes').value;
                    var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                    var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                    var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                    if(aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0){
                        var appBanners = document.getElementsByClassName('113'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Disponibilidades').value;
                        var aux2 = document.getElementById('Ativos Financeiros').value;
                        var aux16 = document.getElementById('Estoques').value;
                        var aux17 = document.getElementById('Estoque Próprio').value;
                        var aux18 = document.getElementById('de Produtos Agropecuários').value;
                        var aux19 = document.getElementById('de Bens de Fornecimento').value;
                        var aux20 = document.getElementById('de Produtos Industrializados').value;
                        var aux21 = document.getElementById('de Ativos Biológicos').value;
                        var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                        var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                        var aux24 = document.getElementById('Mercadorias em Depósito').value;
                        var aux25 = document.getElementById('de Cooperados').value;
                        var aux26 = document.getElementById('de Terceiros').value;
                        var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                            var appBanners = document.getElementsByClassName('11'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                               
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Outros - Valores a Receber' || appId == '(-) Perdas Estimadas c/ CLD - Outros' || appId == '(-) Ajuste a Valor Presente - Outros'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('113'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1133'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux13 = document.getElementById('Outros - Valores a Receber').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                    if(aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('1133'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux4 = document.getElementById('Cooperados').value;
                        var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                        var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                        var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                        var aux8 = document.getElementById('Clientes').value;
                        var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                        var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                        var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                        if(aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0){
                            var appBanners = document.getElementsByClassName('113'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Disponibilidades').value;
                            var aux2 = document.getElementById('Ativos Financeiros').value;
                            var aux16 = document.getElementById('Estoques').value;
                            var aux17 = document.getElementById('Estoque Próprio').value;
                            var aux18 = document.getElementById('de Produtos Agropecuários').value;
                            var aux19 = document.getElementById('de Bens de Fornecimento').value;
                            var aux20 = document.getElementById('de Produtos Industrializados').value;
                            var aux21 = document.getElementById('de Ativos Biológicos').value;
                            var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                            var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                            var aux24 = document.getElementById('Mercadorias em Depósito').value;
                            var aux25 = document.getElementById('de Cooperados').value;
                            var aux26 = document.getElementById('de Terceiros').value;
                            var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0){
                                var appBanners = document.getElementsByClassName('11'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                  
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Estoques'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                 
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1141'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1142'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux1 = document.getElementById('Disponibilidades').value;
                    var aux2 = document.getElementById('Ativos Financeiros').value;
                    var aux3 = document.getElementById('Créditos').value;
                    var aux4 = document.getElementById('Cooperados').value;
                    var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                    var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                    var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                    var aux8 = document.getElementById('Clientes').value;
                    var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                    var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                    var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                    var aux12 = document.getElementById('Outros Créditos').value;
                    var aux13 = document.getElementById('Outros - Valores a Receber').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                    var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux27 == '' && aux27 == 0){
                        var appBanners = document.getElementsByClassName('11'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Estoque Próprio'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1141x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux24 = document.getElementById('Mercadorias em Depósito').value;
                    var aux25 = document.getElementById('de Cooperados').value;
                    var aux26 = document.getElementById('de Terceiros').value;
                    if(aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0){
                        var appBanners = document.getElementsByClassName('114'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Disponibilidades').value;
                        var aux2 = document.getElementById('Ativos Financeiros').value;
                        var aux3 = document.getElementById('Créditos').value;
                        var aux4 = document.getElementById('Cooperados').value;
                        var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                        var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                        var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                        var aux8 = document.getElementById('Clientes').value;
                        var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                        var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                        var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                        var aux12 = document.getElementById('Outros Créditos').value;
                        var aux13 = document.getElementById('Outros - Valores a Receber').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                        var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux27 == '' && aux27 == 0){
                            var appBanners = document.getElementsByClassName('11'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                           
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'de Produtos Agropecuários' || appId == 'de Bens de Fornecimento' || appId == 'de Produtos Industrializados' || appId == 'de Ativos Biológicos' || appId == 'Almoxarifados de Bens de Produção' || appId == '(-) Ajustes Avaliação Patrimonial - Estoque'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                  
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1141'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux18 = document.getElementById('de Produtos Agropecuários').value;
                    var aux19 = document.getElementById('de Bens de Fornecimento').value;
                    var aux20 = document.getElementById('de Produtos Industrializados').value;
                    var aux21 = document.getElementById('de Ativos Biológicos').value;
                    var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                    var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                    if(aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0){
                        var appBanners = document.getElementsByClassName('1141'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                    
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux24 = document.getElementById('Mercadorias em Depósito').value;
                        var aux25 = document.getElementById('de Cooperados').value;
                        var aux26 = document.getElementById('de Terceiros').value;
                        if( aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0){
                            var appBanners = document.getElementsByClassName('114'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Disponibilidades').value;
                            var aux2 = document.getElementById('Ativos Financeiros').value;
                            var aux3 = document.getElementById('Créditos').value;
                            var aux4 = document.getElementById('Cooperados').value;
                            var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                            var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                            var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                            var aux8 = document.getElementById('Clientes').value;
                            var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                            var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                            var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                            var aux12 = document.getElementById('Outros Créditos').value;
                            var aux13 = document.getElementById('Outros - Valores a Receber').value;
                            var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                            var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                            var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux27 == '' && aux27 == 0){
                                var appBanners = document.getElementsByClassName('11'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                               
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Mercadorias em Depósito'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                  
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1142x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux17 = document.getElementById('Estoque Próprio').value;
                    var aux18 = document.getElementById('de Produtos Agropecuários').value;
                    var aux19 = document.getElementById('de Bens de Fornecimento').value;
                    var aux20 = document.getElementById('de Produtos Industrializados').value;
                    var aux21 = document.getElementById('de Ativos Biológicos').value;
                    var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                    var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                    if(aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0){
                        var appBanners = document.getElementsByClassName('114'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Disponibilidades').value;
                        var aux2 = document.getElementById('Ativos Financeiros').value;
                        var aux3 = document.getElementById('Créditos').value;
                        var aux4 = document.getElementById('Cooperados').value;
                        var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                        var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                        var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                        var aux8 = document.getElementById('Clientes').value;
                        var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                        var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                        var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                        var aux12 = document.getElementById('Outros Créditos').value;
                        var aux13 = document.getElementById('Outros - Valores a Receber').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                        var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux27 == '' && aux27 == 0){
                            var appBanners = document.getElementsByClassName('11'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'de Cooperados' || appId == 'de Terceiros'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('11'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('114'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1142'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux25 = document.getElementById('de Cooperados').value;
                    var aux26 = document.getElementById('de Terceiros').value;
                    if(aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0){
                        var appBanners = document.getElementsByClassName('1142'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux17 = document.getElementById('Estoque Próprio').value;
                        var aux18 = document.getElementById('de Produtos Agropecuários').value;
                        var aux19 = document.getElementById('de Bens de Fornecimento').value;
                        var aux20 = document.getElementById('de Produtos Industrializados').value;
                        var aux21 = document.getElementById('de Ativos Biológicos').value;
                        var aux22 = document.getElementById('Almoxarifados de Bens de Produção').value;
                        var aux23 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Estoque').value;
                        if(aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0){
                            var appBanners = document.getElementsByClassName('114'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                            
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Disponibilidades').value;
                            var aux2 = document.getElementById('Ativos Financeiros').value;
                            var aux3 = document.getElementById('Créditos').value;
                            var aux4 = document.getElementById('Cooperados').value;
                            var aux5 = document.getElementById('Cooperados - Valores a Receber').value;
                            var aux6 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados').value;
                            var aux7 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados').value;
                            var aux8 = document.getElementById('Clientes').value;
                            var aux9 = document.getElementById('Clientes - Valores a Receber').value;
                            var aux10 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes').value;
                            var aux11 = document.getElementById('(-) Ajuste a Valor Presente - Clientes').value;
                            var aux12 = document.getElementById('Outros Créditos').value;
                            var aux13 = document.getElementById('Outros - Valores a Receber').value;
                            var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros').value;
                            var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros').value;
                            var aux27 = document.getElementById('Dispêndios do Exercício Seguinte').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux27 == '' && aux27 == 0){
                                var appBanners = document.getElementsByClassName('11'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Ativo Não Circulante'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('121'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1211'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1211x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1212'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1212x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1213'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1214'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1214x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('122'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('122x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('123'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1231'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1231x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1232'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1232x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1233'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('124'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('124x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('125'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('125x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('121'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1211'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1211x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1212'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1212x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1213'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1214'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1214x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('122'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('122x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                   
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('123'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1231'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1231x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1232'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                 
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1232x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1233'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('124'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('124x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('125'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('125x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Realizável a Longo Prazo'){
                 if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1211'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1211x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1212'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1212x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1213'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1214'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                 
                        appBanners[i].style.display = 'none'; 
                    }
                    var appBanners = document.getElementsByClassName('1214x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners = document.getElementsByClassName('1211'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1211x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1212'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1212x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1213'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1214'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1214x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux16 = document.getElementById('Investimentos').value;
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    var aux21 = document.getElementById('Imobilizado').value;
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    var aux36 = document.getElementById('Intangível').value;
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    var aux39 = document.getElementById('Diferido').value;
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                    if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Cooperados - Longo Prazo'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1211x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }

                }
                else{
                    var appBanners = document.getElementsByClassName('1211x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'table-row'; 
                    }
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    if(aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                               
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Cooperados a Receber - L.P.' || appId == '(-) Perdas Estimadas c/ CLD - Cooperados L.P.' || appId == '(-) Ajuste a Valor Presente - Cooperados L.P.'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1211'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    if(aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0){
                        var appBanners = document.getElementsByClassName('1211'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                               
                                appBanners[i].style.display = 'table-row'; 
                        }
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        if(aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                            var appBanners = document.getElementsByClassName('121'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux16 = document.getElementById('Investimentos').value;
                            var aux17 = document.getElementById('Sociedades Cooperativas').value;
                            var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                            var aux19 = document.getElementById('Outros Investimentos').value;
                            var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                            var aux21 = document.getElementById('Imobilizado').value;
                            var aux22 = document.getElementById('Bens Corpóreos').value;
                            var aux23 = document.getElementById('Imóveis e Instalações').value;
                            var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                            var aux25 = document.getElementById('Móveis e Utensílios').value;
                            var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                            var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                            var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                            var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                            var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                            var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                            var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                            var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                            var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                            var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                            var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                            var aux36 = document.getElementById('Intangível').value;
                            var aux37 = document.getElementById('Bens Incorpóreos').value;
                            var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                            var aux39 = document.getElementById('Diferido').value;
                            var aux40 = document.getElementById('Ativo Diferido').value;
                            var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                            if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                                var appBanners = document.getElementsByClassName('12'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                   
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Clientes - Longo Prazo'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1212x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }

                }
                else{
                    var appBanners = document.getElementsByClassName('1212x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'table-row'; 
                    }
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                               
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Clientes a Receber - L.P.' || appId == '(-) Perdas Estimadas c/ CLD - Clientes L.P.' || appId == '(-) Ajuste a Valor Presente - Clientes L.P.'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1212'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    if(aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0){
                        var appBanners = document.getElementsByClassName('1212'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                            var appBanners = document.getElementsByClassName('121'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux16 = document.getElementById('Investimentos').value;
                            var aux17 = document.getElementById('Sociedades Cooperativas').value;
                            var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                            var aux19 = document.getElementById('Outros Investimentos').value;
                            var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                            var aux21 = document.getElementById('Imobilizado').value;
                            var aux22 = document.getElementById('Bens Corpóreos').value;
                            var aux23 = document.getElementById('Imóveis e Instalações').value;
                            var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                            var aux25 = document.getElementById('Móveis e Utensílios').value;
                            var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                            var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                            var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                            var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                            var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                            var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                            var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                            var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                            var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                            var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                            var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                            var aux36 = document.getElementById('Intangível').value;
                            var aux37 = document.getElementById('Bens Incorpóreos').value;
                            var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                            var aux39 = document.getElementById('Diferido').value;
                            var aux40 = document.getElementById('Ativo Diferido').value;
                            var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                            if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                                var appBanners = document.getElementsByClassName('12'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                 
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Estoques em Formação'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                                
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Outros - Longo Prazo'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                      
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1214x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('1214x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0){
                        var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Outros Valores a Receber - L.P.' || appId == 'Depósitos Judiciais' || appId == '(-) Perdas Estimadas c/ CLD - Outros L.P.' || appId == '(-) Ajuste a Valor Presente - Outros L.P.'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('121'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1214'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    if(aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0){
                        var appBanners = document.getElementsByClassName('1214'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0){
                            var appBanners = document.getElementsByClassName('121'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                              
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux16 = document.getElementById('Investimentos').value;
                            var aux17 = document.getElementById('Sociedades Cooperativas').value;
                            var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                            var aux19 = document.getElementById('Outros Investimentos').value;
                            var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                            var aux21 = document.getElementById('Imobilizado').value;
                            var aux22 = document.getElementById('Bens Corpóreos').value;
                            var aux23 = document.getElementById('Imóveis e Instalações').value;
                            var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                            var aux25 = document.getElementById('Móveis e Utensílios').value;
                            var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                            var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                            var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                            var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                            var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                            var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                            var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                            var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                            var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                            var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                            var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                            var aux36 = document.getElementById('Intangível').value;
                            var aux37 = document.getElementById('Bens Incorpóreos').value;
                            var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                            var aux39 = document.getElementById('Diferido').value;
                            var aux40 = document.getElementById('Ativo Diferido').value;
                            var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                            if(aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                                var appBanners = document.getElementsByClassName('12'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                   
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Investimentos'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('122x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('122x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                      
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    var aux21 = document.getElementById('Imobilizado').value;
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    var aux36 = document.getElementById('Intangível').value;
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    var aux39 = document.getElementById('Diferido').value;
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                    if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Sociedades Cooperativas' || appId == 'Propriedades p/ Investimentos' || appId == 'Outros Investimentos' || appId == '(-) Ajustes Avaliação Patrimonial - Investim'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('122'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    if(aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0){
                        var appBanners = document.getElementsByClassName('122'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                           
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Imobilizado'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1231'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1231x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1232'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                      
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1232x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1233'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('1231'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                       
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1231x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1232'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1232x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        appBanners[i].disabled = false;
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var appBanners = document.getElementsByClassName('1233'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    var aux16 = document.getElementById('Investimentos').value;
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    var aux36 = document.getElementById('Intangível').value;
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    var aux39 = document.getElementById('Diferido').value;
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                        var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Bens Corpóreos'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1231x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('1231x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                        
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    if(aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0){
                        var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                              
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Imóveis e Instalações' || appId == 'Máquinas e Equipamentos' || appId == 'Móveis e Utensílios' || appId == 'Veículos e Máquinas Agrícolas' || appId == 'Outros Bens Corpóreos' || appId == 'Ativo Biológico de Produção'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                   
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1231'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    if(aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('1231'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        if(aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0){
                            var appBanners = document.getElementsByClassName('123'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                            var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                            var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                            var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                            var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                            var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                            var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                            var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                            var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                            var aux10 = document.getElementById('Estoques em Formação').value;
                            var aux11 = document.getElementById('Outros - Longo Prazo').value;
                            var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                            var aux13 = document.getElementById('Depósitos Judiciais').value;
                            var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                            var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                            var aux16 = document.getElementById('Investimentos').value;
                            var aux17 = document.getElementById('Sociedades Cooperativas').value;
                            var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                            var aux19 = document.getElementById('Outros Investimentos').value;
                            var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                            var aux36 = document.getElementById('Intangível').value;
                            var aux37 = document.getElementById('Bens Incorpóreos').value;
                            var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                            var aux39 = document.getElementById('Diferido').value;
                            var aux40 = document.getElementById('Ativo Diferido').value;
                            var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                                var appBanners = document.getElementsByClassName('12'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                               
                                    appBanners[i].style.display = 'table-row'; 
                                }   
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == '(-) Depreciação Acumulada'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1232x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('1232x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    if(aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux35 == '' && aux35 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == '(-) Depreciação Acumulada - Imóveis e Instala' || appId == '(-) Depreciação Acumulada - Maquinas e Equipamentos' || appId == '(-) Depreciação Acumulada - Móveis e Utensíli' || appId == '(-) Depreciação Acumulada - Veículos e Máquin' || appId == '(-) Depreciação Acumulada - Outros Bens Corpó' || appId == '(-) Redução de Exploração Ativo Biológico'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
            
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('1232'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
         
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    if(aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0){
                        var appBanners = document.getElementsByClassName('1232'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        if(aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux35 == '' && aux35 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('123'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                          
                                appBanners[i].style.display = 'table-row'; 
                            }
                            var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                            var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                            var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                            var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                            var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                            var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                            var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                            var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                            var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                            var aux10 = document.getElementById('Estoques em Formação').value;
                            var aux11 = document.getElementById('Outros - Longo Prazo').value;
                            var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                            var aux13 = document.getElementById('Depósitos Judiciais').value;
                            var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                            var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                            var aux16 = document.getElementById('Investimentos').value;
                            var aux17 = document.getElementById('Sociedades Cooperativas').value;
                            var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                            var aux19 = document.getElementById('Outros Investimentos').value;
                            var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                            var aux36 = document.getElementById('Intangível').value;
                            var aux37 = document.getElementById('Bens Incorpóreos').value;
                            var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                            var aux39 = document.getElementById('Diferido').value;
                            var aux40 = document.getElementById('Ativo Diferido').value;
                            var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                            if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                                var appBanners = document.getElementsByClassName('12'), i;
                                for (var i = 0; i < appBanners.length; i ++) {
                                  
                                    appBanners[i].style.display = 'table-row'; 
                                }
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == '(-) Ajustes Avaliação Patrimonial - Bens Corp'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    if(aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('123'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux39 == '' && aux39 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                             
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Intangível'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('124x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('124x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                     
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    var aux16 = document.getElementById('Investimentos').value;
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    var aux21 = document.getElementById('Imobilizado').value;
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    var aux39 = document.getElementById('Diferido').value;
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Bens Incorpóreos' || appId == '(-) Amortização - Bens Intangível'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                          
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('124'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    if(aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0){
                        var appBanners = document.getElementsByClassName('124'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux39 = document.getElementById('Diferido').value;
                        var aux40 = document.getElementById('Ativo Diferido').value;
                        var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                          
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Diferido'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('125x'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                            
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var appBanners = document.getElementsByClassName('125x'), i;
                    for (var i = 0; i < appBanners.length; i ++) {
                    
                        appBanners[i].style.display = 'table-row'; 
                    }
                    var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                    var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                    var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                    var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                    var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                    var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                    var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                    var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                    var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                    var aux10 = document.getElementById('Estoques em Formação').value;
                    var aux11 = document.getElementById('Outros - Longo Prazo').value;
                    var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                    var aux13 = document.getElementById('Depósitos Judiciais').value;
                    var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                    var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                    var aux16 = document.getElementById('Investimentos').value;
                    var aux17 = document.getElementById('Sociedades Cooperativas').value;
                    var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                    var aux19 = document.getElementById('Outros Investimentos').value;
                    var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                    var aux21 = document.getElementById('Imobilizado').value;
                    var aux22 = document.getElementById('Bens Corpóreos').value;
                    var aux23 = document.getElementById('Imóveis e Instalações').value;
                    var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                    var aux25 = document.getElementById('Móveis e Utensílios').value;
                    var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                    var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                    var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                    var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                    var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                    var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                    var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                    var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                    var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                    var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                    var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                    var aux36 = document.getElementById('Intangível').value;
                    var aux37 = document.getElementById('Bens Incorpóreos').value;
                    var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux99 == '' && aux99 == 0){
                        var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                           
                            appBanners[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //---------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId == 'Ativo Diferido' || appId == '(-) Amortização Acumulada'){
                if (idval != '' || idval > 0) {
                    var appBanners = document.getElementsByClassName('12'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                       
                            appBanners[i].style.display = 'none'; 
                        }
                    var appBanners = document.getElementsByClassName('125'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                         
                            appBanners[i].style.display = 'none'; 
                        }
                }
                else{
                    var aux40 = document.getElementById('Ativo Diferido').value;
                    var aux41 = document.getElementById('(-) Amortização Acumulada').value;
                    if(aux40 == '' && aux40 == 0 && aux41 == '' && aux41 == 0){
                        var appBanners = document.getElementsByClassName('125'), i;
                        for (var i = 0; i < appBanners.length; i ++) {
                        
                            appBanners[i].style.display = 'table-row'; 
                        }
                        var aux1 = document.getElementById('Realizável a Longo Prazo').value;
                        var aux2 = document.getElementById('Cooperados - Longo Prazo').value;
                        var aux3 = document.getElementById('Cooperados a Receber - L.P.').value;
                        var aux4 = document.getElementById('(-) Perdas Estimadas c/ CLD - Cooperados L.P.').value;
                        var aux5 = document.getElementById('(-) Ajuste a Valor Presente - Cooperados L.P.').value;
                        var aux6 = document.getElementById('Clientes - Longo Prazo').value;
                        var aux7 = document.getElementById('Clientes a Receber - L.P.').value;
                        var aux8 = document.getElementById('(-) Perdas Estimadas c/ CLD - Clientes L.P.').value;
                        var aux9 = document.getElementById('(-) Ajuste a Valor Presente - Clientes L.P.').value;
                        var aux10 = document.getElementById('Estoques em Formação').value;
                        var aux11 = document.getElementById('Outros - Longo Prazo').value;
                        var aux12 = document.getElementById('Outros Valores a Receber - L.P.').value;
                        var aux13 = document.getElementById('Depósitos Judiciais').value;
                        var aux14 = document.getElementById('(-) Perdas Estimadas c/ CLD - Outros L.P.').value;
                        var aux15 = document.getElementById('(-) Ajuste a Valor Presente - Outros L.P.').value;
                        var aux16 = document.getElementById('Investimentos').value;
                        var aux17 = document.getElementById('Sociedades Cooperativas').value;
                        var aux18 = document.getElementById('Propriedades p/ Investimentos').value;
                        var aux19 = document.getElementById('Outros Investimentos').value;
                        var aux20 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Investim').value;
                        var aux21 = document.getElementById('Imobilizado').value;
                        var aux22 = document.getElementById('Bens Corpóreos').value;
                        var aux23 = document.getElementById('Imóveis e Instalações').value;
                        var aux24 = document.getElementById('Máquinas e Equipamentos').value;
                        var aux25 = document.getElementById('Móveis e Utensílios').value;
                        var aux26 = document.getElementById('Veículos e Máquinas Agrícolas').value;
                        var aux27 = document.getElementById('Outros Bens Corpóreos').value;
                        var aux99 = document.getElementById('Ativo Biológico de Produção').value;
                        var aux28 = document.getElementById('(-) Depreciação Acumulada').value;
                        var aux29 = document.getElementById('(-) Depreciação Acumulada - Imóveis e Instala').value;
                        var aux30 = document.getElementById('(-) Depreciação Acumulada - Maquinas e Equipamentos').value;
                        var aux31 = document.getElementById('(-) Depreciação Acumulada - Móveis e Utensíli').value;
                        var aux32 = document.getElementById('(-) Depreciação Acumulada - Veículos e Máquin').value;
                        var aux33 = document.getElementById('(-) Depreciação Acumulada - Outros Bens Corpó').value;
                        var aux34 = document.getElementById('(-) Redução de Exploração Ativo Biológico').value;
                        var aux35 = document.getElementById('(-) Ajustes Avaliação Patrimonial - Bens Corp').value;
                        var aux36 = document.getElementById('Intangível').value;
                        var aux37 = document.getElementById('Bens Incorpóreos').value;
                        var aux38 = document.getElementById('(-) Amortização - Bens Intangível').value;
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux15 == '' && aux15 == 0 && aux16 == '' && aux16 == 0 && aux17 == '' && aux17 == 0 && aux18 == '' && aux18 == 0 && aux19 == '' && aux19 == 0 && aux20 == '' && aux20 == 0 && aux21 == '' && aux21 == 0 && aux22 == '' && aux22 == 0 && aux23 == '' && aux23 == 0 && aux24 == '' && aux24 == 0 && aux25 == '' && aux25 == 0 && aux26 == '' && aux26 == 0 && aux27 == '' && aux27 == 0 && aux28 == '' && aux28 == 0 && aux29 == '' && aux29 == 0 && aux30 == '' && aux30 == 0 && aux31 == '' && aux31 == 0 && aux32 == '' && aux32 == 0 && aux33 == '' && aux33 == 0 && aux34 == '' && aux34 == 0 && aux35 == '' && aux35 == 0 && aux36 == '' && aux36 == 0 && aux37 == '' && aux37 == 0 && aux38 == '' && aux38 == 0 && aux99 == '' && aux99 == 0){
                            var appBanners = document.getElementsByClassName('12'), i;
                            for (var i = 0; i < appBanners.length; i ++) {
                           
                                appBanners[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
        }
        //------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
        function myFunction1(appId2) {
            var idval2 = document.getElementById(appId2).value;
            var idid2 = document.getElementById(appId2);
            if(appId2 == 'Passivo Circulante'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('211'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('211x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners2 = document.getElementsByClassName('211'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('211x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'table-row'; 
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Obrigações'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('21'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('211x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners2 = document.getElementsByClassName('21'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('211x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Empréstimos e Financiamentos' || appId2 == 'Obrigações com Cooperados' || appId2 == 'Fornecedores' || appId2 == 'Tributárias e Fiscais' || appId2 == 'Sociais e Trabalhistas' || appId2 == 'Outras Obrigações' || appId2 == '(-) Ajustes a Valor Presente - Curto Prazo'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('21'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('211'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById("Empréstimos e Financiamentos").value;
                    var aux2 = document.getElementById('Obrigações com Cooperados').value;
                    var aux3 = document.getElementById('Fornecedores').value;
                    var aux4 = document.getElementById('Tributárias e Fiscais').value;
                    var aux5 = document.getElementById('Sociais e Trabalhistas').value;
                    var aux6 = document.getElementById('Outras Obrigações').value;
                    var aux7 = document.getElementById('(-) Ajustes a Valor Presente - Curto Prazo').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0){
                        var appBanners2 = document.getElementsByClassName('21'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                           
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        var appBanners2 = document.getElementsByClassName('211'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                            
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Passivo Não Circulante'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('221'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('221x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners2 = document.getElementsByClassName('221'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('221x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'table-row'; 
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Obrigações - Longo Prazo'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('22'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                   
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('221x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners2 = document.getElementsByClassName('22'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('221x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Empréstimos e Financiamentos - L.P.' || appId2 == 'Obrigações com Cooperados - L.P.' || appId2 == 'Fornecedores - L.P.' || appId2 == 'Tributárias - L.P.' || appId2 == 'Sociais e Trabalhistas - L.P.' || appId2 == 'Provisões Fiscais - L.P.' || appId2 == 'Outras Obrigações - L.P.' || appId2 == '(-) Ajustes a Valor Presente - L.P.'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('22'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                   
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('221'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById("Empréstimos e Financiamentos - L.P.").value;
                    var aux2 = document.getElementById('Obrigações com Cooperados - L.P.').value;
                    var aux3 = document.getElementById('Fornecedores - L.P.').value;
                    var aux4 = document.getElementById('Tributárias - L.P.').value;
                    var aux5 = document.getElementById('Sociais e Trabalhistas - L.P.').value;
                    var aux6 = document.getElementById('Provisões Fiscais - L.P.').value;
                    var aux7 = document.getElementById('Outras Obrigações - L.P.').value;
                    var aux8 = document.getElementById('(-) Ajustes a Valor Presente - L.P.').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0){
                        var appBanners2 = document.getElementsByClassName('22'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                           
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        var appBanners2 = document.getElementsByClassName('221'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                           
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Patrimônio Líquido'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('231'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('231x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('235'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners2 = document.getElementsByClassName('231'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('231x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    var appBanners2 = document.getElementsByClassName('235'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Capital Social Integralizado'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('231x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux3 = document.getElementById('Reserva de Capital').value;
                    var aux4 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux5 = document.getElementById('Outras Reservas de Capital').value;
                    var aux6 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux8 = document.getElementById('Reserva de Reavaliação').value;
                    var aux9 = document.getElementById('Reserva de Sobras').value;
                    var aux10 = document.getElementById('Reserva Legal').value;
                    var aux11 = document.getElementById('RATES / FATES').value;
                    var aux12 = document.getElementById('Outras Reservas').value;
                    var aux13 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;
                    var appBanners2 = document.getElementsByClassName('231x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    if(aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                        var appBanners2 = document.getElementsByClassName('23'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                          
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Capital Social Subscrito' || appId2 == '(-) Capital Social a Integralizar'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('231'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Subscrito').value;
                    var aux2 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux3 = document.getElementById('Reserva de Capital').value;
                    var aux4 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux5 = document.getElementById('Outras Reservas de Capital').value;
                    var aux6 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux8 = document.getElementById('Reserva de Reavaliação').value;
                    var aux9 = document.getElementById('Reserva de Sobras').value;
                    var aux10 = document.getElementById('Reserva Legal').value;
                    var aux11 = document.getElementById('RATES / FATES').value;
                    var aux12 = document.getElementById('Outras Reservas').value;
                    var aux13 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;

                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0){
                        var appBanners2 = document.getElementsByClassName('231'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                         
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        if(aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                            var appBanners2 = document.getElementsByClassName('23'), i;
                            for (var i = 0; i < appBanners2.length; i ++) {
                              
                                appBanners2[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Reserva de Capital'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                    
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux3 = document.getElementById('Capital Social Integralizado').value;
                    var aux4 = document.getElementById('Capital Social Subscrito').value;
                    var aux5 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux6 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux8 = document.getElementById('Reserva de Reavaliação').value;
                    var aux9 = document.getElementById('Reserva de Sobras').value;
                    var aux10 = document.getElementById('Reserva Legal').value;
                    var aux11 = document.getElementById('RATES / FATES').value;
                    var aux12 = document.getElementById('Outras Reservas').value;
                    var aux13 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;
                    var appBanners2 = document.getElementsByClassName('232x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    if(aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                        var appBanners2 = document.getElementsByClassName('23'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                          
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Doações e Subvenções Fiscais' || appId2 == 'Outras Reservas de Capital'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('232'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Subscrito').value;
                    var aux2 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux3 = document.getElementById('Capital Social Integralizado').value;
                    var aux4 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux5 = document.getElementById('Outras Reservas de Capital').value;
                    var aux6 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux8 = document.getElementById('Reserva de Reavaliação').value;
                    var aux9 = document.getElementById('Reserva de Sobras').value;
                    var aux10 = document.getElementById('Reserva Legal').value;
                    var aux11 = document.getElementById('RATES / FATES').value;
                    var aux12 = document.getElementById('Outras Reservas').value;
                    var aux13 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;
                    if(aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0){
                        var appBanners2 = document.getElementsByClassName('232'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                            
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        if(aux3 == '' && aux3 == 0 && aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                            var appBanners2 = document.getElementsByClassName('23'), i;
                            for (var i = 0; i < appBanners2.length; i ++) {
                               
                                appBanners2[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Ajuste de Avaliação Patrimonial.'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Integralizado').value;
                    var aux2 = document.getElementById('Capital Social Subscrito').value;
                    var aux3 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux4 = document.getElementById('Reserva de Capital').value;
                    var aux5 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux6 = document.getElementById('Outras Reservas de Capital').value;
                    var aux10 = document.getElementById('Reserva de Sobras').value;
                    var aux11 = document.getElementById('Reserva Legal').value;
                    var aux12 = document.getElementById('RATES / FATES').value;
                    var aux13 = document.getElementById('Outras Reservas').value;
                    var aux14 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;

                    var appBanners2 = document.getElementsByClassName('233x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                       
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0){
                        var appBanners2 = document.getElementsByClassName('23'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                        
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Ajuste de Avaliação Patrimonial' || appId2 == 'Reserva de Reavaliação'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('233'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                    
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Integralizado').value;
                    var aux2 = document.getElementById('Capital Social Subscrito').value;
                    var aux3 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux4 = document.getElementById('Reserva de Capital').value;
                    var aux5 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux6 = document.getElementById('Outras Reservas de Capital').value;
                    var aux8 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux9 = document.getElementById('Reserva de Reavaliação').value;
                    var aux10 = document.getElementById('Reserva de Sobras').value;
                    var aux11 = document.getElementById('Reserva Legal').value;
                    var aux12 = document.getElementById('RATES / FATES').value;
                    var aux13 = document.getElementById('Outras Reservas').value;
                    var aux14 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;
                    if(aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0){
                        var appBanners2 = document.getElementsByClassName('233'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                         
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0){
                            var appBanners2 = document.getElementsByClassName('23'), i;
                            for (var i = 0; i < appBanners2.length; i ++) {
                              
                                appBanners2[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Reserva de Sobras'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Integralizado').value;
                    var aux2 = document.getElementById('Capital Social Subscrito').value;
                    var aux3 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux4 = document.getElementById('Reserva de Capital').value;
                    var aux5 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux6 = document.getElementById('Outras Reservas de Capital').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux8 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux9 = document.getElementById('Reserva de Reavaliação').value;
                    var aux14 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;

                    var appBanners2 = document.getElementsByClassName('234x'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                        
                        appBanners2[i].style.display = 'table-row'; 
                    }
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux14 == '' && aux14 == 0){
                        var appBanners2 = document.getElementsByClassName('23'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                           
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Reserva Legal' || appId2 == 'RATES / FATES' || appId2 == 'Outras Reservas'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                    var appBanners2 = document.getElementsByClassName('234'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                     
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Integralizado').value;
                    var aux2 = document.getElementById('Capital Social Subscrito').value;
                    var aux3 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux4 = document.getElementById('Reserva de Capital').value;
                    var aux5 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux6 = document.getElementById('Outras Reservas de Capital').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux8 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux9 = document.getElementById('Reserva de Reavaliação').value;
                    var aux11 = document.getElementById('Reserva Legal').value;
                    var aux12 = document.getElementById('RATES / FATES').value;
                    var aux13 = document.getElementById('Outras Reservas').value;
                    var aux14 = document.getElementById('Sobra/Perda Líquida a Disposição da AGO').value;
                    if(aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                        var appBanners2 = document.getElementsByClassName('234'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                           
                            appBanners2[i].style.display = 'table-row'; 
                        }
                        if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0 && aux14 == '' && aux14 == 0){
                            var appBanners2 = document.getElementsByClassName('23'), i;
                            for (var i = 0; i < appBanners2.length; i ++) {
                              
                                appBanners2[i].style.display = 'table-row'; 
                            }
                        }
                    }
                }
            }
            //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId2 == 'Sobra/Perda Líquida a Disposição da AGO'){
                if (idval2 != '' || idval2 > 0) {
                    var appBanners2 = document.getElementsByClassName('23'), i;
                    for (var i = 0; i < appBanners2.length; i ++) {
                      
                        appBanners2[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Capital Social Integralizado').value;
                    var aux2 = document.getElementById('Capital Social Subscrito').value;
                    var aux3 = document.getElementById('(-) Capital Social a Integralizar').value;
                    var aux4 = document.getElementById('Reserva de Capital').value;
                    var aux5 = document.getElementById('Doações e Subvenções Fiscais').value;
                    var aux6 = document.getElementById('Outras Reservas de Capital').value;
                    var aux7 = document.getElementById('Ajuste de Avaliação Patrimonial.').value;
                    var aux8 = document.getElementById('Ajuste de Avaliação Patrimonial').value;
                    var aux9 = document.getElementById('Reserva de Reavaliação').value;
                    var aux10 = document.getElementById('Reserva de Sobras').value;
                    var aux11 = document.getElementById('Reserva Legal').value;
                    var aux12 = document.getElementById('RATES / FATES').value;
                    var aux13 = document.getElementById('Outras Reservas').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0 && aux9 == '' && aux9 == 0 && aux10 == '' && aux10 == 0 && aux11 == '' && aux11 == 0 && aux12 == '' && aux12 == 0 && aux13 == '' && aux13 == 0){
                        var appBanners2 = document.getElementsByClassName('23'), i;
                        for (var i = 0; i < appBanners2.length; i ++) {
                        
                            appBanners2[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
        }
        //------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        function myFunction2(appId3) {
            var idval3 = document.getElementById(appId3).value;
            var idid3 = document.getElementById(appId3);
            if(appId3 == 'Ingressos e Receitas Brutas'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('31x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('31x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                   
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'de Vendas (Liq. De Devolução)' || appId3 == 'Receitas Operacionais de Serviços'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('31'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                       
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('de Vendas (Liq. De Devolução)').value;
                    var aux2 = document.getElementById('Receitas Operacionais de Serviços').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0){
                        var appBanners3 = document.getElementsByClassName('31'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                        
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(-)  Custos'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('34x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                    
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('34x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Repasse a Cooperados - Vendas' || appId3 == 'Repasse a Cooperados - Serviços' || appId3 == 'Dispêndios e Custos de Vendas' || appId3 == 'Dispêndios e Custos de Serviços'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('34'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Repasse a Cooperados - Vendas').value;
                    var aux2 = document.getElementById('Repasse a Cooperados - Serviços').value;
                    var aux3 = document.getElementById('Dispêndios e Custos de Vendas').value;
                    var aux4 = document.getElementById('Dispêndios e Custos de Serviços').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0){
                        var appBanners3 = document.getElementsByClassName('34'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                       
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(-) Dispêndios e Despesas Operacionais'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('36x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('36x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Comerciais' || appId3 == 'de Pessoal' || appId3 == 'Administrativas' || appId3 == 'Tributárias' || appId3 == 'Técnicas' || appId3 == 'de Depreciação' || appId3 == 'Outras' || appId3 == 'Juros sobre Capital Proprio'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('36'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Comerciais').value;
                    var aux2 = document.getElementById('de Pessoal').value;
                    var aux3 = document.getElementById('Administrativas').value;
                    var aux4 = document.getElementById('Tributárias').value;
                    var aux5 = document.getElementById('Técnicas').value;
                    var aux6 = document.getElementById('de Depreciação').value;
                    var aux7 = document.getElementById('Outras').value;
                    var aux8 = document.getElementById('Juros sobre Capital Proprio').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0 && aux7 == '' && aux7 == 0 && aux8 == '' && aux8 == 0){
                        var appBanners3 = document.getElementsByClassName('36'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                          
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Outros Resultados Operacionais'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('37x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('37x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                  
                        appBanners3[i].style.display = 'table-row'; 
                    }
                    
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Outros Ingressos e Receitas Operacionais' || appId3 == '(-) Outros Dispêndios Operacionais e Patrimoniais'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('37'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                   
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Outros Ingressos e Receitas Operacionais').value;
                    var aux2 = document.getElementById('(-) Outros Dispêndios Operacionais e Patrimoniais').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0){
                        var appBanners3 = document.getElementsByClassName('37'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                            
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Resultado Financeiro Líquido'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('311x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                       
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('311x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                       
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Ingressos e Receitas Financeiras' || appId3 == '(-) Dispêndios e Despesas Financeiras'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('311'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Ingressos e Receitas Financeiras').value;
                    var aux2 = document.getElementById('(-) Dispêndios e Despesas Financeiras').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0){
                        var appBanners3 = document.getElementsByClassName('311'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                      
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(-) Provisão de Impostos S/ Resultado'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('313x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                  
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('313x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                     
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == 'Provisão IRPJ' || appId3 == 'Provisão CSSL'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('313'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('Provisão IRPJ').value;
                    var aux2 = document.getElementById('Provisão CSSL').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0){
                        var appBanners3 = document.getElementsByClassName('313'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                         
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(+/-) Ajustes Legais'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('315x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('315x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                    
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(-) Destinação Reserva de Incentivos Fiscais' || appId3 == '(-) Créditos Fiscais a Realizar' || appId3 == '(+) Realização Reserva Reavaliação'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('315'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                       
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('(-) Destinação Reserva de Incentivos Fiscais').value;
                    var aux2 = document.getElementById('(-) Créditos Fiscais a Realizar').value;
                    var aux3 = document.getElementById('(+) Realização Reserva Reavaliação').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0){
                        var appBanners3 = document.getElementsByClassName('315'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                         
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(+/-) Destinações Legais e Estatutárias'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('317x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var appBanners3 = document.getElementsByClassName('317x'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                      
                        appBanners3[i].style.display = 'table-row'; 
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
            else if(appId3 == '(-) Reserva Legal' || appId3 == '(-) RATES / FATES' || appId3 == '(-) Participação no Resultado' || appId3 == '(-) Capitalização' || appId3 == '(-) Outras Reservas/Especificar' || appId3 == '(+) Utilização de Reservas'){
                if (idval3 != '' || idval3 > 0) {
                    var appBanners3 = document.getElementsByClassName('317'), i;
                    for (var i = 0; i < appBanners3.length; i ++) {
                       
                        appBanners3[i].style.display = 'none'; 
                    }
                }
                else{
                    var aux1 = document.getElementById('(-) Reserva Legal').value;
                    var aux2 = document.getElementById('(-) RATES / FATES').value;
                    var aux3 = document.getElementById('(-) Participação no Resultado').value;
                    var aux4 = document.getElementById('(-) Capitalização').value;
                    var aux5 = document.getElementById('(-) Outras Reservas/Especificar').value;
                    var aux6 = document.getElementById('(+) Utilização de Reservas').value;
                    if(aux1 == '' && aux1 == 0 && aux2 == '' && aux2 == 0 && aux3 == '' && aux3 == 0 && aux4 == '' && aux4 == 0 && aux5 == '' && aux5 == 0 && aux6 == '' && aux6 == 0){
                        var appBanners3 = document.getElementsByClassName('317'), i;
                        for (var i = 0; i < appBanners3.length; i ++) {
                           
                            appBanners3[i].style.display = 'table-row'; 
                        }
                    }
                }
            }
            //-------------------------------------------------------------------------------------------------------------------------------------------------------------------
        }
    </script>
</head>
{{-- ______________________________________________________________________________________________________________________________________________________________________________ --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="left">
                        Cadastro DF
                    </div>
                     <div align="right" style="float:right;margin-top:-10px;">
                        <fonte style="font-family:verdana"> 
                            <strong>
                                CNPJ {{$coop->cnpj_completo}}
                            </strong>
                        </fonte>
                    </div>
                    <button id="df_1" class="right">Df 1</button>
                    <button id="df_2" class="right">Df 2</button>
                    <button id="df_3" class="right">Df 3</button>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
               
                        <form action="/SGObscoop/public/df_submit" method="get">
                        <input type="submit" value="Cadastrar"> Ano:<input type="text" name="ano" class="11" id="ano" value="">
                        <input type="text "name="id_coop" value="{{$coop->id}}" style="display: none;">
                    <br> <br>
                    {{-- __________________________________________________________________________________________________________________________________________________________ --}}
                    <div id="div_df_1" class="grupos">
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_1 as $df)
                                    @if($df['codigo'] == "1.1")
                                        <tr id="{{$df['codigo']}}" class="11">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="11" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                     @elseif($df['codigo'] == "1.1.1" || $df['codigo'] == "1.1.2" ||$df['codigo'] == "1.1.5")
                                        <tr id="{{$df['codigo']}}" class="11x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="11x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3")
                                        <tr id="{{$df['codigo']}}" class="113">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="113" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.1")
                                        <tr id="{{$df['codigo']}}" class="1131">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1131" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.1.1" || $df['codigo'] == "1.1.3.1.2" || $df['codigo'] == "1.1.3.1.3")
                                        <tr id="{{$df['codigo']}}" class="1131x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1131x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.2") 
                                        <tr id="{{$df['codigo']}}" class="1132">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1132" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.2.1" || $df['codigo'] == "1.1.3.2.2" || $df['codigo'] == "1.1.3.2.3")
                                        <tr id="{{$df['codigo']}}" class="1132x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1132x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.3")
                                        <tr id="{{$df['codigo']}}" class="1133">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1133" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.3.3.1" || $df['codigo'] == "1.1.3.3.2" || $df['codigo'] == "1.1.3.3.3")
                                        <tr id="{{$df['codigo']}}" class="1133x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1133x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.4")
                                        <tr id="{{$df['codigo']}}" class="114">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="114" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.4.1")
                                        <tr id="{{$df['codigo']}}" class="1141">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1141" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.4.1.1" || $df['codigo'] == "1.1.4.1.2" || $df['codigo'] == "1.1.4.1.3" || $df['codigo'] == "1.1.4.1.4" || $df['codigo'] == "1.1.4.1.5" || $df['codigo'] == "1.1.4.1.6")
                                        <tr id="{{$df['codigo']}}" class="1141x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1141x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.4.2")
                                        <tr id="{{$df['codigo']}}" class="1142">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1142" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.1.4.2.1" || $df['codigo'] == "1.1.4.2.2")
                                        <tr id="{{$df['codigo']}}" class="1142x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1142x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2")
                                        <tr id="{{$df['codigo']}}" class="12">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="12" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1")
                                        <tr id="{{$df['codigo']}}" class="121">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="121" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.1")
                                        <tr id="{{$df['codigo']}}" class="1211">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1211" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.1.1" || $df['codigo'] == "1.2.1.1.2" || $df['codigo'] == "1.2.1.1.3")
                                        <tr id="{{$df['codigo']}}" class="1211x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1211x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.2")
                                        <tr id="{{$df['codigo']}}" class="1212">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1212" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.2.1" || $df['codigo'] == "1.2.1.2.2" || $df['codigo'] == "1.2.1.2.3")
                                        <tr id="{{$df['codigo']}}" class="1212x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1212x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.3")
                                        <tr id="{{$df['codigo']}}" class="1213">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1213" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.4")
                                        <tr id="{{$df['codigo']}}" class="1214">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1214" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.1.4.1" || $df['codigo'] == "1.2.1.4.2" || $df['codigo'] == "1.2.1.4.3" || $df['codigo'] == "1.2.1.4.4")
                                        <tr id="{{$df['codigo']}}" class="1214x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1214x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.2")
                                        <tr id="{{$df['codigo']}}" class="122">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="122" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.2.1" || $df['codigo'] == "1.2.2.2" || $df['codigo'] == "1.2.2.3" || $df['codigo'] == "1.2.2.4")
                                        <tr id="{{$df['codigo']}}" class="122x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="122x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3")
                                        <tr id="{{$df['codigo']}}" class="123">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="123" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3.1")
                                        <tr id="{{$df['codigo']}}" class="1231">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1231" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3.1.1" || $df['codigo'] == "1.2.3.1.2" || $df['codigo'] == "1.2.3.1.3" || $df['codigo'] == "1.2.3.1.4" || $df['codigo'] == "1.2.3.1.5" || $df['codigo'] == "1.2.3.1.6")
                                        <tr id="{{$df['codigo']}}" class="1231x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1231x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3.2")
                                        <tr id="{{$df['codigo']}}" class="1232">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1232" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3.2.1" || $df['codigo'] == "1.2.3.2.2" || $df['codigo'] == "1.2.3.2.3" || $df['codigo'] == "1.2.3.2.4" || $df['codigo'] == "1.2.3.2.5" || $df['codigo'] == "1.2.3.2.6")
                                        <tr id="{{$df['codigo']}}" class="1232x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1232x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.3.3")
                                        <tr id="{{$df['codigo']}}" class="1233">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1233" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.4")
                                        <tr id="{{$df['codigo']}}" class="124">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="124" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.4.1" || $df['codigo'] == "1.2.4.2")
                                        <tr id="{{$df['codigo']}}" class="124x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="124x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.5")
                                        <tr id="{{$df['codigo']}}" class="125">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="125" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.2.5.1" || $df['codigo'] == "1.2.5.2")
                                        <tr id="{{$df['codigo']}}" class="125x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="125x" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "1.3")
                                        <tr id="{{$df['codigo']}}" class="13">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="13" id="{{$df['nome']}}" value=""></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @else
                                        <tr id="{{$df['codigo']}}" class="1">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="1" id="{{$df['nome']}}" value="" onkeyup="myFunction('{{$df['nome']}}')" disabled="none"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- __________________________________________________________________________________________________________________________________________________________ --}}
                    <div id="div_df_2" class="grupos" style="display: none;">
                        <br>
                        <br>
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_2 as $df)
                                    @if($df['codigo'] == "2.1")
                                        <tr id="{{$df['codigo']}}" class="21">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="21" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.1.1")
                                        <tr id="{{$df['codigo']}}" class="211">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="211" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.1.1.1" || $df['codigo'] == "2.1.1.2" || $df['codigo'] == "2.1.1.3" || $df['codigo'] == "2.1.1.4" || $df['codigo'] == "2.1.1.5" || $df['codigo'] == "2.1.1.6" || $df['codigo'] == "2.1.1.7")
                                        <tr id="{{$df['codigo']}}" class="211x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="211x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.2")
                                        <tr id="{{$df['codigo']}}" class="22">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="22" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.2.1")
                                        <tr id="{{$df['codigo']}}" class="221">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="221" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.2.1.1" || $df['codigo'] == "2.2.1.2" || $df['codigo'] == "2.2.1.3" || $df['codigo'] == "2.2.1.4" || $df['codigo'] == "2.2.1.5" || $df['codigo'] == "2.2.1.6" || $df['codigo'] == "2.2.1.7" || $df['codigo'] == "2.2.1.8")
                                        <tr id="{{$df['codigo']}}" class="221x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="221x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3")
                                        <tr id="{{$df['codigo']}}" class="23">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="23" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.1")
                                        <tr id="{{$df['codigo']}}" class="231">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="231" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.1.1" || $df['codigo'] == "2.3.1.2")
                                        <tr id="{{$df['codigo']}}" class="231x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="231x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.2")
                                        <tr id="{{$df['codigo']}}" class="232">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="232" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.2.1" || $df['codigo'] == "2.3.2.2")
                                        <tr id="{{$df['codigo']}}" class="232x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="232x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.3")
                                        <tr id="{{$df['codigo']}}" class="233">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="233" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.3.1" || $df['codigo'] == "2.3.3.2")
                                        <tr id="{{$df['codigo']}}" class="233x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="233x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.4")
                                        <tr id="{{$df['codigo']}}" class="234">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="234" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.4.1" || $df['codigo'] == "2.3.4.2" || $df['codigo'] == "2.3.4.3")
                                        <tr id="{{$df['codigo']}}" class="234x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="234x" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.3.5")
                                        <tr id="{{$df['codigo']}}" class="235">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="235" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "2.4")
                                        <tr id="{{$df['codigo']}}" class="24">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="24" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @else
                                        <tr id="{{$df['codigo']}}" class="2">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="2" id="{{$df['nome']}}" value="" onkeyup="myFunction1('{{$df['nome']}}')" disabled="none"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- __________________________________________________________________________________________________________________________________________________________ --}}
                    <div id="div_df_3" class="grupos" style="display: none;">
                        <br>
                        <br>
                        <table id="tabela_df"  class="table table-striped table-bordered table-hover table-condensed">
                            <thead>    
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Conta</th>
                                    <th>Conceito</th>
                                    <th>Explicação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_df_3 as $df)
                                    @if($df['codigo'] == "3.1")
                                        <tr id="{{$df['codigo']}}" class="31">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="31" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.1.1" || $df['codigo'] == "3.1.2")
                                        <tr id="{{$df['codigo']}}" class="31x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="31x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.2")
                                        <tr id="{{$df['codigo']}}" class="32">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="32" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.3")
                                        <tr id="{{$df['codigo']}}" class="33">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="33" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.4")
                                        <tr id="{{$df['codigo']}}" class="34">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="34" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.4.1" || $df['codigo'] == "3.4.2" || $df['codigo'] == "3.4.3" || $df['codigo'] == "3.4.4" )
                                        <tr id="{{$df['codigo']}}" class="34x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="34x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.5")
                                        <tr id="{{$df['codigo']}}" class="35">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="35" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.6")
                                        <tr id="{{$df['codigo']}}" class="36">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="36" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.6.1" || $df['codigo'] == "3.6.2" || $df['codigo'] == "3.6.3" || $df['codigo'] == "3.6.4" || $df['codigo'] == "3.6.5" || $df['codigo'] == "3.6.6" || $df['codigo'] == "3.6.7" ||$df['codigo'] == "3.6.8")
                                        <tr id="{{$df['codigo']}}" class="36x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="36x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.7")
                                        <tr id="{{$df['codigo']}}" class="37">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="37" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.7.1" || $df['codigo'] == "3.7.2")
                                        <tr id="{{$df['codigo']}}" class="37x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="37x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.8")
                                        <tr id="{{$df['codigo']}}" class="38">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="38" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.9")
                                        <tr id="{{$df['codigo']}}" class="39">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="39" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.10.")
                                        <tr id="{{$df['codigo']}}" class="310">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="310" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.11")
                                        <tr id="{{$df['codigo']}}" class="311">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="311" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.11.1" || $df['codigo'] == "3.11.2")
                                        <tr id="{{$df['codigo']}}" class="311x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="311x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.12")
                                        <tr id="{{$df['codigo']}}" class="312">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="312" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.13")
                                        <tr id="{{$df['codigo']}}" class="313">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="313" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.13.1" || $df['codigo'] == "3.13.2")
                                        <tr id="{{$df['codigo']}}" class="313x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="313x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.14")
                                        <tr id="{{$df['codigo']}}" class="314">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="314" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.15")
                                        <tr id="{{$df['codigo']}}" class="315">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="315" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.15.1" || $df['codigo'] == "3.15.2" || $df['codigo'] == "3.15.3")
                                        <tr id="{{$df['codigo']}}" class="315x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="315x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.16")
                                        <tr id="{{$df['codigo']}}" class="316">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="316" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.17")
                                        <tr id="{{$df['codigo']}}" class="317">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="317" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.17.1" || $df['codigo'] == "3.17.2" || $df['codigo'] == "3.17.3" || $df['codigo'] == "3.17.4" || $df['codigo'] == "3.17.5" || $df['codigo'] == "3.17.6")
                                        <tr id="{{$df['codigo']}}" class="317x">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="317x" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @elseif($df['codigo'] == "3.18")
                                        <tr id="{{$df['codigo']}}" class="318">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="318" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @else
                                        <tr id="{{$df['codigo']}}" class="3">
                                            <td>{{$df['codigo']}}</td>
                                            <td>{{$df['nome']}}</td>
                                            <td><input type="text" name="{{$df['codigo']}}" class="3" id="{{$df['nome']}}" value="" onkeyup="myFunction2('{{$df['nome']}}')" disabled="none"></td>
                                            <td>{{$df['explicacao']}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection