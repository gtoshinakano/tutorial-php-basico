<html>
    
    <head>
        
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">

        <title>Tutorial PHP Básico - 01 - HTML com Javascript</title>
        
        <!-- Essas 3 linhas carregam o Bootstrap já com Jquery  -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script>
            
            /*
             * O Javascript pode ser escrito dentro da TAG <script><script>
             * Ou ser chamado de um arquivo externo como na linha 10 e 11.
             */
                
            // Neste caso, o alerta será a primeira coisa a ser executada ao carregad a página (document)
            window.alert("Alert 1 - Texto"); 
            
            /*
             * Funções para mostrar Texto ou HTML do elemento
             */
            function mostrarConteudo1(html){
                
                /*
                 * Pegando um elemento no document pelo seu ID e colocando em variável
                 */
                var elemento1 = document.getElementById('elemento-01');
                
                if(html) alert(elemento1.innerHTML);
                else alert(elemento1.innerText);
                
            }
            function mostrarConteudo2(html){
                
                /*
                 * Pegando um elemento no document pelo seu ID e colocando em variável
                 */
                var elemento2 = document.getElementById('elemento-02');
                
                if(html) alert(elemento2.innerHTML);
                else alert(elemento2.innerText);
                
            }
            
            //Mudando um estilo por Javascript
            document.getElementById('elemento-01').style.color = "red"; // Esta linha não funciona, por quê ?
            
        </script>
        
    </head>
    
    <body>
        <div class="container">
            <div class="page-header">
                <h1>01 - HTML com Javascript</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <code>window</code>.<code>alert</code><span class='bg-warning'>('Texto')</span>;
                    <pre>Executa a função nativa do JS chamada <b>alert()</b> na <b>window</b> (janela).</pre>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center" id='elemento-01'>
                    Conteúdo do <b>#elemento-01</b>.
                </div>
                <div class="col-md-6 text-center" id='elemento-02'>
                    Conteúdo do <b>#elemento-02</b>.
                </div>
            </div>   
            <div class="row">
                <div class="col-md-6 text-center">
                    <button class="btn btn-success" onclick="mostrarConteudo1(true)">Mostrar HTML #elemento-01</button>
                </div>
                <div class="col-md-6 text-center">
                    <button class="btn btn-primary" onclick="mostrarConteudo2(false)">Mostrar Texto #elemento-02</button>
                </div>
            </div>   
        </div>
    </body>
    
    <script>
        
        // Esta linha funciona, por quê ?
        document.getElementById('elemento-01').style.color = "blue";
        
        /*
         * Isto
         */
        document.getElementById('elemento-02').style.color = "gray";
        /*
         * É o mesmo que isto
         */
        var estilo = document.getElementById('elemento-02').style;
        estilo.color = "gray";
        
            
    </script>
    
</html>            