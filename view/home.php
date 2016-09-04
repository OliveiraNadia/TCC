<?php include"includes/header.php"; ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">LearnApp</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LearnApp</a>
        </div>
        <div id="evento" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" >
            <div class="form-group">
             <label for="email" class="sr-only">Email </label>
        <input type="email" id="email" class="form-control" name="emailUsuarios" placeholder="Email">
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="senha" class="form-control" name="senhaUsuarios"placeholder="Senha">
		
        <button type="submit" class="btn btn-primary" onclick="evento()">Login</button>
         <button type="submit" class="btn btn-primary">Esqueceu Senha</button>
     <!-- Small modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Esqueceu Senha</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>-->
         </div>   
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2> Bem-vindo ao LearnApp</h2>
       
        <hr>
		<p>Sistema desenvolvido para alunos universitários que desejam estudar conteúdos direcionados de sua escolha, de forma estruturada e padronizada, tornando o aprendizado proveitoso e de alto desempenho.</p>

		<p>Os conteúdos seram inseridos por professores, afim de compartilhar materiais de apoio ao aluno, de maneira prática e rápida.</p>
   
<!--    <p><a class="btn btn-primary btn-lg" href="#" role="button"></a></p>-->
    
   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Cadastre sua instituição
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastre sua instituição</h4>
      </div>
      <div class="modal-body">
          <div class="row">
               <div class="col-md-12 form-group">
              <label for="codIES">Código IES:</label>
              <input type="text" name="codIES" id="senhaNova" class="form-control"  onkeup="checarSenha()"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="nomeInstituicao">Nome da Instituição:</label>
              <input type="text" name="nomeInstituicao" id="senhaAntiga" class="form-control"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="cnpjInstituicao">CNPJ:</label>
              <input type="text" name="cnpjInstituicao" id="senhaNova" class="form-control"  onkeup="checarSenha()"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="enderecoInstituicao">Endereço:</label>
              <input type="text" name="enderecoInstituicao" id="senhaConfirmar" class="form-control" onkeup="checarSenha()"> 
              </div>
              <div class="col-md-12 form-group">
              <label for="tipoInstituicao">Tipo de Instituição:</label>
              <input type="text" name="tipoInstituicao" id="senhaConfirmar" class="form-control" onkeup="checarSenha()"> 
              </div>
              <hr>
        
      </div>
        
      <div class="modal-footer">
          <button type="submit" id="conteudo" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
         </div>
    <div class="container">
<!--       Example row of columns 
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>-->

      <hr>

    
    </div> <!-- /container -->
    
    <?php include"includes/footer.php"; ?>