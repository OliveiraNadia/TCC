<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>LearnApp</title>

    <link href="view/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link href="view/assets/css/signin.css" rel="stylesheet">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/jquery-3.1.0"></script>
    <script src="view/assets/js/jquery-ui.js"></script>
    <script src="view/assets/js/script.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>
    <script src="view/js/inicial.js"></script>
     <script src="view/js/login.js"></script>
    <script src="view/assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">LearnApp</span>
                    </button>
                    <a class="navbar-brand" href="#">LearnApp</a>
                </div>

                <div  class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" method="post" >
                        <div class="form-group">
                            <label for="email" class="sr-only">Email </label>
                            <input type="email" id="email" class="form-control" name="emailUsuarios" placeholder="Email">

                            <label for="senha" class="sr-only">Senha</label>
                            <input type="password" id="senha" class="form-control" name="senhaUsuarios"placeholder="Senha">

                            <button type="submit" class="btn btn-primary" onclick="logar()">Login</button>
                            <button type="submit" class="btn btn-primary">Esqueceu Senha</button>
                        </div>   
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" id="conteudo">
            <div class="container">
                <h2> Bem-vindo ao LearnApp</h2>
                <hr>
                <p>Sistema desenvolvido para alunos universitários que desejam estudar conteúdos direcionados de sua escolha, 
                    de forma estruturada e padronizada, tornando o aprendizado proveitoso e de alto desempenho.
                </p>

                <p>Os conteúdos seram inseridos por professores, afim de compartilhar materiais de apoio ao aluno, 
                    de maneira prática e rápida.
                </p>

                <button type="button" class="btn btn-primary btn-lg" onclick="eventoInicial.bt_instituicao()">
                    Cadastre sua instituição
                </button>
            </div>
        </div>    
    </body>
</html>
