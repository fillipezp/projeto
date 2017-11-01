$(document).ready( function() {
  $("#empresa_form").validate({
    // Define as regras
    rules:{
       razao_social:{
    
        required:true, 
        minlength: 3,
        maxlength:100
      },
      
        nfantasia:{ 
        minlength: 3,
        maxlength:100
      },
      
        ramo:{ 
        required:true,     
        minlength: 5,
        maxlength:100
      },
      
         cnpj:{
        required:true, 
        minlength:18
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
          
      razao_social:{
      required: " Campo obrigatório",    
      minlength: " Tamanho mínimo:  3 caracteres"  ,
      maxlength: " Tamanho máximo: 100 caracteres"
      },
      
      nfantasia:{
       
      minlength: " Tamanho mínimo:  3 caracteres",
      maxlength: " Tamanho máximo: 100 caracteres"
      },
      
      ramo:{
      required: " Campo obrigatório",  
      minlength: " Tamanho mínimo:  3 caracteres",
      maxlength: " Tamanho máximo: 100 caracteres"
      },
      
      cnpj:{
      required: " Campo obrigatório",  
      minlength: " Insira um CNPJ válido"
      },
      
      email:{
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
      minlength: " Insira um cep válido",
     
      }
      
      
         }
      
    
      
      
      
      
      
      
      
   
    
  });
});