<html>
    
    <head>
        
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">

        <title>Tutorial PHP Básico - 02 - HTML com Javascript - Variáveis em JS</title>
        
        <!-- Essas 3 linhas carregam o Bootstrap já com Jquery  -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script>
            
            /*
             * Instruções para cada campo
             * 1º Criar uma função que receba como parâmetro o valor do input.
             * 2º A função deve pegar externamente o valor da média por pessoa, fazer o cálculo correto e colocar o valor no elemento correto da página.
             * 3º Apontar o evento para a função criada.
             * 4º Testar, testar, testar
             */
            

            
        </script>
        
    </head>
    
    <body>
        <div class="container">
            <div class="row" style="margin-top:32px">
                <div class="col-md-10 col-md-offset-1">
                    <div class='rounded' style="padding:10px">
                        <h1 id="media-lpd">91.2</h1>
                        <h4>Cada usuário, diariamente :</h4>
                        <table class="table table-striped">
                            <tr>
                                <th width="30%">Consome <code id="cons-hora"></code> litros por hora</th>
                                <td>considerando uma diária com <input type="number" value="8" id="hora-diaria" style="width:60px" class="input-sm" /> horas; ou</td>
                            </tr>
                            <tr>
                                <th>Deixa a torneira aberta por <code id="tempo-torneira"></code> minutos</th>
                                <td>considerando a vazão de <input type="number" value="6" id="vazao-torneira" style="width:70px" step="0.1" class="input-sm" /> L/minuto ( 7.2 para casas e 16.2 para apartamentos ); ou</td>
                            </tr>
                            <tr>
                                <th>Toma <code id="qtd-copos"></code> copos d'água filtrada</th>
                                <td>copos de <input type="number" value="200" id="volume-copo" style="width:70px" step="0.1" class="input-sm" /> ml; ou</td>
                            </tr>
                            <tr>
                                <th>Dá <code id="qtd-descargas"></code> descargas</th>
                                <td>considerando <input type="number" value="9" id="vazao-descarga" style="width:70px" step="0.1" class="input-sm" /> L/descarga; ou</td>
                            </tr>
                            <tr>
                                <th>Toma <code id="qtd-banhos"></code> banhos</th>
                                <td>de chuveiro de 15 minutos, considerando a vazão de <input type="number" value="16" id="vazao-chuveiro" style="width:70px" step="0.1" class="input-sm" /> L/minuto; ou</td>
                            </tr>
                            <tr>
                                <th>Escova os dentes <code id="qtd-escova"></code> vezes</th>
                                <td>com a torneira aberta por 5 minutos e vazão de <input type="number" value="9" id="vazao-escova" style="width:70px" step="0.1" class="input-sm" /> L/minuto; ou</td>
                            </tr>                    
                            <tr>
                                <th>Aciona <code id="qtd-hidromecanico"></code> vezes uma torneira</th>
                                <td>de acionamento hidromecânico com <input type="number" value="0.946" id="vazao-hidromecanico" style="width:80px" step="0.001" class="input-sm" /> L/ciclo; ou</td>
                            </tr>
                            <tr>
                                <th>Lava <code id="kg-roupas"></code> kg de roupas</th>
                                <td>com máquina de lavar com capacidade para 5kg de roupas e consumo de <input type="number" value="135" id="vazao-lava-roupa" style="width:60px" step="0.1" class="input-sm" /> L/lavagem; ou</td>
                            </tr>
                            <tr>
                                <th>Rega <code id="qtd-jardim"></code> m² de jardim</th>
                                <td>considerando <input type="number" value="17" id="volume-rega" style="width:70px" step="0.1" class="input-sm" /> L/m² de jardim; </td>
                            </tr>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>            