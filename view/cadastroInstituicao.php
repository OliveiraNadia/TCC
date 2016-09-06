<script src="view/js/cadstroIntituicao.js"></script>
<script src="view/js/calendario.js"></script>



<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                 <h2 class="page-header">Cadastre sua Instituição</h2>  
            </div>
            <form id="formCadastro">
                <div class="col-md-10">
                    <div class="form-group">    
                
               <div class="col-md-3 form-group">
                    <label for="codIES">Código IES:</label>
                    <input type="text" name="codIES"  class="form-control" > 
              </div>
                        
<!--    <div id="resultado" style="display: none">-->
             <div class="row">
              <div class="col-md-5 form-group">
                    <label for="nomeInstituicao">Nome da Instituição:</label>
                    <input type="text" name="nomeInstituicao" id="senhaAntiga" class="form-control"> 
              </div>
            </div>   
           
              <div class="col-md-3 form-group">
                  <label for="enderecoInstituicao">Endereço:</label>
                  <input type="text" name="enderecoInstituicao"  class="form-control"> 
              </div>
             
                    
              <div class="row">
              <div class="col-md-5 form-group">
                    <label for="enderecoInstituicao">Número:</label>
                    <input type="text" name="enderecoInstituicao"  class="form-control"> 
              </div>
              </div>
                    
              
              <div class="col-md-3 form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control"> 
              </div>

                <div class="row">
              <div class="col-md-5 form-group">
                   <label for="tipoInstituicao">Tipo de Instituição:</label>
                   <input type="text" name="tipoInstituicao" class="form-control"> 
              </div>
              </div>
     
<!--           copia-->
<div class="col-md-12">
    <h4 class="page-header">Gestor Responsável</h4> 
</div>
            
            <form id="formCadastro">
                <div class="col-md-10">
                    <div class="form-group">    
                
               <div class="col-md-3 form-group">
                    <label for="nomeGestor">Nome:</label>
                    <input type="text" name="nomeGestor"  class="form-control" > 
              </div>
                        
<!--            <div id="resultado" style="display: none">-->
             <div class="row">
              <div class="col-md-5 form-group">
                    <label for="cpfGestor">CPF:</label>
                    <input type="text" name="cpfGestor"  class="form-control" > 
              </div>
            </div>   
           
              <div class="col-md-3 form-group">
                    <label for="dataNascGestor">Data de Nascimento:</label>
                    <input type="text" id="datepicker" name="dataNascGestor" class="form-control"> 
              </div>
             
                    
              <div class="row">
              <div class="col-md-5 form-group">
                    <label for="enderecoGestor">Endereço:</label>
                    <input type="text" name="enderecoGestor"  class="form-control"> 
              </div>
              </div>
          
            <div class="col-md-3 form-group">
                    <label for="cepGestor">CEP:</label>
                    <input type="text" name="cepGestor" class="form-control"> 
              </div>
             <div class="row">
            <div class="col-md-3 form-group">
                          <label for="cargo">Cidade:</label>
                          <input type="text" name="cargo" class="form-control"> 
                          </div>
                 
            <div class="col-md-3 form-group">
                <label for="estado">Estado:</label>
               <select class="form-control">
                   <option value="">Selecione</option>
                   <option value="AC">Acre</option>
                   <option value="AL">Alagoas</option>
                   <option value="AP">Amapá</option>
                   <option value="AM">Amazonas</option>
                   <option value="BA">Bahia</option>
                   <option value="CE">Ceará</option>
                   <option value="DF">Distrito Federal</option>
                   <option value="ES">Espirito Santo</option>
                   <option value="GO">Goiás</option>
                   <option value="MA">Maranhão</option>
                   <option value="MS">Mato Grosso do Sul</option>
                   <option value="MT">Mato Grosso</option>
                   <option value="MG">Minas Gerais</option>
                   <option value="PA">Pará</option>
                   <option value="PB">Paraíba</option>
                   <option value="PR">Paraná</option>
                   <option value="PE">Pernambuco</option>
                   <option value="PI">Piauí</option>
                   <option value="RJ">Rio de Janeiro</option>
                   <option value="RN">Rio Grande do Norte</option>
                   <option value="RS">Rio Grande do Sul</option>
                   <option value="RO">Rondônia</option>
                   <option value="RR">Roraima</option>
                   <option value="SC">Santa Catarina</option>
                   <option value="SP">São Paulo</option>
                   <option value="SE">Sergipe</option>
                   <option value="TO">Tocantins</option>
               </select>
              </div>
                 
             </div>
                

                    </div>
    
        </div>
<!--       
              </div>-->
     
    </div>
                    </div>
         <button type="submit" id="conteudo" class="btn btn-info">Pesquisar</button>
          <a href="index.php" class="btn btn-warning" role="button">Voltar</a>
  </div>
</div>

     