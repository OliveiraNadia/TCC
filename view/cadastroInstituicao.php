<script src="view/js/cadstroIntituicao.js"></script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
       <h2 class="page-header">Cadastre sua Instituição</h2>  
    </div>
    
    <form class="form-inline" id="formCadastro">
        <div class="form-group">
            <label for="codIES">Código IES:</label>
            <input type="text" name="codIES"  class="form-control" > 
        </div>
        
        <button type="button" class="btn btn-info">Pesquisar</button>
        
        <div id="resultado" style="display: block">
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="nomeInstituicao">Nome da Instituição:</label>
                    <input type="text" name="nomeInstituicao" class="form-control"> 
                </div>
                
                <div class="col-md-3 form-group">
                    <label for="tipoInstituicao">Tipo de Instituição:</label>
                    <input type="text" name="tipoInstituicao" class="form-control"> 
                </div>
            </div>   
            
            <div claa="row">
                <div class="col-md-3 form-group">
                    <label for="cepGestor">CEP:</label>
                    <input type="text" name="cepGestor" class="form-control"> 
               </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="enderecoInstituicao">Endereço:</label>
                    <input type="text" name="enderecoInstituicao"  class="form-control"> 
                </div>
                
                <div class="col-md-5 form-group">
                    <label for="enderecoInstituicao">Número:</label>
                    <input type="text" name="enderecoInstituicao"  class="form-control"> 
                </div>
                
                <div class="col-md-3 form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control"> 
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="cargo">Cidade:</label>
                    <input type="text" name="cargo" class="form-control"> 
            </div>
   
            <div class="col-md-4 form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" class="form-control"> 
            </div>
                
         <div class="col-md-4 form-group">
                    <label for="estado" >Estado:</label>
                   <select class="form-control">
                       <option value="">Selecione</option>

                   </select>
        </div>
            
       
            <div class="col-md-3 form-group">
              <label for="uf">UF:</label>
              <select class="form-control">
                  <option value="">Selecione</option>

              </select>
             </div>
       
                
            </div>
             
            <div class="col-md-3 form-group">
                <label for="telefoneInstituicao">Telefone da Instituição:</label>
                <input type="text" name="telefoneInstituicao" class="form-control"> 
            </div>

           
            <div class="col-md-12">
                <h4 class="page-header">Gestor Responsável</h4> 
            </div>

            <div class="form-group">    

                <div class="col-md-3 form-group">
                    <label for="nomeGestor">Nome:</label>
                    <input type="text" name="nomeGestor"  class="form-control" > 
               </div>

    <div id="resultado" style="display: none">
            <div class="row">
             <div class="col-md-5 form-group">
                <label for="cpfGestor">CPF:</label>
                <input type="text" name="cpfGestor"  class="form-control" > 
             </div>
           </div>  
            
            <div class="col-md-5 form-group">
                <label for="sexo">Sexo</label>
                <input type="text" name="sexo"  class="form-control" > 
            </div>
        
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="dataNascGestor">Data de Nascimento:</label>
                    <input type="text" id="datepicker" name="dataNascGestor" class="form-control"> 
                </div>
            </div>
             <div claa="row">
                <div class="col-md-3 form-group">
                    <label for="cepGestor">CEP:</label>
                    <input type="text" name="cepGestor" class="form-control"> 
               </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="enderecoInstituicao">Endereço:</label>
                    <input type="text" name="enderecoInstituicao"  class="form-control"> 
                </div>
                
                <div class="col-md-5 form-group">
                    <label for="enderecoInstituicao">Número:</label>
                    <input type="text" name="enderecoInstituicao"  class="form-control"> 
                </div>
                
                <div class="col-md-3 form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control"> 
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="cargo">Cidade:</label>
                    <input type="text" name="cargo" class="form-control"> 
            </div>
   
            <div class="col-md-4 form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" class="form-control"> 
            </div>
                
         <div class="col-md-4 form-group">
                    <label for="estado" >Estado:</label>
                   <select class="form-control">
                       <option value="">Selecione</option>

                   </select>
        </div>
            <div class="col-md-3 form-group">
                  <label for="uf">UF:</label>
                  <select class="form-control">
                      <option value="">Selecione</option>

                  </select>
            </div>
         </div>
             
            <div class="col-md-3 form-group">
                <label for="telefoneGestor">Telefone:</label>
                <input type="text" name="telefoneGestor" class="form-control"> 
            </div>
        
        <div class="col-md-4 form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" class="form-control"> 
        </div>

            </div>
        </div>
        
            
   </div>
   
        
   
      
      
        
          
                     
    
  <a href="index.php" class="btn btn-warning" role="button">Voltar</a>
  <button type="submit" id="conteudo" class="btn btn-info">Enviar</button>
    </div>
                       
          
                </div>
                    </div>
                
</form>



 


                  
                