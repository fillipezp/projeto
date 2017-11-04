$(document).ready( function() {
  $("#candidato_form").validate({
    // Define as regras
    
    rules:{    
       nome_candidato:{
    
        required:true, 
        minlength: 3,
        maxlength:100
      },
      
        data:{ 
        minlength: 10,
        required: true
      },
      
        rg:{ 
        required:true,     
        minlength: 10,
        digits: true
      },
      
        cpf:{
        required:true, 
        minlength:11
       },
 
        linkedin:{
        required:true, 
        email: true
       },
       
        telefone:{
        required:true, 
        minlength:14
       },
       
        logradouro:{
        required:true, 
        minlength:3,
        maxlength:50
       },
       
        numero:{
        required:true, 
        digits:true
       
       },
       
        cidade:{
        required:true, 
        minlength:3,
        maxlength:50
       },
       
        estado:{
        required:true 
       },
       
        cep:{
        required:true, 
        minlength:10
       
       }
      
 
  },
      
      messages:{
          
      nome_candidato:{
      required: " Campo obrigatório",    
      minlength: " Tamanho mínimo:  10 caracteres",
      maxlength: " Tamanho máximo: 100 caracteres"
      },
      
      data:{
          
      required: " Campo obrigatório",  
      minlength: " Tamanho mínimo:  10 caracteres "
      },
      
      rg:{
      required: " Campo obrigatório",  
      minlength: " Tamanho mínimo:  10 caracteres",
      digits: "Insira apenas números"
      },
     
      cpf:{
      required: " Campo obrigatório",  
      minlength: " Insira um CPF válido"
      },
      
      linkedin:{
      required: " Campo obrigatório",  
      email: " Insira um email válido"
      },
      
      telefone:{
      required: " Campo obrigatório",  
      minlength: " Insira um telefone válido"
      },
      
      logradouro:{
      required: " Campo obrigatório",  
      minlength: " Tamanho mínimo:  3 caracteres",
      maxlength: " Tamanho máximo: 50 caracteres"
      },
      
      numero:{
      required: " Campo obrigatório",  
      digits: " Somente números"
      },
      
      cidade:{
      required: " Campo obrigatório",  
      minlength: " Tamanho mínimo:  3 caracteres",
      maxlength: " Tamanho máximo: 50 caracteres"
      },
      
      estado:{
      required: " Selecione um estado" 
      
      },
       
      cep:{
      required: " Campo obrigatório",  
      minlength: " Insira um cep válido"
     
      }
      
      
      }
      
    
      
      
      
      
      
      
      
   
    
  });
});