var eventoInicial = {
    
    bt_instituicao: function(){
        $.post("controller/cadastroInstituicao.php", function(retorno){
            $("#conteudo").html(retorno);
        });
    },
    
    bt_logar: function(){
        // Montar aqui
        console.log("to aqui");
    },
    
    
    bt_enter: function(){
        var me = this;
        
        $("#email").keypress(function(e){
            if(e.which === 13){
                me.validar();
            }
        });
        
         $("#senha").keypress(function(e){
            if(e.which === 13){
                me.validar();
            }
        });
    },
    
    validar: function(){
        var me    = this,
            email = $.trim($("#email").val()),
            senha = $.trim($("#senha").val());
    
            if(email !== "" && senha !== ""){
                $.post("controller/login.php", "&email="+email+"&senha="+senha, function(retorno){
                    if(retorno === "sucesso"){
                       $(location).attr("href", "home.php"); 
                    } else {
                      alert ("Email ou senha errada");  
                    }
                });
            } else {
                alert ("Informe o email e a senha");
            }
    }
};

$(document).ready(function(){
    
});
