
function validaForm_Candidato(frm) {


    if(frm.nome_candidato.value()== "" || frm.nome_candidato.value() == null || frm.nome_candidato.value().lenght < 4) {  
        alert("Por favor, indique o seu nome.");
        frm.nome.focus();
        return false;
    } 
      if(frm.nome_candidato.value().value.lenght < 30 ) {  
        alert("O nome do aluno deve possuir, pelo menos, 30 caracteres.");
        frm.nome.focus();
        return false;
    }
   
  
   if(frm.sexo <> "Maculino" && frm.sexo <> "Maculino" || ){  
       alert("Sexo inválido, informe novamente");  
   }
  
  
   if(frm.dia < 1 ||  frm.dia > 31 ){  
       alert("Valor incorreto, por favor insira um dia válido");  
   }
   
   if(frm.mes < 1 ||  frm.mes > 12 ){  
       alert("Valor incorreto, por favor insira um mês válido");  
   }
   
   
   if(frm.ano < 1950 ||  frm.ano > 2017 ){  
       alert("Valor incorreto, por favor insira um ano válido");  
   }
   

   
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    

 
}