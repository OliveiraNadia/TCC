<?php include"includes/header.php"; ?>
<?php include"includes/menuAdm.php"; ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-10">
                 <h1 class="page-header">Usuários</h1>  
            </div>
            
            
            
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                    <th>Código:</th>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Status:</th>
                    <th>Perfil:</th>
                    <th>Sexo:</th>
                    <th>RA:</th>
                    <th>Data de Nascimento</th>
                    
                    </tr>
                    <?php foreach($usuarios as $usu){ ?>
                    <tr>
                        <td><?= $usu->idUsuarios; ?></td>
                        <td><?= $usu->nomeUsuarios; ?></td>
                        <td><?= $usu->emailUsuarios; ?></td>
                    <td><?= $usu->statusUsuarios ==1?'Ativo':'Inativo' ?></td>
<!--                       Arrumar aqui  <td><//?= $usu->perfilUsuarios ==1?'Professor':'Administrador'?></td>-->
                    <td><?= $usu->perfilUsuarios ==1?'Professor':'Aluno'?></td>
                    <td><?= $usu->perfilUsuarios;?></td>
                        <td><?= $usu->sexoUsuarios;?></td>
                        <td><?= $usu->dataNascUsuarios;?></td>
                        <td><?= $usu->raUsuarios;?></td>
                        <td><a href="<?= base_url('usuario/atualizar/'. $usu->idUsuarios)?>" class="btn btn-primary btn-group">Atualizar</a></td>
                        <td><a href="<?php echo base_url('usuario/excluir/'.$usu->idUsuarios) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja mesmo excluir o usuário?');">Excluir</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

          
          </div>    
      
      
<?php include"includes/footer.php";?>