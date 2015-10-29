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
             * Alguns Conceitos de variáveis em Javascript
             * @obs 1 - Ela deve ser declarada com "var" antes do seu nome.
             * @obs 2 - Uma vez declarada, não é necessário utilizar "var" novamente.
             * 
             * 1 - Concatenação de Strings
             */
            var parte1 = 'Oi, ';
            var texto1 = parte1 + 'eu sou o Goku!';
            window.alert(texto1);
            
            /*
             * 2 - É possível concatenar String com Números
             */
            var numero = 10000;
            var texto2 = "Meu Ki é maior que " + numero;
            window.alert(texto2);
            
            /*
             * 3 - Concatenando mais números com String
             * Note que os números se tornam Strings.
             */
            var numero1 = 10;
            var numero2 = 20;
            var texto3  = 'A soma entre ' + numero1 + ' e ' + numero2 + ' não é ' + numero1 + numero2;
            window.alert(texto3); 
            
            /*
             * 4 - Para mostrar corretamente, faça a soma separadamente
             */
            var num1 = 15;
            var num2 = 25;
            var soma = num1 + num2;
            var texto4 = 'A soma entre ' + num1 + ' e ' + num2 + ' é ' + soma;
            window.alert(texto4); 
            
            /*
             * 5 - Somando um Array Loop for 
             */
            var carteira = [ 10, 10, 2, 2 , 5, 20, 50, 0.50, 0.10, 0.05 ];
            var texto5  = 'Eu tenho R$';
            var total   = 0;
            for(var i = 0; i < carteira.length; i++){
                
                total += carteira[i];
                
            }
            texto5 += total;
            texto5 += ' na minha carteira';
            window.alert(texto5);
            
            /*
             * 6 - Arredondando o valor total
             */
            var arredondado = Math.round(total * 100) / 100;
            var texto6 = 'O valor da carteira arredondado é : R$' + arredondado;
            window.alert(texto6);
            
        </script>
        
    </head>
    
    <body>
        <div class="container">
            <div class="page-header">
                <h1>02 - HTML com Javascript - Variáveis em JS</h1>
            </div>
            <div class="row">
                <div class="alert alert-danger" id='alerta' style="display:none">
                    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                </div>
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <h2>Observações</h2>
                    <pre>As operações matemáticas em Javascript seguem o <b>padrão IEEE</b> para obter maior precisão. Portanto, é necessário o arredondamento. </pre>
                    <h3><code>Math.round( <mark>valor</mark> )</code></h3>
                    <pre>Este comando arredonda qualquer número de ponto flutuante para o seu representante inteiro.<br />Por isso a ordem de execução é: <br />1- Multiplicar o valor por 100 antes para tirar duas casas decimais do arredondamento <br />2- Arredondar o valor para o seu número inteiro <br />3- Dividir por 100 para voltar as duas casas decimais</pre>
                </div>
            </div>
        </div>
    </body>
    
</html>            